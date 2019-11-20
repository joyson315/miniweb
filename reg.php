<?php
include 'connection.php';
if (isset($_POST['submit']))
{
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $name=$_POST['name'];
    $password=$_POST['password'];
    $conformpass=$_POST['conformpass'];
    if ($password==$conformpass)
    {
        $query=mysqli_query($con,"INSERT INTO register(name,password,conformpass) VALUES ('$name','$password','$conformpass')")  or die(mysqli_error($con));
        if ($con->query($query) === TRUE)
            echo "New record created successfully";
        if ($query==true)
        {
          echo 'registered successfully';
            header("location:order.html");
        }
    }
    else
    {
        echo '<script>alert("registerd unsuccessfully");
    </script>';
    }
}
else
{
    echo '<script>alert(" password missmatch");
    </script>';
}
?>