<?php

include 'connection.php';

if (isset($_POST['login'])){
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = mysqli_query($conn, "select email, password from user_info where email = '$email' and password = '$password'");

    $row = mysqli_fetch_array($sql);
    if ($row['email'] == $email && $row['password'] == $password){
        echo "LOGIN SUCCESS!!";
    } else {
        echo "LOGIN FAILED!";
    };
};


?>