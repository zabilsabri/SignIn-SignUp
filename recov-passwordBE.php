<?php

session_start();
include "connection.php";

if (isset($_POST['confirm-R-password'])){

    $emails = $_SESSION['email'];
    $QFpassword = $_POST['QFpassword'];
    $AFpassword = $_POST['AFpassword'];

    // AVOID SQL INJECTION
    $QFpassword = stripcslashes($QFpassword);
    $AFpassword = stripcslashes($AFpassword);

 
    $QFpassword = mysqli_real_escape_string($conn, $QFpassword);
    $AFpassword = mysqli_real_escape_string($conn, $AFpassword);


    if (!empty($QFpassword) && !empty($AFpassword)){
        $sql = mysqli_query($conn, "select email from user_info where email = '$emails'");
        $rows = mysqli_fetch_array($sql);

        $sqli = "update user_info set QFpassword = '$QFpassword', AFpassword = '$AFpassword' where email = '$emails'";

        if ($conn->query($sqli) === TRUE){
            session_destroy();
            header('location: register.php?success');
        } else {
            echo "PHP FAILED";
        };
    };
    
};