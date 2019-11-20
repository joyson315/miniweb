<?php
include 'connection.php';
if (isset($_POST['Submit']))
{
    $name = $_POST['name'];
    $address=$_POST['address'];
    $contact=$_POST['contact'];
    $place=$_POST['place'];
    $ename=$_POST['ename'];
    $date = $_POST['date'];
    $media1 = $_POST['media1'];
     $email=$_POST['email'];

     $dquery="SELECT * from 'book' where 'Event Date'='$date'";
    $query_run = mysqli_query($con, $dquery);


        echo "<script>alert('Already booked:)');</script>";
        header('location:order.html');

    $query = mysqli_query($con, "INSERT INTO `book`(`Name`,`Address`,`Contact`,`Event Place`,`Event Name`,`Event Date`,`Media1`,`Email`)
                  VALUES ('$name','$address',' $contact','$place','$ename','$date','$media1','$email')") or die(mysqli_error($con));
    if ($query == true)
    {
        echo "<script>alert('BOOKED:)');</script>";
        header('location:index.html');
    } 
    else
    {
        echo "<script>alert('Not Booked:(');</script>";
    }
}
?>