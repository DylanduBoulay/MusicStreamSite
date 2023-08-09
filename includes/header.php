<?php
include("includes/config.php");
include("includes/classes/User.php");
include("includes/classes/Artist.php");
include("includes/classes/Album.php");
include("includes/classes/Song.php");
include("includes/classes/Playlist.php");
//session_destroy(); for logging out


if(isset($_SESSION['userLoggedIn'])) {
    $userLoggedIn = new User($con, $_SESSION['userLoggedIn']);
    $username = $userLoggedIn->getUsername();
    echo "<script>userLoggedIn = '$username';</script>";
}
else {
    header("Location: register.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>OneForty Homepage</title>

    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="assets/js/script.js"></script>
</head>

<body>


    

    <div class="mainContainer">
    
            <div class="topContainer">

                <?php include("includes/navbarContainer.php"); ?>

                <div id="mainViewContainer">
                    <div id="mainContent">