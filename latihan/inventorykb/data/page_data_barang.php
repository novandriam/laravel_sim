<script type="text/javascript">

// fungsi ini untuk menampilkan list data pelanggan sesuai halaman (page) yang dipilih.
// list data yang ditampilkan disesuaikan juga dengan input data pada bagian search.
function pagination(page){
  var cari = $("input#fieldcari").val();
  var combo = $("select#pilihcari").val();

  if (combo == "namabarang"){
    dataString = 'starting='+page+'&nama='+cari+'&random='+Math.random();
  }
  else if (combo == "kodebarang"){
    dataString = 'starting='+page+'&id='+cari+'&random='+Math.random();
  }
  else if (combo == "kategori"){
    dataString = 'starting='+page+'&kategori='+cari+'&random='+Math.random();
  }

  else{
    dataString = 'starting='+page+'&random='+Math.random();
  }

  $.ajax({
    url:"data/page_data_barang.php",
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

  if (combo == "namabarang"){
    dataString = 'nama='+ cari;
  }
  else if (combo == "kodebarang"){
    dataString = 'id='+ cari;
  }
  else if (combo == "kategori"){
    dataString = 'kategori='+ cari;
  }

  $.ajax({
    url: "data/page_data_barang.php", //file tempat pemrosesan permintaan (request)
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
  $('#data/stock_barang tr:even:not(#nav):not(#total)').addClass('even');
  $('#data/stock_barang tr:odd:not(#nav):not(#total)').addClass('odd');

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

if (isset($_GET['nama']) and !empty($_GET['nama'])){
  $nama = $_GET['nama'];
  $sql = "select T1.kd_barang,T1.nm_barang,T1.stok,T1.satuan,T1.kd_kategori, T2.*, SUM(T1.stok) As total from barang as T1, kategori as T2 where T1.nm_barang like '%$nama%' AND T1.kd_kategori = T2.kd_kategori GROUP BY T1.kd_barang order by T1.id ASC";
}
else if (isset($_GET['id']) and !empty($_GET['id'])){
  $id = $_GET['id'];
  $sql = "select T1.kd_barang,T1.nm_barang,T1.stok,T1.satuan,T1.kd_kategori, T2.*, SUM(T1.stok) As total from barang as T1, kategori as T2 where  T1.kd_barang like '%$id%' AND T1.kd_kategori = T2.kd_kategori GROUP BY T1.kd_barang order by T1.id ASC";
}
else if (isset($_GET['kategori']) and !empty($_GET['kategori'])){
  $kategori = $_GET['kategori'];
  $sql = "select T1.kd_barang,T1.nm_barang,T1.stok,T1.satuan,T1.kd_kategori, T2.*, SUM(T1.stok) As total from barang as T1, kategori as T2 where  T1.kd_kategori = T2.kd_kategori and T2.nm_kategori like '%$kategori%' GROUP BY T1.kd_barang order by T1.id ASC";
}

else{
  $sql = "select T1.kd_barang,T1.nm_barang,T1.stok,T1.satuan,T1.kd_kategori, T2.*, SUM(T1.stok) As total from barang as T1, kategori as T2 where  T1.kd_kategori = T2.kd_kategori GROUP BY T1.kd_barang order by T1.id ASC";
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

  <table width="100%" id="tblpelanggan">
	  <tr><th width="135">Kode barang</th><th width="300">Nama Barang</th><th width="90">Stock</th>
	  <th width="90">Satuan</th><th width="250">Kategori</th></tr>
		<?php
		//menampilkan data pelanggan
		if(mysql_num_rows($result)!=0){
		 
  		while($row = mysql_fetch_array($result)){ ?>
        
        <tr><td align="center">&nbsp;<?php echo $row['kd_barang']; ?>&nbsp;</td><td align="left" >&nbsp;<?php echo $row['nm_barang']; ?>&nbsp;</td><td align="right">&nbsp;<?php echo format_angka($row['total']); ?>&nbsp;</td><td align="center">&nbsp;<?php echo $row['satuan']; ?>&nbsp;</td>
        <td align="left">&nbsp;<?php echo $row['nm_kategori']; ?>&nbsp;</td></tr>
  		<?php } //end while ?>
		 <tr id="nav"><td colspan="5"><?php echo $obj->anchors; ?></td></tr>
	   <tr id="total"><td colspan="5"><?php echo $obj->total; ?></td></tr>
    <?php }else{?>
    <tr><td align="center" colspan="5">Data tidak ditemukan!</td></tr>
    <?php }?>
	</table>