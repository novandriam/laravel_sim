<?php
include_once "../library/inc.connection.php";
include_once "../library/inc.library.php";
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="laporan_mutasi-barangmodal"'.date("dmy").'".xls"');
header('Cache-Control: max-age=0');

/* ambil data tanggal  */
# Set Tanggal skrg
$tgl		 	= isset($_POST['tgl']) ? $_POST['tgl'] : date('d-m-Y');
$tglakhir		 	= isset($_POST['tglakhir']) ? $_POST['tglakhir'] : date('d-m-Y');
$queryTglstock="select max(tglstock) as tgl_stock from tbl_stockopname where tglstock between '".InggrisTgl($_POST['tgl'])."'
                                            and '".InggrisTgl($_POST['tglakhir'])."'";
$dataQry = mysql_query($queryTglstock, $koneksidb) or die ("Error Query".mysql_error());
$dataRow = mysql_fetch_array($dataQry);
$tglstock	= IndonesiaTgl($dataRow['tgl_stock']);
$sqlShow = "SELECT nama FROM infokb";
$qryShow = mysql_query($sqlShow, $koneksidb)  or die ("Query ambil data kb salah : ".mysql_error());
$dataShow = mysql_fetch_array($qryShow);
echo "
<tr>
  <td bgcolor=\"#99CCFF\"><div align=\"left\">LAPORAN PERTANGGUNGJAWABAN MUTASI MESIN DAN PERALATAN PERKANTORAN</div></td>
  </tr>
  <tr>
  <td bgcolor=\"#99CCFF\"><div align=\"left\">KAWASAN BERIKAT ".strtoupper($dataShow['nama'])."</div></td>
  </tr>
  <tr>
  <td bgcolor=\"#99CCFF\"><div align=\"left\">PERIODE $tgl S.D $tglakhir </div></td>
  </tr>

  <tr>
  <td>&nbsp;</td>
    </tr> 
  ";
  ?>
<table border=1><tr><th rowspan="2">No</th><th rowspan="2">Kode Barang</th><th rowspan="2">Nama Barang</th><th rowspan="2">Satuan</th><th>Saldo Awal</th><th rowspan="2">Pemasukan</th><th rowspan="2">Pengeluaran</th><th rowspan="2">Adjustment</th>
<th>Saldo Akhir</th><th>Stock Opname</th><th rowspan="2">Selisih</th><th rowspan="2">Keterangan</th></tr>
<tr>
<th align="center"><?php echo $tgl; ?></th>
<th align="center"><?php echo $tglakhir; ?></th>
<th align="center"><?php echo $tglstock; ?></th>
</tr>
		<?php
     $bln = substr($_POST[tgl],3,2);  //ambil bulan yang dipilih
     $thn = substr($_POST[tgl],6,4);  //ambil tahun yang dipilih
     $cek = $bln-1;  //bulan saat ini dikurangi satu untuk pengecekan
     //jika bulan saat ini dikurangi 1 sama dengan  0 maka  tahunnya adalah tahun kemarin dan bulanya desember selain itu masih tahun saat ini
     if($cek==0){$bln_sebelum = 12; $thn = $thn-1; }else{$bln_sebelum = $cek; $thn = $thn; }
  $no = 1;
  $brg = mysql_query("select id,kd_barang,nm_barang,satuan,kd_kategori from barang where kd_kategori='$_POST[txtKategori]' order by id asc");
  while($rbrg = mysql_fetch_array($brg)){

              //cari stock awal bulan lalu
              $saldo_awal = mysql_query("select max(tgl_closing) as tgl_closing,stock from closing where kd_barang='$rbrg[kd_barang]'
                                        and month(tgl_closing)=$bln_sebelum and year(tgl_closing)=$thn group by stock ");
              $rsaldo_awal = mysql_fetch_array($saldo_awal);

            //cari pemasukan dari pemasok
              $pemasukan = mysql_query(" SELECT sum( jumlah ) AS jml FROM pemasukan_detail
                                           WHERE tgl_bpb between '".InggrisTgl($_POST[tgl])."' and '".InggrisTgl($_POST[tglakhir])."'
                                           AND kode = '$rbrg[kd_barang]'")or die ("Gagal query".mysql_error());
              $rpemasukan = mysql_fetch_array($pemasukan);
  			
              //cari pengeluaran
              $pengeluaran = mysql_query(" SELECT sum( jumlah ) AS jml FROM pengeluaran_detail
                                           WHERE tgl_sj between '".InggrisTgl($_POST[tgl])."' and '".InggrisTgl($_POST[tglakhir])."'
                                           AND kode = '$rbrg[kd_barang]'")or die ("Gagal query".mysql_error());
              $rpengeluaran = mysql_fetch_array($pengeluaran);

              //cari adjustment
              $adjustment = mysql_query("select sum(jumlah)as jml from adjusment_detail
                                         where tgl_adj between '".InggrisTgl($_POST[tgl])."' and '".InggrisTgl($_POST[tglakhir])."'
                                         and kode = '$rbrg[kd_barang]'");
              $radjustment = mysql_fetch_array($adjustment);

              //cari stock opname
              $stock_opname = mysql_query(" SELECT max(tglstock),stockopname  FROM tbl_stockopname
                                            WHERE kode_brg = '$rbrg[kd_barang]' AND tglstock between '".InggrisTgl($_POST[tgl])."'
                                            and '".InggrisTgl($_POST[tglakhir])."' group by stockopname limit 1");
              $rstock_opname = mysql_fetch_array($stock_opname);

              //perhitungan
              $saldo_akhir = $rsaldo_awal[stock]+$rpemasukan[jml]-$rpengeluaran[jml]+$radjustment[jml];
              $selisih = $rstock_opname[stockopname]-$saldo_akhir;
              if($selisih>0){ $keterangan = "Selisih lebih"; }else if($selisih==0){ $keterangan = "Sesuai"; }else if($selisih<0){ $keterangan = "Selisih kurang"; }
              echo "<tr align='center'><td>$no</td>
                   <td align='left'>$rbrg[kd_barang]</td>
                   <td align='left'>$rbrg[nm_barang]</td>
                   <td align='center'>$rbrg[satuan]</td>
                   <td align='right'>".number_format($rsaldo_awal[stock],2,',','.')."</td>
                  <td align='right'>".number_format($rpemasukan[jml],2,',','.')."</td>
                   <td align='right'>".number_format($rpengeluaran[jml],2,',','.')."</td>
                   <td align='right'>".number_format($radjustment[jml],2,',','.')."</td>
                   <td align='right'>".number_format($saldo_akhir,2,',','.')."</td>
                   <td align='right'>".number_format($rstock_opname[stockopname],0,'.','.')."</td>
                   <td align='right'>".number_format($selisih,2,',','.')."</td>
                   <td align='left'>$keterangan</td></tr>";
			  
              $no++;
  }
?>


</table>
