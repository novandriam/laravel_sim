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
$infoKb = "SELECT kode AS kodep FROM infokb ";
$h = mysql_query($infoKb);
$d  = mysql_fetch_array($h);
$kodeKb = $d['kodep'];
$bagian = "/$kodeKb";

$today = date("Y");
$tahun = "PEM-$today";
$id = 'PEM-';

$query = "SELECT max(no_pem) AS last FROM pemusnahan WHERE no_pem LIKE '$tahun%'";
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
			mysql_query("DELETE FROM tmp_pemusnahan WHERE id='".$_GET['ID']."' AND userid='".$_SESSION['SES_LOGIN']."'", $koneksidb) 
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
				mysql_query("DELETE FROM tmp_pemusnahan WHERE userid='".$_SESSION['SES_LOGIN']."'", $koneksidb) or die ("Gagal kosongkan tmp".mysql_error());
				// Refresh form
				echo "<meta http-equiv='refresh' content='0; url=?page=Pemusnahan-Barang&Act=DeleteAllSuccess'>";

		}
		if(isset($_POST['btnExcel'])){
				// Refresh form
				echo "<meta http-equiv='refresh' content='0; url=?page=Upload-Detail-Pemusnahan'>";

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
	
		if (trim($_POST['cmbValuta'])=="BLANK") {
			$message[] = "<b>Kode valuta</b> belum dipilih !";		
		}
		if (trim($_POST['txtNilai'])=="" OR ! is_numeric(trim($_POST['txtNilai']))) {
			$message[] = "Data <b>Nilai barang (Qty) belum diisi</b>, silahkan <b>isi dengan angka</b> !";		
		}
		if (trim($_POST['txtNetto_detail'])=="" OR ! is_numeric(trim($_POST['txtNetto_detail']))) {
			$message[] = "Data <b>berat barang (Netto) belum diisi</b>, silahkan <b>isi dengan angka</b> !";		
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
		
		

		# Jika jumlah error message tidak ada
		if(count($message)==0){			
			$barangSql ="SELECT kd_barang,stok FROM barang WHERE kd_barang='$txtKode' or kd_barang='$txtKode' And stok > $txtJumlah";
			$barangQry = mysql_query($barangSql, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
			$barangRow = mysql_fetch_array($barangQry);
			$barangQty = mysql_num_rows($barangQry);
			if ($barangQty >= 1) {

				$tmpSql = "INSERT INTO tmp_pemusnahan SET kode='$txtKode', jumlah='$txtJumlah', valuta='$cmbValuta', nilai='$txtNilai', netto_detail='$txtNetto_detail', volume_detail='$txtVolume_detail', userid='".$_SESSION['SES_LOGIN']."'";
				mysql_query($tmpSql, $koneksidb) or die ("Gagal Query detail barang : ".mysql_error());
				$txtKode= "";
				$txtJumlah	= "";
				$cmbValuta = "";
				$txtNilai = "";
				$txtNetto_detail = "";
				$txtVolume_detail = "";
	
			}
			else {
				$message[] = "Tidak ada barang dengan kode <b>$txtKode</b> atau saldo tidak cukup pada data master barang, silahkan ganti";
			}
		}

	}
	
	// ============================================================================
	
	# JIKA TOMBOL SIMPAN DIKLIK
	if(isset($_POST['btnSave'])){
		$message = array();
		if (trim($_POST['txtPem'])=="") {
			$message[] = "<b>Nomor Surat Pemusnahan</b> belum diisi!";		
		}
		if (trim($_POST['cmbTglpem'])=="") {
			$message[] = "<b>Tanggal Pemusnahan</b> belum diisi, pilih pada combo !";		
		}
		if (trim($_POST['txtSkep'])=="") {
			$message[] = "<b>Nomor Persetujuan KPPBC</b> belum diisi!";		
		}
		if (trim($_POST['cmbTglskep'])=="") {
			$message[] = "<b>Tanggal Persetujuan KPPBC belum diisi</b>, pilih pada combo !";		
		}
		if (trim($_POST['txtBap'])=="") {
			$message[] = "<b>Nomor BA Pemusnahan</b> belum diisi!";		
		}
		if (trim($_POST['cmbTglbap'])=="") {
			$message[] = "<b>Tanggal BA Pemusnahan belum diisi</b>, pilih pada combo !";		
		}
		if (trim($_POST['cmbPenerima'])=="BLANK") {
			$message[] = "<b>Nama penerima belum dipilih</b>, silahkan pilih lagi !";		
		}
		if (trim($_POST['txtCatatan'])=="") {
			$message[] = "<b>Catatan pemusnahan barang belum diisi</b>!";		
		}
		if (trim($_POST['txtInvoice'])=="") {
			$message[] = "<b>Nomor Invoice</b> belum diisi!";		
		}
		if (trim($_POST['cmbTglinvoice'])=="") {
			$message[] = "<b>Tanggal Invoice belum diisi</b>, pilih pada combo !";		
		}
		if (trim($_POST['txtKontrak'])=="") {
			$message[] = "<b>Nomor Kontrak </b>belum diisi!";		
		}
		if (trim($_POST['cmbTglkontrak'])=="") {
			$message[] = "<b>Tanggal kontrak belum diisi</b>, pilih pada combo !";		
		}
		
		if (trim($_POST['txtHarga'])=="") {
			$message[] = "<b>Nilai CIF (dalam USD) </b>belum diisi, apabila dalam valuta berbeda agar dikonversikan terlebih dahulu dalam USD!";		
		}
		if (trim($_POST['cmbKemasan'])=="BLANK") {
			$message[] = "<b>Jenis kemasan belum dipilih</b>, silahkan pilih lagi !";		
		}
		if (trim($_POST['txtMerekKemasan'])=="") {
			$message[] = "<b>Merek kemasan</b> belum diisi!";		
		}
		if (trim($_POST['txtJmlKemasan'])=="") {
			$message[] = "<b>Jumlah kemasan </b>belum diisi!";		
		}
		if (trim($_POST['txtBrutto'])=="") {
			$message[] = "<b>Total Berat Kotor (Brutto)</b> belum diisi!";		
		}

		if (trim($_POST['txtNetto'])=="") {
			$message[] = "<b>Total Berat Bersih (Netto)</b> belum diisi!";		
		}
				
		if (trim($_POST['txtVolume'])=="") {
			$message[] = "<b>Total Volume barang </b>belum diisi!";		
		}				
		
		$tmpSql ="SELECT COUNT(id) As qty FROM tmp_pemusnahan WHERE userid='".$_SESSION['SES_LOGIN']."'";
		$tmpQry = mysql_query($tmpSql, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$tmpRow = mysql_fetch_array($tmpQry);
		if ($tmpRow['qty'] < 1) {
			$message[] = "<b>Item Barang</b> belum ada yang dimasukan, <b>minimal 1 barang</b>.";
		}
		
		# Baca variabel
		$txtPem= $_POST['txtPem'];
		$txtPem= str_replace("'","&acute;",$txtPem);
		$cmbTglpem =$_POST['cmbTglpem'];
		$txtSkep= $_POST['txtSkep'];
		$txtSkep= str_replace("'","&acute;",$txtSkep);
		$cmbTglskep =$_POST['cmbTglskep'];		
		$txtBap= $_POST['txtBap'];
		$txtBap= str_replace("'","&acute;",$txtBap);
		$cmbTglbap =$_POST['cmbTglbap'];		
		$txtCatatan	= $_POST['txtCatatan'];
		$txtCatatan= str_replace("'","&acute;",$txtCatatan);
		$cmbPenerima =$_POST['cmbPenerima'];
		$txtInvoice= $_POST['txtInvoice'];
		$txtInvoice= str_replace("'","&acute;",$txtInvoice);
		$cmbTglinvoice =$_POST['cmbTglinvoice'];		
		$txtKontrak= $_POST['txtKontrak'];
		$txtKontrak= str_replace("'","&acute;",$txtKontrak);
		$cmbTglkontrak =$_POST['cmbTglkontrak'];
		$txtHarga= $_POST['txtHarga'];
		$txtHarga= str_replace("'","&acute;",$txtHarga);
		$cmbKemasan =$_POST['cmbKemasan'];
		$txtMerekKemasan= $_POST['txtMerekKemasan'];
		$txtMerekKemasan= str_replace("'","&acute;",$txtMerekKemasan);
		$txtJmlKemasan= $_POST['txtJmlKemasan'];
		$txtJmlKemasan= str_replace("'","&acute;",$txtJmlKemasan);
		$txtBrutto= $_POST['txtBrutto'];
		$txtBrutto= str_replace("'","&acute;",$txtBrutto);
		$txtNetto= $_POST['txtNetto'];
		$txtNetto= str_replace("'","&acute;",$txtNetto);
		$txtVolume= $_POST['txtVolume'];
		$txtVolume= str_replace("'","&acute;",$txtVolume);

		# Validasi ID Record, jika sudah ada akan ditolak
		$sqlCeknomor="SELECT nomor,no_pem,tgl_pem FROM pemusnahan WHERE nomor='$kodeBaru' or no_pem='$txtPem' and tgl_pem='".InggrisTgl($_POST['cmbTglpem'])."'";
		$qryCeknomor=mysql_query($sqlCeknomor, $koneksidb) or die ("Eror Query".mysql_error()); 
		if(mysql_num_rows($qryCeknomor)>=1){
			$message[] = "Maaf, data dengan ID Record<b> $kodeBaru </b> sudah ada atau Nomor Transaksi Pemusnahan:<b> $txtPem </b> tanggal <b> $cmbTglpem </b> sudah ada, kembali ke menu utama untuk mendapatkan ID baru";
		}

		# Jika jumlah error message tidak ada
		if(count($message)==0){			
			$kodeBaru	= buatKode("pemusnahan", "000");
			$qrySave=mysql_query("INSERT INTO pemusnahan SET nomor='$kodeBaru', no_pem='$txtPem', tgl_pem='".InggrisTgl($_POST['cmbTglpem'])."', no_skep='$txtSkep', tgl_skep='".InggrisTgl($_POST['cmbTglskep'])."', no_bap='$txtBap', tgl_bap='".InggrisTgl($_POST['cmbTglbap'])."', penerima='$cmbPenerima', catatan='$txtCatatan', no_invoice='$txtInvoice', tgl_invoice='".InggrisTgl($_POST['cmbTglinvoice'])."', no_kontrak='$txtKontrak', tgl_kontrak='".InggrisTgl($_POST['cmbTglkontrak'])."', harga='$txtHarga', jenis_kemasan='$cmbKemasan', merek_kemasan='$txtMerekKemasan', jumlah_kemasan='$txtJmlKemasan', brutto='$txtBrutto', netto='$txtNetto', volume='$txtVolume', userid='".$_SESSION['SES_LOGIN']."'") or die ("Gagal query".mysql_error());
			if($qrySave){
				# Ambil semua data barang yang dipilih, berdasarkan kasir yg login
				$tmpSql ="SELECT * FROM tmp_pemusnahan WHERE userid='".$_SESSION['SES_LOGIN']."'";
				$tmpQry = mysql_query($tmpSql, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
				while ($tmpRow = mysql_fetch_array($tmpQry)) {
					// Masukkan semua barang yang udah diisi ke tabel penjualan detail
					$itemSql = "INSERT INTO pemusnahan_detail SET nomor='$kodeBaru', no_pem='$txtPem', tgl_pem='".InggrisTgl($_POST['cmbTglpem'])."', kode='$tmpRow[kode]', jumlah='$tmpRow[jumlah]', valuta='$tmpRow[valuta]', nilai='$tmpRow[nilai]'";
		  			mysql_query($itemSql, $koneksidb) or die ("Gagal Query Simpan detail barang".mysql_error());
					
					// Update stok saldo barang
					$barangSql = "UPDATE barang SET stok=stok - $tmpRow[jumlah] WHERE kd_barang='$tmpRow[kode]'";
		  			mysql_query($barangSql, $koneksidb) or die ("Gagal Query Edit Stok".mysql_error());

					// Update stok di gudang pengeluaran
					$updateSql = "UPDATE stock_pengeluaran SET jumlah=jumlah - $tmpRow[jumlah] WHERE kode='$tmpRow[kode]'";
		  			mysql_query($updateSql, $koneksidb) or die ("Gagal Query Edit Stok".mysql_error());
					
				}
				# Kosongkan Tmp jika datanya sudah dipindah
				mysql_query("DELETE FROM tmp_pemusnahan WHERE userid='".$_SESSION['SES_LOGIN']."'", $koneksidb) or die ("Gagal kosongkan tmp".mysql_error());
				$useractSave=mysql_query("INSERT INTO user_act SET userid='".$_SESSION['SES_LOGIN']."', aktivitas='Menambah data transaksi pemusnahan barang nomor surat transaksi: $txtPem dan tanggal $cmbTglpem', tanggal='".date("Y-m-d")."', jam='".date("G:i:s")."'") 
					 or die ("Gagal query".mysql_error());
				// Refresh form
				echo "<meta http-equiv='refresh' content='0; url=?page=Pemusnahan-Barang&Act=Success'>";
				
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
$nomorTransaksi = buatKode("pemusnahan", "000");
$dataPem	= isset($_POST['txtPem']) ? $_POST['txtPem'] : '';
$tglPem		 	= isset($_POST['cmbTglpem']) ? $_POST['cmbTglpem'] : date('d-m-Y');
$tglSkep 	= isset($_POST['cmbTglskep']) ? $_POST['cmbTglskep'] : date('d-m-Y');
$tglBap 	= isset($_POST['cmbTglbap']) ? $_POST['cmbTglbap'] : date('d-m-Y');
$tglInvoice 	= isset($_POST['cmbTglInvoice']) ? $_POST['cmbTglinvoice'] : date('d-m-Y');
$tglKontrak 		= isset($_POST['cmbTglkontrak']) ? $_POST['cmbTglkontrak'] : date('d-m-Y');
$dataPenerima	= isset($_POST['cmbPenerima']) ? $_POST['cmbPenerima'] : '';
$dataCatatan	= isset($_POST['txtCatatan']) ? $_POST['txtCatatan'] : '';
$dataSkep	= isset($_POST['txtSkep']) ? $_POST['txtSkep'] : '';
$dataBap	= isset($_POST['txtBap']) ? $_POST['txtBap'] : '';
$dataInvoice	= isset($_POST['txtInvoice']) ? $_POST['txtInvoice'] : '';
$dataKontrak	= isset($_POST['txtKontrak']) ? $_POST['txtKontrak'] : '';
$dataHarga	= isset($_POST['txtHarga']) ? $_POST['txtHarga'] : '';
$dataKemasan	= isset($_POST['cmbKemasan']) ? $_POST['cmbKemasan'] : '';
$dataMerekKemasan	= isset($_POST['txtMerekKemasan']) ? $_POST['txtMerekKemasan'] : '';
$dataJmlKemasan	= isset($_POST['txtJmlKemasan']) ? $_POST['txtJmlKemasan'] : '';
$dataBrutto	= isset($_POST['txtBrutto']) ? $_POST['txtBrutto'] : '';
$dataNetto	= isset($_POST['txtNetto']) ? $_POST['txtNetto'] : '';
$dataVolume	= isset($_POST['txtVolume']) ? $_POST['txtVolume'] : '';

?>
<style type="text/css">
<!--
.style1 {color: #FF0000}
.style2 {color: #0000FF}
-->
</style>

<form action="?page=Pemusnahan-Barang" method="post"  name="frmadd">
<table width="100%" cellspacing="1" class="table-common" style="margin-top:0px;">
	<tr>
	  <td colspan="3" align="right"><h2>Outgoing - Pemusnahan Barang</h2></td>
	</tr>
    <tr>
	  <td colspan="3"><input name="txtNomor" type="hidden" value="<?php echo $nomorTransaksi; ?>" size="10" maxlength="10" readonly="readonly"/></td></tr>
      <tr><td colspan="3"><div align="left" class="style1">Header</div></td></tr>
	<tr>
	  <td width="30%" align="right"><b>No dan tanggal Transaksi Pemusnahan </b></td>
	  <td width="1%"><b>:</b></td>
	  <td width="69%"><input name="txtPem" readonly="readonly" value="<?php echo $nextNoTransaksi; ?>" size="45" maxlength="100" onKeyPress="return tabE(this,event)" />&nbsp;&nbsp;/&nbsp;<?php echo form_tanggal("cmbTglpem",$tglPem); ?></td></tr>
    <tr>
      <td align="right"><b>Nomor dan tanggal Persetujuan KPPBC</b></td>
	  <td><b>:</b></td>
	  <td><input name="txtSkep" value="<?php echo $dataSkep; ?>" size="45" maxlength="100" onKeyPress="return tabE(this,event)" />&nbsp;/&nbsp;<?php echo form_tanggal("cmbTglskep",$tglSkep); ?></td>
    </tr>
 <tr>
      <td align="right"><b>Nomor dan tanggal BA Pemusnahan</b></td>
	  <td><b>:</b></td>
	  <td><input name="txtBap" value="<?php echo $dataBap; ?>" size="45" maxlength="100" onKeyPress="return tabE(this,event)" />&nbsp;/&nbsp;<?php echo form_tanggal("cmbTglbap",$tglBap); ?></td>
    </tr>


	<tr>
      <td align="right"><b>Penerima</b></td>
	  <td><b>:</b></td>
	  <td><select name="cmbPenerima" onKeyPress="return tabE(this,event)">
        <option value="BLANK"> </option>
        <?php
	  $dataSql = "SELECT kode_penerima,nama FROM penerima ORDER BY kode_penerima";
	  $dataQry = mysql_query($dataSql, $koneksidb) or die ("Gagal Query".mysql_error());
	  while ($dataRow = mysql_fetch_array($dataQry)) {
	  	if ($dataRow['kode_penerima']== $_POST['cmbPenerima']) {
			$cek = " selected";
		} else { $cek=""; }
	  	echo "<option value='$dataRow[kode_penerima]' $cek>$dataRow[kode_penerima]&nbsp;-&nbsp;$dataRow[nama]</option>";
	  }
	  $sqlData ="";
	  ?>
      </select></td>
    </tr>
    	<tr>
      <td align="right"><b>Catatan Pemusnahan</b></td>
	  <td><b>:</b></td>
	 <td><input name="txtCatatan" value="<?php echo $dataCatatan; ?>" size="45" maxlength="100" onKeyPress="return tabE(this,event)" /></td>
    </tr>

<tr><td colspan="3"><div align="left" class="style1">Data dokumen</div></td></tr>

<tr>
      <td align="right"><b>Nomor dan tanggal Invoice</b></td>
	  <td><b>:</b></td>
	  <td><input name="txtInvoice" value="<?php echo $dataInvoice; ?>" size="45" maxlength="100" onKeyPress="return tabE(this,event)" />&nbsp;&nbsp;/<?php echo form_tanggal("cmbTglinvoice",$tglInvoice); ?>&nbsp;</td>
    </tr>
 <tr>
      <td align="right"><b>Nomor dan tanggal Kontrak</b></td>
	  <td><b>:</b></td>
	  <td><input name="txtKontrak" value="<?php echo $dataKontrak; ?>" size="45" maxlength="100" onKeyPress="return tabE(this,event)" />&nbsp;/&nbsp;<?php echo form_tanggal("cmbTglkontrak",$tglKontrak); ?></td>
    </tr>
 

	
<tr><td colspan="3"><div align="left" class="style1">Data Harga, Kemasan dan Berat</div></td></tr>
<tr>
      <td align="right"><b>Nilai CIF (dalam USD*)</b></td>
	  <td><b>:</b></td>
	  <td><input name="txtHarga" value="<?php echo $dataHarga; ?>" size="25" onKeyPress="return tabE(this,event)" maxlength="100" />&nbsp;)* apabila nilai barang dalam valuta berbeda agar dikonversikan terlebih dahulu dalam USD</td>
    </tr>

<tr>
      <td align="right"><b>Jenis Kemasan</b></td>
	  <td><b>:</b></td>
	  <td><select name="cmbKemasan" onKeyPress="return tabE(this,event)">
        <option value="BLANK"> </option>
        <?php
	  $dataSql = "SELECT kd_kemasan,uraian_kemasan FROM kemasan ORDER BY id_kemasan";
	  $dataQry = mysql_query($dataSql, $koneksidb) or die ("Gagal Query".mysql_error());
	  while ($dataRow = mysql_fetch_array($dataQry)) {
	  	if ($dataRow['kd_kemasan']== $_POST['cmbKemasan']) {
			$cek = " selected";
		} else { $cek=""; }
	  	echo "<option value='$dataRow[kd_kemasan]' $cek>$dataRow[kd_kemasan]&nbsp;-&nbsp;$dataRow[uraian_kemasan]</option>";
	  }
	  $sqlData ="";
	  ?>
      </select></td>
    </tr>
	<tr>
      <td align="right"><b>Merek Kemasan</b></td>
	  <td><b>:</b></td>
	  <td><input name="txtMerekKemasan" value="<?php echo $dataMerekKemasan; ?>" onKeyPress="return tabE(this,event)" size="25" maxlength="100" /></td>
    </tr>
    <tr>
      <td align="right"><b>Jumlah Kemasan</b></td>
	  <td><b>:</b></td>
	  <td><input name="txtJmlKemasan" value="<?php echo $dataJmlKemasan; ?>" size="15" onKeyPress="return tabE(this,event)" maxlength="100" /></td>
    </tr>
<tr>
      <td align="right"><b>Berat Kotor (Kg)</b></td>
	  <td><b>:</b></td>
	  <td><input name="txtBrutto" value="<?php echo $dataBrutto; ?>" size="25" onKeyPress="return tabE(this,event)" maxlength="100" /></td>
    </tr>
    <tr>
      <td align="right"><b>Berat Bersih (Kg)</b></td>
	  <td><b>:</b></td>
	  <td><input name="txtNetto" value="<?php echo $dataNetto; ?>" size="25" onKeyPress="return tabE(this,event)" maxlength="100" /></td>
    </tr>
    <tr>
      <td align="right"><b>Volume (m3)</b></td>
	  <td><b>:</b></td>
	  <td><input name="txtVolume" value="<?php echo $dataVolume; ?>" size="25" onKeyPress="return tabE(this,event)" maxlength="100" /></td>
    </tr>

<tr><td colspan="3"><div align="left"><span class="style1">Detail barang keluar</span></div></td></tr>
	<tr>
	  <td colspan="3"><b>Kode Barang </b><b>:</b><b>
	    	   
					<input type="text" name="txtKode" size="20" id="txtKode" onKeyPress="return tabE(this,event)" class="ui-widget ui-widget-content padding ui-corner-all button">
					<button id="kode-search" class="tombol">&nbsp;</button>

&nbsp;&nbsp;       
Qty :
<input class="angkaC" name="txtJumlah" size="10" maxlength="12" value="1"  onKeyPress="return tabE(this,event)"
	  		 onblur="if (value == '') {value = '1'}" 
      		 onfocus="if (value == '1') {value =''}"/>
&nbsp;&nbsp;
Valuta:
<select name="cmbValuta" onKeyPress="return tabE(this,event)">
        <option value="BLANK"> </option>
        <?php
	  $dataSql = "SELECT kd_valas,jenis_valas FROM matauang ORDER BY kd_valas";
	  $dataQry = mysql_query($dataSql, $koneksidb) or die ("Gagal Query".mysql_error());
	  while ($dataRow = mysql_fetch_array($dataQry)) {
	  	if ($dataRow['jenis_valas']== $_POST['cmbValuta']) {
			$cek = " selected";
		} else { $cek=""; }
	  	echo "<option value='$dataRow[jenis_valas]' $cek>$dataRow[jenis_valas]</option>";
	  }
	  $sqlData ="";
	  ?>
      </select>&nbsp;&nbsp;
Nilai barang:
<input align="right" name="txtNilai" value="<?php echo $dataNilai; ?>" onKeyPress="return tabE(this,event)" size="12" maxlength="30" />
&nbsp;&nbsp;
Netto (kg):
<input align="right" name="txtNetto_detail" value="<?php echo $dataNetto_detail; ?>" onKeyPress="return tabE(this,event)" size="12" maxlength="30" />
&nbsp;&nbsp;
Volume (m3):
<input align="right" name="txtVolume_detail" value="<?php echo $dataVolume_detail; ?>" onKeyPress="return tabE(this,event)" size="12" maxlength="30" />
&nbsp;&nbsp;

      </b></td>
    </tr>
	<tr>
	  <td><input type="text" readonly="readonly" name="txtNama" size="35" id="txtNama" class="ui-widget ui-widget-content padding ui-corner-all button"></td>
	  <td>&nbsp;</td>
	  <td align="right"><input name="btnPilih" type="submit" style="cursor:pointer;" value="Add" />
<input name="btnExcel" type="submit" style="cursor:pointer;" value="Impor excel"  />
<input name="btnDelete" type="submit" style="cursor:pointer;" value="Delete All" />
</td>
    </tr>
	<tr>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td><input onClick="return confirm('ANDA YAKIN AKAN MENYIMPAN DATA TRANSAKSI, DATA YANG TERSIMPAN TIDAK DAPAT DIUBAH/DIHAPUS?')" name="btnSave" type="submit" style="cursor:pointer;" value=" SIMPAN TRANSAKSI " /></td>
    </tr>
</table>

<table class="table-list" width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th colspan="11" align="left">DAFTAR  DETAIL BARANG</th>
    </tr>
  <tr>
    <td width="20" align="center" bgcolor="#CCCCCC"><b>No</b></td>
    <td width="100" align="left" bgcolor="#CCCCCC"><b>Kode</b></td>
    <td width="250" bgcolor="#CCCCCC" align="left"><b>Nama Barang </b></td>
    <td width="45" align="center" bgcolor="#CCCCCC"><b>Satuan</b></td>
    <td width="80" align="right" bgcolor="#CCCCCC"><strong>Jumlah</strong> </td>
    <td width="35" align="center" bgcolor="#CCCCCC"><strong>Valuta</strong> </td>
    <td width="110" align="right" bgcolor="#CCCCCC"><b>Nilai</b></td>
    <td width="110" align="right" bgcolor="#CCCCCC"><b>Netto (kg)</b></td>
    <td width="110" align="right" bgcolor="#CCCCCC"><b>Volume (m3)</b></td>
    <td width="25" align="center" bgcolor="#FFCC00"><b>Edit</b></td>
    <td width="25" align="center" bgcolor="#FFCC00"><b>Delete</b></td>
  </tr>
<?php
$tmpSql ="SELECT barang.kd_barang,barang.nm_barang,barang.satuan, tmp_pemusnahan.*
		FROM tmp_pemusnahan inner join barang on tmp_pemusnahan.kode=barang.kd_barang
		WHERE tmp_pemusnahan.userid='".$_SESSION['SES_LOGIN']."'
		ORDER BY tmp_pemusnahan.id ";
$tmpQry = mysql_query($tmpSql, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
$nilaiBrg = 0; $qtyBrg = 0; $nomor=0;
while($tmpRow = mysql_fetch_array($tmpQry)) {
	$ID		= $tmpRow['id'];
	$qtyBrg = $qtyBrg + $tmpRow['jumlah'];
	$nilaiBrg = $nilaiBrg + $tmpRow['nilai'];
	
	$nomor++;
?>
  <tr>
    <td align="center"><?php echo $nomor; ?></td>
    <td align="left"><b><?php echo $tmpRow['kode']; ?></b></td>
    <td align="left"><?php echo $tmpRow['nm_barang']; ?></td>
        <td align="center"><?php echo $tmpRow['satuan']; ?></td>
    <td align="right"><?php echo format_angka($tmpRow['jumlah']); ?></td>
    <td align="center"><?php echo $tmpRow['valuta']; ?></td>
    <td align="right"><?php echo format_angka($tmpRow['nilai']); ?></td>
    <td align="right"><?php echo format_angka($tmpRow['netto_detail']); ?></td>
    <td align="right"><?php echo format_angka($tmpRow['volume_detail']); ?></td>
     <td align="center" bgcolor="#FFFFCC"><a href="?page=Edit-Pemusnahan-Barang&amp;ID=<?php echo $ID; ?>"  target="_self"><img src="images/b_edit.png" width="16" height="16" border="0" /></a></td>
    <td align="center" bgcolor="#FFFFCC"><a href="?page=Pemusnahan-Barang&Act=Delete&ID=<?php echo $ID; ?>"  target="_self"><img src="images/hapus.gif" width="16" height="16" border="0" /></a></td>
  </tr>
<?php 
}?>
  <tr>
    <td colspan="3" align="right"><b>Grand Total : </b></td>
    <td colspan="2" align="left"><b>Jumlah brg: <?php echo format_angka($qtyBrg); ?></b></td>
    <td colspan="6" align="left"><b>Nilai brg: <?php echo format_angka($nilaiBrg); ?></b></td>
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