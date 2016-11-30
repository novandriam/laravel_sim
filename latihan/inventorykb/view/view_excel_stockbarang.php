<?php
include_once "../library/inc.connection.php";
include_once "../library/inc.library.php";
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="laporan_daftar-stockbarang"'.date("dmy").'".xls"');
header('Cache-Control: max-age=0');
 
$queryNamakb="select nama from infokb";
$cariNamakb=mysql_query($queryNamakb); //ambil data hgr dari database
$dataNamakb=mysql_fetch_array($cariNamakb);
echo "<tr>
  <td bgcolor=\"#99CCFF\"><div align=\"left\">DAFTAR STOCK BARANG</div></td>
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
  <td><div align=\"center\">Kode barang</div></td>
    <td><div align=\"center\">Nama barang</div></td>
	<td><div align=\"center\">Type</div></td>
	<td><div align=\"center\">Spesifikasi</div></td>
	<td><div align=\"center\">Satuan</div></td>
  <td><div align=\"center\">Jumlah Stock</div></td>
  <td><div align=\"center\">Keterangan</div></td>
  <td><div align=\"center\">Kategori</div></td>
  </tr>
  </table>
  "; 
  $query="SELECT T1.*, T2.* FROM barang As T1, kategori As T2
	WHERE T1.kd_kategori = T2.kd_kategori
	ORDER BY T1.kd_barang ASC";
$cari=mysql_query($query); 
$nomor = 0;
while($dataRow=mysql_fetch_array($cari))
	{
		$nomor++;
   echo "<table width=\"458\" cellpadding=\"0\" cellspacing=\"0\" border=\"1\">
    
  <tr>
  <td>".$nomor."</td>
  <td>".$dataRow['kd_barang']."</td>
  <td>".$dataRow['nm_barang']."</td>
  <td>".$dataRow['type']."</td>
  <td>".$dataRow['spec']."</td>
  <td>".$dataRow['satuan']."</td>
  <td>".$dataRow['stok']."</td>
  <td>".$dataRow['ket']."</td>
  <td>".$dataRow['nm_kategori']."</td>
  </tr>
  </table>
  ";
  }
?>