<?php
require_once("FishingRodrestKezelo.php");

//Példányosítás...
$fishingRodRestKezelo = new FishingRodrestKezelo();

//teszt
//Összes horgászbot lekérdezésének tesztje
//son-ben van, ki szeretném íratni
echo json_encode([
    "message" => "Összes horgászbotra vonatkozó teszt: \n",
    "data" =>$fishingRodRestKezelo->getAllFRod()
]);
echo "<br>";


echo json_encode([
    "message" => "Horgászbotra ID alapján: \n",
    "data" =>$fishingRodRestKezelo->getFRodById(1)
]);
echo "<br>";


echo json_encode([
    "message" => "Horgászbot nem létező ID alapján \n",
    "data" =>$fishingRodRestKezelo->getAllFRod(9999)
]);
echo "<br>";

echo json_encode([
    "message" => "Horgászbot By type \n",
    "data" =>$fishingRodRestKezelo->getFRodByType("Rakos")
]);
echo "<br>";

echo json_encode([
    "message" => "Horgászbot By Not Existent Type \n",
    "data" =>$fishingRodRestKezelo->getFRodByType("Unknown")
]);


echo "Hibás komplex kérdés";
$fishingRodRestKezelo->getFault();
echo json_encode([
    "message" => "Hibás kérdés \n",
    "data" =>$fishingRodRestKezelo->getFault()
]);

?>