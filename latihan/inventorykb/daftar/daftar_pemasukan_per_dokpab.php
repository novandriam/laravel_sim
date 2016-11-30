<!-- Ini CSS untuk halaman-->
<style type="text/css">
div.pagination {
padding: 3px;
margin: 3px;
}

div.pagination a {
padding: 2px 5px 2px 5px;
margin: 2px;
border: 1px solid #AAAADD;

text-decoration: none; /* no underline */
color: #000099;
}

div.pagination a:hover, div.pagination a:active {
border: 1px solid #000099;

color: #000;
}

div.pagination span.current {
padding: 2px 5px 2px 5px;
margin: 2px;
border: 1px solid #000099;

font-weight: bold;
background-color: #000099;
color: #FFF;
}

div.pagination span.disabled {
padding: 2px 5px 2px 5px;
margin: 2px;
border: 1px solid #EEE;

color: #DDD;
}
</style>
<?php
include_once "library/inc.sesadmin.php";
include_once "library/inc.library.php";
# Set Tanggal skrg
$tgl		 	= isset($_POST['tgl']) ? $_POST['tgl'] : date('d-m-Y');
$tglakhir		 	= isset($_POST['tglakhir']) ? $_POST['tglakhir'] : date('d-m-Y');

// Halaman yang akan ditampilkan untuk pertengahan?
$adjacents = 3;
$sql = mysql_query("SELECT count(nomor) as jumlah from pemasukan where tgl_dokpab between '".InggrisTgl($_POST['tgl'])."' AND '".InggrisTgl($_POST['tglakhir'])."'") or die ("Error Query".mysql_error());
$hitung=mysql_fetch_array($sql);
$total_pages = $hitung[jumlah];

/* variabel query. */
$targetpage = "?page=Lap-Pemasukan-Perdokpab"; //nama file (nama file ini)
$limit = 10; //Jumlah record database yang akan ditampilkan setiap halaman
$hal = $_GET['hal'];
if($hal) 
$start = ($hal - 1) * $limit; 
else
$start = 0;

if ($hal == 0) $hal = 1;//jika variabel kosong maka defaultnya halaman pertama.
$prev = $hal - 1;//tombol prev; halaman sebelumnya
$next = $hal + 1;//tombol next; halaman berikutnya
$lastpage = ceil($total_pages/$limit); //tombol hal terakhir 
$lpm1 = $lastpage - 1; //tombol sebelum hal terakhir (hal terakhir-1) 

$pagination = "";
if($lastpage > 1)
{ 
$pagination .= "<div class=\"pagination\">";
//Link halaman sebelumnya
if ($hal > 1) 
$pagination.= "<a href=\"$targetpage&hal=$prev\">« Prev</a>";
else
$pagination.= "<span class=\"disabled\">« Prev</span>"; 

//halaman
if ($lastpage < 5 + ($adjacents * 2)) 
{ 
for ($counter = 1; $counter <= $lastpage; $counter++)
{
if ($counter == $hal)
$pagination.= "<span class=\"current\">$counter</span>";
else
$pagination.= "<a href=\"$targetpage&hal=$counter\">$counter</a>"; 
}
}
elseif($lastpage > 5 + ($adjacents * 2)) //enough pages to hide some
{

if($hal < 1 + ($adjacents * 2)) 
{
for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
{
if ($counter == $hal)
$pagination.= "<span class=\"current\">$counter</span>";
else
$pagination.= "<a href=\"$targetpage&hal=$counter\">$counter</a>"; 
}
$pagination.= "...";
$pagination.= "<a href=\"$targetpage&hal=$lpm1\">$lpm1</a>";
$pagination.= "<a href=\"$targetpage&hal=$lastpage\">$lastpage</a>"; 
}

elseif($lastpage - ($adjacents * 2) > $hal && $hal > ($adjacents * 2))
{
$pagination.= "<a href=\"$targetpage&hal=1\">1</a>";
$pagination.= "<a href=\"$targetpage&hal=2\">2</a>";
$pagination.= "...";
for ($counter = $hal - $adjacents; $counter <= $hal + $adjacents; $counter++)
{
if ($counter == $hal)
$pagination.= "<span class=\"current\">$counter</span>";
else
$pagination.= "<a href=\"$targetpage&hal=$counter\">$counter</a>"; 
}
$pagination.= "...";
$pagination.= "<a href=\"$targetpage&hal=$lpm1\">$lpm1</a>";
$pagination.= "<a href=\"$targetpage&hal=$lastpage\">$lastpage</a>"; 
}

else
{
$pagination.= "<a href=\"$targetpage&hal=1\">1</a>";
$pagination.= "<a href=\"$targetpage&hal=2\">2</a>";
$pagination.= "...";
for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
{
if ($counter == $hal)
$pagination.= "<span class=\"current\">$counter</span>";
else
$pagination.= "<a href=\"$targetpage&hal=$counter\">$counter</a>"; 
}
}
}

//link halaman selanjutnya
if ($hal < $counter - 1) 
$pagination.= "<a href=\"$targetpage&hal=$next\">Next »</a>";
else
$pagination.= "<span class=\"disabled\">Next »</span>";
$pagination.= "</div>\n"; 
}


?>

<h2>LAPORAN PEMASUKAN BARANG PER DOKUMEN PABEAN</h2>
<form action="" method="post" name="form1" target="_self" id="form1">
  <table width="100%" border="0"  class="table-list">
    <tr>
      <td colspan="3" bgcolor="#CCCCCC"><div align="left"><strong>PERIODE TANGGAL DOK PABEAN</strong></div></td>
    </tr>
    <tr>
      <td width="90"><strong>Periode </strong></td>
      <td width="5"><strong>:</strong></td>
      <td width="815"><?php echo form_tanggal("tgl",$tgl); ?> s/d <?php echo form_tanggal("tglakhir",$tglakhir); ?>
      <input name="btnShow" type="submit"  value="Tampilkan " /></td>
    </tr>
  </table>
</form>
<table class="table-list" width="100%" border="1" cellspacing="1" cellpadding="2">
  <tr>
    <td rowspan="2" width="21" align="center" bgcolor="#CCCCCC"><b>No</b></td>
    <td colspan="3" align="center"  bgcolor="#CCCCCC"><strong>Dok Pabean</strong></td>
    <td colspan="2" align="center" bgcolor="#CCCCCC"><b>BPB</b></td>
    <td align="left" rowspan="2" width="228" bgcolor="#CCCCCC"><b>Pemasok/Pengirim </b></td>
    <td align="center" rowspan="2" width="109" bgcolor="#CCCCCC"><b>Kode barang </b></td>
    <td align="left" rowspan="2" width="121" bgcolor="#CCCCCC"><b>Nama barang </b></td>
    <td align="center" rowspan="2" width="34" bgcolor="#CCCCCC"><b>Sat </b></td>
    <td align="center" rowspan="2" width="52" bgcolor="#CCCCCC"><b>Jumlah</b></td>
    <td align="center" rowspan="2" colspan="2" width="86" bgcolor="#CCCCCC"><b>Nilai barang</b></td>  
<tr >
  <td width="59" bgcolor="#CCCCCC" align="center">Jenis</td>
  <td width="44" bgcolor="#CCCCCC" align="center">Nomor</td>
  <td width="77" bgcolor="#CCCCCC" align="center">Tanggal</td>
  <td width="174" bgcolor="#CCCCCC" align="center">Nomor</td>
  <td width="70" bgcolor="#CCCCCC" align="center" >Tanggal</td>
  </tr>
	<?php
	# Query utama. Query ini sama dg yg dipakai Paging di atas

	$dataSql = "SELECT T1.kd_barang, T1.nm_barang, T1.satuan, T2.nomor, T2.no_bpb, T2.tgl_bpb, T2.pemasok, T2.jenis_dokpab, T2.no_dokpab, T2.tgl_dokpab, T3.nomor, T3.kode, T3.jumlah, T3.valuta, T3.nilai, T4.kode_pemasok, T4.nama FROM barang As T1, pemasukan As T2, pemasukan_detail As T3, pemasok as T4
		 WHERE T1.kd_barang = T3.kode and T2.pemasok = T4.kode_pemasok
		 AND T2.nomor = T3.nomor and T2.tgl_dokpab between '".InggrisTgl($_POST['tgl'])."' AND '".InggrisTgl($_POST['tglakhir'])."'	
		 ORDER BY T2.nomor ASC LIMIT $hal,$limit";
 
	$dataQry = mysql_query($dataSql, $koneksidb) or die ("Error Query".mysql_error());
	$nomor = 0;
	while ($dataRow = mysql_fetch_array($dataQry)) {
		$nomor++;
	?>
  <tr>
    <td align="center"><?php echo $nomor; ?></td>
    <td align="center"><?php echo $dataRow['jenis_dokpab']; ?></td>
    <td align="center"><?php echo $dataRow['no_dokpab']; ?></td>
    <td align="center"><?php echo IndonesiaTgl($dataRow['tgl_dokpab']); ?></td>
    <td align="center"><?php echo $dataRow['no_bpb']; ?></td>
    <td align="center"><?php echo IndonesiaTgl($dataRow['tgl_bpb']); ?></td>
    <td><?php echo $dataRow['nama']; ?></td>
    <td align="center"><?php echo $dataRow['kode']; ?></td>
    <td align="left"><?php echo $dataRow['nm_barang']; ?></td>
    <td align="center"><?php echo $dataRow['satuan']; ?></td>
    <td align="right"><?php echo format_angka($dataRow['jumlah']); ?></td>
    <td align="left"><?php echo $dataRow['valuta']; ?></td>&nbsp;<td align="right"><?php echo format_angka($dataRow['nilai']); ?></td>
  </tr>
  <?php } ?>
  <?php
  echo "<table width='100%' border='0'>
<tr>
<td align='left' colspan='12'>Jumlah : $total_pages Records
</td>
</tr>
<tr bgcolor='#B0C4DE'><td><div align='center'>$pagination</div></td></tr>
</table>";
?>
</table>
