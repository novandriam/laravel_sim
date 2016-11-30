<?php
include "koneksi.php";

if($_GET[act]=='insert'){
mysql_query("insert into lampiran9(nomor_pengajuan,
									kantor_pabean_asal,
									kantor_pabean_tujuan,
									jenis_tpb_asal,
									jenis_tpb_tujuan,
									tujuan_pengiriman,
									nomor_pendaftaran,
									tanggal_pendaftaran,
									nip_pejabat_pabean_asal,
									nama_pejabat_pabean_asal,
									nip_pejabat_pabean_tujuan,
									nama_pejabat_pabean_tujuan,
									npwp_pengusaha_asal,
									nama_pengusaha_asal,
									nomor_ijin_tpb_pengusaha_asal,
									alamat_pengusaha_asal,
									npwp_pengusaha_tujuan,
									nama_pengusaha_tujuan,
									nomor_ijin_tpb_pengusaha_tujuan,
									alamat_pengusaha_tujuan,
									invoice,
									tanggal_invoice,
									packinglist,
									tanggal_packinglist,
									kontrak,
									tanggal_kontrak,
									surat_jalan,
									tanggal_surat_jalan,
									surat_keputusan,
									tanggal_surat_keputusan,
									nomor_bc_asal,
									tanggal_bc_asal,
									jenis_valuta_asing,
									nilai_cif,
									harga_penyerahan,
									jenis_sarana_pengangkut_darat,
									nomor_polisi,
									merk_nomor_petikemas,
									jumlah_jenis_kemasan,
									volume,
									berat_kotor,
									berat_bersih,
									nomor_segel,
									jenis,
									catatan_bc_tujuan )
						values ('$_POST[nomor_pengajuan]',
									'$_POST[kantor_pabean_asal]',
									'$_POST[kantor_pabean_tujuan]',
									'$_POST[jenis_tpb_asal]',
									'$_POST[jenis_tpb_tujuan]',
									'$_POST[tujuan_pengiriman]',
									'$_POST[nomor_pendaftaran]',
									'$_POST[cmbtglpendaftaran]',
									'$_POST[nip_pejabat_pabean_asal]',
									'$_POST[nama_pejabat_pabean_asal]',
									'$_POST[nip_pejabat_pabean_tujuan]',
									'$_POST[nama_pejabat_pabean_tujuan]',
									'$_POST[npwp_pengusaha_asal]',
									'$_POST[nama_pengusaha_asal]',
									'$_POST[nomor_ijin_tpb_pengusaha_asal]',
									'$_POST[alamat_pengusaha_asal]',
									'$_POST[npwp_pengusaha_tujuan]',
									'$_POST[nama_pengusaha_tujuan]',
									'$_POST[nomor_ijin_tpb_pengusaha_tujuan]',
									'$_POST[alamat_pengusaha_tujuan]',
									'$_POST[invoice]',
									'$_POST[cmbtglinvoice]',
									'$_POST[packinglist]',
									'$_POST[cmbtglpackinglist]',
									'$_POST[kontrak]',
									'$_POST[cmbtglkontrak]',
									'$_POST[surat_jalan]',
									'$_POST[cmbtglsuratjalan]',
									'$_POST[surat_keputusan]',
									'$_POST[cmbtglsuratkeputusan]',
									'$_POST[nomor_bc_asal]',
									'$_POST[cmbtglbcasal]',
									'$_POST[jenis_valuta_asing]',
									'$_POST[nilai_cif]',
									'$_POST[harga_penyerahan]',
									'$_POST[jenis_sarana_pengangkut_darat]',
									'$_POST[nomor_polisi]',
									'$_POST[merk_no_petikemas]',
									'$_POST[jumlah_jenis_kemasan]',
									'$_POST[volume]',
									'$_POST[berat_kotor]',
									'$_POST[berat_bersih]',
									'$_POST[nomor_segel]',
									'$_POST[jenis]',
									'$_POST[catatan_bc_tujuan]')");
					
	//masukan detail lampiran barang
	for($i=1;$i<=$_POST[jml_barang];$i++){
			$kode_barang = $_POST[kode_barang.$i];
			$uraian = $_POST[uraian.$i];
			$jumlah_jenis = $_POST[jumlah_jenis.$i];
			$berat_bersih = $_POST[berat_bersih.$i];
			$volume = $_POST[volume.$i];
			$nilai_cif = $_POST[nilai_cif.$i];
			if(($kode_barang<>'')&&($uraian<>'')&&($jumlah_jenis<>'')&&($berat_bersih<>'')&&($volume<>'')&&($nilai_cif<>'')){
				mysql_query("insert into detail_lamp_barang9(cflag,
				                                        nomor_pengajuan,
														kode_barang,
														jumlah_jenis,
														uraian,
														berat_bersih,
														volume,
														nilai_cif)
												values('A',
												       '$_POST[nomor_pengajuan]',
												       '$kode_barang',
													   '$jumlah_jenis',
													   '$uraian',
													   '$berat_bersih',
													   '$volume',
													   '$nilai_cif')");

			}
	}
	
	for($i=1;$i<=$_POST[jml_dokumen];$i++){
	        $jenis_dokumen = $_POST[jenis_dokumen.$i];
			$nomor_dokumen = $_POST[nomor_dokumen.$i];
			$tanggal_dokumen = $_POST[tanggal_dokumen.$i];
			if(($jenis_dokumen<>'')||($nomor_dokumen<>'')||($tanggal_dokumen<>'')){
				mysql_query("insert into detail_lamp_document9(nomor_pengajuan,
														jenis_document,
														nomor_document,
														tgl_document)
												values('$_POST[nomor_pengajuan]',
												       '$jenis_dokumen',
													   '$nomor_dokumen',
													   '$tanggal_dokumen')");
			}			
	}
	
	if ($_POST[tujuan_pengiriman]=='Disubkontrakan'){
		//masukan detail lampiran barang konversi jika tujuan pengirimannya disubkontrakkan
			for($i=1;$i<=10;$i++){
			$kode_barang_konversi = $_POST[kode_barang_konversi.$i];
			$jumlah_jenis_konversi = $_POST[jumlah_jenis_konversi.$i];
			$uraian_konversi = $_POST[uraian_konversi.$i];
			$berat_bersih_konversi = $_POST[berat_bersih_konversi.$i];
			$volume_konversi = $_POST[volume_konversi.$i];
			$nilai_cif_konversi = $_POST[nilai_cif_konversi.$i];
			if(($kode_barang_konversi<>'')&&($jumlah_jenis_konversi)&&($uraian_konversi<>'')&&($berat_bersih_konversi<>'')&&($volume_konversi<>'')&&($nilai_cif_konversi<>'')){
				mysql_query("insert into detail_lamp_barang9(cflag,
				                                        nomor_pengajuan,
														kode_barang,
														jumlah_jenis,
														uraian,
														berat_bersih,
														volume,
														nilai_cif)
												values('C',
												       '$_POST[nomor_pengajuan]',
												       '$kode_barang_konversi',
													   '$jumlah_jenis_konversi',
													   '$uraian_konversi',
													   '$berat_bersih_konversi',
													   '$volume_konversi',
													   '$nilai_cif_konversi')");
													 
			}
		}
	}else{
		//echo "<h1>Data Telah Tersimpan!</h1>";
	}
}elseif($_GET[act]=='delete'){
    mysql_query("delete from lampiran9 where nomor_pengajuan='$_GET[id]'");
	mysql_query("delete from detail_lamp_barang9 where nomor_pengajuan='$_GET[id]'");
	mysql_query("delete from detail_lamp_document9 where nomor_pengajuan='$_GET[id]'");
	header('location:index.php');
}
header('location:index.php');
?>
