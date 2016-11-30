<?php
include_once "library/inc.sesadmin.php";
include_once "library/inc.library.php";
$arrKategori	= array("Pemasukan barang","Pengeluaran barang");
$KodeEdit= isset($_GET['Kode']) ?  $_GET['Kode'] : $_POST['txtKode']; 
if($_GET) {
	if(isset($_POST['btnSave'])){
		# Validasi form, jika kosong sampaikan pesan error
		$message = array();
		if (trim($_POST['txtCatatan'])=="") {
			$message[] = "Nama tujuan pengiriman tidak boleh kosong !";		
		}
		if (trim($_POST['cmbKategori'])=="BLANK") {
			$message[] = "<b>Kategori catatan</b> belum dipilih!";		
		}
		# Baca Variabel Form
		$txtCatatan= $_POST['txtCatatan'];
		$txtCatatan= str_replace("'","&acute;",$txtCatatan);
		$txtLama= $_POST['txtLama'];
		$txtLama= str_replace("'","&acute;",$txtLama);
		$cmbKategori	= $_POST['cmbKategori'];
		# Validasi Nama Kategori, jika sudah ada akan ditolak
		$sqlCek="SELECT * FROM catatan WHERE nm_catatan='$txtCatatan' AND NOT(nm_catatan='$txtLama')";
		$qryCek=mysql_query($sqlCek, $koneksidb) or die ("Eror Query".mysql_error()); 
		if(mysql_num_rows($qryCek)>=1){
			$message[] = "Maaf, Tujuan Pengiriman dengan nama <b> $txtCatatan </b> sudah ada, ganti dengan yang lain";
		}
		
		# SIMPAN PERUBAHAN DATA, Jika jumlah error message tidak ada, simpan datanya
		if(count($message)==0){	
			$qryUpdate=mysql_query("UPDATE catatan SET nm_catatan='$txtCatatan',kategori='$cmbKategori'	WHERE kd_catatan ='".$_POST['txtKode']."'") 
					   or die ("Gagal query update".mysql_error());
			if($qryUpdate){
					$useractSave=mysql_query("INSERT INTO user_act SET userid='".$_SESSION['SES_LOGIN']."', aktivitas='Mengubah data tujuan pengiriman dengan kode:$KodeEdit dan nama $txtCatatan', tanggal='".date("Y-m-d")."', jam='".date("G:i:s")."'") 
					 or die ("Gagal query".mysql_error());
				echo "<meta http-equiv='refresh' content='0; url=?page=Data-Catatan'>";
			}
			exit;
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
	} // Penutup POST
	
	# TAMPILKAN DATA LOGIN UNTUK DIEDIT
	$KodeEdit= isset($_GET['Kode']) ?  $_GET['Kode'] : $_POST['txtKode']; 
	$sqlShow = "SELECT * FROM catatan WHERE kd_catatan='$KodeEdit'";
	$qryShow = mysql_query($sqlShow, $koneksidb)  or die ("Query ambil data catatan salah : ".mysql_error());
	$dataShow = mysql_fetch_array($qryShow);

	# MASUKKAN DATA KE VARIABEL
	$dataKode	= $dataShow['kd_catatan'];
	$dataNama	= isset($dataShow['nm_catatan']) ?  $dataShow['nm_catatan'] : $_POST['txtCatatan'];
	$dataKategori	= isset($dataShow['kategori']) ?  $dataShow['kategori'] : $_POST['cmbKategori'];
	$dataNamaLm	= $dataShow['nm_catatan'];
} // Penutup GET
?>
<form action="?page=Edit-Catatan" method="post" name="frmedit">
<table class="table-list" width="100%" style="margin-top:0px;">
	<tr>
	  <td colspan="3"><h2>UBAH DATA CATATAN PEMASUKAN/PENGIRIMAN</h2></td>
	</tr>
	<tr>
	  <td width="15%"><b>Kode</b></td>
	  <td width="1%"><b>:</b></td>
	  <td width="84%"><input name="txtLock" value="<?php echo $dataKode; ?>" size="8" maxlength="4"  readonly="readonly"/>
    <input name="txtKode" type="hidden" value="<?php echo $dataKode; ?>" /></td></tr>
	<tr>
	  <td><b>Nama Catatan</b></td>
	  <td><b>:</b></td>
	  <td><input name="txtCatatan" type="text" value="<?php echo $dataNama; ?>" size="80" maxlength="100" onKeyPress="return tabE(this,event)" />
      <input name="txtLama" type="hidden" value="<?php echo $dataNamaLm; ?>" /></td></tr>
      <tr>
	  <td><strong>Kategori</strong></td>
	  <td><b>:</b></td>
	  <td><select name="cmbKategori" onKeyPress="return tabE(this,event)">
        <option value="BLANK"> </option>
        <?php
          foreach ($arrKategori as $index => $value) {
            if ($value==$dataKategori) {
                $cek="selected";
            } else { $cek = ""; }
            echo "<option value='$value' $cek>$value</option>";
          }
          ?>
      </select></td>
    </tr>
	<tr><td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td><input onclick="return confirm('ANDA YAKIN AKAN MENYIMPAN DATA TRANSAKSI, DATA YANG TERSIMPAN TIDAK DAPAT DIUBAH/DIHAPUS?')" type="submit" name="btnSave" value=" SIMPAN " style="cursor:pointer;">&nbsp;&nbsp;&nbsp;<input type="button" value="Back" onclick="self.history.back()" /> </td>
    </tr>
</table>
</form>

