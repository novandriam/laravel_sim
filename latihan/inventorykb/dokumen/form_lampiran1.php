<?php
include_once "library/config.php";
include_once "library/inc.library.php";
$tglpendaftaran		= isset($_POST['cmbtglpendaftaran']) ? $_POST['cmbtglpendaftaran'] : date('d-m-Y');
$tglpackinglist		= isset($_POST['cmbtglpackinglist']) ? $_POST['cmbtglpackinglist'] : date('d-m-Y');
$tglkontrak		 	= isset($_POST['cmbtglkontrak']) ? $_POST['cmbtglkontrak'] : date('d-m-Y');
$tglsuratkeputusan 	= isset($_POST['cmbtglsuratkeputusan']) ? $_POST['cmbtglsuratkeputusan'] : date('d-m-Y');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pemasukan Barang</title>
<script type="text/javascript" src="js/jquery-1.1.3.1.pack.js"></script>
<script type="text/javascript">
  
function tambah_dokumen(){
	   var jml_dokumen = $('#jml_dokumen').val();
	   if(jml_dokumen==""){ jml_dokumen = 0; }
	   var total_dokumen = eval(jml_dokumen) +1;
	   $('#jml_dokumen').val(total_dokumen);
	   var jenis_dokumen = "jenis_dokumen"+total_dokumen;
	   var nomor_dokumen = "nomor_dokumen"+total_dokumen;
	   var tanggal_dokumen = "tanggal_dokumen"+total_dokumen;		
	   var el = $("<Tr><td><input name="+jenis_dokumen+" type=\"text\" size=\"67\" /></td><td><input name="+nomor_dokumen+" type=\"text\" size=\"30\" /></td><td><input name="+tanggal_dokumen+" type=\"text\" /></td></tr>");
		el.insertAfter("#dokumen");
	}

function tambah_barang(){
	  var jml_barang = $('#jml_barang').val();
	  if(jml_barang==""){ jml_barang = 0; }
	  var total_barang = eval(jml_barang) +1;
	  $('#jml_barang').val(total_barang);
	  var uraian = "uraian"+total_barang;
      var jumlah_barang = "jumlah_barang"+total_barang;
	  var harga = "harga"+total_barang;
	  var el = $("<tr><td><input name="+uraian+" type=\"text\" size=\"75\" /></td><td><input name="+jumlah_barang+" type=\"text\" size=\"21\" /></td><td><input type=\"text\" name="+harga+" /></td></tr>");
	  el.insertAfter("#barang"); 
	}

</script>
<style type="text/css">
<!--
.style2 {font-size: 12px}
.style7 {color: #FFFFFF; font-weight: bold; }
.style8 {
	color: #0000FF;
	font-size: 14px;
}
-->
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="simpan_lampiran1.php?act=insert" padding-left:0px">
<tr>
	  <td colspan="1" align="right"><h2 class="style8">Tambah dokumen BC 4.0</h2></td>
  </tr>
<p align="right" style="padding-right::20px"><input type="submit" value="Simpan"/> &nbsp;&nbsp;&nbsp;<input type="button" value="Kembali" onclick="self.history.back()" /><br /></p>
	
    
        <table width="96%" bgcolor="#CCCCCC">
                
    <tr>
    <tr>
      <td width="100%" bgcolor="#030" height="25" colspan="6">&nbsp;&nbsp;<span class="style7">HEADER</span></td>
     
    </tr>
      <td width="35%" class="style2">Nomor Pengajuan</td>
      <td width="1%"><span class="style2"></span></td>
      <td colspan="4"><span class="style2">
        <input type="text" name="nomor_pengajuan" id="nomor_pengajuan" />
      </span><span class="style2"></span></td>
    </tr>
    <tr>
      <td class="style2">Kantor Pabean</td>
      <td><span class="style2"></span></td>
      <td width="41%"><span class="style2">
        <select name="kantor_pabean_asal" id="kantor_pabean_asal" style="width:200px">
      <option selected="selected">Pilih Kantor Pabean</option>
      <?php
		$kp = mysql_query("select * from kppbc");
		while($rkp = mysql_fetch_array($kp)){
			echo "<option value='$rkp[KdKpbc] $rkp[UrKdKpbc]'>$rkp[KdKpbc] - $rkp[UrKdKpbc]</option>";
		}
	?>
    </select>
      </span></td>
       <td width="25%"><span class="style2">Nama Pengirim</span></td>
      <td width="1%"><span class="style2"></span></td>
      <td width="18%"><span class="style2">
        <select name="nama_pengirim" id="nama_pengirim" style="width:300px">
      <option selected="selected">Pilih Nama Pengirim</option>
      <?php
		$kp = mysql_query("select kode_pemasok,nama from pemasok");
		while($rkp = mysql_fetch_array($kp)){
			echo "<option value='$rkp[kode_pemasok] $rkp[nama]'>$rkp[kode_pemasok] - $rkp[nama]</option>";
		}
	?>
    </select>
      </span></td>
    </tr>
    <tr>
      <td class="style2">Jenis TPB</td>
      <td><span class="style2"></span></td>
      <td><select name="jenis_tpb" id="jenis_tpb">
        <option>Pilih Jenis TPB</option>
        <option value="Gudang Berikat">Gudang Berikat</option>
        <option value="Kawasan Berikat">Kawasan Berikat</option>
        <option value="Tempat Penyelenggaraan Pameran Berikat">Tempat Penyelenggaraan Pameran Berikat</option>
        <option value="Toko Bebas Bea">Toko Bebas Bea</option>
        <option value="Tempat Lelang Berikat">Tempat Lelang Berikat</option>
        <option value="Kawasan Daur Ulang Berikat">Kawasan Daur Ulang Berikat</option>
      </select>      </td>
      <td width="25%"><span class="style2">Nomor Pendaftaran</span></td>
      <td width="1%"><span class="style2"></span></td>
      <td width="18%"><span class="style2">
        <input type="text" name="nomor_pendaftaran" id="nomor_pendaftaran" />
      </span></td>
    </tr>
    <tr>
      <td class="style2">Tujuan Pengiriman</td>
      <td><span class="style2"></span></td>
      <td><select name="tujuan_pengiriman" id="tujuan_pengiriman">
        <option>Pilih Tujuan</option>
        <option value="Disubkontrakkan">Disubkontrakkan</option>
        <option value="Dipinjamkan">Dipinjamkan</option>
        <option value="Diperbaiki">Diperbaiki</option>
        <option value="Dipamerkan">Dipamerkan</option>
        <option value="Lainnya">Lainnya</option>
      </select>      </td>
      <td><span class="style2">Tanggal</span></td>
      <td><span class="style2"></span></td>
      <td><span class="style2">
        <?php echo form_tanggal("cmbtglpendaftaran",$tglpendaftaran); ?>
      </span></td>
    </tr>

    <tr>
      <td colspan="6">&nbsp;</td>
    </tr>
      </table>
    
       <table width="96%" bgcolor="#CCCCCC">
        <tr>
      <td width="100%" bgcolor="#030" height="25" colspan="6">&nbsp;&nbsp;<span class="style7">DATA DOKUMEN</span></td>
     
    </tr>
    <tr>
      <td width="100"><span class="style2">Invoice/Packing list</span></td>
      <td  width="8"><span class="style2"></span></td>
      <td width="200"><span class="style2">
        <input type="text" name="packing_list" id="packing_list" />
      </span></td>
      <td width="10%"><span class="style2">Tanggal</span></td>
      <td width="1%"><span class="style2"></span></td>
      <td width="24%"><span class="style2">
        <?php echo form_tanggal("cmbtglpackinglist",$tglpackinglist); ?>
      </span></td>
    </tr>
    <tr>
      <td><span class="style2">Kontrak</span></td>
      <td><span class="style2"></span></td>
      <td><span class="style2">
        <input type="text" name="kontrak" id="kontrak" />
      </span></td>
      <td><span class="style2">Tanggal</span></td>
      <td><span class="style2"></span></td>
      <td><span class="style2">
        <?php echo form_tanggal("cmbtglkontrak",$tglkontrak); ?>
      </span></td>
    </tr>
    <tr>
      <td><span class="style2">Surat Keputusan/Persetujuan</span></td>
      <td><span class="style2"></span></td>
      <td><span class="style2">
        <input type="text" name="surat_keputusan" id="surat_keputusan" />
      </span></td>
      <td><span class="style2">Tanggal</span></td>
      <td><span class="style2"></span></td>
      <td><span class="style2">
        <?php echo form_tanggal("cmbtglsuratkeputusan",$tglsuratkeputusan); ?>
      </span></td>
    </tr>
    <tr>
      <td colspan="6">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="6"><input type="button" name="add_dokumen" id="add_dokumen" value="Tambah Dokumen" onclick="tambah_dokumen()" />
        <input type="hidden"  name="jml_dokumen" id="jml_dokumen" />
        <br /><br />
      <table width="96%" border="0" cellpadding="0" cellspacing="0">
        <tr id="dokumen">
          <td width="401" bgcolor="#0000CC"><div align="center" class="style2"><span class="style7">Jenis Dokumen</span></div></td>
          <td width="181" bgcolor="#0000CC"><div align="center" class="style2"><span class="style7">Nomor </span></div></td>
          <td width="144" bgcolor="#0000CC"><div align="center" class="style2"><span class="style7">Tanggal</span></div></td>
        </tr>
      </table></td>
    </tr>
       </table>
   
  <table width="96%" bgcolor="#CCCCCC">
    <tr>
      <td width="100%" bgcolor="#030" height="25" colspan="6">&nbsp;&nbsp;<span class="style7">SARANA PENGANGKUT</span></td>
     
    </tr>
    <tr>
      <td width="100"><span class="style2">Jenis Sarana Pengangkut Darat</span></td>
      <td width="8"><span class="style2"></span></td>
      <td width="274"><span class="style2">
        <input type="text" name="jenis_pengangkut" id="jenis_pengangkut" />
      </span></td>
    </tr>
    <tr>
      <td><span class="style2">Nomor Polisi</span></td>
      <td><span class="style2"></span></td>
      <td><span class="style2">
        <input type="text" name="nomor_polisi" id="nomor_polisi" />
      </span></td>
    </tr>
    <tr>
      <td colspan="3">&nbsp;</td>
    </tr>
  </table>
    
    
  <table width="96%" bgcolor="#CCCCCC">
   <tr>
      <td width="100%" bgcolor="#030" height="25" colspan="6">&nbsp;&nbsp;<span class="style7">DATA KEMASAN</span></td>
     
    </tr>
      
          <tr>
      <td width="100"><span class="style2">Jenis Kemasan</span></td>
      <td width="8"><span class="style2"></span></td>
		<td width="274"><span class="style2">
        <select name="jenis_kemasan" id="jenis_kemasan" style="width:200px">
      <option selected="selected">Pilih Jenis Kemasan</option>
      <?php
		$kp = mysql_query("select * from kemasan order by id_kemasan ASC");
		while($rkp = mysql_fetch_array($kp)){
			echo "<option value='$rkp[kd_kemasan] $rkp[uraian_kemasan]'>$rkp[kd_kemasan] - $rkp[uraian_kemasan]</option>";
		}
	?>
    </select>
      </span></td>      
      
      
    </tr>
    <tr>
      <td><span class="style2">Merek Kemasan</span></td>
      <td><span class="style2"></span></td>
      <td><span class="style2">
        <input type="text" name="merek_kemasan" id="merek_kemasan" />
      </span></td>
      
    </tr>
    <tr>
      <td><span class="style2">Jumlah Kemasan</span></td>
      <td><span class="style2"></span></td>
      <td><span class="style2">
        <input type="text" name="jumlah_kemasan" id="jumlah_kemasan" />
      </span></td>
      
    </tr>
    <tr>
      <td colspan="6">&nbsp;</td>
    </tr>
  </table>
   
<table width="96%" bgcolor="#CCCCCC">
 <tr>
      <td width="100%" bgcolor="#030" height="25" colspan="6">&nbsp;&nbsp;<span class="style7">HARGA PENYERAHAN DAN DATA BARANG</span></td>
     
    </tr>
      <tr>
      <td width="100"><span class="style2">Harga Penyerahan (Rp)</span></td>
      <td width="8"><span class="style2"></span></td>
      <td width="274"><span class="style2">
        <input type="text" name="harga_penyerahan" id="harga_penyerahan" />
      </span></td>
</tr>
              <tr>
      <td  width="100"><span class="style2">Volume (m3)</span></td>
      <td  width="8"><span class="style2"></span></td>
      <td  width="274"><span class="style2">
        <input type="text" name="volume" id="volume" />
      </span></td>
      
    </tr>
    <tr>
      <td><span class="style2">Berat Kotor (Kg)</span></td>
      <td><span class="style2"></span></td>
      <td><span class="style2">
        <input type="text" name="berat_kotor" id="berat_kotor" />
      </span></td>
    
    </tr>
    <tr>
      <td><span class="style2">Berat Bersih (Kg)</span></td>
      <td><span class="style2"></span></td>
      <td><span class="style2">
        <input type="text" name="berat_bersih" id="berat_bersih" />
      </span></td>
     
    </tr>
   
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      
    </tr>
    <tr>
      <td colspan="6"><input type="button" name="add_barang" id="add_barang" value="Tambah Barang" onclick="tambah_barang()" />
        <input type="text" name="jml_barang" id="jml_barang" /><br /><br />
        <table width="723" border="0" cellpadding="0" cellspacing="0">
        <tr id="barang">
          <td width="453" valign="middle" bgcolor="#003399"><div align="center" class="style7"><span class="style2"> Uraian jumlah &amp; jenis barang secara lengkap, kode barang , merk, tipe, ukuran dan spesifikasi lain</span></div></td>
          <td width="126" valign="middle" bgcolor="#003399"><div align="center" class="style7"><span class="style2">Jumlah &amp; Jenis satuan , berat bersih (Kg),Volume (m3)</span></div></td>
          <td width="144" valign="middle" bgcolor="#003399"><div align="center" class="style7"><span class="style2">Harga Penyerahan</span></div></td>
        </tr>
      </table></td>
    </tr>
  </table>
   
<table width="96%" bgcolor="#CCCCCC">
 <tr>
      <td width="100%" bgcolor="#030" height="25" colspan="6">&nbsp;&nbsp;<span class="style7">NAMA PEJABAT BEA DAN CUKAI</span></td>
     
    </tr>
         <tr>
      <td width="80"><span class="style2">NIP</span></td>
      <td width="8"><span class="style2"></span></td>
      <td width="274"><span class="style2">
        <input type="text" name="nip_pejabat" id="nip_pejabat" />
      </span></td>
      
    </tr>
    <tr>
      <td><span class="style2">Nama Pejabat</span></td>
      <td>&nbsp;</td>
      <td><span class="style2">
        <input type="text" name="nama_pejabat" id="nama_pejabat" />
      </span></td>
     
    </tr>
  </table>
   
</form>
</body>
</html>
