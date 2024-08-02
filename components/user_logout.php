<?php

    include 'connect.php';

    // setcookie('user_id' , '' , time() -1 , '/');
    // header('location: ../home.php');


// Start the session
session_start();

// Unset the session variables
// unset($_SESSION['username']);
// unset($_SESSION['user_id']);

setcookie('user_id' , '' , time() -1 , '/');
// Destroy the session
session_destroy();

// Redirect to the login page
header('Location: ../login.php');
exit;

?>