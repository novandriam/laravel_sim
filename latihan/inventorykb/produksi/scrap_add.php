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
				$("#submit").button();
				$("#reset").button();
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
$bagian = "/LAP-SCRAP";
$today = date("Y");
$tahun = "LS-$today";
$id = 'LS-';
$query = "SELECT max(no_lap) AS last FROM scrap WHERE no_lap LIKE '$tahun%'";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
$lastNoTransaksi = $data['last'];
// baca nomor urut transaksi dari id transaksi terakhir
$lastNoUrut = substr($lastNoTransaksi, 8, 6); 
// nomor urut ditambah 1
$nextNoUrut = $lastNoUrut + 1;
$nextNoTransaksi = $id.$today.sprintf('%06s', $nextNoUrut).$bagian;
if($_GET) {
	# HAPUS DAFTAR barang DI TMP
	if(isset($_GET['Act'])){
		if(trim($_GET['Act'])=="Delete"){
			# Hapus Tmp jika datanya sudah dipindah
			mysql_query("DELETE FROM tmp_scrap WHERE id='".$_GET['ID']."' AND userid='".$_SESSION['SES_LOGIN']."'", $koneksidb) 
				or die ("Gagal kosongkan tmp".mysql_error());
		}
		if(trim($_GET['Act'])=="Success"){
			echo "<b>DATA BERHASIL DISIMPAN</b> <br><br>";
		}
	}
	// =========================================================================
	
	if($_POST) {
		if(isset($_POST['btnDelete'])){
				# Kosongkan Tmp jika datanya sudah dipindah
				mysql_query("DELETE FROM tmp_scrap WHERE userid='".$_SESSION['SES_LOGIN']."'", $koneksidb) or die ("Gagal kosongkan tmp".mysql_error());
				// Refresh form
				echo "<meta http-equiv='refresh' content='0; url=?page=Scrap-Add&Act=DeleteAllSuccess'>";
		}
	
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
				
		# Jika jumlah error message tidak ada
		if(count($message)==0){			
			$barangSql ="SELECT kd_barang FROM barang WHERE kd_barang='$txtKode' and kd_kategori='K04'";
			$barangQry = mysql_query($barangSql, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
			$barangRow = mysql_fetch_array($barangQry);
			$barangQty = mysql_num_rows($barangQry);
			if ($barangQty >= 1) {

				$tmpSql = "INSERT INTO tmp_scrap SET kode='$txtKode', jumlah='$txtJumlah', userid='".$_SESSION['SES_LOGIN']."'";
				mysql_query($tmpSql, $koneksidb) or die ("Gagal Query detail barang : ".mysql_error());
				$txtKode= "";
				$txtJumlah	= "";
				
			}
			else {
				$message[] = "Tidak ada scrap dengan kode <b>$txtKode</b> pada master barang, silahkan ganti";
			}
		}

	}
	// ============================================================================
	
	# JIKA TOMBOL SIMPAN DIKLIK
	if(isset($_POST['btnSave'])){
		$message = array();
		if (trim($_POST['txtLap'])=="") {
			$message[] = "Nomor Laporan Scrap belum diisi!";		
		}

		if (trim($_POST['cmbTgllap'])=="") {
			$message[] = "Tanggal Laporan Scrap belum diisi, pilih pada combo !";		
		}

		if (trim($_POST['txtPpc'])=="") {
			$message[] = "Nama PPC belum diisi!";		
		}


		
		$tmpSql ="SELECT COUNT(id) As qty FROM tmp_scrap WHERE userid='".$_SESSION['SES_LOGIN']."'";
		$tmpQry = mysql_query($tmpSql, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$tmpRow = mysql_fetch_array($tmpQry);
		if ($tmpRow['qty'] < 1) {
			$message[] = "<b>Item Barang</b> belum ada yang dimasukan, <b>minimal 1 barang</b>.";
		}
		
		# Baca variabel
		$txtLap= $_POST['txtLap'];
		$txtLap= str_replace("'","&acute;",$txtLap);
		$txtPpc= $_POST['txtPpc'];
		$txtPpc= str_replace("'","&acute;",$txtPpc);
		$txtCatatan	= $_POST['txtCatatan'];
		$txtCatatan = str_replace("'","&acute;",$txtCatatan);
		$cmbTgllap =$_POST['cmbTgllap'];
		
		# Validasi ID Record, jika sudah ada akan ditolak
		$sqlCeknomor="SELECT nomor,no_lap,tgl_lap FROM scrap WHERE nomor='$kodeBaru' or no_lap='$txtLap' and tgl_lap='".InggrisTgl($_POST['cmbTgllap'])."'";
		$qryCeknomor=mysql_query($sqlCeknomor, $koneksidb) or die ("Eror Query".mysql_error()); 
		if(mysql_num_rows($qryCeknomor)>=1){
			$message[] = "Maaf, data dengan ID Record<b> $kodeBaru </b> atau Nomor Laporan Produksi<b> $txtLap </b> tanggal <b> $cmbTgllap </b> sudah ada, kembali ke menu utama untuk mendapatkan ID baru";
		}
		# Jika jumlah error message tidak ada
		if(count($message)==0){			
			$kodeBaru	= buatKode("scrap", "000");
			$qrySave=mysql_query("INSERT INTO scrap SET nomor='$kodeBaru', no_lap='$txtLap', tgl_lap='".InggrisTgl($_POST['cmbTgllap'])."', name_ppc='$txtPpc', catatan='$txtCatatan', userid='".$_SESSION['SES_LOGIN']."'") or die ("Gagal query".mysql_error());
			if($qrySave){
				
				# Ambil semua data barang yang dipilih, berdasarkan user yg login
				$tmpSql ="SELECT * FROM tmp_scrap WHERE userid='".$_SESSION['SES_LOGIN']."'";
				$tmpQry = mysql_query($tmpSql, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
				while ($tmpRow = mysql_fetch_array($tmpQry)) {
					// Masukkan semua barang yang udah diisi ke tabel transfer detail
					$itemSql = "INSERT INTO scrap_detail SET nomor='$kodeBaru', no_lap='$txtLap', tgl_lap='".InggrisTgl($_POST['cmbTgllap'])."', kode='$tmpRow[kode]', jumlah='$tmpRow[jumlah]'";
		  			mysql_query($itemSql, $koneksidb) or die ("Gagal Query Simpan detail barang".mysql_error());
					
					// update stok di stock produksi
			$pemasukanSql ="SELECT * FROM stock_produksi WHERE kode='$tmpRow[kode]'";
			$pemasukanQry = mysql_query($pemasukanSql, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
			$pemasukanQty = mysql_num_rows($pemasukanQry);
			if ($pemasukanQty == 1) {

					$updateSql = "UPDATE stock_produksi SET jumlah=jumlah + $tmpRow[jumlah] WHERE kode='$tmpRow[kode]'";
		  			mysql_query($updateSql, $koneksidb) or die ("Gagal Query Stok".mysql_error());
			}
			else {
				$insertSql = "INSERT INTO stock_produksi SET kode='$tmpRow[kode]', jumlah='$tmpRow[jumlah]'";
				mysql_query($insertSql, $koneksidb) or die ("Gagal Query Stok : ".mysql_error());
			}

				
				}
				# Kosongkan Tmp jika datanya sudah dipindah
				mysql_query("DELETE FROM tmp_scrap WHERE userid='".$_SESSION['SES_LOGIN']."'", $koneksidb) or die ("Gagal kosongkan tmp".mysql_error());
					$useractSave=mysql_query("INSERT INTO user_act SET userid='".$_SESSION['SES_LOGIN']."', aktivitas='Menambah data transaksi pemasukan scrap dengan nomor Laporan Scrap: $txtLap dan tanggal $cmbTgllap', tanggal='".date("Y-m-d")."', jam='".date("G:i:s")."'") 
					 or die ("Gagal query".mysql_error());
				// Refresh form
				echo "<meta http-equiv='refresh' content='0; url=?page=Scrap-Add&Act=Success'>";
				
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
$nomorTransaksi = buatKode("scrap", "000");
$dataLap		= isset($_POST['txtLap']) ? $_POST['txtLap'] : '';
$tglLap		 	= isset($_POST['cmbTgllap']) ? $_POST['cmbTgllap'] : date('d-m-Y');
$dataPpc		= isset($_POST['txtPpc']) ? $_POST['txtPpc'] : '';
$dataCatatan	= isset($_POST['txtCatatan']) ? $_POST['txtCatatan'] : '';
?>
<style type="text/css">
<!--
.style1 {color: #FF0000}
.style2 {color: #0000FF}
-->
</style>

<form action="?page=Scrap-Add" method="post"  name="frmadd">
<table width="100%" cellspacing="1" class="table-common" style="margin-top:0px;">
	<tr>
	  <td colspan="3" align="right"><h2>Produksi - Laporan Hasil Scrap</h2></td>
	</tr>
	<tr>
	  
	  <td colspan="3"><input name="txtNomor" type="hidden" value="<?php echo $nomorTransaksi; ?>" size="10" maxlength="10" readonly="readonly"/></td></tr>
	<tr>
	  <td width="30%"><b>Nomor Laporan Scrap </b></td>
	  <td width="1%"><b>:</b></td>
	  <td width="69%"><input name="txtLap" readonly="readonly" value="<?php echo $nextNoTransaksi; ?>" onKeyPress="return tabE(this,event)" size="45" maxlength="100" /></td></tr>

	<tr>
      <td><b>Tanggal LS</b></td>
	  <td><b>:</b></td>
	  <td><?php echo form_tanggal("cmbTgllap",$tglLap); ?></td>
    </tr>

<tr>
      <td><b>Nama PIC</b></td>
	  <td><b>:</b></td>
	  <td><input onKeyPress="return tabE(this,event)" name="txtPpc" value="<?php echo $dataPpc; ?>" size="50" maxlength="100" /></td>
    </tr>

	<tr>
      <td><b>Catatan</b></td>
	  <td><b>:</b></td>
	  <td><textarea name="txtCatatan" onKeyPress="return tabE(this,event)" cols="60"><?php echo $dataCatatan; ?></textarea></td>
    </tr>

	<tr><td colspan="3"><div align="left"><span class="style1">Detail barang </span></div></td>
    </tr>


	<tr>
	  <td colspan="3"><b>Kode Barang </b><b>:</b><b>
	    	   
					<input type="text" name="txtKode" onKeyPress="return tabE(this,event)" size="30" id="txtKode" class="ui-widget ui-widget-content padding ui-corner-all button">
					<button id="kode-search" class="tombol">&nbsp;</button>
 &nbsp;&nbsp; 
<input type="text" readonly="readonly" name="txtNama" size="50" id="txtNama" class="ui-widget ui-widget-content padding ui-corner-all button">
&nbsp;&nbsp;       
Qty :
<input class="angkaC" name="txtJumlah" size="8" maxlength="12" value="1" onKeyPress="return tabE(this,event)" 
	  		 onblur="if (value == '') {value = '1'}" 
      		 onfocus="if (value == '1') {value =''}"/>
&nbsp;&nbsp;
<input name="btnPilih" type="submit" style="cursor:pointer;" value="Add" />
 <input name="btnDelete" type="submit" style="cursor:pointer;" value="Delete All" />
      </b></td>
    </tr>
	<tr>
	  <td></td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
    </tr>
	<tr>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td><input onClick="return confirm('ANDA YAKIN AKAN MENYIMPAN DATA TRANSAKSI, DATA YANG TERSIMPAN TIDAK DAPAT DIUBAH/DIHAPUS?')" name="btnSave" type="submit" style="cursor:pointer;" value=" SIMPAN TRANSAKSI " /></td>
    </tr>
</table>

<table class="table-list" width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th colspan="7">DAFTAR  DETAIL BARANG</th>
    </tr>
  <tr>
    <td width="30" align="center" bgcolor="#CCCCCC"><b>No</b></td>
    <td width="110" align="left" bgcolor="#CCCCCC"><b>Kode</b></td>
    <td width="200" bgcolor="#CCCCCC" align="left"><b>Nama Barang </b></td>
    <td width="45" align="center" bgcolor="#CCCCCC"><b>Satuan</b></td>
    <td width="80" align="right" bgcolor="#CCCCCC"><strong>Jumlah</strong> </td>
    <td width="25" align="center" bgcolor="#FFCC00"><b>Edit</b></td>
    <td width="25" align="center" bgcolor="#FFCC00"><b>Del</b></td>
  </tr>
<?php
$tmpSql ="SELECT barang.kd_barang,barang.nm_barang,barang.satuan, tmp_scrap.*
		FROM tmp_scrap inner join barang on tmp_scrap.kode=barang.kd_barang
		WHERE tmp_scrap.userid='".$_SESSION['SES_LOGIN']."'
		ORDER BY tmp_scrap.id ";
$tmpQry = mysql_query($tmpSql, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
$qtyBrg = 0; $nomor=0;
while($tmpRow = mysql_fetch_array($tmpQry)) {
	$ID		= $tmpRow['id'];
	$qtyBrg = $qtyBrg + $tmpRow['jumlah'];
	$nomor++;
?>
  <tr>
    <td align="center"><?php echo $nomor; ?></td>
    <td align="left"><b><?php echo $tmpRow['kode']; ?></b></td>
    <td align="left"><?php echo $tmpRow['nm_barang']; ?></td>
      <td align="center"><?php echo $tmpRow['satuan']; ?></td>
    <td align="right"><?php echo format_angka($tmpRow['jumlah']); ?></td>
    <td align="center" bgcolor="#FFFFCC"><a href="?page=Edit-Scrap&amp;ID=<?php echo $ID; ?>"  target="_self"><img src="images/b_edit.png" width="16" height="16" border="0" /></a></td>
    <td align="center" bgcolor="#FFFFCC"><a href="?page=Scrap-Add&Act=Delete&ID=<?php echo $ID; ?>"  target="_self"><img src="images/hapus.gif" width="16" height="16" border="0" /></a></td>
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