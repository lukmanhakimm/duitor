<?php

include "function.php";
get_info("koneksi.php","Untuk koneksi ke database");

//deklarasi variabel 
$host	=	"localhost";
$user	=	"root";
$pass	=	"";
$db		=	"keuangan";

//koneksi ke database
$konek	=	mysql_connect($host,$user,$pass);

//uji koneski
if(!$konek){
	echo "<h2>Tidak dapat terkoneksi ke database</h2>";
}

//memilih database
$pilih_db	=	mysql_select_db($db);
if(!$pilih_db){
	echo "<h2>Tidak dapat memilih database</h2>";
}

?>
