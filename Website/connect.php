//IGNORE THIS

<?php
    $firstname = $_POST['firstname']
    $lastname = $_POST['lastname']
    $email = $_POST['email']
    $password = $_POST['password']

    //database connection
    $conn = new mysqli('localhost','root','','BigBev')
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into registration(firstname, lastname, email, passsword) values(?, ?, ?, ?)");
        $stmt->bind_param("ssss", $firstname, $lastname, $email, $password)
        $stmt->execute();
        echo "registration Successfull";
        $stmt->close();
        $conn->close();
    }
?>