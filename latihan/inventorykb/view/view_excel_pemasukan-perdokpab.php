<?php
include_once "../library/inc.connection.php";
include_once "../library/inc.library.php";
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="laporan_pemasukan-perdokpab"'.date("dmy").'".xls"');
header('Cache-Control: max-age=0');
 

//isi file excel (pakai tabel)


/* ambil data tanggal  */
$TglStart =$_POST['cmbTglStart'];
$TglEnd =$_POST['cmbTglEnd'];

$queryNamakb="select nama from infokb";
$cariNamakb=mysql_query($queryNamakb); //ambil data hgr dari database
$dataNamakb=mysql_fetch_array($cariNamakb);
	 	
echo "<tr>
  <td bgcolor=\"#99CCFF\"><div align=\"left\">LAPORAN PEMASUKAN BARANG PER DOKUMEN PABEAN</div></td>
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
  <td rowspan=\"2\"><div valign=\"middle\" align=\"center\">No.</div></td>
  <td colspan=\"3\" ><div align=\"center\">Dokumen Pabean</div></td>
  <td colspan=\"2\" ><div align=\"center\">Bukti Penerimaan Barang</div></td>
  <td rowspan=\"2\" ><div align=\"center\">Pemasok/Pengirim</div></td>
  <td rowspan=\"2\" ><div align=\"center\">Kode barang</div></td>
  <td rowspan=\"2\" ><div align=\"center\">Nama barang</div></td>
  <td rowspan=\"2\" ><div align=\"center\">Satuan</div></td>
  <td rowspan=\"2\" ><div align=\"center\">Jumlah</div></td>
  <td rowspan=\"2\" ><div align=\"center\">Nilai barang</div></td>
  </tr>
  <tr>
  <td><div align=\"center\">Jenis</div></td>
  <td><div align=\"center\">Nomor</div></td>
  <td><div align=\"center\">Tanggal</div></td>
  <td><div align=\"center\">Nomor</div></td>
  <td><div align=\"center\">Tanggal</div></td>

  </tr>
  </table>
  ";

	$query="SELECT barang.kd_barang, barang.nm_barang, barang.satuan, pemasukan.nomor, pemasukan.no_bpb, pemasukan.tgl_bpb, pemasukan.pemasok, pemasukan.jenis_dokpab, pemasukan.no_dokpab, pemasukan.tgl_dokpab, pemasukan_detail.nomor, pemasukan_detail.kode, pemasukan_detail.jumlah, pemasukan_detail.valuta, pemasukan_detail.nilai, pemasok.kode_pemasok, pemasok.nama 
	FROM pemasukan inner join pemasukan_detail on pemasukan.nomor=pemasukan_detail.nomor inner join pemasok on pemasukan.pemasok=pemasok.kode_pemasok inner join barang on pemasukan_detail.kode=barang.kd_barang
	WHERE pemasukan.tgl_dokpab BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' 
	ORDER BY pemasukan.nomor ASC";  
$cari=mysql_query($query) or die ("Query ambil data salah : ".mysql_error()); //ambil data hgr dari database
$nomor = 0;
while($dataRow=mysql_fetch_array($cari))
	{
		$nomor++;
  echo "<table width=\"458\" cellpadding=\"0\" cellspacing=\"0\" border=\"1\">
    
  <tr>
  <td align='center'>".$nomor."</td>
  <td align='center'>".$dataRow['jenis_dokpab']."</td>
  <td align='center'>".format_nomor($dataRow['no_dokpab'])."</td>
  <td align='center'>".IndonesiaTgl($dataRow['tgl_dokpab'])."</td>
  <td align='left'>".$dataRow['no_bpb']."</td>
  <td align='center'>".IndonesiaTgl($dataRow['tgl_bpb'])."</td>
  <td align='left'>".$dataRow['nama']."</td>
  <td align='left'>".$dataRow['kode']."</td>
  <td align='left'>".$dataRow['nm_barang']."</td>
  <td align='center'>".$dataRow['satuan']."</td>
  <td align='right'>".format_angka($dataRow['jumlah'])."</td>
  <td>".$dataRow['valuta']."&nbsp;".format_angka($dataRow['nilai'])."</td>
  </tr>
  </table>
  ";
  }
?>