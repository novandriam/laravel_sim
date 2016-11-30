<?php
include_once "../library/inc.connection.php";
include_once "../library/inc.library.php";
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="laporan_posisi-wip"'.date("dmy").'".xls"');
header('Cache-Control: max-age=0');
 
//isi file excel (pakai tabel)


/* ambil data tanggal  */
$TglStart =$_POST['cmbTglStart'];
$TglEnd =$_POST['cmbTglEnd'];

$queryNamakb="select nama from infokb";
$cariNamakb=mysql_query($queryNamakb); //ambil data hgr dari database
$dataNamakb=mysql_fetch_array($cariNamakb);
	 	
echo "<tr>
  <td bgcolor=\"#99CCFF\"><div align=\"left\">LAPORAN POSISI BARANG DALAM PROSES</div></td>
  </tr>
  <tr>
  <td bgcolor=\"#99CCFF\"><div align=\"left\">KAWASAN BERIKAT ".strtoupper($dataNamakb['nama'])."</div></td>
  </tr>
  <tr>
  <td bgcolor=\"#99CCFF\"><div align=\"left\">PERIODE $TglStart s/d $TglEnd </div></td>
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
  <td><div align=\"center\">Jumlah</div></td>
  <td><div align=\"left\">Keterangan</div></td>
  </tr>
  </table>
  ";

	
	$query = "SELECT T1.kd_barang, T1.nm_barang, T1.satuan,T1.kd_kategori, T2.*, 
	SUM(T2.jumlah) As total
		 FROM produksi_terima_detail As T2 inner join barang as T1 on T2.kode = T1.kd_barang
		 WHERE T1.kd_kategori='K01'
		 AND T2.tgl_lpb BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."'
		 GROUP BY T1.kd_barang
		 ORDER BY T2.nomor ASC ";
	
$cari=mysql_query($query); //ambil data hgr dari database
$nomor = 0;
while($dataRow=mysql_fetch_array($cari))
	{
		$nomor++;
  echo "<table width=\"558\" cellpadding=\"0\" cellspacing=\"0\" border=\"1\">
    
  <tr>
  <td align='center'>".$nomor."</td>
  <td align='left'>".$dataRow['kode']."</td>
  <td align='left'>".$dataRow['nm_barang']."</td>
  <td align='center'>".$dataRow['satuan']."</td>
  <td align='right'>".format_angka($dataRow['total'])."</td>
  <td align='left'>".$dataRow['ket']."</td>
  </tr>
  </table>
  ";
  }
?>