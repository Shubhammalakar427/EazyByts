<?php
include("connect.php");
if(isset($_POST['login'])){
    $u_username=$_POST['uusername'];
    $u_useremail=$_POST['useremail'];

     $result=mysqli_query($conn,"SELECT * FROM `signup` WHERE username='$u_username' And email='$u_useremail'");
     if(mysqli_num_rows($result)){
        echo "
        <script>
            alert('Login Successfully')
            window.location.href='confirm.php';
        </script>
        ";

     }else{
        echo "
        <script>
          alert('Incorrect Username or Email');
           window.location.href='login.html';
        </script>
        ";
     }

}


?>