<?php
include("includes/includedFiles.php");

?>

<div class="playlistsContainer">

<div class="gridViewContainer">
    <h2>PLAYLISTS</h2>
    <div class="buttonItems">
        <button class="button green" onclick="createPlaylist()">NEW PLAYLIST</button>



<?php 
    $username = $userLoggedIn->getUsername();

    $playlistsquery = mysqli_query($con, "SELECT * FROM playlists WHERE owner='$username'");

    if(mysqli_num_rows($playlistsquery) == 0){
        echo "<span class='noResults'>You have no playlists.</span>";
    }


    while($row = mysqli_fetch_array($playlistsquery))   {
        
        $playlist = new Playlist($con, $row);

        echo "<div class='gridViewItem' role='link' tabindex='0' 
        onclick='openPage(\"playlist.php?id=". $playlist->getId() ."\")'> 

                <div class='playlistImage'>
                        <img src='assets/images/icons/playlist.png' alt='playlist image'>
                </div>

        <div class='gridViewInfo'>"
        . $playlist->getName() .
        "</div>

            </div>";
    }
?>









    </div>
</div>

</div>   