<?php
include_once "library/inc.sesadmin.php";
include_once "library/inc.library.php";


if($_GET) {
	if(isset($_POST['btnSave'])){
		$message = array();
		if (trim($_POST['txtPassLama'])=="") {
			$message[] = "Password Lama tidak boleh kosong !";		
		}
		if (trim($_POST['txtPassBaru'])=="") {
			$message[] = "Password Baru tidak boleh kosong !";		
		}
		
		if (trim($_POST['txtKonfPass'])=="") {
			$message[] = "Konfirmasi Password tidak boleh kosong !";		
		}
		if (trim($_POST['txtPassBaru'])==trim($_POST['txtPassLama'])) {
			$message[] = "Password Baru tidak boleh sama dengan Password Lama!";		
		}
		if (trim($_POST['txtKonfPass'])!=trim($_POST['txtPassBaru'])) {
			$message[] = "Konfirmasi Password Baru tidak sama dengan Password Baru!";		
		}

		
		# Baca Variabel Form
		$txtPassLama= $_POST['txtPassLama'];
		$txtPassLama= str_replace("'","&acute;",$txtPassLama);
		$txtPassBaru= $_POST['txtPassBaru'];
		$txtPassBaru= str_replace("'","&acute;",$txtPassBaru);
		$txtKonfPass= $_POST['txtKonfPass'];
		$txtKonfPass= str_replace("'","&acute;",$txtKonfPass);
		$pengacak = "AJWKXLAJSCLWLW";
		# Validasi Password Lama, apabila tidak sama akan ditolak
		$sqlCek="SELECT * FROM user_login WHERE userid='".$_SESSION['SES_LOGIN']."'";
		$qryCek=mysql_query($sqlCek, $koneksidb) or die ("Eror Query".mysql_error());
		$data  = mysql_fetch_array($qryCek); 
		if ($data['password'] != md5($pengacak . md5($txtPassLama) . $pengacak)){
			$message[] = "Maaf, Password Lama tidak sesuai";
		}
				
		# Jika jumlah error message tidak ada
		if(count($message)==0){					
		$passEnkrip = md5($pengacak . md5($txtPassBaru) . $pengacak );
			
			$sqlSave="UPDATE user_login SET password='$passEnkrip' WHERE userid='".$_SESSION['SES_LOGIN']."'";
			$qrySave=mysql_query($sqlSave, $koneksidb);
			if($qrySave){
				$useractSave=mysql_query("INSERT INTO user_act SET userid='".$_SESSION['SES_LOGIN']."', aktivitas='Mengubah Password', tanggal='".date("Y-m-d")."', jam='".date("G:i:s")."'") 
					 or die ("Gagal query".mysql_error());
				echo "<meta http-equiv='refresh' content='0; url=?page=Halaman-Utama&Act=Success'>";
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

} // End if($_GET) {
?>
<form action="?page=Ubah-Password&Act=Save" method="post" name="frmadd">
<table class="table-common" width="100%" style="margin-top:0px;">
	<tr>
	  <td colspan="3"><h2>UBAH PASSWORD</h2></td>
	</tr>
	<tr>
	  <td width="15%"><strong>Password Lama</strong></td>
	  <td width="1%"><b>:</b></td>
	  <td width="84%"><input name="txtPassLama" type="password" value=""  size="30" maxlength="30"/>
	<tr>
	  <td><strong>Password baru</strong></td>
	  <td><b>:</b></td>
	  <td><input name="txtPassBaru" type="password"  value="" size="30" maxlength="30"/></td>
	</tr>
	<tr>
	  <td><strong>Konfirmasi Password</strong></td>
	  <td><b>:</b></td>
	  <td><input name="txtKonfPass" type="password"  value="" size="30" maxlength="30"/></td>
	</tr>

	<tr><td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td><input type="submit" name="btnSave" value=" SIMPAN " style="cursor:pointer;">&nbsp;&nbsp;&nbsp;<input type="button" value="Batal" onclick="self.history.back()" /></td>
      
    </tr>
</table>
</form>
