<?php
if(isset($_POST["submit"])){
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyinput($firstname, $lastname, $email, $password)!== false){
        header("location: ../login.php?error=emptyinput");
        exit();
    }

    if(invalidEmail($email)!== false){
        header("location: ../login.php?error=invalidemail");
        exit();
    }

    if(emailExists($conn, $email)!== false){
        header("location: ../login.php?error=emailinuse");
        exit();
    }

    createUser($conn, $firstname, $lastname, $email, $password);

}
else{
    header("location: ../login.php");
}