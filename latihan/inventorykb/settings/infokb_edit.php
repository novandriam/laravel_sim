<?php
include_once "library/inc.sesadmin.php";
include_once "library/inc.library.php";

if($_GET) {
	if(isset($_POST['btnSave'])){
		# Validasi form, jika kosong sampaikan pesan error
		$message = array();
		if (trim($_POST['txtKode'])=="") {
			$message[] = "<b>Kode perusahaan</b> tidak boleh kosong !";		
		}
		if (trim($_POST['txtNama'])=="") {
			$message[] = "<b>Nama perusahaan</b> tidak boleh kosong !";		
		}
		if (trim($_POST['txtAlamat'])=="") {
			$message[] = "<b>Alamat Lengkap</b> tidak boleh kosong !";		
		}
		if (trim($_POST['txtProp'])=="") {
			$message[] = "<b>Propinsi</b> tidak boleh kosong !";		
		}

		if (trim($_POST['txtKota'])=="") {
			$message[] = "<b>Kota </b> tidak boleh kosong !";		
		}
		if (trim($_POST['txtNpwp'])=="") {
			$message[] = "<b>NPWP </b> tidak boleh kosong !";		
		}
		if (trim($_POST['txtTelp'])=="") {
			$message[] = "<b>Nomor Telepon</b> tidak boleh kosong !";		
		}
		if (trim($_POST['txtFax'])=="") {
			$message[] = "<b>Nomor Faximile</b> tidak boleh kosong !";		
		}

		if (trim($_POST['txtSkepkb'])=="") {
			$message[] = "<b>Nomor skep KB</b> tidak boleh kosong !";		
		}
		if (trim($_POST['txtTglskep'])=="") {
			$message[] = "<b>Tanggal skep KB</b> tidak boleh kosong !";		
		}
				
		# Baca Variabel Form
		$txtKode= $_POST['txtKode'];
		$txtKode= str_replace("'","&acute;",$txtKode);
		$txtNama= $_POST['txtNama'];
		$txtNama= str_replace("'","&acute;",$txtNama);
		$txtAlamat	= $_POST['txtAlamat'];
		$txtAlamat	= str_replace("'","&acute;",$txtAlamat);
		$txtProp	= $_POST['txtProp'];
		$txtProp	= str_replace("'","&acute;",$txtProp);
		$txtKota	= $_POST['txtKota'];
		$txtKota	= str_replace("'","&acute;",$txtKota);
		$txtNpwp	= $_POST['txtNpwp'];
		$txtNpwp	= str_replace("'","&acute;",$txtNpwp);
		$txtTelp	= $_POST['txtTelp'];
		$txtTelp	= str_replace("'","&acute;",$txtTelp);
		$txtFax	= $_POST['txtFax'];
		$txtFax	= str_replace("'","&acute;",$txtFax);
		$txtSkepkb	= $_POST['txtSkepkb'];
		$txtSkepkb	= str_replace("'","&acute;",$txtSkepkb);
		$txtTglskep	= $_POST['txtTglskep'];
		$txtTglskep	= str_replace("'","&acute;",$txtTglskep);

			
		# Jika jumlah error message tidak ada, simpan datanya
		if(count($message)==0){	
			$qryUpdate=mysql_query("UPDATE infokb SET kode='$txtKode', nama='$txtNama', alamat='$txtAlamat', prop='$txtProp',kota='$txtKota',npwp='$txtNpwp', telp='$txtTelp',fax='$txtFax', skepkb='$txtSkepkb', tglskep='$txtTglskep' WHERE id='".$_POST['txtID']."'") 
					   or die ("Gagal query update".mysql_error());
			if($qryUpdate){
					$useractSave=mysql_query("INSERT INTO user_act SET userid='".$_SESSION['SES_LOGIN']."', aktivitas='Mengubah data perusahaan', tanggal='".date("Y-m-d")."', jam='".date("G:i:s")."'") 
					 or die ("Gagal query".mysql_error());
				echo "<meta http-equiv='refresh' content='0; url=?page=Data-Perusahaan'>";
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
	
	# TAMPILKAN DATA penerima UNTUK DIEDIT
	$IDEdit= isset($_GET['ID']) ?  $_GET['ID'] : $_POST['txtID']; 
	$sqlShow = "SELECT * FROM infokb WHERE id='$IDEdit'";
	$qryShow = mysql_query($sqlShow, $koneksidb)  or die ("Query ambil data perusahaan salah : ".mysql_error());
	$dataShow = mysql_fetch_array($qryShow);
	
	# MASUKKAN DATA KE VARIABEL
	$dataID	= $dataShow['id'];
	$dataKode	= isset($dataShow['kode']) ?  $dataShow['kode'] : $_POST['txtKode'];
	$dataNama	= isset($dataShow['nama']) ?  $dataShow['nama'] : $_POST['txtNama'];
	$dataAlamat = isset($dataShow['alamat']) ?  $dataShow['alamat'] : $_POST['txtAlamat'];
	$dataProp = isset($dataShow['prop']) ?  $dataShow['prop'] : $_POST['txtProp'];
	$dataKota = isset($dataShow['kota']) ?  $dataShow['kota'] : $_POST['txtKota'];
	$dataNpwp = isset($dataShow['npwp']) ?  $dataShow['npwp'] : $_POST['txtNpwp'];
	$dataTelp = isset($dataShow['telp']) ?  $dataShow['telp'] : $_POST['txtTelp'];
	$dataFax = isset($dataShow['fax']) ?  $dataShow['fax'] : $_POST['txtFax'];
	$dataSkepkb = isset($dataShow['skepkb']) ?  $dataShow['skepkb'] : $_POST['txtSkepkb'];
	$dataTglskep	= isset($dataShow['tglskep']) ? $dataShow['tglskep'] : $_POST['txtTglskep'];
	
} // Penutup GET
?>
<form action="?page=Edit-Perusahaan&Act=Update" method="post" name="frmedit">
<table class="table-list" width="100%" style="margin-top:0px;">
	<tr>
	  <td colspan="3"><h2>UBAH DATA PERUSAHAAN</h2> </td>
	</tr>
	<tr>
	  
	  <td colspan="3"><input name="txtLock" type="hidden" value="<?php echo $dataID; ?>" size="8" maxlength="4"  readonly="readonly"/>
    <input name="txtID" type="hidden" value="<?php echo $dataID; ?>" /></td></tr>
	<tr>
	  <td width="15%"><b>Kode Perusahaan </b></td>
	  <td width="1%"><b>:</b></td>
	  <td width="84%"><input name="txtKode" type="text" id="txtKode" onKeyPress="return tabE(this,event)" value="<?php echo $dataKode; ?>" size="8" maxlength="8" />
    </td></tr>
    <tr>
	  <td><b>Nama Perusahaan </b></td>
	  <td><b>:</b></td>
	  <td><input name="txtNama" type="text" id="txtNama" value="<?php echo $dataNama; ?>" size="80" onKeyPress="return tabE(this,event)" />
    </td></tr>
	<tr>
      <td><b>Alamat Lengkap </b></td>
	  <td><b>:</b></td>
	  <td><textarea onKeyPress="return tabE(this,event)" name="txtAlamat" cols="80"><?php echo $dataAlamat; ?></textarea></td>
    </tr>
	<tr>
      <td><b>Propinsi</b></td>
	  <td><b>:</b></td>
	  <td><input name="txtProp" type="text" value="<?php echo $dataProp; ?>" size="80" onKeyPress="return tabE(this,event)" /></td>
    </tr>

    <tr>
      <td><b>Kota</b></td>
	  <td><b>:</b></td>
	  <td><input name="txtKota" value="<?php echo $dataKota; ?>" size="80" maxlength="200" onKeyPress="return tabE(this,event)" /></td>
    </tr>
    <tr>
      <td><b>NPWP</b></td>
	  <td><b>:</b></td>
	  <td><input name="txtNpwp" value="<?php echo $dataNpwp; ?>" size="80" maxlength="200" onKeyPress="return tabE(this,event)" /></td>
    </tr>

	<tr>
      <td><b>No Telpon </b></td>
	  <td><b>:</b></td>
	  <td><input name="txtTelp" value="<?php echo $dataTelp; ?>" size="20" onKeyPress="return tabE(this,event)" /></td>
    </tr>
	<tr>
      <td><b>No Fax</b></td>
	  <td><b>:</b></td>
	  <td><input name="txtFax" value="<?php echo $dataFax; ?>" size="20" onKeyPress="return tabE(this,event)" /></td>
    </tr>
	<tr>
      <td><b>Skep Pendirian KB</b></td>
	  <td><b>:</b></td>
	  <td><input name="txtSkepkb" value="<?php echo $dataSkepkb; ?>" size="80" onKeyPress="return tabE(this,event)" /></td>
    </tr>
	<tr>
      <td><b> Tgl Skep </b></td>
	  <td><b>:</b></td>
	  <td><input name="txtTglskep" id="txtTglskep" value="<?php echo $dataTglskep; ?>" size="20" onKeyPress="return tabE(this,event)" /> 
	    (format YYYY-MM-DD)</td>
    </tr>

	<tr><td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td><input type="submit" name="btnSave"  value=" SIMPAN " style="cursor:pointer;">&nbsp;&nbsp;&nbsp;<input type="button" value="Batal" onclick="self.history.back()" />
</td>
    </tr>
</table>
</form>

