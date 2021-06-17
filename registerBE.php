<?php

include "connection.php";


if(isset($_POST['register'])){
    
    $user_name = $_POST['Username'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $Cpassword = $_POST['Confirm-password'];

    if($password == $Cpassword){
        $sql = "insert into user_info(username , email , password) values ('$user_name', '$email' , '$password')";
        if ($conn->query($sql) === TRUE){
            echo "COMPLETE!";
        } else {
            echo "FAILED!";
        };
    } else {
        echo "PASSWORD DIDN'T MATCH!";
    };
};


?>