<?php   

function sanitizeFormUsername($inputText) {
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "", $inputText);
    return $inputText;
}

function sanitizeFormstring($inputText) {
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "", $inputText);
    $inputText = ucfirst(strtolower($inputText)); //uppercase first letter
    return $inputText;
}

function sanitizeFormPassword($inputText) {
    $inputText = strip_tags($inputText);
    return $inputText;
}




if(isset($_POST['registerButton'])) {
    //echo "register button was pressed";
    //register button was pressed
    $username = sanitizeFormUsername($_POST['username']);
    $firstName = sanitizeFormstring($_POST['firstName']);
    $lastName = sanitizeFormstring($_POST['lastName']);
    $email = sanitizeFormstring($_POST['email']);
    $email2 = sanitizeFormstring($_POST['email2']);
    $password = sanitizeFormPassword($_POST['password']);
    $password2 = sanitizeFormPassword($_POST['password2']);

    $wasSuccessful = $account -> register($username, $firstName, $lastName, $email, $email2, $password, $password2);

    if($wasSuccessful == true){
        $_SESSION['userLoggedIn'] = $username;
        header("Location: index.php");
    }
}

?>