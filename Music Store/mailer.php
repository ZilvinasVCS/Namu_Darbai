<?php
    $result = '';
    $error = '';
    if(isset($_POST['submit'])) {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        if(!$_POST['firstName']) {
            $error .= "Please enter your First Name";
        }
        
        if(!$_POST['lastName']) {
            $error .= "Please enter your Last Name";
        }
        
        if(!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $error .= "Please enter your email";
        }
        
        if(!$_POST['message']) {
            $error .= "Please enter your message";
        }
    }

    if($error == '') {
        
    } else {
        $result = '<div class="alert alert-danger">ERROR found:<br>' . $error . '</div>';
    }

?>