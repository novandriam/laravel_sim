<script type="text/javascript">

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
    url:"data/page_data_produksi.php",
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
    url: "data/page_data_produksi.php", //file tempat pemrosesan permintaan (request)
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
  $('#data/stock_produksi tr:even:not(#nav):not(#total)').addClass('even');
  $('#data/stock_produksi tr:odd:not(#nav):not(#total)').addClass('odd');

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
  $sql = "select T1.kd_barang,T1.nm_barang,T1.satuan,T1.kd_kategori, T2.*, T3.*, SUM(T2.jumlah) As total from barang as T1, stock_produksi as T2, kategori as T3 where T2.kode = T1.kd_barang AND T1.nm_barang like '%$nama%' AND T1.kd_kategori = T3.kd_kategori GROUP BY T2.kode order by T2.kode ASC";
}
else if (isset($_GET['id']) and !empty($_GET['id'])){
  $id = $_GET['id'];
  $sql = "select T1.kd_barang,T1.nm_barang,T1.satuan,T1.kd_kategori, T2.*, T3.*, SUM(T2.jumlah) As total from barang as T1, stock_produksi as T2, kategori as T3 where  T2.kode like '%$id%' AND T2.kode = T1.kd_barang AND T1.kd_kategori = T3.kd_kategori GROUP BY T2.kode order by T2.kode ASC";
}
else if (isset($_GET['kategori']) and !empty($_GET['kategori'])){
  $kategori = $_GET['kategori'];
  $sql = "select T1.kd_barang,T1.nm_barang,T1.satuan,T1.kd_kategori, T2.*, T3.*, SUM(T2.jumlah) As total from barang as T1, stock_produksi as T2, kategori as T3 where T2.kode = T1.kd_barang AND T1.kd_kategori = T3.kd_kategori  And T3.nm_kategori like '%$kategori%' GROUP BY T2.kode order by T2.kode ASC";
}

else{
  $sql = "select T1.kd_barang,T1.nm_barang,T1.satuan,T1.kd_kategori, T2.*, T3.*, SUM(T2.jumlah) As total from barang as T1, stock_produksi as T2, kategori as T3 where  T1.kd_barang = T2.kode AND T1.kd_kategori = T3.kd_kategori GROUP BY T2.kode order by T2.kode ASC";
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

  <table width="100%" id="tblproduksi" >
	  <tr><th width="135">Kode barang</th><th width="300">Nama Barang</th><th width="90">Stock</th><th width="90">Satuan</th><th width="250">Kategori</th></tr>
		<?php
		//menampilkan data pelanggan
		if(mysql_num_rows($result)!=0){
		 
  		while($row = mysql_fetch_array($result)){ ?>
        
        <tr c><td align="center">&nbsp;<?php echo $row['kode']; ?>&nbsp;</td><td align="left" >&nbsp;<?php echo $row['nm_barang']; ?>&nbsp;</td><td align="right">&nbsp;<?php echo format_angka($row['total']); ?>&nbsp;</td><td align="center">&nbsp;<?php echo $row['satuan']; ?>&nbsp;</td>
        <td align="left">&nbsp;<?php echo $row['nm_kategori']; ?>&nbsp;</td></tr>
  		<?php } //end while ?>
		 <tr id="nav"><td colspan="5"><?php echo $obj->anchors; ?></td></tr>
	   <tr id="total"><td colspan="5"><?php echo $obj->total; ?></td></tr>
    <?php }else{?>
    <tr><td align="center" colspan="5">Data tidak ditemukan!</td></tr>
    <?php }?>
	</table>