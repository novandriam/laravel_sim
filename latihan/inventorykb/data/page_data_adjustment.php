<script type="text/javascript">

// fungsi ini untuk menampilkan list data pelanggan sesuai halaman (page) yang dipilih.
// list data yang ditampilkan disesuaikan juga dengan input data pada bagian search.
function pagination(page){
  var cari = $("input#fieldcari").val();
  var combo = $("select#pilihcari").val();

  if (combo == "ket"){
    dataString = 'starting='+page+'&ket='+cari+'&random='+Math.random();
  }
  else if (combo == "noadj"){
    dataString = 'starting='+page+'&noadj='+cari+'&random='+Math.random();
  }
  else if (combo == "user"){
    dataString = 'starting='+page+'&user='+cari+'&random='+Math.random();
  }
  else{
    dataString = 'starting='+page+'&random='+Math.random();
  }

  $.ajax({
    url:"data/page_data_adjustment.php",
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

  if (combo == "ket"){
    dataString = 'ket='+ cari;
  }
  else if (combo == "noadj"){
    dataString = 'noadj='+ cari;
  }
    else if (combo == "user"){
    dataString = 'user='+ cari;
  }

  $.ajax({
    url: "data/page_data_adjustment.php", //file tempat pemrosesan permintaan (request)
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
  $('#data/data_adjustment tr:even:not(#nav):not(#total)').addClass('even');
  $('#data/data_adjustment tr:odd:not(#nav):not(#total)').addClass('odd');

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


if (isset($_GET['ket']) and !empty($_GET['ket'])){
  $ket = $_GET['ket'];
  $sql = "select nomor,no_adj,tgl_adj,tgl_stock,ket,userid FROM adjusment where ket like '%$ket%' ORDER BY nomor desc";
}
else if (isset($_GET['noadj']) and !empty($_GET['noadj'])){
  $noadj = $_GET['noadj'];
  $sql = "select nomor,no_adj,tgl_adj,tgl_stock,ket,userid FROM adjusment where no_adj like '%$noadj%' ORDER BY nomor desc";
}
else if (isset($_GET['user']) and !empty($_GET['user'])){
  $user = $_GET['user'];
  $sql = "select nomor,no_adj,tgl_adj,tgl_stock,ket,userid FROM adjusment where userid like '%$user%' ORDER BY nomor desc";
}


else{
  $sql = "select nomor,no_adj,tgl_adj,tgl_stock,ket,userid FROM adjusment ORDER BY nomor desc";
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

  <table width="100%" id="tblincoming">
	  <tr><th width="150">Nomor ADJ</th>
	  <th width="90">Tgl ADJ </th><th width="120">Tgl 
Stock Opname </th><th width="200">Keterangan</th><th width="90">User</th><th width="50">View</th><th width="60">Cetak ADJ</th></tr>
		<?php
		//menampilkan data pemasukan
		if(mysql_num_rows($result)!=0){
		 
  		while($row = mysql_fetch_array($result)){ $Kode = $row['nomor'];?>
        
        <tr><td align="left">&nbsp;<?php echo $row['no_adj']; ?>&nbsp;</td><td align="center" >&nbsp;<?php echo IndonesiaTgl($row['tgl_adj']); ?>&nbsp;</td><td align="center" >&nbsp;<?php echo IndonesiaTgl($row['tgl_stock']); ?>&nbsp;</td><td align="left">&nbsp;<?php echo $row['ket']; ?>&nbsp;</td><td align="left">&nbsp;<?php echo $row['userid']; ?>&nbsp;</td>
       <td align="center"><a href="?page=View-Penyesuaian&amp;Kode=<?php echo $Kode; ?>" target="_self" alt="View Data"><img src="images/btn_view.png" width="20" height="20" border="0" /></a></td>
        <td align="center"><a href="nota/adjustment.php?nomor=<?php echo $Kode; ?>" target="_self" alt="Cetak Adjustment" onclick="return confirm('ANDA YAKIN AKAN MENCETAK NOTA ADJ INI ?')"><img src="images/cetak.jpg" width="20" height="20"  border="0"  alt="Cetak Adjustment" /></a></td>
       </tr>
  		<?php } //end while ?>
		 <tr id="nav"><td colspan="7"><?php echo $obj->anchors; ?></td></tr>
	   <tr id="total"><td colspan="7"><?php echo $obj->total; ?></td></tr>
    <?php }else{?>
    <tr><td align="center" colspan="7">Data tidak ditemukan!</td></tr>
    <?php }?>
	</table>