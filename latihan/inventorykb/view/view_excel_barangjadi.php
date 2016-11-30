<?php
include_once "../library/inc.connection.php";
include_once "../library/inc.library.php";
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="laporan_produksi-barangjadi"'.date("dmy").'".xls"');
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
  <td bgcolor=\"#99CCFF\"><div align=\"left\">LAPORAN PRODUKSI BARANG JADI/SCRAP</div></td>
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
  <td colspan=\"2\" ><div align=\"center\">Laporan Produksi</div></td>
  <td rowspan=\"2\" ><div align=\"center\">Departemen</div></td>
  <td rowspan=\"2\" ><div align=\"center\">Project</div></td>
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

	$query="SELECT barang.kd_barang, barang.nm_barang, barang.satuan, brgjadi.nomor, brgjadi.no_bpb, brgjadi.tgl_bpb, brgjadi.project, brgjadi.dept, brgjadi_detail.nomor, brgjadi_detail.kode, brgjadi_detail.jumlah 
	FROM brgjadi_detail inner join brgjadi on brgjadi_detail.nomor=brgjadi.nomor inner join barang on brgjadi_detail.kode=barang.kd_barang 
	WHERE brgjadi.tgl_bpb BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' 
	ORDER BY brgjadi.nomor ASC";
$cari=mysql_query($query); //ambil data hgr dari database
$nomor = 0;
while($dataRow=mysql_fetch_array($cari))
	{
		$nomor++;
  echo "<table width=\"458\" cellpadding=\"0\" cellspacing=\"0\" border=\"1\">
    
  <tr>
  <td align='center'>".$nomor."</td>
  <td align='left'>".$dataRow['no_bpb']."</td>
  <td align='center'>".IndonesiaTgl($dataRow['tgl_bpb'])."</td>
  <td align='left'>".$dataRow['dept']."</td>
  <td align='left'>".$dataRow['project']."</td>
  <td align='left'>".$dataRow['kode']."</td>
  <td align='left'>".$dataRow['nm_barang']."</td>
  <td align='center'>".$dataRow['satuan']."</td>
  <td align='right'>".format_angka($dataRow['jumlah'])."</td>
  </tr>
  </table>
  ";
  }
?>