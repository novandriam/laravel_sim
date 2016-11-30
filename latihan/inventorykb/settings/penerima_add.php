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
			$message[] = "<b>NPWP / ID Penerima</b> tidak boleh kosong !";		
		}
		if (trim($_POST['txtPenerima'])=="") {
			$message[] = "<b>Nama Penerima</b> tidak boleh kosong !";		
		}
		if (trim($_POST['txtAlamat'])=="") {
			$message[] = "<b>Alamat Lengkap</b> tidak boleh kosong !";		
		}
		if (trim($_POST['txtKota'])=="") {
			$message[] = "<b>Kota Penerima</b> tidak boleh kosong !";		
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
			$message[] = "<b>Status Penerima</b> belum dipilih!";		
		}

		
		# Baca Variabel Form
		$txtNpwp= $_POST['txtNpwp'];
		$txtNpwp= str_replace("'","&acute;",$txtNpwp);
		$txtPenerima= $_POST['txtPenerima'];
		$txtPenerima= str_replace("'","&acute;",$txtPenerima);
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

		
		# Validasi ID/NPWP penerima, jika sudah ada akan ditolak
		$sqlNpwp="SELECT * FROM penerima WHERE npwp='$txtNpwp'";
		$qryNpwp=mysql_query($sqlNpwp, $koneksidb) or die ("Eror Query".mysql_error()); 
		if(mysql_num_rows($qryNpwp)>=1){
			$message[] = "Maaf, NPWP/ID penerima <b> $txtNpwp </b> sudah ada, ganti dengan yang lain";
		}

		# Validasi Nama penerima, jika sudah ada akan ditolak
		$sqlCek="SELECT * FROM penerima WHERE nama='$txtPenerima'";
		$qryCek=mysql_query($sqlCek, $koneksidb) or die ("Eror Query".mysql_error()); 
		if(mysql_num_rows($qryCek)>=1){
			$message[] = "Maaf, penerima <b> $txtPenerima </b> sudah ada, ganti dengan yang lain";
		}

		# Jika jumlah error message tidak ada, simpan datanya
		if(count($message)==0){			
			$kodeBaru	= buatKode("penerima", "P");
			$qrySave=mysql_query("INSERT INTO penerima SET kode_penerima='$kodeBaru', npwp='$txtNpwp', nama='$txtPenerima',								  alamat='$txtAlamat',kota='$txtKota',negara='$txtNegara',notelp='$txtTelp',nofax='$txtFax',email='$txtEmail', status='$cmbStatus'") or die ("Gagal query".mysql_error());
			if($qrySave){
					$useractSave=mysql_query("INSERT INTO user_act SET userid='".$_SESSION['SES_LOGIN']."', aktivitas='Menambah data PENERIMA dengan kode $kodeBaru dan nama $txtPenerima', tanggal='".date("Y-m-d")."', jam='".date("G:i:s")."'") 
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
		
	# MASUKKAN DATA KE VARIABEL
	$dataKode	= buatKode("penerima", "P");
	$dataNpwp	= isset($_POST['txtNpwp']) ? $_POST['txtNpwp'] : '';
	$dataNama	= isset($_POST['txtPenerima']) ? $_POST['txtPenerima'] : '';
	$dataAlamat = isset($_POST['txtAlamat']) ? $_POST['txtAlamat'] : '';
	$dataKota = isset($_POST['txtKota']) ? $_POST['txtKota'] : '';
	$dataNegara = isset($_POST['txtNegara']) ? $_POST['txtNegara'] : 'Indonesia';
	$dataTelp = isset($_POST['txtTelp']) ? $_POST['txtTelp'] : '';
	$dataFax = isset($_POST['txtFax']) ? $_POST['txtFax'] : '';
	$dataEmail = isset($_POST['txtEmail']) ? $_POST['txtEmail'] : '';
	$dataStatus = isset($_POST['cmbStatus']) ? $_POST['txtStatus'] : '';
} // Penutup GET
?>
<form action="?page=Add-Penerima" method="post" name="frmadd">
<table width="100%" cellpadding="2" cellspacing="1" class="table-list" style="margin-top:0px;">
	<tr>
	  <td colspan="3"><h2>TAMBAH DATA PENERIMA</h2> </td>
	</tr>
	<tr>
	  <td width="15%"><b>Kode</b></td>
	  <td width="1%"><b>:</b></td>
	  <td width="84%"><input name="txtKode" value="<?php echo $dataKode; ?>" size="10" readonly="readonly" maxlength="6" /></td></tr>
     <tr>
	  <td><b>NPWP / ID </b></td>
	  <td><b>:</b></td>
	  <td><input name="txtNpwp" value="<?php echo $dataNpwp; ?>" size="80" maxlength="100" onKeyPress="return tabE(this,event)" /></td>
	</tr>
	<tr>
	  <td><b>Nama Penerima</b></td>
	  <td><b>:</b></td>
	  <td><input name="txtPenerima" value="<?php echo $dataNama; ?>" size="80" maxlength="100" onKeyPress="return tabE(this,event)" /></td>
	</tr>
	<tr>
      <td><b>Alamat Lengkap </b></td>
	  <td><b>:</b></td>
	  <td><textarea name="txtAlamat" onKeyPress="return tabE(this,event)" cols="80"><?php echo $dataAlamat; ?></textarea></td>
    </tr>
    <tr>
      <td><b>Kota</b></td>
	  <td><b>:</b></td>
	  <td><input name="txtKota" value="<?php echo $dataKota; ?>" size="80" onKeyPress="return tabE(this,event)" maxlength="200" /></td>
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
	  <td><input name="txtTelp" value="<?php echo $dataTelp; ?>" size="20" maxlength="20" onKeyPress="return tabE(this,event)" /></td>
    </tr>
	<tr>
      <td><b>No Fax</b></td>
	  <td><b>:</b></td>
	  <td><input name="txtFax" value="<?php echo $dataFax; ?>" size="20" maxlength="20" onKeyPress="return tabE(this,event)" /></td>
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
	  <td><input onclick="return confirm('ANDA YAKIN AKAN MENYIMPAN DATA?')" type="submit" name="btnSave" value=" SIMPAN " style="cursor:pointer;">&nbsp;&nbsp;&nbsp;<input type="button" value="Batal" onclick="self.history.back()" /></td>
    </tr>
</table>
</form>
