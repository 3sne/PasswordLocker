<?php 
    session_start();
    unset($_SESSION['sid']);
    session_destroy();
    echo "logout successful!";
?>
