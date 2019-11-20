<?php
include "connection.php";
if (isset($_POST['login'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];
    if ($_POST['name'] == "pixel" && $_POST['password'] == "123")
    {
        $query = "select * from admin WHERE name='pixel' AND password='123'";
        $query_run = mysqli_query($con, $query);
        header("location:../admin/index.php");
    }
    else {
        echo "<script>alert('Invalid Name & Password:(');</script>";
    }
}
?>