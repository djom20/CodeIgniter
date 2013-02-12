<?php include('../views/routes_asset.php'); ?>
<!DOCTYPE HTML>
<html lang="es-CO">
	<head>
		<meta charset="utf-8">
		<meta name="keywords" content=""/>
		<meta name="description" content=""/>
		<meta name="googlebot" content="index,follow"/>
		<meta name="author" content="Ing. Jonathan Olier Miranda"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<link rel="shortcut icon" type="image/x-ico" href="<?php echo $routes_ico; ?>fav.ico" />
		<link rel="stylesheet" type="text/css" href="<?php echo $routes_css; ?>stylesheet.min.css" media="all">
		<link rel="stylesheet" type="text/css" href="<?php echo $routes_css; ?>docs/assets/css/bootstrap.css" media="all">
		<link rel="stylesheet" type="text/css" href="<?php echo $routes_css; ?>docs/assets/css/bootstrap-responsive.css" media="all">
		<title>ltiviaOT</title>
	</head>
   	<body class="container-fluid">
		<div class="offset1 span10">
			<?php if (file_exists($routes_mod."login.php")){ include($routes_mod.'login.php'); } ?>
			<?php if (file_exists($routes_mod."menu.php")){ include($routes_mod.'menu.php'); } ?>