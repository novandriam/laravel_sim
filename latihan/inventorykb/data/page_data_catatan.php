<script type="text/javascript">

// fungsi ini untuk menampilkan list data pelanggan sesuai halaman (page) yang dipilih.
// list data yang ditampilkan disesuaikan juga dengan input data pada bagian search.
function pagination(page){
  var cari = $("input#fieldcari").val();
  var combo = $("select#pilihcari").val();

  if (combo == "nama"){
    dataString = 'starting='+page+'&nama='+cari+'&random='+Math.random();
  }
  else if (combo == "kode"){
    dataString = 'starting='+page+'&kode='+cari+'&random='+Math.random();
  }
  else if (combo == "kategori"){
    dataString = 'starting='+page+'&kategori='+cari+'&random='+Math.random();
  }
  else{
    dataString = 'starting='+page+'&random='+Math.random();
  }

  $.ajax({
    url:"data/page_data_catatan.php",
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

  if (combo == "nama"){
    dataString = 'nama='+ cari;
  }
  else if (combo == "kode"){
    dataString = 'kode='+ cari;
  }
  else if (combo == "kategori"){
    dataString = 'kategori='+ cari;
  }

  $.ajax({
    url: "data/page_data_catatan.php", //file tempat pemrosesan permintaan (request)
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
  $('#data/data_catatan tr:even:not(#nav):not(#total)').addClass('even');
  $('#data/data_catatan tr:odd:not(#nav):not(#total)').addClass('odd');

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

if (isset($_GET['nama']) and !empty($_GET['nama'])){
  $nama = $_GET['nama'];
  $sql = "select * FROM catatan where nm_catatan like '%$nama%' ORDER BY kd_catatan ASC";
}
else if (isset($_GET['kode']) and !empty($_GET['kode'])){
  $kode = $_GET['kode'];
  $sql = "select * FROM catatan where kd_catatan like '%$kode%' ORDER BY kd_catatan ASC";
}
else if (isset($_GET['kategori']) and !empty($_GET['kategori'])){
  $kategori = $_GET['kategori'];
  $sql = "select * FROM catatan where kategori like '%$kategori%' ORDER BY kd_catatan ASC";
}


else{
  $sql = "select * FROM catatan  ORDER BY kd_catatan ASC";
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

  <table width="100%" id="tblcatatan">
	  <tr>
	    <th width="50">No</th><th width="100">Kode </th><th width="150">Nama Catatan</th><th width="80">Kategori</th><th align="center" width="50">Edit</th><th align="center" width="50">Delete</th></tr>
		<?php
		//menampilkan data mata uang
		if(mysql_num_rows($result)!=0){
		$nomor  = 0; 
  		while($row = mysql_fetch_array($result)){
		$nomor++; 
		$Kode = $row['kd_catatan'];
		?>
        
        <tr>
        <td align="center"><b><?php echo $nomor; ?></b></td>
        <td align="left">&nbsp;<?php echo $row['kd_catatan']; ?>&nbsp;</td>
        <td align="left" >&nbsp;<?php echo $row['nm_catatan']; ?>&nbsp;</td>
        <td align="left" >&nbsp;<?php echo $row['kategori']; ?>&nbsp;</td>
        <td align="center"><a href="?page=Edit-Catatan&amp;Kode=<?php echo $Kode; ?>" target="_self" alt="Edit Data"><img src="images/btn_edit.png" width="20" height="20" border="0" /></a></td>
        <td align="center"><a href="?page=Delete-Catatan&amp;Kode=<?php echo $Kode; ?>" target="_self" alt="Delete Data" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA PENTING INI ... ?')"><img src="images/btn_delete.png" width="20" height="20"  border="0"  alt="Delete Data" /></a></td>
        </tr>
  		<?php } //end while ?>
		 <tr id="nav"><td colspan="6"><?php echo $obj->anchors; ?></td></tr>
	   <tr id="total"><td colspan="6"><?php echo $obj->total; ?></td></tr>
    <?php }else{?>
    <tr><td align="center" colspan="6">Data tidak ditemukan!</td></tr>
    <?php }?>
	</table>