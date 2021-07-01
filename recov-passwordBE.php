<?php

include "connection.php";

if (isset($_POST['confirm-R-password'])){

    $email = $_POST['email'];
    $QFpassword = $_POST['QFpassword'];
    $AFpassword = $_POST['AFpassword'];

    // AVOID SQL INJECTION
    $email = stripcslashes($email);
    $QFpassword = stripcslashes($QFpassword);
    $AFpassword = stripcslashes($AFpassword);

 
    $email = mysqli_real_escape_string($conn, $email);
    $QFpassword = mysqli_real_escape_string($conn, $QFpassword);
    $AFpassword = mysqli_real_escape_string($conn, $AFpassword);


    if (!empty($email) && !empty($QFpassword) && !empty($AFpassword)){
        $sql = mysqli_query($conn, "select email from user_info where email = '$email'");
        $rows = mysqli_fetch_array($sql);

        if ($rows['email'] != $email){
            header("location: recov-password?wrong");
        } else {
            $sqli = "update user_info set QFpassword = '$QFpassword', AFpassword = '$AFpassword' where email = '$email'";
            if ($conn->query($sqli) === TRUE){
                echo "berhasil masuk";
            } else {
                echo "ndk bisa masuk";
            };
        };
    };


};