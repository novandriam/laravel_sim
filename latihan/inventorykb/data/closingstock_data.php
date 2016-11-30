<script type="text/javascript">

// fungsi ini untuk menampilkan list data pelanggan sesuai halaman (page) yang dipilih.
// list data yang ditampilkan disesuaikan juga dengan input data pada bagian search.
function pagination(page){
    dataString = 'starting='+page+'&random='+Math.random();

  $.ajax({
    url:"data/closingstock_data.php",
    data: dataString,
    type:"GET",
    success:function(data)
    {
      $('#divPageData').html(data);
    }
  });
}

</script>

<?php
// memanfaatkan class pagination dari Reneesh T.K
include_once "../library/config.php";
include_once('pagination_class.php');
include_once "../library/inc.library.php";

  $sql = "select COUNT(*) As jumlah,tgl_closing FROM closing GROUP BY tgl_closing desc";


if(isset($_GET['starting'])){ //starting page
	$starting=$_GET['starting'];
}else{
	$starting=0;
}

$recpage = 25;//jumlah data yang ditampilkan per page(halaman)
$obj = new pagination_class($sql,$starting,$recpage);
$result = $obj->result;
?>

  <table width="100%" id="tblclosing" >
   
	  <tr><th align="center" width="115">Tanggal Closing</th><th width="100">Jumlah barang</th><th width="50">View</th><th width="50">Ekspor Excel</th><th width="50">Delete</th></tr>
		<?php
		//menampilkan data 
		if(mysql_num_rows($result)!=0){
		 
  		while($row = mysql_fetch_array($result)){ $tanggal = $row['tgl_closing'];?>
        
        <tr c><td align="center">&nbsp;<?php echo IndonesiaTgl($row['tgl_closing']); ?>&nbsp;</td><td align="center" >&nbsp;<?php echo $row['jumlah']; ?>&nbsp;</td><td align="center"><a href="?page=View-Closing&amp;tanggal=<?php echo $tanggal; ?>" target="_self" alt="View Data"><img src="images/btn_view.png" width="20" height="20" border="0" /></a></td>
        <td align="center"><a href="view/view_excel_closing.php?tanggal=<?php echo $tanggal; ?>" target="_self" alt="Expor ke Excel" onclick="return confirm('ANDA YAKIN AKAN MENGEKSPOR DATA?')"><img src="images/excel.jpg" width="20" height="20"  border="0"  alt="Expor Excel" /></a></td>
        <td align="center"><a href="?page=Delete-Closingstock&amp;tanggal=<?php echo $tanggal; ?>" target="_self" alt="Delete Data" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA PENTING INI ... ?')"><img src="images/btn_delete.png" width="20" height="20"  border="0"  alt="Delete Data" /></a></td></tr>
  		<?php } //end while ?>
		 <tr id="nav"><td colspan="5"><?php echo $obj->anchors; ?></td></tr>
	   <tr id="total"><td colspan="5"><?php echo $obj->total; ?></td></tr>
    <?php }else{?>
    <tr><td align="center" colspan="5">Data tidak ditemukan!</td></tr>
    <?php }?>
	</table>
  