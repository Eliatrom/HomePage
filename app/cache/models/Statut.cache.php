<?php
return array("#tableName"=>"Statut","#primaryKeys"=>array("id"),"#manyToOne"=>array(),"#fieldNames"=>array("id"=>"id","libelle"=>"libelle","utilisateurs"=>"utilisateurs"),"#fieldTypes"=>array("id"=>"string","libelle"=>"string","utilisateurs"=>"string"),"#nullable"=>array(),"#notSerializable"=>array("utilisateurs"),"#oneToMany"=>array("utilisateurs"=>array("mappedBy"=>"statut","className"=>"models\\Utilisateur")));
