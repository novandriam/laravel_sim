<?php
include_once "library/inc.sesadmin.php";
include_once "library/inc.library.php";

if($_GET) {
	if(isset($_POST['btnSave'])){
		# Validasi form, jika kosong sampaikan pesan error
		$message = array();
		if (trim($_POST['txtJenis'])=="") {
			$message[] = "<b>Jenis satuan</b> tidak boleh kosong !";		
		}
		if (trim($_POST['txtNama'])=="") {
			$message[] = "<b>Nama satuan</b> tidak boleh kosong !";		
		}

		
		# Baca Variabel Form
		$txtJenis= $_POST['txtJenis'];
		$txtJenis= str_replace("'","&acute;",$txtJenis);
		$txtNama= $_POST['txtNama'];
		$txtNama= str_replace("'","&acute;",$txtNama);

		
		# Validasi satuan, jika sudah ada akan ditolak
		$sqlCek="SELECT jenis FROM satuan WHERE jenis='$txtJenis'";
		$qryCek=mysql_query($sqlCek, $koneksidb) or die ("Eror Query".mysql_error()); 
		if(mysql_num_rows($qryCek)>=1){
			$message[] = "Maaf, Jenis satuan <b> $txtJenis </b> sudah ada, ganti dengan yang lain";
		}

		# SIMPAN DATA KE DATABASE. Jika jumlah error message tidak ada, simpan datanya
		if(count($message)==0){			
			$NewID	= buatKode("satuan", "SAT");
			$qrySave=mysql_query("INSERT INTO satuan SET kode='$NewID', jenis='$txtJenis', nama='$txtNama'") 
					 or die ("Gagal query".mysql_error());
			if($qrySave){
				$useractSave=mysql_query("INSERT INTO user_act SET userid='".$_SESSION['SES_LOGIN']."', aktivitas='Menambah data satuan barang dengan jenis $txtJenis dan nama $txtNama', tanggal='".date("Y-m-d")."', jam='".date("G:i:s")."'") 
					 or die ("Gagal query".mysql_error());
				echo "<meta http-equiv='refresh' content='0; url=?page=Data-Satuan'>";
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
	$dataKode	= buatKode("satuan", "SAT");
	$dataJenis	= isset($_POST['txtJenis']) ? $_POST['txtJenis'] : '';
	$dataNama	= isset($_POST['txtNama']) ? $_POST['txtNama'] : '';

} // Penutup GET
?>
<form action="?page=Add-Satuan" method="post" name="frmadd" target="_self">
<table class="table-list" width="100%" style="margin-top:0px;">
	<tr>
	  <td colspan="3"><h2>TAMBAH SATUAN BARANG</h2></td>
	</tr>
	<tr>
	  <td width="15%"><b>Kode</b></td>
	  <td width="1%"><b>:</b></td>
	  <td width="84%"><input name="txtKode" value="<?php echo $dataKode; ?>" size="10" maxlength="4" readonly="readonly"/></td></tr>
	<tr>
	  <td><b>Jenis satuan </b></td>
	  <td><b>:</b></td>
	  <td><input name="txtJenis" value="<?php echo $dataJenis; ?>" size="80" maxlength="100" onKeyPress="return tabE(this,event)" /></td>
	</tr>
	<tr>
	  <td><b>Nama satuan </b></td>
	  <td><b>:</b></td>
	  <td><input name="txtNama" value="<?php echo $dataNama; ?>" size="80" maxlength="100" onKeyPress="return tabE(this,event)" /></td>
	</tr>

	<tr><td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td><input onclick="return confirm('ANDA YAKIN AKAN MENYIMPAN DATA?')" type="submit" name="btnSave" value=" SIMPAN " style="cursor:pointer;">&nbsp;&nbsp;&nbsp;<input type="button" value="Batal" onclick="self.history.back()" /></td>
    </tr>
</table>
</form>
