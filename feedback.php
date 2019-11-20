<?php
include 'connection.php';
if (isset($_POST['Submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];
    $query = mysqli_query($con, "INSERT INTO `feedback`(`name`,`email`,`feedback`) VALUES ('$name','$email','$feedback')") or die(mysqli_error($con));
    if ($query == true)
    {
            echo "<script>alert('FEEDBACK SENT:)');</script>";
    }
    else
        {
            echo "<script>alert('FEEDBACK NOT SENT:(');</script>";
        }
}
?>
