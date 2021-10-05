<?php

//session_start();
include('header.php');
//require('mysqli_connect.php');

if (!isset($_SESSION['user']['userID'])) {
    echo "not found";
    //header("location: login.php");
}

$userID = $_SESSION['user']['userID'];

$q = "SELECT * FROM user WHERE userID=" . $userID;

$result = mysqli_query($con, $q);

$noOfRow = mysqli_num_rows($result);

if ($noOfRow) {

    $user = mysqli_fetch_assoc($result);
    //echo "<pre>";
    //print_r($user);
}

?>

<section id="main-site">
    <div class="container py-5">
        <div class="row">
            <div class="col-4 offset-4 shadow py-4">
                <div class="upload-profile-image d-flex justify-content-center pb-5">
                    <div class="text-center">
                        <img class="img rounded-circle" style="width: 200px; height: 200px;" src="<?php echo isset($user['profileImage']) ? $user['profileImage'] : './assets/profile/beard.png'; ?>" alt="">
                        <h4 class="py-3">
                            <?php
                            if (isset($user['firstName'])) {
                                printf('%s %s', $user['firstName'], $user['lastName']);
                            }
                            ?>
                        </h4>
                    </div>
                </div>

                <div class="user-info px-3">
                    <ul class="navbar-nav">
                        <li class="nav-link"><b>User Id: </b><span><?php echo isset($user['userID']) ? $user['userID'] : ''; ?></span></li>
                        <li class="nav-link"><b>First Name: </b><span><?php echo isset($user['firstName']) ? $user['firstName'] : ''; ?></span></li>
                        <li class="nav-link"><b>Last Name: </b><span><?php echo isset($user['lastName']) ? $user['lastName'] : ''; ?></span></li>
                        <li class="nav-link"><b>Email: </b><span><?php echo isset($user['email']) ? $user['email'] : ''; ?></span></li>
                        <li class="nav-link"><b>Member Since: </b><span><?php echo isset($user['registerDate']) ? $user['registerDate'] : ''; ?></span></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>

<?php
/*  include banner area  */
include('Template/my-cart.php');
?>


<?php
include "footer.php";
?>