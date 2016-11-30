<?php
include_once "library/inc.sesadmin.php";
include_once "library/inc.library.php";

if($_GET) {
	if(isset($_POST['btnSave'])){
		# Validasi form, jika kosong sampaikan pesan error
		$message = array();
		if (trim($_POST['txtJenis'])=="") {
			$message[] = "Jenis satuan tidak boleh kosong !";		
		}
	if (trim($_POST['txtNama'])=="") {
			$message[] = "Nama satuan tidak boleh kosong !";		
		}

		
		# Baca Variabel Form
		$txtJenis= $_POST['txtJenis'];
		$txtJenis= str_replace("'","&acute;",$txtJenis);
		$txtNama= $_POST['txtNama'];
		$txtNama= str_replace("'","&acute;",$txtNama);
		
		
		# SIMPAN PERUBAHAN DATA, Jika jumlah error message tidak ada, simpan datanya
		if(count($message)==0){	
			$qryUpdate=mysql_query("UPDATE satuan SET jenis='$txtJenis', nama='$txtNama'	WHERE kode ='".$_POST['txtKode']."'") 
					   or die ("Gagal query update".mysql_error());
			if($qryUpdate){
				$useractSave=mysql_query("INSERT INTO user_act SET userid='".$_SESSION['SES_LOGIN']."', aktivitas='Mengubah data satuan barang dengan jenis $txtJenis dan nama $txtNama', tanggal='".date("Y-m-d")."', jam='".date("G:i:s")."'") 
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
	
	# TAMPILKAN DATA LOGIN UNTUK DIEDIT
	$KodeEdit= isset($_GET['Kode']) ?  $_GET['Kode'] : $_POST['txtKode']; 
	$sqlShow = "SELECT * FROM satuan WHERE kode='$KodeEdit'";
	$qryShow = mysql_query($sqlShow, $koneksidb)  or die ("Query ambil data satuan salah : ".mysql_error());
	$dataShow = mysql_fetch_array($qryShow);

	# MASUKKAN DATA KE VARIABEL
	$dataKode	= $dataShow['kode'];
	$dataJenis	= isset($dataShow['jenis']) ?  $dataShow['jenis'] : $_POST['txtJenis'];
	$dataNama	= isset($dataShow['nama']) ?  $dataShow['nama'] : $_POST['txtNama'];
} // Penutup GET
?>
<form action="?page=Edit-Satuan" method="post" name="frmedit">
<table class="table-list" width="100%" style="margin-top:0px;">
	<tr>
	  <td colspan="3"><h2>UBAH SATUAN BARANG</h2></td>
	</tr>
	<tr>
	  <td width="15%"><b>Kode</b></td>
	  <td width="1%"><b>:</b></td>
	  <td width="84%"><input name="txtLock" value="<?php echo $dataKode; ?>" size="8" maxlength="4"  readonly="readonly"/>
    <input name="txtKode" type="hidden" value="<?php echo $dataKode; ?>" /></td></tr>
	<tr>
	  <td><b>Jenis satuan </b></td>
	  <td><b>:</b></td>
	  <td><input name="txtJenis" type="text" value="<?php echo $dataJenis; ?>" size="80" maxlength="100" />
      </td>
      </tr>
<tr>
	  <td><b>Nama satuan </b></td>
	  <td><b>:</b></td>
	  <td><input name="txtNama" type="text" value="<?php echo $dataNama; ?>" size="80" maxlength="100" />
      </td>
      </tr>

	<tr><td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td><input type="submit" name="btnSave" value=" SIMPAN " style="cursor:pointer;">&nbsp;&nbsp;&nbsp;<input type="button" value="Batal" onclick="self.history.back()" /></td>
    </tr>
</table>
</form>

