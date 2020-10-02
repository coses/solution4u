<?php
$json = file_get_contents('articulos/articulos.json');
$blogList = json_decode($json, true);

function custom_echo($x, $length)
{
  if(strlen($x)<=$length)
  {
    echo $x;
  }
  else
  {
    $y=substr($x,0,$length) . '...';
    echo $y;
  }
}
?>