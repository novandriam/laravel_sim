<?php
include_once "library/inc.sesadmin.php";
include_once "library/inc.library.php";
# Set Tanggal skrg
$tgl		 	= isset($_POST['tgl']) ? $_POST['tgl'] : date('d-m-Y');
$tglakhir		 	= isset($_POST['tglakhir']) ? $_POST['tglakhir'] : date('d-m-Y');
$queryTglstock="select max(tglstock) as tgl_stock from tbl_stockopname where tglstock between '".InggrisTgl($_POST[tgl])."'
                                            and '".InggrisTgl($_POST[tglakhir])."'";
$dataQry = mysql_query($queryTglstock, $koneksidb) or die ("Error Query".mysql_error());
$dataRow = mysql_fetch_array($dataQry);
$dataTglstock	= IndonesiaTgl($dataRow['tgl_stock']);
	
?>

<h2>LAPORAN PERTANGGUNGJAWABAN MUTASI MESIN DAN PERALATAN PERKANTORAN</h2>
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
    <tr><td colspan="3"><input name="txtKategori" value="K03" type="hidden" size="10" maxlength="10" readonly="readonly"/></td></tr>

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
  <td bgcolor="#CCCCCC" align="center"><?php echo $dataTglstock; ?></td>
  </tr>
	<?php
     $bln = substr($_POST[tgl],3,2);  //ambil bulan yang dipilih
     $thn = substr($_POST[tgl],6,4);  //ambil tahun yang dipilih
     $cek = $bln-1;  //bulan saat ini dikurangi satu untuk pengecekan
     //jika bulan saat ini dikurangi 1 sama dengan  0 maka  tahunnya adalah tahun kemarin dan bulanya desember selain itu masih tahun saat ini
     if($cek==0){$bln_sebelum = 12; $thn = $thn-1; }else{$bln_sebelum = $cek; $thn = $thn; }
     $file = "lap".date('s').".xls";
     echo "<input type='hidden' id='file' value='$file'>";
  $no = 1;
  $brg = mysql_query("select id,kd_barang,nm_barang,satuan,kd_kategori from barang where kd_kategori='$_POST[txtKategori]' order by id asc");
  echo "<form method='post' target='_new' action='view/excel_mutasi_barangmodal.php'>";
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
              echo "<tr><td>$no</td>
                   <td>$rbrg[kd_barang]</td>
                   <td>$rbrg[nm_barang]</td>
                   <td>$rbrg[satuan]</td>
                   <td>".number_format($rsaldo_awal[stock],2,',','.')."</td>
                  <td>".number_format($rpemasukan[jml],2,',','.')."</td>
                   <td>".number_format($rpengeluaran[jml],2,',','.')."</td>
                   <td>".number_format($radjustment[jml],2,',','.')."</td>
                   <td>".number_format($saldo_akhir,2,',','.')."</td>
                   <td>".number_format($rstock_opname[stockopname],0,'.','.')."</td>
                   <td>".number_format($selisih,2,',','.')."</td>
                   <td>$keterangan</td></tr>";
			  
			  echo "<input type='hidden' name='tgl' value='$tgl'>
			        <input type='hidden' name='tglakhir' value='$tglakhir'>
					<input type='hidden' name='tglstock' value='$dataTglstock'>
			  	   <input type='hidden' name='kd_barang$no' value='$rbrg[kd_barang]'>
			       <input type='hidden' name='nm_barang$no' value='$rbrg[nm_barang]'>
				   <input type='hidden' name='satuan$no' value='$rbrg[satuan]'>
				   <input type='hidden' name='saldo_awal$no' value='$rsaldo_awal[stock]'>
				  <input type='hidden' name='pemasukan$no' value='$rpemasukan[jml]'>
				   <input type='hidden' name='pengeluaran$no' value='$rpengeluaran[jml]'>
				   <input type='hidden' name='adjustment$no' value='$radjustment[jml]'>
				   <input type='hidden' name='saldo_akhir$no' value='$saldo_akhir'>
				   <input type='hidden' name='stockopname$no' value='$rstock_opname[stockopname]'>
				   <input type='hidden' name='selisih$no' value='$selisih'>
				   <input type='hidden' name='keterangan$no' value='$keterangan'>" ;
              $no++;
  }
?>

</table>
<input type='hidden' name='jml' value=<?php echo $no; ?> />
<input type='submit'  value='Ekspor Excel'>
