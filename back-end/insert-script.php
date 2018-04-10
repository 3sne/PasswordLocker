<?php
    session_start();
    $host = "localhost";
    $db_name = "pwd_lkr_db";
    $tbl_name = "userdata";
    $username = $_SESSION['sid'];
    $title = $_POST["title"];
    $uid = $_POST["uid"];
    $pass = $_POST["pass"];
    $url = $_POST["url"];
    $notes = $_POST["notes"];
    $mobile = $_POST["mobile"];

    if(isset($_POST['uname'])) {
        $conn = mysqli_connect("localhost", "root", "", $db_name);
        if (!$conn) {
            echo ("Connection failed: " . mysqli_connect_error());
        }
        $query = "INSERT INTO userdata VALUES('$username', '$title', '$uid', '$pass', '$url', '$notes', $mobile)";
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