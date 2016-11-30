<?php
include_once "../library/inc.connection.php";
include_once "../library/inc.library.php";
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="laporan_mutasi-barangjadi"'.date("dmy").'".xls"');
header('Cache-Control: max-age=0');

/* ambil data tanggal  */
$tgl = $_POST[tgl];
$tglakhir = $_POST[tglakhir];
$tglstock = $_POST[tglstock];
$sqlShow = "SELECT nama FROM infokb";
$qryShow = mysql_query($sqlShow, $koneksidb)  or die ("Query ambil data kb salah : ".mysql_error());
$dataShow = mysql_fetch_array($qryShow);
echo "
<tr>
  <td bgcolor=\"#99CCFF\"><div align=\"left\">LAPORAN PERTANGGUNGJAWABAN MUTASI BARANG JADI</div></td>
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
   for($i=1;$i<$_POST[jml];$i++){
        $kd_barang = $_POST[kd_barang.$i];
        $nm_barang = $_POST[nm_barang.$i];
		$satuan = $_POST[satuan.$i];
        $saldo_awal = $_POST[saldo_awal.$i];
        $pemasukan = $_POST[pemasukan.$i];
        $pengeluaran = $_POST[pengeluaran.$i];
        $adjustment = $_POST[adjustment.$i];
        $saldo_akhir = $_POST[saldo_akhir.$i];
        $stockopname = $_POST[stockopname.$i];
        $selisih = $_POST[selisih.$i];
        $keterangan = $_POST[keterangan.$i];
   		echo "<tr align='center'><td>$i</td>
              <td align='left'>$kd_barang</td>
              <td align='left'>$nm_barang</td>
              <td align='center'>$satuan</td>
              <td align='right'>$saldo_awal</td>
              <td align='right'>$pemasukan</td>
              <td align='right'>$pengeluaran</td>
              <td align='right'>$adjustment</td>
              <td align='right'>$saldo_akhir</td>
              <td align='right'>$stockopname</td>
              <td align='right'>$selisih</td>
              <td align='left'>$keterangan</td></tr>";
   }
?>
</table>
