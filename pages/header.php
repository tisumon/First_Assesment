<?php session_start(); ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Day Tarikul Islam: SEIP_ID:295904</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>

<?php if(isset($_SESSION['id'])) { ?>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="action.php?pages=home" class="navbar-brand">LOGO</a>
        <div class="navbar-nav">
            <li><a href="action.php?pages=home" class="nav-link">Home</a></li>
            <li><a href="action.php?pages=all-product" class="nav-link">All Product</a></li>
            <li><a href="action.php?pages=all-user" class="nav-link">All User</a></li>
            <li><a href="action.php?pages=upload-product" class="nav-link">Upload Product</a></li>
            <li><a href="action.php?pages=file-upload" class="nav-link">File Upload</a></li>
            <li><a href="action.php?pages=login" class="nav-link"><?php echo isset($_SESSION['name'])?'':"Log In"; ?></a></li>
            <li class="dropdown" >
                <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown"> <?php echo isset($_SESSION['name'])?$_SESSION['name']:"user"; ?></a>
                <ul>
                    <li class="dropdown-menu"><a href="action.php?pages=logout" class="dropdown-item">Logout</a></li>
                </ul>


            </li>

        </div>
    </div>
</nav>

<?php } else {?>


    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a href="action.php?pages=home" class="navbar-brand">LOGO</a>
            <div class="navbar-nav">
                <li><a href="action.php?pages=home" class="nav-link">Home</a></li>
                <li><a href="action.php?pages=login" class="nav-link">login</a></li>

            </div>
        </div>
    </nav>

<?php } ?>
