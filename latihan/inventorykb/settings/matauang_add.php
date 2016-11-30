<?php
include_once "library/inc.sesadmin.php";
include_once "library/inc.library.php";
$tglrekam=date("yyyy/mm/dd G:i:s");
$jamrekam=date("yyyy/mm/dd G:i:s");
if($_GET) {
	if(isset($_POST['btnSave'])){
		# Validasi form, jika kosong sampaikan pesan error
		$message = array();
		if (trim($_POST['txtJenis'])=="") {
			$message[] = "<b>Kode mata uang</b> tidak boleh kosong !";		
		}
		if (trim($_POST['txtNama'])=="") {
			$message[] = "<b>Uraian mata uang</b> tidak boleh kosong !";		
		}
		if (trim($_POST['txtNegara'])=="") {
			$message[] = "<b>Negara asal mata uang</b> tidak boleh kosong !";		
		}

		
		# Baca Variabel Form
		$txtJenis= $_POST['txtJenis'];
		$txtJenis= str_replace("'","&acute;",$txtJenis);
		$txtNama= $_POST['txtNama'];
		$txtNama= str_replace("'","&acute;",$txtNama);
		$txtNegara= $_POST['txtNegara'];
		$txtNegara= str_replace("'","&acute;",$txtNegara);

		
		# Validasi satuan, jika sudah ada akan ditolak
		$sqlCek="SELECT * FROM matauang WHERE jenis_valas='$txtjenis'";
		$qryCek=mysql_query($sqlCek, $koneksidb) or die ("Eror Query".mysql_error()); 
		if(mysql_num_rows($qryCek)>=1){
			$message[] = "Maaf, Kode mata uang <b> $txtJenis </b> sudah ada, ganti dengan yang lain";
		}

		# SIMPAN DATA KE DATABASE. Jika jumlah error message tidak ada, simpan datanya
		if(count($message)==0){			
			$NewID	= buatKode("matauang", "CUR");
			$qrySave=mysql_query("INSERT INTO matauang SET kd_valas='$NewID', jenis_valas='$txtJenis', nama_valas='$txtNama', negara_valas='$txtNegara'") 
					 or die ("Gagal query".mysql_error());
				
			if($qrySave){
			$useractSave=mysql_query("INSERT INTO user_act SET userid='".$_SESSION['SES_LOGIN']."', aktivitas='Menyimpan data mata uang dengan data jenis $txtJenis dan nama $txtNama', tanggal='".date("Y-m-d")."', jam='".date("G:i:s")."'") 
					 or die ("Gagal query".mysql_error());

				echo "<meta http-equiv='refresh' content='0; url=?page=Data-Matauang'>";
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
	$dataKode	= buatKode("matauang", "CUR");
	$dataJenis	= isset($_POST['txtJenis']) ? $_POST['txtJenis'] : '';
	$dataNama	= isset($_POST['txtNama']) ? $_POST['txtNama'] : '';
	$dataNegara	= isset($_POST['txtNegara']) ? $_POST['txtNegara'] : '';

} // Penutup GET
?>
<form action="?page=Add-Matauang" method="post" name="frmadd" target="_self">
<table class="table-list" width="100%" style="margin-top:0px;">
	<tr>
	  <td colspan="3"><h2>TAMBAH MATA UANG</h2></td>
	</tr>
	<tr>
	  <td width="15%"><b>ID</b></td>
	  <td width="1%"><b>:</b></td>
	  <td width="84%"><input name="txtKode" value="<?php echo $dataKode; ?>" size="10" maxlength="4" readonly="readonly"/></td></tr>
	<tr>
	  <td><b>Kode mata uang</b></td>
	  <td><b>:</b></td>
	  <td><input name="txtJenis" value="<?php echo $dataJenis; ?>" size="80" maxlength="100" onKeyPress="return tabE(this,event)" /></td>
	</tr>
	<tr>
	  <td><b>Uraian nama  </b></td>
	  <td><b>:</b></td>
	  <td><input name="txtNama" value="<?php echo $dataNama; ?>" size="80" maxlength="100" onKeyPress="return tabE(this,event)" /></td>
	</tr>
	<tr>
	  <td><b>Negara  </b></td>
	  <td><b>:</b></td>
	  <td><input name="txtNegara" value="<?php echo $dataNegara; ?>" size="80" maxlength="100" onKeyPress="return tabE(this,event)" /></td>
	</tr>

	<tr><td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td><input onclick="return confirm('ANDA YAKIN AKAN MENYIMPAN DATA?')" type="submit" name="btnSave" value=" SIMPAN " style="cursor:pointer;">&nbsp;&nbsp;&nbsp;<input type="button" value="Batal" onclick="self.history.back()" /></td>
    </tr>
</table>
</form>
