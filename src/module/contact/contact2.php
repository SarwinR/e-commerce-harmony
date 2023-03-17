<?php

if (isset($_POST['submit'])) {
    require_once "../database/database.php";
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    $error = submitContact($firstName, $lastName, $email, $comment);

    if ($error){
        echo "<script> 
            alert('Error!');
            window.location.href='../../contactUs2.php'
            </script>";
    }
    else{
        header("Location: ../../contactUs2.php");
    }
}

function submitContact($firstName, $lastName, $email, $comment){
    $sql = "INSERT INTO contact (firstName, lastName, email, comment) VALUES (?, ?, ?, ?)";
    $result = executeQuery($sql, "ssss", [$firstName, $lastName, $email, $comment]);
}

?>