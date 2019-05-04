<?php
//Connection

$host= "localhost";
$user= "root";
$password="";
$database = "travelapp";

try {
$con = mysqli_connect($host, $user, $password, $database);
} catch (Exception $ex){
	echo 'Erreur Connection';
}
?>