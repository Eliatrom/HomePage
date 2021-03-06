<?php
namespace micro\cache\traits;

use micro\cache\ClassUtils;
use micro\cache\parser\RestControllerParser;
use micro\utils\JArray;
use micro\exceptions\RestException;
use micro\utils\FsUtils;

/**
 * @author jc
 * @staticvar array $cache
 *
 */
trait RestCacheTrait{

	private static function initRestCache(&$config,$silent=false) {
		$restCache=[];
		$files=self::getControllersFiles($config);
		foreach ( $files as $file ) {
			if (is_file($file)) {
				$controller=ClassUtils::getClassFullNameFromFile($file);
				$parser=new RestControllerParser();
				$parser->parse($controller,$config);
				if($parser->isRest())
					$restCache=\array_merge($restCache,$parser->asArray());
			}
		}
		self::$cache->store("controllers/rest", "return " . JArray::asPhpArray($restCache, "array") . ";",'controllers');
		if(!$silent){
			echo "Rest cache reset\n";
		}
	}

	public static function getRestRoutes() {
		$result=[];
		$restCache=self::getRestCache();
		foreach ($restCache as $controllerClass=>$restAttributes){
			if(isset($restCache[$controllerClass])){
				$result[$controllerClass]=["restAttributes"=>$restAttributes,"routes"=>self::getControllerRoutes($controllerClass,true)];
			}
		}
		return $result;
	}

	public static function getRestCache() {
		if (self::$cache->exists("controllers/rest"))
			return self::$cache->fetch("controllers/rest");
			throw new RestException("Rest cache does not exist : the file `".FsUtils::cleanPathname(ROOT.DS.self::getCacheDirectory()."controllers/")."rest.cache.php` is missing.\nTry to Re-init Rest cache.");
	}

	public static function getRestResource($controllerClass){
		$cacheControllerClass=self::getRestCacheController($controllerClass);
		if(isset($cacheControllerClass))
			return $cacheControllerClass["resource"];
		return null;
	}

	public static function getRestCacheController($controllerClass){
		$cache=self::getRestCache();
		if(isset($cache[$controllerClass])){
			return $cache[$controllerClass];
		}
		return null;
	}
}