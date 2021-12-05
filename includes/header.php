<?php
ob_start();
session_start();?>

<!DOCTYPE html>
<html lang="en">

<?php
  $homepage="index.php";
  // get the current file name
  $pagename= basename($_SERVER['PHP_SELF']);
  // check wheather current page is index.php or not
  if ($homepage == $pagename) {
			// echo $pagename;
  }   ?>
  
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ownii</title>
	<!-- bootstrap 5.0.2 -->
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> -->
  
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/bootstrap.bundle.min.js"></script>

	<!-- fav icon -->
	<link rel="shortcut icon" href="img/logo/favicon.ico">
	<!-- Style CSS -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">
	
	<!-- Font Awesome  -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  	<!-- Flip Down JS Clock Ref -->
	<link rel='stylesheet' href='css/flipdown.css'>

	<link rel="stylesheet" href="css/style.css">
	<!-- <script src="js/jquery-3.5.1.min.js"></script> -->

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-77S57GTXKQ"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'G-77S57GTXKQ');
	</script>
</head>
<body>

<?php include 'menu.php'; ?>