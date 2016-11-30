<?php
# Fungsi untuk mengubah teks asli
function ubah_teks($teks)
{
	$teks = strrev($teks);
	$st = "";
	for ($i=0; $i < strlen($teks); $i++)
	{
	$ascii = ord(substr($teks, $i, 1));
	$hex = dechex($ascii);
	if (strlen($hex) ==1)
	$hex = "0" . $hex;
	$st = $st . $hex;
	}
return $st;
}

# Fungsi untuk mengembalikan teks asli
function balik_teks($teks)
{
	$st = "";
	for ($i=0; $i < strlen($teks) / 2; $i++)
	{
		$dua_angka = substr($teks, 2 * $i, 2);
		$des = hexdec($dua_angka);
		$kar = chr ($des);
		
		$st = $st . $kar;
	}
	
	$st = strrev($st);
	return $st;
}

# Fungsi untuk membuat kode automatis
function buatKode($tabel, $inisial){
	$struktur	= mysql_query("SELECT * FROM $tabel");
	$field		= mysql_field_name($struktur,0);
	$panjang	= mysql_field_len($struktur,0);

 	$qry	= mysql_query("SELECT MAX(".$field.") FROM ".$tabel);
 	$row	= mysql_fetch_array($qry); 
 	if ($row[0]=="") {
 		$angka=0;
	}
 	else {
 		$angka		= substr($row[0], strlen($inisial));
 	}
	
 	$angka++;
 	$angka	=strval($angka); 
 	$tmp	="";
 	for($i=1; $i<=($panjang-strlen($inisial)-strlen($angka)); $i++) {
		$tmp=$tmp."0";	
	}
 	return $inisial.$tmp.$angka;
}

# Fungsi untuk membalik tanggal dari format Indo -> English
function InggrisTgl($tanggal){
	$tgl=substr($tanggal,0,2);
	$bln=substr($tanggal,3,2);
	$thn=substr($tanggal,6,4);
	$awal="$thn-$bln-$tgl";
	return $awal;
}

# Fungsi untuk membalik tanggal dari format English -> Indo
function IndonesiaTgl($tanggal){
	$tgl=substr($tanggal,8,2);
	$bln=substr($tanggal,5,2);
	$thn=substr($tanggal,0,4);
	$awal="$tgl-$bln-$thn";
	return $awal;
}
# Fungsi untuk membuat format rupiah pada angka (uang)
function format_angka($angka) {
	$hasil =  number_format($angka,2, ",",".");
	return $hasil;
}
# Fungsi untuk membuat format rupiah pada angka (uang)
function format_nomor($nomor) {
	$hasil =  sprintf("%06d", $nomor);
	return $hasil;
}

# Fungsi untuk format tanggal, dipakai plugins Callendar
function form_tanggal($nama,$value=''){
	echo" <input type='text' name='$nama' id='$nama' size='9' readonly='readonly' onKeyPress='return tabE(this,event)' maxlength='20' value='$value'/>&nbsp;
	<img src='images/calendar-add-icon.png' align='top' style='cursor:pointer; margin-top:7px;' alt='kalender'onclick=\"displayCalendar(document.getElementById('$nama'),'dd-mm-yyyy',this)\"/>			
	";
}
?>