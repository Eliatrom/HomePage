<?php
return array("#tableName"=>"Reseau","#primaryKeys"=>array("id"),"#manyToOne"=>array("site"),"#fieldNames"=>array("id"=>"id","ip"=>"ip","site"=>"idSite"),"#fieldTypes"=>array("id"=>"string","ip"=>"string","site"=>"string"),"#nullable"=>array(),"#notSerializable"=>array("site"),"#joinColumn"=>array("site"=>array("className"=>"models\\Site","name"=>"idSite","nullable"=>"")),"#invertedJoinColumn"=>array("idSite"=>array("member"=>"site","className"=>"models\\Site")));
