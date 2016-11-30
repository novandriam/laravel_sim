<script type="text/javascript">

// fungsi ini untuk menampilkan list data pelanggan sesuai halaman (page) yang dipilih.
// list data yang ditampilkan disesuaikan juga dengan input data pada bagian search.
function pagination(page){
  var cari = $("input#fieldcari").val();
  var combo = $("select#pilihcari").val();

  if (combo == "nama"){
    dataString = 'starting='+page+'&nama='+cari+'&random='+Math.random();
  }
  else if (combo == "jenis"){
    dataString = 'starting='+page+'&id='+cari+'&random='+Math.random();
  }
  else{
    dataString = 'starting='+page+'&random='+Math.random();
  }

  $.ajax({
    url:"data/page_data_kemasan.php",
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
  else if (combo == "jenis"){
    dataString = 'id='+ cari;
  }

  $.ajax({
    url: "data/page_data_kemasan.php", //file tempat pemrosesan permintaan (request)
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
  $('#data/data_kemasan tr:even:not(#nav):not(#total)').addClass('even');
  $('#data/data_kemasan tr:odd:not(#nav):not(#total)').addClass('odd');

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
  $sql = "select * FROM kemasan where uraian_kemasan like '%$nama%' ORDER BY id_kemasan ASC ";
}
else if (isset($_GET['id']) and !empty($_GET['id'])){
  $id = $_GET['id'];
  $sql = "select * FROM kemasan where kd_kemasan like '%$id%' order by id_kemasan ASC";
}
else{
  $sql = "select * FROM kemasan order by id_kemasan ASC";
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

  <table width="100%" id="tblkemasan">
	  <tr><th width="100">Kode</th>
	  <th width="80">Jenis Kemasan</th>
	  <th width="300">Nama Kemasan</th><th width="50">Edit</th><th width="50">Delete</th></tr>
		<?php
		//menampilkan data pelanggan
		if(mysql_num_rows($result)!=0){
		 
  		while($row = mysql_fetch_array($result)){ $Kode = $row['id_kemasan'];?>
        
        <tr><td align="center">&nbsp;<?php echo $row['id_kemasan']; ?>&nbsp;</td><td align="center" >&nbsp;<?php echo $row['kd_kemasan']; ?>&nbsp;</td><td align="left">&nbsp;<?php echo $row['uraian_kemasan']; ?>&nbsp;</td>
        <td align="center"><a href="?page=Edit-Kemasan&amp;Kode=<?php echo $Kode; ?>" target="_self" alt="Edit Data"><img src="images/btn_edit.png" width="20" height="20" border="0" /></a></td>
        <td align="center"><a href="?page=Delete-Kemasan&amp;Kode=<?php echo $Kode; ?>" target="_self" alt="Delete Data" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA PENTING INI ... ?')"><img src="images/btn_delete.png" width="20" height="20"  border="0"  alt="Delete Data" /></a></td></tr>
  		<?php } //end while ?>
		 <tr id="nav"><td colspan="5"><?php echo $obj->anchors; ?></td></tr>
	   <tr id="total"><td colspan="5"><?php echo $obj->total; ?></td></tr>
    <?php }else{?>
    <tr><td align="center" colspan="5">Data tidak ditemukan!</td></tr>
    <?php }?>
	</table>