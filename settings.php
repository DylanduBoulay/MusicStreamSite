<?php
include("includes/includedFiles.php");


?>


<div class="entityInfo">

    <div class="centerSection">

        <div class="userInfo">
            <h1><?php echo $userLoggedIn->getFirstAndLastName()?></h1>
            
        </div>

        <div><?php include("updateDetails.php"); ?></div>

        <button class="logoutButton" onclick="logout()">Log OUt</button>
        
    </div>


</div>

