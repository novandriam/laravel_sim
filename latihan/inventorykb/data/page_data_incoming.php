<script type="text/javascript">

// fungsi ini untuk menampilkan list data pelanggan sesuai halaman (page) yang dipilih.
// list data yang ditampilkan disesuaikan juga dengan input data pada bagian search.
function pagination(page){
  var cari = $("input#fieldcari").val();
  var combo = $("select#pilihcari").val();

  if (combo == "pemasok"){
    dataString = 'starting='+page+'&pemasok='+cari+'&random='+Math.random();
  }
  else if (combo == "nobpb"){
    dataString = 'starting='+page+'&nobpb='+cari+'&random='+Math.random();
  }
  else if (combo == "noinvoice"){
    dataString = 'starting='+page+'&noinvoice='+cari+'&random='+Math.random();
  }
  else{
    dataString = 'starting='+page+'&random='+Math.random();
  }

  $.ajax({
    url:"data/page_data_incoming.php",
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

  if (combo == "pemasok"){
    dataString = 'pemasok='+ cari;
  }
  else if (combo == "nobpb"){
    dataString = 'nobpb='+ cari;
  }
    else if (combo == "noinvoice"){
    dataString = 'noinvoice='+ cari;
  }

  $.ajax({
    url: "data/page_data_incoming.php", //file tempat pemrosesan permintaan (request)
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
  $('#data/data_incoming tr:even:not(#nav):not(#total)').addClass('even');
  $('#data/data_incoming tr:odd:not(#nav):not(#total)').addClass('odd');

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


if (isset($_GET['pemasok']) and !empty($_GET['pemasok'])){
  $pemasok = $_GET['pemasok'];
  $sql = "select pemasukan.nomor, pemasukan.no_bpb,pemasukan.tgl_bpb,pemasukan.pemasok,pemasukan.no_invoice,pemasukan.tgl_invoice, pemasok.kode_pemasok, pemasok.nama FROM pemasukan, pemasok where pemasukan.pemasok=pemasok.kode_pemasok and pemasok.nama like '%$pemasok%' ORDER BY pemasukan.nomor desc";
}
else if (isset($_GET['nobpb']) and !empty($_GET['nobpb'])){
  $nobpb = $_GET['nobpb'];
  $sql = "select pemasukan.nomor, pemasukan.no_bpb,pemasukan.tgl_bpb,pemasukan.pemasok,pemasukan.no_invoice,pemasukan.tgl_invoice, pemasok.kode_pemasok, pemasok.nama FROM pemasukan, pemasok where pemasukan.pemasok=pemasok.kode_pemasok and pemasukan.no_bpb like '%$nobpb%' ORDER BY pemasukan.nomor desc";
}
else if (isset($_GET['noinvoice']) and !empty($_GET['noinvoice'])){
  $noinvoice = $_GET['noinvoice'];
  $sql = "select pemasukan.nomor, pemasukan.no_bpb,pemasukan.tgl_bpb,pemasukan.pemasok,pemasukan.no_invoice,pemasukan.tgl_invoice, pemasok.kode_pemasok, pemasok.nama FROM pemasukan, pemasok where pemasukan.pemasok=pemasok.kode_pemasok and pemasukan.no_invoice like '%$noinvoice%' ORDER BY pemasukan.nomor desc";
}


else{
  $sql = "select pemasukan.nomor, pemasukan.no_bpb,pemasukan.tgl_bpb,pemasukan.pemasok,pemasukan.no_invoice,pemasukan.tgl_invoice, pemasok.kode_pemasok, pemasok.nama FROM pemasukan, pemasok where pemasukan.pemasok=pemasok.kode_pemasok ORDER BY pemasukan.no_bpb desc";
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
	  <tr><th width="150">Nomor BPB</th><th width="80">Tanggal BPB </th><th width="250">Pemasok</th><th width="150">No Invoice</th><th width="80">Tgl Invoice</th><th width="50">View</th><th width="50">Cetak BPB</th></tr>
		<?php
		//menampilkan data pemasukan
		if(mysql_num_rows($result)!=0){
		 
  		while($row = mysql_fetch_array($result)){ $Kode = $row['nomor'];?>
        
        <tr><td align="left">&nbsp;<?php echo $row['no_bpb']; ?>&nbsp;</td><td align="center" >&nbsp;<?php echo IndonesiaTgl($row['tgl_bpb']); ?>&nbsp;</td><td align="left">&nbsp;<?php echo $row['nama']; ?>&nbsp;</td><td align="left">&nbsp;<?php echo $row['no_invoice']; ?>&nbsp;</td><td align="center">&nbsp;<?php echo IndonesiaTgl($row['tgl_invoice']); ?>&nbsp;</td>
       <td align="center"><a href="?page=View-Pemasukan&amp;Kode=<?php echo $Kode; ?>" target="_self" alt="View Data"><img src="images/btn_view.png" width="20" height="20" border="0" /></a></td>
        <td align="center"><a href="nota/bpb.php?nomor=<?php echo $Kode; ?>" target="_new" alt="Cetak BPB" onclick="return confirm('ANDA YAKIN AKAN MENCETAK BPB INI ?')"><img src="images/cetak.jpg" width="20" height="20"  border="0"  alt="Cetak BPB" /></a></td></tr>
  		<?php } //end while ?>
		 <tr id="nav"><td colspan="7"><?php echo $obj->anchors; ?></td></tr>
	   <tr id="total"><td colspan="7"><?php echo $obj->total; ?></td></tr>
    <?php }else{?>
    <tr><td align="center" colspan="7">Data tidak ditemukan!</td></tr>
    <?php }?>
	</table>