<script type="text/javascript">

// fungsi ini untuk menampilkan list data pelanggan sesuai halaman (page) yang dipilih.
// list data yang ditampilkan disesuaikan juga dengan input data pada bagian search.
function pagination(page){
  var cari = $("input#fieldcari").val();
  var combo = $("select#pilihcari").val();

  if (combo == "pemasok"){
    dataString = 'starting='+page+'&pemasok='+cari+'&random='+Math.random();
  }
  else if (combo == "noaju"){
    dataString = 'starting='+page+'&noaju='+cari+'&random='+Math.random();
  }
  else if (combo == "nopen"){
    dataString = 'starting='+page+'&nopen='+cari+'&random='+Math.random();
  }
  else{
    dataString = 'starting='+page+'&random='+Math.random();
  }

  $.ajax({
    url:"dokumen/page_data_bc40.php",
    data: dataString,
    type:"GET",
    success:function(data)
    {
      $('#divPageData').html(data);
    }
  });
}

// fungsi untuk me-load tampilan list data pelanggan, data yang ditampilkan disesuaikan
// juga dengan input data pada bagian search
function loadData(){
  var dataString;
  var cari = $("input#fieldcari").val();
  var combo = $("select#pilihcari").val();

  if (combo == "pemasok"){
    dataString = 'pemasok='+ cari;
  }
  else if (combo == "noaju"){
    dataString = 'noaju='+ cari;
  }
    else if (combo == "nopen"){
    dataString = 'nopen='+ cari;
  }

  $.ajax({
    url: "dokumen/page_data_bc40.php", //file tempat pemrosesan permintaan (request)
    type: "GET",
    data: dataString,
    success:function(data)
    {
      $('#divPageData').html(data);
    }
  });
}

$(function(){
  // membuat warna tampilan baris data pada tabel menjadi selang-seling
  $('#dokumen/data_bc40 tr:even:not(#nav):not(#total)').addClass('even');
  $('#dokumen/data_bc40 tr:odd:not(#nav):not(#total)').addClass('odd');

  $("a.edit").click(function(){
    page=$(this).attr("href");
    $("#divFormContent").load(page); // me-load formpelanggan untuk melakukan edit data
    $("#divFormContent").show();
    $("#btnhide").show();
    return false;
  });

 
});

</script>

<?php
// memanfaatkan class pagination dari Reneesh T.K
include_once "../library/config.php";
include_once('pagination_class.php');
include_once "../library/inc.library.php";
 
if (isset($_GET['pemasok']) and !empty($_GET['pemasok'])){
  $pemasok = $_GET['pemasok'];
  $sql = "select tbl_bc40.nomor, tbl_bc40.nomor_pengajuan, tbl_bc40.pemasok, tbl_bc40.nomor_pendaftaran, tbl_bc40.tgl_pendaftaran, pemasok.kode_pemasok,pemasok.nama FROM tbl_bc40, pemasok where tbl_bc40.pemasok = pemasok.kode_pemasok and pemasok.nama like '%$pemasok%' ORDER BY tbl_bc40.nomor_pengajuan desc";
}
else if (isset($_GET['noaju']) and !empty($_GET['noaju'])){
  $noaju = $_GET['noaju'];
  $sql = "select tbl_bc40.nomor, tbl_bc40.nomor_pengajuan, tbl_bc40.pemasok, tbl_bc40.nomor_pendaftaran, tbl_bc40.tgl_pendaftaran, pemasok.kode_pemasok,pemasok.nama FROM tbl_bc40, pemasok where tbl_bc40.pemasok = pemasok.kode_pemasok and tbl_bc40.nomor_pengajuan like '%$noaju%' ORDER BY tbl_bc40.nomor_pengajuan desc";
}
else if (isset($_GET['nopen']) and !empty($_GET['nopen'])){
  $nopen = $_GET['nopen'];
  $sql = "select tbl_bc40.nomor, tbl_bc40.nomor_pengajuan, tbl_bc40.pemasok, tbl_bc40.nomor_pendaftaran, tbl_bc40.tgl_pendaftaran, pemasok.kode_pemasok,pemasok.nama FROM tbl_bc40, pemasok where tbl_bc40.pemasok = pemasok.kode_pemasok and tbl_bc40.nomor_pendaftaran like '%$nopen%' ORDER BY tbl_bc40.nomor_pengajuan desc";
}


else{
  $sql = "select tbl_bc40.nomor, tbl_bc40.nomor_pengajuan, tbl_bc40.pemasok, tbl_bc40.nomor_pendaftaran, tbl_bc40.tgl_pendaftaran, pemasok.kode_pemasok,pemasok.nama FROM tbl_bc40, pemasok where tbl_bc40.pemasok = pemasok.kode_pemasok ORDER BY tbl_bc40.nomor_pengajuan desc";
}

if(isset($_GET['starting'])){ //starting page
	$starting=$_GET['starting'];
}else{
	$starting=0;
}

$recpage = 25;//jumlah data yang ditampilkan per page(halaman)
$obj = new pagination_class($sql,$starting,$recpage);
$result = $obj->result;
?>

  <table width="100%" id="tblbc40">
	  <tr><th width="150">Nomor Pengajuan</th>
	  <th width="250">Pengirim barang</th><th width="150">No Pendaftaran</th><th width="80">Tgl Pendaftaran</th><th width="50">Hapus</th><th width="50">Cetak</th></tr>
		<?php
		//menampilkan data pemasukan
		if(mysql_num_rows($result)!=0){
		 
  		while($row = mysql_fetch_array($result)){ $Kode = $row['nomor'];?>
        
        <tr><td align="center">&nbsp;<?php echo $row['nomor_pengajuan']; ?>&nbsp;</td><td align="left">&nbsp;<?php echo $row['nama']; ?>&nbsp;</td><td align="center">&nbsp;<?php echo $row['nomor_pendaftaran']; ?>&nbsp;</td><td align="center">&nbsp;<?php echo IndonesiaTgl($row['tgl_pendaftaran']); ?>&nbsp;</td>
       <td align="center"><a href="?page=View-Pemasukan&amp;Kode=<?php echo $Kode; ?>" target="_self" alt="View Data"><img src="images/btn_delete.png" width="20" height="20" border="0" /></a></td>
        <td align="center"><a href="dokumen/cetak_bc40.php?nomor=<?php echo $Kode; ?>" target="_new" alt="Cetak BC 40" onclick="return confirm('ANDA YAKIN AKAN MENCETAK DOKUMEN INI ?')"><img src="images/cetak.jpg" width="20" height="20"  border="0"  alt="Cetak BC 40" /></a></td></tr>
  		<?php } //end while ?>
		 <tr id="nav"><td colspan="6"><?php echo $obj->anchors; ?></td></tr>
	   <tr id="total"><td colspan="6"><?php echo $obj->total; ?></td></tr>
    <?php }else{?>
    <tr><td align="center" colspan="6">Data tidak ditemukan!</td></tr>
    <?php }?>
	</table>