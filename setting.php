<?php
session_start();

if($_SESSION['login']==''){
	include "header.php";
	echo "<p><div class='text-warning notice-danger bg-danger'>Anda harus login dahulu.</div></p>";
	echo "<a href='login.php'><button type='button' class='btn btn-md btn-success'>Login</button></a> ";
	echo "<a href='daftar.php'><button type='button' class='btn btn-md btn-primary'>Daftar</button></a>";
}
else{

	include "config/koneksi.php";

	get_info("setting.php","Untuk pengaturan user");

	$judul	=	"Setting";

	include "log_header.php";
	
	echo "<p><div class='text-success notice-success bg-success'><span class='glyphicon glyphicon-ok'></span> Anda sebagai ".$_SESSION['login']."</div></p>";
?>
<h1 class="text-center">Setting</h1><hr>

<?php } ?>
