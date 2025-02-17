<?php

class DBController
{
private $conn = null;

private $user ="root";

private $host = "localhost";

private $password = "";

private $database = "pecabot";

function __construct()
{
    
    $conn = $this->connectDB();
    if(!empty($conn))
    {
        $this->conn = $conn;
    }

}
function connectDB()
{
        $conn = mySqli_connect($this->host,$this->user,$this->password,$this->database);
        return $conn;
}
function executeSelectQuery($query)
{
        $result = mysqli_query($this->conn,$query);
        while($row=mysqli_fetch_assoc($result))
        {
            $resultset[] = $row;
        }
        if(!empty($resultset))
        {
            return $resultset;
        }
}
function closeDB()
{
    if(!empty($this->conn))
    {
        mysqli_close($this->conn);
        $this->conn = "";
    }
}
}
?>
