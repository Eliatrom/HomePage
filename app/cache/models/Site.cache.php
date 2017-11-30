<?php
return array("#tableName"=>"Site","#primaryKeys"=>array("id"),"#manyToOne"=>array(),"#fieldNames"=>array("id"=>"id","nom"=>"nom","latitude"=>"latitude","longitude"=>"longitude","ecart"=>"ecart","fondEcran"=>"fondEcran","couleur"=>"couleur","ordre"=>"ordre","options"=>"options","lienwebs"=>"lienwebs","moteurs"=>"moteurs","reseaus"=>"reseaus","utilisateurs"=>"utilisateurs"),"#fieldTypes"=>array("id"=>"string","nom"=>"string","latitude"=>"string","longitude"=>"string","ecart"=>"string","fondEcran"=>"string","couleur"=>"string","ordre"=>"string","options"=>"string","lienwebs"=>"string","moteurs"=>"string","reseaus"=>"string","utilisateurs"=>"string"),"#nullable"=>array(),"#notSerializable"=>array("lienwebs","moteurs","reseaus","utilisateurs"),"#oneToMany"=>array("lienwebs"=>array("mappedBy"=>"site","className"=>"models\\Lienweb"),"moteurs"=>array("mappedBy"=>"site","className"=>"models\\Moteur"),"reseaus"=>array("mappedBy"=>"site","className"=>"models\\Reseau"),"utilisateurs"=>array("mappedBy"=>"site","className"=>"models\\Utilisateur")));
