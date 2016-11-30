<?php
include_once "library/inc.sessuperadmin.php";
include_once "library/inc.library.php";

# Opsi Level Login
$arrLevel	= array("Admin","Pemasukan","Produksi","Pengeluaran","Exim","Highest","BeaCukai","SuperAdmin");

if($_GET) {
	if(isset($_POST['btnSave'])){
		$message = array();
		if (trim($_POST['txtNama'])=="") {
			$message[] = "Nama lengkap tidak boleh kosong !";		
		}
		if (trim($_POST['txtUser'])=="") {
			$message[] = "User tidak boleh kosong !";		
		}
		if (trim($_POST['cmbLevel'])=="BLANK") {
			$message[] = "Level sistem belum dipilih !";		
		}
		
		# Baca Variabel Form
		$txtNama	= $_POST['txtNama'];
		$txtNama 	= str_replace("'","&acute;",$txtNama);
		$txtUser	= $_POST['txtUser'];
		$txtUser 	= str_replace("'","&acute;",$txtUser);
		$txtUserLm	= $_POST['txtUserLm'];
		$txtPassLama= $_POST['txtPassLama'];
		$txtPassLama= str_replace("'","&acute;",$txtPassLama);
		$txtPassBaru= $_POST['txtPassBaru'];
		$txtPassBaru= str_replace("'","&acute;",$txtPassBaru);
		$cmbLevel	= $_POST['cmbLevel'];

		# Validasi Nama Kategori, jika sudah ada akan ditolak
		$sqlCek="SELECT * FROM user_login WHERE userid='$txtUser' AND NOT(userid='$txtUserLm')";
		$qryCek=mysql_query($sqlCek, $koneksidb) or die ("Eror Query".mysql_error()); 
		if(mysql_num_rows($qryCek)>=1){
			$message[] = "Maaf, User <b> $txtUser </b> sudah ada, ganti dengan yang lain";
		}
				
		# Jika jumlah error message tidak ada
		if(count($message)==0){			
			# Cek Password baru
			if (trim($txtPassBaru)=="") {
				$sqlSub = " password='$txtPassLama'";
			}
			else {
		$pengacak = "AJWKXLAJSCLWLW";
		$passEnkrip = md5($pengacak . md5($txtPassBaru) . $pengacak );
				$sqlSub = "  password ='$passEnkrip'";
			}

			$sqlSave="UPDATE user_login SET nm_user='$txtNama', userid='$txtUser', $sqlSub, 
					  level='$cmbLevel'  WHERE id='".$_POST['txtKode']."'";
			$qrySave=mysql_query($sqlSave, $koneksidb);
			if($qrySave){
				$useractSave=mysql_query("INSERT INTO user_act SET userid='".$_SESSION['SES_LOGIN']."', aktivitas='Mengubah data user dengan nama $txtNama dan userid $txtUser', tanggal='".date("Y-m-d")."', jam='".date("G:i:s")."'") 
					 or die ("Gagal query".mysql_error());
				echo "<meta http-equiv='refresh' content='0; url=?page=Data-User&Act=Success'>";
			}
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
	} // End if($_POST) 

	# TAMPILKAN DATA LOGIN UNTUK DIEDIT
	$KodeEdit= isset($_GET['Kode']) ?  $_GET['Kode'] : $_POST['txtKode']; 
	$sqlShow = "SELECT * FROM user_login WHERE id='$KodeEdit'";
	$qryShow = mysql_query($sqlShow, $koneksidb)  or die ("Query ambil data user salah : ".mysql_error());
	$dataShow = mysql_fetch_array($qryShow);

	# MASUKKAN DATA KE VARIABEL
	$dataKode	= $dataShow['id'];
	$dataNama	= isset($dataShow['nm_user']) ?  $dataShow['nm_user'] : $_POST['txtNama'];
	$dataUser	= isset($dataShow['userid']) ?  $dataShow['userid'] : $_POST['txtUser'];
	$dataUserLm	= $dataShow['userid'];
	$dataPass	= isset($dataShow['password']) ?  $dataShow['password'] : $_POST['txtPassBaru'];
	$dataLevel = isset($dataShow['level']) ?  $dataShow['level'] : $_POST['cmbLevel'];
} // End if($_GET) {
?>
<form action="?page=Edit-User&Act=Save" method="post" name="frmadd">
<table class="table-common" width="100%" style="margin-top:0px;">
	<tr>
	  <td colspan="3"><h2>UBAH DATA USER LOGIN </h2></td>
	</tr>
	<tr>
      <td><strong>Nama Lengkap </strong></td>
	  <td><b>:</b></td>
	  <td><input name="txtNama" value="<?php echo $dataNama; ?>"  size="60" maxlength="60"/>
          <input name="txtKode" type="hidden" value="<?php echo $dataKode; ?>" /></td>
    </tr>
	<tr>
	  <td width="15%"><strong>User ID </strong></td>
	  <td width="1%"><b>:</b></td>
	  <td width="84%"><input name="txtUser"  value="<?php echo $dataUser; ?>"  size="30" maxlength="30"/>
      <input name="txtUserLm" type="hidden" value="<?php echo $dataUserLm; ?>" /></td></tr>
	<tr>
	  <td><strong>Password</strong></td>
	  <td><b>:</b></td>
	  <td><input name="txtPassBaru" type="password"  value="" size="30" maxlength="30"/>
      <input name="txtPassLama" type="hidden" value="<?php echo $dataPass; ?>" /></td>
	</tr>
	<tr>
	  <td><strong>Level</strong></td>
	  <td><b>:</b></td>
	  <td><select name="cmbLevel">
        <option value="BLANK"> </option>
        <?php 
        foreach ($arrLevel as $index => $value) {
            if ($value==$dataLevel) {
                $cek="selected";
            } else { $cek = ""; }
            echo "<option value='$value' $cek>$value</option>";
        }
        ?>
      </select></td>
    </tr>
	<tr><td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td><input type="submit" name="btnSave" value=" SIMPAN " style="cursor:pointer;">&nbsp;&nbsp;&nbsp;<input type="button" value="Batal" onclick="self.history.back()" /></td>
      
    </tr>
</table>
</form>
