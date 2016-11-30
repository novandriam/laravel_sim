<script type="text/javascript">

// fungsi ini untuk menampilkan list data pelanggan sesuai halaman (page) yang dipilih.
// list data yang ditampilkan disesuaikan juga dengan input data pada bagian search.
function pagination(page){
    dataString = 'starting='+page+'&random='+Math.random();

  $.ajax({
    url:"data/barang_data.php",
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

  $sql = "select T1.kd_barang,T1.nm_barang,T1.stok,T1.satuan,T1.kd_kategori, T2.* from barang as T1, kategori as T2 where  T1.kd_kategori = T2.kd_kategori order by T1.id ASC";


if(isset($_GET['starting'])){ //starting page
	$starting=$_GET['starting'];
}else{
	$starting=0;
}

$recpage = 25;//jumlah data yang ditampilkan per page(halaman)
$obj = new pagination_class($sql,$starting,$recpage);
$result = $obj->result;
?>

  <table width="100%" id="tblbarang" >
   
	  <tr><th width="115">Kode barang</th><th width="300">Nama Barang</th><th width="90">Stock</th>
	  <th width="90">Satuan</th><th width="200">Kategori</th><th width="50">View</th><th width="50">Edit</th><th width="50">Delete</th></tr>
		<?php
		//menampilkan data pelanggan
		if(mysql_num_rows($result)!=0){
		 
  		while($row = mysql_fetch_array($result)){ $Kode = $row['kd_barang'];?>
        
        <tr c><td align="center">&nbsp;<?php echo $row['kd_barang']; ?>&nbsp;</td><td align="left" >&nbsp;<?php echo $row['nm_barang']; ?>&nbsp;</td><td align="right">&nbsp;<?php echo $row['stok']; ?>&nbsp;</td><td align="center">&nbsp;<?php echo $row['satuan']; ?>&nbsp;</td>
        <td align="left">&nbsp;<?php echo $row['nm_kategori']; ?>&nbsp;</td><td align="center"><a href="?page=View-Barang&amp;Kode=<?php echo $Kode; ?>" target="_self" alt="View Data"><img src="images/btn_view.png" width="20" height="20" border="0" /></a></td>
        <td align="center"><a href="?page=Edit-Barang&amp;Kode=<?php echo $Kode; ?>" target="_self" alt="Edit Data"><img src="images/btn_edit.png" width="20" height="20" border="0" /></a></td>
        <td align="center"><a href="?page=Delete-Barang&amp;Kode=<?php echo $Kode; ?>" target="_self" alt="Delete Data" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA PENTING INI ... ?')"><img src="images/btn_delete.png" width="20" height="20"  border="0"  alt="Delete Data" /></a></td></tr>
  		<?php } //end while ?>
		 <tr id="nav"><td colspan="8"><?php echo $obj->anchors; ?></td></tr>
	   <tr id="total"><td colspan="8"><?php echo $obj->total; ?></td></tr>
    <?php }else{?>
    <tr><td align="center" colspan="8">Data tidak ditemukan!</td></tr>
    <?php }?>
	</table>
  