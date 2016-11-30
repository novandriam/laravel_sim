<html lang="en">
	<head>
		<meta charset="utf-8">

                <!-- Mengincludekan JQueryUI CSS. Rename nama sunny dan sesuaikan Folder yg ada di dalam Folder CSS -->
		<link rel="stylesheet" type="text/css" media="screen" href="jq/css/sunny/jquery-ui-1.8.16.custom.css" />
                <!-- Mengincludekan CSS Jqgrid -->
		<link rel="stylesheet" type="text/css" media="screen" href="jq/css/ui.jqgrid.css" />
		
		<!-- Sedikit CSS Untuk Button -->
		<style>
		.tombol{
			font-size: 8pt;			
		}
		</style>
		
                <!-- Mengincludekan Library Jquery -->
		<script src="jq/js/jquery-1.5.2.min.js" type="text/javascript"></script>

		<!-- Mengincludekan Library Jquery UI-->
		<script src="jq/js/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
                
		<!-- Mengincludekan Locale untuk JQGrid -->
		<script src="jq/js/i18n/grid.locale-en.js" type="text/javascript"></script>
                <!-- Mengincludekan Library untuk JQGrid -->
		<script src="jq/js/jquery.jqGrid.min.js" type="text/javascript"></script>
	
		<script type="text/javascript">
			//Function Numeric Only untuk Text box
			function isNumberKey(evt)
			{
				var charCode = (evt.which) ? evt.which : event.keyCode
				if (charCode > 31 && (charCode < 48 || charCode > 57))
				   return false;
		       
				return true;
			}
			
			$(document).ready(function(){

							
				//Mempercantik Button dengan Jquery UI
				$("#kode-search").button({icons: {primary: "ui-icon-search"}, text: false });
				/* End */
				
				$("#kode-search").click(function(){
					$("#kode-dialog").dialog({
						title:"Cari Kode Barang", 
						resizable:false, 
						width:500, 
						height:250,
						show: 'drop',
						hide: 'scale',
						modal:true,
						close:function(){
							$(this).dialog('destroy');
						}
					});
					$("#tkodebrg").jqGrid({
					url: 'json.php', //URL Tujuan Yg Mengenerate data Json nya
					datatype: "json", //Datatype yg di gunakan
					mtype: 'GET',
					colNames: ['Kode barang', 'Nama barang'],
					colModel: [
						    {name:'kd_barang', index:'kd_barang', width: 40, align:'center', sortable: true},
						    {name:'nm_barang', index:'nm_barang', align:'left', sortable: true}
						],
					rownumbers:true,
					rowNum:5,
					rowList:[5,10,15], 
					pager: '#pkodebrg',
					viewrecords: true,
					sortname: 'kd_barang',
					sortorder: "asc",
					width: 470,
					height: 'auto',
					caption: '&nbsp;',
					ondblClickRow: function(rowid) {
						var v = $("#tkodebrg").getRowData(rowid);
						kd_barang = v['kd_barang'];
						nm_barang = v['nm_barang'];
						$("#kd_barang").val(kd_barang);
						$("#txtKode").val(kd_barang);
						$("#txtNama").val(nm_barang);
						$("#kode-dialog").dialog('close');
					}
				      });
				      //$("#pkodebarang_left .navtable").empty();
				      //$("#tkodebarang").navGrid('#pkodebarang',{edit:false, add:false, del:false});
				      $("#tkodebrg").jqGrid('navGrid','#pkodebrg',{view:false,edit:false,add:false,del:false});
				      return false;
				});	
				var config = {
					source: "json_auto.php",					
					select: function(event, ui){
						$("#txtNama").val(ui.item.nm_barang); // Mengisi Text Box dengan nama barang
						$("#txtKode").val(ui.item.kd_barang); // Mengisi Text Box dengan kode barang
					},
					minLength: 1
				};
				$("#txtKode").autocomplete(config);						
			});			
		</script>
	</head>

<?php
include_once "library/inc.sesadmin.php";
include_once "library/inc.library.php";

if($_GET) {
	# HAPUS DAFTAR barang DI TMP
	if(isset($_GET['Act'])){
		if(trim($_GET['Act'])=="Delete"){
			# Hapus Tmp jika datanya sudah dipindah
			mysql_query("DELETE FROM tmp_konversi WHERE id='".$_GET['ID']."' AND userid='".$_SESSION['SES_LOGIN']."'", $koneksidb) 
				or die ("Gagal kosongkan tmp".mysql_error());
		}
		if(trim($_GET['Act'])=="Success"){
			echo "<b>DATA BERHASIL DISIMPAN</b> <br><br>";
		}
	}


	# TOMBOL PILIH (KODE barang) DIKLIK
	if($_POST) {
	if(isset($_POST['btnCek'])){
		$message = array();
		if (trim($_POST['txtKdbarang'])=="") {
			$message[] = "<b>Kode Barang belum diisi</b>, masukkan kode barang sesuai yg terdaftar di database!";		
		}
		

		
		# Baca variabel
		$txtKdbarang	= $_POST['txtKdbarang'];
		$txtKdbarang	= str_replace("'","&acute;",$txtKdbarang);
		$txtNmbarang	= $_POST['txtNmbarang'];
		$txtNmbarang	= str_replace("'","&acute;",$txtNmbarang);
		$txtType	= $_POST['txtType'];
		$txtType	= str_replace("'","&acute;",$txtType);
		$txtSpec	= $_POST['txtSpec'];
		$txtSpec	= str_replace("'","&acute;",$txtSpec);
		$txtKeterangan		= $_POST['txtKeterangan'];
		$txtKeterangan		= str_replace("'","&acute;",$txtKeterangan);

		# Jika jumlah error message tidak ada
		if(count($message)==0){			
			$barangSql ="SELECT * FROM barang WHERE kd_barang='$txtKdbarang' And kd_kategori='K02'";
			$barangQry = mysql_query($barangSql, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
			$barangRow = mysql_fetch_array($barangQry);
			$barangQty = mysql_num_rows($barangQry);
			
			
			if ($barangQty >= 1) {

				# MASUKKAN DATA KE VARIABEL
	$dataKdbarang	= $barangRow['kd_barang'];
	$dataNmbarang	= isset($barangRow['nm_barang']) ?  $barangRow['nm_barang'] : $_POST['txtNmbarang'];
	$dataType	= isset($barangRow['type']) ?  $barangRow['type'] : $_POST['txtType'];
	$dataSpec	= isset($barangRow['spec']) ?  $barangRow['spec'] : $_POST['txtSpec'];
	$dataKeterangan	= isset($barangRow['ket']) ?  $barangRow['ket'] : $_POST['txtKeterangan'];
	
				
			}
			else {
				$message[] = "Tidak ada barang jadi dengan kode <b>$txtKdbarang</b>, silahkan ganti";
			}
		}
	}
	}
	// ============================================================================

	
	if($_POST) {
	# TOMBOL PILIH (KODE barang) DIKLIK
	if(isset($_POST['btnPilih'])){
		$message = array();
		if (trim($_POST['txtKode'])=="") {
			$message[] = "<b>Kode Barang belum diisi</b>, masukkan kode barang sesuai yg terdaftar di database!";		
		}
		if (trim($_POST['txtJumlah'])=="" OR ! is_numeric(trim($_POST['txtJumlah']))) {
			$message[] = "Data <b>Jumlah barang (Qty) belum diisi</b>, silahkan <b>isi dengan angka</b> !";		
		}
				
		# Baca variabel
		$txtKode	= $_POST['txtKode'];
		$txtKode	= str_replace("'","&acute;",$txtKode);
		$txtJumlah	= $_POST['txtJumlah'];
		$txtJumlah	= str_replace("'","&acute;",$txtJumlah);
		$txtKet		= $_POST['txtKet'];
		$txtKet		= str_replace("'","&acute;",$txtKet);

		# Jika jumlah error message tidak ada
		if(count($message)==0){			
			$barangSql ="SELECT kd_barang FROM barang WHERE kd_barang='$txtKode'";
			$barangQry = mysql_query($barangSql, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
			$barangRow = mysql_fetch_array($barangQry);
			$barangQty = mysql_num_rows($barangQry);
			if ($barangQty >= 1) {

				$tmpSql = "INSERT INTO tmp_konversi SET kode='$txtKode', jumlah='$txtJumlah', ket='$txtKet', userid='".$_SESSION['SES_LOGIN']."'";
				mysql_query($tmpSql, $koneksidb) or die ("Gagal Query detail barang : ".mysql_error());
				$txtKode= "";
				$txtJumlah	= "";
				$txtKet = "";
				
			}
			else {
				$message[] = "Tidak ada barang dengan kode <b>$txtKode'</b>, silahkan ganti";
			}
		}

	}
	// ============================================================================

	
	// ============================================================================
	
	# JIKA TOMBOL SIMPAN DIKLIK
	if(isset($_POST['btnSave'])){
		$message = array();

		if (trim($_POST['txtKdbarang'])=="") {
			$message[] = "Kode barang jadi belum diisi!";		
		}
		if (trim($_POST['txtNmbarang'])=="") {
			$message[] = "Nama barang jadi belum diisi!";		
		}
		
		if (trim($_POST['txtType'])=="") {
			$message[] = "Type barang jadi belum diisi!";		
		}
		if (trim($_POST['txtSpec'])=="") {
			$message[] = "Spesifikasi barang jadi belum diisi!";		
		}

		
		$tmpSql ="SELECT COUNT(id) As qty FROM tmp_konversi WHERE userid='".$_SESSION['SES_LOGIN']."'";
		$tmpQry = mysql_query($tmpSql, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$tmpRow = mysql_fetch_array($tmpQry);
		if ($tmpRow['qty'] < 1) {
			$message[] = "<b>Item Barang</b> belum ada yang dimasukan, <b>minimal 1 barang</b>.";
		}
		
		# Baca variabel
		$txtKdbarang= $_POST['txtKdbarang'];
		$txtKdbarang= str_replace("'","&acute;",$txtKdbarang);
		$txtNmbarang= $_POST['txtNmbarang'];
		$txtNmbarang= str_replace("'","&acute;",$txtKdbarang);
		$txtType= $_POST['txtType'];
		$txtType= str_replace("'","&acute;",$txtType);
		$txtSpec	= $_POST['txtSpec'];
		$txtSpec = str_replace("'","&acute;",$txtSpec);
		$txtKeterangan	= $_POST['txtKeterangan'];
		$txtKeterangan = str_replace("'","&acute;",$txtKeterangan);

		# Jika jumlah error message tidak ada
		if(count($message)==0){			
			$kodeBaru	= buatKode("konversi", "KON-");
			$qrySave=mysql_query("INSERT INTO konversi SET id='$kodeBaru', kd_barang='$txtKdbarang', type='$txtType', spec='$txtSpec', ket='$txtKeterangan', userid='".$_SESSION['SES_LOGIN']."'") or die ("Gagal query".mysql_error());
			if($qrySave){
				# Ambil semua data barang yang dipilih, berdasarkan user yg login
				$tmpSql ="SELECT * FROM tmp_konversi WHERE userid='".$_SESSION['SES_LOGIN']."'";
				$tmpQry = mysql_query($tmpSql, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
				while ($tmpRow = mysql_fetch_array($tmpQry)) {
					// Masukkan semua barang yang udah diisi ke tabel penjualan detail
					$itemSql = "INSERT INTO konversi_detail SET kd_barang='$txtKdbarang', kode='$tmpRow[kode]', jumlah='$tmpRow[jumlah]', ket='$tmpRow[ket]'";
		  			mysql_query($itemSql, $koneksidb) or die ("Gagal Query Simpan detail barang".mysql_error());
					
				}
				# Kosongkan Tmp jika datanya sudah dipindah
				mysql_query("DELETE FROM tmp_konversi WHERE userid='".$_SESSION['SES_LOGIN']."'", $koneksidb) or die ("Gagal kosongkan tmp".mysql_error());
					$useractSave=mysql_query("INSERT INTO user_act SET userid='".$_SESSION['SES_LOGIN']."', aktivitas='Menambah data konversi barang dengan kode $txtKdbarang', tanggal='".date("Y-m-d")."', jam='".date("G:i:s")."'") 
					 or die ("Gagal query".mysql_error());
				// Refresh form
				echo "<meta http-equiv='refresh' content='0; url=?page=Konversi-Add&Act=Success'>";
				
			}
			else{
				$message[] = "Gagal penyimpanan ke database";
			}
		}	
	}  
	// ============================================================================

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
	// ============================================================================

	} // Penutup POST
} // Penutup GET

# TAMPILKAN DATA KE FORM
$nomorTransaksi = buatKode("konversi", "KON-");


?>
<style type="text/css">
<!--
.style1 {color: #FF0000}
.style2 {color: #0000FF}
-->
</style>

<form action="?page=Konversi-Add" method="post"  name="frmadd">
<table width="100%" cellspacing="1" class="table-common" style="margin-top:0px;">
	<tr>
	  <td colspan="3" align="right"><h2>TAMBAH BARANG JADI SERTA KONVERSINYA</h2></td>
	</tr>
	<tr>
	  <td width="30%"><b>ID</b></td>
	  <td width="1%"><b>:</b></td>
	  <td width="69%"><input name="txtNomor" value="<?php echo $nomorTransaksi; ?>" size="9" maxlength="9" readonly="readonly"/></td></tr>
	<tr>
      <td><b>Kd Brg Jadi</b></td>
	  <td><b>:</b></td>
	  <td><input name="txtKdbarang" value="<?php echo $dataKdbarang; ?>" size="30" maxlength="100" /> &nbsp;&nbsp;
<input name="btnCek" type="submit" style="cursor:pointer;" value="Cek Kodebrg" /></td>
    </tr>

<tr>
      <td><b>Nama barang</b></td>
	  <td><b>:</b></td>
	  <td><input name="txtNmbarang" value="<?php echo $dataNmbarang; ?>" size="30" maxlength="100" /></td>
    </tr>
<tr>
      <td><b>Type</b></td>
	  <td><b>:</b></td>
	  <td><input name="txtType" value="<?php echo $dataType; ?>" size="30" maxlength="100" /></td>
    </tr>

<tr>
      <td><b>Spesifikasi</b></td>
	  <td><b>:</b></td>
	  <td><input name="txtSpec" value="<?php echo $dataSpec; ?>" size="30" maxlength="100" /></td>
    </tr>

	<tr>
      <td><b>Keterangan</b></td>
	  <td><b>:</b></td>
	  <td><input name="txtKeterangan" id="txtKeterangan" value="<?php echo $dataKeterangan; ?>" size="60" maxlength="100" /></td>
    </tr>

	<tr><td colspan="3"><div align="left"><span class="style1">Detail bahan baku</span></div></td>
    </tr>


	<tr>
	  <td colspan="3"><b>Kode Barang </b><b>:</b><b>
	    	 
					<input type="text" name="txtKode" size="20" id="txtKode" class="ui-widget ui-widget-content padding ui-corner-all button">
					<button id="kode-search" class="tombol">&nbsp;</button>

&nbsp;&nbsp;       
Qty :
<input class="angkaC" name="txtJumlah" size="10" maxlength="12" value="1" 
	  		 onblur="if (value == '') {value = '1'}" 
      		 onfocus="if (value == '1') {value =''}"/>
&nbsp;&nbsp;
Keterangan:
<input align="right" name="txtKet" value="<?php echo $dataKet; ?>" size="40" maxlength="40" />
&nbsp;&nbsp;
<input name="btnPilih" type="submit" style="cursor:pointer;" value="Add" />
      </b></td>
    </tr>
	<tr>
	  <td><input type="text" readonly="readonly" name="txtNama" size="35" id="txtNama" class="ui-widget ui-widget-content padding ui-corner-all button"></td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
    </tr>
	<tr>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td><input onClick="return confirm('ANDA YAKIN AKAN MENYIMPAN DATA TRANSAKSI, DATA YANG TERSIMPAN TIDAK DAPAT DIUBAH/DIHAPUS?')" name="btnSave" type="submit" style="cursor:pointer;" value=" SIMPAN TRANSAKSI " />&nbsp;&nbsp;&nbsp;<input type="button" value="Kembali" onClick="self.history.back()" /></td>
    </tr>
</table>

<table class="table-list" width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th colspan="8">DETAIL BAHAN BAKU</th>
    </tr>
  <tr>
    <td width="30" align="center" bgcolor="#CCCCCC"><b>No</b></td>
    <td width="150" align="center" bgcolor="#CCCCCC"><b>Kode</b></td>
    <td width="400" bgcolor="#CCCCCC"><b>Nama Barang </b></td>
    <td width="110" align="center" bgcolor="#CCCCCC"><strong>Jumlah</strong> </td>
    <td width="150" align="center" bgcolor="#CCCCCC"><b>Ket</b></td>
    <td width="45" align="center" bgcolor="#FFCC00"><b>Delete</b></td>
  </tr>
<?php
$tmpSql ="SELECT barang.kd_barang,barang.nm_barang,barang.satuan, tmp_konversi.*
		FROM tmp_konversi inner join barang on tmp_konversi.kode=barang.kd_barang
		WHERE tmp_konversi.userid='".$_SESSION['SES_LOGIN']."'
		ORDER BY tmp_konversi.id ";
$tmpQry = mysql_query($tmpSql, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
$qtyBrg = 0; $nomor=0;
while($tmpRow = mysql_fetch_array($tmpQry)) {
	$ID		= $tmpRow['id'];
	$qtyBrg = $qtyBrg + $tmpRow['jumlah'];
	$nomor++;
?>
  <tr>
    <td align="center"><b><?php echo $nomor; ?></b></td>
    <td align="center"><b><?php echo $tmpRow['kode']; ?></b></td>
    <td align="left"><?php echo $tmpRow['nm_barang']; ?></td>
    <td align="right"><?php echo format_angka($tmpRow['jumlah']); ?></div></td>
    <td align="center"><?php echo $tmpRow['ket']; ?></td>
    <td align="center" bgcolor="#FFFFCC"><a href="?page=Konversi-Add&Act=Delete&ID=<?php echo $ID; ?>"  target="_self"><img src="images/hapus.gif" width="16" height="16" border="0" /></a></td>
  </tr>
<?php 
}?>
  <tr>
    <td colspan="3" align="right"><b>Grand Total : </b></td>
    <td colspan="4" align="left"><b>Jumlah brg: <?php echo format_angka($qtyBrg); ?></b></td>
    </tr>
</table>
</form>
<!-- Untuk Dialog yg akan munculkan dari Tombol Search Kode -->
<div id="kode-dialog" class="" style="display: none; font-size: 10pt">
			<table id="tkodebrg" class="scroll" cellpadding="0" cellspacing="0"></table> 
			<div id="pkodebrg" class='ui-widget-header ui-corner-bl ui-corner-br' style="margin-top:0px;"></div>
		</div>
</body>
</html>