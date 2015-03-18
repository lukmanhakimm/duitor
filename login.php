<?php

include "config/koneksi.php";						//koneksi database

get_info("login.php","halaman login untuk user");	//informasi

$judul	=	"Login";								//judul dokumen

include "header.php";								//panggil header

?>
		<h1 class="text-center menu">Login</h1><hr>
		<p class="text-center">
		<form role="form" action="login.php" method="post" name="login">
			<div class="form-group">
				<b>Username</b><br>
				<input type="text" name="username" class="form-control" placeholder="Username">
			</div>
			<div class="form-group">
				<label for="pwd">Password</label>
				<input type="password" name="password" class="form-control" id="pwd"placeholder="Password">
			</div>
			<input type="submit" class="btn btn-success btn-md btn-block" name="masuk" value="Login">
		</form>
		<p>Belum mempunyai akun? <a href="daftar.php">Daftar di sini</a></p>
		</p>
		<?php
		session_start();
		if(isset($_POST['masuk'])){
			$username	=	$_POST['username'];
			$password	=	$_POST['password'];
			$enc_pass	=	md5($password);
				
			if(empty($username) or empty($password)){
				echo "<p><div class='text-danger bg-danger text-center notice-danger'>Maaf, username atau password belum diisi</div></p>";
			}
			$cari_user	=	mysql_query("SELECT * FROM user WHERE username='$username' && password='$enc_pass'");
			if(mysql_num_rows($cari_user)==1){
				$_SESSION['login']=$username;
				header('location:sub_login.php');
			}else{
				echo "<p><div class='text-danger bg-danger text-center notice-danger'>Maaf, username atau password salah</div></p>";
			}
		}
		?>
