<?php

include 'connection.php';

if (isset($_POST['login'])){
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    // AVOID SQL INJECTION
    $email = stripcslashes($email);
    $password = stripcslashes($password);

    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

    if(!empty($email) && !empty($password)){
        $sql = mysqli_query($conn, "select email, password from user_info where email = '$email' and password = '$password'");

        $row = mysqli_fetch_array($sql);
        if ($row['email'] == $email && $row['password'] == $password){
            echo "LOGIN SUCCESS!!";
        } else {
            header('location: login.php?wrong');
        };
    } else {
        header('location: login.php?empty');
    };
    
};


?>