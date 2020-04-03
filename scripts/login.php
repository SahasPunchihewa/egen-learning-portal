<?php

session_start();
include("db.php");

$mail = $_POST['userMail'];
$pass = $_POST['userPassword'];


$sql = "SELECT * FROM user WHERE userMail='$mail' AND userPassCode='$pass' ";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
        $_SESSION['userName'] = $row['userName'];
        $_SESSION['userType'] = $row['userType'];


        if($row['userType'] == 'admin' ){
            header('Location: '.'../portal.php');
        }else{
            header('Location: '.'../index.php');
        }

    }
} else {

    header('Location: '."../login.php?fail=true");
}



?>