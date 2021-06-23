<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">    
    <link rel="stylesheet" href="style.css">
    <title>REGISTER</title>
</head>

<body>
    <img src="bg/SMAN 11 MAKASSAR.jpeg" class="bg-image" alt="background blur">
    <main>
        <div class="register-container">
            <div class="heading-container">
                <h1>REGISTER</h1>
            </div>
            
            <!----INDICATOR SUCCESS------->
            <?php if (isset($_GET['success'])){ ?>
                <b style="color: green;" class="reg-success">Account Successfully Made</b>
            <?php } ?>

            <!----INDICATOR PASSWORD DIDN'T MATCH------->
            <?php if (isset($_GET['passfailed'])){ ?>
                <b style="color: red;" class="reg-failed">Password Didn't Match!</b>
            <?php } ?>

            <!----INDICATOR EMAIL IS USED------->
            <?php if (isset($_GET['accalready'])){ ?>
                <b style="color: red;" class="reg-failed">Email Already Used!</b>
            <?php } ?>

            <form action="registerBE.php" method="POST">
                <div class="text-box">
                    <input type="text" class="form-content" name="Username" placeholder="Username">
                </div>
                <div class="text-box">
                    <input type="email" class="form-content" name="Email" placeholder="Email">
                </div>
                <div class="text-box">
                    <input type="password" class="form-content" name="Password" placeholder="Password">
                </div>
                <div class="text-box">
                    <input type="password" class="form-content" name="Confirm-password" placeholder="Confirm Password">
                </div>
                <div class="d-grid gap-1" style="padding-top: 20px;">
                    <button class="btn btn-dark" name="register" type="submit">REGISTER</button>
                </div>
            </form>
            <div class="footer-container">
                <small>Already Have an Account? <a href="login.php">Login Here</a></small>
            </div>
        </div>
    </main>
</body>

</html>