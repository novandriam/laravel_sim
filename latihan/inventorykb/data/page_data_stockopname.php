<script type="text/javascript">

// fungsi ini untuk menampilkan list data pelanggan sesuai halaman (page) yang dipilih.
// list data yang ditampilkan disesuaikan juga dengan input data pada bagian search.
function pagination(page){
  var cari = $("input#fieldcari").val();
  var combo = $("select#pilihcari").val();

  if (combo == "nosurat"){
    dataString = 'starting='+page+'&nosurat='+cari+'&random='+Math.random();
  }
  else if (combo == "petugas"){
    dataString = 'starting='+page+'&petugas='+cari+'&random='+Math.random();
  }
  else{
    dataString = 'starting='+page+'&random='+Math.random();
  }

  $.ajax({
    url:"data/page_data_stockopname.php",
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

  if (combo == "nosurat"){
    dataString = 'nosurat='+ cari;
  }
  else if (combo == "petugas"){
    dataString = 'petugas='+ cari;
  }

  $.ajax({
    url: "data/page_data_stockopname.php", //file tempat pemrosesan permintaan (request)
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
  $('#data/data_stockopname tr:even:not(#nav):not(#total)').addClass('even');
  $('#data/data_stockopname tr:odd:not(#nav):not(#total)').addClass('odd');

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

if (isset($_GET['nosurat']) and !empty($_GET['nosurat'])){
  $nosurat = $_GET['nosurat'];
  $sql = "select tglstock,no_surat,tglsurat,petugas from tbl_stockopname where no_surat like '%$nosurat%' group by tglstock ORDER BY tglstock desc";
}
else if (isset($_GET['petugas']) and !empty($_GET['petugas'])){
  $petugas = $_GET['petugas'];
  $sql = "select tglstock,no_surat,tglsurat,petugas from tbl_stockopname where petugas like '%$petugas%' group by tglstock ORDER BY tglstock desc";
}

else{
  $sql = "select tglstock,no_surat,tglsurat,petugas from tbl_stockopname group by tglstock ORDER BY tglstock desc";
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

  <table width="100%" id="tblstockopname">
	  <tr><th width="90">Tgl Stock Opname</th><th width="150">No Surat Tugas</th><th width="80">Tanggal ST</th><th width="200">Nama Petugas</th><th width="50">View</th><th width="70">Expor Excel</th></tr>
		<?php
		//menampilkan data pemasukan
		if(mysql_num_rows($result)!=0){
		 
  		while($row = mysql_fetch_array($result)){ $tanggal = $row['tglstock'];?>
        
        <tr><td align="center" >&nbsp;<?php echo IndonesiaTgl($row['tglstock']); ?>&nbsp;</td><td align="left">&nbsp;<?php echo $row['no_surat']; ?>&nbsp;</td><td align="center" >&nbsp;<?php echo IndonesiaTgl($row['tglsurat']); ?>&nbsp;</td><td align="left">&nbsp;<?php echo $row['petugas']; ?>&nbsp;</td>
        <td align="center"><a href="?page=Daftar-Stockopname&amp;tanggal=<?php echo $tanggal; ?>" target="_self" alt="View Data"><img src="images/btn_view.png" width="20" height="20" border="0" /></a></td>
         <td align="center"><a href="view/view_excel_stockopname.php?tanggal=<?php echo $tanggal; ?>" target="_self" alt="Ekspor ke Excel" onclick="return confirm('ANDA YAKIN AKAN MENGEKSPOR DATA?')"><img src="images/excel.jpg" width="20" height="20"  border="0"  alt="Ekspor Excel" /></a></td></tr>
  		<?php } //end while ?>
		 <tr id="nav"><td colspan="6"><?php echo $obj->anchors; ?></td></tr>
	   <tr id="total"><td colspan="6"><?php echo $obj->total; ?></td></tr>
    <?php }else{?>
    <tr><td align="center" colspan="6">Data tidak ditemukan!</td></tr>
    <?php }?>
	</table>