<?php
include("connect.php");
error_reporting(0);
 $id=$_GET['id'];
 $query= "DELETE FROM `post` WHERE post_id ='$id'";
 $run=mysqli_query($conn,$query);
 if($run){
        echo "<script>alert ('Post has been deleted')</script>";
         echo "<script>window.open('confirm.php','_self')</script>";

 }else{
    echo "not" ;
 }
?>