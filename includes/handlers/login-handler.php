<?php
if(isset($_POST['loginButton'])) {
    //login button was pressed
    $username = $_POST['loginUsername'];
    $password = $_POST['loginPassword'];


    //call login function in account class
    $result = $account->login($username, $password);

    //direct to index if login is true
    if($result == true){
        $_SESSION['userLoggedIn'] = $username;
        header("Location: index.php");
    }

}
?>