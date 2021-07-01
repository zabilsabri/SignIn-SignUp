<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">    
    <link rel="stylesheet" href="style.css">
    <title>LOGIN</title>
</head>

<body>
    <main>
        <div class="container">
            <div class="heading-container">
                <h1>LOG-IN</h1>
            </div>
            <?php if(isset($_GET['wrong'])){ ?>
                <b class="failed">Your Email or Password is Incorrect!</b>
            <?php } ?>
            <?php if(isset($_GET['empty'])){ ?>
                <b class="failed">FILL ALL THE EMPTY FIELDS!</b>
            <?php } ?>
            <form action="loginBE.php" method="POST">
                <div class="text-box">
                    <input type="email" class="form-content" name="email" placeholder="Email">
                </div>
                <div class="text-box">
                    <input type="password" class="form-content" name="password" placeholder="Password">
                </div>
                <a href="Fpassword.php" class="forget-password">Forget Password?</a>
                <button type="submit" name="login" class="btn btn-dark">LOGIN</button>
            </form>
            <div class="footer-container">
                <small>Don't Have an Account? <a href="register.php">Register Here</a></small>
            </div>
        </div>
    </main>
</body>

</html>