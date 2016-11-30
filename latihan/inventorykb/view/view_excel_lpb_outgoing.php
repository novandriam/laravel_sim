<?php
include_once "../library/inc.connection.php";
include_once "../library/inc.library.php";
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="lpb_outgoing-pertgllpb"'.date("dmy").'".xls"');
header('Cache-Control: max-age=0');
 

//isi file excel (pakai tabel)


/* ambil data tanggal  */
$TglStart =$_POST['cmbTglStart'];
$TglEnd =$_POST['cmbTglEnd'];

$queryNamakb="select nama from infokb";
$cariNamakb=mysql_query($queryNamakb); //ambil data hgr dari database
$dataNamakb=mysql_fetch_array($cariNamakb);
	 	
echo "<tr>
  </tr>
  <tr>
  <td bgcolor=\"#99CCFF\"><div align=\"left\">KAWASAN BERIKAT ".strtoupper($dataNamakb['nama'])."</div></td>
  </tr>
  <tr>
  <td bgcolor=\"#99CCFF\"><div align=\"left\">LAPORAN PENERIMAAN BARANG (OUTGOING) PER TANGGAL LPB</div></td>
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
  <td rowspan=\"2\"><div valign=\"middle\" align=\"center\">No.</div></td>
  <td colspan=\"2\" ><div align=\"center\">LPB</div></td>
  <td rowspan=\"2\" ><div align=\"center\">Dari</div></td>
  <td colspan=\"2\" ><div align=\"center\">SPB</div></td>
  <td rowspan=\"2\" ><div align=\"center\">Kode barang</div></td>
  <td rowspan=\"2\" ><div align=\"center\">Nama barang</div></td>
  <td rowspan=\"2\" ><div align=\"center\">Satuan</div></td>
  <td rowspan=\"2\" ><div align=\"center\">Jumlah</div></td>
  </tr>
  <tr>
  <td><div align=\"center\">Nomor</div></td>
  <td><div align=\"center\">Tanggal</div></td>
  <td><div align=\"center\">Nomor</div></td>
  <td><div align=\"center\">Tanggal</div></td>

  </tr>
  </table>
  ";

	$query="SELECT T1.kd_barang, T1.nm_barang, T1.satuan, T2.nomor, T2.no_lpb, T2.tgl_lpb, T2.dari, T2.no_spb, T2.tgl_spb, T3.nomor, T3.kode, T3.jumlah 
	FROM outgoing_terima_detail As T3 inner join outgoing_terima As T2 on T3.nomor=T2.nomor inner join barang As T1 on T3.kode = T1.kd_barang
	WHERE  T2.tgl_lpb BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' 
	ORDER BY T2.nomor ASC";
$cari=mysql_query($query); //ambil data hgr dari database
$nomor = 0;
while($dataRow=mysql_fetch_array($cari))
	{
		$nomor++;
  echo "<table width=\"458\" cellpadding=\"0\" cellspacing=\"0\" border=\"1\">
    
  <tr>
  <td align='center'>".$nomor."</td>
  <td align='left'>".$dataRow['no_lpb']."</td>
  <td align='center'>".IndonesiaTgl($dataRow['tgl_lpb'])."</td>
  <td align='left'>".$dataRow['dari']."</td>
  <td align='left'>".$dataRow['no_spb']."</td>
  <td align='center'>".IndonesiaTgl($dataRow['tgl_spb'])."</td>
  <td align='left'>".$dataRow['kode']."</td>
  <td align='left'>".$dataRow['nm_barang']."</td>
  <td align='center'>".$dataRow['satuan']."</td>
  <td align='right'>".format_angka($dataRow['jumlah'])."</td>
  </tr>
  </table>
  ";
  }
?>