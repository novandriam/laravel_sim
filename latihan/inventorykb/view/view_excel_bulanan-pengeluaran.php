<?php
include_once "../library/inc.connection.php";
include_once "../library/inc.library.php";
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="laporan_bulanan-pengeluaran"'.date("dmy").'".xls"');
header('Cache-Control: max-age=0');
 
//isi file excel (pakai tabel)

/* ambil data tanggal  */
$TglStart =$_POST['cmbTglStart'];
$TglEnd =$_POST['cmbTglEnd'];

$queryNamakb="select nama,kota from infokb";
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
  <td colspan=\"19\"><div align=\"center\"><b>LAPORAN BULANAN KEGIATAN PENGELUARAN KB</b></div></td>
  </tr>
  <tr>
  <td colspan=\"19\"><div align=\"center\">PERIODE $TglStart S.D $TglEnd </div></td>
  </tr>
 
  <tr>
  <td>&nbsp;</td>
    </tr> 
  ";
  

echo "<table width=\"1058\" cellpadding=\"0\" cellspacing=\"0\" border=\"1\">
  <tr>
  <td rowspan=\"2\"><div valign=\"middle\" align=\"center\">&nbsp;&nbsp;No.&nbsp;&nbsp;</div></td>
  <td rowspan=\"2\"><div valign=\"middle\" align=\"center\">Nama PDKB</div></td>
  <td colspan=\"2\" ><div align=\"center\">BC 3.0 (PEB)</div></td>
  <td colspan=\"5\" ><div align=\"center\">BC 2.7</div></td>
  <td colspan=\"2\" ><div align=\"center\">BC 2.6.1</div></td>
  <td colspan=\"4\" ><div align=\"center\">BC 4.1</div></td>
  <td><div align=\"center\">BC 2.0/BC 2.5</div></td>
  <td colspan=\"2\" ><div align=\"center\">Devisa Ekspor</div></td>
  </tr>
  
  <tr>
  <td><div align=\"center\">&nbsp;&nbsp;&nbsp;&nbsp;1&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
  <td><div align=\"center\">&nbsp;&nbsp;&nbsp;&nbsp;2&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
  <td><div align=\"center\">&nbsp;&nbsp;&nbsp;&nbsp;3&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
  <td><div align=\"center\">&nbsp;&nbsp;&nbsp;&nbsp;4&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
  <td><div align=\"center\">&nbsp;&nbsp;&nbsp;&nbsp;5&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
  <td><div align=\"center\">&nbsp;&nbsp;&nbsp;&nbsp;6&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
  <td><div align=\"center\">&nbsp;&nbsp;&nbsp;&nbsp;7&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
  <td><div align=\"center\">&nbsp;&nbsp;&nbsp;&nbsp;8&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
  <td><div align=\"center\">&nbsp;&nbsp;&nbsp;&nbsp;9&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
  <td><div align=\"center\">&nbsp;&nbsp;&nbsp;&nbsp;10&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
  <td><div align=\"center\">&nbsp;&nbsp;&nbsp;&nbsp;11&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
  <td><div align=\"center\">&nbsp;&nbsp;&nbsp;&nbsp;12&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
  <td><div align=\"center\">&nbsp;&nbsp;&nbsp;&nbsp;13&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
  <td><div align=\"center\">&nbsp;&nbsp;&nbsp;&nbsp;14&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
  <td><div align=\"center\">Berat (kg)</div></td>
  <td><div align=\"center\">US$</div></td>
  </tr>
  </table>
  ";

$query1 ="SELECT COUNT(nomor) As jml1 FROM pengeluaran where tgl_sj BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."'
                                         and catatan='CAT-0016'";
		$tmpQry1 = mysql_query($query1, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rquery1 = mysql_fetch_array($tmpQry1);

$query2 ="SELECT COUNT(nomor) As jml2 FROM pengeluaran where tgl_sj BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."'
                                         and catatan='CAT-0017'";
		$tmpQry2 = mysql_query($query2, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rquery2 = mysql_fetch_array($tmpQry2);



$query3 ="SELECT COUNT(nomor) As jml3 FROM pengeluaran where tgl_sj BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."'
                                         and catatan='CAT-0018'";
		$tmpQry3 = mysql_query($query3, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rquery3 = mysql_fetch_array($tmpQry3);

$query4 ="SELECT COUNT(nomor) As jml4 FROM pengeluaran where tgl_sj BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."'
                                         and catatan='CAT-0019'";
		$tmpQry4 = mysql_query($query4, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rquery4 = mysql_fetch_array($tmpQry4);

$query5 ="SELECT COUNT(nomor) As jml5 FROM pengeluaran where tgl_sj BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."'
                                         and catatan='CAT-0020'";
		$tmpQry5 = mysql_query($query5, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rquery5 = mysql_fetch_array($tmpQry5);

$query6 ="SELECT COUNT(nomor) As jml6 FROM pengeluaran where tgl_sj BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."'
                                         and catatan='CAT-0021'";
		$tmpQry6 = mysql_query($query6, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rquery6 = mysql_fetch_array($tmpQry6);
		
$query7 ="SELECT COUNT(nomor) As jml7 FROM pengeluaran where tgl_sj BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."'
                                         and catatan='CAT-0022'";
		$tmpQry7 = mysql_query($query7, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rquery7 = mysql_fetch_array($tmpQry7);

$query8 ="SELECT COUNT(nomor) As jml8 FROM pengeluaran where tgl_sj BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."'
                                         and catatan='CAT-0023'";
		$tmpQry8 = mysql_query($query8, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rquery8 = mysql_fetch_array($tmpQry8);

$query9 ="SELECT COUNT(nomor) As jml9 FROM pengeluaran where tgl_sj BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."'
                                         and catatan='CAT-0024'";
		$tmpQry9 = mysql_query($query9, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rquery9 = mysql_fetch_array($tmpQry9);

$query10 ="SELECT COUNT(nomor) As jml10 FROM pengeluaran where tgl_sj BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."'
                                         and catatan='CAT-0025'";
		$tmpQry10 = mysql_query($query10, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rquery10 = mysql_fetch_array($tmpQry10);

$query11 ="SELECT COUNT(nomor) As jml11 FROM pengeluaran where tgl_sj BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."'
                                         and catatan='CAT-0026'";
		$tmpQry11 = mysql_query($query11, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rquery11 = mysql_fetch_array($tmpQry11);

$query12 ="SELECT COUNT(nomor) As jml12 FROM pengeluaran where tgl_sj BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."'
                                         and catatan='CAT-0027'";
		$tmpQry12 = mysql_query($query12, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rquery12 = mysql_fetch_array($tmpQry12);

$query13 ="SELECT COUNT(nomor) As jml13 FROM pengeluaran where tgl_sj BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."'
                                         and catatan='CAT-0028'";
		$tmpQry13 = mysql_query($query13, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rquery13 = mysql_fetch_array($tmpQry13);

$query14 ="SELECT COUNT(nomor) As jml14 FROM pengeluaran where tgl_sj BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."'
                                         and catatan='CAT-0029'";
		$tmpQry14 = mysql_query($query14, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rquery14 = mysql_fetch_array($tmpQry14);


$queryBerat1 ="SELECT sum(netto) As berat1 FROM pengeluaran where tgl_sj BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' and catatan='CAT-0016'";
		$tmpQryBerat1 = mysql_query($queryBerat1, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rqueryBerat1 = mysql_fetch_array($tmpQryBerat1);
$queryBerat2 ="SELECT sum(netto) As berat2 FROM pengeluaran where tgl_sj BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' and catatan='CAT-0017'";
		$tmpQryBerat2 = mysql_query($queryBerat2, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rqueryBerat2 = mysql_fetch_array($tmpQryBerat2);
$total_berat = $rqueryBerat1['berat1']+$rqueryBerat2['berat2'];

$queryNilai1 ="SELECT sum(harga) As nilai1 FROM pengeluaran where tgl_sj BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' and catatan='CAT-0016'";
		$tmpQryNilai1 = mysql_query($queryNilai1, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rqueryNilai1 = mysql_fetch_array($tmpQryNilai1);
$queryNilai2 ="SELECT sum(harga) As nilai2 FROM pengeluaran where tgl_sj BETWEEN '".InggrisTgl($_POST['cmbTglStart'])."' AND '".InggrisTgl($_POST['cmbTglEnd'])."' and catatan='CAT-0017'";
		$tmpQryNilai2 = mysql_query($queryNilai2, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
		$rqueryNilai2 = mysql_fetch_array($tmpQryNilai2);
$total_nilai = $rqueryNilai1['nilai1']+$rqueryNilai2['nilai2'];

  echo "<table width=\"1058\" cellpadding=\"0\" cellspacing=\"0\" border=\"1\">
    
  <tr>
  <td align=\"center\">1</td>
  <td>".strtoupper($dataNamakb['nama'])."</td>
  <td align=\"center\">".$rquery1['jml1']."</td>
  <td align=\"center\">".$rquery2['jml2']."</td>
  <td align=\"center\">".$rquery3['jml3']."</td>
  <td align=\"center\">".$rquery4['jml4']."</td>
  <td align=\"center\">".$rquery5['jml5']."</td>
  <td align=\"center\">".$rquery6['jml6']."</td> 
  <td align=\"center\">".$rquery7['jml7']."</td>
  <td align=\"center\">".$rquery8['jml8']."</td>
  <td align=\"center\">".$rquery9['jml9']."</td>
  <td align=\"center\">".$rquery10['jml10']."</td>
  <td align=\"center\">".$rquery11['jml11']."</td>
  <td align=\"center\">".$rquery12['jml12']."</td>
  <td align=\"center\">".$rquery13['jml13']."</td>
  <td align=\"center\">".$rquery14['jml14']."</td>
  <td align=\"right\">".number_format($total_berat,2,',','.')."</td>
  <td align=\"right\">".number_format($total_nilai,2,',','.')."</td>
  </tr>
  </table>
  ";
 
	  $dataSql = "SELECT kd_catatan,nm_catatan FROM catatan ORDER BY kd_catatan";
	  $dataQry = mysql_query($dataSql, $koneksidb) or die ("Gagal Query".mysql_error());
	  while ($dataRow = mysql_fetch_array($dataQry)) {
	  	if ($dataRow['kd_catatan']== 'CAT-0016') {
			$cat1 = $dataRow['nm_catatan'];
		} else if ($dataRow['kd_catatan']== 'CAT-0017'){  
		$cat2 = $dataRow['nm_catatan'];
		} else if ($dataRow['kd_catatan']== 'CAT-0018'){  
		$cat3 = $dataRow['nm_catatan'];
		} else if ($dataRow['kd_catatan']== 'CAT-0019'){  
		$cat4 = $dataRow['nm_catatan'];
		} else if ($dataRow['kd_catatan']== 'CAT-0020'){  
		$cat5 = $dataRow['nm_catatan'];
		} else if ($dataRow['kd_catatan']== 'CAT-0021'){  
		$cat6 = $dataRow['nm_catatan'];
		} else if ($dataRow['kd_catatan']== 'CAT-0022'){  
		$cat7 = $dataRow['nm_catatan'];
		} else if ($dataRow['kd_catatan']== 'CAT-0023'){  
		$cat8 = $dataRow['nm_catatan'];
		} else if ($dataRow['kd_catatan']== 'CAT-0024'){  
		$cat9 = $dataRow['nm_catatan'];
		} else if ($dataRow['kd_catatan']== 'CAT-0025'){  
		$cat10 = $dataRow['nm_catatan'];
		} else if ($dataRow['kd_catatan']== 'CAT-0026'){  
		$cat11 = $dataRow['nm_catatan'];
		} else if ($dataRow['kd_catatan']== 'CAT-0027'){  
		$cat12 = $dataRow['nm_catatan'];
		} else if ($dataRow['kd_catatan']== 'CAT-0028'){  
		$cat13 = $dataRow['nm_catatan'];
		} else if ($dataRow['kd_catatan']== 'CAT-0029'){  
		$cat14 = $dataRow['nm_catatan'];
		} 
	  }
	 

  echo "<table width=\"1058\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
  
   <tr>
  <td>&nbsp;</td>
    </tr> 
  <tr>
  <td colspan=\"19\" ><div align=\"left\"><b>KETERANGAN:</b></div></td>
  </tr>
<tr>
  <td colspan=\"8\" ><div align=\"left\">1. &nbsp;$cat1</div></td>
  <td colspan=\"11\" ><div align=\"left\">10. &nbsp;$cat10</div></td>
  </tr>
<tr>
  <td colspan=\"8\" ><div align=\"left\">2. &nbsp;$cat2</div></td>
  <td colspan=\"11\" ><div align=\"left\">11. &nbsp;$cat11</div></td>
  </tr>
<tr>
  <td colspan=\"8\" ><div align=\"left\">3. &nbsp;$cat3</div></td>
  <td colspan=\"11\" ><div align=\"left\">12. &nbsp;$cat12</div></td>
  </tr>
<tr>
  <td colspan=\"8\" ><div align=\"left\">4. &nbsp;$cat4</div></td>
  <td colspan=\"11\" ><div align=\"left\">13. &nbsp;$cat13</div></td>
  </tr>
<tr>
  <td colspan=\"8\" ><div align=\"left\">5. &nbsp;$cat5</div></td>
  <td colspan=\"11\" ><div align=\"left\">14. &nbsp;$cat14</div></td>
  </tr>
<tr>
  <td colspan=\"19\" ><div align=\"left\">6. &nbsp;$cat6</div></td>
  </tr>
<tr>
  <td colspan=\"19\" ><div align=\"left\">7. &nbsp;$cat7</div></td>
  </tr>
<tr>
  <td colspan=\"14\" ><div align=\"left\">8. &nbsp;$cat8</div></td>
  <td colspan=\"5\" ><div align=\"left\">".strtoupper($dataNamakb['kota']).",&nbsp;".date('d M Y')."</div></td>
  </tr>
<tr>
  <td colspan=\"14\" ><div align=\"left\">9. &nbsp;$cat9</div></td>
  <td colspan=\"5\" ><div align=\"left\"><b>Kasubsi Hanggar Pabean dan Cukai TPB</b></div></td>
  </tr>

 
  <tr>
  <td>&nbsp;</td>
    </tr> 
	 </table>
  ";
?>