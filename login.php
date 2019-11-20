<?php
include 'connection.php';
if (isset($_POST['login']))
{
    header("location:../order.html");
    $name=$_POST['name'];
    $password=$_POST['password'];
    $query="select * from login WHERE name='$name' AND password='$password'";
    $query_run=mysqli_query($con,$query);
    $user = mysqli_fetch_assoc($query_run);
    //if($user)
    //{
   //  $_SESSION['name']=$name;
     header("location:../order.html");
 //   }
   // else {
     //     echo "<script>alert('Invalid username and password');</script>";
    //}
}
?>