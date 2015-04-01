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

	get_info("monitoring.php","untuk memonitoring keuangan setiap bulan");

	$judul	=	"Monitoring";

	include "log_header.php";
	
	echo "<p><div class='text-success notice-success bg-success'><span class='glyphicon glyphicon-ok'></span> Anda sebagai ".$_SESSION['login']."</div></p>";
?>
<<<<<<< HEAD
<?php
$saldo 			= $masukan_awal_bulan + $masukan + $saldo - $pengeluaran; 
$masukan_awal_bulan	=	$_POST['masukan_awal_bulan'];
if((date('d')=='1')&&(date('H')or(date('i')=='00'))){
	$masukan_awal_bulan	= '';
	$saldo	=	$saldo;
}
if($masukan_awal_bulan==''){
?>
<div id="awalbl">
<form role="form" action="#awalbl" method="post" name="awal_bulan">
<input type="text" class="fomr-control" name='masukan_awal_bulan' placeholder="Uang awal bulan">
<input type="submit" value="Inputkan data" class="btn btn-primary" name="blnawl">
</form>
<?php
if(isset($_POST['blnawl'])){
	$masukan_awal_bulan=$_POST['masukan_awal_bulan'];
	$datakeluaran=mysql_query("INSERT INTO detail_".$_SESSION['login']." VALUES('','Pemasukan awal bulan','$masukan_awal_bulan','$saldo','$masukan_awal_bulan');");
	if(!$datakeluaran){
		echo "<p><div class=' text-center notice-danger text-danger bg-danger'>Data tidak dapat dimasukkan !</div></p>";
	}
}
?>
</div>
=======
<?php 
$masukan_awal_bulan	=	$_POST['masukan_awal_bulan'];
if((date('d')=='1')&&(date('H')or(date('i')=='00'))){
	$masukan_awal_bulan	= '';
}
if($masukan_awal_bulan==''){
?>
<form role="form" action="#" method="post" name="awal_bulan">
<input type="text" class="fomr-control" name='masukan_awal_bulan' placeholder='Uang awal bulan'>
<input type="submit" value="Inputkan data" class="btn btn-primary ">
</form>
>>>>>>> 7b37bc94de2cc19e48387ca42ac75ac46c432ff1
<?php } ?>
<table class="table table-hover">
<thead>
	<tr>
		<th>Rincian</th>
		<th>Keterangan</th>
	</tr>
</thead>
<tbody>
	<tr>
		<td>Pemasukan Bulan Ini ( <b><?php echo date('M'); ?> </b>)</td>
<<<<<<< HEAD
		<?php $q=mysql_query("select * from detail_".$_SESSION['login']);
			$r=mysql_fetch_array($q);
		?>
		<td>Rp.<?php echo  $r['pem_awl_bln']; ?>,-</td>
=======
		<td>Rp.<?php echo $_POST['masukan_awal_bulan']; ?>,-</td>
>>>>>>> 7b37bc94de2cc19e48387ca42ac75ac46c432ff1
		
	</tr>
	<tr>
		<td>Saldo </td>
<<<<<<< HEAD
		<td>Rp.<?php echo $saldo; ?>,-</td>
=======
		<td>Rp.<?php $saldo=$saldo-$dd_keluaran+$dd_pemasukan; echo $saldo; ?>,-</td>
>>>>>>> 7b37bc94de2cc19e48387ca42ac75ac46c432ff1
	</tr>
</tbody>
</table>
<h2 class="text-center">Perincian</h2><hr>
<table class="table table-hover">
<thead>
	<tr>
		<th>No</th>
		<th>Aktivitas yang dilakukan</th>
		<th>Jumlah </th>
		<th>Saldo </th>
	</tr>
</thead>
<tbody>
<?php
	$tampildata	=	mysql_query("SELECT * FROM detail_".$_SESSION['login'].";");
	while($dd=mysql_fetch_array($tampildata)){
		$dd['saldo']==$saldo-$dd['jumlah'];
		$a=$a+1;
		echo "<tr>";
		echo "<td>".$a."</td>";
		echo "<td>".$dd['aktivitas']."</td>";
		echo "<td>".$dd['jumlah']."</td>";
		echo "<td>".$dd['saldo']."</td>";
		echo "</tr>";
	}
?>
</tbody>
</table>

<a href="#masukan"><button type="button" class="btn btn-primary">Pemasukan</button></a> 
<a href="#keluaran"><button type="button" class="btn btn-primary">Pengeluaran</button></a> <hr>
<h1>Pengeluaran</h1>
<div id="keluaran">
<form role="form" action="#masukan" method="post" name="pengeluaran">
	<div class="form-group">
		Pengeluaran digunakan untuk <br>
		<input type="text" name="gunakeluar" class="form-control" placeholder="Jenis pengeluaran">
	</div>
	<div class="form-group">
		Jumlah Pengeluaran<br>
		<input type="text" name="jmlkeluar" class="form-control" placeholder="Jumlah pengeluaran">		
	</div>
	<div class="form-group">
		<input type="submit" name="out_keluar" class="btn btn-primary" value="Inputkan Data">		
	</div>
</form>
<?php
if(isset($_POST['out_keluar'])){
	$gunakeluar	=	$_POST['gunakeluar'];
	$jmlkeluar	=	$_POST['jmlkeluar'];
<<<<<<< HEAD
	$datakeluaran=	mysql_query("INSERT INTO detail_".$_SESSION['login']." VALUES('','$gunakeluar','$jmlkeluar','$saldo');");
=======
	$datakeluaran=	ysql_query("INSERT INTO detail_".$_SESSION['login']." VALUES('','$gunakeluar','$jmlkeluar','$saldo');");
>>>>>>> 7b37bc94de2cc19e48387ca42ac75ac46c432ff1
	if(!$datakeluaran){
		echo "<p><div class='text-primary text-center notice-danger text-danger bg-danger'>Data tidak dapat dimasukkan !</div></p>";
	}
}
?>

</div>
<h1>Pemasukan</h1>
<div id="masukan">
<form role="form" action="#masukan" method="post" name="pengeluaran">
	<div class="form-group">
		Pemasukan dari <br>
		<input type="text" name="masuk_dari" class="form-control" placeholder="Pemasukan">
	</div>
	<div class="form-group">
		Jumlah pemasukan<br>
		<input type="text" name="jmlmasuk" class="form-control" placeholder="Jumlah pemasukan">		
	</div>
	<div class="form-group">
		<input type="submit" name="in_masuk" class="btn btn-primary" value="Inputkan Data">		
	</div>
</form>
<?php
if(isset($_POST['in_masuk'])){
	$masuk_dari	=	$_POST['masuk_dari'];
	$jmlmasuk	=	$_POST['jmlmasuk'];
	$datamasukan=	mysql_query("INSERT INTO detail_".$_SESSION['login']." VALUES('','$masuk_dari','$jmlmasuk','$saldo');");
	if(!$datamasukan){
		echo "<p><div class='text-primary text-center notice-danger text-danger bg-danger'>Data tidak dapat dimasukkan !</div></p>";
	}
}
?>

</div>
<<<<<<< HEAD
=======
<?php 
$saldo=$saldo+$masukan_awal_bulan;
?>
>>>>>>> 7b37bc94de2cc19e48387ca42ac75ac46c432ff1
<?php } ?>
