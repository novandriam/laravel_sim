<?php
include_once "library/inc.sesadmin.php";
include_once "library/inc.library.php";
include_once "Spreadsheet/Excel/Writer.php";
# Set Tanggal skrg
$tgl		 	= isset($_POST['tgl']) ? $_POST['tgl'] : date('d-m-Y');
$tglakhir		 	= isset($_POST['tglakhir']) ? $_POST['tglakhir'] : date('d-m-Y');
$queryTglstock="select max(tglstock) as tglStock from tbl_stockopname";
$dataQry = mysql_query($queryTglstock, $koneksidb) or die ("Error Query".mysql_error());
$dataRow = mysql_fetch_array($dataQry)
	
?>
<script type="text/javascript" src="js/jquery-1.1.3.1.pack.js"></script>
<script>
     function excel(){
              var file = $('#file').val();
              window.location = file;
     }

</script>
<h2>LAPORAN PERTANGGUNGJAWABAN MUTASI BAHAN BAKU DAN BAHAN PENOLONG</h2>
<form id="form1" name="form1" method="post" action="">
  <table width="100%" border="0"  class="table-list">
    <tr>
      <td colspan="3" bgcolor="#CCCCCC"><div align="left"><strong>PERIODE TANGGAL </strong></div></td>
    </tr>
    <tr>
      <td width="90"><strong>Periode </strong></td>
      <td width="5"><strong>:</strong></td>
      <td width="815"><?php echo form_tanggal("tgl",$tgl); ?> s/d <?php echo form_tanggal("tglakhir",$tglakhir); ?>
      <input type="submit" name="button" id="button" value="Tampilkan" /></td>
    </tr>
    <tr><td colspan="3"><input name="txtKategori" value="K01" type="hidden" size="10" maxlength="10" readonly="readonly"/></td></tr>

  </table>
</form>

<table class="table-list" width="100%" border="1" cellspacing="1" cellpadding="2">
  <tr>
    <td rowspan="2" width="21" align="center" bgcolor="#CCCCCC"><b>No</b></td>
    <td rowspan="2" width="109" bgcolor="#CCCCCC"><b>Kode barang </b></td>
    <td rowspan="2" width="121" bgcolor="#CCCCCC"><b>Nama barang </b></td>
    <td rowspan="2" width="34" bgcolor="#CCCCCC"><b>Sat </b></td>
    <td width="80" bgcolor="#CCCCCC" align="center"><b>Saldo Awal</b></td>
    <td rowspan="2" width="80" bgcolor="#CCCCCC"><b>Pemasukan </b></td>
    <td rowspan="2" width="80" bgcolor="#CCCCCC"><b>Pengeluaran </b></td>
    <td rowspan="2" width="80" bgcolor="#CCCCCC"><b>Penyesuaian </b></td>
    <td width="80" bgcolor="#CCCCCC" align="center"><b>Saldo Akhir</b></td>
    <td width="80" bgcolor="#CCCCCC" align="center"><b>Stock Opname</b></td>
    <td rowspan="2" width="80" bgcolor="#CCCCCC" align="center"><b>Selisih</b></td>
    <td rowspan="2" width="80" bgcolor="#CCCCCC" align="center"><b>Keterangan</b></td>
<tr>
  <td bgcolor="#CCCCCC" align="center"><?php echo $tgl; ?></td>
  <td bgcolor="#CCCCCC" align="center"><?php echo $tglakhir; ?></td>
  <td bgcolor="#CCCCCC" align="center"><?php echo IndonesiaTgl($dataRow['tglStock']); ?></td>
  </tr>
	<?php
     $bln = substr($_POST[tgl],3,2);  //ambil bulan yang dipilih
     $thn = substr($_POST[tgl],6,4);  //ambil tahun yang dipilih
     $cek = $bln-1;  //bulan saat ini dikurangi satu untuk pengecekan
     //jika bulan saat ini dikurangi 1 sama dengan  0 maka  tahunnya adalah tahun kemarin dan bulanya desember selain itu masih tahun saat ini
     if($cek==0){$bln_sebelum = 12; $thn = $thn-1; }else{$bln_sebelum = $cek; $thn = $thn; }
   
   $file = "lapbahanbaku/lap".date('s').".xls";
     echo "<input type='hidden' id='file' value='$file'>";
     $xls =& new Spreadsheet_Excel_Writer("$file");
     $sheet =& $xls->addWorksheet("Mutasi bahan baku");
     $sheet->setcolumn(0,0,5);
     $sheet->setcolumn(0,1,10);
     $sheet->setcolumn(0,2,55);
     $sheet->setcolumn(0,3,10);
     $sheet->setcolumn(0,4,10);
     $sheet->setcolumn(0,5,10);
     $sheet->setcolumn(0,6,10);
     $sheet->setcolumn(0,7,10);
     $sheet->setcolumn(0,8,10);
     $sheet->setcolumn(0,9,10);
     $sheet->setcolumn(0,10,10);
     $sheet->setcolumn(0,11,10);
     $sheet->write(0,0,"No");
     $sheet->write(0,1,"Kode Barang");
     $sheet->write(0,2,"Nama Barang");
     $sheet->write(0,3,"Satuan");
     $sheet->write(0,4,"Saldo Awal");
     $sheet->write(0,5,"Pemasukan");
     $sheet->write(0,6,"Pengeluaran");
     $sheet->write(0,7,"Adjustment");
     $sheet->write(0,8,"Saldo Akhir");
     $sheet->write(0,9,"Stock Opname");
     $sheet->write(0,10,"Selisih");
     $sheet->write(0,11,"Keterangan");

  $no = 1;
  $posisi = 1;
  $brg = mysql_query("select * from barang where kd_kategori='$_POST[txtKategori]'");
  while($rbrg = mysql_fetch_array($brg)){

              //cari stock awal bulan lalu
              $saldo_awal = mysql_query("select max(tgl_closing) AS tgl_closing,stock from closing where kd_barang='$rbrg[kd_barang]' AND   month(tgl_closing)=$bln_sebelum and year(tgl_closing)=$thn group by stock ")or die ("Gagal query".mysql_error());
              
			  $rsaldo_awal = mysql_fetch_array($saldo_awal);

  			//cari pemasukan dari pemasok
              $pemasukan = mysql_query(" SELECT sum( jumlah ) AS jml FROM pemasukan_detail
                                           WHERE tgl_bpb between '".InggrisTgl($_POST[tgl])."' and '".InggrisTgl($_POST[tglakhir])."'
                                           AND kode = '$rbrg[kd_barang]'")or die ("Gagal query".mysql_error());
              $rpemasukan = mysql_fetch_array($pemasukan);
  			//cari terima oleh incoming dari produksi karena return
              $produksireturn = mysql_query(" SELECT sum( jumlah ) AS jml FROM incoming_terima_detail
                                           WHERE tgl_lpb between '".InggrisTgl($_POST[tgl])."' and '".InggrisTgl($_POST[tglakhir])."' AND dari='PRODUKSI' AND kode = '$rbrg[kd_barang]'")or die ("Gagal query".mysql_error());
              $rproduksireturn = mysql_fetch_array($produksireturn);

			$total_pemasukan = $rpemasukan[jml]+$rproduksireturn[jml];

              //cari pengeluaran
              $pengeluaran = mysql_query(" SELECT sum( jumlah ) AS jml FROM pengeluaran_detail
                                           WHERE tgl_sj between '".InggrisTgl($_POST[tgl])."' and '".InggrisTgl($_POST[tglakhir])."'
                                           AND kode = '$rbrg[kd_barang]'")or die ("Gagal query".mysql_error());
              $rpengeluaran = mysql_fetch_array($pengeluaran);
			  
			  //cari terima oleh produksi dari incoming untuk diproses
              $pemakaian = mysql_query(" SELECT sum( jumlah ) AS jml FROM produksi_terima_detail
                                           WHERE tgl_lpb between '".InggrisTgl($_POST[tgl])."' and '".InggrisTgl($_POST[tglakhir])."' AND dari='INCOMING' AND kode = '$rbrg[kd_barang]'")or die ("Gagal query".mysql_error());
              $rpemakaian = mysql_fetch_array($pemakaian);
			//cari pemusnahan barang
              $pemusnahan = mysql_query(" SELECT sum( jumlah ) AS jml FROM pemusnahan_detail
                                           WHERE tgl_pem between '".InggrisTgl($_POST[tgl])."' and '".InggrisTgl($_POST[tglakhir])."' AND kode = '$rbrg[kd_barang]'")or die ("Gagal query".mysql_error());
              $rpemusnahan = mysql_fetch_array($pemusnahan);

			$total_pengeluaran = $rpengeluaran[jml]+$rpemakaian[jml]+$rpemusnahan[jml];

              //cari adjustment
              $adjustment = mysql_query("select sum(jumlah) AS jml from adjusment_detail
                                         where tgl_adj between '".InggrisTgl($_POST[tgl])."' and '".InggrisTgl($_POST[tglakhir])."'
                                         and kode = '$rbrg[kd_barang]'")or die ("Gagal query".mysql_error());
              $radjustment = mysql_fetch_array($adjustment);

              //cari stock opname
              $stock_opname = mysql_query(" SELECT max(tglstock),stockopname  FROM tbl_stockopname
                                            WHERE kode_brg = '$rbrg[kd_barang]' AND tglstock between '".InggrisTgl($_POST[tgl])."'
                                            and '".InggrisTgl($_POST[tglakhir])."' group by stockopname limit 1")or die ("Gagal query".mysql_error());
              $rstock_opname = mysql_fetch_array($stock_opname);

              //perhitungan
              $saldo_akhir = $rsaldo_awal[stock]+$total_pemasukan-$total_pengeluaran+$radjustment[jml];
              $selisih = $rstock_opname[stockopname]-$saldo_akhir+$radjustment[jml];
              if($selisih>0){ $keterangan = "Selisih lebih"; }else if($selisih==0){ $keterangan = "Sesuai"; }else if($selisih<0){ $keterangan = "Selisih kurang"; }
              echo "<tr><td>$no</td>
                   <td>$rbrg[kd_barang]</td>
                   <td>$rbrg[nm_barang]</td>
                   <td>$rbrg[satuan]</td>
                   <td>".number_format($rsaldo_awal[stock],0,'.','.')."</td>
                   <td>".number_format($total_pemasukan,0,'.','.')."</td>
                   <td>".number_format($total_pengeluaran,0,'.','.')."</td>
                   <td>".number_format($radjustment[jml],0,'.','.')."</td>
                   <td>".number_format($saldo_akhir,0,'.','.')."</td>
                   <td>".number_format($rstock_opname[stockopname],0,'.','.')."</td>
                   <td>".number_format($selisih,0,'.','.')."</td>
                   <td>$keterangan</td></tr>";
             
			  $sheet->write($posisi,0,$no);
              $sheet->write($posisi,1,$rbrg[kd_barang]);
              $sheet->write($posisi,2,$rbrg[nm_barang]);
              $sheet->write($posisi,3,$rbrg[satuan]);
              $sheet->write($posisi,4,$rsaldo_awal[stock]);
              $sheet->write($posisi,5,$total_pemasukan);
              $sheet->write($posisi,6,$total_pengeluaran);
              $sheet->write($posisi,7,$radjustment[jml]);
              $sheet->write($posisi,8,$saldo_akhir);
              $sheet->write($posisi,9,$rstock_opname[stockopname]);
              $sheet->write($posisi,10,$selisih);
              $sheet->write($posisi,11,$keterangan);
			  
			  $no++;
			   $posisi++;
         
  }
  $xls->close();
?>

</table>
<input type="submit" id="excel" onclick="excel()" value="Ekspor Excel"/> <img src='images/excel.jpg' width='20'  height='20' align="top" border='0'  />