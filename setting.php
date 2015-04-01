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
<<<<<<< HEAD
<?php
	$set_	=	mysql_query("select * from info_user");
	while($hasilq=mysql_fetch_array($set_)){
		$set_username=$hasilq['username'];
		$set_email=$hasilq['email'];
		$set_alamat=$hasilq['alamat'];
		$set_nm_lengkap=$hasilq['nm_lengkap'];
		
}
?>
<h1 class="text-center">Setting</h1><hr>
<h2>Pengaturan Akun</h2>
<form action="#ubahakun" method="post" role="fomr" name="ubahakun">
<div id="ubahakun">
<p>Nama lengkap</p>
<input type="text" class="form-control" value="<?php echo $set_nm_lengkap; ?>" name="set_nm_lengkap">
<p>Username</p>
<input type="text" class="form-control" value="<?php echo $set_username; ?>" name="set_uname">
<p>E-mail</p>
<input type="text" class="form-control" value="<?php echo $set_email; ?>" name="set_email">
<p>Alamat</p>
<input type="text" class="form-control" value="<?php echo $set_alamat; ?>" name="set_alamat"><br>
<input type="submit" value="Update Informasi" class="btn btn-primary" name="akunubah">
</div>

<?php
if(isset($_POST['akunubah'])){
	$nm_lgkp	=	$_POST['set_nm_lengkap'];
	$uname		=	$_POST['set_uname'];
	$e_mail		=	$_POST['set_email'];
	$a_lamat	=	$_POST['set_alamat'];
	if(($nm_lgkp and $uname and $e_mail and $a_lamat)==''){
		echo "<p><div class='text-danger notice-danger bg-danger'>Maaf, Harus terisi !</div></p>";
	}else{
		$set_akun	=	mysql_query("UPDATE info_user SET username='$uname', email='$e_mail', nm_lengkap='$nm_lgkp', alamat='$a_lamat'");
		if(!$set_akun){
			echo "<p><div class='text-danger notice-danger bg-danger'>Maaf, data tidak dapat diinputkan !</div></p>";
		}else{
			echo "<p><div class='text-success notice-success bg-success'>Informasi akun berhasil di perbaharui .</div></p>";
		}
	}
}
?>
</form>
<h2>Update Password</h2>
<p>Password Sekarang</p>
<form action="#ubahpasswd" method="post" role="form">
<div id="ubahpasswd">
<input type="password" class="form-control" name="pass_now" placeholder="Password Sekarang">
<p>Password Baru</p>
<input type="password" class="form-control" name="pass1" placeholder="Password Baru">
<p>Ulangi Password Baru</p>
<input type="password" class="form-control" name="pass2" placeholder="Ulangi Password"><br>
<input type="submit" value="Update Password" class="btn btn-primary" name="ubhpasswd">
</div>
<?php 
if(isset($_POST['ubhpasswd'])){
	$pass_lama		=	$_POST['pass_now'];
	$pass_new1		=	$_POST['pass1'];
	$pass_new2		=	$_POST['pass2'];
	$cc_pass		=	md5($pass_new1);
	
	$dlm=mysql_query("select * from user where password='$pass_lama';");
	if(!$dlm){
		echo "<p><div class='text-danger notice-danger bg-danger'>Maaf, Password tidak valid !</div></p>";
	}
	if($pass_new1 != $pass_new2){
		echo "<p><div class='text-danger notice-danger bg-danger'>Maaf, Password tidak sama !</div></p>";
	}
	if(($pass_lama and $pass_new1 and $pass_new2)==''){
		echo "<p><div class='text-danger notice-danger bg-danger'>Maaf, Semua harus diisi !</div></p>";
	}else{
		$up		=	mysql_query("UPDATE user SET password='$cc_pass'");
		if(!$up){
			echo "<p><div class='text-danger notice-danger bg-danger'>Maaf, Password tidak dapat diubah !</div></p>";
		}else{
			echo "<p><div class='text-success notice-success bg-success'>Password berhasil diperbaharui .</div></p>";
		}
	}
}
?>
</form>
=======
<h1 class="text-center">Setting</h1><hr>
>>>>>>> 7b37bc94de2cc19e48387ca42ac75ac46c432ff1

<?php } ?>
