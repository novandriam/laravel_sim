<?php
include "excel_reader.php";
include_once "library/inc.sessuperadmin.php";
include_once "library/inc.library.php";
if($_GET) {
	if(isset($_POST['btnUpload'])){
			// membaca file excel yang diupload
// membaca file excel yang diupload
$data = new Spreadsheet_Excel_Reader($_FILES['userfile']['tmp_name']);

// membaca jumlah baris dari data excel
$baris = $data->rowcount($sheet_index=0);

// nilai awal counter untuk jumlah data yang sukses dan yang gagal diimport
$sukses = 0;
$gagal = 0;

// import data excel mulai baris ke-2 (karena baris pertama adalah nama kolom)
for ($i=2; $i<=$baris; $i++)
{
  // membaca data kode barang (kolom ke-1)
  $id = $data->val($i, 1);
  // membaca data kode barang (kolom ke-2)
  $tgl_closing = $data->val($i, 2);
  // membaca data kode barang (kolom ke-3)
  $kd_barang = $data->val($i, 3);
  // membaca data nama barang (kolom ke-4)
  $stock = $data->val($i, 4);

  // setelah data dibaca, sisipkan ke dalam tabel mhs
  $query = "INSERT INTO tmp_closing VALUES ('$id','$tgl_closing','$kd_barang', '$stock')";
  $hasil = mysql_query($query);

  // jika proses insert data sukses, maka counter $sukses bertambah
  // jika gagal, maka counter $gagal yang bertambah
  if ($hasil) $sukses++;
  else $gagal++;
}

				// Refresh form
				echo "<meta http-equiv='refresh' content='0; url=?page=Upload-Excel-Closing'>";

		}
	# HAPUS DAFTAR barang DI TMP
	if(isset($_GET['Act'])){
		if(trim($_GET['Act'])=="Delete"){
			# Hapus Tmp jika datanya sudah dipindah
			mysql_query("DELETE FROM tmp_closing WHERE id='".$_GET['ID']."'", $koneksidb) 
				or die ("Gagal kosongkan tmp".mysql_error());
		}
		if(trim($_GET['Act'])=="Succes"){
			echo "<b>DATA BERHASIL DISIMPAN</b> <br><br>";
		
	}
	
	}	
	if($_POST) {
	# TOMBOL TRANSFER DIKLIK
	if(isset($_POST['btnTransfer'])){
	$message = array();
	$cekSql ="SELECT COUNT(kd_barang) As qty FROM tmp_closing";
		$cekQry = mysql_query($cekSql, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$cekRow = mysql_fetch_array($cekQry);
		if ($cekRow['qty'] < 1) {
			$message[] = "<b>Item Barang</b> belum ada yang dimasukan, <b>minimal 1 barang</b>.";
		}
		else {
		
		
		
			# Ambil semua data barang yang dipilih, berdasarkan user yg login
				$tmpSql ="SELECT * FROM tmp_closing ";
				$tmpQry = mysql_query($tmpSql, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
				while ($tmpRow = mysql_fetch_array($tmpQry)) {
					// Masukkan semua barang yang udah diisi ke tabel closing
	$itemSql = "INSERT INTO closing SET tgl_closing='$tmpRow[tgl_closing]',kd_barang='$tmpRow[kd_barang]', stock='$tmpRow[stock]'";
					mysql_query($itemSql, $koneksidb) or die ("Gagal Query data closing: ".mysql_error());
						}
				
						# Kosongkan Tmp jika datanya sudah dipindah
				mysql_query("TRUNCATE TABLE tmp_closing ", $koneksidb) or die ("Gagal kosongkan tmp".mysql_error());
				// Refresh form
				echo "<meta http-equiv='refresh' content='0; url=?page=Data-Closing'>";
						}
				}
		
		if(isset($_POST['btnHapus'])){
				mysql_query("TRUNCATE TABLE tmp_closing ", $koneksidb) or die ("Gagal kosongkan tmp".mysql_error());
				// Refresh form
				echo "<meta http-equiv='refresh' content='0; url=?page=Upload-Excel-Closing'>";

		}
		# JIKA ADA PESAN ERROR DARI VALIDASI
	// (Form Kosong, atau Duplikat ada), Ditampilkan lewat kode ini
	if (! count($message)==0 ){
		echo "<div class='mssgBox'>";
		echo "<img src='images/attention.png' class='imgBox'> <hr>";
			$Num=0;
			foreach ($message as $indeks=>$pesan_tampil) { 
			$Num++;
				echo "&nbsp;&nbsp;$Num. $pesan_tampil<br>";	
			} 
		echo "</div> <br>"; 
	}
	// ============================================================================
		}
	
	}
	
?>
<style type="text/css">
<!--
.style1 {
	color: #000099;
	font-weight: bold;
}
.style1 em {
	color: #F00;
	font-family: "Courier New", Courier, monospace;
	font-size: 15px;
}
.table-list tr td .style2 {
	color: #FFF;
}
-->
</style>
<form action="?page=Upload-Excel-Closing" method="post"  name="frmadd" enctype="multipart/form-data" target="_self">
<table class="table-list" width="100%" style="margin-top:0px;">
	<tr>
	  <td colspan="3"><h2>UPLOAD DATA BARANG DARI EXCEL UNTUK CLOSING AWAL</h2></td>
	</tr>
</table>

 <p>Silakan Pilih File Excel :    <input name="userfile" type="file">
    <input name="btnUpload" type="submit" value="Import">
     <input name="btnHapus" type="submit" value="Hapus Semua">
</p>
  <p>
(cari file excel: <span class="style1">template_closingawal.xls</span> di folder template excel)    
  </p>
<table class="table-list" width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="left" colspan="8">DAFTAR  DETAIL BARANG</th>
    </tr>
  <tr>
    <td width="30" align="center" bgcolor="#CCCCCC"><b>No</b></td>
    <td width="50" align="center" bgcolor="#CCCCCC"><b>Tgl. Closing</b></td>
    <td width="100" align="center" bgcolor="#CCCCCC"><b>Kode</b></td>
    <td width="200" bgcolor="#CCCCCC" align="left"><b>Nama Barang </b></td>
    <td width="80" align="center" bgcolor="#CCCCCC"><strong>Stock</strong> </td>
    <td width="35" align="center" bgcolor="#CCCCCC"><strong>Satuan</strong> </td>
    <td width="75" align="center" bgcolor="#CCCCCC"><strong>Kategori</strong> </td>
    <td width="45" align="center" bgcolor="#FFCC00"><b>Delete</b></td>
  </tr>
<?php
$tmpSql ="SELECT tmp_closing.*, kategori.*, barang.kd_barang,barang.nm_barang,barang.satuan,barang.kd_kategori
		FROM tmp_closing inner join barang on tmp_closing.kd_barang=barang, barang inner join kategori on barang.kd_kategori=kategori.kd_kategori	ORDER BY tmp_closing.id ";
$tmpQry = mysql_query($tmpSql, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
$jml	 = mysql_num_rows($tmpQry);
$dataSql ="SELECT id FROM tmp_closing ";
$dataQry = mysql_query($dataSql, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
$jmldata	 = mysql_num_rows($dataQry);
$selisih = $jmldata - $jml;
$nomor=0;
while($tmpRow = mysql_fetch_array($tmpQry)) {
	$ID		= $tmpRow['id'];
	
	$nomor++;
?>
  <tr>
    <td align="center"><b><?php echo $nomor; ?></b></td>
    <td align="center"><b><?php echo IndonesiaTgl($tmpRow['tgl_closing']); ?></b></td>
    <td align="center"><b><?php echo $tmpRow['kd_barang']; ?></b></td>
    <td align="left"><?php echo $tmpRow['nm_barang']; ?></td>
    <td align="right"><?php echo format_angka($tmpRow['stock']); ?></div></td>
    <td align="center"><?php echo $tmpRow['satuan']; ?></td>
    <td align="left"><?php echo $tmpRow['nm_kategori']; ?></td>
    <td align="center" bgcolor="#FFFFCC"><a href="?page=Upload-Excel-Closing&Act=Delete&ID=<?php echo $ID; ?>"  target="_self"><img src="images/hapus.gif" width="16" height="16" border="0" /></a></td>
  </tr>
<?php 
}?>
<tr bgcolor="#FFFFCC">
    <td colspan="3" align="left">Jumlah data yang sesuai : <b><?php echo $jml; ?> </b></td>
    <td colspan="2" align="left">Jumlah data di tmp excel: <b><?php echo $jmldata; ?> </b></td>
    <td colspan="3" align="left" bgcolor="#FF0000"><strong><span class="style2">Selisih data: <b><?php echo $selisih; ?> </b></span></strong></td>
 
  </tr>
</table>
 <p class="style1"><em>Agar dipastikan terlebih dahulu bahwa jumlah barang yang akan ditransfer telah sesuai dengan data excel yang diupload. Apabila masih terdapat selisih data, harap tidak melakukan transfer data sebelum dilakukan perbaikan/penyesuaian
    
 </em></p>
<input name="btnTransfer" type="submit" style="cursor:pointer;" value="Transfer">
</form>
