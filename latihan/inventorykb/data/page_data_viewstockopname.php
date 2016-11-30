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
  else if (combo == "kategori"){
    dataString = 'starting='+page+'&kategori='+cari+'&random='+Math.random();
  }
  else{
    dataString = 'starting='+page+'&random='+Math.random();
  }

  $.ajax({
    url:"data/page_data_viewstockopname.php",
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
    else if (combo == "kategori"){
    dataString = 'kategori='+ cari;
  }

  $.ajax({
    url: "data/page_data_viewstockopname.php", //file tempat pemrosesan permintaan (request)
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
  $('#data/data_viewstockopname tr:even:not(#nav):not(#total)').addClass('even');
  $('#data/data_viewstockopname tr:odd:not(#nav):not(#total)').addClass('odd');

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
// memanfaatkan class pagination
include_once "../library/config.php";
include_once('pagination_class.php');
include_once "../library/inc.library.php";
# TAMPILKAN 
$TglView = $_POST[tglstock];

if (isset($_GET['kode']) and !empty($_GET['kode'])){
  $kode = $_GET['kode'];
  $sql = "select T1.kd_barang,T1.nm_barang,T1.satuan,T1.kd_kategori, T2.*, T3.* from barang as T1, kategori as T2, tbl_stockopname as T3 where T1.kd_barang=T3.kode_brg and T1.kd_kategori=T2.kd_kategori and T3.tglstock='$TglView' and T3.kode_brg like '%$kode%' ORDER BY T3.kode_brg ASC";
}
else if (isset($_GET['nama']) and !empty($_GET['nama'])){
  $nama = $_GET['nama'];
  $sql = "select T1.kd_barang,T1.nm_barang,T1.satuan,T1.kd_kategori, T2.*, T3.* from barang as T1, kategori as T2, tbl_stockopname as T3 where T1.kd_barang=T3.kode_brg and T1.kd_kategori=T2.kd_kategori and T3.tglstock='$TglView' and T1.nm_barang like '%$nama%' ORDER BY T3.kode_brg ASC";
}
else if (isset($_GET['kategori']) and !empty($_GET['kategori'])){
  $kategori = $_GET['kategori'];
  $sql = "select T1.kd_barang,T1.nm_barang,T1.satuan,T1.kd_kategori, T2.*, T3.* from barang as T1, kategori as T2, tbl_stockopname as T3 where T1.kd_barang=T3.kode_brg and T1.kd_kategori=T2.kd_kategori and T3.tglstock='$TglView' and T2.nm_kategori like '%$kategori%' ORDER BY T3.kode_brg ASC";
}


else{
$TglView = $_POST['tglstock'];
  $sql = "select T1.kd_barang, T1.nm_barang, T1.satuan, T1.kd_kategori, T2.*, T3.* from barang as T1, kategori as T2, tbl_stockopname as T3 where T1.kd_barang = T3.kode_brg and T1.kd_kategori = T2.kd_kategori and T3.tglstock='$TglView' ORDER BY T3.kode_brg ASC";
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

  <table width="100%" id="tblviewstockopname">
	  <tr><th width="150"><?php echo $TglView; ?></th><th width="250">Nama Barang</th><th width="90">Satuan</th><th width="150">Kategori</th><th width="90">Saldo</th><th width="90">Stock Opname</th><th width="90">Selisih</th>
</tr>
		<?php
		//menampilkan data pemasukan
		if(mysql_num_rows($result)!=0){
		 
  		while($row = mysql_fetch_array($result)){ ?>
        
        <tr><td align="left">&nbsp;<?php echo $row['kode_brg']; ?>&nbsp;</td><td align="left">&nbsp;<?php echo $row['nm_barang']; ?>&nbsp;</td><td align="left">&nbsp;<?php echo $row['satuan']; ?>&nbsp;</td><td align="left">&nbsp;<?php echo $row['nm_kategori']; ?>&nbsp;</td><td align="left">&nbsp;<?php echo $row['saldo']; ?>&nbsp;</td><td align="left">&nbsp;<?php echo $row['stockopname']; ?>&nbsp;</td><td align="left">&nbsp;<?php echo $row['selisih']; ?>&nbsp;</td>
        </tr>
  		<?php } //end while ?>
		 <tr id="nav"><td colspan="7"><?php echo $obj->anchors; ?></td></tr>
	   <tr id="total"><td colspan="7"><?php echo $obj->total; ?>&nbsp; <?php echo $tanggal; ?></td></tr>
    <?php }else{?>
    <tr><td align="center" colspan="7">Data tidak ditemukan!</td></tr>
    <?php }?>
	</table>