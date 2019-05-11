<?php
include 'server.php';
//Connection

$host= "localhost";
require_once'condb.php';
//Variables
$members = $_POST['member'];

if ($members == 2) {
    $Nom2 = $_POST['perNom2'];
    $Prenom2 = $_POST['perPrenom2'];
    $Age2 = $_POST['perAge2'];
} else if ($members == 3) {
    $Nom3 = $_POST['perNom3'];
    $Prenom3 = $_POST['perPrenom3'];
    $Age3 = $_POST['perAge3'];
} else if ($members == 4) {
    $Nom4 = $_POST['perNom4'];
    $Prenom4 = $_POST['perPrenom4'];
    $Age4 = $_POST['perAge4'];
} else {
    $Nom5 = $_POST['perNom5'];
    $Prenom5 = $_POST['perPrenom5'];
    $Age5 = $_POST['perAge5'];
}
    $Cin = $_POST['inputCIN'];
    $Moyt = $_POST['inputMoyT'];
    $NbrPe = $_POST['member'];
    $Datearr = $_POST['inputDateA'];
    $DateD = $_POST['inputDateD'];









//Queries
if ($members == 2){
$sql="INSERT INTO personne(nom, prenom, age) VALUES ('$Nom2','$Prenom2', '$Age2'); ";}
else if ($members == 3){
$sql="INSERT INTO personne(nom, prenom, age) VALUES ('$Nom2','$Prenom2, '$Age2') ('$Nom3','$Prenom3', '$Age3'); ";}
else if ($members == 4){
$sql="INSERT INTO personne(nom, prenom, age) VALUES ('$Nom2','$Prenom2', '$Age2') ('$Nom3','$Prenom3','$Age3') ('$Nom4','$Prenom4','$Age4'); ";}
else {
$sql="INSERT INTO personne(nom, prenom, age) VALUES ('$Nom2','$Prenom2','$Age2') ('$Nom3','$Prenom3','$Age3') ('$Nom4','$Prenom4','$Age4')
('$Nom5','$Prenom5','$Age5'); ";}
$result = mysqli_query($con,$sql);

    $sqls= " SELECT * from circuit;";
    $ress= mysqli_query($con, $sqls) or die("Erreur Requete: $sql");
    $rows= mysqli_fetch_array($ress);

mysqli_query($con,"INSERT INTO reservation(datedep, datearr, nombrepe, cin, MoyenT) VALUES ('$DateD', '$Datearr', '$NbrPe', '$Cin', '$Moyt')");
if($result){
    echo "true" ;
    header('location: reserved.php?Id='.$rows['Id']);
}else{
    echo "false" ;
}
echo "<br>" ;
echo $sql ;
mysqli_close($con);
?>