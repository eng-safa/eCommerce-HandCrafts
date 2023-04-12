<?php

$host='localhost';
$user='root';
$pass='';
$db='handicrafts';

try{
$con=@mysqli_connect($host,$user,$pass,$db);
//echo "You Are Connection DataBase";
}
catch(Exception $e)
{
echo "Failad Connect".$e->get_Message();
}

if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    //you need to exit the script, if there is an error
    exit();
}

?>