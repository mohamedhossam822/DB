<?php
include 'LoginCheck.php';
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="res/favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
    <title>SHIFT Login</title>
</head>

<body>
    <section id="login">
        <div class="login-block">
            <div class="image-window">
                <img src="res/triangle2.jpg"></img>
            </div>
            <div class="form-container">
                <h2 class="wow fadeInDown" data-wow-duration="1s" data-row-delay="0.5s">Member Login</h2>
                <hr>
                <form method="POST" action="index.php"name="login-form">
                    <input class="wow fadeInUp" data-wow-duration="1s" data-row-delay="1s" name="email" type="email"
                        placeholder="Email Address">
                    <input class="wow fadeInUp" data-wow-duration="1s" data-row-delay="1.5s" name="password"
                        type="password" placeholder="Password">
                        <div class="red-text"><?php echo $error; ?></div>
                    <div class="btn-group">
                        <button role="button" class="btn btn-primary wow fadeInLeft" data-wow-duration="1s"
                            data-row-delay="1s" type="submit" name="submit">Login</button>
                        <a href="Signup.php" role="button" class="btn btn-primary wow fadeInRight"
                            data-wow-duration="1s" data-row-delay="1s">Sign-Up</a>
                    </div>
                    <a class="forget wow fadeInUp" data-wow-duration="1s" data-row-delay="1s" href="index.html">Forget
                        your password ?</a>
                </form>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
