<?php
include_once "library/inc.sesadmin.php";
include_once "library/inc.library.php";

# Set Tanggal skrg
$tgl		 	= isset($_POST['tgl']) ? $_POST['tgl'] : date('d-m-Y');
$tglakhir		 	= isset($_POST['tglakhir']) ? $_POST['tglakhir'] : date('d-m-Y');
$queryTglstock="select max(tglstock) as tglStock from tbl_stockopname";
$dataQry = mysql_query($queryTglstock, $koneksidb) or die ("Error Query".mysql_error());
$dataRow = mysql_fetch_array($dataQry)
	
?>
<h3>LAPORAN PERTANGGUNGJAWABAN MUTASI BAHAN BAKU DAN BAHAN PENOLONG</h3>
<form action="?page=Lap-Mutasi-BahanBaku" method="post" name="form1" target="_self" id="form1">
  <table width="100%" border="0"  class="table-list">
    <tr>
      <td colspan="3" bgcolor="#CCCCCC"><div align="left"><strong>PERIODE TANGGAL </strong></div></td>
    </tr>
    <tr>
      <td width="90"><strong>Periode </strong></td>
      <td width="5"><strong>:</strong></td>
      <td width="815"><?php echo form_tanggal("tgl",$tgl); ?> s/d <?php echo form_tanggal("tglakhir",$tglakhir); ?>
      <input name="btnShow" type="submit" value=" Tampilkan " /></td>
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
    <td width="80" bgcolor="#CCCCCC"><b>Saldo Awal</b></td>
    <td rowspan="2" width="80" bgcolor="#CCCCCC"><b>Pemasukan </b></td>
    <td rowspan="2" width="80" bgcolor="#CCCCCC"><b>Pengeluaran </b></td>
    <td rowspan="2" width="80" bgcolor="#CCCCCC"><b>Penyesuaian </b></td>
    <td width="80" bgcolor="#CCCCCC"><b>Saldo Akhir</b></td>
    <td width="80" bgcolor="#CCCCCC"><b>Stk Opname</b></td>
    <td rowspan="2" width="80" bgcolor="#CCCCCC"><b>Selisih</b></td>
    <td rowspan="2" width="80" bgcolor="#CCCCCC"><b>Keterangan</b></td>
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
  $no = 1;
  $brg = mysql_query("select * from barang where kd_kategori='$_POST[txtKategori]'");
  while($rbrg = mysql_fetch_array($brg)){

              //cari stock awal bulan lalu
              $saldo_awal = mysql_query("select max(tgl_closing) AS tgl_closing,stock from closing where kd_barang='$rbrg[kd_barang]' AND month(tgl_closing)=$bln_sebelum and year(tgl_closing)=$thn group by stock ")or die ("Gagal query".mysql_error());
			  $cekstock = mysql_query("select max(tglstock) AS tglstock,stockopname from tbl_stockopname where kode_brg='$rbrg[kd_barang]' AND month(tglstock)=$bln_sebelum and year(tglstock)=$thn group by stockopname")or die ("Gagal query".mysql_error());
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

			$total_pengeluaran = $rpengeluaran[jml]+$rpemakaian[jml];

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
              $no++;
         
  }
 
?>

</table>
