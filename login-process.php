<?php
//session_start();
//$error = array();

//require('mysqli_connect.php');


$email = $_POST['email'];


$password = $_POST['password'];







// sql query
$query = "SELECT * FROM user WHERE email='" . $email . "'";

$result = mysqli_query($con, $query);

$noOfRow = mysqli_num_rows($result);



if ($noOfRow) {

    $row = mysqli_fetch_assoc($result);
    //print_r($row);

    if (password_verify($password, $row['password'])) {

        $userData = array(
            "userID" => $row['userID'],
            "profileImage" => $row['profileImage'],
            "firstName" => $row['firstName'],
            "lastName" => $row['lastName'],
            "email" => $row['email']
        );
        session_start();
        $_SESSION['user'] = $userData;
        header("location: user-profile.php");
        exit();
    } else {

        header("location: oopps.php");
    }
}

//else
else {

    header("location: oopps.php");
}
