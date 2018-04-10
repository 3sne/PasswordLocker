<?php
    session_start();
    $host = "localhost";
    $db_name = "pwd_lkr_db";
    $tbl_name = "user";
    $_SESSION["errMsg"] = "";
    $username = $_POST["uname"];
    $password = $_POST["pass"];
    if(isset($_POST['uname'])) {
        
        $connection = mysql_connect("localhost", "root", "");
        $db = mysql_select_db($db_name, $connection);
        $query = mysql_query("SELECT * FROM user WHERE password='$password' AND username='$username'", $connection);
        $rows = mysql_num_rows($query);
        
        if($rows == 1) {
            mysql_close($connection);
            $_SESSION['sid'] = $username;
            echo "success"; 
        } else {
            $_SESSION['errMsg'] = "Username or Password is not valid";
            echo $_SESSION['errMsg'];
            $_SESSION['sid'] = "";
            session_destroy();  
        }
    }
?>