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
    <main>
        <div class="register-container">
            <div class="heading-container">
                <h1>REGISTER</h1>
            </div>

            <?php if(isset($_GET['success'])){ ?>
                <b class="success">ACCOUNT IS SUCCESSFULLY MADE!</b>
            <?php } ?>

            <?php if (isset($_GET['passfailed'])){ ?>
                <b class="failed">PASSWORD DIDN'T MATCH!</b>
            <?php } ?>

            <?php if (isset($_GET['accalready'])){ ?>
                <b class="failed">EMAIL ALREADY USED!</b>
            <?php } ?>

            <?php if (isset($_GET['empty'])){ ?>
                <b class="failed">FILL ALL THE EMPTY FIELDS!</b>
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
                <button class="btn btn-dark" name="register" type="submit">REGISTER</button>
            </form>
            <div class="footer-container">
                <small>Already Have an Account? <a href="login.php">Login Here</a></small>
            </div>
        </div>
    </main>
</body>

</html>