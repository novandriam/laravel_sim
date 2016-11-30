<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Test</title>
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

$today = date("Y");
$tahun = "ADJ-$today";
$id = 'ADJ-';
$query = "SELECT max(no_adj) AS last FROM adjusment WHERE no_adj LIKE '$tahun%'";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
$lastNoTransaksi = $data['last'];
// baca nomor urut transaksi dari id transaksi terakhir
$lastNoUrut = substr($lastNoTransaksi, 8, 6); 
// nomor urut ditambah 1
$nextNoUrut = $lastNoUrut + 1;
$nextNoTransaksi = $id.$today.sprintf('%06s', $nextNoUrut);
if($_GET) {
	# HAPUS DAFTAR barang DI TMP
	if(isset($_GET['Act'])){
		if(trim($_GET['Act'])=="Delete"){
			# Hapus Tmp jika datanya sudah dipindah
			mysql_query("DELETE FROM tmp_adjusment WHERE id='".$_GET['ID']."' AND userid='".$_SESSION['SES_LOGIN']."'", $koneksidb) 
				or die ("Gagal kosongkan tmp".mysql_error());
		}
		if(trim($_GET['Act'])=="Succes"){
			echo "<b>DATA BERHASIL DISIMPAN</b> <br><br>";
		}
	}
	// =========================================================================
	
	if($_POST) {
	# TOMBOL PILIH (KODE barang) DIKLIK
	if(isset($_POST['btnPilih'])){
		$message = array();
		if (trim($_POST['txtKode'])=="") {
			$message[] = "<b>Kode Barang belum diisi</b>, masukkan kode barang sesuai yg terdaftar di database!";		
		}
		if (trim($_POST['txtJumlah'])=="" ) {
			$message[] = "Data <b>Jumlah barang (Qty) belum diisi</b>, silahkan <b>isi dengan angka</b> !";		
		}
		
		
		# Baca variabel
		$txtKode	= $_POST['txtKode'];
		$txtKode	= str_replace("'","&acute;",$txtKode);
		$txtJumlah	= $_POST['txtJumlah'];
		$txtJumlah	= str_replace("'","&acute;",$txtJumlah);
		$txtCat		= $_POST['txtCat'];
		$txtCat		= str_replace("'","&acute;",$txtCat);

		# Jika jumlah error message tidak ada
		if(count($message)==0){			
			$barangSql ="SELECT * FROM barang WHERE kd_barang='$txtKode'";
			$barangQry = mysql_query($barangSql, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
			$barangRow = mysql_fetch_array($barangQry);
			$barangQty = mysql_num_rows($barangQry);
			if ($barangQty >= 1) {

				$tmpSql = "INSERT INTO tmp_adjusment SET kode='$barangRow[kd_barang]', jumlah='$txtJumlah', cat='$txtCat', userid='".$_SESSION['SES_LOGIN']."'";
				mysql_query($tmpSql, $koneksidb) or die ("Gagal Query detail barang : ".mysql_error());
				$txtKode= "";
				$txtJumlah	= "";
				$txtCat = "";
				
			}
			else {
				$message[] = "Tidak ada barang dengan kode <b>$txtKode</b>, silahkan ganti";
			}
		}

	}
	// ============================================================================
	
	# JIKA TOMBOL SIMPAN DIKLIK
	if(isset($_POST['btnSave'])){
		$message = array();
		if (trim($_POST['txtAdj'])=="") {
			$message[] = "Nomor Adjustment masih kosong!";		
		}

		if (trim($_POST['cmbTgladj'])=="") {
			$message[] = "Tanggal Adj belum diisi, pilih pada combo !";		
		}
		if (trim($_POST['cmbTglstock'])=="") {
			$message[] = "Tanggal Stock belum diisi, pilih pada combo !";		
		}

		if (trim($_POST['txtKet'])=="") {
			$message[] = "Harap diisi keterangan mengenai tindakan adjustment!";		
		}


		
		$tmpSql ="SELECT COUNT(*) As qty FROM tmp_adjusment WHERE userid='".$_SESSION['SES_LOGIN']."'";
		$tmpQry = mysql_query($tmpSql, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$tmpRow = mysql_fetch_array($tmpQry);
		if ($tmpRow['qty'] < 1) {
			$message[] = "<b>Item Barang</b> belum ada yang dimasukan, <b>minimal 1 barang</b>.";
		}
		
		# Baca variabel
		$txtAdj= $_POST['txtAdj'];
		$txtAdj= str_replace("'","&acute;",$txtAdj);
		$txtKet= $_POST['txtKet'];
		$txtKet= str_replace("'","&acute;",$txtKet);
		$cmbTgladj =$_POST['cmbTgladj'];
		$cmbTglstock =$_POST['cmbTglstock'];
		
		# Validasi ID Record, jika sudah ada akan ditolak
		$sqlCek="SELECT * FROM adjusment WHERE nomor='$kodeBaru'";
		$qryCek=mysql_query($sqlCek, $koneksidb) or die ("Eror Query".mysql_error()); 
		if(mysql_num_rows($qryCek)>=1){
			$message[] = "Maaf, data dengan ID Record<b> $kodeBaru </b> sudah ada, kembali ke menu utama untuk mendapatkan ID baru";
		}
		# Validasi Nomor dan tanggal SPB, jika sudah ada akan ditolak
		$sqlCek="SELECT * FROM adjusment WHERE no_adj='$txtAdj' and tgl_adj='".InggrisTgl($_POST['cmbTgladj'])."'";
		$qryCek=mysql_query($sqlCek, $koneksidb) or die ("Eror Query".mysql_error()); 
		if(mysql_num_rows($qryCek)>=1){
			$message[] = "Maaf, Nomor Adj <b> $txtAdj </b> tanggal <b> $cmbTgladj </b> sudah ada, mohon diganti";
		}				
		# Jika jumlah error message tidak ada
		if(count($message)==0){			
			$kodeBaru	= buatKode("adjusment", "000");
			$qrySave=mysql_query("INSERT INTO adjusment SET nomor='$kodeBaru', no_adj='$txtAdj', tgl_adj='".InggrisTgl($_POST['cmbTgladj'])."', tgl_stock='".InggrisTgl($_POST['cmbTglstock'])."', ket='$txtKet', userid='".$_SESSION['SES_LOGIN']."'") or die ("Gagal query".mysql_error());
			if($qrySave){
				
				# Ambil semua data barang yang dipilih, berdasarkan user yg login
				$tmpSql ="SELECT * FROM tmp_adjusment WHERE userid='".$_SESSION['SES_LOGIN']."'";
				$tmpQry = mysql_query($tmpSql, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
				while ($tmpRow = mysql_fetch_array($tmpQry)) {
					// Masukkan semua barang yang udah diisi ke tabel penjualan detail
					$itemSql = "INSERT INTO adjusment_detail SET nomor='$kodeBaru', no_adj='$txtAdj', tgl_adj='".InggrisTgl($_POST['cmbTgladj'])."', kode='$tmpRow[kode]', jumlah='$tmpRow[jumlah]', cat='$tmpRow[cat]'";
		  			mysql_query($itemSql, $koneksidb) or die ("Gagal Query Simpan detail barang".mysql_error());
					
					// Update stok
					$barangSql = "UPDATE barang SET stok=stok + $tmpRow[jumlah] WHERE kd_barang='$tmpRow[kode]'";
		  			mysql_query($barangSql, $koneksidb) or die ("Gagal Query Edit Stok".mysql_error());
				}
				# Kosongkan Tmp jika datanya sudah dipindah
				mysql_query("DELETE FROM tmp_adjusment WHERE userid='".$_SESSION['SES_LOGIN']."'", $koneksidb) or die ("Gagal kosongkan tmp".mysql_error());
					$useractSave=mysql_query("INSERT INTO user_act SET userid='".$_SESSION['SES_LOGIN']."', aktivitas='Menambah data adjustment dengan nomor $txtAdj tanggal $cmbTgladj', tanggal='".date("Y-m-d")."', jam='".date("G:i:s")."'") 
					 or die ("Gagal query".mysql_error());

				// Refresh form
				echo "<meta http-equiv='refresh' content='0; url=?page=Add-Penyesuaian&Act=success'>";
				
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
$nomorTransaksi = buatKode("adjusment", "000");
$tglAdj		 	= isset($_POST['cmbTgladj']) ? $_POST['cmbTgladj'] : date('d-m-Y');
$tglStock		= isset($_POST['cmbTglstock']) ? $_POST['cmbTglstock'] : date('d-m-Y');
$dataKet	= isset($_POST['txtKet']) ? $_POST['txtKet'] : '';
$dataAdj	= isset($_POST['txtAdj']) ? $_POST['txtAdj'] : '';
$dataCat	= isset($_POST['txtCat']) ? $_POST['txtCat'] : '';
?>
<style type="text/css">
<!--
.style1 {color: #FF0000}
.style2 {color: #0000FF}
-->
</style>

<form action="?page=Add-Penyesuaian" method="post"  name="frmadd">
<table width="100%" cellspacing="1" class="table-common" style="margin-top:0px;">
	<tr>
	  <td colspan="3" align="right"><h2>TAMBAH ADJUSTMENT</h2></td>
	</tr>
    <tr>
	  <td colspan="3"><input name="txtNomor" type="hidden" value="<?php echo $nomorTransaksi; ?>" size="10" maxlength="10" readonly="readonly"/></td></tr>
	<tr>
	  <td width="30%"><b>No Adjustment </b></td>
	  <td width="1%"><b>:</b></td>
	  <td width="69%"><input name="txtAdj" readonly="readonly" onKeyPress="return tabE(this,event)" value="<?php echo $nextNoTransaksi; ?>" size="35" maxlength="100" /></td></tr>
	<tr>
      <td><b>Tanggal Adj</b></td>
	  <td><b>:</b></td>
	  <td><?php echo form_tanggal("cmbTgladj",$tglAdj); ?></td>
    </tr>
<tr>
      <td><b>Tgl Stock Opname</b></td>
	  <td><b>:</b></td>
	  <td><?php echo form_tanggal("cmbTglstock",$tglStock); ?></td>
    </tr>

<tr>
      <td><b>Keterangan</b></td>
	  <td><b>:</b></td>
	  <td><textarea onKeyPress="return tabE(this,event)" name="txtKet" cols="50"><?php echo $dataKet; ?></textarea></td>
    </tr>


	<tr><td colspan="3"><div align="left"><span class="style1">Detail barang </span></div></td>
    </tr>


	<tr>
	  <td colspan="3"><b>Kode Barang </b><b>:</b><b>
					<input type="text" name="txtKode" onKeyPress="return tabE(this,event)" size="20" id="txtKode" class="ui-widget ui-widget-content padding ui-corner-all button">
					<button id="kode-search" class="tombol">&nbsp;</button>

&nbsp;&nbsp;       
Qty :
<input class="angkaC" name="txtJumlah" size="10" maxlength="12" value="1"  onKeyPress="return tabE(this,event)"
	  		 onblur="if (value == '') {value = '1'}" 
      		 onfocus="if (value == '1') {value =''}"/>
&nbsp;&nbsp;
Catatan:
<input name="txtCat" type="text" value="<?php echo $dataCat; ?>" size="50" align="right" onKeyPress="return tabE(this,event)" />
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
	  <td><input onclick="return confirm('ANDA YAKIN AKAN MENYIMPAN DATA TRANSAKSI, DATA YANG TERSIMPAN TIDAK DAPAT DIUBAH/DIHAPUS?')" name="btnSave" type="submit" style="cursor:pointer;" value=" SIMPAN TRANSAKSI " />&nbsp;&nbsp;&nbsp;<input type="button" value="Batal" onclick="self.history.back()" /></td>
    </tr>
</table>

<table class="table-list" width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th colspan="9">DAFTAR  DETAIL BARANG</th>
    </tr>
  <tr>
    <td width="30" align="center" bgcolor="#CCCCCC"><b>No</b></td>
    <td width="150" align="left" bgcolor="#CCCCCC"><b>Kode</b></td>
    <td width="200" bgcolor="#CCCCCC" align="left"><b>Nama Barang </b></td>
        <td width="45" align="center" bgcolor="#CCCCCC"><b>Satuan</b></td>
    <td width="110" align="right" bgcolor="#CCCCCC"><strong>Jumlah</strong> </td>
    <td width="200" align="left" bgcolor="#CCCCCC"><b>Catatan</b></td>
    <td width="25" align="center" bgcolor="#FFCC00"><b>Edit</b></td>
    <td width="25" align="center" bgcolor="#FFCC00"><b>Del</b></td>
  </tr>
<?php
$tmpSql ="SELECT barang.kd_barang, barang.nm_barang, barang.satuan, tmp_adjusment.*
		FROM tmp_adjusment inner join barang on tmp_adjusment.kode = barang.kd_barang
		WHERE tmp_adjusment.userid='".$_SESSION['SES_LOGIN']."'
		ORDER BY tmp_adjusment.id ";
$tmpQry = mysql_query($tmpSql, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
$qtyBrg = 0; $nomor=0;
while($tmpRow = mysql_fetch_array($tmpQry)) {
	$ID		= $tmpRow['id'];
	$qtyBrg = $qtyBrg + $tmpRow['jumlah'];
	$nomor++;
?>
  <tr>
    <td align="center"><?php echo $nomor; ?></td>
    <td align="left"><b><?php echo $tmpRow['kd_barang']; ?></b></td>
    <td align="left"><?php echo $tmpRow['nm_barang']; ?></td>
    <td align="center"><?php echo $tmpRow['satuan']; ?></td>
    <td align="right"><?php echo format_angka($tmpRow['jumlah']); ?></td>
    <td align="left"><?php echo $tmpRow['cat']; ?></td>
     <td align="center" bgcolor="#FFFFCC"><a href="?page=Edit-Penyesuaian&amp;ID=<?php echo $ID; ?>"  target="_self"><img src="images/b_edit.png" width="16" height="16" border="0" /></a></td>
    <td align="center" bgcolor="#FFFFCC"><a href="?page=Add-Penyesuaian&Act=Delete&ID=<?php echo $ID; ?>"  target="_self"><img src="images/hapus.gif" width="16" height="16" border="0" /></a></td>
  </tr>
<?php 
}?>
  <tr>
    <td colspan="3" align="right"><b>Grand Total : </b></td>
    <td colspan="6" align="left"><b>Jumlah brg: <?php echo format_angka($qtyBrg); ?></b></td>
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