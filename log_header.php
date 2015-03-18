<!DOCTYPE	html>
<html lang="en">
<head>
	<title><?php echo $judul ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="devices-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="icon" href="img/favicon.png" type="image/x-icon">
	<script src="bootstrap/js/bootstrap.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="bootstrap/js/npm.js"></script>
</head>
<body>
<div id="atas">
	<div id="log_menu">
		<ul class="ulM">
			<li><a href="log_index.php">Depan</a></li>
			<li><a href="setting.php">Setting</a></li>
			<li><a href="monitoring.php">Monitoring</a></li>
			<li><a href="gallery.php">Gallery</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</div>
<div class="container">
	<div class="jumbotron">
		<h2>DuiTor</h2>
	</div>
		<b>Sekarang : <?php echo date('d-M-Y H:i'); ?></b>
