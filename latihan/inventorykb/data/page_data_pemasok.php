<script type="text/javascript">

// fungsi ini untuk menampilkan list data pelanggan sesuai halaman (page) yang dipilih.
// list data yang ditampilkan disesuaikan juga dengan input data pada bagian search.
function pagination(page){
  var cari = $("input#fieldcari").val();
  var combo = $("select#pilihcari").val();

  if (combo == "nama"){
    dataString = 'starting='+page+'&nama='+cari+'&random='+Math.random();
  }
  else if (combo == "npwp"){
    dataString = 'starting='+page+'&id='+cari+'&random='+Math.random();
  }
  else if (combo == "alamat"){
    dataString = 'starting='+page+'&alamat='+cari+'&random='+Math.random();
  }
  else if (combo == "kota"){
    dataString = 'starting='+page+'&kota='+cari+'&random='+Math.random();
  }
  else if (combo == "negara"){
    dataString = 'starting='+page+'&negara='+cari+'&random='+Math.random();
  }
  else{
    dataString = 'starting='+page+'&random='+Math.random();
  }

  $.ajax({
    url:"data/page_data_pemasok.php",
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
  else if (combo == "npwp"){
    dataString = 'id='+ cari;
  }
    else if (combo == "alamat"){
    dataString = 'alamat='+ cari;
  }
  else if (combo == "kota"){
    dataString = 'kota='+ cari;
  }
  else if (combo == "negara"){
    dataString = 'negara='+ cari;
  }

  $.ajax({
    url: "data/page_data_pemasok.php", //file tempat pemrosesan permintaan (request)
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
  $('#data/data_pemasok tr:even:not(#nav):not(#total)').addClass('even');
  $('#data/data_pemasok tr:odd:not(#nav):not(#total)').addClass('odd');

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
  $sql = "select kode_pemasok,npwp,nama,alamat,kota,negara FROM pemasok where nama like '%$nama%' ORDER BY kode_pemasok ASC ";
}
else if (isset($_GET['id']) and !empty($_GET['id'])){
  $id = $_GET['id'];
  $sql = "select kode_pemasok,npwp,nama,alamat,kota,negara FROM pemasok where npwp like '%$id%' order by kode_pemasok ASC";
}
else if (isset($_GET['alamat']) and !empty($_GET['alamat'])){
  $alamat = $_GET['alamat'];
  $sql = "select kode_pemasok,npwp,nama,alamat,kota,negara FROM pemasok where alamat like '%$alamat%' order by kode_pemasok ASC";
}
else if (isset($_GET['kota']) and !empty($_GET['kota'])){
  $kota = $_GET['kota'];
  $sql = "select kode_pemasok,npwp,nama,alamat,kota,negara FROM pemasok where kota like '%$kota%' order by kode_pemasok ASC";
}

else if (isset($_GET['negara']) and !empty($_GET['negara'])){
  $negara = $_GET['negara'];
  $sql = "select kode_pemasok,npwp,nama,alamat,kota,negara FROM pemasok where negara like '%$negara%' order by kode_pemasok ASC";
}

else{
  $sql = "select kode_pemasok,npwp,nama,alamat,kota,negara FROM pemasok order by kode_pemasok ASC";
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

  <table width="100%" id="tblpemasok">
	  <tr><th width="100">NPWP/ID</th><th width="150">Nama </th><th width="150">Alamat</th><th width="80">Kota</th><th width="80">Negara</th><th width="50">View</th><th width="50">Edit</th><th width="50">Delete</th></tr>
		<?php
		//menampilkan data mata uang
		if(mysql_num_rows($result)!=0){
		 
  		while($row = mysql_fetch_array($result)){ $Kode = $row['kode_pemasok'];?>
        
        <tr><td align="left">&nbsp;<?php echo $row['npwp']; ?>&nbsp;</td><td align="left" >&nbsp;<?php echo $row['nama']; ?>&nbsp;</td><td align="left">&nbsp;<?php echo $row['alamat']; ?>&nbsp;</td><td align="center">&nbsp;<?php echo $row['kota']; ?>&nbsp;</td><td align="center">&nbsp;<?php echo $row['negara']; ?>&nbsp;</td>
         <td align="center"><a href="?page=View-Supplier&amp;Kode=<?php echo $Kode; ?>" target="_self" alt="View Data"><img src="images/btn_view.png" width="20" height="20" border="0" /></a></td>
        <td align="center"><a href="?page=Edit-Supplier&amp;Kode=<?php echo $Kode; ?>" target="_self" alt="Edit Data"><img src="images/btn_edit.png" width="20" height="20" border="0" /></a></td>
        <td align="center"><a href="?page=Delete-Supplier&amp;Kode=<?php echo $Kode; ?>" target="_self" alt="Delete Data" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA PENTING INI ... ?')"><img src="images/btn_delete.png" width="20" height="20"  border="0"  alt="Delete Data" /></a></td></tr>
  		<?php } //end while ?>
		 <tr id="nav"><td colspan="8"><?php echo $obj->anchors; ?></td></tr>
	   <tr id="total"><td colspan="8"><?php echo $obj->total; ?></td></tr>
    <?php }else{?>
    <tr><td align="center" colspan="8">Data tidak ditemukan!</td></tr>
    <?php }?>
	</table>