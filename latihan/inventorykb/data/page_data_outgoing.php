<script type="text/javascript">

// fungsi ini untuk menampilkan list data pelanggan sesuai halaman (page) yang dipilih.
// list data yang ditampilkan disesuaikan juga dengan input data pada bagian search.
function pagination(page){
  var cari = $("input#fieldcari").val();
  var combo = $("select#pilihcari").val();

  if (combo == "penerima"){
    dataString = 'starting='+page+'&penerima='+cari+'&random='+Math.random();
  }
  else if (combo == "nosj"){
    dataString = 'starting='+page+'&nosj='+cari+'&random='+Math.random();
  }
  else if (combo == "noinvoice"){
    dataString = 'starting='+page+'&noinvoice='+cari+'&random='+Math.random();
  }
  else{
    dataString = 'starting='+page+'&random='+Math.random();
  }

  $.ajax({
    url:"data/page_data_outgoing.php",
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

  if (combo == "penerima"){
    dataString = 'penerima='+ cari;
  }
  else if (combo == "nosj"){
    dataString = 'nosj='+ cari;
  }
    else if (combo == "noinvoice"){
    dataString = 'noinvoice='+ cari;
  }

  $.ajax({
    url: "data/page_data_outgoing.php", //file tempat pemrosesan permintaan (request)
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
  $('#data/data_outgoing tr:even:not(#nav):not(#total)').addClass('even');
  $('#data/data_outgoing tr:odd:not(#nav):not(#total)').addClass('odd');

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


if (isset($_GET['penerima']) and !empty($_GET['penerima'])){
  $penerima = $_GET['penerima'];
  $sql = "select pengeluaran.nomor, pengeluaran.no_sj,pengeluaran.tgl_sj,pengeluaran.penerima,pengeluaran.no_invoice,pengeluaran.tgl_invoice, penerima.kode_penerima, penerima.nama FROM pengeluaran, penerima where pengeluaran.penerima=penerima.kode_penerima and penerima.nama like '%$penerima%' ORDER BY pengeluaran.nomor desc";
}
else if (isset($_GET['nosj']) and !empty($_GET['nosj'])){
  $nosj = $_GET['nosj'];
  $sql = "select pengeluaran.nomor, pengeluaran.no_sj,pengeluaran.tgl_sj,pengeluaran.penerima,pengeluaran.no_invoice,pengeluaran.tgl_invoice, penerima.kode_penerima, penerima.nama FROM pengeluaran, penerima where pengeluaran.penerima=penerima.kode_penerima and pengeluaran.no_sj like '%$nosj%' ORDER BY pengeluaran.nomor desc";
}
else if (isset($_GET['noinvoice']) and !empty($_GET['noinvoice'])){
  $noinvoice = $_GET['noinvoice'];
  $sql = "select pengeluaran.nomor, pengeluaran.no_sj,pengeluaran.tgl_sj,pengeluaran.penerima,pengeluaran.no_invoice,pengeluaran.tgl_invoice, penerima.kode_penerima, penerima.nama FROM pengeluaran, penerima where pengeluaran.penerima=penerima.kode_penerima and pengeluaran.no_invoice like '%$noinvoice%' ORDER BY pengeluaran.nomor desc";
}


else{
  $sql = "select pengeluaran.nomor, pengeluaran.no_sj,pengeluaran.tgl_sj,pengeluaran.penerima,pengeluaran.no_invoice,pengeluaran.tgl_invoice, penerima.kode_penerima, penerima.nama FROM pengeluaran, penerima where pengeluaran.penerima=penerima.kode_penerima ORDER BY pengeluaran.nomor desc";
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

  <table width="100%" id="tbloutgoing">
	  <tr><th width="150">Nomor SJ</th><th width="80">Tanggal SJ </th><th width="200">Penerima</th><th width="150">No Invoice</th><th width="80">Tgl Invoice</th><th width="50">View</th><th width="50">Cetak SJ</th></tr>
		<?php
		//menampilkan data pemasukan
		if(mysql_num_rows($result)!=0){
		 
  		while($row = mysql_fetch_array($result)){ $Kode = $row['nomor'];?>
        
        <tr><td align="left">&nbsp;<?php echo $row['no_sj']; ?>&nbsp;</td><td align="center" >&nbsp;<?php echo IndonesiaTgl($row['tgl_sj']); ?>&nbsp;</td><td align="left">&nbsp;<?php echo $row['nama']; ?>&nbsp;</td><td align="left">&nbsp;<?php echo $row['no_invoice']; ?>&nbsp;</td><td align="center">&nbsp;<?php echo IndonesiaTgl($row['tgl_invoice']); ?>&nbsp;</td>
       <td align="center"><a href="?page=View-Pengeluaran&amp;Kode=<?php echo $Kode; ?>" target="_self" alt="View Data"><img src="images/btn_view.png" width="20" height="20" border="0" /></a></td>
        <td align="center"><a href="nota/suratjalan.php?nomor=<?php echo $Kode; ?>" target="_new" alt="Cetak SJ" onclick="return confirm('ANDA YAKIN AKAN MENCETAK SJ INI ?')"><img src="images/cetak.jpg" width="20" height="20"  border="0"  alt="Cetak SJ" /></a></td></tr>
  		<?php } //end while ?>
		 <tr id="nav"><td colspan="7"><?php echo $obj->anchors; ?></td></tr>
	   <tr id="total"><td colspan="7"><?php echo $obj->total; ?></td></tr>
    <?php }else{?>
    <tr><td align="center" colspan="7">Data tidak ditemukan!</td></tr>
    <?php }?>
	</table>