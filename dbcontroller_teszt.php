<?php
ini_set('display_errors' , 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once 'dbcontroller.php';

$db = new DBController();

if($db->connectDB())
{
    echo "Az adatbázis kapcsolat sikeres!<br>"
}

else
{
    echo "Az adadtbázis kapcsolat sikertelen!<br>"
}
$query = "Select * FROM fishingrod";
$result = $db->executeSelectQuery($query);

if ($result == "hiba")
{
    echo "Lekérdezés sikeres<br>"
    echo "<pre>";
    print_r($result);
    echo "</pre";
}

else
{
    echo "Lekérdezés sikertelen!<br>";
}

//Teszteljük a lezárást

$db->closeDB();
echo "Lezárva az adatbázis <br>"
$result = $db->executeSelectQuery($query);


?>