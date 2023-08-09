<?php
    include("includes/config.php");
    include("includes/classes/Account.php");
    include("includes/classes/Constants.php");

    $account = new Account($con);


    include("includes/handlers/register-handler.php");
    include("includes/handlers/login-handler.php");

    function getInputValue($name)    {
        if(isset($_POST[$name])){
            echo $_POST[$name];
        }

    }
?>

<html>
<head>
    <title>My Page</title>
    <link  rel="stylesheet" type="text/css" href="assets/css/register.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="assets/js/register.js" type="text/javascript"></script>
</head>

<body>
    <?php 

        if(isset($_POST['registerButton'])) {
            echo '<script>
            $(document).ready(function(){
                $("#loginForm").hide();
                $("#registerForm").show();
            });
        </script>';
        }
        else {
            echo '<script>
            $(document).ready(function(){
                $("#loginForm").show();
                $("#registerForm").hide();
                });
        </script>';
            }
    ?>
    

    <div id="background">
            <div id="loginContainer">

                <div id="inputContainer">
                    <form id="loginForm" action="register.php" method="POST" style="display: block";>
                        <h2>Login to your account.</h2>
                        <p>
                            <?php echo $account->getError(Constants::$loginFailed); ?>
                            <label for="loginUsername">Username</label>
                            <input id="loginUsername" name="loginUsername" type="text" placeholder="Username" value="<?php getInputValue('loginUsername')?>" required>
                        </p>
                        <p>
                            <label for="loginPassword">Password</label>
                            <input id="loginPassword" type="password" name="loginPassword" placeholder="Password" required>
                        </p>
                        <button type="submit" name="loginButton">LOG IN</button>
                        
                        <div class="hasAccountText">
                            <span id="hideLogin">Don't have an account yet? Signup here.</span>
                        </div>
                    </form>


                    <form id="registerForm" action="register.php" method="POST">
                        <h2>Create account</h2>
                        <p>
                            <?php echo $account->getError(Constants::$usernameCharacters); ?>
                            <?php echo $account->getError(Constants::$usernameTaken); ?>
                            <label for="username">Username</label>
                            <input id="username" name="username" type="text" placeholder="Username" value="<?php getInputValue('username')?>" required>
                        </p>
                        <p>
                            <?php echo $account->getError(Constants::$firstnameCharacters); ?>
                            <label for="firstName">First name</label>
                            <input id="firstName" name="firstName" type="text" placeholder="eg. big" value="<?php getInputValue('firstName')?>" required>
                        </p>
                        <p>
                            <?php echo $account->getError(Constants::$lastnameCharacters); ?>
                            <label for="lastName">Last name</label>
                            <input id="lastName" name="lastName" type="text" placeholder="eg. chungus" value="<?php getInputValue('lastName')?>" required>
                        </p>
                        <p>
                            <?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
                            <?php echo $account->getError(Constants::$emailInvalid); ?>
                            <?php echo $account->getError(Constants::$emailTaken); ?>
                            <label for="email">Email</label>
                            <input id="email" name="email" type="email" placeholder="bigchungus@swagcity.com"  value="<?php getInputValue('email')?>" required>
                        </p>
                        <p>
                            <label for="email2">Confirm email</label>
                            <input id="email2" name="email2" type="email" placeholder="" value="<?php getInputValue('email2')?>" required>
                        </p>
                        <p>
                            <?php echo $account->getError(Constants::$passwordsDoNoMatch); ?>
                            <?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
                            <?php echo $account->getError(Constants::$passwordCharacters); ?>
                            <label for="password">Password</label>
                            <input id="password" type="password" name="password" placeholder="Password" required>
                        </p>
                        <p>
                            <label for="password2">Confirm Password</label>
                            <input id="password2" name="password2" type="password" placeholder="" required>
                        </p>

                        <button type="submit" name="registerButton">Sign up</button>
                        
                        <div class="hasAccountText">
                            <span id="hideRegister">Already have an account yet? Log in here.</span>
                        </div>
                    </form>
                </div>
            <div id="loginText">
                <h1>GET GREAT MUSIC, RIGHT NOW</h1>
                <h2>Listen to loads of songs for free</h2>
                <ul>
                    <li>Discover music</li>
                    <li>Create playlists</li>
                    <li>Stay up to date</li>
                </ul>

            </div>

        </div>
    </div>
</body>

</html>