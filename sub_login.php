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

	get_info("sub_login.php","Untuk pemrosesan login user");

	$judul	=	"Login process...";

	include "log_header.php";
	
	echo "<p><div class='text-success notice-success bg-success'><span class='glyphicon glyphicon-ok'></span> Anda sebagai ".$_SESSION['login']."</div></p>";
?>
     <div id="preloader">
      <div id="status"></div>
     </div>
     
Anda akan dialihkan ke halaman lain secara otomatis...<script language='javascript'>setTimeout("location.href='log_index.php'",2000);</script>
     <!-- jQuery -->
     <script src="js/jquery-2.1.3.min.js"></script>
     
     <!-- Javascript -->
     <script type="text/javascript">
      $(window).load(function() { // makes sure the whole site is loaded
      $("#status").fadeOut(); // will first fade out the loading animation
      $("#preloader").delay(550).fadeOut("medium"); // will fade out the white DIV that covers the website.
      })
     </script>

<?php } ?>
