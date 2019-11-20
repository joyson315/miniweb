<?php include 'connection.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Pixel Photoghraphy</title>
    <meta charset="utf-8">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <style>label{
            color:white;
        }
        form{
            text-align: center;
            margin-top: 150px;
        }
    </style>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="../css/owl.carousel.css" type="text/css" media="all">
    <link rel="stylesheet" href="../css/owl.theme.css" type="text/css" media="all">
    <link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen" property="" />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Tajawal:200,300,400,500,700,800,900" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
</head>
<body>
<section class="banner-sec-w3layouts" id="home">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light top-header">
            <div class="logo text-center">
                <h1 class="logo">
                    <a class="navbar-brand" href="../index1.html">
                </h1>
            </div>
        </nav>
    </header>

    <table width="80%" align="center" cellpadding="10px" border="1" style="color: black;font-weight: bold">
        <th><h2>Booking Details</h2></th>
        <tr>

            <th>Name</th>
            <th>Address</th>
            <th>Contact</th>
            <th>Event Place</th>
            <th>Event Name</th>
            <th>Event Date</th>
            <th>Media</th>
            <th>Email</th>
        </tr>
        <?php
        $str="select * from book";
        $res1=mysqli_query($con,$str);
        while ($arr=mysqli_fetch_row($res1)):
            ?>
            <tr>
                <td><?php echo $arr[0];?></td>
                <td><?php echo $arr[1];?></td>
                <td><?php echo $arr[2];?></td>
                <td><?php echo $arr[3];?></td>
                <td><?php echo $arr[4];?></td>
                <td><?php echo $arr[5];?></td>
                <td><?php echo $arr[6];?></td>
                <td><?php echo $arr[7];?></td>
            </tr>
        <?php endwhile; ?>
    </table>
</section>
</body>
</html>



