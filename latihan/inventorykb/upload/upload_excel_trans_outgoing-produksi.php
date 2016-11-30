<?php
include "excel_reader.php";
include_once "library/inc.sesadmin.php";
include_once "library/inc.library.php";
if($_GET) {
	if(isset($_POST['btnUpload'])){
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
$id = $data->val($i, 1);
  $kode = $data->val($i, 2);
  $jumlah = $data->val($i, 3);
  $ket = $data->val($i, 4);

  // setelah data dibaca, sisipkan ke dalam tabel mhs
  $query = "INSERT INTO tmp_detail_outgoing_produksi VALUES ('$id','$kode', '$jumlah', '$ket')";
  $hasil = mysql_query($query) or die ("Gagal query".mysql_error());

  // jika proses insert data sukses, maka counter $sukses bertambah
  // jika gagal, maka counter $gagal yang bertambah
  if ($hasil) $sukses++;
  else $gagal++;
}


				// Refresh form
				echo "<meta http-equiv='refresh' content='0; url=?page=Upload-Detail-Outgoing-Produksi'>";

		}
	# HAPUS DAFTAR barang DI TMP
	if(isset($_GET['Act'])){
		if(trim($_GET['Act'])=="Delete"){
			# Hapus Tmp jika datanya sudah dipindah
			mysql_query("DELETE FROM tmp_detail_outgoing_produksi WHERE id='".$_GET['ID']."'", $koneksidb) 
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
	$cekSql ="SELECT COUNT(kode) As qty FROM tmp_detail_outgoing_produksi";
		$cekQry = mysql_query($cekSql, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$cekRow = mysql_fetch_array($cekQry);
		if ($cekRow['qty'] < 1) {
			$message[] = "<b>Item Barang</b> belum ada yang dimasukan, <b>minimal 1 barang</b>.";
		}
		else {
			# Ambil semua data barang yang dipilih, berdasarkan user yg login
				$tmpSql ="SELECT * FROM tmp_detail_outgoing_produksi ";
				$tmpQry = mysql_query($tmpSql, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
				while ($tmpRow = mysql_fetch_array($tmpQry)) {
					// Masukkan semua barang yang udah diisi ke tabel tmp outgoing-produksi detail
					$itemSql = "INSERT INTO tmp_outgoing_produksi SET kode='$tmpRow[kode]', jumlah='$tmpRow[jumlah]', ket='$tmpRow[ket]', userid='".$_SESSION['SES_LOGIN']."'";
					mysql_query($itemSql, $koneksidb) or die ("Gagal Query detail barang : ".mysql_error());
						}
						
						# Kosongkan Tmp jika datanya sudah dipindah
				mysql_query("TRUNCATE TABLE tmp_detail_outgoing_produksi ", $koneksidb) or die ("Gagal kosongkan tmp".mysql_error());
				// Refresh form
				echo "<meta http-equiv='refresh' content='0; url=?page=Outgoing-Produksi-Add'>";
						}
		}
		if(isset($_POST['btnHapus'])){
				mysql_query("TRUNCATE TABLE tmp_detail_outgoing_produksi ", $koneksidb) or die ("Gagal kosongkan tmp".mysql_error());
				// Refresh form
				echo "<meta http-equiv='refresh' content='0; url=?page=Upload-Detail-Outgoing-Produksi'>";

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
	font-weight: bold;
}
-->
</style>
<form action="?page=Upload-Detail-Outgoing-Produksi" method="post"  name="frmadd" enctype="multipart/form-data" target="_self">
<table class="table-list" width="100%" style="margin-top:0px;">
	<tr>
	  <td colspan="3"><h2>UPLOAD DETAIL DATA BARANG DARI EXCEL UNTUK TRANSAKSI OUTGOING-PRODUKSI</h2></td>
	</tr>
       <tr>
    <td colspan="3"  align="right"><a href="template/detailbrg_outgoing-produksi.php" target="_self" alt="Buat Template Excel" title="Buat template dalam format excel" ><img src="images/excel.jpg" width="15" height="15"  border="0"  alt="Buat Template Excel" />Buat Template</a></td>
    </tr>
</table>

 <p>Silakan Pilih File Excel :    <input name="userfile" type="file">
    <input name="btnUpload" type="submit" value="Import">
     <input name="btnHapus" type="submit" value="Hapus Semua">
</p>
  <p>
(<span class="style2">klik <strong><a href="template/detailbrg_outgoing-produksi.php" target="_self">Buat Template</a></strong> untuk membuat file template dari excel</span>)  </p>
<table class="table-list" width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th colspan="8" align="left">DAFTAR  DETAIL BARANG</th>
    </tr>
  <tr>
    <td width="30" align="center" bgcolor="#CCCCCC"><b>No</b></td>
    <td width="150" align="left" bgcolor="#CCCCCC"><b>Kode</b></td>
    <td width="250" align="left" bgcolor="#CCCCCC"><b>Nama Barang </b></td>
    <td width="45" align="center" bgcolor="#CCCCCC"><strong>Satuan</strong> </td>
    <td width="45" align="right" bgcolor="#CCCCCC"><strong>Jumlah</strong> </td>
    <td width="135" align="left" bgcolor="#CCCCCC"><strong>Keterangan</strong> </td>
    <td width="20" align="center" bgcolor="#FFCC00"><b>Edit</b></td>
    <td width="20" align="center" bgcolor="#FFCC00"><b>Del</b></td>
  </tr>
<?php
$tmpSql ="SELECT barang.kd_barang,barang.nm_barang,barang.satuan, tmp_detail_outgoing_produksi.*
		FROM barang, tmp_detail_outgoing_produksi
		WHERE tmp_detail_outgoing_produksi.kode=barang.kd_barang
		ORDER BY tmp_detail_outgoing_produksi.id ";
$tmpQry = mysql_query($tmpSql, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
$jml	 = mysql_num_rows($tmpQry);
$dataSql ="SELECT * FROM tmp_detail_outgoing_produksi ";
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
    <td align="left"><b><?php echo $tmpRow['kode']; ?></b></td>
    <td align="left"><?php echo $tmpRow['nm_barang']; ?></td>
    <td align="center"><?php echo $tmpRow['satuan']; ?></td>
    <td align="right"><?php echo format_angka($tmpRow['jumlah']); ?></div></td>
    <td align="left"><?php echo $tmpRow['ket']; ?></td>
    <td align="center" bgcolor="#FFFFCC"><a href="?page=Edit-Trans-Outgoing-Produksi&amp;ID=<?php echo $ID; ?>"  target="_self"><img src="images/b_edit.png" width="16" height="16" border="0" /></a></td>
    <td align="center" bgcolor="#FFFFCC"><a href="?page=Upload-Detail-Outgoing-Produksi&Act=Delete&ID=<?php echo $ID; ?>"  target="_self"><img src="images/hapus.gif" width="16" height="16" border="0" /></a></td>
  </tr>
<?php 
}?>
   <tr bgcolor="#FFFFCC">
    <td colspan="2" align="left">Jumlah data yang sesuai : <b><?php echo $jml; ?> </b></td>
    <td colspan="2" align="left">Jumlah data di tmp excel: <b><?php echo $jmldata; ?> </b></td>
    <td colspan="4" align="left" bgcolor="#FF0000"><span class="style2">Selisih data: <b><?php echo $selisih; ?> </b></span></td>
  </tr>
</table>
  <p class="style1"><em>Agar dipastikan terlebih dahulu bahwa jumlah barang yang akan ditransfer telah sesuai dengan data excel yang diupload. Apabila masih terdapat selisih data, harap tidak melakukan transfer data sebelum dilakukan perbaikan/penyesuaian
    
 </em></p>
<input name="btnTransfer" type="submit" style="cursor:pointer;" value="Transfer">
</form>
