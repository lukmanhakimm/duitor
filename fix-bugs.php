<?php

include "config/koneksi.php";						//koneksi database

get_info("fix-bugs.php","halaman untuk pelaporan bugs");	//informasi

$judul	=	"Laporkan Bugs";								//judul dokumen

include "header.php";								//panggil header

?>
		<h1 class="text-center menu">Daftar Laporan Bugs</h1><hr>
		<table class="table table-hover">
		<thead>
			<tr>
				<th>Judul</th>
				<th>Author</th>
				<th>E-mail</th>
				<th>Keterangan</th>
			</tr>
		</thead>
		<tbody>
			
		<?php
		$cari	=	mysql_query("SELECT * FROM bugs");
		while($hasil=mysql_fetch_array($cari)){
			echo "<tr>";
			echo "<td>".$hasil['judul']."</td>";
			echo "<td>".$hasil['author']."</td>";
			echo "<td>".$hasil['email']."</td>";
			echo "<td>".$hasil['keterangan']."</td>";
			echo "</tr>";
		}
		?>
		</tbody>
		</table>
<h1 class="text-center">Tambah Laporan</h1><hr>
<form role="form" action="#" method="post" name="bugs">
	<div class="form-group">
		Judul<br>
		<input type="text" class="form-control" name="judul" placeholder="Judul Bugs">		
	</div>
	<div class="form-group">
		Author<br>
		<input type="text" class="form-control" name="author" placeholder="Author">		
	</div>
	<div class="form-group">
		E-mail<br>
		<input type="text" class="form-control" name="email" placeholder="E-mail">		
	</div>
	<div class="form-group">
		Keterangan<br>
		<textarea name="keterangan" id="comment" rows="10" cols="94"></textarea>
	</div>
	<div class="form-group">
		<input type="submit" class="btn btn-primary btn-block" name="tambah_bugs" value="Tambahkan Laporan">		
	</div>
</form>
<?php
if(isset($_POST['tambah_bugs'])){
	$judul	=	$_POST['judul'];
	$author	=	$_POST['author'];
	$email	=	$_POST['email'];
	$keterangan	=	$_POST['keterangan'];
	
	$laporkan=mysql_query("INSERT INTO bugs VALUES('','$judul','$author','$email','$keterangan');");
	if(!$laporkan){
		echo "<p><div class='text-danger bg-danger text-center notice-danger'>Maaf, data tidak bisa dimasukkan.</div></p>";
	}
	else {
		echo "<p><div class='text-success bg-success text-center notice-success'><span class='glyphicon glyphicon-ok'></span> Data berhasil dimasukkan.</div></p>";
		header('location:fix-bugs.php');
	}
}
?>
