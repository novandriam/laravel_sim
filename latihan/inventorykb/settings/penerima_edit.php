<?php
include_once "library/inc.sesadmin.php";
include_once "library/inc.library.php";
# Opsi status
$arrStatus	= array("LDP/Luar Negeri","TLDDP/Lokal","Kawasan Berikat","Gudang Berikat","Kawasan Bebas");
if($_GET) {
	if(isset($_POST['btnSave'])){
		# Validasi form, jika kosong sampaikan pesan error
		$message = array();
		if (trim($_POST['txtNpwp'])=="") {
			$message[] = "<b>NPWP/ID penerima</b> tidak boleh kosong !";		
		}
		if (trim($_POST['txtPenerima'])=="") {
			$message[] = "<b>Nama penerima</b> tidak boleh kosong !";		
		}
		if (trim($_POST['txtAlamat'])=="") {
			$message[] = "<b>Alamat Lengkap</b> tidak boleh kosong !";		
		}
		if (trim($_POST['txtKota'])=="") {
			$message[] = "<b>Kota penerima</b> tidak boleh kosong !";		
		}
		if (trim($_POST['txtNegara'])=="") {
			$message[] = "<b>Negara</b> tidak boleh kosong !";		
		}
		if (trim($_POST['txtTelp'])=="") {
			$message[] = "<b>Nomor Telepon</b> tidak boleh kosong !";		
		}
		if (trim($_POST['txtFax'])=="") {
			$message[] = "<b>Nomor Faximile</b> tidak boleh kosong !";		
		}

		if (trim($_POST['txtEmail'])=="") {
			$message[] = "<b>Email</b> tidak boleh kosong !";		
		}
		if (trim($_POST['cmbStatus'])=="BLANK") {
			$message[] = "<b>Status penerima</b> belum dipilih!";		
		}
		
		# Baca Variabel Form
		$txtNpwp= $_POST['txtNpwp'];
		$txtNpwp= str_replace("'","&acute;",$txtNpwp);
		$txtNpwplama= $_POST['txtNpwplama'];
		$txtPenerima= $_POST['txtPenerima'];
		$txtPenerima= str_replace("'","&acute;",$txtPenerima);
		$txtPenerimalama= $_POST['txtPenerimalama'];
		$txtAlamat	= $_POST['txtAlamat'];
		$txtAlamat	= str_replace("'","&acute;",$txtAlamat);
		$txtKota	= $_POST['txtKota'];
		$txtKota	= str_replace("'","&acute;",$txtKota);
		$txtNegara	= $_POST['txtNegara'];
		$txtNegara	= str_replace("'","&acute;",$txtNegara);
		$txtTelp	= $_POST['txtTelp'];
		$txtTelp	= str_replace("'","&acute;",$txtTelp);
		$txtFax	= $_POST['txtFax'];
		$txtFax	= str_replace("'","&acute;",$txtFax);
		$txtEmail	= $_POST['txtEmail'];
		$txtEmail	= str_replace("'","&acute;",$txtEmail);
		$cmbStatus	= $_POST['cmbStatus'];

		
	# Validasi npwp penerima, jika sudah ada akan ditolak
		$sqlNpwp="SELECT * FROM penerima WHERE npwp='$txtNpwp' AND NOT(npwp='$txtNpwplama')";
		$qryNpwp=mysql_query($sqlNpwp, $koneksidb) or die ("Eror Query".mysql_error()); 
		if(mysql_num_rows($qryNpwp)>=1){
			$message[] = "Maaf, NPWP/ID penerima dengan <b> $txtNpwp </b> sudah ada, ganti dengan yang lain";
		}

	# Validasi nama penerima, jika sudah ada akan ditolak
		$sqlNama="SELECT * FROM penerima WHERE nama='$txtPenerima' AND NOT(nama='$txtPenerimalama')";
		$qryNama=mysql_query($sqlNama, $koneksidb) or die ("Eror Query".mysql_error()); 
		if(mysql_num_rows($qryNama)>=1){
			$message[] = "Maaf, Nama penerima dengan  <b> $txtPenerima </b> sudah ada, ganti dengan yang lain";
		}
		
		# Jika jumlah error message tidak ada, simpan datanya
		if(count($message)==0){	
			$qryUpdate=mysql_query("UPDATE penerima SET npwp='$txtNpwp', nama='$txtPenerima', alamat='$txtAlamat',kota='$txtKota',negara='$txtNegara',notelp='$txtTelp',nofax='$txtFax',email='$txtEmail', status='$cmbStatus' WHERE kode_penerima ='".$_POST['txtKode']."'") 
					   or die ("Gagal query update".mysql_error());
			if($qryUpdate){
				$useractSave=mysql_query("INSERT INTO user_act SET userid='".$_SESSION['SES_LOGIN']."', aktivitas='Mengubah data PENERIMA dengan nama $txtPenerima', tanggal='".date("Y-m-d")."', jam='".date("G:i:s")."'") 
					 or die ("Gagal query".mysql_error());
				echo "<meta http-equiv='refresh' content='0; url=?page=Data-Penerima'>";
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
	$KodeEdit= isset($_GET['Kode']) ?  $_GET['Kode'] : $_POST['txtKode']; 
	$sqlShow = "SELECT * FROM penerima WHERE kode_penerima='$KodeEdit'";
	$qryShow = mysql_query($sqlShow, $koneksidb)  or die ("Query ambil data penerima salah : ".mysql_error());
	$dataShow = mysql_fetch_array($qryShow);
	
	# MASUKKAN DATA KE VARIABEL
	$dataKode	= $dataShow['kode_penerima'];
	$dataNpwp	= isset($dataShow['npwp']) ?  $dataShow['npwp'] : $_POST['txtNpwp'];
	$dataNpwplama	= $dataShow['npwp'];
	$dataNama	= isset($dataShow['nama']) ?  $dataShow['nama'] : $_POST['txtPenerima'];
	$dataNamalama	= $dataShow['nama'];
	$dataAlamat = isset($dataShow['alamat']) ?  $dataShow['alamat'] : $_POST['txtAlamat'];
	$dataKota = isset($dataShow['kota']) ?  $dataShow['kota'] : $_POST['txtKota'];
	$dataNegara = isset($dataShow['negara']) ?  $dataShow['negara'] : $_POST['txtNegara'];
	$dataTelp = isset($dataShow['notelp']) ?  $dataShow['notelp'] : $_POST['txtTelp'];
	$dataFax = isset($dataShow['nofax']) ?  $dataShow['nofax'] : $_POST['txtFax'];
	$dataEmail = isset($dataShow['email']) ?  $dataShow['email'] : $_POST['txtEmail'];
	$dataStatus = isset($dataShow['status']) ?  $dataShow['status'] : $_POST['txtStatus'];
	
} // Penutup GET
?>
<form action="?page=Edit-Penerima&Act=Update" method="post" name="frmedit">
<table class="table-list" width="100%" style="margin-top:0px;">
	<tr>
	  <td colspan="3"><h2>UBAH DATA PENERIMA</h2> </td>
	</tr>
	<tr>
	  <td width="15%"><b>Kode</b></td>
	  <td width="1%"><b>:</b></td>
	  <td width="84%"><input name="txtKode" value="<?php echo $dataKode; ?>" size="8" maxlength="4"  readonly="readonly"/>
    <input name="txtKode" type="hidden" value="<?php echo $dataKode; ?>" /></td></tr>
	<tr>
	  <td><b>NPWP/ID</b></td>
	  <td><b>:</b></td>
	  <td><input name="txtNpwp" type="text" value="<?php echo $dataNpwp; ?>" size="80" maxlength="100" onKeyPress="return tabE(this,event)" /><input name="txtNpwplama" type="hidden" value="<?php echo $dataNpwplama; ?>" />
    </td></tr>

    <tr>
	  <td><b>Nama penerima </b></td>
	  <td><b>:</b></td>
	  <td><input onKeyPress="return tabE(this,event)" name="txtPenerima" type="text" value="<?php echo $dataNama; ?>" size="80" maxlength="100" /><input name="txtPenerimalama" type="hidden" value="<?php echo $dataNamalama; ?>" />
    </td></tr>
	<tr>
      <td><b>Alamat Lengkap </b></td>
	  <td><b>:</b></td>
	  <td><textarea name="txtAlamat" onKeyPress="return tabE(this,event)" cols="80"><?php echo $dataAlamat; ?></textarea></td>
    </tr>
    <tr>
      <td><b>Kota</b></td>
	  <td><b>:</b></td>
	  <td><input name="txtKota" value="<?php echo $dataKota; ?>" size="80" maxlength="200" onKeyPress="return tabE(this,event)" /></td>
    </tr>
    <tr>
      <td><b>Negara</b></td>
	  <td><b>:</b></td>
      <td><input name="txtNegara" value="<?php echo $dataNegara; ?>" size="40" maxlength="40" onKeyPress="return tabE(this,event)"
	  			 onBlur="if (value == '') {value = 'Indonesia'}" 
      		 	 onfocus="if (value == 'Indonesia') {value =''}"/> 
      * Diisi negara penerima</td>
    </tr>
	<tr>
      <td><b>No Telpon </b></td>
	  <td><b>:</b></td>
	  <td><input name="txtTelp" onKeyPress="return tabE(this,event)" value="<?php echo $dataTelp; ?>" size="20" maxlength="20" /></td>
    </tr>
	<tr>
      <td><b>No Fax</b></td>
	  <td><b>:</b></td>
	  <td><input name="txtFax" value="<?php echo $dataFax; ?>" onKeyPress="return tabE(this,event)" size="20" maxlength="20" /></td>
    </tr>
	<tr>
      <td><b>Email</b></td>
	  <td><b>:</b></td>
	  <td><input name="txtEmail" value="<?php echo $dataEmail; ?>" size="20" maxlength="20" onKeyPress="return tabE(this,event)" /></td>
    </tr>
<tr>
	  <td><strong>Status</strong></td>
	  <td><b>:</b></td>
	  <td><select name="cmbStatus" onKeyPress="return tabE(this,event)">
        <option value="BLANK"> </option>
        <?php
          foreach ($arrStatus as $index => $value) {
            if ($value==$dataStatus) {
                $cek="selected";
            } else { $cek = ""; }
            echo "<option value='$value' $cek>$value</option>";
          }
          ?>
      </select></td>
    </tr>

	<tr><td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td><input type="submit" name="btnSave"  value=" SIMPAN " style="cursor:pointer;">&nbsp;&nbsp;&nbsp;<input type="button" value="Batal" onclick="self.history.back()" />
</td>
    </tr>
</table>
</form>

