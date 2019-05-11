<?php
session_start();
// initializing variables
$username='';
$cin = 0;
$email    = "";
$errors = array();
$password_1 = '';
$hash_pass= '';
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'travelapp');
// REGISTER USER
if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $nom = mysqli_real_escape_string($db, $_POST['nom']);
    $prenom = mysqli_real_escape_string($db, $_POST['prenom']);
    $adr = mysqli_real_escape_string($db, $_POST['adr']);
    $sexe = mysqli_real_escape_string($db, $_POST['sexe']);
    $tel = mysqli_real_escape_string($db, $_POST['tel']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $cin = mysqli_real_escape_string($db, $_POST['cin']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
//Hashing Password
$hash_pass= password_hash($password, PASSWORD_DEFAULT);
    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($username)) { array_push($errors, "username is required"); }
    if (empty($cin)) { array_push($errors, "cin is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password_1)) { array_push($errors, "Password is required"); }
    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
    }
    // first check the database to make sure
    // a user does not already exist with the same cin and/or email
    $user_check_query = "SELECT * FROM client WHERE cin='$cin' OR username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    if ($user) { // if user exists
        if ($user['cin'] === $cin) {
            array_push($errors, "cin already exists");
        }
        if ($user['username'] === $username) {
            array_push($errors, "username already exists");
        }
        if ($user['email'] === $email) {
            array_push($errors, "email already exists");
        }
    }
    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $query = "INSERT INTO client (cin, nom, prenom, adresse, tel, sexe, email, password, username) 
              VALUES('$cin', '$nom', '$prenom', '$adr','$tel','$sexe', '$email','$hash_pass','$username')";
        echo ($query);
        mysqli_query($db, $query);
        $_SESSION['username'] = $username;
        $_SESSION['cin'] = $cin;
        $_SESSION['success'] = "You are now logged in";
        header('location: home.php');
    } else {
        echo ($errors);
    }
}
// LOGIN USER
if (isset($_POST['login_user'])) {
    $cin = mysqli_real_escape_string($db, $_POST['cin']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    if (empty($cin)) {
        array_push($errors, "cin is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM client WHERE cin='$cin' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['cin'] = $cin;
            $_SESSION['success'] = "You are now logged in";
            header('location: home.php');
        }else {
            array_push($errors, "Wrong cin/password combination");
        }
    }
}
?>