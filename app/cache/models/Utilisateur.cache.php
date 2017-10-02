<?php
return array("#tableName"=>"Utilisateur","#primaryKeys"=>array("id"),"#manyToOne"=>array("site","statut"),"#fieldNames"=>array("id"=>"id","login"=>"login","password"=>"password","elementsMasques"=>"elementsMasques","fondEcran"=>"fondEcran","couleur"=>"couleur","ordre"=>"ordre","site"=>"idSite","statut"=>"idStatut","lienwebs"=>"lienwebs","moteurs"=>"moteurs"),"#nullable"=>array(),"#notSerializable"=>array("site","statut","lienwebs","moteurs"),"#oneToMany"=>array("lienwebs"=>array("mappedBy"=>"utilisateur","className"=>"models\Lienweb"),"moteurs"=>array("mappedBy"=>"utilisateur","className"=>"models\Moteur")),"#joinColumn"=>array("site"=>array("className"=>"models\Site","name"=>"idSite","nullable"=>false),"statut"=>array("className"=>"models\Statut","name"=>"idStatut","nullable"=>false)),"#invertedJoinColumn"=>array("idSite"=>array("member"=>"site","className"=>"models\Site"),"idStatut"=>array("member"=>"statut","className"=>"models\Statut")));