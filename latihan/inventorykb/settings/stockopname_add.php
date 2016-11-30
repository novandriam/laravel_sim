<?php
include_once "library/inc.connection.php";
include_once "library/inc.library.php";


# TAMPILKAN DATA KE FORM
$Tglstock		 	= isset($_POST['cmbTglstock']) ? $_POST['cmbTglstock'] : date('d-m-Y');
$Tglsurat		 	= isset($_POST['cmbTglsurat']) ? $_POST['cmbTglsurat'] : date('d-m-Y');
?>

<head>
<script type="text/javascript" src="js/jquery-1.1.3.1.pack.js"></script>
<script type="text/javascript" src="jquery-1.7.1.min.js"></script>
<script src="js/jquery.tabs.pack.js" type="text/javascript"></script>
<link rel="stylesheet" href="js/jquery.tabs.css" type="text/css" media="print, projection, screen">
<script type="text/javascript">
$(function() {
	$('#container').tabs({ fxSlide: true, fxFade: true, fxSpeed: 'normal' });
});
            function hitung(){
             var x = $('#count').val();
             for(i=1;i<=x;i++){
                  var kode = $('#kode'+i).val();
                  var saldo = $('#saldo'+i).val();
                  var stockopname = $('#stockopname'+i).val();
                  if(stockopname==null){
                    stockopname= 0;
                  }
                  var selisih = saldo - stockopname;
                  $('#selisih'+i).val(selisih);
             }
       }

       function simpan(){
            var x = $('#count').val();
            for(i=1;i<=x;i++){
                 var cmbTglstock = $('#cmbTglstock').val();
                 var no_surat_tugas = $('#no_surat_tugas').val();
                 var cmbTglsurat = $('#cmbTglsurat').val();
                 var petugas = $('#petugas').val();
                 var kode = $('#kode'+i).val();
                 var saldo = $('#saldo'+i).val();
                 var stockopname = $('#stockopname'+i).val();
                 var selisih = $('#selisih'+i).val();
                 if (kode == null){
                        //jangan dieksekusi
                 }else{
                       $.post("simpan_stockopname.php?module=simpan",{cmbTglstock: cmbTglstock, no_surat_tugas : no_surat_tugas, cmbTglsurat : cmbTglsurat, petugas: petugas, kode :kode, saldo: saldo, stockopname: stockopname, selisih: selisih},function(data){});
                 }
            }
            alert("Simpan Data Selesai");
	
       }

</script>
<title>Input Stock Opname</title>
<style type="text/css">
<!--
.orange {
	background-color: #FF9900;
}
.blue {
	background-color: #CCCCCC;
}
.putih {
	background-color: #FFFFFF;
}
.style1 {color: #FF0000}
-->
</style>
</head>
<body>

<table class="table-list" width="100%" border="0" cellspacing="0"cellpadding="0">
<tr>
	  <td colspan="3"><h2>INPUT HASIL STOCK OPNAME </h2></td>
	</tr>
        <tr>
	  <td align="left" colspan="3">Tanggal Stock Opname:
  <?php echo form_tanggal("cmbTglstock",$Tglstock); ?></td>
	</tr>
    <tr>
      <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
    </tr>
    <tr>
	  <td width="15%"><b>No Surat Tugas</b></td>
	  <td width="1%"><b>:</b></td>
	  <td width="84%"><input name="no_surat_tugas" type="text" id="no_surat_tugas" size="60" /></td></tr>
  <tr>
    <td><b>Tanggal Surat Tugas</b></td>
    <td><b>:</b></td>
    <td><?php echo form_tanggal("cmbTglsurat",$Tglsurat); ?></td>
  </tr>
  <tr>
    <td><b>Petugas BC</b></td>
    <td> <b>:</b></td>
    <td><input name="petugas" type="text" id="petugas" size="60" /></td>
  </tr>
   <tr>
    <td colspan="3"><span class="style1">Sebelum melakukan penyimpanan data, pastikan data-data telah lengkap dan benar </span>&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" id="submit" value="Hitung" onClick="hitung();"/>
<input type="submit" name="submit" id="submit" value="Simpan" onClick="simpan();"/>&nbsp;&nbsp;&nbsp;<input type="button" value="Batal" onClick="self.history.back()" /></td>
  </tr>
</table>
<div id="container">
	<ul>
		<li><a href="#fragment-1"><span>Bahan baku/penolong</span></a></li>

		<li><a href="#fragment-2"><span>Barang Jadi</span></a></li>
		<li><a href="#fragment-3"><span>Barang Modal</span></a></li>
	  <li><a href="#fragment-4"><span>Barang Sisa/Scrap</span></a></li>

	</ul>

<?php
//script yang dimodifikasi , sehingga tidak terjadi penulisan berulang untuk kodenya
  $kat = mysql_query("select * from kategori"); //perintah select disini untuk mendapatkan kode kategori saja untuk looping fragment
  $id = 1;
  $fragment = 1;
  while($rkat = mysql_fetch_array($kat)){
              echo "<div id='fragment-".$fragment."'>";  //pembuka tab
              $sql = mysql_query("select distinct T1.kd_kategori, T2.* from barang as T1, kategori as T2 WHERE T1.kd_kategori = T2.kd_kategori and T1.kd_kategori='$rkat[kd_kategori]' order by T2.kd_kategori");
              while($rsql = mysql_fetch_array($sql)){
                          echo "Kategori <input type='text' readonly='readonly' name='kategori' size='4' id='kategori'  value='$rsql[kd_kategori]'/><input type='text' size='40' readonly='readonly' name='nmkategori' size='4' id='nmkategori'  value='$rsql[nm_kategori]'/><br>";
                          echo "<table width='100%' border='0' cellspacing='0' cellpadding='0'>
                                <tr>
                                    <td width='4' bgcolor='#999999'><div align='center'>No</div></td>
                                    <td width='26' bgcolor='#999999'><div align='center'>Kode Barang</div></td>
                                    <td width='64' bgcolor='#999999'><div align='center'>Nama Barang</div></td>
                                    <td width='10' bgcolor='#999999'><div align='center'>Sat</div></td>
                                    <td width='14' bgcolor='#999999'><div align='center'>Jumlah Stock</div></td>
                                    <td width='14' bgcolor='#999999'><div align='center'>Stock Opname</div></td>
                                    <td width='14' bgcolor='#999999'><div align='center'>Selisih</div></td>
                                </tr>";
                          $brg = mysql_query("select * from barang where kd_kategori='$rsql[kd_kategori]'");
                          $no = 1;
                          while($rbrg = mysql_fetch_array($brg)){
                                    echo "<tr width='100%'>
          <td><input class='blue' type='text' name='no' id='no$id' size='4' readonly='readonly' value='$no'></td>
  <td><input class='blue' type='text' align='center' name='kode' readonly='readonly' id='kode$id' size='26' value='$rbrg[kd_barang]'></td>
                                              <td><input class='blue' type='text' align='left' name='nama' id='nama$id' readonly='readonly' size='64' value='$rbrg[nm_barang]'></td>
                                              <td><input class='blue' type='text' align='center' name='satuan' id='satuan$id' readonly='readonly' size='10' value='$rbrg[satuan]'></td>
                                              <td align='right'><input class='blue' type='text'  name='saldo' readonly='readonly'  id='saldo$id' size ='14' value='$rbrg[stok]'></td>
                                              <td align='right'><input class='putih' type='text' name='stockopname' id='stockopname$id' value='$rbrg[stok]' size='14' /></td>
                                              <td><input class='blue' type='text' align='rigth' name='selisih' size='14' readonly='readonly' id='selisih$id'></td>
                                         </tr>";
                                    $no++;
                                    $id++;
                          }
                          echo "</table>";
              }
  echo "</div>"; //penutup tab
  $fragment++;
  }
  echo "<input type='hidden' id='count' value='$id'>";
?>
</div>
</body>
</html>