<?php
include_once "../library/inc.connection.php";
include_once "../library/inc.library.php";
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="laporan_pengiriman_incoming-outgoing"'.date("dmy").'".xls"');
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
  <td bgcolor=\"#99CCFF\"><div align=\"left\">LAPORAN PENGIRIMAN BARANG INCOMING - OUTGOING</div></td>
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
  <td colspan=\"2\" ><div align=\"center\">SPB</div></td>
  <td rowspan=\"2\" ><div align=\"center\">PIC</div></td>
  <td rowspan=\"2\" ><div align=\"center\">Kode barang</div></td>
  <td rowspan=\"2\" ><div align=\"center\">Nama barang</div></td>
  <td rowspan=\"2\" ><div align=\"center\">Satuan</div></td>
  <td rowspan=\"2\" ><div align=\"center\">Jumlah</div></td>
  </tr>
  <tr>
  <td><div align=\"center\">Nomor</div></td>
  <td><div align=\"center\">Tanggal</div></td>

  </tr>
  </table>
  ";

	$query="SELECT barang.kd_barang, barang.nm_barang, barang.satuan, incoming_outgoing.nomor, incoming_outgoing.no_spb, incoming_outgoing.tgl_spb, incoming_outgoing.name_ppc, incoming_outgoing_detail.nomor, incoming_outgoing_detail.kode, incoming_outgoing_detail.jumlah	 
	FROM incoming_outgoing_detail inner join incoming_outgoing on incoming_outgoing_detail.nomor=incoming_outgoing.nomor inner join barang on incoming_outgoing_detail.kode=barang.kd_barang 
	WHERE incoming_outgoing.tgl_spb BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' 
	ORDER BY incoming_outgoing.nomor ASC";
$cari=mysql_query($query); //ambil data hgr dari database
$nomor = 0;
while($dataRow=mysql_fetch_array($cari))
	{
		$nomor++;
  echo "<table width=\"458\" cellpadding=\"0\" cellspacing=\"0\" border=\"1\">
    
  <tr>
  <td align='center'>".$nomor."</td>
  <td align='left'>".$dataRow['no_spb']."</td>
  <td align='center'>".IndonesiaTgl($dataRow['tgl_spb'])."</td>
  <td align='left'>".$dataRow['name_ppc']."</td>
  <td align='left'>".$dataRow['kode']."</td>
  <td align='left'>".$dataRow['nm_barang']."</td>
  <td align='center'>".$dataRow['satuan']."</td>
  <td align='right'>".format_angka($dataRow['jumlah'])."</td>
  </tr>
  </table>
  ";
  }
?>