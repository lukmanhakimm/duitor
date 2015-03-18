<?php

include "config/koneksi.php";						//koneksi database

get_info("daftar.php","halaman daftar untuk user");	//informasi

$judul	=	"Daftar";								//judul dokumen

include "header.php";								//panggil header

?>
		<h1 class="text-center menu">Daftar</h1><hr>
		<p class="text-center">
		<form role="form" action="daftar.php" method="post" name="daftar">
			<div class="form-group">
				<b>Username</b><br>
				<input type="text" name="username" class="form-control" placeholder="Username">
			</div>
			<div class="form-group">
				<label for="pwd">Password</label>
				<input type="password" name="password1" class="form-control" id="pwd" placeholder="Password">
			</div>
			<div class="form-group">
				<label for="pwd">Ulangi Password</label>
				<input type="password" name="password2" class="form-control" id="pwd" placeholder="Password">
			</div>
			<div class="form-group">
				<label for="email">E-mail</label>
				<input type="email" name="email" class="form-control" id="email" placeholder="E-mail">
			</div>
			<div class="form-group">
				<b>Nama Lengkap</b><br>
				<input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap">
			</div>
			<div class="form-group">
				<b>Alamat</b><br>
				<input type="text" name="alamat" class="form-control" placeholder="Alamat">
			</div>
			<input type="submit" class="btn btn-primary btn-md btn-block" name="daftarkan" value="Daftar">
		</form>
		<p>Sudah mempunyai akun? <a href="login.php">Login di sini</a></p>
		</p>
		<?php
		if(isset($_POST['daftarkan'])){
			$username	=	$_POST['username'];
			$password1	=	$_POST['password1'];
			$password2	=	$_POST['password2'];
			$email		=	$_POST['email'];
			$nm_lengkap	=	$_POST['nama_lengkap'];
			$alamat		=	$_POST['alamat'];
			$enc_pass	=	md5($password2);
		
		//cek isi form
		if(($username && $password1 && $password2 && $email && $nm_lengkap && $alamat)==''){
			echo "<p><div class='text-danger bg-danger text-center notice-danger'>Semua form harus diisi !</div></p>";
		}
		//cek validasi password	
		if($password1 != $password2){
			echo "<p><div class='text-danger bg-danger text-center notice-danger'> Maaf, password yang anda masukkan tidak sama</div></p>";
		}
		//cek panjang password
		if(strlen($password1)<=5){
			echo "<p><div class='text-danger bg-danger text-center notice-danger'> Maaf, password yang anda terlalu pendek</div></p>";
		}
	
		//cek username
		$cari_item=mysql_query("SELECT * FROM info_user WHERE username='$username'");
		$hasil=mysql_fetch_array($cari_item);
			if($username==$hasil['username']){
				echo "<p><div class='text-danger bg-danger text-center notice-danger'> Maaf, username sudah digunakan. Coba lagi !</div></p>";
			}
			else{
		
					$tambah_user=mysql_query("INSERT INTO info_user values('','$username','$email','$nm_lengkap','$alamat');");
					if(!$tambah_user){
						echo "<p><div class='text-danger bg-danger text-center notice-danger'> Maaf, Tidak bisa memasukkan data. Coba lagi !</div></p>";
					}
					$tambah_ke_user=mysql_query("INSERT INTO user values('','$username','$enc_pass');");
					if(!$tambah_ke_user){
						echo "<p><div class='text-danger bg-danger text-center notice-danger'> Maaf, Tidak dapat memasukkan data ini. Coba lagi !</div></p>";
					}
					else {
						echo "<p><div class='text-success bg-success text-center notice-success'><span class='glyphicon glyphicon-ok'></span> Selamat, data berhasil dimasukkan !</div></p>";
					}
					$buat_tabel =	mysql_query("CREATE TABLE detail_$username ( id int(11) auto_increment, aktivitas varchar(255), jumlah varchar(255), saldo varchar(255), primary key(id));");
					if(!$buat_tabel){
						echo "<p><div class='text-danger bg-danger text-center notice-danger'> Maaf, Operasi tidak dapat dilakukan</div></p>";
					}
						
				}
			}
		?>
