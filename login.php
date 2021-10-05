<?php

//session_start();

//include('header2.php');
?>

<?php

require('mysqli_connect.php');



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require('login-process.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Bazar</title>



    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">



    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style.css">

    <link rel="shortcut icon" href="./assets/fav1.jpg" type="image/jpg">

    <?php
    // require functions.php file
    require('functions.php');
    ?>

</head>

<body>

    <header>
    </header>

    <main id="main-site">




        <!-- log in area -->
        <section id="login-form">
            <div class="row m-0">
                <div class="col-lg-6 offset-lg-2">
                    <div class="text-center pb-5">
                        <h1 class="login-title text-dark">Login</h1>
                        <p class="p-1 m-0 font-ubuntu text-black-50">Login and enjoy additional features</p>
                        <span class=" text-red-100">Create a new <a href="register.php">account</a></span>
                    </div>
                    <div class="upload-profile-image d-flex justify-content-center pb-5">
                        <div class="text-center">
                            <img src='./assets/profile/beard.png' style="width: 200px; height: 200px" class="img rounded-circle" alt="profile">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <form action="login.php" method="post" enctype="multipart/form-data" id="log-form">

                            <div class="form-row my-4">
                                <div class="col">
                                    <input type="email" required name="email" id="email" class="form-control" placeholder="Email*">
                                </div>
                            </div>

                            <div class="form-row my-4">
                                <div class="col">
                                    <input type="password" required name="password" id="password" class="form-control" placeholder="password*">
                                </div>
                            </div>

                            <div class="submit-btn text-center my-5">
                                <button type="submit" class="btn btn-warning rounded-pill text-dark px-5">Login</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Log in ends area -->


        <?php
        // footer.php
        include('footer.php');
        ?>