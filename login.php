<!DOCTYPE html> 
<html>
<head>
    <title>My Page</title>
</head>

<body>
    <div id="inputContainer">
        <form id="loginForm" action="register.php" method="POST">
            <h2>Login to your account.</h2>
            <p>
                <label for="loginUsername">Username</label>
                <input id="loginUsername" name="loginUsername" type="text" placeholder="Username" required>
            </p>
            <p>
                <label for="loginPassword">Password</label>
                <input id="loginPassword" type="password" name="loginPassword" placeholder="Password" required>
            </p>
            <button type="submit" name="loginButton">LOG IN</button>
            
        </form>
</body>

</html>