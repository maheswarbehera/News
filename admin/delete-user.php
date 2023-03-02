<?php
    include 'config.php';
    if( $_SESSION['user_role'] == 0){
        header("location: post.php");
    }
    $userid = $_GET['delete_id'];

    $sql = "DELETE FROM user WHERE user_id = '$userid'";

    if(mysqli_query($conn,$sql)){
        header('location: users.php');
    }
    else{
        echo "unable to delete data".mysqli_connect_error();
    }
?>