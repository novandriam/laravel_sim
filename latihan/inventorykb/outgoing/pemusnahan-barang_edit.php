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

$KodeEdit= isset($_GET['ID']) ?  $_GET['ID'] : $_POST['txtID']; 
if($_GET) {
	if(isset($_POST['btnSave'])){
		# Validasi form, jika kosong sampaikan pesan error
		$message = array();
		if (trim($_POST['txtKode'])=="") {
			$message[] = "<b>Kode Barang belum diisi</b>, masukkan kode barang sesuai yg terdaftar di database!";		
		}
		if (trim($_POST['txtJumlah'])=="" OR ! is_numeric(trim($_POST['txtJumlah']))) {
			$message[] = "Data <b>Jumlah barang (Qty) belum diisi</b>, silahkan <b>isi dengan angka</b> !";		
		}
		
		if (trim($_POST['cmbValuta'])=="BLANK") {
			$message[] = "<b>Kode valuta</b> belum dipilih !";		
		}
		if (trim($_POST['txtNilai'])=="" OR ! is_numeric(trim($_POST['txtNilai']))) {
			$message[] = "Data <b>Nilai barang (belum diisi</b>!";		
		}
		
		if (trim($_POST['txtNetto_detail'])=="" OR ! is_numeric(trim($_POST['txtNetto_detail']))) {
			$message[] = "Data <b>Detail berat barang (Netto) belum diisi</b>!";		
		}
		

		# Baca variabel
		$txtKode	= $_POST['txtKode'];
		$txtKode	= str_replace("'","&acute;",$txtKode);
		$cmbValuta	= $_POST['cmbValuta'];
		$txtJumlah	= $_POST['txtJumlah'];
		$txtJumlah	= str_replace("'","&acute;",$txtJumlah);
		$txtNilai	= $_POST['txtNilai'];
		$txtNilai	= str_replace("'","&acute;",$txtNilai);
		$txtNetto_detail	= $_POST['txtNetto_detail'];
		$txtNetto_detail	= str_replace("'","&acute;",$txtNetto_detail);
		$txtVolume_detail	= $_POST['txtVolume_detail'];
		$txtVolume_detail	= str_replace("'","&acute;",$txtVolume_detail);
		
			$barangSql ="SELECT kd_barang FROM barang WHERE kd_barang='$txtKode'";
			$barangQry = mysql_query($barangSql, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
			$barangRow = mysql_fetch_array($barangQry);
			$barangQty = mysql_num_rows($barangQry);
			if ($barangQty == 0) {
			$message[] = "Tidak ada barang dengan kode <b>$txtKode</b>, silahkan ganti";
			}

		# Jika jumlah stok barang di tabel gudang pengeluaran tidak cukup, maka transaksi ditolak
		$sqlCek="SELECT kode,jumlah FROM stock_pengeluaran WHERE kode='$txtKode' And jumlah < $txtJumlah";
		$qryCek=mysql_query($sqlCek, $koneksidb) or die ("Eror Query".mysql_error()); 
		if(mysql_num_rows($qryCek)>=1){
			$message[] = "Maaf, stok barang kode <b>$txtKode</b> jumlah <b>$txtJumlah</b> di saldo gudang pengeluaran tidak cukup";
			
		}
		
		# Jika kode barang tidak ada di tabel gudang pengeluaran, maka transaksi ditolak
		$sqlCek="SELECT kode FROM stock_pengeluaran WHERE kode='$txtKode'";
		$qryCek=mysql_query($sqlCek, $koneksidb) or die ("Eror Query".mysql_error()); 
		$qryRow = mysql_fetch_array($qryCek);
		if(mysql_num_rows($qryCek)==0){
			$message[] = "Tidak ada barang dengan kode <b>$txtKode</b> di gudang pengeluaran, silahkan ganti";
			
		}
		# SIMPAN PERUBAHAN DATA, Jika jumlah error message tidak ada, simpan datanya
		if(count($message)==0){	
			$qryUpdate=mysql_query("UPDATE tmp_pemusnahan SET kode='$txtKode', jumlah='$txtJumlah', valuta='$cmbValuta', nilai='$txtNilai', netto_detail='$txtNetto_detail', volume_detail='$txtVolume_detail' WHERE id='".$_POST['txtID']."'") 
					   or die ("Gagal query update".mysql_error());
			if($qryUpdate){
				echo "<meta http-equiv='refresh' content='0; url=?page=Pemusnahan-Barang'>";
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
	
	# TAMPILKAN DATA LOGIN UNTUK DIEDIT
	$IDEdit= isset($_GET['ID']) ?  $_GET['ID'] : $_POST['txtID']; 
	$sqlShow = "SELECT barang.kd_barang, barang.nm_barang, barang.satuan, tmp_pemusnahan.* 
	FROM tmp_pemusnahan inner join barang on tmp_pemusnahan.kode=barang.kd_barang
	WHERE tmp_pemusnahan.id='$IDEdit'";
	$qryShow = mysql_query($sqlShow, $koneksidb)  or die ("Query ambil data pemusnahan salah : ".mysql_error());
	$dataShow = mysql_fetch_array($qryShow);

	# MASUKKAN DATA KE VARIABEL
	$dataID	= $dataShow['id'];
	$dataKode	= isset($dataShow['kode']) ?  $dataShow['kode'] : $_POST['txtKode'];
	$dataNama	= isset($dataShow['nm_barang']) ?  $dataShow['nm_barang'] : $_POST['txtNama'];
	$dataSatuan	= isset($dataShow['satuan']) ?  $dataShow['satuan'] : $_POST['txtSatuan'];
	$dataJumlah	= isset($dataShow['jumlah']) ?  $dataShow['jumlah'] : $_POST['txtJumlah'];
	$dataValuta	= isset($dataShow['valuta']) ?  $dataShow['valuta'] : $_POST['cmbValuta'];
	$dataNilai	= isset($dataShow['nilai']) ?  $dataShow['nilai'] : $_POST['txtNilai'];
	$dataNetto_detail	= isset($dataShow['netto_detail']) ?  $dataShow['netto_detail'] : $_POST['txtNetto_detail'];
	$dataVolume_detail	= isset($dataShow['volume_detail']) ?  $dataShow['volume_detail'] : $_POST['txtVolume_detail'];

} // Penutup GET
?>
<form action="?page=Edit-Pemusnahan-Barang" method="post" name="frmedit">
<table class="table-list" width="100%" style="margin-top:0px;">
	<tr><input name="txtID" type="hidden" value="<?php echo $dataID; ?>" />
	  <td colspan="3"><h2>UBAH  DETAIL DATA PEMUSNAHAN BARANG </h2></td>
	</tr>
	
	<tr>
	  <td width="15%"><b>Kode barang</b></td>
	  <td width="1%"><b>:</b></td>
	  <td width="84%"><input type="text" name="txtKode" size="30" id="txtKode" value="<?php echo $dataKode; ?>" onKeyPress="return tabE(this,event)" class="ui-widget ui-widget-content padding ui-corner-all button">&nbsp;&nbsp;<button id="kode-search" class="tombol">&nbsp;</button></td>
    </tr>
   	<tr>
	  <td><b>Nama barang</b></td>
	  <td><b>:</b></td>
	  <td><input type="text" value="<?php echo $dataNama; ?>" onKeyPress="return tabE(this,event)" readonly="readonly" name="txtNama" size="40" id="txtNama" class="ui-widget ui-widget-content padding ui-corner-all button"></td>
    </tr>

	<tr>
	  <td><b>Jumlah barang</b></td>
	  <td><b>:</b></td>
	  <td><input name="txtJumlah" type="text" value="<?php echo $dataJumlah; ?>" size="80" maxlength="100" onKeyPress="return tabE(this,event)" /></td>
    </tr>

      <tr>
	  <td><strong>Valuta</strong></td>
	  <td><b>:</b></td>
	  <td><select name="cmbValuta">
          <option value="BLANK"> </option>
          
          <?php
	  $dataSql = "SELECT kd_valas,jenis_valas FROM matauang ORDER BY kd_valas";
	  $dataQry = mysql_query($dataSql, $koneksidb) or die ("Gagal Query".mysql_error());
	  while ($dataRow = mysql_fetch_array($dataQry)) {
	  	if ($dataRow['jenis_valas']== $dataValuta) {
			$cek = " selected";
		} else { $cek=""; }
	  	echo "<option value='$dataRow[jenis_valas]' $cek>$dataRow[jenis_valas]</option>";
	  }
	  $sqlData ="";
	  ?>
      </select></td>
    </tr>
    <tr>
	  <td><b>Nilai barang</b></td>
	  <td><b>:</b></td>
	  <td><input name="txtNilai" type="text" value="<?php echo $dataNilai; ?>" size="80" maxlength="100" onKeyPress="return tabE(this,event)" /></td>
    </tr>
    <tr>
	  <td><b>Netto barang (kg)</b></td>
	  <td><b>:</b></td>
	  <td><input name="txtNetto_detail" type="text" value="<?php echo $dataNetto_detail; ?>" size="80" maxlength="100" onKeyPress="return tabE(this,event)" /></td>
    </tr>
    <tr>
	  <td><b>Volume barang (m3)</b></td>
	  <td><b>:</b></td>
	  <td><input name="txtVolume_detail" type="text" value="<?php echo $dataVolume_detail; ?>" size="80" maxlength="100" onKeyPress="return tabE(this,event)" /></td>
    </tr>


	<tr><td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td><input onClick="return confirm('ANDA YAKIN AKAN MENYIMPAN PERUBAHAN DATA ?')" type="submit" name="btnSave" value=" SIMPAN " style="cursor:pointer;">&nbsp;&nbsp;&nbsp;<input type="button" value="Back" onClick="self.history.back()" /> </td>
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