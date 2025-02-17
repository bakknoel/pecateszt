<?php
require_once("fishingrodrestkezelo.php");

$view ="";
if(isset($_GET["view"]))

   $view = $_GET["view"];

switch($view){
    case "all";
    
    $FishingRodrest = new FishingRodrestKezelo();
    $FishingRodrest->getallFrod();
    break;

    case"single";
    $FishingRodrest = new FishingRodrestKezelo();
    $FishingRodrest->getFRodById($_GET["id"]);
    break;

    case "tipus";
    $FishingRodrest = new FishingRodrestKezelo();
    $FishingRodrest -> getFrodByType($_GET["tid"]);
    break;

    default:
    $FishingRodrest = new FishingRodrestKezelo();
   
}
?>