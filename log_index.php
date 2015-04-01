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

	get_info("log_index.php","halaman index untuk user yang sudah login");

	$judul	=	"Home";

	include "log_header.php";
	
	echo "<p><div class='text-success notice-success bg-success'><span class='glyphicon glyphicon-ok'></span> Anda sebagai ".$_SESSION['login']."</div></p>";
?>
<div id="atas">
	<div class="container">
		Selamat datang di DuiTor (Duit Monitor), <br>
		sekarang anda dapat melakukan monitoring keuangan anda sendiri 
		setiap bulan.<br>
		Anda sekarang tidak lagi khawatir maupun bingung kemana uang
		anda pergi. <br>
		<p>
		Silakan lakukan pengisian data dengan benar, agar hasil yang di
		terima juga maksimal.
		</p>
		<p>
		Silahkan ke menu <a href="monitoring.php">Monitoring</a> untuk melakukan monitor duit anda.
		</p>
	</div>
</div>
<?php } ?>
