<script type="text/javascript">

// fungsi ini untuk menampilkan list data pelanggan sesuai halaman (page) yang dipilih.
// list data yang ditampilkan disesuaikan juga dengan input data pada bagian search.
function pagination(page){
  var cari = $("input#fieldcari").val();
  var combo = $("select#pilihcari").val();

  if (combo == "dari"){
    dataString = 'starting='+page+'&dari='+cari+'&random='+Math.random();
  }
  else if (combo == "nolpb"){
    dataString = 'starting='+page+'&nolpb='+cari+'&random='+Math.random();
  }
  else if (combo == "nospb"){
    dataString = 'starting='+page+'&nospb='+cari+'&random='+Math.random();
  }
  else{
    dataString = 'starting='+page+'&random='+Math.random();
  }

  $.ajax({
    url:"data/page_data_produksi-terima.php",
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

  if (combo == "dari"){
    dataString = 'dari='+ cari;
  }
  else if (combo == "nolpb"){
    dataString = 'nolpb='+ cari;
  }
    else if (combo == "nospb"){
    dataString = 'nospb='+ cari;
  }

  $.ajax({
    url: "data/page_data_produksi-terima.php", //file tempat pemrosesan permintaan (request)
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
  $('#data/data_produksi-terima tr:even:not(#nav):not(#total)').addClass('even');
  $('#data/data_produksi-terima tr:odd:not(#nav):not(#total)').addClass('odd');

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


if (isset($_GET['dari']) and !empty($_GET['dari'])){
  $dari = $_GET['dari'];
  $sql = "select nomor,no_lpb,tgl_lpb,dari,no_spb,tgl_spb FROM produksi_terima where dari like '%$dari%' ORDER BY nomor desc";
}
else if (isset($_GET['nolpb']) and !empty($_GET['nolpb'])){
  $nolpb = $_GET['nolpb'];
  $sql = "select nomor,no_lpb,tgl_lpb,dari,no_spb,tgl_spb FROM produksi_terima where no_lpb like '%$nolpb%' ORDER BY nomor desc";
}
else if (isset($_GET['nospb']) and !empty($_GET['nospb'])){
  $nospb = $_GET['nospb'];
  $sql = "select nomor,no_lpb,tgl_lpb,dari,no_spb,tgl_spb FROM produksi_terima where no_spb like '%$nospb%' ORDER BY nomor desc";
}


else{
  $sql = "select nomor,no_lpb,tgl_lpb,dari,no_spb,tgl_spb FROM produksi_terima ORDER BY nomor desc";
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

  <table width="100%" id="tblproduksi-terima">
	  <tr><th width="150">Nomor LPB</th><th width="80">Tanggal LPB </th><th width="200">Dari</th><th width="150">No SPB</th><th width="80">Tgl SPB</th><th width="50">View</th>
	  <th width="50">Cetak LPB</th>
	  </tr>
		<?php
		//menampilkan data pemasukan
		if(mysql_num_rows($result)!=0){
		 
  		while($row = mysql_fetch_array($result)){ $Kode = $row['nomor'];?>
        
        <tr><td align="left">&nbsp;<?php echo $row['no_lpb']; ?>&nbsp;</td><td align="center" >&nbsp;<?php echo IndonesiaTgl($row['tgl_lpb']); ?>&nbsp;</td><td align="left">&nbsp;<?php echo $row['dari']; ?>&nbsp;</td><td align="left">&nbsp;<?php echo $row['no_spb']; ?>&nbsp;</td><td align="center">&nbsp;<?php echo IndonesiaTgl($row['tgl_spb']); ?>&nbsp;</td>
      <td align="center"><a href="?page=Produksi-Lpb-View&amp;Kode=<?php echo $Kode; ?>" target="_self" alt="View Data"><img src="images/btn_view.png" width="20" height="20" border="0" /></a></td>
          <td align="center"><a href="nota/produksi_lpb.php?nomor=<?php echo $Kode; ?>" target="_new" alt="Cetak LPB" onclick="return confirm('ANDA YAKIN AKAN MENCETAK LPB INI ?')"><img src="images/cetak.jpg" width="20" height="20"  border="0"  alt="Cetak LPB" /></a></td></tr>
  		<?php } //end while ?>
		 <tr id="nav"><td colspan="7"><?php echo $obj->anchors; ?></td></tr>
	   <tr id="total"><td colspan="7"><?php echo $obj->total; ?></td></tr>
    <?php }else{?>
    <tr><td align="center" colspan="7">Data tidak ditemukan!</td></tr>
    <?php }?>
	</table>