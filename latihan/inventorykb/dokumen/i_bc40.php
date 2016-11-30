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
$tahun = "BPB-$today";
$id = 'BPB-';

$query = "SELECT max(nomor_pengajuan) AS last FROM tbl_bc40 WHERE nomor_pengajuan LIKE '$tahun%'";
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
			mysql_query("DELETE FROM tmp_bc40 WHERE id='".$_GET['ID']."' AND userid='".$_SESSION['SES_LOGIN']."'", $koneksidb) 
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
				mysql_query("DELETE FROM tmp_bc40 WHERE userid='".$_SESSION['SES_LOGIN']."'", $koneksidb) or die ("Gagal kosongkan tmp".mysql_error());
				// Refresh form
				echo "<meta http-equiv='refresh' content='0; url=?page=Tambah-BC40&Act=DeleteAllSuccess'>";

		}
		if(isset($_POST['btnExcel'])){
				// Refresh form
				echo "<meta http-equiv='refresh' content='0; url=?page=Upload-Detail-Incoming'>";

		}
	# TOMBOL PILIH DIKLIK
	if(isset($_POST['btnPilih'])){
		$message = array();
		if (trim($_POST['txtKode'])=="") {
			$message[] = "<b>Kode Barang belum diisi</b>, masukkan kode barang sesuai yg terdaftar di database!";		
		}
		if (trim($_POST['txtJumlah'])=="" OR ! is_numeric(trim($_POST['txtJumlah']))) {
			$message[] = "Data <b>Jumlah barang (Qty) belum diisi</b>, silahkan <b>isi dengan angka</b> !";		
		}
		if (trim($_POST['txtNetto_detail'])=="" OR ! is_numeric(trim($_POST['txtNetto_detail']))) {
			$message[] = "Data <b>Berat bersih barang (Kg) belum diisi</b>, silahkan <b>isi dengan angka</b> !";		
		}
		
		if (trim($_POST['cmbSatuan'])=="BLANK") {
			$message[] = "<b>Jenis Satuan</b> belum dipilih !";		
		}
		if (trim($_POST['txtHarga_detail'])=="" OR ! is_numeric(trim($_POST['txtHarga_detail']))) {
			$message[] = "Data <b>Nilai barang (Qty) belum diisi</b>!";		
		}

		
		# Baca variabel
		$txtKode	= $_POST['txtKode'];
		$txtKode	= str_replace("'","&acute;",$txtKode);		
		$cmbSatuan	= $_POST['cmbSatuan'];
		$cmbSatuan	= str_replace("'","&acute;",$cmbSatuan);
		$txtJumlah	= $_POST['txtJumlah'];
		$txtJumlah	= str_replace("'","&acute;",$txtJumlah);
		$txtHarga_detail	= $_POST['txtHarga_detail'];
		$txtHarga_detail	= str_replace("'","&acute;",$txtHarga_detail);
		$txtVolume_detail	= $_POST['txtVolume_detail'];
		$txtVolume_detail	= str_replace("'","&acute;",$txtVolume_detail);
		$txtNetto_detail	= $_POST['txtNetto_detail'];
		$txtNetto_detail	= str_replace("'","&acute;",$txtNetto_detail);

		# Jika jumlah error message tidak ada
		if(count($message)==0){			
			$barangSql ="SELECT kd_barang FROM barang WHERE kd_barang='$txtKode'";
			$barangQry = mysql_query($barangSql, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
			$barangRow = mysql_fetch_array($barangQry);
			$barangQty = mysql_num_rows($barangQry);
			if ($barangQty >= 1) {

				$tmpSql = "INSERT INTO tmp_bc40 SET kode='$txtKode', jumlah='$txtJumlah', satuan='$cmbSatuan', netto_detail='$txtNetto_detail', volume_detail='$txtVolume_detail', harga_detail='$txtHarga_detail', userid='".$_SESSION['SES_LOGIN']."'";
				mysql_query($tmpSql, $koneksidb) or die ("Gagal Query detail barang : ".mysql_error());
				$txtKode= "";
				$txtJumlah	= "";
				$cmbSatuan = "";
				$txtNetto_detail = "";
				$txtVolume_detail = "";
				$txtHarga_detail = "";
				
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
		if (trim($_POST['nomor_pengajuan'])=="") {
			$message[] = "Nomor Pengajuan belum diisi!";		
		}
		if (trim($_POST['cmbTglpengajuan'])=="") {
			$message[] = "Tanggal BPB belum diisi, pilih pada combo !";		
		}
		if (trim($_POST['nomor_pendaftaran'])=="") {
			$message[] = "<b>Nomor Pendaftaran </b>belum diisi!";		
		}
		if (trim($_POST['cmbTglpendaftaran'])=="") {
			$message[] = "Tanggal Pendaftaran belum diisi, pilih pada combo !";		
		}
		if (trim($_POST['kantor_pabean'])=="BLANK") {
			$message[] = "<b>Kode Kantor Pabean belum dipilih</b>, silahkan pilih lagi !";		
		}
		if (trim($_POST['jenis_tpb'])=="") {
			$message[] = "<b>Jenis TPB belum dipilih</b>, silahkan pilih lagi !";		
		}
		if (trim($_POST['tujuan_pengiriman'])=="BLANK") {
			$message[] = "<b>Tujuan Pengiriman  belum dipilih</b>, silahkan pilih lagi !";		
		}
		if (trim($_POST['cmbSupplier'])=="BLANK") {
			$message[] = "<b>Nama pemasok belum dipilih</b>, silahkan pilih lagi !";		
		}
		if (trim($_POST['txtInvoice'])=="") {
			$message[] = "<b>Nomor Invoice </b> belum diisi!";		
		}
		if (trim($_POST['cmbTglinvoice'])=="") {
			$message[] = "Tanggal Invoice belum diisi, pilih pada combo !";		
		}
		if (trim($_POST['txtKontrak'])=="") {
			$message[] = "<b>Nomor Kontrak </b> belum diisi!";		
		}
		if (trim($_POST['cmbTglkontrak'])=="") {
			$message[] = "Tanggal Kontrak belum diisi, pilih pada combo !";		
		}
		if (trim($_POST['txtSkep'])=="") {
			$message[] = "<b>Nomor Skep </b>belum diisi!";		
		}
		if (trim($_POST['cmbTglskep'])=="") {
			$message[] = "Tanggal Skep belum diisi, pilih pada combo !";		
		}
		if (trim($_POST['txtSarana'])=="") {
			$message[] = "<b>Jenis Sarana Pengangkut </b>belum diisi!";		
		}
		if (trim($_POST['txtNopol'])=="") {
			$message[] = "<b>Nomor Polisi Sarana Pengangkut</b> belum diisi!";		
		}
		if (trim($_POST['cmbKemasan'])=="BLANK") {
			$message[] = "<b>Jenis Kemasan belum dipilih</b>, silahkan pilih lagi !";		
		}
		if (trim($_POST['txtMerekKemasan'])=="") {
			$message[] = "<b>Merek Kemasan </b>belum diisi!";		
		}
		if (trim($_POST['txtJmlKemasan'])=="") {
			$message[] = "<b>Jumlah Kemasan</b> belum diisi!";		
		}
		if (trim($_POST['txtHargaPenyerahan'])=="") {
			$message[] = "<b>Total Harga Penyerahan</b> belum diisi!";		
		}
		if (trim($_POST['txtVolume'])=="") {
			$message[] = "<b>Total Volume </b>belum diisi!";		
		}
		if (trim($_POST['txtBrutto'])=="") {
			$message[] = "<b>Total Berat Kotor barang </b>belum diisi!";		
		}
		if (trim($_POST['txtNetto'])=="") {
			$message[] = "<b>Total Berat Bersih barang </b>belum diisi!";		
		}
		
		
		$tmpSql ="SELECT COUNT(id) As qty FROM tmp_bc40 WHERE userid='".$_SESSION['SES_LOGIN']."'";
		$tmpQry = mysql_query($tmpSql, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$tmpRow = mysql_fetch_array($tmpQry);
		if ($tmpRow['qty'] < 1) {
			$message[] = "<b>Item Barang</b> belum ada yang dimasukan, <b>minimal 1 barang</b>.";
		}
		
		# Baca variabel
		$nomor_pengajuan= $_POST['nomor_pengajuan'];
		$nomor_pengajuan= str_replace("'","&acute;",$nomor_pengajuan);
		$cmbTglpengajuan =$_POST['cmbTglpengajuan'];
		$cmbTglpengajuan= str_replace("'","&acute;",$cmbTglpengajuan);
		$nomor_pendaftaran= $_POST['nomor_pendaftaran'];
		$nomor_pendaftaran= str_replace("'","&acute;",$nomor_pendaftaran);
		$cmbTglpendaftaran =$_POST['cmbTglpendaftaran'];
		$cmbTglpendaftaran= str_replace("'","&acute;",$cmbTglpendaftaran);
		$kantor_pabean= $_POST['kantor_pabean'];
		$kantor_pabean= str_replace("'","&acute;",$kantor_pabean);
		$jenis_tpb= $_POST['jenis_tpb'];
		$jenis_tpb= str_replace("'","&acute;",$jenis_tpb);
		$tujuan_pengiriman= $_POST['tujuan_pengiriman'];
		$tujuan_pengiriman= str_replace("'","&acute;",$tujuan_pengiriman);
		$cmbSupplier =$_POST['cmbSupplier'];
		$cmbSupplier= str_replace("'","&acute;",$cmbSupplier);
		$txtInvoice= $_POST['txtInvoice'];
		$txtInvoice= str_replace("'","&acute;",$txtInvoice);
		$cmbTglinvoice =$_POST['cmbTglinvoice'];
		$cmbTglinvoice= str_replace("'","&acute;",$cmbTglinvoice);
		$txtKontrak= $_POST['txtKontrak'];
		$txtKontrak= str_replace("'","&acute;",$txtKontrak);
		$cmbTglkontrak =$_POST['cmbTglkontrak'];
		$cmbTglkontrak= str_replace("'","&acute;",$cmbTglkontrak);
		$txtSkep= $_POST['txtSkep'];
		$txtSkep= str_replace("'","&acute;",$txtSkep);
		$cmbTglskep =$_POST['cmbTglskep'];
		$cmbTglskep= str_replace("'","&acute;",$cmbTglskep);
		$txtJenisDoklain= $_POST['txtJenisDoklain'];
		$txtJenisDoklain= str_replace("'","&acute;",$txtJenisDoklain);
		$txtDoklain= $_POST['txtDoklain'];
		$txtDoklain= str_replace("'","&acute;",$txtDoklain);
		$cmbTgldoklain =$_POST['cmbTgldoklain'];
		$cmbTgldoklain= str_replace("'","&acute;",$cmbTgldoklain);
		$txtSarana= $_POST['txtSarana'];
		$txtSarana= str_replace("'","&acute;",$txtSarana);
		$txtNopol= $_POST['txtNopol'];
		$txtNopol= str_replace("'","&acute;",$txtNopol);
		$cmbKemasan= $_POST['cmbKemasan'];
		$cmbKemasan= str_replace("'","&acute;",$cmbKemasan);
		$txtMerekKemasan= $_POST['txtMerekKemasan'];
		$txtMerekKemasan= str_replace("'","&acute;",$txtMerekKemasan);
		$txtJmlKemasan= $_POST['txtJmlKemasan'];
		$txtJmlKemasan= str_replace("'","&acute;",$txtJmlKemasan);
		$txtHargaPenyerahan= $_POST['txtHargaPenyerahan'];
		$txtHargaPenyerahan= str_replace("'","&acute;",$txtHargaPenyerahan);
		$txtVolume= $_POST['txtVolume'];
		$txtVolume= str_replace("'","&acute;",$txtVolume);
		$txtBrutto= $_POST['txtBrutto'];
		$txtBrutto= str_replace("'","&acute;",$txtBrutto);
		$txtNetto= $_POST['txtNetto'];
		$txtNetto= str_replace("'","&acute;",$txtNetto);
		$txtNamaPetugas= $_POST['txtNamaPetugas'];
		$txtNamaPetugas= str_replace("'","&acute;",$txtNamaPetugas);
		$txtNipPetugas= $_POST['txtNipPetugas'];
		$txtNipPetugas= str_replace("'","&acute;",$txtNipPetugas);



		# Validasi ID Record, jika sudah ada akan ditolak
		$sqlKode="SELECT nomor FROM tbl_bc40 WHERE nomor='$kodeBaru'";
		$qryKode=mysql_query($sqlKode, $koneksidb) or die ("Eror Query".mysql_error()); 
		if(mysql_num_rows($qryKode)>=1){
			$message[] = "Maaf, data ID Record<b> $kodeBaru </b> sudah ada, kembali ke menu utama untuk mendapatkan ID baru";
		}

		# Jika jumlah error message tidak ada
		if(count($message)==0){			
			$kodeBaru	= buatKode("tbl_bc40", "000");
			$qrySave=mysql_query("INSERT INTO tbl_bc40 SET nomor='$kodeBaru', nomor_pengajuan='$nomor_pengajuan', tgl_pengajuan='".InggrisTgl($_POST['cmbTglpengajuan'])."', nomor_pendaftaran='$nomor_pendaftaran', tgl_pendaftaran='".InggrisTgl($_POST['cmbTglpendaftaran'])."', kantor_pabean='$kantor_pabean', jenis_tpb='$jenis_tpb', tujuan_pengiriman='$tujuan_pengiriman', pemasok='$cmbSupplier', no_invoice='$txtInvoice', tgl_invoice='".InggrisTgl($_POST['cmbTglinvoice'])."', no_kontrak='$txtKontrak', tgl_kontrak='".InggrisTgl($_POST['cmbTglkontrak'])."', no_skep='$txtSkep', tgl_skep='".InggrisTgl($_POST['cmbTglskep'])."', jenis_doklain='$txtJenisDoklain', doklain='$txtDoklain', tgl_doklain='".InggrisTgl($_POST['cmbTgldoklain'])."', jenis_pengangkut='$txtSarana', nomor_polisi='$txtNopol', harga_penyerahan='$txtHargaPenyerahan', jenis_kemasan='$cmbKemasan', merek_kemasan='$txtMerekKemasan', jumlah_kemasan='$txtJmlKemasan', volume='$txtVolume', brutto='$txtBrutto', netto='$txtNetto', nip_petugas='$txtNipPetugas', nama_petugas='$txtNamaPetugas', userid='".$_SESSION['SES_LOGIN']."'") or die ("Gagal query".mysql_error());
			if($qrySave){
				# Ambil semua data barang yang dipilih, berdasarkan user yang login
				$tmpSql ="SELECT * FROM tmp_bc40 WHERE userid='".$_SESSION['SES_LOGIN']."'";
				$tmpQry = mysql_query($tmpSql, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
				while ($tmpRow = mysql_fetch_array($tmpQry)) {
					// Masukkan semua barang yang udah diisi ke tabel penjualan detail
				$itemSql = "INSERT INTO tbl_bc40_detail SET nomor='$kodeBaru', kode='$tmpRow[kode]', jumlah='$tmpRow[jumlah]', satuan='$tmpRow[satuan]', netto_detail='$tmpRow[netto_detail]',volume_detail='$tmpRow[volume_detail]', harga_detail='$tmpRow[harga_detail]'";
		  			mysql_query($itemSql, $koneksidb) or die ("Gagal Query Simpan detail barang".mysql_error());
					

				}
				# Kosongkan Tmp jika datanya sudah dipindah
				mysql_query("DELETE FROM tmp_bc40 WHERE userid='".$_SESSION['SES_LOGIN']."'", $koneksidb) or die ("Gagal kosongkan tmp".mysql_error());
				$useractSave=mysql_query("INSERT INTO user_act SET userid='".$_SESSION['SES_LOGIN']."', aktivitas='Menambah data dokumen BC 40 dengan nomor aju: $nomor_pengajuan dan tanggal $cmbTglpengajuan', tanggal='".date("Y-m-d")."', jam='".date("G:i:s")."'") 
					 or die ("Gagal query".mysql_error());
				// Refresh form
				echo "<meta http-equiv='refresh' content='0; url=?page=Tambah-BC40&Act=Success'>";
				
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
$nomorTransaksi = buatKode("tbl_bc40", "000");
$dataNomorPengajuan	= isset($_POST['nomor_pengajuan']) ? $_POST['nomor_pengajuan'] : '';
$tglpengajuan		 	= isset($_POST['cmbTglpengajuan']) ? $_POST['cmbTglpengajuan'] : date('d-m-Y');
$dataNomorPendaftaran	= isset($_POST['nomor_pendaftaran']) ? $_POST['nomor_pendaftaran'] : '';
$tglpendaftaran 		= isset($_POST['cmbTglpendaftaran']) ? $_POST['cmbTglpendaftaran'] : date('d-m-Y');
$dataKantorPabean	= isset($_POST['kantor_pabean']) ? $_POST['kantor_pabean'] : '';
$dataJenisTpb	= isset($_POST['jenis_tpb']) ? $_POST['jenis_tpb'] : '';
$dataTujuanPengiriman	= isset($_POST['tujuan_pengiriman']) ? $_POST['tujuan_pengiriman'] : '';
$dataSupplier	= isset($_POST['cmbSupplier']) ? $_POST['cmbSupplier'] : '';
$dataInvoice	= isset($_POST['txtInvoice']) ? $_POST['txtInvoice'] : '';
$tglInvoice 	= isset($_POST['cmbTglInvoice']) ? $_POST['cmbTglinvoice'] : date('d-m-Y');
$dataKontrak	= isset($_POST['txtKontrak']) ? $_POST['txtKontrak'] : '';
$tglkontrak 	= isset($_POST['cmbTglkontrak']) ? $_POST['cmbTglkontrak'] : date('d-m-Y');
$dataSkep	= isset($_POST['txtSkep']) ? $_POST['txtSkep'] : '';
$tglskep 	= isset($_POST['cmbTglskep']) ? $_POST['cmbTglskep'] : date('d-m-Y');
$dataJenisDoklain	= isset($_POST['txtJenisDoklain']) ? $_POST['txtJenisDoklain'] : '';
$dataDoklain	= isset($_POST['txtDoklain']) ? $_POST['txtDoklain'] : '';
$tgldoklain 	= isset($_POST['cmbTgldoklain']) ? $_POST['cmbTgldoklain'] : date('d-m-Y');
$dataSarana	= isset($_POST['txtSarana']) ? $_POST['txtSarana'] : '';
$dataNopol	= isset($_POST['txtNopol']) ? $_POST['txtNopol'] : '';
$dataKemasan	= isset($_POST['cmbKemasan']) ? $_POST['cmbKemasan'] : '';
$dataMerekKemasan	= isset($_POST['txtMerekKemasan']) ? $_POST['txtMerekKemasan'] : '';
$dataJmlKemasan	= isset($_POST['txtJmlKemasan']) ? $_POST['txtJmlKemasan'] : '';
$dataHargaPenyerahan	= isset($_POST['txtHargaPenyerahan']) ? $_POST['txtHargaPenyerahan'] : '';
$dataVolume	= isset($_POST['txtVolume']) ? $_POST['txtVolume'] : '';
$dataBrutto	= isset($_POST['txtBrutto']) ? $_POST['txtBrutto'] : '';
$dataNetto	= isset($_POST['txtNetto']) ? $_POST['txtNetto'] : '';
$dataNamaPetugas	= isset($_POST['txtNamaPetugas']) ? $_POST['txtNamaPetugas'] : '';
$dataNipPetugas	= isset($_POST['txtNipPetugas']) ? $_POST['txtNipPetugas'] : '';




?>
<style type="text/css">
<!--
.style1 {color: #FF0000}
.style2 {color: #0000FF}
-->
</style>

<form action="?page=Tambah-BC40" method="post"  name="frmadd">
<table width="100%" cellspacing="1" class="table-common" style="margin-top:0px;">
	<tr>
	  <td colspan="3" align="right"><h2>Dokumen BC 4.0</h2> </td>
	</tr>
    
	<tr>
	  <td colspan="3" ><input name="txtNomor" type="hidden"  value="<?php echo $nomorTransaksi; ?>" size="10"   maxlength="10" readonly="readonly"/></td>
	</tr>
      <tr><td colspan="3"><div align="left" class="style1">HEADER</div></td>
    </tr>
      <tr>
	  <td align="right"><b>Nomor dan tanggal Pengajuan </b></td>
	  <td><b>:</b></td>
	  <td><input name="nomor_pengajuan" id="nomor_pengajuan" readonly="readonly" onKeyPress="return tabE(this,event)" value="<?php echo $nextNoTransaksi; ?>" size="45"   maxlength="100" />&nbsp;&nbsp;<?php echo form_tanggal("cmbTglpengajuan",$tglpengajuan); ?></td>
      </tr>
       <tr>
	  <td width="30%" align="right"><b>Nomor dan tanggal Pendaftaran </b></td>
	  <td width="1%"><b>:</b></td>
	  <td width="69%"><input name="nomor_pendaftaran" id="nomor_pendaftaran"  value="" size="20" onKeyPress="return tabE(this,event)"   maxlength="6" />
	    &nbsp;&nbsp;<?php echo form_tanggal("cmbTglpendaftaran",$tglpendaftaran); ?></td>
      </tr>
      <tr>
      <td align="right"><b>Kantor Pabean</b></td>
	  <td><b>:</b></td>
	 <td><select name="kantor_pabean" id="kantor_pabean" onkeypress="return tabE(this,event)">
        <option value="BLANK"> </option>
        <?php
	  $dataSql = "SELECT * FROM kppbc ORDER BY KdKpbc asc";
	  $dataQry = mysql_query($dataSql, $koneksidb) or die ("Gagal Query".mysql_error());
	  while ($dataRow = mysql_fetch_array($dataQry)) {
	  	if ($dataRow['KdKpbc']== $_POST['kantor_pabean_asal']) {
			$cek = " selected";
		} else { $cek=""; }
	  	echo "<option value='$dataRow[KdKpbc]' $cek>$dataRow[KdKpbc]&nbsp;-&nbsp;$dataRow[UrKdKpbc]</option>";
	  }
	  $sqlData ="";
	  ?>
      </select></td>
    </tr>
<tr>
      <td align="right"><b>Jenis TPB</b></td>
	  <td><b>:</b></td>
	  <td><select name="jenis_tpb" id="jenis_tpb" onKeyPress="return tabE(this,event)">
        <option value="Gudang Berikat">Gudang Berikat</option>
        <option value="Kawasan Berikat">Kawasan Berikat</option>
        <option value="Tempat Penyelenggaraan Pameran Berikat">Tempat Penyelenggaraan Pameran Berikat</option>
        <option value="Toko Bebas Bea">Toko Bebas Bea</option>
        <option value="Tempat Lelang Berikat">Tempat Lelang Berikat</option>
        <option value="Kawasan Daur Ulang Berikat">Kawasan Daur Ulang Berikat</option>
      </select>      </td>
    </tr>
    <tr>
      <td align="right"><b>Tujuan Pengiriman</b></td>
	  <td><b>:</b></td>
	 <td><select name="tujuan_pengiriman" id="tujuan_pengiriman" onKeyPress="return tabE(this,event)">
        <option value="BLANK"> </option>
        <?php
	  $dataSql = "SELECT * FROM catatan where kategori='Pemasukan barang' ORDER BY kd_catatan";
	  $dataQry = mysql_query($dataSql, $koneksidb) or die ("Gagal Query".mysql_error());
	  while ($dataRow = mysql_fetch_array($dataQry)) {
	  	if ($dataRow['nm_catatan']== $_POST['tujuan_pengiriman']) {
			$cek = "selected";
		} else { $cek=""; }
	  	echo "<option value='$dataRow[nm_catatan]' $cek>$dataRow[nm_catatan]</option>";
	  }
	  $sqlData ="";
	  ?>
      </select></td>
    </tr>
	<tr>
      <td align="right"><b>Pemasok</b></td>
	  <td><b>:</b></td>
	  <td><select name="cmbSupplier" onKeyPress="return tabE(this,event)">
        <option value="BLANK"> </option>
        <?php
	  $dataSql = "SELECT kode_pemasok,nama FROM pemasok ORDER BY kode_pemasok";
	  $dataQry = mysql_query($dataSql, $koneksidb) or die ("Gagal Query".mysql_error());
	  while ($dataRow = mysql_fetch_array($dataQry)) {
	  	if ($dataRow['kode_pemasok']== $_POST['cmbSupplier']) {
			$cek = " selected";
		} else { $cek=""; }
	  	echo "<option value='$dataRow[kode_pemasok]' $cek>$dataRow[kode_pemasok]&nbsp;-&nbsp;$dataRow[nama]</option>";
	  }
	  $sqlData ="";
	  ?>
      </select></td>
    </tr>
	

<tr><td colspan="3"><div align="left" class="style1">Dokumen Pelengkap Pabean</div></td></tr>
<tr>
      <td align="right"><b>Nomor dan tanggal Invoice/Packing List</b></td>
	  <td><b>:</b></td>
	  <td><input name="txtInvoice" value="<?php echo $dataInvoice; ?>" size="45" onKeyPress="return tabE(this,event)" maxlength="100" />&nbsp;&nbsp;<?php echo form_tanggal("cmbTglinvoice",$tglInvoice); ?></td>
    </tr>
<tr>
      <td align="right"><b>Nomor dan tanggal Kontrak</b></td>
	  <td><b>:</b></td>
	  <td><input name="txtKontrak" value="<?php echo $dataKontrak; ?>" onKeyPress="return tabE(this,event)" size="45" maxlength="100" />&nbsp;&nbsp;<?php echo form_tanggal("cmbTglkontrak",$tglkontrak); ?></td>
    </tr>
<tr>
      <td align="right"><b>No dan Tgl Surat Keputusan dan Persetujuan</b></td>
	  <td><b>:</b></td>
	  <td><input name="txtSkep" value="<?php echo $dataSkep; ?>" size="45" onKeyPress="return tabE(this,event)" maxlength="100" />&nbsp;&nbsp;<?php echo form_tanggal("cmbTglskep",$tglskep); ?></td>
    </tr>
<tr>
      <td align="right"><b>Jenis, Nomor dan Tanggal Dokumen lainnya</b></td>
	  <td><b>:</b></td>
	  <td><input name="txtJenisDoklain" value="<?php echo $dataJenisDoklain; ?>" size="20" onKeyPress="return tabE(this,event)" maxlength="60" />&nbsp;&nbsp;<input name="txtDoklain" value="<?php echo $dataDoklain; ?>" size="25" onKeyPress="return tabE(this,event)" maxlength="80" />&nbsp;&nbsp;<?php echo form_tanggal("cmbTgldoklain",$tgldoklain); ?></td>
    </tr>

<tr><td colspan="3"><div align="left" class="style1">Sarana Pengangkut</div></td></tr>
<tr>
      <td align="right"><b>Jenis Sarana Pengangkut Darat</b></td>
	  <td><b>:</b></td>
	  <td><input name="txtSarana" value="<?php echo $dataSarana; ?>" onKeyPress="return tabE(this,event)"  size="45" maxlength="100" /></td>
    </tr>
<tr>
      <td align="right"><b>Nomor Polisi</b></td>
	  <td><b>:</b></td>
	  <td><input name="txtNopol" value="<?php echo $dataNopol; ?>" size="15" onKeyPress="return tabE(this,event)" maxlength="100" /></td>
    </tr>
<tr><td colspan="3"><div align="left" class="style1">Data Kemasan</div></td></tr>
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
<tr><td colspan="3"><div align="left" class="style1">Harga Penyerahan dan Data Barang</div></td></tr>
<tr>
      <td align="right"><b>Harga Penyerahan (Rp.)</b></td>
	  <td><b>:</b></td>
	 <td><input name="txtHargaPenyerahan" value="<?php echo $dataHargaPenyerahan; ?>" onKeyPress="return tabE(this,event)" size="35" maxlength="100" /></td>
    </tr>
	<tr>
      <td align="right"><b>Volume (m3)</b></td>
	  <td><b>:</b></td>
	  <td><input name="txtVolume" value="<?php echo $dataVolume; ?>" size="25" onKeyPress="return tabE(this,event)" maxlength="100" /></td>
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
<tr><td colspan="3"><div align="left" class="style1">Data Petugas Bea Cukai (Pejabat Penandatangan)</div></td></tr>
    <tr>
      <td align="right"><b>Nama Petugas</b></td>
	  <td><b>:</b></td>
	  <td><input name="txtNamaPetugas" value="<?php echo $dataNamaPetugas; ?>" size="25" onKeyPress="return tabE(this,event)" maxlength="100" /></td>
    </tr>
    <tr>
      <td align="right"><b>NIP Petugas</b></td>
	  <td><b>:</b></td>
	  <td><input name="txtNipPetugas" value="<?php echo $dataNipPetugas; ?>" size="25" onKeyPress="return tabE(this,event)" maxlength="100" /></td>
    </tr>

	<tr><td colspan="3"><div align="left"><span class="style1">Detail barang masuk</span></div></td>
    </tr>


	<tr>
	  <td colspan="3"><b>Kode Barang </b><b>:</b><b>
	   	
					<input type="text" name="txtKode" onKeyPress="return tabE(this,event)" size="25" id="txtKode" class="ui-widget ui-widget-content padding ui-corner-all button">
					<button id="kode-search" class="tombol">&nbsp;</button>
         
Qty :
<input class="angkaC" name="txtJumlah" size="8" maxlength="12" onKeyPress="return tabE(this,event)" value="1" 
	  		 onblur="if (value == '') {value = '1'}" 
      		 onfocus="if (value == '1') {value =''}"/>
&nbsp;&nbsp;
Satuan:
<select name="cmbSatuan" onKeyPress="return tabE(this,event)">
        <option value="BLANK"> </option>
        <?php
	  $dataSql = "SELECT * FROM satuan ORDER BY kode";
	  $dataQry = mysql_query($dataSql, $koneksidb) or die ("Gagal Query".mysql_error());
	  while ($dataRow = mysql_fetch_array($dataQry)) {
	  	if ($dataRow['jenis']== $_POST['cmbSatuan']) {
			$cek = " selected";
		} else { $cek=""; }
	  	echo "<option value='$dataRow[jenis]' $cek>$dataRow[jenis]</option>";
	  }
	  $sqlData ="";
	  ?>
      </select>
      &nbsp;&nbsp;
      Netto (Kg) :
<input class="angkaC" name="txtNetto_detail" size="8" maxlength="12" onKeyPress="return tabE(this,event)" value="1" 
	  		 onblur="if (value == '') {value = '1'}" 
      		 onfocus="if (value == '1') {value =''}"/>
&nbsp;&nbsp;
Volume (m3) :
<input name="txtVolume_detail" value="<?php echo $dataVolume_detail; ?>" size="8" onKeyPress="return tabE(this,event)" maxlength="20" />
&nbsp;&nbsp;
HP (Rp.):
<input align="right" name="txtHarga_detail" value="<?php echo $dataHarga_detail; ?>" size="20" onKeyPress="return tabE(this,event)" maxlength="30" />
&nbsp;&nbsp;
      </b></td>
    </tr>
	<tr>
	  <td><input type="text" readonly="readonly" name="txtNama" size="40" id="txtNama" class="ui-widget ui-widget-content padding ui-corner-all button"></td>
	  <td>&nbsp;</td>
	  <td align="right"><input name="btnPilih" type="submit" style="cursor:pointer;" value="Add" />
 <input name="btnExcel" type="submit" style="cursor:pointer;" value="Impor excel"  />  
 <input name="btnDelete" type="submit" style="cursor:pointer;" value="Delete All" /></td>
    </tr>
	<tr>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td><input onClick="return confirm('ANDA YAKIN AKAN MENYIMPAN DATA TRANSAKSI, DATA YANG TERSIMPAN TIDAK DAPAT DIUBAH/DIHAPUS?')" name="btnSave" type="submit" style="cursor:pointer;" value=" SIMPAN TRANSAKSI " /> </td>
    </tr>
</table>

<table class="table-list" width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th colspan="10" align="left">DAFTAR  DETAIL BARANG</th>
    </tr>
  <tr>
    <td width="30" align="center" bgcolor="#CCCCCC"><b>No</b></td>
    <td width="150" align="left" bgcolor="#CCCCCC"><b>Kode</b></td>
    <td width="200"  bgcolor="#CCCCCC"><b>Nama Barang </b></td>
     <td width="45" align="center" bgcolor="#CCCCCC"><b>Satuan</b></td>
    <td width="60" align="right" bgcolor="#CCCCCC"><strong>Jumlah</strong> </td>
    <td width="60" align="right" bgcolor="#CCCCCC"><strong>Netto (kg)</strong> </td>
    <td width="60" align="right" bgcolor="#CCCCCC"><b>Volume (m3)</b></td>
    <td width="60" align="right" bgcolor="#CCCCCC"><b>HP (Rp)</b></td>
    <td width="20" align="center" bgcolor="#FFCC00"><b>Edit</b></td>
    <td width="20" align="center" bgcolor="#FFCC00"><b>Delete</b></td>
  </tr>
<?php
$tmpSql ="SELECT barang.kd_barang,barang.nm_barang, tmp_bc40.*
		FROM barang, tmp_bc40
		WHERE barang.kd_barang=tmp_bc40.kode AND tmp_bc40.userid='".$_SESSION['SES_LOGIN']."'
		ORDER BY tmp_bc40.id ";
$tmpQry = mysql_query($tmpSql, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
$nilaiBrg = 0; $qtyBrg = 0; $nomor=0;
while($tmpRow = mysql_fetch_array($tmpQry)) {
	$ID		= $tmpRow['id'];
	$qtyBrg = $qtyBrg + $tmpRow['jumlah'];
	$nilaiBrg = $nilaiBrg + $tmpRow['harga_detail'];
	$nomor++;
?>
  <tr>
    <td align="center"><?php echo $nomor; ?></td>
    <td align="left"><b><?php echo $tmpRow['kode']; ?></b></td>
    <td align="left"><?php echo $tmpRow['nm_barang']; ?></td>
    <td align="center"><?php echo $tmpRow['satuan']; ?></td>
    <td align="right"><?php echo format_angka($tmpRow['jumlah']); ?></td>
    <td align="right"><?php echo format_angka($tmpRow['netto_detail']); ?></td>
    <td align="right"><?php echo format_angka($tmpRow['volume_detail']); ?></td>
    <td align="right"><?php echo format_angka($tmpRow['harga_detail']); ?></td>
     <td align="center" bgcolor="#FFFFCC"><a href="?page=Edit-BC40&amp;ID=<?php echo $ID; ?>"  target="_self"><img src="images/b_edit.png" width="16" height="16" border="0" /></a></td>
    <td align="center" bgcolor="#FFFFCC"><a href="?page=Tambah-BC40&Act=Delete&ID=<?php echo $ID; ?>"  target="_self"><img src="images/hapus.gif" width="16" height="16" border="0" /></a></td>
  </tr>
<?php 
}?>
  <tr>
    <td colspan="2" align="right"><b>Grand Total : </b></td>
    <td colspan="2" align="left"><b>Jumlah brg: <?php echo format_angka($qtyBrg); ?></b></td>
    <td colspan="6" align="left"><b>Nilai barang: <?php echo format_angka($nilaiBrg); ?></b></td>
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