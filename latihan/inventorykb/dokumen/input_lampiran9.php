<?php
include_once "library/config.php";
include_once "library/inc.library.php";
$tglpendaftaran		= isset($_POST['cmbtglpendaftaran']) ? $_POST['cmbtglpendaftaran'] : date('Y-m-d');
$tglinvoice  		= isset($_POST['cmbtglinvoice']) ? $_POST['cmbtglinvoice'] : date('Y-m-d');
$tglpackinglist		= isset($_POST['cmbtglpackinglist']) ? $_POST['cmbtglpackinglist'] : date('Y-m-d');
$tglkontrak		 	= isset($_POST['cmbtglkontrak']) ? $_POST['cmbtglkontrak'] : date('Y-m-d');
$tglsuratjalan	 	= isset($_POST['cmbtglsuratjalan']) ? $_POST['cmbtglsuratjalan'] : date('Y-m-d');
$tglsuratkeputusan 	= isset($_POST['cmbtglsuratkeputusan']) ? $_POST['cmbtglsuratkeputusan'] : date('Y-m-d');
$tgljatuhtempo  	= isset($_POST['cmbtgljatuhtempo']) ? $_POST['cmbtgljatuhtempo'] : date('Y-m-d');
$tgljaminan     	= isset($_POST['cmbtgljaminan']) ? $_POST['cmbtgljaminan'] : date('Y-m-d');
$tglbuktijaminan  	= isset($_POST['cmbtglbuktijaminan']) ? $_POST['cmbtglbuktijaminan'] : date('Y-m-d');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>input lampiran 9</title>
<script type="text/javascript" src="js/jquery-1.1.3.1.pack.js"></script>
<script src="js/jquery.tabs.pack.js" type="text/javascript"></script>
<link rel="stylesheet" href="js/jquery.tabs.css" type="text/css" media="print, projection, screen">
<script type="text/javascript">
$(function() {
	$('#container').tabs({ fxSlide: true, fxFade: true, fxSpeed: 'normal' });
});

	function pengusaha_asal(){
	    var kode = $('#kode_pengusaha_asal').val();
		$.post("data.php", { kode: kode }, function(data) {
            var output = data.split('#');
		    $("#npwp_pengusaha_asal").val(output[2]);
		    $("#nama_pengusaha_asal").val(output[0]);
		    $("#nomor_ijin_tpb_pengusaha_asal").val(output[3]);
		    $("#alamat_pengusaha_asal").val(output[1]);
        });
	}
	
	function pengusaha_tujuan(){
	    var kode = $('#kode_pengusaha_tujuan').val();
		$.post("data.php", { kode: kode }, function(data) {
            var output = data.split('#');
		    $("#npwp_pengusaha_tujuan").val(output[2]);
		    $("#nama_pengusaha_tujuan").val(output[0]);
		    $("#nomor_ijin_tpb_pengusaha_tujuan").val(output[3]);
		    $("#alamat_pengusaha_tujuan").val(output[1]);
        });
	}
	
	function tambah_dokumen(){
	   var jml_dokumen = $('#jml_dokumen').val();
	   if(jml_dokumen==""){ jml_dokumen = 0; }
	   var total_dokumen = eval(jml_dokumen) +1;
	   $('#jml_dokumen').val(total_dokumen);
	   var jenis_dokumen = "jenis_dokumen"+total_dokumen;
	   var nomor_dokumen = "nomor_dokumen"+total_dokumen;
	   var tanggal_dokumen = "tanggal_dokumen"+total_dokumen;		
	   var el = $("<Tr><td><input name="+jenis_dokumen+" type=\"text\" size=\"80\" /></td><td><input name="+nomor_dokumen+" type=\"text\" size=\"40\" /></td><td><input type=\"text\" name="+tanggal_dokumen+" /></td></tr>");
		el.insertAfter("#dokumen");
	}
	
	function tambah_barang(){
	  var jml_barang = $('#jml_barang').val();
	  if(jml_barang==""){ jml_barang = 0; }
	  var total_barang = eval(jml_barang) +1;
	  $('#jml_barang').val(total_barang);
	  var kode_barang = "kode_barang"+total_barang;
	  var uraian = "uraian"+total_barang;
      var jumlah_jenis = "jumlah_jenis"+total_barang;
	  var berat_bersih = "berat_bersih"+total_barang;
	  var volume = "volume"+total_barang;
	  var nilai_cif = "nilai_cif"+total_barang;
	  var el = $("<tr><td><select name="+kode_barang+"><?php
	       $sql = mysql_query("select * from barang");
		   while($r = mysql_fetch_array($sql)){
		           echo "<option value='$r[kd_barang]'>$r[nm_barang]</option>";
		   }	  
	  ?><option selected=\"selected\">Pilih Barang</option></select></td><td><input name="+uraian+" type=\"text\" size=\"40\" /></td><td><input name="+jumlah_jenis+" type=\"text\"  size=\"10\" /></td><td><input name="+berat_bersih+" type=\"text\" size=\"10\" /></td><td><input name="+volume+" type=\"text\" size=\"10\" /></td><td><input type=\"text\" name="+nilai_cif+" /></td></tr>");
	  el.insertAfter("#barang"); 
	}
	
	function tambah_konversi(){
	     var jml_konversi = $('#jml_konversi').val();
	  if(jml_konversi==""){ jml_konversi = 0; }
	  var total_konversi = eval(jml_konversi) +1;
	  $('#jml_konversi').val(total_konversi);
	  var kode_barang_konversi = "kode_barang_konversi"+total_konversi;
	  var uraian_konversi = "uraian_konversi"+total_konversi;
	  var berat_bersih_konversi = "berat_bersih"+total_konversi;
	  var volume_konversi = "volume"+total_konversi;
	  var nilai_cif_konversi = "nilai_cif"+total_konversi;
	  var el = $("<tr><td><select name="+kode_barang_konversi+"><?php
	       $sql = mysql_query("select * from barang");
		   while($r = mysql_fetch_array($sql)){
		           echo "<option value='$r[kd_barang]'>$r[nm_barang]</option>";
		   }
	  
	  ?><option selected=\"selected\">Pilih Barang</option></select></td><td><input name="+uraian_konversi+" type=\"text\" size=\"40\" /><td><input name="+berat_bersih_konversi+" type=\"text\" size=\"10\" /></td><td><input name="+volume_konversi+" type=\"text\" size=\"10\" /></td><td><input type=\"text\" name="+nilai_cif_konversi+" /></td></tr>");
	  el.insertAfter("#konversi"); 
	}
	
	
</script>

<style type="text/css">
<!--
.style8 {color: #FFFFFF; font-weight: bold; }
-->
</style>
</head>

<body>
<form id="form1" method="post" action="simpan_lampiran9.php?act=insert">
<p align="right" style="padding-right::20px"><input type="submit" value="Simpan" /> <input type="reset" value="Batal" /><br /></p>
<div id="container">
	<ul>
		<li><a href="#fragment-1"><span>Header</span></a></li>
        <li><a href="#fragment-2"><span>TPB Asal </span></a></li>
		<li><a href="#fragment-3"><span>TPB Tujuan</span></a></li>
		<li><a href="#fragment-4"><span>Dokumen</span></a></li>
	    <li><a href="#fragment-5"><span>Riwayat Barang</span></a></li>
        <li><a href="#fragment-6"><span>Perdagangan</span></a></li>
        <li><a href="#fragment-7"><span>Pengangkutan</span></a></li>
        <li><a href="#fragment-8"><span>Pengemas/Barang</span></a></li>
        <li><a href="#fragment-9"><span>BeaCukai</span></a></li>
        <li><a href="#fragment-10"><span>Konversi Barang</span></a></li>
	</ul>
    <div id="fragment-1">
      <table width="1212" border="0">
  <tr>
    <td width="170">Nomor Pengajuan</td>
    <td width="10">&nbsp;</td>
    <td width="306"><input type="text" name="nomor_pengajuan" id="nomor_pengajuan" /></td>
    <td width="229">Nomor Pendaftaran</td>
    <td width="475"><input type="text" name="nomor_pendaftaran" id="nomor_pendaftaran" />
      Tgl
      <?php echo form_tanggal("cmbtglpendaftaran",$tglpendaftaran); ?></td>
  </tr>
  <tr>
    <td>Kantor Pabean Asal</td>
    <td>&nbsp;</td>
    <td><select name="kantor_pabean_asal" id="kantor_pabean_asal" style="width:200px">
      <option selected="selected">Pilih Kantor Pabean</option>
      <?php
		$kp = mysql_query("select * from kppbc");
		while($rkp = mysql_fetch_array($kp)){
			echo "<option value='$rkp[KdKpbc] $rkp[UrKdKpbc]'>$rkp[KdKpbc] $rkp[UrKdKpbc]</option>";
		}
	?>
    </select></td>
    <td>NIP Pejabat Pabean Asal</td>
    <td><input type="text" name="nip_pejabat_pabean_asal" id="nip_pejabat_pabean_asal" /></td>
  </tr>
  <tr>
    <td>Kantor Pabean Tujuan</td>
    <td>&nbsp;</td>
    <td><select name="kantor_pabean_tujuan" id="kantor_pabean_tujuan" style="width:200px">
      <option selected="selected">Pilih Kantor Pabean</option>
    <?php
		$kp = mysql_query("select * from kppbc");
		while($rkp = mysql_fetch_array($kp)){
			echo "<option value='$rkp[KdKpbc] $rkp[UrKdKpbc]'>$rkp[KdKpbc] $rkp[UrKdKpbc]</option>";
		}
	?>
    </select></td>
    <td>Nama Pejabat Pabean Asal</td>
    <td><input type="text" name="nama_pejabat_pabean_asal" id="nama_pejabat_pabean_asal" /></td>
  </tr>
  <tr>
    <td>Jenis TPB Asal</td>
    <td>&nbsp;</td>
    <td><select name="jenis_tpb_asal" id="jenis_tpb_asal">
      <option value="Jenis TPB">Jenis TPB</option>
      <option value="Gudang Berikat">Gudang Berikat</option>
      <option value="Kawasan Berikat">Kawasan Berikat</option>
      <option value="Tempat Penyelenggaraan Pameran Berikat">Tempat Penyelenggaraan Pameran Berikat</option>
      <option value="Toko Bebas Bea">Toko Bebas Bea</option>
      <option value="Tempat Lelang Berikat">Tempat Lelang Berikat</option>
      <option value="Kawasan Daur Ulang Berikat">Kawasan Daur Ulang Berikat</option>
    </select></td>
    <td>NIP Pejabat Pabean Tujuan</td>
    <td><input type="text" name="nip_pejabat_pabean_tujuan" id="nip_pejabat_pabean_tujuan" /></td>
  </tr>
  <tr>
    <td> Jenis TPB Tujuan</td>
    <td>&nbsp;</td>
    <td><select name="jenis_tpb_tujuan" id="jenis_tpb_tujuan">
      <option value="Jenis TPB">Jenis TPB</option>
      <option value="Gudang Berikat">Gudang Berikat</option>
      <option value="Kawasan Berikat">Kawasan Berikat</option>
      <option value="Tempat Penyelenggaraan Pameran Berikat">Tempat Penyelenggaraan Pameran Berikat</option>
      <option value="Toko Bebas Bea">Toko Bebas Bea</option>
      <option value="Tempat Lelang Berikat">Tempat Lelang Berikat</option>
      <option value="Kawasan Daur Ulang Berikat">Kawasan Daur Ulang Berikat</option>
    </select></td>
    <td>Nama Pejabat Pabean Tujuan</td>
    <td><input type="text" name="nama_pejabat_pabean_tujuan" id="nama_pejabat_pabean_tujuan" /></td>
  </tr>
  <tr>
    <td>Tujuan Pengiriman</td>
    <td>&nbsp;</td>
    <td><select name="tujuan_pengiriman" id="tujuan_pengiriman">
      <option value="Tujuan">Tujuan</option>
      <option value="Disubkontrakan">Disubkontrakan</option>
      <option value="Dipinjamkan">Dipinjamkan</option>
      <option value="Diperbaiki">Diperbaiki</option>
      <option value="Dipamerkan">Dipamerkan</option>
      <option value="Dikembalikan">Dikembalikan</option>
      <option value="Lainnya">Lainnya</option>
    </select></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
    </div>
    <div id="fragment-2">
   	  <table width="651" border="0">
    <tr>
            <td width="172">Kode</td>
            <td width="10">&nbsp;</td>
            <td width="304"><select name="kode_pengusaha_asal" id="kode_pengusaha_asal" onchange="pengusaha_asal()">
              <option selected="selected">Pengusaha</option>
            <?php
				$kp = mysql_query("select * from infokb");
				while($rkp = mysql_fetch_array($kp)){
					echo "<option value='$rkp[kode]'>$rkp[kode]</option>";
				}
			?>
            </select>
            </td>
          </tr>
          <tr>
            <td>NPWP</td>
            <td>&nbsp;</td>
            <td><input type="text" name="npwp_pengusaha_asal" id="npwp_pengusaha_asal" /></td>
          </tr>
          <tr>
            <td>Nama</td>
            <td>&nbsp;</td>
            <td><input name="nama_pengusaha_asal" type="text" id="nama_pengusaha_asal" size="50" /></td>
          </tr>
          <tr>
            <td>No. Ijin TPB</td>
            <td>&nbsp;</td>
            <td><input type="text" name="nomor_ijin_tpb_pengusaha_asal" id="nomor_ijin_tpb_pengusaha_asal" /></td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td>&nbsp;</td>
            <td><input name="alamat_pengusaha_asal" type="text" id="alamat_pengusaha_asal" size="80" /></td>
          </tr>
        </table>
    </div>
    <div id="fragment-3">
      <table width="651" border="0">
        <tr>
          <td width="172">Kode</td>
          <td width="10">&nbsp;</td>
          <td width="304"><select name="kode_pengusaha_tujuan" id="kode_pengusaha_tujuan" onchange="pengusaha_tujuan()">
              <option selected="selected">Pengusaha</option>
              <?php
				$kp = mysql_query("select * from infokb");
				while($rkp = mysql_fetch_array($kp)){
					echo "<option value='$rkp[kode]'>$rkp[kode]</option>";
				}
			?>
            </select>
          </td>
        </tr>
        <tr>
          <td>NPWP</td>
          <td>&nbsp;</td>
          <td><input type="text" name="npwp_pengusaha_tujuan" id="npwp_pengusaha_tujuan" /></td>
        </tr>
        <tr>
          <td>Nama</td>
          <td>&nbsp;</td>
          <td><input name="nama_pengusaha_tujuan" type="text" id="nama_pengusaha_tujuan" size="50" /></td>
        </tr>
        <tr>
          <td>No. Ijin TPB</td>
          <td>&nbsp;</td>
          <td><input type="text" name="nomor_ijin_tpb_pengusaha_tujuan" id="nomor_ijin_tpb_pengusaha_tujuan" /></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td>&nbsp;</td>
          <td><input name="alamat_pengusaha_tujuan" type="text" id="alamat_pengusaha_tujuan" size="80" /></td>
        </tr>
      </table>
    </div>
    <div id="fragment-4">
      <table width="660" border="0">
        <tr>
          <td>Invoice</td>
          <td>&nbsp;</td>
          <td><input type="text" name="invoice" id="invoice" /> 
            Tgl <?php echo form_tanggal("cmbtglinvoice",$tglinvoice); ?></td>
        </tr>
        <tr>
          <td width="205">Packing List</td>
            <td width="10">&nbsp;</td>
            <td width="431"><input type="text" name="packinglist" id="packinglist" /> 
              Tgl 
          <?php echo form_tanggal("cmbtglpackinglist",$tglpackinglist); ?></td>
        </tr>
          <tr>
            <td>Kontrak</td>
            <td>&nbsp;</td>
            <td><input type="text" name="kontrak" id="kontrak" /> 
              Tgl 
            <?php echo form_tanggal("cmbtglkontrak",$tglkontrak); ?></td>
          </tr>
          <tr>
            <td>Surat Jalan</td>
            <td>&nbsp;</td>
            <td><input type="text" name="surat_jalan" id="surat_jalan" />              Tgl 
            <?php echo form_tanggal("cmbtglsuratjalan",$tglsuratjalan); ?></td>
          </tr>
          <tr>
            <td>Surat Keputusan/Persetujuan</td>
            <td>&nbsp;</td>
            <td><input type="text" name="surat_keputusan" id="surat_keputusan" />              Tgl 
            <?php echo form_tanggal("cmbtglsuratkeputusan",$tglsuratkeputusan); ?></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table>
      <p>
        <input type="button" name="add_dokumen" id="add_dokumen" value="Tambah Dokumen" onclick="tambah_dokumen()"/>
        <input type="hidden" name="jml_dokumen" id="jml_dokumen" />
      </p>
      <table width="891" border="0">
        <tr id="dokumen">
          <td width="480" bgcolor="#003366"><div align="center" class="style8">Jenis Dokumen</div></td>
          <td width="241" bgcolor="#003366"><div align="center" class="style8">Nomor </div></td>
          <td width="156" bgcolor="#003366"><div align="center" class="style8">Tanggal</div></td>
        </tr>
      </table>
      <p>&nbsp;</p>
    </div>
    <div id="fragment-5">
      <table width="589" border="0">
        <tr>
          <td width="156">Nomor BC 2.7 Asal </td>
          <td width="10">&nbsp;</td>
          <td width="521"><input type="text" name="nomor_bc_asal" id="nomor_bc_asal" /> 
            Tgl <?php echo form_tanggal("cmbtglbcasal",$tglbcasal); ?></td>
        </tr>
      </table>
    </div>
    <div id="fragment-6">
      <table width="500" border="0">
        <tr>
          <td width="203">Jenis Valuta Asing</td>
          <td width="10">&nbsp;</td>
          <td width="273"><select name="jenis_valuta_asing" id="jenis_valuta_asing"><option "selected="selected">Jenis Valuta</option>
		  <?php
			$jv = mysql_query("select * from matauang order by jenis");
			while($rjv = mysql_fetch_array($jv)){
				echo "<option value='$rjv[jenis] $rjv[nama]'>$rjv[jenis] $rjv[nama]</option>";
			}			
		  ?>
          </select>
          </td>
        </tr>
        <tr>
          <td>Nilai CIF</td>
          <td>&nbsp;</td>
          <td><input type="text" name="nilai_cif" id="nilai_cif" /></td>
        </tr>
        <tr>
          <td>Harga Penyerahan</td>
          <td>&nbsp;</td>
          <td><input type="text" name="harga_penyerahan" id="harga_penyerahan" /></td>
        </tr>
      </table>
    </div>
    <div id="fragment-7">
      <table width="500" border="0">
        <tr>
          <td width="208">Jenis Sarana Pengangkut Darat</td>
          <td width="10">&nbsp;</td>
          <td width="268"><input type="text" name="jenis_sarana_pengangkut_darat" id="jenis_sarana_pengangkut_darat" /></td>
        </tr>
        <tr>
          <td>No Polisi</td>
          <td>&nbsp;</td>
          <td><input type="text" name="nomor_polisi" id="nomor_polisi" /></td>
        </tr>
      </table>
    </div>
    <div id="fragment-8">
      <table width="914" border="0">
        <tr>
          <td width="317">Merk &amp; Nomor Kemasan /petikemas dan jumlah petikemas</td>
          <td width="9">&nbsp;</td>
          <td width="225"><input name="merk_no_petikemas" type="text" id="merk_no_petikemas" size="45" /></td>
          <td width="10">&nbsp;</td>
          <td width="156">Volume (m3)</td>
          <td width="180"><input type="text" name="volume" id="volume" /></td>
        </tr>
        <tr>
          <td>Jumlah &amp; Jenis Kemasan</td>
          <td>&nbsp;</td>
          <td><input type="text" name="jumlah_jenis_kemasan" id="jumlah_jenis_kemasan" /></td>
          <td>&nbsp;</td>
          <td>Berat Kotor (kg)</td>
          <td><input type="text" name="berat_kotor" id="berat_kotor" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>Berat Bersih (kg)</td>
          <td><input type="text" name="berat_bersih" id="berat_bersih" /></td>
        </tr>
      </table>
      
      <p>
        <input type="button" name="add_barang" id="add_barang" value="Tambah Barang" onclick="tambah_barang()"/>
        <input type="hidden" name="jml_barang" id="jml_barang" />
      </p>
      <table width="709" border="0">
        <tr id="barang" >
          <td width="105" bgcolor="#003366"><div align="center"><span class="style8"> Barang</span></div></td>
          <td width="240" bgcolor="#003366"><div align="center" class="style8">Pos tarif/HS , uraian</div></td>
          <td width="60" bgcolor="#003366"><div align="center" class="style8">
            <div align="center">Jumlah &amp;Jenis</div>
          </div></td>
          <td width="71" bgcolor="#003366"><div align="center"><span class="style8">Berat Bersih(kg)</span></div></td>
          <td width="60" bgcolor="#003366"><div align="center" class="style8">
            <div align="left">volume (m3)</div>
          </div></td>
          <td width="147" bgcolor="#003366"><div align="center" class="style8">nilai CIF</div></td>
        </tr>
       </table>
    </div>
    <div id="fragment-9">
      <table width="500" border="0">
         <tr>
           <td width="162">Nomor Segel</td>
           <td width="10">&nbsp;</td>
           <td width="314"><input type="text" name="nomor_segel" id="nomor_segel" /></td>
         </tr>
         <tr>
           <td>Jenis</td>
           <td>&nbsp;</td>
           <td><input type="text" name="jenis" id="jenis" /></td>
         </tr>
         <tr>
           <td>Catatan BC Tujuan</td>
           <td>&nbsp;</td>
           <td><input name="catatan_bc_tujuan" type="text" id="catatan_bc_tujuan" size="45" /></td>
         </tr>
       </table>
    </div>
    <div id="fragment-10">
      <input type="button" name="add_konversi" id="add_konversi" value="Tambah Konversi" onclick="tambah_konversi()"/>
      <input type="hidden" name="jml_konversi" id="jml_konversi" />
      <br><bR>
      <table width="648" border="0">
        <tr id="konversi">
          <td width="105" bgcolor="#003366"><div align="center"><span class="style8"> Barang</span></div></td>
          <td width="240" bgcolor="#003366"><div align="center" class="style8">Pos tarif/HS , uraian</div></td>
          <td width="71" bgcolor="#003366"><div align="center"><span class="style8">Berat Bersih(kg)</span></div></td>
          <td width="60" bgcolor="#003366"><div align="center" class="style8">
            <div align="left">volume (m3)</div>
          </div></td>
          <td width="150" bgcolor="#003366"><div align="center" class="style8">nilai CIF</div></td>
        </tr>
      </table>
    </div>
</div>
</form>
</body>
</html>
