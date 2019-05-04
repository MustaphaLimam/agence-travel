<?php
<<<<<<< HEAD
//Connection

$host= "localhost";
$user= "root";
$password="";
$database = "travelapp";

try {
$con = mysqli_connect($host, $user, $password, $database);
} catch (Exception $ex){
	echo 'Erreur connecton';
}

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

=======
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
>>>>>>> 8b6698e6eec358303f57cb1a1a5eacb637baeb10



//Queries
$sql="INSERT INTO client(cin, nom, prenom, adresse, tel, sexe, email, username, password) VALUES ('$Cin','$Nom','$Prenom','$Adresse','$Tel','$Sexe','','','') ;";
//$result=mysqli_query($con,"INSERT INTO client(cin, nom, prenom, adresse, tel, sexe) VALUES ('$Cin','$Nom','$Prenom','$Adresse','$Tel','$Sexe')");
$result = mysqli_query($con,$sql);

//mysqli_query($con,"INSERT INTO reservation(datedep, datearr, nombrepe, cin, MoyenT) VALUES ('$DateD', '$Datearr', '$NbrPe', '$Cin', '$Moyt')");
if($result){
    echo "true" ;
}else{
    echo "false" ;
}
echo "<br>" ;
echo $sql ;
mysqli_close($con);
?>