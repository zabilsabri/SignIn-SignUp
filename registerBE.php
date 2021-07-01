<?php

include "connection.php";


if(isset($_POST['register'])){
    
    $user_name = $_POST['Username'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $Cpassword = $_POST['Confirm-password'];


    // AVOID SQL INJECTION 
    $user_name = stripcslashes($user_name);
    $email = stripcslashes($email);
    $password = stripcslashes($password);
    $Cpassword = stripcslashes($Cpassword);

    $user_name = mysqli_real_escape_string($conn, $user_name);
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);
    $Cpassword = mysqli_real_escape_string($conn, $Cpassword);

    if (!empty($user_name) && !empty($email) && !empty($password) && !empty($Cpassword)){
        $sqli = mysqli_query($conn, "select id, email from user_info where email = '$email'");
        $rows = mysqli_fetch_array($sqli);

        if ($rows['email'] == $email){
            header('location: register.php?accalready');
        } else {
            if($password == $Cpassword){
                $sql = "insert into user_info(username , email , password) values ('$user_name', '$email' , '$password')";
                if ($conn->query($sql) === TRUE){
                    header('location: recov-password.php');
                };
            } else {
                header('location: register.php?passfailed');
            };
        }
    } else {
        header('location: register.php?empty');
    };

    
};


?>