<script type="text/javascript">

// fungsi ini untuk menampilkan list data pelanggan sesuai halaman (page) yang dipilih.
// list data yang ditampilkan disesuaikan juga dengan input data pada bagian search.
function pagination(page){
  var cari = $("input#fieldcari").val();
  var combo = $("select#pilihcari").val();

  if (combo == "dari"){
    dataString = 'starting='+page+'&dari='+cari+'&random='+Math.random();
  }
  else if (combo == "nospb"){
    dataString = 'starting='+page+'&nospb='+cari+'&random='+Math.random();
  }
  else if (combo == "dept"){
    dataString = 'starting='+page+'&dept='+cari+'&random='+Math.random();
  }
  else if (combo == "ppc"){
    dataString = 'starting='+page+'&ppc='+cari+'&random='+Math.random();
  }

  else{
    dataString = 'starting='+page+'&random='+Math.random();
  }

  $.ajax({
    url:"data/page_data_produksi-inbox.php",
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
  else if (combo == "nospb"){
    dataString = 'nospb='+ cari;
  }
  else if (combo == "dept"){
    dataString = 'dept='+ cari;
  }
  else if (combo == "ppc"){
    dataString = 'ppc='+ cari;
  }

  $.ajax({
    url: "data/page_data_produksi-inbox.php", //file tempat pemrosesan permintaan (request)
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
  $('#data/data_produksi-inbox tr:even:not(#nav):not(#total)').addClass('even');
  $('#data/data_produksi-inbox tr:odd:not(#nav):not(#total)').addClass('odd');

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
  $sql = "select nomor,dari,no_spb,tgl_spb,dept,name_ppc FROM tmp_produksi_terima where dari like '%$dari%' ORDER BY nomor desc";
}
else if (isset($_GET['nospb']) and !empty($_GET['nospb'])){
  $nospb = $_GET['nospb'];
  $sql = "select nomor,dari,no_spb,tgl_spb,dept,name_ppc FROM tmp_produksi_terima where no_spb like '%$nospb%' ORDER BY nomor desc";
}
else if (isset($_GET['dept']) and !empty($_GET['dept'])){
  $dept = $_GET['dept'];
  $sql = "select nomor,dari,no_spb,tgl_spb,dept,name_ppc FROM tmp_produksi_terima where dept like '%$dept%' ORDER BY nomor desc";
}
else if (isset($_GET['ppc']) and !empty($_GET['ppc'])){
  $ppc = $_GET['ppc'];
  $sql = "select nomor,dari,no_spb,tgl_spb,dept,name_ppc FROM tmp_produksi_terima where name_ppc like '%$ppc%' ORDER BY nomor desc";
}

else{
  $sql = "select nomor,dari,no_spb,tgl_spb,dept,name_ppc FROM tmp_produksi_terima ORDER BY nomor desc";
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

  <table width="100%" id="tblproduksi-inbox">
	  <tr><th width="150">Dari</th><th width="150">Nomor SPB</th><th width="80">Tanggal SPB </th><th width="250">Departemen Tujuan</th><th width="150">PPC</th><th width="50">View</th></tr>
		<?php
		//menampilkan data pemasukan
		if(mysql_num_rows($result)!=0){
		 
  		while($row = mysql_fetch_array($result)){ $Kode = $row['nomor'];?>
        
        <tr><td align="left">&nbsp;<?php echo $row['dari']; ?>&nbsp;</td><td align="left">&nbsp;<?php echo $row['no_spb']; ?>&nbsp;</td><td align="center" >&nbsp;<?php echo IndonesiaTgl($row['tgl_spb']); ?>&nbsp;</td><td align="left">&nbsp;<?php echo $row['dept']; ?>&nbsp;</td><td align="left">&nbsp;<?php echo $row['name_ppc']; ?>&nbsp;</td>
         <td align="center"><a href="?page=Produksi-Terima-View&amp;Kode=<?php echo $Kode; ?>" target="_self" alt="View Data"><img src="images/btn_view.png" width="20" height="20" border="0" /></a></td></tr>
  		<?php } //end while ?>
		 <tr id="nav"><td colspan="6"><?php echo $obj->anchors; ?></td></tr>
	   <tr id="total"><td colspan="6"><?php echo $obj->total; ?></td></tr>
    <?php }else{?>
    <tr><td align="center" colspan="6">Data tidak ditemukan!</td></tr>
    <?php }?>
	</table>