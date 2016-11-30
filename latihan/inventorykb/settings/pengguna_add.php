<?php
include_once "library/inc.sessuperadmin.php";
include_once "library/inc.library.php";

# Opsi Level Login
$arrLevel	= array("Admin","BeaCukai","SuperAdmin");
$pengacak = "AJBBBLAJSCLWLWJJJJKLLL";
if($_GET) {
	if(isset($_POST['btnSave'])){
		$message = array();
		if (trim($_POST['txtNama'])=="") {
			$message[] = "Nama lengkap tidak boleh kosong !";		
		}
		if (trim($_POST['txtPengguna'])=="") {
			$message[] = "ID Pengguna tidak boleh kosong !";		
		}
		if (trim($_POST['txtPassword'])=="") {
			$message[] = "Password tidak boleh kosong !";		
		}
		if (trim($_POST['cmbLevel'])=="BLANK") {
			$message[] = "Level sistem belum dipilih !";		
		}
		
		# Baca Variabel Form
		$txtNama	= $_POST['txtNama'];
		$txtNama 	= str_replace("'","&acute;",$txtNama);
		$txtPengguna	= $_POST['txtPengguna'];
		$txtPengguna 	= str_replace("'","&acute;",$txtPengguna);
		$txtPassword= $_POST['txtPassword'];
		$txtPassword= str_replace("'","&acute;",$txtPassword);
		$cmbLevel	= $_POST['cmbLevel'];
		$pengacak = "AJBBBLAJSCLWLWJJJJKLLL";
		$passEnkrip = md5($pengacak . md5($txtPassword) . $pengacak );
		# Validasi Nama Kategori, jika sudah ada akan ditolak
		$sqlCek="SELECT * FROM pengguna WHERE penggunaid='$txtPengguna'";
		$qryCek=mysql_query($sqlCek, $koneksidb) or die ("Eror Query".mysql_error()); 
		if(mysql_num_rows($qryCek)>=1){
			$message[] = "Maaf, Pengguna<b> $txtPengguna </b> sudah ada, ganti dengan yang lain";
		}
		
		# Jika jumlah error message tidak ada
		if(count($message)==0){			
			$sqlSave="INSERT INTO pengguna SET nm_pengguna='$txtNama', penggunaid='$txtPengguna', password ='$passEnkrip', level='$cmbLevel'";
			$qrySave=mysql_query($sqlSave, $koneksidb) or die ("Gagal query".mysql_error());
			if($qrySave){
				$useractSave=mysql_query("INSERT INTO user_act SET userid='".$_SESSION['SES_LOGIN']."', aktivitas='Menambah data pengguna dengan nama $txtNama dan penggunaid $txtPengguna', tanggal='".date("Y-m-d")."', jam='".date("G:i:s")."'") 
					 or die ("Gagal query".mysql_error());
				echo "<meta http-equiv='refresh' content='0; url=?page=Data-Pengguna&Act=Success'>";
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
	} // Penutup POST
	
	# MASUKKAN DATA KE VARIABEL
	$dataNama	= isset($_POST['txtNama']) ? $_POST['txtNama'] : '';
	$dataPengguna	= isset($_POST['txtPengguna']) ? $_POST['txtPengguna'] : '';
	$dataLevel	= isset($_POST['cmbLevel']) ? $_POST['cmbLevel'] : '';
} // Penutup GET
?>
<form action="?page=Add-Pengguna&Act=Save" method="post" name="frmadd">
<table class="table-common" width="100%" style="margin-top:0px;">
	<tr>
	  <td colspan="3"><h2>TAMBAH DATA PENGGUNA IT ONLINE</h2></td>
	</tr>
	<tr>
      <td><strong>Nama Lengkap </strong></td>
	  <td><b>:</b></td>
	  <td><input name="txtNama" value="<?php echo $dataNama; ?>"  size="60" maxlength="60"/></td>
    </tr>
	<tr>
	  <td width="15%"><strong>Pengguna ID </strong></td>
	  <td width="1%"><b>:</b></td>
	  <td width="84%"><input name="txtPengguna"  value="<?php echo $dataPengguna; ?>"  size="30" maxlength="30"/></td></tr>
	<tr>
	  <td><strong>Password</strong></td>
	  <td><b>:</b></td>
	  <td><input name="txtPassword" type="password"  value="" size="30" maxlength="30"/></td>
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
