<?php include'connection.php'; ?>
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
    </style>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
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
                    <a class="navbar-brand" href="index.html">
                        <span class="sub"></span>Shoot</a>
                </h1>
            </div>
        </nav>
    </header>
    <div class="banner">
        <div class="container"><br><br>
            <h1><label><center>PAYMENT</center></label></h1><br><br>
            <div class="row" style="width: 100%;">
                <div class="col-md-5" style="padding:30px;width: 100%; left:30%;border-radius: 10px" >
                    <form action="admin.php" method="post">
                        <div class="form-group">
                            <label>Name </label>
                            <input type="text" name="name" placeholder="Enter Your Name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password"  placeholder="Enter Your Password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="login" value="Login" class="btn btn-success btn-block">
                            <a href="index.html"><input type="button" value="back" class="btn btn-dark"/></a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
</body>

</html>