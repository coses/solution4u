<?php
$json = file_get_contents('articulos/articulos.json');
$json_array = json_decode($json, true); // suppose your json data variable name is $json then decode it and assing to a new variable $json_array
   
foreach($json_array as $json_arr){ // now iterate through that array
   if($json_arr['link'] == "blog/".$_GET["url"]){ // check all conditions
      $articulo = $json_arr; // if all true then print value.
   }   
}
?>