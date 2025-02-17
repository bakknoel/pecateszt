<?php

require_once("restVezerlo.php");

$FishingRodrest = new fishingRodRestKezelo();
echo "Összes horgászbot lekérdezése: ";
$_GET["view"] = "all";
$FishingRodrest-> getAllFRod();
echo "\n";

$_GET["view"] = "single";
$_GET["id"] = 1;
$FishingRodrest->getFRodById($_GET["id"]);
echo "\n";

$_GET["view"] = "single";
$_GET["id"] = 9999;
$FishingRodrest->getFRodById($_GET["id"]);
echo "\n";

$_GET["view"] = "tipus";
$_GET["tid"] = "Rakos";
$FishingRodrest->getFRodByType($_GET["tid"]);
echo "\n";

$_GET["view"] = "tipus";
$_GET["tid"] = "Unknown";
$FishingRodrest->getFRodByType($_GET["tid"]);
echo "\n";

//Teszt hibás kérés
$_GET["view"] = "invalid";
$FishingRodrest->getFault();

?>