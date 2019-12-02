<!doctype html>
<html lang="en">
<head>
    <title>Blog của Minh đẹp trai</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo MAIN_URL ?>public/homestyle/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo MAIN_URL ?>public/homestyle/css/animate.css">
    <link rel="stylesheet" href="<?php echo MAIN_URL ?>public/homestyle/css/owl.carousel.min.css">

    <link rel="stylesheet" href="<?php echo MAIN_URL ?>public/homestyle/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo MAIN_URL ?>public/homestyle/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo MAIN_URL ?>public/homestyle/fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="<?php echo MAIN_URL ?>public/homestyle/css/style.css">
</head>
<body>

<?php require_once "MVC/views/blocks/home/headerHome.php" ?>
<!-- END header -->

<?php require_once "MVC/views/pages/home/".$data['page'].".php"; ?>

<?php require_once "MVC/views/blocks/home/footerHome.php" ?>
<!-- END footer -->`

<!-- loader -->
<div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

<script src="<?php echo MAIN_URL ?>public/homestyle/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo MAIN_URL ?>public/homestyle/js/jquery-migrate-3.0.0.js"></script>
<script src="<?php echo MAIN_URL ?>public/homestyle/js/popper.min.js"></script>
<script src="<?php echo MAIN_URL ?>public/homestyle/js/bootstrap.min.js"></script>
<script src="<?php echo MAIN_URL ?>public/homestyle/js/owl.carousel.min.js"></script>
<script src="<?php echo MAIN_URL ?>public/homestyle/js/jquery.waypoints.min.js"></script>
<script src="<?php echo MAIN_URL ?>public/homestyle/js/jquery.stellar.min.js"></script>


<script src="<?php echo MAIN_URL ?>public/homestyle/js/main.js"></script>
</body>
</html>
