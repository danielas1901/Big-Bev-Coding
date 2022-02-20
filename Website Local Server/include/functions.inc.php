<?php

function emptyinput($firstname, $lastname, $email, $password) {
    $result;
    if (empty($firstname) || empty($lastname) || empty($email) || empty($password)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidEmail($email){
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function emailExists($conn, $email){
    $sql = "SELECT * FROM users WHERE usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../login.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);

}

function createUser($conn, $firstname, $lastname, $email, $password){
    $sql = "INSERT INTO users (usersFirstName, usersLastName, usersEmail, usersPassword) VALUES(?, ?, ?, ?) ;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../login.php?error=stmtfailed");
        exit();
    }

    $hashedpass = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $firstname, $lastname, $email, $hashedpass);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../login.php?error=none");
    exit();

}

function emptyinputlogin($email, $password) {
    $result;
    if (empty($email) || empty($password)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function loginUser($conn, $email, $password){
    $emailExist = emailExists($conn, $email);

    if($emailExist === false){
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    $passhashed = $emailExist["usersPassword"];
    $checkPass = password_verify($password, $passhashed);

    if($checkPass === false){
        header("location: ../login.php?error=wronglogin");
        exit();
    }
    else if($checkPass === true){
        session_start();
        $_SESSION["usersid"] = $emailExist["usersId"];
        $_SESSION["usersname"] = $emailExist["usersFirstName"];
        header("location: ../main.php");
        exit();
    }
}