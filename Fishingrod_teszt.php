<?php
require_once("Fishingrod.php");
//példányosítás
$Fishingrod = new Fishingrod();

//összes horgászbot lekérdezése
echo "<h2>Összes horgászbot </h2>";
$allRods = $Fishingrod->getAllFishingrods();
if(!empty($allRods))
{
    foreach($allRods as $rod)
    {
        echo "ID: " . $rod['fr_ID'] ."- Név: " . $rod['name'] . "<br>";
    }
}

else
{
    echo "Nincs találat az összes horgászbot lekérdezésére!";
}

?>