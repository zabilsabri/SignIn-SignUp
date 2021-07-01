<?php

include "connection.php";

if (isset($_POST['send-QFpassword'])){

    $email = $_POST['email'];

    $sql = mysqli_query($conn, "select email, QFpassword, AFpassword from user_info where email = '$email'");
    $row = mysqli_fetch_array($sql);

    if ($row['email'] == $email){
        $to = $row['email'];
        $subject = 'Recover Your Password';
        $message = $_POST['QFpassword'];
        mail($to, $subject, $message);
        if (mail($to, $subject, $message)){
            echo "success";
        } else {
            echo "failed";
        };
    } else {
        echo "email is not defined";        
    };
} else {
    echo "something wrong";
};