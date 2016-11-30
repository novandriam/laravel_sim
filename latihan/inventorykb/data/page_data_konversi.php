<script type="text/javascript">

// fungsi ini untuk menampilkan list data pelanggan sesuai halaman (page) yang dipilih.
// list data yang ditampilkan disesuaikan juga dengan input data pada bagian search.
function pagination(page){
  var cari = $("input#fieldcari").val();
  var combo = $("select#pilihcari").val();

  if (combo == "kode"){
    dataString = 'starting='+page+'&kode='+cari+'&random='+Math.random();
  }
  else if (combo == "nama"){
    dataString = 'starting='+page+'&nama='+cari+'&random='+Math.random();
  }
  else if (combo == "type"){
    dataString = 'starting='+page+'&type='+cari+'&random='+Math.random();
  }
  else if (combo == "spec"){
    dataString = 'starting='+page+'&spec='+cari+'&random='+Math.random();
  }
  else{
    dataString = 'starting='+page+'&random='+Math.random();
  }

  $.ajax({
    url:"data/page_data_konversi.php",
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

  if (combo == "kode"){
    dataString = 'kode='+ cari;
  }
  else if (combo == "nama"){
    dataString = 'nama='+ cari;
  }
  else if (combo == "type"){
    dataString = 'type='+ cari;
  }
  else if (combo == "spec"){
    dataString = 'spec='+ cari;
  }

  $.ajax({
    url: "data/page_data_konversi.php", //file tempat pemrosesan permintaan (request)
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
  $('#data/data_konversi tr:even:not(#nav):not(#total)').addClass('even');
  $('#data/data_konversi tr:odd:not(#nav):not(#total)').addClass('odd');

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


if (isset($_GET['kode']) and !empty($_GET['kode'])){
  $kode = $_GET['kode'];
  $sql = "select barang.kd_barang,barang.nm_barang,konversi.id,konversi.kd_barang,konversi.type,konversi.spec,konversi.userid FROM barang,konversi where konversi.kd_barang=barang.kd_barang and konversi.kd_barang like '%$kode%' ORDER BY konversi.id desc";
}
else if (isset($_GET['nama']) and !empty($_GET['nama'])){
  $nama = $_GET['nama'];
  $sql = "select barang.kd_barang,barang.nm_barang,konversi.id,konversi.kd_barang,konversi.type,konversi.spec,konversi.userid FROM barang,konversi where konversi.kd_barang=barang.kd_barang and barang.nm_barang like '%$nama%' ORDER BY konversi.id desc";
}
else if (isset($_GET['type']) and !empty($_GET['type'])){
  $type = $_GET['type'];
  $sql = "select barang.kd_barang,barang.nm_barang,konversi.id,konversi.kd_barang,konversi.type,konversi.spec,konversi.userid FROM barang,konversi where konversi.kd_barang=barang.kd_barang and konversi.type like '%$type%' ORDER BY konversi.id desc";
}
else if (isset($_GET['spec']) and !empty($_GET['spec'])){
  $spec = $_GET['spec'];
  $sql = "select barang.kd_barang,barang.nm_barang,konversi.id,konversi.kd_barang,konversi.type,konversi.spec,konversi.userid FROM barang,konversi where konversi.kd_barang=barang.kd_barang and konversi.spec like '%$spec%' ORDER BY konversi.id desc";
}


else{
  $sql = "select barang.kd_barang,barang.nm_barang,konversi.id,konversi.kd_barang,konversi.type,konversi.spec,konversi.userid FROM barang,konversi where konversi.kd_barang=barang.kd_barang ORDER BY konversi.id desc";
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

  <table width="100%" id="tblkonversi">
	  <tr><th width="100">Kode barang</th><th width="200">Nama barang </th><th width="180">Type</th><th width="200">Spesifikasi</th><th width="80">User</th><th width="50">View</th></tr>
		<?php
		//menampilkan data pemasukan
		if(mysql_num_rows($result)!=0){
		 
  		while($row = mysql_fetch_array($result)){ $Kode = $row['id'];?>
        
        <tr><td align="left">&nbsp;<?php echo $row['kd_barang']; ?>&nbsp;</td><td align="left">&nbsp;<?php echo $row['nm_barang']; ?>&nbsp;</td><td align="left">&nbsp;<?php echo $row['type']; ?>&nbsp;</td><td align="left">&nbsp;<?php echo $row['spec']; ?>&nbsp;</td><td align="left">&nbsp;<?php echo $row['userid']; ?>&nbsp;</td>
       <td align="center"><a href="?page=Konversi-View&amp;Kode=<?php echo $Kode; ?>" target="_self" alt="View Data"><img src="images/btn_view.png" width="20" height="20" border="0" /></a></td>
      </tr>
  		<?php } //end while ?>
		 <tr id="nav"><td colspan="6"><?php echo $obj->anchors; ?></td></tr>
	   <tr id="total"><td colspan="6"><?php echo $obj->total; ?></td></tr>
    <?php }else{?>
    <tr><td align="center" colspan="6">Data tidak ditemukan!</td></tr>
    <?php }?>
	</table>