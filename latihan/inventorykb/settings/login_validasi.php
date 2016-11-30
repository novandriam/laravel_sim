<?php
if($_GET) {
	if($_POST) {
		$message = array();
		if ( trim($_POST['txtUser'])=="") {
			$message[] = "Data <b> User ID </b>  tidak boleh kosong !";		
		}
		if (trim($_POST['txtPassword'])=="") {
			$message[] = "Data <b> Password </b> tidak boleh kosong !";		
		}
		if (trim($_POST['cmbLevel'])=="BLANK") {
			$message[] = "Data <b>Level</b> belum dipilih !";		
		}
		$txtUser 	= $_POST['txtUser'];
		$txtUser 	= str_replace("'","&acute;",$txtUser);
		$txtPassword=$_POST['txtPassword'];
		$txtPassword= str_replace("'","&acute;",$txtPassword);
		$cmbLevel	=$_POST['cmbLevel'];
		$pengacak = "AJWKXLAJSCLWLW";
		$passEnkrip = md5($pengacak . md5($txtPassword) . $pengacak );
		if(count($message)==0){	
			$loginSql = "SELECT * FROM user_login WHERE userid='".$txtUser."' AND password='$passEnkrip' AND level='$cmbLevel'";
			$loginQry = mysql_query($loginSql, $koneksidb)  or die ("Query Periksa Password Salah : ".mysql_error());
			if($loginQry){
				if (mysql_num_rows($loginQry) >=1) {
					$loginData = mysql_fetch_array($loginQry);
					if($cmbLevel=="SuperAdmin") {
						$_SESSION['SES_SUPERADMIN'] = "SuperAdmin";
						$_SESSION['SES_LOGIN'] = $loginData['userid']; 
					}
					if($cmbLevel=="Pemasukan") {
						$_SESSION['SES_PEMASUKAN'] = "Pemasukan";
						$_SESSION['SES_LOGIN'] = $loginData['userid']; 
					}
					if($cmbLevel=="Produksi") {
						$_SESSION['SES_PRODUKSI'] = "Produksi";
						$_SESSION['SES_LOGIN'] = $loginData['userid']; 
					}
					if($cmbLevel=="Pengeluaran") {
						$_SESSION['SES_PENGELUARAN'] = "Pengeluaran";
						$_SESSION['SES_LOGIN'] = $loginData['userid']; 
					}
					if($cmbLevel=="Exim") {
						$_SESSION['SES_EXIM'] = "Exim";
						$_SESSION['SES_LOGIN'] = $loginData['userid']; 
					}
					if($cmbLevel=="Highest") {
						$_SESSION['SES_HIGHEST'] = "Highest";
						$_SESSION['SES_LOGIN'] = $loginData['userid']; 
					}
					if($cmbLevel=="BeaCukai") {
						$_SESSION['SES_BEACUKAI'] = "BeaCukai";
						$_SESSION['SES_LOGIN'] = $loginData['userid']; 
					}
					if($cmbLevel=="Admin") {
						$_SESSION['SES_ADMIN'] = "Admin";
						$_SESSION['SES_LOGIN'] = $loginData['userid']; 
					}
					// Refresh
					echo "<meta http-equiv='refresh' content='0; url=?page=Halaman-Utama'>";
				}
				else {
					 echo "Login Anda bukan ".$_POST['cmbLevel'];
				}
			}
		}
		# Jika ada error message ditemukan
		if (! count($message)==0 ){
		?>
            <div class="mssgBox">
			<?php 
			echo "<div><img src='images/Attention2.jpg' style='margin-bottom:0px;margin-right:5px;margin-left:0px;padding:0px;float:left;'>
				  <h3 style='padding:8px 0px 0px 0px; margin-top:0px;'>ERROR</h3><hr>";
				$Num=0;
				foreach ($message as $indeks=>$pesan_tampil) { 
				$Num++;
					echo "&nbsp;&nbsp;$Num. $pesan_tampil<br>";	
				} 
			echo "</div><div>&nbsp;</div>";?>
            </div>
			<?php 
		}
	}
}
?>
 
