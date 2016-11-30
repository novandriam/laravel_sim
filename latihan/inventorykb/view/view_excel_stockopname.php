<?php
include_once "../library/inc.connection.php";
include_once "../library/inc.library.php";
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="laporan_stockopname"'.date("dmy").'".xls"');
header('Cache-Control: max-age=0');
 

//isi file excel (pakai tabel)
if($_GET) {
		
	# TAMPILKAN 
	$TglView= isset($_GET['tanggal']) ?  $_GET['tanggal'] : $_POST['tanggal']; 
	$tanggal = IndonesiaTgl($TglView);
	
} // Penutup GET

$queryNamakb="select nama from infokb";
$cariNamakb=mysql_query($queryNamakb); //ambil data hgr dari database
$dataNamakb=mysql_fetch_array($cariNamakb); 	
echo "<tr>
  <td bgcolor=\"#99CCFF\"><div align=\"left\">DAFTAR STOCK OPNAME</div></td>
  </tr>
  <tr>
  <td bgcolor=\"#99CCFF\"><div align=\"left\">PERIODE TANGGAL: $tanggal </div></td>
  </tr>

 <tr>
  <td bgcolor=\"#99CCFF\"><div align=\"left\">KAWASAN BERIKAT ".strtoupper($dataNamakb['nama'])."</div></td>
  </tr>
  <tr>
  <td>&nbsp;</td>
    </tr> 
  ";
echo "<table width=\"458\" cellpadding=\"0\" cellspacing=\"0\" border=\"1\">
  <tr>
  <td><div valign=\"middle\" align=\"center\">No.</div></td>
  <td><div align=\"left\">Kode barang</div></td>
    <td><div align=\"left\">Nama barang</div></td>
	<td><div align=\"center\">Satuan</div></td>
  <td><div align=\"right\">Jumlah Stock</div></td>
  <td><div align=\"right\">Stock Opname</div></td>
  <td><div align=\"right\">Selisih</div></td>
  <td><div align=\"left\">Kategori</div></td>
  </tr>
  </table>
  "; 
  $query="SELECT T1.kd_barang,T1.nm_barang,T1.satuan, T2.*, T3.*	 
  FROM barang As T1 inner join tbl_stockopname As T3 on T1.kd_barang = T3.kode_brg inner join kategori As T2 on T1.kd_kategori = T2.kd_kategori 
	WHERE T3.tglstock = '$TglView'  
	ORDER BY T3.kode_brg ASC";
$cari=mysql_query($query); 
$nomor = 0;
while($dataRow=mysql_fetch_array($cari))
	{
		$nomor++;
   echo "<table width=\"458\" cellpadding=\"0\" cellspacing=\"0\" border=\"1\">
    
  <tr>
  <td align='center'>".$nomor."</td>
  <td align='left'>".$dataRow['kode_brg']."</td>
  <td align='left'>".$dataRow['nm_barang']."</td>
  <td align='center'>".$dataRow['satuan']."</td>
  <td align='right'>".format_angka($dataRow['saldo'])."</td>
  <td align='right'>".format_angka($dataRow['stockopname'])."</td>
  <td align='right'>".format_angka($dataRow['selisih'])."</td>
  <td align='left'>".$dataRow['nm_kategori']."</td>
  </tr>
  </table>
  ";
  }
?>