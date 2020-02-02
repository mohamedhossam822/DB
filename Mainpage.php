<?php
include 'InsertPost.php';
include 'LoadPosts.php';
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main-style.css">
    <title>SHIFT Home</title>
</head>

<body>
    <section id="navbar">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="#"><img src="res/favicon.ico" width="25" height="25">SHIFT</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form method="POST" class="form-inline my-2 my-lg-0" action="Search.php">
                    <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" name="SearchButton" type="submit">Search</button>
                </form>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="Friends.php"><i class="fa fa-group fa-lg"></i>
                            Friends</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="FriendRequests.php"><i class="fa fa-bell-o fa-lg"></i>
                            Notifications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class=" fa fa-user-circle fa-lg"></i>
                            Profile</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            style="border-left: 2px solid white; padding-left: 15px; padding-right: 15px; margin-left: 10px;">
                            Actions
                        </a>
                        <div class="dropdown-menu dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Settings</a>
                            <a class="dropdown-item" href="#">Terms & Conditions</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Log out</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </section>

    <section id="news-feed">
        <div class="row">
            <div class="col-md-2 profile">
                <div class="profile-sidebar">
                    <div class="profile-userpic">
                        <img src="res/avatar1.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name">
                            Omar Reda
                        </div>
                        <div class="profile-usertitle-job">
                            Developer
                        </div>
                    </div>
                    <div class="profile-usermenu">
                        <div class="profile-userbuttons">
                            <button type="button" class="btn btn-success btn-sm">My Profile</button>
                            <button type="button" class="btn btn-danger btn-sm">Settings</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 posts">
                <h1>POSTS</h1>
                <?php for ($i = 0; $i < count($posts); $i++) { ?>
                  <div>
                    <?php echo $posts[$i]['PosterName'].'<br>'; ?>
                    <?php echo $posts[$i]['Ptime'].'<br>'; ?>
                    <?php echo $posts[$i]['Caption'].'<br>'.'<br>'; ?>
                  </div>
                <?php } ?>
            </div>
            <div class="col-md-3 new-post">
                <h3>New post</h3>
                <div class="form-container">
                    <form method="POST" action="Mainpage.php" name="post-form">
                        <div  class="dropholder">
                            <div class="dropdown2">
                                <p>Privacy</p>
                            </div>
                            <ul name="Privacy" class="menu">
                                <li><i value="Public" class="fa fa-globe"></i> Public</li>
                                <li><i value="Private" class="fa fa-lock"></i> Private</li>
                            </ul>
                        </div>
                        <textarea name="post" placeholder="Write something..." style="height:100px"></textarea>
                        <button type="submit" name="PostButtton" class="btn btn-danger btn-sm">Post</button>
                    </form>
                </div>
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
