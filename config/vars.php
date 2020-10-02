<?php
define("SITE_URL", "https://solution4u.herokuapp.com/");
define("SITE_THEME_URL", SITE_URL."themes/solution4u/");
define("SITE_THEME_URL_ICON", SITE_URL."themes/solution4u/images/icons/");

$view = $seccion = "home";
if(isset($_GET["sec"])){
    $view = $seccion = $_GET["sec"];
    if(isset($_GET["sub"])){
        $view = $_GET["sub"];
    }
}
$linkMenu = "";
$linkActivo = "";
if($seccion != "home"){
    $linkMenu = SITE_URL;
    $linkActivo = " active";
}