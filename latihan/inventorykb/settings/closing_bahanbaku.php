<?php
    
     include_once "library/inc.sesadmin.php";
     include_once "library/inc.library.php";

# TAMPILKAN DATA KE FORM
$Tglclosing		 	= isset($_POST['cmbTglclosing']) ? $_POST['cmbTglclosing'] : date('d-m-Y');

?>
<html>
<head><title>Closing Stock</title>
<style type="text/css">
<!--
.style1 {color: #FF0000}
-->
</style>
</head>
<body>
<form name="form1" method="post" action="">

<fieldset style="width:90%"><legend>Closing Bahan Baku</legend>
<p>
  <label>Tanggal Closing  : <?php  form_tanggal("cmbTglclosing",$Tglclosing);?></label><br><br>
<span class="style1">Sebelum melakukan closing, pastikan tidak ada selisih data dan fisik barang. Jika Masih ada silahkan lakukan stok adjustment dahulu!!! </span></p>
<input onClick="return confirm('ANDA YAKIN AKAN MENYIMPAN DATA CLOSING, DATA YANG TERSIMPAN TIDAK DAPAT DIUBAH/DIHAPUS?')" type="submit" name="submit" value="Closing">&nbsp;&nbsp;&nbsp;<input type="button" value="Batal" onclick="self.history.back()" />
<fieldset>
</form>
</body>

<?php
   if($_POST[submit]=="Closing"){
           /*jika melakukan closing , cek tanggal tersebut apakah sudah pernah closing.jika sudah munculkan pesan "tgl tersebut sudah pernah melakukan
           closing, jika belum maka lakukan pemindahan data dari tabel barang ke tabel closing dengan tanggal proses closing */
           $cek = mysql_query("select T1.kd_barang, T1.kd_kategori, T2.kd_barang, T2.tgl_closing, T2.id as jml from barang as T1,closing as T2 where T2.kd_barang=T1.kd_barang and T1.kd_kategori='K01' and T2.tgl_closing='".InggrisTgl($_POST['cmbTglclosing'])."' limit 1");
           $rcek = mysql_fetch_array($cek);
           if($rcek['jml']>0){
                   echo "<script>alert(\"Tanggal Tersebut sudah pernah dilakukan closing!!!\");</script>";
           }else{
			   
			   // untuk closing bahan baku
                   //cari item barang
                   $brg = mysql_query("select kd_barang,nm_barang,kd_kategori from barang where kd_kategori='K01'");
                   while($rbrg = mysql_fetch_array($brg)){

                        /*cari ditabel closing item barang tersebut stok terakhirnya bulan lalu */
                        $closing = mysql_query("select tgl_closing,stock from closing where kd_barang='$rbrg[kd_barang]' and tgl_closing<'".InggrisTgl($_POST['cmbTglclosing'])."'");
                        $rclosing = mysql_fetch_array($closing);
                        
                        //jika tanggal closingnya kosong berarti belum melakukan closing sama sekali maka dihitung ulang dari awal transaksi
                        if($rclosing['tgl_closing']==""){
                              //hitung jumlah pemasukan yang tanggalnya dibawah tanggal yang akan di closing
                              $pemasukan = mysql_query("select sum(jumlah) as jml from pemasukan_detail where kode='$rbrg[kd_barang]' and tgl_bpb < '".InggrisTgl($_POST['cmbTglclosing'])."'");
                              $rpemasukan = mysql_fetch_array($pemasukan);
							  //cari terima oleh incoming dari produksi karena return				  
							  $produksireturn = mysql_query("select sum(jumlah) as jml from incoming_terima_detail where kode='$rbrg[kd_barang]' AND dari='PRODUKSI' and tgl_lpb < '".InggrisTgl($_POST['cmbTglclosing'])."'");
                              $rproduksireturn = mysql_fetch_array($produksireturn);
							  
							  $total_pemasukan = $rpemasukan['jml']+$rproduksireturn['jml'];

                              //hitung jumlah pengeluaran yang tanggalnya dibawah tanggal yang akan di closing
                              $pengeluaran = mysql_query("select sum(jumlah) as jml from pengeluaran_detail where kode='$rbrg[kd_barang]' and tgl_sj < '".InggrisTgl($_POST['cmbTglclosing'])."'");
                              $rpengeluaran = mysql_fetch_array($pengeluaran);
							  
							  //cari terima oleh produksi dari incoming untuk diproses		  
			   $pemakaian = mysql_query("select sum(jumlah) as jml from produksi_terima_detail where kode='$rbrg[kd_barang]' AND dari='INCOMING' and tgl_lpb < '".InggrisTgl($_POST['cmbTglclosing'])."'");
                              $rpemakaian = mysql_fetch_array($pemakaian);

							 $total_pengeluaran = $rpengeluaran['jml']+$rpemakaian['jml'];
							 
                              //hitung jumlah adjustment yang tanggalnya dibawah tanggal yang akan di closing
                              $adjust = mysql_query("select sum(jumlah) as jml from adjusment_detail where kode='$rbrg[kd_barang]' and tgl_adj < '".InggrisTgl($_POST['cmbTglclosing'])."'");
                              $radjust = mysql_fetch_array($adjust);
                        }else{
                              //setelah didapat stok closing sebelumnya, sekarang cari pemasukan barangnya direntang waktu tgl closing sebelumnya dengan tanggal yang akan di closing
                              $pemasukan = mysql_query("select sum(jumlah) as jml from pemasukan_detail where kode='$rbrg[kd_barang]' and tgl_bpb between $rclosing[tgl_closing] and '".InggrisTgl($_POST['cmbTglclosing'])."'");
                              $rpemasukan = mysql_fetch_array($pemasukan);

 //cari terima oleh incoming dari produksi karena return				  
							  $produksireturn = mysql_query("select sum(jumlah) as jml from incoming_terima_detail where kode='$rbrg[kd_barang]' AND dari='PRODUKSI' and tgl_lpb between $rclosing[tgl_closing] and '".InggrisTgl($_POST['cmbTglclosing'])."'");
                              $rproduksireturn = mysql_fetch_array($produksireturn);
			$total_pemasukan = $rpemasukan['jml']+$rproduksireturn['jml'];
                              //setelah pemasukan barang dalam rentang waktu tersebut ditemukan, sekarang cari pengeluaran barangnya rentang waktu tersebut
                              $pengeluaran = mysql_query("select sum(jumlah) as jml from pengeluaran_detail where kode='$rbrg[kd_barang]' and tgl_sj between $rclosing[tgl_closing] and '".InggrisTgl($_POST['cmbTglclosing'])."'");
                              $rpengeluaran = mysql_fetch_array($pengeluaran);
							  
							   //cari terima oleh produksi dari incoming untuk diproses		  
			   $pemakaian = mysql_query("select sum(jumlah) as jml from produksi_terima_detail where kode='$rbrg[kd_barang]' AND dari='INCOMING' and tgl_lpb between $rclosing[tgl_closing] and '".InggrisTgl($_POST['cmbTglclosing'])."'");
                              $rpemakaian = mysql_fetch_array($pemakaian);

 $total_pengeluaran = $rpengeluaran['jml']+$rpemakaian['jml'];
                              //setelah pengeluaran barang dalam rentang waktu tersebut ditemukan, cari adjustment barang rentang waktu tersebut
                              $adjust = mysql_query("select sum(jumlah) as jml from adjusment_detail where kode='$rbrg[kd_barang]' and tgl_adj between $rclosing[tgl_closing] and '".InggrisTgl($_POST['cmbTglclosing'])."'");
                              $radjust = mysql_fetch_array($adjust);
                        }

                        /*kalau sudah didapat semuanya, maka tinggal dihitung..stok closing terakhir yang lebih kecil dari tanggal yang akan diclosing dikurangi
                        ditambah pemasukan barang dikurangi pengeluaran dan ditambah stock adjustment rentang waktu tersebut. hasilnya adalah stock terakhir
                        yang akan dijadikan stock  tanggal yang akan di lakukan closing.        */

                        $stock = $rclosing['stock']+$total_pemasukan-$total_pengeluaran+$radjust['jml'];
                        $sql = mysql_query("insert into closing SET tgl_closing='".InggrisTgl($_POST['cmbTglclosing'])."', kd_barang='$rbrg[kd_barang]', stock='$stock'");
                        if($sql){ $sukses = $sukses+1; $status = "Sukses"; }else{ $gagal = $gagal +1; $status = "Gagal";}
                        echo "Kode barang : ".$rbrg['kd_barang']." Nama barang : ".$rbrg['nm_barang']." Stock Akhir : ".$stock." Status : $status <br>";

                   }
                   echo "<br>Total Sukses : $sukses<Br>Total Gagal : $gagal";
           }
   }
?>
/*
* Tanggal yang dimasukan adalah tanggal yang akan dijadikan sebagai tanggal closing stock<br>
* Saat tombol proses di tekan, sistem akan mengecek tanggal closing sebelumnya dimana jika tanggal closing sebelumnya ditemukan,  maka akan dihitung jumlah pemasukan, pengeluaran, adjustment di antara range waktu tanggal closing sebelumnya dengan tanggal yang akan kita lakukan closing<br>
* Sistem melakukan perhitungan stock closing sebelumnya + pemasukan - pengeluaran + adjustment sesuai hasil pencarian di atas sehingga diperoleh stock akhir..<br><br>

* Jika tgl closing sebelumnya tidak ditemukan, maka sistem akan mencari total pemasukan, pengeluaran, adjustment dari awal transaksi s/d tanggal yang akan dijadikan closing <br>
* Sistem melakukan perhitungan pemasukan - pengeluaran + adjustment sesuai hasil pencarian diatas sehingga diperoleh stock akhir<br>
*/
