<?php

return array(
  '#namespace' => 'controllers',
  '#uses' => array (
  'JArray' => 'Ajax\\service\\JArray',
  'DAO' => 'micro\\orm\\DAO',
  'JsUtils' => 'Ajax\\JsUtils',
  'RequestUtils' => 'micro\\utils\\RequestUtils',
  'Utilisateur' => 'models\\Utilisateur',
),
  '#traitMethodOverrides' => array (
  'controllers\\UsersController' => 
  array (
  ),
),
  'controllers\\UsersController' => array(
    array('#name' => 'property', '#type' => 'mindplay\\annotations\\standard\\PropertyAnnotation', 'type' => 'JsUtils', 'name' => 'jquery')
  ),
);

