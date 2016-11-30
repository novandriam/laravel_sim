<?php
include_once "library/inc.sesadmin.php";
include_once "library/inc.library.php";
# Opsi status
$arrKategori	= array("Pemasukan barang","Pengeluaran barang");
if($_GET) {
	if(isset($_POST['btnSave'])){
		# Validasi form, jika kosong sampaikan pesan error
		$message = array();
		if (trim($_POST['txtCatatan'])=="") {
			$message[] = "<b>Nama Tujuan Pengiriman</b> tidak boleh kosong !";		
		}
		if (trim($_POST['cmbKategori'])=="BLANK") {
			$message[] = "<b>Kategori catatan</b> belum dipilih!";		
		}
		# Baca Variabel Form
		$txtCatatan= $_POST['txtCatatan'];
		$txtCatatan= str_replace("'","&acute;",$txtCatatan);
		$cmbKategori	= $_POST['cmbKategori'];
		# Validasi Nama Catatan, jika sudah ada akan ditolak
		$sqlCek="SELECT * FROM catatan WHERE nm_catatan='$txtCatatan'";
		$qryCek=mysql_query($sqlCek, $koneksidb) or die ("Eror Query".mysql_error()); 
		if(mysql_num_rows($qryCek)>=1){
			$message[] = "Maaf, Catatan Pemasukan/Pengeluaran barang dengan nama <b> $txtCatatan</b> sudah ada, ganti dengan yang lain";
		}

		# SIMPAN DATA KE DATABASE. Jika jumlah error message tidak ada, simpan datanya
		if(count($message)==0){			
			$NewID	= buatKode("catatan", "CAT-");
			$qrySave=mysql_query("INSERT INTO catatan SET kd_catatan='$NewID', nm_catatan='$txtCatatan', kategori='$cmbKategori'") 
					 or die ("Gagal query".mysql_error());
			if($qrySave){
				$useractSave=mysql_query("INSERT INTO user_act SET userid='".$_SESSION['SES_LOGIN']."', aktivitas='Menambah data tujuan pengiriman dengan nama $txtCatatan', tanggal='".date("Y-m-d")."', jam='".date("G:i:s")."'") 
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
	
	# MASUKKAN DATA KE VARIABEL
	// Supaya saat ada pesan error, data di dalam form tidak hilang. Jadi, tinggal meneruskan/memperbaiki yg salah
	$dataKode	= buatKode("catatan", "CAT-");
	$dataCatatan	= isset($_POST['txtCatatan']) ? $_POST['txtCatatan'] : '';
	$dataKategori	= isset($_POST['cmbKategori']) ? $_POST['cmbKategori'] : '';
} // Penutup GETori
?>
<form action="?page=Add-Catatan" method="post" name="frmadd" target="_self">
<table class="table-list" width="100%" style="margin-top:0px;">
	<tr>
	  <td colspan="3"><h2>TAMBAH DATA TUJUAN PEMASUKAN/PENGELUARAN</h2></td>
	</tr>
	<tr>
	  <td width="15%"><b>Kode</b></td>
	  <td width="1%"><b>:</b></td>
	  <td width="84%"><input name="txtKode" value="<?php echo $dataKode; ?>" size="10" maxlength="4" readonly="readonly"/></td></tr>
	<tr>
	  <td><b>Nama Catatan</b></td>
	  <td><b>:</b></td>
	  <td><input name="txtCatatan" value="<?php echo $dataCatatan; ?>" size="80" maxlength="100" onKeyPress="return tabE(this,event)"/></td>
	</tr>
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
	   <td><input onclick="return confirm('ANDA YAKIN AKAN MENYIMPAN DATA TRANSAKSI, DATA YANG TERSIMPAN TIDAK DAPAT DIUBAH/DIHAPUS?')" type="submit" name="btnSave" value=" SIMPAN " style="cursor:pointer;">&nbsp;&nbsp;&nbsp;<input type="button" value="Batal" onclick="self.history.back()" /></td>
    </tr>
</table>
</form>
