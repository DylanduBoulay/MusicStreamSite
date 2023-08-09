<?php
include("../../config.php");


if(isset($_POST['playlistId']) && isset($_POST['songId']))
    {
        $playlistId = $_POST['playlistId'];
        $songId = $_POST['songId'];

        $oderIdQuery = mysqli_query($con, "SELECT IFNULL(MAX(playlistOrder)+1, 1)  as playlistOrder FROM playlistsongs WHERE playlistId='$playlistId'");
        $row = mysqli_fetch_array($oderIdQuery);
        $order = $row['playlistOrder'];

        $query = mysqli_query($con, "INSERT INTO playlistsongs VALUES('', '$songId', '$playlistId', '$order')");
    }
    else{
        echo "PlaylistId was not passed into deletePlaylist.php";
    }
?>