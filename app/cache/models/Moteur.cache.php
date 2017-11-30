<?php
return array("#tableName"=>"Moteur","#primaryKeys"=>array("id"),"#manyToOne"=>array("etablissement","site","utilisateur"),"#fieldNames"=>array("id"=>"id","nom"=>"nom","code"=>"code","etablissement"=>"idEtablissement","site"=>"idSite","utilisateur"=>"idUtilisateur"),"#fieldTypes"=>array("id"=>"string","nom"=>"string","code"=>"string","etablissement"=>"string","site"=>"string","utilisateur"=>"string"),"#nullable"=>array(),"#notSerializable"=>array("etablissement","site","utilisateur"),"#joinColumn"=>array("etablissement"=>array("className"=>"models\\Etablissement","name"=>"idEtablissement","nullable"=>""),"site"=>array("className"=>"models\\Site","name"=>"idSite","nullable"=>""),"utilisateur"=>array("className"=>"models\\Utilisateur","name"=>"idUtilisateur","nullable"=>"")),"#invertedJoinColumn"=>array("idEtablissement"=>array("member"=>"etablissement","className"=>"models\\Etablissement"),"idSite"=>array("member"=>"site","className"=>"models\\Site"),"idUtilisateur"=>array("member"=>"utilisateur","className"=>"models\\Utilisateur")));
