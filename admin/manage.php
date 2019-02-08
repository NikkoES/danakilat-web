<?php
session_start();

include "../config.php";

if(!isset($_SESSION['level'])){
    echo "<script>window.location = '../index.php'</script>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php include '../title.php'; ?>

    <link rel="shortcut icon" type="image/png" href="../images/favicon.png"/>

    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="../css/style.css" rel="stylesheet">
</head>
<body>
    <?php include 'header.php'; 

    ?>
    
    <?php
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }
    else if (isset($_GET['tambah'])) {
        $tambah = @$_GET['tambah'];
    }

    if(@$page=='user'){
        include 'user.php';
    }
    else if(@$page=='slider'){
        include 'slider.php';
    }
    else if(@$page=='fintech'){
        include 'fintech.php';
    }
    else if(@$tambah=='tambah-user'){
        include 'tambah-user.php';
    }
    else if(@$tambah=='tambah-slider'){
        include 'tambah-slider.php';
    }
else if(@$tambah=='tambah-fintech'){
        include 'tambah-fintech.php';
    }
    ?>

    <?php include '../footer.php'; ?>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
    <script src="../js/custom.js"></script>

</body>
</html>