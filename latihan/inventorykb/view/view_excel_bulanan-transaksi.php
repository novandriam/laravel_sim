<?php
include_once "../library/inc.connection.php";
include_once "../library/inc.library.php";
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="laporan_bulanan-transaksi"'.date("dmy").'".xls"');
header('Cache-Control: max-age=0');
 
//isi file excel (pakai tabel)

/* ambil data tanggal  */
$TglStart =$_POST['cmbTglStart'];
$TglEnd =$_POST['cmbTglEnd'];

$queryNamakb="select nama,npwp,kota from infokb";
$cariNamakb=mysql_query($queryNamakb); //ambil data hgr dari database
$dataNamakb=mysql_fetch_array($cariNamakb);
	 	
echo "<tr>
  </tr>
  
  <tr>
  <td bgcolor=\"#99CCFF\"><div align=\"left\">DEPARTEMEN KEUANGAN REPUBLIK INDONESIA</div></td>
  </tr>
   <tr>
  <td bgcolor=\"#99CCFF\"><div align=\"left\">DIREKTORAT JENDERAL BEA DAN CUKAI</div></td>
  </tr>
   <tr>
  <td bgcolor=\"#99CCFF\"><div align=\"left\">KANTOR WILAYAH JAWA BARAT</div></td>
  </tr>
   <tr>
  <td bgcolor=\"#99CCFF\"><div align=\"left\">KANTOR PENGAWASAN DAN PELAYANAN TIPE MADYA PABEAN A BEKASI</div></td>
  </tr>
 <tr>
  <td>&nbsp;</td>
    </tr> 
	
	
  <tr>
  <td colspan=\"12\"><div align=\"center\"><b>LAPORAN TRANSAKSI KEGIATAN PEMASUKAN DAN PENGELUARAN KB</b></div></td>
  </tr>
  <tr>
  <td colspan=\"12\"><div align=\"center\">PERIODE $TglStart S.D $TglEnd </div></td>
  </tr>
 
  <tr>
  <td>&nbsp;</td>
    </tr> 
  ";
  

echo "<table width=\"1058\" cellpadding=\"0\" cellspacing=\"0\" border=\"1\">
  <tr>
  <td rowspan=\"3\"><div valign=\"middle\" align=\"center\">&nbsp;&nbsp;No.&nbsp;&nbsp;</div></td>
  <td rowspan=\"3\"><div valign=\"middle\" align=\"center\">Nama Perusahaan</div></td>
  <td rowspan=\"3\"><div valign=\"middle\" align=\"center\">NPWP</div></td>
  <td rowspan=\"3\" colspan=\"2\" ><div valign=\"middle\" align=\"center\">Nama Dokumen</div></td>
  <td rowspan=\"3\"><div valign=\"middle\" align=\"center\">Kodifikasi Dokumen</div></td>
  <td rowspan=\"3\"><div valign=\"middle\" align=\"center\">Jumlah Dokumen</div></td>
  <td rowspan=\"3\"><div valign=\"middle\" align=\"center\">Jumlah Item Barang</div></td>
  <td colspan=\"2\" ><div align=\"center\">PEMASUKAN</div></td>
  <td colspan=\"2\" ><div align=\"center\">PENGELUARAN</div></td>
  </tr>
  <tr>
  <td><div align=\"center\">&nbsp;&nbsp;Nilai Devisa&nbsp;&nbsp;</div></td>
  <td><div align=\"center\">&nbsp;&nbsp;Netto&nbsp;&nbsp;</div></td>
  <td><div align=\"center\">&nbsp;&nbsp;Nilai Devisa&nbsp;&nbsp;</div></td>
  <td><div align=\"center\">&nbsp;&nbsp;Netto&nbsp;&nbsp;</div></td>
  </tr>
  <tr>
  <td><div align=\"center\">&nbsp;&nbsp;(USD/Rp)&nbsp;&nbsp;</div></td>
  <td><div align=\"center\">&nbsp;&nbsp;Kg&nbsp;&nbsp;</div></td>
  <td><div align=\"center\">&nbsp;&nbsp;(USD/Rp)&nbsp;&nbsp;</div></td>
  <td><div align=\"center\">&nbsp;&nbsp;Kg&nbsp;&nbsp;</div></td>
  </tr>

  </table>
  ";
//untuk mendapatkan hasil butir (1) yaitu dari CAT-0001 + CAT-0002
$query1 ="SELECT COUNT(nomor) As jmldok1, SUM(harga) as jmlharga1, SUM(netto) as jmlnetto1 FROM pemasukan where tgl_bpb BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' 
                                         and catatan='CAT-0001'";
		$tmpQry1 = mysql_query($query1, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rquery1 = mysql_fetch_array($tmpQry1);
$query2 ="SELECT COUNT(nomor) As jmldok2, SUM(harga) as jmlharga2, SUM(netto) as jmlnetto2 FROM pemasukan where tgl_bpb BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' 
                                         and catatan='CAT-0002'";
		$tmpQry2 = mysql_query($query2, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rquery2 = mysql_fetch_array($tmpQry2);

$queryBrg1 ="SELECT pemasukan.nomor, pemasukan.tgl_bpb, pemasukan.catatan, SUM(pemasukan_detail.jumlah) as jmlbrg1 FROM pemasukan,pemasukan_detail where pemasukan.tgl_bpb BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' and pemasukan.nomor=pemasukan_detail.nomor
                                         and pemasukan.catatan='CAT-0001' group by pemasukan.catatan";
		$tmpQryBrg1 = mysql_query($queryBrg1, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rqueryBrg1 = mysql_fetch_array($tmpQryBrg1);

$queryBrg2 ="SELECT pemasukan.nomor, pemasukan.tgl_bpb, pemasukan.catatan, SUM(pemasukan_detail.jumlah) as jmlbrg2 FROM pemasukan,pemasukan_detail where pemasukan.tgl_bpb BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' and pemasukan.nomor=pemasukan_detail.nomor
                                         and pemasukan.catatan='CAT-0002' group by pemasukan.catatan";
		$tmpQryBrg2 = mysql_query($queryBrg2, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rqueryBrg2 = mysql_fetch_array($tmpQryBrg2);

$total_jmldok1 = $rquery1['jmldok1']+$rquery2['jmldok2'];
$total_jmlbrg1 = $rqueryBrg1['jmlbrg1']+$rqueryBrg2['jmlbrg2'];
$total_jmlharga1 = $rquery1['jmlharga1']+$rquery2['jmlharga2'];
$total_jmlnetto1 = $rquery1['jmlnetto1']+$rquery2['jmlnetto2'];

//untuk mendapatkan hasil butir (2) yaitu dari CAT-0003
$query3 ="SELECT COUNT(nomor) As jmldok3, SUM(harga) as jmlharga3, SUM(netto) as jmlnetto3 FROM pemasukan where tgl_bpb BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' 
                                         and catatan='CAT-0003'";
		$tmpQry3 = mysql_query($query3, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rquery3 = mysql_fetch_array($tmpQry3);

$queryBrg3 ="SELECT pemasukan.nomor, pemasukan.tgl_bpb, pemasukan.catatan, SUM(pemasukan_detail.jumlah) as jmlbrg3 FROM pemasukan,pemasukan_detail where pemasukan.tgl_bpb BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' and pemasukan.nomor=pemasukan_detail.nomor
                                         and pemasukan.catatan='CAT-0003' group by pemasukan.catatan";
		$tmpQryBrg3 = mysql_query($queryBrg3, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rqueryBrg3 = mysql_fetch_array($tmpQryBrg3);
$total_jmldok2 = $rquery3['jmldok3'];
$total_jmlbrg2 = $rqueryBrg3['jmlbrg3'];
$total_jmlharga2 = $rquery3['jmlharga3'];
$total_jmlnetto2 = $rquery3['jmlnetto3'];

//untuk mendapatkan hasil butir (3) yaitu dari CAT-0004
$query4 ="SELECT COUNT(nomor) As jmldok4, SUM(harga) as jmlharga4, SUM(netto) as jmlnetto4 FROM pemasukan where tgl_bpb BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' 
                                         and catatan='CAT-0004'";
		$tmpQry4 = mysql_query($query4, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rquery4 = mysql_fetch_array($tmpQry4);

$queryBrg4 ="SELECT pemasukan.nomor, pemasukan.tgl_bpb, pemasukan.catatan, SUM(pemasukan_detail.jumlah) as jmlbrg4 FROM pemasukan,pemasukan_detail where pemasukan.tgl_bpb BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' and pemasukan.nomor=pemasukan_detail.nomor
                                         and pemasukan.catatan='CAT-0004' group by pemasukan.catatan";
		$tmpQryBrg4 = mysql_query($queryBrg4, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rqueryBrg4 = mysql_fetch_array($tmpQryBrg4);
$total_jmldok3 = $rquery4['jmldok4'];
$total_jmlbrg3 = $rqueryBrg4['jmlbrg4'];
$total_jmlharga3 = $rquery4['jmlharga4'];
$total_jmlnetto3 = $rquery4['jmlnetto4'];

//untuk mendapatkan hasil butir (4) yaitu dari CAT-0005 + CAT-0006 + CAT-0007 + CAT-0008 + CAT-0009
$query5 ="SELECT COUNT(nomor) As jmldok5, SUM(harga) as jmlharga5, SUM(netto) as jmlnetto5 FROM pemasukan where tgl_bpb BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' 
                                         and catatan='CAT-0005'";
		$tmpQry5 = mysql_query($query5, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rquery5 = mysql_fetch_array($tmpQry5);
$query6 ="SELECT COUNT(nomor) As jmldok6, SUM(harga) as jmlharga6, SUM(netto) as jmlnetto6 FROM pemasukan where tgl_bpb BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' 
                                         and catatan='CAT-0006'";
		$tmpQry6 = mysql_query($query6, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rquery6 = mysql_fetch_array($tmpQry6);
$query7 ="SELECT COUNT(nomor) As jmldok7, SUM(harga) as jmlharga7, SUM(netto) as jmlnetto7 FROM pemasukan where tgl_bpb BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' 
                                         and catatan='CAT-0007'";
		$tmpQry7 = mysql_query($query7, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rquery7 = mysql_fetch_array($tmpQry7);
$query8 ="SELECT COUNT(nomor) As jmldok8, SUM(harga) as jmlharga8, SUM(netto) as jmlnetto8 FROM pemasukan where tgl_bpb BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' 
                                         and catatan='CAT-0008'";
		$tmpQry8 = mysql_query($query8, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rquery8 = mysql_fetch_array($tmpQry8);
$query9 ="SELECT COUNT(nomor) As jmldok9, SUM(harga) as jmlharga9, SUM(netto) as jmlnetto9 FROM pemasukan where tgl_bpb BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' 
                                         and catatan='CAT-0009'";
		$tmpQry9 = mysql_query($query9, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rquery9 = mysql_fetch_array($tmpQry9);

$queryBrg5 ="SELECT pemasukan.nomor, pemasukan.tgl_bpb, pemasukan.catatan, SUM(pemasukan_detail.jumlah) as jmlbrg5 FROM pemasukan,pemasukan_detail where pemasukan.tgl_bpb BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' and pemasukan.nomor=pemasukan_detail.nomor
                                         and pemasukan.catatan='CAT-0005' group by pemasukan.catatan";
		$tmpQryBrg5 = mysql_query($queryBrg5, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rqueryBrg5 = mysql_fetch_array($tmpQryBrg5);

$queryBrg6 ="SELECT pemasukan.nomor, pemasukan.tgl_bpb, pemasukan.catatan, SUM(pemasukan_detail.jumlah) as jmlbrg6 FROM pemasukan,pemasukan_detail where pemasukan.tgl_bpb BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' and pemasukan.nomor=pemasukan_detail.nomor
                                         and pemasukan.catatan='CAT-0006' group by pemasukan.catatan";
		$tmpQryBrg6 = mysql_query($queryBrg6, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rqueryBrg6 = mysql_fetch_array($tmpQryBrg6);
$queryBrg7 ="SELECT pemasukan.nomor, pemasukan.tgl_bpb, pemasukan.catatan, SUM(pemasukan_detail.jumlah) as jmlbrg7 FROM pemasukan,pemasukan_detail where pemasukan.tgl_bpb BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' and pemasukan.nomor=pemasukan_detail.nomor
                                         and pemasukan.catatan='CAT-0007' group by pemasukan.catatan";
		$tmpQryBrg7 = mysql_query($queryBrg7, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rqueryBrg7 = mysql_fetch_array($tmpQryBrg7);
$queryBrg8 ="SELECT pemasukan.nomor, pemasukan.tgl_bpb, pemasukan.catatan, SUM(pemasukan_detail.jumlah) as jmlbrg8 FROM pemasukan,pemasukan_detail where pemasukan.tgl_bpb BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' and pemasukan.nomor=pemasukan_detail.nomor
                                         and pemasukan.catatan='CAT-0008' group by pemasukan.catatan";
		$tmpQryBrg8 = mysql_query($queryBrg8, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rqueryBrg8 = mysql_fetch_array($tmpQryBrg8);
$queryBrg9 ="SELECT pemasukan.nomor, pemasukan.tgl_bpb, pemasukan.catatan, SUM(pemasukan_detail.jumlah) as jmlbrg9 FROM pemasukan,pemasukan_detail where pemasukan.tgl_bpb BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' and pemasukan.nomor=pemasukan_detail.nomor
                                         and pemasukan.catatan='CAT-0009' group by pemasukan.catatan";
		$tmpQryBrg9 = mysql_query($queryBrg9, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rqueryBrg9 = mysql_fetch_array($tmpQryBrg9);

$total_jmldok4 = $rquery5['jmldok5']+$rquery6['jmldok6']+$rquery7['jmldok7']+$rquery8['jmldok8']+$rquery9['jmldok9'];
$total_jmlbrg4 = $rqueryBrg5['jmlbrg5']+$rqueryBrg6['jmlbrg6']+$rqueryBrg7['jmlbrg7']+$rqueryBrg8['jmlbrg8']+$rqueryBrg9['jmlbrg9'];
$total_jmlharga4 = $rquery5['jmlharga5']+$rquery6['jmlharga6']+$rquery7['jmlharga7']+$rquery8['jmlharga8']+$rquery9['jmlharga9'];
$total_jmlnetto4 = $rquery5['jmlnetto5']+$rquery6['jmlnetto6']+$rquery7['jmlnetto7']+$rquery8['jmlnetto8']+$rquery9['jmlnetto9'];

//untuk mendapatkan hasil butir (5) yaitu dari CAT-0010
$query10 ="SELECT COUNT(nomor) As jmldok10, SUM(harga) as jmlharga10, SUM(netto) as jmlnetto10 FROM pemasukan where tgl_bpb BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' 
                                         and catatan='CAT-0010'";
		$tmpQry10 = mysql_query($query10, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rquery10 = mysql_fetch_array($tmpQry10);

$queryBrg10 ="SELECT pemasukan.nomor, pemasukan.tgl_bpb, pemasukan.catatan, SUM(pemasukan_detail.jumlah) as jmlbrg10 FROM pemasukan,pemasukan_detail where pemasukan.tgl_bpb BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' and pemasukan.nomor=pemasukan_detail.nomor
                                         and pemasukan.catatan='CAT-0010' group by pemasukan.catatan";
		$tmpQryBrg10 = mysql_query($queryBrg10, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rqueryBrg10 = mysql_fetch_array($tmpQryBrg10);
$total_jmldok5 = $rquery10['jmldok10'];
$total_jmlbrg5 = $rqueryBrg10['jmlbrg10'];
$total_jmlharga5 = $rquery10['jmlharga10'];
$total_jmlnetto5 = $rquery10['jmlnetto10'];

//untuk mendapatkan hasil butir (6) yaitu dari CAT-0011
$query11 ="SELECT COUNT(nomor) As jmldok11, SUM(harga) as jmlharga11, SUM(netto) as jmlnetto11 FROM pemasukan where tgl_bpb BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' 
                                         and catatan='CAT-0011'";
		$tmpQry11 = mysql_query($query11, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rquery11 = mysql_fetch_array($tmpQry11);

$queryBrg11 ="SELECT pemasukan.nomor, pemasukan.tgl_bpb, pemasukan.catatan, SUM(pemasukan_detail.jumlah) as jmlbrg11 FROM pemasukan,pemasukan_detail where pemasukan.tgl_bpb BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' and pemasukan.nomor=pemasukan_detail.nomor
                                         and pemasukan.catatan='CAT-0011' group by pemasukan.catatan";
		$tmpQryBrg11 = mysql_query($queryBrg11, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rqueryBrg11 = mysql_fetch_array($tmpQryBrg11);
$total_jmldok6 = $rquery11['jmldok11'];
$total_jmlbrg6 = $rqueryBrg11['jmlbrg11'];
$total_jmlharga6 = $rquery11['jmlharga11'];
$total_jmlnetto6 = $rquery11['jmlnetto11'];

//untuk mendapatkan hasil butir (7) yaitu dari CAT-0015
$query15 ="SELECT COUNT(nomor) As jmldok15, SUM(harga) as jmlharga15, SUM(netto) as jmlnetto15 FROM pemasukan where tgl_bpb BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' 
                                         and catatan='CAT-0015'";
		$tmpQry15 = mysql_query($query15, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rquery15 = mysql_fetch_array($tmpQry15);

$queryBrg15 ="SELECT pemasukan.nomor, pemasukan.tgl_bpb, pemasukan.catatan, SUM(pemasukan_detail.jumlah) as jmlbrg15 FROM pemasukan,pemasukan_detail where pemasukan.tgl_bpb BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' and pemasukan.nomor=pemasukan_detail.nomor
                                         and pemasukan.catatan='CAT-0015' group by pemasukan.catatan";
		$tmpQryBrg15 = mysql_query($queryBrg15, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rqueryBrg15 = mysql_fetch_array($tmpQryBrg15);
$total_jmldok7 = $rquery15['jmldok15'];
$total_jmlbrg7 = $rqueryBrg15['jmlbrg15'];
$total_jmlharga7 = $rquery15['jmlharga15'];
$total_jmlnetto7 = $rquery15['jmlnetto15'];

//untuk mendapatkan hasil butir (8) yaitu dari CAT-0012 + CAT-0013 + CAT-0014
$query12 ="SELECT COUNT(nomor) As jmldok12, SUM(harga) as jmlharga12, SUM(netto) as jmlnetto12 FROM pemasukan where tgl_bpb BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' 
                                         and catatan='CAT-0012'";
		$tmpQry12 = mysql_query($query12, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rquery12 = mysql_fetch_array($tmpQry12);

$query13 ="SELECT COUNT(nomor) As jmldok13, SUM(harga) as jmlharga13, SUM(netto) as jmlnetto13 FROM pemasukan where tgl_bpb BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' 
                                         and catatan='CAT-0013'";
		$tmpQry13 = mysql_query($query13, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rquery13 = mysql_fetch_array($tmpQry13);
$query14 ="SELECT COUNT(nomor) As jmldok14, SUM(harga) as jmlharga14, SUM(netto) as jmlnetto14 FROM pemasukan where tgl_bpb BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' 
                                         and catatan='CAT-0014'";
		$tmpQry14 = mysql_query($query14, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rquery14 = mysql_fetch_array($tmpQry14);

$queryBrg12 ="SELECT pemasukan.nomor, pemasukan.tgl_bpb, pemasukan.catatan, SUM(pemasukan_detail.jumlah) as jmlbrg12 FROM pemasukan,pemasukan_detail where pemasukan.tgl_bpb BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' and pemasukan.nomor=pemasukan_detail.nomor
                                         and pemasukan.catatan='CAT-0012' group by pemasukan.catatan";
		$tmpQryBrg12 = mysql_query($queryBrg12, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rqueryBrg12 = mysql_fetch_array($tmpQryBrg12);

$queryBrg13 ="SELECT pemasukan.nomor, pemasukan.tgl_bpb, pemasukan.catatan, SUM(pemasukan_detail.jumlah) as jmlbrg13 FROM pemasukan,pemasukan_detail where pemasukan.tgl_bpb BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' and pemasukan.nomor=pemasukan_detail.nomor
                                         and pemasukan.catatan='CAT-0013' group by pemasukan.catatan";
		$tmpQryBrg13 = mysql_query($queryBrg13, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rqueryBrg13 = mysql_fetch_array($tmpQryBrg13);

$queryBrg14 ="SELECT pemasukan.nomor, pemasukan.tgl_bpb, pemasukan.catatan, SUM(pemasukan_detail.jumlah) as jmlbrg14 FROM pemasukan,pemasukan_detail where pemasukan.tgl_bpb BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' and pemasukan.nomor=pemasukan_detail.nomor
                                         and pemasukan.catatan='CAT-0014' group by pemasukan.catatan";
		$tmpQryBrg14 = mysql_query($queryBrg14, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rqueryBrg14 = mysql_fetch_array($tmpQryBrg14);

$total_jmldok8 = $rquery12['jmldok12']+$rquery13['jmldok13']+$rquery14['jmldok14'];
$total_jmlbrg8 = $rqueryBrg12['jmlbrg12']+$rqueryBrg13['jmlbrg13']+$rqueryBrg14['jmlbrg14'];
$total_jmlharga8 = $rquery12['jmlharga12']+$rquery13['jmlharga13']+$rquery14['jmlharga14'];
$total_jmlnetto8 = $rquery12['jmlnetto12']+$rquery13['jmlnetto13']+$rquery14['jmlnetto14'];

//untuk mendapatkan hasil butir (9) yaitu dari CAT-0016
$query16 ="SELECT COUNT(nomor) As jmldok16, SUM(harga) as jmlharga16, SUM(netto) as jmlnetto16 FROM pengeluaran where tgl_sj BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' 
                                         and catatan='CAT-0016'";
		$tmpQry16 = mysql_query($query16, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rquery16 = mysql_fetch_array($tmpQry16);

$queryBrg16 ="SELECT pengeluaran.nomor, pengeluaran.tgl_sj, pengeluaran.catatan, SUM(pengeluaran_detail.jumlah) as jmlbrg16 FROM pengeluaran,pengeluaran_detail where pengeluaran.tgl_sj BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' and pengeluaran.nomor=pengeluaran_detail.nomor
                                         and pengeluaran.catatan='CAT-0016' group by pengeluaran.catatan";
		$tmpQryBrg16 = mysql_query($queryBrg16, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rqueryBrg16 = mysql_fetch_array($tmpQryBrg16);
$total_jmldok9 = $rquery16['jmldok16'];
$total_jmlbrg9 = $rqueryBrg16['jmlbrg16'];
$total_jmlharga9 = $rquery16['jmlharga16'];
$total_jmlnetto9 = $rquery16['jmlnetto16'];

//untuk mendapatkan hasil butir (10) yaitu dari CAT-0017
$query17 ="SELECT COUNT(nomor) As jmldok17, SUM(harga) as jmlharga17, SUM(netto) as jmlnetto17 FROM pengeluaran where tgl_sj BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' 
                                         and catatan='CAT-0017'";
		$tmpQry17 = mysql_query($query17, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rquery17 = mysql_fetch_array($tmpQry17);

$queryBrg17 ="SELECT pengeluaran.nomor, pengeluaran.tgl_sj, pengeluaran.catatan, SUM(pengeluaran_detail.jumlah) as jmlbrg17 FROM pengeluaran,pengeluaran_detail where pengeluaran.tgl_sj BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' and pengeluaran.nomor=pengeluaran_detail.nomor
                                         and pengeluaran.catatan='CAT-0017' group by pengeluaran.catatan";
		$tmpQryBrg17 = mysql_query($queryBrg17, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rqueryBrg17 = mysql_fetch_array($tmpQryBrg17);
$total_jmldok10 = $rquery17['jmldok17'];
$total_jmlbrg10 = $rqueryBrg17['jmlbrg17'];
$total_jmlharga10 = $rquery17['jmlharga17'];
$total_jmlnetto10 = $rquery17['jmlnetto17'];

//untuk mendapatkan hasil butir (11) yaitu dari CAT-0018+CAT-0019+CAT-0020+CAT-0021+CAT-0022
$query18 ="SELECT COUNT(nomor) As jmldok18, SUM(harga) as jmlharga18, SUM(netto) as jmlnetto18 FROM pengeluaran where tgl_sj BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' 
                                         and catatan='CAT-0018'";
		$tmpQry18 = mysql_query($query18, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rquery18 = mysql_fetch_array($tmpQry18);
$query19 ="SELECT COUNT(nomor) As jmldok19, SUM(harga) as jmlharga19, SUM(netto) as jmlnetto19 FROM pengeluaran where tgl_sj BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' 
                                         and catatan='CAT-0019'";
		$tmpQry19 = mysql_query($query19, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rquery19 = mysql_fetch_array($tmpQry19);
$query20 ="SELECT COUNT(nomor) As jmldok20, SUM(harga) as jmlharga20, SUM(netto) as jmlnetto20 FROM pengeluaran where tgl_sj BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' 
                                         and catatan='CAT-0020'";
		$tmpQry20 = mysql_query($query20, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rquery20 = mysql_fetch_array($tmpQry20);
$query21 ="SELECT COUNT(nomor) As jmldok21, SUM(harga) as jmlharga21, SUM(netto) as jmlnetto21 FROM pengeluaran where tgl_sj BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' 
                                         and catatan='CAT-0021'";
		$tmpQry21 = mysql_query($query21, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rquery21 = mysql_fetch_array($tmpQry21);
$query22 ="SELECT COUNT(nomor) As jmldok22, SUM(harga) as jmlharga22, SUM(netto) as jmlnetto22 FROM pengeluaran where tgl_sj BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' 
                                         and catatan='CAT-0022'";
		$tmpQry22 = mysql_query($query22, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rquery22 = mysql_fetch_array($tmpQry22);

$queryBrg18 ="SELECT pengeluaran.nomor, pengeluaran.tgl_sj, pengeluaran.catatan, SUM(pengeluaran_detail.jumlah) as jmlbrg18 FROM pengeluaran,pengeluaran_detail where pengeluaran.tgl_sj BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' and pengeluaran.nomor=pengeluaran_detail.nomor
                                         and pengeluaran.catatan='CAT-0018' group by pengeluaran.catatan";
		$tmpQryBrg18 = mysql_query($queryBrg18, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rqueryBrg18 = mysql_fetch_array($tmpQryBrg18);

$queryBrg19 ="SELECT pengeluaran.nomor, pengeluaran.tgl_sj, pengeluaran.catatan, SUM(pengeluaran_detail.jumlah) as jmlbrg19 FROM pengeluaran,pengeluaran_detail where pengeluaran.tgl_sj BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' and pengeluaran.nomor=pengeluaran_detail.nomor
                                         and pengeluaran.catatan='CAT-0019' group by pengeluaran.catatan";
		$tmpQryBrg19 = mysql_query($queryBrg19, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rqueryBrg19 = mysql_fetch_array($tmpQryBrg19);
$queryBrg20 ="SELECT pengeluaran.nomor, pengeluaran.tgl_sj, pengeluaran.catatan, SUM(pengeluaran_detail.jumlah) as jmlbrg20 FROM pengeluaran,pengeluaran_detail where pengeluaran.tgl_sj BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' and pengeluaran.nomor=pengeluaran_detail.nomor
                                         and pengeluaran.catatan='CAT-0020' group by pengeluaran.catatan";
		$tmpQryBrg20 = mysql_query($queryBrg20, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rqueryBrg20 = mysql_fetch_array($tmpQryBrg20);
$queryBrg21 ="SELECT pengeluaran.nomor, pengeluaran.tgl_sj, pengeluaran.catatan, SUM(pengeluaran_detail.jumlah) as jmlbrg21 FROM pengeluaran,pengeluaran_detail where pengeluaran.tgl_sj BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' and pengeluaran.nomor=pengeluaran_detail.nomor
                                         and pengeluaran.catatan='CAT-0021' group by pengeluaran.catatan";
		$tmpQryBrg21 = mysql_query($queryBrg21, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rqueryBrg21 = mysql_fetch_array($tmpQryBrg21);
$queryBrg22 ="SELECT pengeluaran.nomor, pengeluaran.tgl_sj, pengeluaran.catatan, SUM(pengeluaran_detail.jumlah) as jmlbrg22 FROM pengeluaran,pengeluaran_detail where pengeluaran.tgl_sj BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' and pengeluaran.nomor=pengeluaran_detail.nomor
                                         and pengeluaran.catatan='CAT-0022' group by pengeluaran.catatan";
		$tmpQryBrg22 = mysql_query($queryBrg22, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rqueryBrg22 = mysql_fetch_array($tmpQryBrg22);


$total_jmldok11 = $rquery18['jmldok18']+$rquery19['jmldok19']+$rquery20['jmldok20']+$rquery21['jmldok21']+$rquery22['jmldok22'];
$total_jmlbrg11 = $rqueryBrg18['jmlbrg18']+$rqueryBrg19['jmlbrg19']+$rqueryBrg20['jmlbrg20']+$rqueryBrg21['jmlbrg21']+$rqueryBrg22['jmlbrg22'];
$total_jmlharga11 = $rquery18['jmlharga18']+$rquery19['jmlharga19']+$rquery20['jmlharga20']+$rquery21['jmlharga21']+$rquery22['jmlharga22'];
$total_jmlnetto11 = $rquery18['jmlnetto18']+$rquery19['jmlnetto19']+$rquery20['jmlnetto20']+$rquery21['jmlnetto21']+$rquery22['jmlnetto22'];

//untuk mendapatkan hasil butir (12) yaitu dari CAT-0023
$query23 ="SELECT COUNT(nomor) As jmldok23, SUM(harga) as jmlharga23, SUM(netto) as jmlnetto23 FROM pengeluaran where tgl_sj BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' 
                                         and catatan='CAT-0023'";
		$tmpQry23 = mysql_query($query23, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rquery23 = mysql_fetch_array($tmpQry23);

$queryBrg23 ="SELECT pengeluaran.nomor, pengeluaran.tgl_sj, pengeluaran.catatan, SUM(pengeluaran_detail.jumlah) as jmlbrg23 FROM pengeluaran,pengeluaran_detail where pengeluaran.tgl_sj BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' and pengeluaran.nomor=pengeluaran_detail.nomor
                                         and pengeluaran.catatan='CAT-0023' group by pengeluaran.catatan";
		$tmpQryBrg23 = mysql_query($queryBrg23, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rqueryBrg23 = mysql_fetch_array($tmpQryBrg23);
$total_jmldok12 = $rquery23['jmldok23'];
$total_jmlbrg12 = $rqueryBrg23['jmlbrg23'];
$total_jmlharga12 = $rquery23['jmlharga23'];
$total_jmlnetto12 = $rquery23['jmlnetto23'];

//untuk mendapatkan hasil butir (13) yaitu dari CAT-0024
$query24 ="SELECT COUNT(nomor) As jmldok24, SUM(harga) as jmlharga24, SUM(netto) as jmlnetto24 FROM pengeluaran where tgl_sj BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' 
                                         and catatan='CAT-0024'";
		$tmpQry24 = mysql_query($query24, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rquery24 = mysql_fetch_array($tmpQry24);

$queryBrg24 ="SELECT pengeluaran.nomor, pengeluaran.tgl_sj, pengeluaran.catatan, SUM(pengeluaran_detail.jumlah) as jmlbrg24 FROM pengeluaran,pengeluaran_detail where pengeluaran.tgl_sj BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' and pengeluaran.nomor=pengeluaran_detail.nomor
                                         and pengeluaran.catatan='CAT-0024' group by pengeluaran.catatan";
		$tmpQryBrg24 = mysql_query($queryBrg24, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rqueryBrg24 = mysql_fetch_array($tmpQryBrg24);
$total_jmldok13 = $rquery24['jmldok24'];
$total_jmlbrg13 = $rqueryBrg24['jmlbrg24'];
$total_jmlharga13 = $rquery24['jmlharga24'];
$total_jmlnetto13 = $rquery24['jmlnetto24'];

//untuk mendapatkan hasil butir (14) yaitu dari CAT-0029
$query29 ="SELECT COUNT(nomor) As jmldok29, SUM(harga) as jmlharga29, SUM(netto) as jmlnetto29 FROM pengeluaran where tgl_sj BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' 
                                         and catatan='CAT-0029'";
		$tmpQry29 = mysql_query($query29, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rquery29 = mysql_fetch_array($tmpQry29);

$queryBrg29 ="SELECT pengeluaran.nomor, pengeluaran.tgl_sj, pengeluaran.catatan, SUM(pengeluaran_detail.jumlah) as jmlbrg29 FROM pengeluaran,pengeluaran_detail where pengeluaran.tgl_sj BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' and pengeluaran.nomor=pengeluaran_detail.nomor
                                         and pengeluaran.catatan='CAT-0029' group by pengeluaran.catatan";
		$tmpQryBrg29 = mysql_query($queryBrg29, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rqueryBrg29 = mysql_fetch_array($tmpQryBrg29);
$total_jmldok14 = $rquery29['jmldok29'];
$total_jmlbrg14 = $rqueryBrg29['jmlbrg29'];
$total_jmlharga14 = $rquery29['jmlharga29'];
$total_jmlnetto14 = $rquery29['jmlnetto29'];

//untuk mendapatkan hasil butir (15) yaitu dari CAT-0025+CAT-0026+CAT-0027+CAT-0028
$query25 ="SELECT COUNT(nomor) As jmldok25, SUM(harga) as jmlharga25, SUM(netto) as jmlnetto25 FROM pengeluaran where tgl_sj BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' 
                                         and catatan='CAT-0025'";
		$tmpQry25 = mysql_query($query25, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rquery25 = mysql_fetch_array($tmpQry25);
$query26 ="SELECT COUNT(nomor) As jmldok26, SUM(harga) as jmlharga26, SUM(netto) as jmlnetto26 FROM pengeluaran where tgl_sj BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' 
                                         and catatan='CAT-0026'";
		$tmpQry26 = mysql_query($query26, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rquery26 = mysql_fetch_array($tmpQry26);
$query27 ="SELECT COUNT(nomor) As jmldok27, SUM(harga) as jmlharga27, SUM(netto) as jmlnetto27 FROM pengeluaran where tgl_sj BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' 
                                         and catatan='CAT-0027'";
		$tmpQry27 = mysql_query($query27, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rquery27 = mysql_fetch_array($tmpQry27);
$query28 ="SELECT COUNT(nomor) As jmldok28, SUM(harga) as jmlharga28, SUM(netto) as jmlnetto28 FROM pengeluaran where tgl_sj BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' 
                                         and catatan='CAT-0028'";
		$tmpQry28 = mysql_query($query28, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rquery28 = mysql_fetch_array($tmpQry28);


$queryBrg25 ="SELECT pengeluaran.nomor, pengeluaran.tgl_sj, pengeluaran.catatan, SUM(pengeluaran_detail.jumlah) as jmlbrg25 FROM pengeluaran,pengeluaran_detail where pengeluaran.tgl_sj BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' and pengeluaran.nomor=pengeluaran_detail.nomor
                                         and pengeluaran.catatan='CAT-0025' group by pengeluaran.catatan";
		$tmpQryBrg25 = mysql_query($queryBrg25, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rqueryBrg25 = mysql_fetch_array($tmpQryBrg25);

$queryBrg26 ="SELECT pengeluaran.nomor, pengeluaran.tgl_sj, pengeluaran.catatan, SUM(pengeluaran_detail.jumlah) as jmlbrg26 FROM pengeluaran,pengeluaran_detail where pengeluaran.tgl_sj BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' and pengeluaran.nomor=pengeluaran_detail.nomor
                                         and pengeluaran.catatan='CAT-0026' group by pengeluaran.catatan";
		$tmpQryBrg26 = mysql_query($queryBrg26, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rqueryBrg26 = mysql_fetch_array($tmpQryBrg26);
$queryBrg27 ="SELECT pengeluaran.nomor, pengeluaran.tgl_sj, pengeluaran.catatan, SUM(pengeluaran_detail.jumlah) as jmlbrg27 FROM pengeluaran,pengeluaran_detail where pengeluaran.tgl_sj BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' and pengeluaran.nomor=pengeluaran_detail.nomor
                                         and pengeluaran.catatan='CAT-0027' group by pengeluaran.catatan";
		$tmpQryBrg27 = mysql_query($queryBrg27, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rqueryBrg27 = mysql_fetch_array($tmpQryBrg27);
$queryBrg28 ="SELECT pengeluaran.nomor, pengeluaran.tgl_sj, pengeluaran.catatan, SUM(pengeluaran_detail.jumlah) as jmlbrg28 FROM pengeluaran,pengeluaran_detail where pengeluaran.tgl_sj BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' and pengeluaran.nomor=pengeluaran_detail.nomor
                                         and pengeluaran.catatan='CAT-0028' group by pengeluaran.catatan";
		$tmpQryBrg28 = mysql_query($queryBrg28, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rqueryBrg28 = mysql_fetch_array($tmpQryBrg28);

$total_jmldok15 = $rquery25['jmldok25']+$rquery26['jmldok26']+$rquery27['jmldok27']+$rquery28['jmldok28'];
$total_jmlbrg15 = $rqueryBrg25['jmlbrg25']+$rqueryBrg26['jmlbrg26']+$rqueryBrg27['jmlbrg27']+$rqueryBrg28['jmlbrg28'];
$total_jmlharga15 = $rquery25['jmlharga25']+$rquery26['jmlharga26']+$rquery27['jmlharga27']+$rquery28['jmlharga28'];
$total_jmlnetto15 = $rquery25['jmlnetto25']+$rquery26['jmlnetto26']+$rquery27['jmlnetto27']+$rquery28['jmlnetto28'];

//untuk mendapatkan hasil butir (16) yaitu dari CAT-0030
$query30 ="SELECT COUNT(nomor) As jmldok30, SUM(harga) as jmlharga30, SUM(netto) as jmlnetto30 FROM pengeluaran where tgl_sj BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' 
                                         and catatan='CAT-0030'";
		$tmpQry30 = mysql_query($query30, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rquery30 = mysql_fetch_array($tmpQry30);

$queryBrg30 ="SELECT pengeluaran.nomor, pengeluaran.tgl_sj, pengeluaran.catatan, SUM(pengeluaran_detail.jumlah) as jmlbrg30 FROM pengeluaran,pengeluaran_detail where pengeluaran.tgl_sj BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' and pengeluaran.nomor=pengeluaran_detail.nomor
                                         and pengeluaran.catatan='CAT-0030' group by pengeluaran.catatan";
		$tmpQryBrg30 = mysql_query($queryBrg30, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rqueryBrg30 = mysql_fetch_array($tmpQryBrg30);
$total_jmldok16 = $rquery30['jmldok30'];
$total_jmlbrg16 = $rqueryBrg30['jmlbrg30'];
$total_jmlharga16 = $rquery30['jmlharga30'];
$total_jmlnetto16 = $rquery30['jmlnetto30'];

//untuk mendapatkan hasil butir (17) yaitu dari PEMUSNAHAN
$queryPem ="SELECT COUNT(nomor) As jmldokpem, SUM(harga) as jmlhargapem, SUM(netto) as jmlnettopem FROM pemusnahan where tgl_pem BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."'";
		$tmpQryPem = mysql_query($queryPem, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rqueryPem = mysql_fetch_array($tmpQryPem);

$queryPemBrg ="SELECT pemusnahan.nomor, pemusnahan.tgl_pem, SUM(pemusnahan_detail.jumlah) as jmlbrgpem FROM pemusnahan,pemusnahan_detail where pemusnahan.tgl_pem BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' and pemusnahan.nomor=pemusnahan_detail.nomor
                                       group by pemusnahan.nomor";
		$tmpQryPemBrg = mysql_query($queryPemBrg, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rqueryPemBrg = mysql_fetch_array($tmpQryPemBrg);
$total_jmldok17 = $rqueryPem['jmldokpem'];
$total_jmlbrg17 = $rqueryPemBrg['jmlbrgpem'];
$total_jmlharga17 = $rqueryPem['jmlhargapem'];
$total_jmlnetto17 = $rqueryPem['jmlnettopem'];

  echo "<table width=\"1058\" cellpadding=\"0\" cellspacing=\"0\" border=\"1\">    

  <tr>
  <td align=\"center\">1</td>
  <td>".strtoupper($dataNamakb['nama'])."</td>
  <td>".$dataNamakb['npwp']."</td>
  <td align=\"left\">BC 2.3</td>
  <td align=\"center\">&nbsp;1&nbsp;</td>
  <td align=\"center\">&nbsp;TPB.08&nbsp;</td>
  <td align=\"center\">$total_jmldok1</td>
  <td align=\"right\">".number_format($total_jmlbrg1,2,',','.')."</td>
  <td align=\"right\">".number_format($total_jmlharga1,2,',','.')."</td>
  <td align=\"right\">".number_format($total_jmlnetto1,2,',','.')."</td>
  <td align=\"right\">&nbsp;0,00&nbsp;</td>
  <td align=\"right\">&nbsp;0,00&nbsp;</td>
  </tr>
  
  <tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td align=\"left\">BC 2.3 (PIBT)</td>
  <td align=\"center\">&nbsp;2&nbsp;</td>
  <td>&nbsp;</td>
  <td align=\"center\">$total_jmldok2</td>
  <td align=\"right\">".number_format($total_jmlbrg2,2,',','.')."</td>
  <td align=\"right\">".number_format($total_jmlharga2,2,',','.')."</td>
  <td align=\"right\">".number_format($total_jmlnetto2,2,',','.')."</td>
  <td align=\"right\">&nbsp;0,00&nbsp;</td>
  <td align=\"right\">&nbsp;0,00&nbsp;</td>
  </tr>
  <tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td align=\"left\">BC 2.7</td>
  <td align=\"center\">&nbsp;3&nbsp;</td>
  <td>&nbsp;</td>
  <td align=\"center\">$total_jmldok3</td>
  <td align=\"right\">".number_format($total_jmlbrg3,2,',','.')."</td>
  <td align=\"right\">".number_format($total_jmlharga3,2,',','.')."</td>
  <td align=\"right\">".number_format($total_jmlnetto3,2,',','.')."</td>
  <td align=\"right\">&nbsp;0,00&nbsp;</td>
  <td align=\"right\">&nbsp;0,00&nbsp;</td>
  </tr>
  <tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td align=\"left\">BC 2.7</td>
  <td align=\"center\">&nbsp;4&nbsp;</td>
  <td>&nbsp;</td>
  <td align=\"center\">$total_jmldok4</td>
  <td align=\"right\">".number_format($total_jmlbrg4,2,',','.')."</td>
  <td align=\"right\">".number_format($total_jmlharga4,2,',','.')."</td>
  <td align=\"right\">".number_format($total_jmlnetto4,2,',','.')."</td>
  <td align=\"right\">&nbsp;0,00&nbsp;</td>
  <td align=\"right\">&nbsp;0,00&nbsp;</td>
  </tr>

  <tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td align=\"left\">BC 2.6.2</td>
  <td align=\"center\">&nbsp;5&nbsp;</td>
  <td>&nbsp;</td>
   <td align=\"center\">$total_jmldok5</td>
  <td align=\"right\">".number_format($total_jmlbrg5,2,',','.')."</td>
  <td align=\"right\">".number_format($total_jmlharga5,2,',','.')."</td>
  <td align=\"right\">".number_format($total_jmlnetto5,2,',','.')."</td>
  <td align=\"right\">&nbsp;0,00&nbsp;</td>
  <td align=\"right\">&nbsp;0,00&nbsp;</td>
  </tr>
  <tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td align=\"left\">BC 2.6.2</td>
  <td align=\"center\">&nbsp;6&nbsp;</td>
  <td>&nbsp;</td>
  <td align=\"center\">$total_jmldok6</td>
  <td align=\"right\">".number_format($total_jmlbrg6,2,',','.')."</td>
  <td align=\"right\">".number_format($total_jmlharga6,2,',','.')."</td>
  <td align=\"right\">".number_format($total_jmlnetto6,2,',','.')."</td>
  <td align=\"right\">&nbsp;0,00&nbsp;</td>
  <td align=\"right\">&nbsp;0,00&nbsp;</td>

  <tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td align=\"left\">BC 2.4</td>
  <td align=\"center\">&nbsp;7&nbsp;</td>
  <td>&nbsp;</td>
  <td align=\"center\">$total_jmldok7</td>
  <td align=\"right\">".number_format($total_jmlbrg7,2,',','.')."</td>
  <td align=\"right\">".number_format($total_jmlharga7,2,',','.')."</td>
  <td align=\"right\">".number_format($total_jmlnetto7,2,',','.')."</td>
  <td align=\"right\">&nbsp;0,00&nbsp;</td>
  <td align=\"right\">&nbsp;0,00&nbsp;</td>
  </tr>

  <tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td align=\"left\">BC 4.0</td>
  <td align=\"center\">&nbsp;8&nbsp;</td>
  <td>&nbsp;</td>
 <td align=\"center\">$total_jmldok8</td>
  <td align=\"right\">".number_format($total_jmlbrg8,2,',','.')."</td>
  <td align=\"right\">".number_format($total_jmlharga8,2,',','.')."</td>
  <td align=\"right\">".number_format($total_jmlnetto8,2,',','.')."</td>
  <td align=\"right\">&nbsp;0,00&nbsp;</td>
  <td align=\"right\">&nbsp;0,00&nbsp;</td>
  </tr>
  
  <tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td align=\"left\">BC 3.0(PEB)</td>
  <td align=\"center\">&nbsp;9&nbsp;</td>
  <td>&nbsp;</td>
 <td align=\"center\">$total_jmldok9</td>
  <td align=\"right\">".number_format($total_jmlbrg9,2,',','.')."</td>
  <td align=\"right\">&nbsp;0,00&nbsp;</td>
  <td align=\"right\">&nbsp;0,00&nbsp;</td> 
  <td align=\"right\">".number_format($total_jmlharga9,2,',','.')."</td>
  <td align=\"right\">".number_format($total_jmlnetto9,2,',','.')."</td>
  </tr>

  <tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td align=\"left\">BC 3.0 (PEB)</td>
  <td align=\"center\">&nbsp;10&nbsp;</td>
  <td>&nbsp;</td>
  <td align=\"center\">$total_jmldok10</td>
  <td align=\"right\">".number_format($total_jmlbrg10,2,',','.')."</td>
  <td align=\"right\">&nbsp;0,00&nbsp;</td>
  <td align=\"right\">&nbsp;0,00&nbsp;</td> 
  <td align=\"right\">".number_format($total_jmlharga10,2,',','.')."</td>
  <td align=\"right\">".number_format($total_jmlnetto10,2,',','.')."</td>
  </tr>

  <tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td align=\"left\">BC 2.7</td>
  <td align=\"center\">&nbsp;11&nbsp;</td>
  <td>&nbsp;</td>
   <td align=\"center\">$total_jmldok11</td>
  <td align=\"right\">".number_format($total_jmlbrg11,2,',','.')."</td>
  <td align=\"right\">&nbsp;0,00&nbsp;</td>
  <td align=\"right\">&nbsp;0,00&nbsp;</td> 
  <td align=\"right\">".number_format($total_jmlharga11,2,',','.')."</td>
  <td align=\"right\">".number_format($total_jmlnetto11,2,',','.')."</td>

  </tr>

  <tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td align=\"left\">BC 2.6.1</td>
  <td align=\"center\">&nbsp;12&nbsp;</td>
  <td>&nbsp;</td>
    <td align=\"center\">$total_jmldok12</td>
  <td align=\"right\">".number_format($total_jmlbrg12,2,',','.')."</td>
  <td align=\"right\">&nbsp;0,00&nbsp;</td>
  <td align=\"right\">&nbsp;0,00&nbsp;</td> 
  <td align=\"right\">".number_format($total_jmlharga12,2,',','.')."</td>
  <td align=\"right\">".number_format($total_jmlnetto12,2,',','.')."</td>

  </tr>

  <tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td align=\"left\">BC 2.6.1</td>
  <td align=\"center\">&nbsp;13&nbsp;</td>
  <td>&nbsp;</td>
  <td align=\"center\">$total_jmldok13</td>
  <td align=\"right\">".number_format($total_jmlbrg13,2,',','.')."</td>
  <td align=\"right\">&nbsp;0,00&nbsp;</td>
  <td align=\"right\">&nbsp;0,00&nbsp;</td> 
  <td align=\"right\">".number_format($total_jmlharga13,2,',','.')."</td>
  <td align=\"right\">".number_format($total_jmlnetto13,2,',','.')."</td>
  </tr>

  <tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td align=\"left\">BC 2.5 (PIB)</td>
  <td align=\"center\">&nbsp;14&nbsp;</td>
  <td>&nbsp;</td>
  <td align=\"center\">$total_jmldok14</td>
  <td align=\"right\">".number_format($total_jmlbrg14,2,',','.')."</td>
  <td align=\"right\">&nbsp;0,00&nbsp;</td>
  <td align=\"right\">&nbsp;0,00&nbsp;</td> 
  <td align=\"right\">".number_format($total_jmlharga14,2,',','.')."</td>
  <td align=\"right\">".number_format($total_jmlnetto14,2,',','.')."</td>
  </tr>

  <tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td align=\"left\">BC 4.1</td>
  <td align=\"center\">&nbsp;15&nbsp;</td>
  <td>&nbsp;</td>
   <td align=\"center\">$total_jmldok15</td>
  <td align=\"right\">".number_format($total_jmlbrg15,2,',','.')."</td>
  <td align=\"right\">&nbsp;0,00&nbsp;</td>
  <td align=\"right\">&nbsp;0,00&nbsp;</td> 
  <td align=\"right\">".number_format($total_jmlharga15,2,',','.')."</td>
  <td align=\"right\">".number_format($total_jmlnetto15,2,',','.')."</td>
  </tr>

  <tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td align=\"left\">BC 3.0(PEBT)</td>
  <td align=\"center\">&nbsp;16&nbsp;</td>
  <td>&nbsp;</td>
  <td align=\"center\">$total_jmldok16</td>
  <td align=\"right\">".number_format($total_jmlbrg16,2,',','.')."</td>
  <td align=\"right\">&nbsp;0,00&nbsp;</td>
  <td align=\"right\">&nbsp;0,00&nbsp;</td> 
  <td align=\"right\">".number_format($total_jmlharga16,2,',','.')."</td>
  <td align=\"right\">".number_format($total_jmlnetto16,2,',','.')."</td>
  </tr>

  <tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td align=\"left\">BAP</td>
  <td align=\"center\">&nbsp;17&nbsp;</td>
  <td>&nbsp;</td>
  <td align=\"center\">$total_jmldok17</td>
  <td align=\"right\">".number_format($total_jmlbrg17,2,',','.')."</td>
  <td align=\"right\">&nbsp;0,00&nbsp;</td>
  <td align=\"right\">&nbsp;0,00&nbsp;</td> 
  <td align=\"right\">".number_format($total_jmlharga17,2,',','.')."</td>
  <td align=\"right\">".number_format($total_jmlnetto17,2,',','.')."</td>
  </tr>

  </table>
  ";
 

  echo "<table width=\"1058\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
  
   <tr>
  <td>&nbsp;</td>
    </tr> 
  <tr>
  <td colspan=\"12\" ><div align=\"left\"><b>KETERANGAN:</b></div></td>

  </tr>
<tr>
  <td colspan=\"6\" ><div align=\"left\">01. &nbsp;Pemasukan dari Tempat Penimbunan Sementara; Impor Non PJT</div></td>
  <td colspan=\"6\" ><div align=\"left\">09. &nbsp;Ekspor</div></td>

  </tr>
<tr>
  <td colspan=\"6\" ><div align=\"left\">02. &nbsp;Pemasukan dari Tempat Penimbunan Sementara; Impor melalui PJT</div></td>
  <td colspan=\"6\" ><div align=\"left\">10. &nbsp;Ekspor Kembali</div></td>
  </tr>
<tr>
  <td colspan=\"6\" ><div align=\"left\">03. &nbsp;Pemasukan dari Gudang Berikat</div></td>
  <td colspan=\"3\" ><div align=\"left\">11. &nbsp;Pengeluaran ke PDKB lain</div></td>
  <td colspan=\"3\" ><div align=\"left\">&nbsp;</div></td>
  </tr>
<tr>
  <td colspan=\"6\" ><div align=\"left\">04. &nbsp;Pemasukan dari PDKB lain</div></td>
  <td colspan=\"3\" ><div align=\"left\">12. &nbsp;Pengeluaran ke TLDDP dalam rangka subkontrak</div></td>
    <td colspan=\"3\" ><div align=\"left\">&nbsp;</div></td>
  </tr>
<tr>
  <td colspan=\"6\" ><div align=\"left\">05. &nbsp;Pemasukan dari TLDDP dalam rangka subkontrak</div></td>
  <td colspan=\"6\" ><div align=\"left\">13. &nbsp;Pengeluaran ke TLDDP untuk diperbaiki/dipinjamkan/dipamerkan</div></td>
    
  </tr>
<tr>
  <td colspan=\"6\" ><div align=\"left\">06. &nbsp;Pemasukan kembali dari TLDDP setelah diperbaiki/dipinjamkan/dipamerkan</div></td>
  <td colspan=\"3\" ><div align=\"left\">14. &nbsp;Pengeluaran ke TLDDP (Penjualan)</div></td>
    <td colspan=\"3\" ><div align=\"left\">&nbsp;</div></td>
  </tr>
<tr>
  <td colspan=\"6\" ><div align=\"left\">07. &nbsp;Pemasukan dari Produsen Pengguna Fasilitas KITE</div></td>
  <td colspan=\"3\" ><div align=\"left\">15. &nbsp;Pengeluaran kembali barang asal TLDDP</div></td>
  <td colspan=\"3\" ><div align=\"left\"><b>Mengetahui</b></div></td>

  </tr>
<tr>
  <td colspan=\"6\" ><div align=\"left\">08. &nbsp;Pemasukan dari TLDDP</div></td>
  <td colspan=\"3\" ><div align=\"left\">16. &nbsp;Pengeluaran Ekspor melalui PJT</div></td>
  <td colspan=\"3\" ><div align=\"left\">".strtoupper($dataNamakb['kota']).",&nbsp;".date('d M Y')."</div></td>

  </tr>
<tr>
  <td colspan=\"6\" ><div align=\"left\">&nbsp;</div></td>
  <td colspan=\"3\" ><div align=\"left\">17. &nbsp;Berita Acara Pemusnahan</div></td>
  <td colspan=\"3\" ><div align=\"left\"><b>Kasubsi Hanggar Pabean dan Cukai TPB</b></div></td>

  </tr>
  <tr>
  <td>&nbsp;</td>
    </tr> 
	 </table>
  ";
?>