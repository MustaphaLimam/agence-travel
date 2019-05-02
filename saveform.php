<?php
require_once'condb.php';

//Variables
$Nom = $_POST['inputNom'];
$Prenom = $_POST['inputPrenom'];
$Sexe = $_POST['sexe'];
$Adresse = $_POST['inputAddress'];
$Cin = $_POST['inputCIN'];
$Tel = $_POST['inputTel'];
$Moyt = $_POST['inputMoyT'];
$NbrPe = $_POST['member'];
$Datearr = $_POST['inputDateA'];
$DateD = $_POST['inputDateD'];

//Queries

mysqli_query($con,"INSERT INTO client(cin, nom, prenom, adresse, tel, sexe) VALUES ('$Cin','$Nom','$Prenom','$Adresse','$Tel','$Sexe')");
mysqli_query($con,"INSERT INTO reservation(datedep, datearr, nombrepe, cin, MoyenT) VALUES ('$DateD', '$Datearr', '$NbrPe', '$Cin', '$Moyt')");

mysqli_close($con);
?>