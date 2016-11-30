<?php
include "koneksi.php";

if($_GET[act]=='insert'){
mysql_query("insert into lampiran1(nomor_pengajuan,
									kantor_pabean,
									jenis_tpb,
									tujuan_pengiriman,
									nomor_pendaftaran,
									tgl_pendaftaran,
									npwp_pengirim,
									nama_pengirim,
									alamat_pengirim,
									packing_list,
									tgl_packing_list,
									kontrak,
									tgl_kontrak,
									sk_persetujuan,
									tgl_persetujuan,
									jenis_pengangkut,
									nomor_polisi,
									harga_penyerahan,
									jenis_kemasan,
									merek_kemasan,
									jumlah_kemasan,
									volume,
									berat_kotor,
									berat_bersih,
									nip_pejabat,
									nama_pejabat)
						values ('$_POST[nomor_pengajuan]',
								'$_POST[kantor_pabean]',
								'$_POST[jenis_tpb]',
								'$_POST[tujuan_pengiriman]',
								'$_POST[nomor_pendaftaran]',
								'$_POST[tanggal_pendaftaran]',
								'$_POST[npwp_pengirim]',
								'$_POST[nama_pengirim]',
								'$_POST[alamat_pengirim]',
								'$_POST[packing_list]',
								'$_POST[tgl_packing_list]',
								'$_POST[kontrak]',
								'$_POST[tgl_kontrak]',
								'$_POST[surat_keputusan]',
								'$_POST[tgl_surat_keputusan]',
								'$_POST[jenis_pengangkut]',
								'$_POST[nomor_polisi]',
								'$_POST[harga_penyerahan]',
								'$_POST[jenis_kemasan]',
								'$_POST[merek_kemasan]',
								'$_POST[jumlah_kemasan]',
								'$_POST[volume]',
								'$_POST[berat_kotor]',
								'$_POST[berat_bersih]',
								'$_POST[nip_pejabat]',
								'$_POST[nama_pejabat]')");
								
	//masukan detail lampiran barang
	for($i=1;$i<=$_POST[jml_barang];$i++){
			$uraian = $_POST[uraian.$i];
			$jumlah_barang = $_POST[jumlah_barang.$i];
			$harga = $_POST[harga.$i];
			if(($uraian<>'')||($jumlah_barang<>'')||($harga<>'')){
				mysql_query("insert into detail_lamp_barang(nomor_pengajuan,
														kode_barang,
														jumlah_barang,
														harga_penyerahan)
												values('$_POST[nomor_pengajuan]',
												       '$uraian',
													   '$jumlah_barang',
													   '$harga')");
			}
	}
	for($i=1;$i<=$_POST[jml_dokumen];$i++){
	        $jenis_dokumen = $_POST[jenis_dokumen.$i];
			$nomor_dokumen = $_POST[nomor_dokumen.$i];
			$tanggal_dokumen = $_POST[tanggal_dokument.$i];
			if(($jenis_dokumen<>'')||($nomor_dokumen<>'')||($tanggal_dokumen<>'')){
				mysql_query("insert into detail_lamp_document(nomor_pengajuan,
														jenis_document,
														nomor_document,
														tgl_document)
												values('$_POST[nomor_pengajuan]',
												       '$jenis_dokumen',
													   '$nomor_dokumen',
													   '$tanggal_dokumen')");
			}
	}
	
	//echo "<h1>Data Telah Tersimpan!</h1>";
}elseif($_GET[act]=='delete'){
    mysql_query("delete from lampiran1 where nomor_pengajuan='$_GET[id]'");
	mysql_query("delete from detail_lamp_barang where nomor_pengajuan='$_GET[id]'");
	mysql_query("delete from detail_lamp_document where nomor_pengajuan='$_GET[id]'");
	header('location:index.php');
}
header('location:index.php');
?>
