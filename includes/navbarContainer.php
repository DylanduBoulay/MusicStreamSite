<script>
    
function Container(groupName)  {
    groupName = "."+groupName;

    if(($(".containerOpen"+groupName).css('display') !== "none"))  {
        $(".navItem.heading .icon"+groupName+".expand").hide();
        $(".navItem.heading .icon"+groupName+".collapse").show();
        $(".containerOpen"+groupName).hide(); 
    }

    else if($(".containerOpen"+groupName).css('display') === "none")  {
        $(".navItem.heading .icon"+groupName+".expand").show();
        $(".navItem.heading .icon"+groupName+".collapse").hide();
        $(".containerOpen"+groupName).show();
    }
}

</script>



<div id="navBarContainer">
        <nav class="navBar">
            <span  role="link" tabindex="0" onclick="openPage('index.php')" class="logo">
                <img src="assets/images/icons/logo.png" alt="logo">
            </span>
            <div class="group">
                <div class="navItem" role="link" tabindex="0" onclick='openPage("search.php")'>
                <span    class="navItemLink">Search All
                        <img src="assets/images/icons/search.png" alt="search" class="icon">
                </span>
                </div>
            </div>

            <div class="group">
                <button tabindex="0" onclick="Container('music')" class="collapsibleContainer">
                    <div class="navItem heading" >Music
                    <img src="assets/images/icons/expand.png" alt="expand" class="icon music expand">
                    <img src="assets/images/icons/collapse.png" alt="collapse" class="icon music collapse" style="display: none;">   
                    </div>
                    </button>
                    <div class="containerOpen music">
                    <div class="navItem" role="link" tabindex="0" onclick="openPage('browse.php')">
                    <span   class="navItemLink">Browse</span>
                    </div>
                    <div class="navItem" role="link" tabindex="0" onclick="openPage('yourMusic.php')" >
                    <span class="navItemLink">Your music</span>
                    </div>
                    <div class="navItem" role="link" tabindex="0" onclick="openPage('settings.php')">
                    <span  class="navItemLink"><?php echo $userLoggedIn->getUserName() ?></span>
                    </div>
</div>
            </div>


            <div class="group">
                <button tabindex="0" class="collapsibleContainer"  onclick="Container('production')">
                <div class="navItem heading">Production
                    <img src="assets/images/icons/expand.png" alt="expand" class="icon production expand"> 
                    <img src="assets/images/icons/collapse.png" alt="collapse" class="icon production collapse" style="display: none;"> 
                </div>
                </button>
                <div class="containerOpen production">
                <div class="navItem streamLink" role="link" tabindex="0" onclick="openPage('onefortyLive.php')">
                    <span   class="navItemLink">Live Streams</span>
                </div>
                <div class="navItem" role="link" tabindex="0" onclick="openPage('tutorials.php')">
                    <span   class="navItemLink">Tutorials</span>
                </div>
            </div>
            </div>


            <div class="group">
            <button  tabindex="0" class="collapsibleContainer" onclick="Container('store')">
            <div class="navItem heading">Store
            <img src="assets/images/icons/expand.png" alt="expand" class="icon store expand"> 
                    <img src="assets/images/icons/collapse.png" alt="collapse" class="icon store collapse" style="display: none;"> 
            </div>
            </button>
            <div class="containerOpen store">
                <div class="navItem" role="link" tabindex="0" onclick="openPage('physicalMusic.php')">
                    <span  class="navItemLink">Digital Music</span>
                </div>
                <div class="navItem" role="link" tabindex="0" onclick="openPage('physicalMusic.php')">
                    <span  class="navItemLink">CD's/Vinyl</span>
                </div>
                <div class="navItem" role="link" tabindex="0" onclick="openPage('merch.php')" >
                    <span class="navItemLink">Merch</span>
                </div>
                <div class="navItem" role="link" tabindex="0" onclick="openPage('store.php')">
                    <span   class="navItemLink">Synthesizers and Effects</span>
                </div>
            </div>
            </div>

            <div class="group">
                <button tabindex="0" class="collapsibleContainer" onclick="Container('People')">
                <div class="navItem heading">People
                <img src="assets/images/icons/expand.png" alt="expand" class="icon people expand"> 
                    <img src="assets/images/icons/collapse.png" alt="collapse" class="icon people collapse" style="display: none;"> 
                </div>
                </button>
                <div class="containerOpen people">
                <div class="navItem" role="link" tabindex="0" onclick="openPage('events.php')">
                    <span  class="navItemLink">Events</span>
                </div>
                <div class="navItem" role="link" tabindex="0" onclick="openPage('groups.php')">
                    <span  class="navItemLink">Groups</span>
                </div>
                </div>
            </div>  
            
            <div class="group">
                <div class="navItem heading" role="link" tabindex="0">Support</div>
                <div class="navItem compressed" role="link" tabindex="0" onclick="openPage('contact.php')">
                    <span  class="navItemLink">Contact Us</span>
                </div>
                <div class="navItem compressed" role="link" tabindex="0" onclick="openPage('info.php')">
                    <span  class="navItemLink">Information</span>
                </div>
                <div class="navItem compressed" role="link" tabindex="0" onclick="openPage('privacy.php')">
                    <span  class="navItemLink">Privacy Policy</span>
                </div>
            </div>
            
        </nav>
</div>