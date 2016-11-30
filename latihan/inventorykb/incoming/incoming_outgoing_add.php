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
$bagian = "/INC-OUT";
$today = date("Y");
$tahun = "SPB-$today";
$id = 'SPB-';
$query = "SELECT max(no_spb) AS last FROM incoming_outgoing WHERE no_spb LIKE '$tahun%'";
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
			mysql_query("DELETE FROM tmp_incoming_outgoing WHERE id='".$_GET['ID']."' AND userid='".$_SESSION['SES_LOGIN']."'", $koneksidb) 
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
				mysql_query("DELETE FROM tmp_incoming_outgoing WHERE userid='".$_SESSION['SES_LOGIN']."'", $koneksidb) or die ("Gagal kosongkan tmp".mysql_error());
				// Refresh form
				echo "<meta http-equiv='refresh' content='0; url=?page=Incoming-Outgoing-Add&Act=DeleteAllSuccess'>";
		}
	if(isset($_POST['btnExcel'])){
				// Refresh form
				echo "<meta http-equiv='refresh' content='0; url=?page=Upload-Detail-Incoming-Outgoing'>";

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
		$txtKet		= $_POST['txtKet'];
		$txtKet		= str_replace("'","&acute;",$txtKet);
		
		
		# Jika jumlah stok barang di tabel gudang pemasukan tidak cukup, maka transaksi ditolak
		$sqlCek="SELECT kode,jumlah FROM stock_pemasukan WHERE kode='$txtKode' And jumlah < $txtJumlah";
		$qryCek=mysql_query($sqlCek, $koneksidb) or die ("Eror Query".mysql_error()); 
		if(mysql_num_rows($qryCek)>=1){
			$message[] = "Maaf, stok barang kode <b>$txtKode</b> jumlah <b>$txtJumlah</b> di saldo gudang pemasukan tidak cukup";
			
		}
		
		# Jika kode barang tidak ada di tabel gudang pemasukan, maka transaksi ditolak
		$sqlCek="SELECT kode FROM stock_pemasukan WHERE kode='$txtKode'";
		$qryCek=mysql_query($sqlCek, $koneksidb) or die ("Eror Query".mysql_error()); 
		$qryRow = mysql_fetch_array($qryCek);
		if(mysql_num_rows($qryCek)==0){
			$message[] = "Tidak ada barang dengan kode <b>$txtKode</b> di gudang pemasukan, silahkan ganti";
			
		}
		
		
		
		# Jika jumlah error message tidak ada
		if(count($message)==0){			
			$barangSql ="SELECT kd_barang,stok FROM barang WHERE kd_barang='$txtKode' or kd_barang='$txtKode' And stok > $txtJumlah";
			$barangQry = mysql_query($barangSql, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
			$barangRow = mysql_fetch_array($barangQry);
			$barangQty = mysql_num_rows($barangQry);
			if ($barangQty >= 1) {

				$tmpSql = "INSERT INTO tmp_incoming_outgoing SET kode='$txtKode', jumlah='$txtJumlah', ket='$txtKet', userid='".$_SESSION['SES_LOGIN']."'";
				mysql_query($tmpSql, $koneksidb) or die ("Gagal Query detail barang : ".mysql_error());
				$txtKode= "";
				$txtJumlah	= "";
				$txtKet = "";
				
			}
			else {
				$message[] = "Tidak ada barang dengan kode <b>$txtKode</b> atau saldo barang di master barang tidak cukup, silahkan ganti";
			}
		}

	}
	// ============================================================================
	
	# JIKA TOMBOL SIMPAN DIKLIK
	if(isset($_POST['btnSave'])){
		$message = array();
		if (trim($_POST['txtSpb'])=="") {
			$message[] = "Nomor SPB belum diisi!";		
		}

		if (trim($_POST['cmbTglspb'])=="") {
			$message[] = "Tanggal SPB belum diisi, pilih pada combo !";		
		}


		if (trim($_POST['cmbDept'])=="BLANK") {
			$message[] = "<b>Nama departemen belum dipilih</b>, silahkan pilih lagi !";		
		}
		if (trim($_POST['txtPpc'])=="") {
			$message[] = "Nama PPC belum diisi!";		
		}


		
		$tmpSql ="SELECT COUNT(id) As qty FROM tmp_incoming_outgoing WHERE userid='".$_SESSION['SES_LOGIN']."'";
		$tmpQry = mysql_query($tmpSql, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$tmpRow = mysql_fetch_array($tmpQry);
		if ($tmpRow['qty'] < 1) {
			$message[] = "<b>Item Barang</b> belum ada yang dimasukan, <b>minimal 1 barang</b>.";
		}
		
		# Baca variabel
		$txtSpb= $_POST['txtSpb'];
		$txtSpb= str_replace("'","&acute;",$txtSpb);
		$cmbDept =$_POST['cmbDept'];
		$txtPpc= $_POST['txtPpc'];
		$txtPpc= str_replace("'","&acute;",$txtPpc);
		$txtCatatan	= $_POST['txtCatatan'];
		$txtCatatan = str_replace("'","&acute;",$txtCatatan);
		$cmbTglspb =$_POST['cmbTglspb'];
		
		# Validasi ID Record, jika sudah ada akan ditolak
		$sqlCeknomor="SELECT nomor,no_spb,tgl_spb FROM incoming_outgoing WHERE nomor='$kodeBaru' or no_spb='$txtSpb' and tgl_spb='".InggrisTgl($_POST['cmbTglspb'])."'";
		$qryCeknomor=mysql_query($sqlCeknomor, $koneksidb) or die ("Eror Query".mysql_error()); 
		if(mysql_num_rows($qryCeknomor)>=1){
			$message[] = "Maaf, data dengan ID Record<b> $kodeBaru </b> atau Nomor SPB <b> $txtSpb </b> tanggal <b> $cmbTglspb </b>sudah ada, kembali ke menu utama untuk mendapatkan ID baru";
		}

		# Jika jumlah error message tidak ada
		if(count($message)==0){			
			$kodeBaru	= buatKode("incoming_outgoing", "000");
			$qrySave=mysql_query("INSERT INTO incoming_outgoing SET nomor='$kodeBaru', no_spb='$txtSpb', tgl_spb='".InggrisTgl($_POST['cmbTglspb'])."', dept='$cmbDept', name_ppc='$txtPpc', catatan='$txtCatatan', userid='".$_SESSION['SES_LOGIN']."'") or die ("Gagal query".mysql_error());
			if($qrySave){
			// Masukkan data penyimpanan ke transfer 
			$qryTransfer=mysql_query("INSERT INTO tmp_outgoing_terima SET nomor='INC-$kodeBaru', dari='INCOMING', no_spb='$txtSpb', tgl_spb='".InggrisTgl($_POST['cmbTglspb'])."', dept='$cmbDept', name_ppc='$txtPpc', catatan='$txtCatatan', user_trt='".$_SESSION['SES_LOGIN']."'") or die ("Gagal query".mysql_error());
				
				# Ambil semua data barang yang dipilih, berdasarkan user yg login
				$tmpSql ="SELECT * FROM tmp_incoming_outgoing WHERE userid='".$_SESSION['SES_LOGIN']."'";
				$tmpQry = mysql_query($tmpSql, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
				while ($tmpRow = mysql_fetch_array($tmpQry)) {
					// Masukkan semua barang yang udah diisi ke tabel transfer detail
					$itemSql = "INSERT INTO incoming_outgoing_detail SET nomor='$kodeBaru', no_spb='$txtSpb', tgl_spb='".InggrisTgl($_POST['cmbTglspb'])."', kode='$tmpRow[kode]', jumlah='$tmpRow[jumlah]', ket='$tmpRow[ket]'";
		  			mysql_query($itemSql, $koneksidb) or die ("Gagal Query Simpan detail barang".mysql_error());
				// Masukkan semua barang yang udah diisi ke tabel transfer detail
					$itemtrtSql = "INSERT INTO tmp_outgoing_terima_detail SET nomor='INC-$kodeBaru', dari='INCOMING', kode='$tmpRow[kode]', jumlah='$tmpRow[jumlah]', ket='$tmpRow[ket]'";
		  			mysql_query($itemtrtSql, $koneksidb) or die ("Gagal Query Simpan detail barang".mysql_error());	
				
				}
				# Kosongkan Tmp jika datanya sudah dipindah
				mysql_query("DELETE FROM tmp_incoming_outgoing WHERE userid='".$_SESSION['SES_LOGIN']."'", $koneksidb) or die ("Gagal kosongkan tmp".mysql_error());
					$useractSave=mysql_query("INSERT INTO user_act SET userid='".$_SESSION['SES_LOGIN']."', aktivitas='Menambah data transaksi incoming - outgoing nomor SPB: $txtSpb dan tanggal $cmbTglspb', tanggal='".date("Y-m-d")."', jam='".date("G:i:s")."'") 
					 or die ("Gagal query".mysql_error());
				// Refresh form
				echo "<meta http-equiv='refresh' content='0; url=?page=Incoming-Outgoing-Add&Act=Success'>";
				
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
$nomorTransaksi = buatKode("incoming_outgoing", "000");
$dataSpb		= isset($_POST['txtSpb']) ? $_POST['txtSpb'] : '';
$tglSpb		 	= isset($_POST['cmbTglspb']) ? $_POST['cmbTglspb'] : date('d-m-Y');
$dataDept		= isset($_POST['cmbDept']) ? $_POST['cmbDept'] : '';
$dataPpc		= isset($_POST['txtPpc']) ? $_POST['txtPpc'] : '';
$dataCatatan	= isset($_POST['txtCatatan']) ? $_POST['txtCatatan'] : '';
$dataKet		= isset($_POST['txtKet']) ? $_POST['txtKet'] : '';

?>
<style type="text/css">
<!--
.style1 {color: #FF0000}
.style2 {color: #0000FF}
-->
</style>

<form action="?page=Incoming-Outgoing-Add" method="post"  name="frmadd">
<table width="100%" cellspacing="1" class="table-common" style="margin-top:0px;">
	<tr>
	  <td colspan="3" align="right"><h2>Incoming - Penyerahan barang ke Outgoing</h2></td>
	</tr>
	<tr>
	  
	  <td colspan="3"><input name="txtNomor" type="hidden" value="<?php echo $nomorTransaksi; ?>" size="10" maxlength="10" readonly="readonly"/></td></tr>
	<tr>
	  <td width="30%"><b>SURAT PENYERAHAN BARANG(SPB) </b></td>
	  <td width="1%"><b>:</b></td>
	  <td width="69%"><input name="txtSpb" readonly="readonly" value="<?php echo $nextNoTransaksi; ?>" size="45" maxlength="100" onKeyPress="return tabE(this,event)" /></td></tr>

	<tr>
      <td><b>Tanggal SPB</b></td>
	  <td><b>:</b></td>
	  <td><?php echo form_tanggal("cmbTglspb",$tglSpb); ?></td>
    </tr>
<tr>
      <td><b>Nama Departemen</b></td>
	  <td><b>:</b></td>
	 <td><select name="cmbDept" onKeyPress="return tabE(this,event)">
        <option value="BLANK"> </option>
        <?php
	  $dataSql = "SELECT kd_dept,nm_dept FROM dept ORDER BY kd_dept";
	  $dataQry = mysql_query($dataSql, $koneksidb) or die ("Gagal Query".mysql_error());
	  while ($dataRow = mysql_fetch_array($dataQry)) {
	  	if ($dataRow['nm_dept']== $_POST['cmbDept']) {
			$cek = " selected";
		} else { $cek=""; }
	  	echo "<option value='$dataRow[nm_dept]' $cek>$dataRow[nm_dept]</option>";
	  }
	  $sqlData ="";
	  ?>
      </select></td>
    </tr>
<tr>
      <td><b>Nama PIC</b></td>
	  <td><b>:</b></td>
	  <td><input name="txtPpc" value="<?php echo $dataPpc; ?>" size="50" maxlength="100" onKeyPress="return tabE(this,event)" /></td>
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
	    	   	
					<input type="text" name="txtKode" size="20" id="txtKode" class="ui-widget ui-widget-content padding ui-corner-all button" onKeyPress="return tabE(this,event)">
					<button id="kode-search" class="tombol">&nbsp;</button>

&nbsp;&nbsp;       
Qty :
<input class="angkaC" name="txtJumlah" size="8" maxlength="12" onKeyPress="return tabE(this,event)" value="1" 
	  		 onblur="if (value == '') {value = '1'}" 
      		 onfocus="if (value == '1') {value =''}"/>
&nbsp;&nbsp;
Keterangan:
<input align="right" name="txtKet" value="<?php echo $dataKet; ?>" size="50" maxlength="50" onKeyPress="return tabE(this,event)" />
&nbsp;&nbsp;
<input name="btnPilih" type="submit" style="cursor:pointer;" value="Add" />
 <input name="btnExcel" type="submit" style="cursor:pointer;" value="Impor excel"  />  
 <input name="btnDelete" type="submit" style="cursor:pointer;" value="Delete All" />
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
	  <td><input onClick="return confirm('ANDA YAKIN AKAN MENYIMPAN DATA TRANSAKSI, DATA YANG TERSIMPAN TIDAK DAPAT DIUBAH/DIHAPUS?')" name="btnSave" type="submit" style="cursor:pointer;" value=" SIMPAN TRANSAKSI " /></td>
    </tr>
</table>

<table class="table-list" width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th colspan="8" align="left">DAFTAR  DETAIL BARANG</th>
    </tr>
  <tr>
    <td width="15" align="center" bgcolor="#CCCCCC"><b>No</b></td>
    <td width="150" align="left" bgcolor="#CCCCCC"><b>Kode</b></td>
    <td width="200" bgcolor="#CCCCCC" align="left"><b>Nama Barang </b></td>
     <td width="45" align="center" bgcolor="#CCCCCC"><b>Satuan</b></td>
    <td width="110" align="right" bgcolor="#CCCCCC"><strong>Jumlah</strong> </td>
    <td width="200" align="left" bgcolor="#CCCCCC"><b>Keterangan</b></td>
    <td width="25" align="center" bgcolor="#FFCC00"><b>Edit</b></td>
    <td width="25" align="center" bgcolor="#FFCC00"><b>Del</b></td>
  </tr>
<?php
$tmpSql ="SELECT barang.kd_barang,barang.nm_barang,barang.satuan, tmp_incoming_outgoing.*
		FROM tmp_incoming_outgoing inner join barang on tmp_incoming_outgoing.kode=barang.kd_barang
		WHERE tmp_incoming_outgoing.userid='".$_SESSION['SES_LOGIN']."'
		ORDER BY tmp_incoming_outgoing.id ";
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
    <td align="left"><?php echo $tmpRow['ket']; ?></td>
    <td align="center" bgcolor="#FFFFCC"><a href="?page=Edit-Incoming-Outgoing&amp;ID=<?php echo $ID; ?>"  target="_self"><img src="images/b_edit.png" width="16" height="16" border="0" /></a></td>
    <td align="center" bgcolor="#FFFFCC"><a href="?page=Incoming-Outgoing-Add&Act=Delete&ID=<?php echo $ID; ?>"  target="_self"><img src="images/hapus.gif" width="16" height="16" border="0" /></a></td>
  </tr>
<?php 
}?>
  <tr>
    <td colspan="3" align="right"><b>Grand Total : </b></td>
    <td colspan="5" align="left"><b>Jumlah brg: <?php echo format_angka($qtyBrg); ?></b></td>
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