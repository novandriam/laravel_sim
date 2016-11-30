<?php
include_once "../library/inc.connection.php";
include_once "../library/inc.library.php";
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="laporan_pemasukan-pertglbpb"'.date("dmy").'".xls"');
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
  <td bgcolor=\"#99CCFF\"><div align=\"left\">LAPORAN PEMASUKAN BARANG PER TANGGAL BPB</div></td>
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
  <td rowspan=\"2\" ><div align=\"center\">Sat</div></td>
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

	$query="SELECT T1.kd_barang, T1.nm_barang, T1.satuan, T2.nomor, T2.no_bpb, T2.tgl_bpb, T2.pemasok, T2.jenis_dokpab, T2.no_dokpab, T2.tgl_dokpab, T3.nomor, T3.kode, T3.jumlah, T3.valuta, T3.nilai, T4.kode_pemasok, T4.nama 
	FROM pemasukan As T2 inner join pemasukan_detail As T3 on T2.nomor = T3.nomor inner join pemasok as T4 on T2.pemasok = T4.kode_pemasok inner join barang as T1 on T3.kode=T1.kd_barang
	WHERE T2.tgl_bpb BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' 
	ORDER BY T2.nomor ASC";
$cari=mysql_query($query); //ambil data hgr dari database
$nomor = 0;
while($dataRow=mysql_fetch_array($cari))
	{
		$nomor++;
  echo "<table width=\"458\" cellpadding=\"0\" cellspacing=\"0\" border=\"1\">
    
  <tr>
  <td align='center'>".$nomor."</td>
  <td align='center'>".$dataRow['jenis_dokpab']."</td>
  <td align='center'>".$dataRow['no_dokpab']."</td>
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