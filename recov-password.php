<?php

session_start();
if (!isset($_SESSION['register'])){
    header('location: register.php?notregister');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>PASSWORD CONFIMATION</title>
</head>

<body>
    <main>
        <div class="R-password-container">
            <div class="R-password-heading-container">
                <h3>RECOVER PASSWORD</h3>
            </div>
            <div class="R-password-exp">
                <p>Choose The Question and Answer It, To Recover Your Password Someday!</p>
            </div>
            <form class="R-password-form" action="recov-passwordBE.php" method="POST">
                <div class="text-box">
                    <select class="R-password-form-content" name="QFpassword" aria-label="Default select example">
                        <option selected>Your first pet's name?</option>
                        <option>Your first teacher's name?</option>
                        <option>Your first girlfriend's name?</option>
                        <option>Your phone's number?</option>
                    </select>                
                </div>
                <div class="text-box">
                    <input type="password" class="form-content" name="AFpassword" placeholder="Answer">
                </div>
                <button type="submit" name="confirm-R-password" class="btn btn-dark">CONFIRM</button>
            </form>
        </div>
    </main>
</body>

</html>