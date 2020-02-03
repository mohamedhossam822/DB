<?php
include 'SignupValid.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="res/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Play&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
    <title>SHIFT Sign-Up</title>
</head>

<body>
    <section id="signup">
        <div class="form-container">
            <h1 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1">Shift User Sign-Up</h1>
            <hr>

            <form method="POST" action="Signup.php" name="login-form" onsubmit="return check_all()">
                <div class="container">
                    <div class="row">

                        <input class="col-md-4 wow fadeInUp" id="fn" data-wow-duration="0.3s" data-wow-delay="0.5s" type="text" placeholder="First Name">
                            <div id="fn_div">
                            </div>

                        <input class="col-md-4 wow fadeInUp" id="ln" data-wow-duration="0.3s" data-wow-delay="0.5s" type="text" placeholder="Last Name">
                            <div id="ln_div">
                            </div>

                        <input class="col-md-7 wow fadeInUp" id="mail" data-wow-duration="0.3s" data-wow-delay="0.6s" type="text" placeholder="Email Address" >
                            <div id="email_div">
                            </div>

                        <input class="col-md-4 wow fadeInUp" id="pw" data-wow-duration="0.3s" data-wow-delay="0.7s" type="password" placeholder="Password">
                        <input class="col-md-4 wow fadeInUp" id="con_pw" data-wow-duration="0.3s" data-wow-delay="0.7s" type="password" placeholder="Confirm Password">
                            <div id="pw_div">
                            </div>

                        <input class="col-md-4 wow fadeInUp" id="dob" data-wow-duration="0.3s" data-wow-delay="0.8s" type="date" placeholder="Date of birth">

                        <select class="col-md-4 wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.8s" id="gender" placeholder="Gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Not Specified">Prefer not to say</option>
                        </select>

                        <input class="col-md-4 wow fadeInUp" id="phone_num" data-wow-duration="0.3s" data-wow-delay="0.8s" type="text" placeholder="Phone Number">
                            <div id="num_div">
                            </div>

                        <input class="col-md-4 wow fadeInUp" id="country" data-wow-duration="0.3s" data-wow-delay="0.8s" type="text" placeholder="Country">

                        <select class="col-md-4 wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.8s"
                            id="martial-status" name="martial" placeholder="Martial Status">
                            <option value="Married">Married</option>
                            <option value="Single">Single</option>
                            <option value="Not Specified">Prefer not to say</option>
                        </select>

                        <input class="col-md-7 wow fadeInUp" id="brief" data-wow-duration="0.3s" data-wow-delay="0.8s" type="text" placeholder="Write a brief sentence about yourself...">

                    </div>
                </div>
                <div class="btn-group">
                  <input class="btn btn-primary wow fadeInRight" type="submit" name="" value="Submit">
                    <a href="index.php" role="button" class="btn btn-primary wow fadeInRight" data-wow-duration="1s"
                        data-wow-delay="1s">Back to login</a>
                </div>
            </form>
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
        <script src="js/signup.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/main.js"></script>

</body>

</html>
