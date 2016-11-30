<script type="text/javascript">

// fungsi ini untuk menampilkan list data pelanggan sesuai halaman (page) yang dipilih.
// list data yang ditampilkan disesuaikan juga dengan input data pada bagian search.
function pagination(page){
  var cari = $("input#fieldcari").val();
  var combo = $("select#pilihcari").val();

  if (combo == "user"){
    dataString = 'starting='+page+'&user='+cari+'&random='+Math.random();
  }
  else if (combo == "nolap"){
    dataString = 'starting='+page+'&nolap='+cari+'&random='+Math.random();
  }
  else if (combo == "ppc"){
    dataString = 'starting='+page+'&ppc='+cari+'&random='+Math.random();
  }
  else{
    dataString = 'starting='+page+'&random='+Math.random();
  }

  $.ajax({
    url:"data/page_data_scrap.php",
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

  if (combo == "user"){
    dataString = 'user='+ cari;
  }
  else if (combo == "nolap"){
    dataString = 'nolap='+ cari;
  }
    else if (combo == "ppc"){
    dataString = 'ppc='+ cari;
  }

  $.ajax({
    url: "data/page_data_scrap.php", //file tempat pemrosesan permintaan (request)
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
  $('#data/data_scrap tr:even:not(#nav):not(#total)').addClass('even');
  $('#data/data_scrap tr:odd:not(#nav):not(#total)').addClass('odd');

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


if (isset($_GET['user']) and !empty($_GET['user'])){
  $user = $_GET['user'];
  $sql = "select nomor,no_lap,tgl_lap,name_ppc,userid FROM scrap where userid like '%$user%' ORDER BY nomor desc";
}
else if (isset($_GET['nolap']) and !empty($_GET['nolap'])){
  $nolap = $_GET['nolap'];
  $sql = "select nomor,no_lap,tgl_lap,name_ppc,userid FROM scrap where no_lap like '%$nolap%' ORDER BY nomor desc";
}
else if (isset($_GET['ppc']) and !empty($_GET['ppc'])){
  $ppc = $_GET['ppc'];
  $sql = "select nomor,no_lap,tgl_lap,name_ppc,userid FROM scrap where name_ppc like '%$ppc%' ORDER BY nomor desc";
}


else{
  $sql = "select nomor,no_lap,tgl_lap,name_ppc,userid FROM scrap ORDER BY nomor desc";
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

  <table width="100%" id="tblincoming-outgoing">
	  <tr><th width="150">Nomor LS</th><th width="80">Tanggal LS </th><th width="120">Nama PPC</th><th width="80">User</th><th width="50">View</th><th width="50">Cetak LS</th></tr>
		<?php
		//menampilkan data pemasukan
		if(mysql_num_rows($result)!=0){
		 
  		while($row = mysql_fetch_array($result)){ $Kode = $row['nomor'];?>
        
        <tr><td align="left">&nbsp;<?php echo $row['no_lap']; ?>&nbsp;</td><td align="center" >&nbsp;<?php echo IndonesiaTgl($row['tgl_lap']); ?>&nbsp;</td><td align="left">&nbsp;<?php echo $row['name_ppc']; ?>&nbsp;</td><td align="center">&nbsp;<?php echo $row['userid']; ?>&nbsp;</td>
       <td align="center"><a href="?page=Scrap-View&amp;Kode=<?php echo $Kode; ?>" target="_self" alt="View Data"><img src="images/btn_view.png" width="20" height="20" border="0" /></a></td>
        <td align="center"><a href="nota/ls_scrap.php?nomor=<?php echo $Kode; ?>" target="_new" alt="Cetak LS" onclick="return confirm('ANDA YAKIN AKAN MENCETAK LS INI ?')"><img src="images/cetak.jpg" width="20" height="20"  border="0"  alt="Cetak LS" /></a></td></tr>
  		<?php } //end while ?>
		 <tr id="nav"><td colspan="7"><?php echo $obj->anchors; ?></td></tr>
	   <tr id="total"><td colspan="7"><?php echo $obj->total; ?></td></tr>
    <?php }else{?>
    <tr><td align="center" colspan="7">Data tidak ditemukan!</td></tr>
    <?php }?>
	</table>