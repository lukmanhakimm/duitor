<?php

/* ---------------------------------------------------------------------
 * Nama File	: function.php
 * Author		: lukman khakim
 * Desc			: berisi fungsi-fungsi yang digunakan dalam situs ini
 * Tanggal		: Monday, March 16 2015
 * Versi		: 1.0
----------------------------------------------------------------------*/

//menampilkan informasi dokumen
//sebagai header disetiap dokumen
function get_info($filename, $desc){
		echo "
<!-------------------------------------------------------
#	Nama File		: $filename							#
#	Author			: lukman khakim						#
#	Desc			: $desc								#
#	Tanggal			: Monday, March 16 2015				#
#	Version			: 1.0								#
-------------------------------------------------------->
";
}
?>
