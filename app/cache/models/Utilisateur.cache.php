<?php
return array("#tableName"=>"Utilisateur","#primaryKeys"=>array("id"),"#manyToOne"=>array("site","statut"),"#fieldNames"=>array("id"=>"id","login"=>"login","password"=>"password","elementsMasques"=>"elementsMasques","fondEcran"=>"fondEcran","couleur"=>"couleur","ordre"=>"ordre","site"=>"idSite","statut"=>"idStatut","lienwebs"=>"lienwebs","moteurs"=>"moteurs"),"#fieldTypes"=>array("id"=>"string","login"=>"string","password"=>"string","elementsMasques"=>"string","fondEcran"=>"string","couleur"=>"string","ordre"=>"string","site"=>"string","statut"=>"string","lienwebs"=>"string","moteurs"=>"string"),"#nullable"=>array(),"#notSerializable"=>array("site","statut","lienwebs","moteurs"),"#oneToMany"=>array("lienwebs"=>array("mappedBy"=>"utilisateur","className"=>"models\\Lienweb"),"moteurs"=>array("mappedBy"=>"utilisateur","className"=>"models\\Moteur")),"#joinColumn"=>array("site"=>array("className"=>"models\\Site","name"=>"idSite","nullable"=>""),"statut"=>array("className"=>"models\\Statut","name"=>"idStatut","nullable"=>"")),"#invertedJoinColumn"=>array("idSite"=>array("member"=>"site","className"=>"models\\Site"),"idStatut"=>array("member"=>"statut","className"=>"models\\Statut")));
