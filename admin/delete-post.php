<?php
     include 'config.php';
     if( $_SESSION['user_role'] == 0){
         header("location: post.php");
     }
     $post_id = $_GET['delete_post_id'];
 
     $sql = "DELETE FROM post WHERE post_id = '$post_id'";
 
     if(mysqli_query($conn,$sql)){
         header('location: post.php');
     }
     else{
         echo "unable to delete data".mysqli_connect_error();
     }
?>