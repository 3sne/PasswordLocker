<?php
    session_start();
    $host = "localhost";
    $db_name = "pwd_lkr_db";
    $tbl_name = "user";
    $username = $_POST["uname"];
    $password = $_POST["pass"];
    if(isset($_POST['uname'])) {
        $conn = mysqli_connect("localhost", "root", "", $db_name);
        if (!$conn) {
            echo ("Connection failed: " . mysqli_connect_error());
        }
        $query = "SELECT * FROM user WHERE username='$username'";
        if ($stmt = $conn->prepare($query)) {
            $stmt->execute();
            $stmt->store_result();
            $rows = $stmt->num_rows;
            $stmt->close();
        }
        
        if($rows != 0) {
            session_destroy();
            echo "Username already taken!"; 
        } else {
            $query = "INSERT INTO user VALUES ('$username', '$password', CURRENT_TIMESTAMP)";
            if (mysqli_query($conn, $query)) {
                echo "success";
            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
            }
        }
    }
?>