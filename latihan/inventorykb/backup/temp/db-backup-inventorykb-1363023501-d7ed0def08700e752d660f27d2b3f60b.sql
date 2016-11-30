DROP TABLE IF EXISTS adjusment;

CREATE TABLE `adjusment` (
  `nomor` char(10) character set latin1 NOT NULL,
  `no_adj` varchar(100) character set latin1 NOT NULL,
  `tgl_adj` date NOT NULL,
  `tgl_stock` date NOT NULL,
  `ket` varchar(255) character set latin1 NOT NULL,
  `userid` varchar(100) character set latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

INSERT INTO adjusment VALUES('0000000001', '212122', '2013-02-14', '2013-02-14', 'fdfdffdf', 'goestoe');
INSERT INTO adjusment VALUES('0000000002', 'gf456', '2013-02-20', '2013-02-20', '456', 'goestoe');



DROP TABLE IF EXISTS adjusment_detail;

CREATE TABLE `adjusment_detail` (
  `nomor` char(10) NOT NULL,
  `id` int(10) NOT NULL auto_increment,
  `no_adj` varchar(100) NOT NULL,
  `tgl_adj` date NOT NULL,
  `kode` char(100) NOT NULL,
  `jumlah` float(10,2) NOT NULL,
  `cat` char(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO adjusment_detail VALUES('0000000001', '1', '212122', '2013-02-14', 'B00001', '100.00', 'dffdf');
INSERT INTO adjusment_detail VALUES('0000000001', '2', '212122', '2013-02-12', 'B00005', '200.00', 'tdfdfd');
INSERT INTO adjusment_detail VALUES('0000000002', '3', 'gf456', '2013-02-20', 'B00003', '1.00', '456');



DROP TABLE IF EXISTS barang;

CREATE TABLE `barang` (
  `id` int(8) NOT NULL auto_increment,
  `kd_barang` char(100) NOT NULL,
  `nm_barang` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `spec` varchar(100) NOT NULL,
  `stok` float(10,2) NOT NULL,
  `satuan` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `kd_kategori` char(3) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO barang VALUES('1', 'B00001', 'Sepatu', 'Big', 'Baru', '547.00', 'PCS', 'PPC', 'K02');
INSERT INTO barang VALUES('2', 'B00002', 'Celana Jeans', 'Kecil', 'Jk', '100.00', 'Unit', 'Jeka', 'K01');
INSERT INTO barang VALUES('3', 'B00003', 'Kaos Oblong', 'Big Size', 'Kecil', '200.00', 'Cm', 'Klibn', 'K03');
INSERT INTO barang VALUES('4', 'B00004', 'Kemeja', 'Kerah', 'Kancong', '200.00', 'Kg', 'Jelek', 'K04');



DROP TABLE IF EXISTS brgjadi;

CREATE TABLE `brgjadi` (
  `nomor` char(10) NOT NULL,
  `no_bpb` char(100) NOT NULL,
  `tgl_bpb` date NOT NULL,
  `project` varchar(100) NOT NULL,
  `dept` char(20) NOT NULL,
  `name_ppc` char(20) NOT NULL,
  `catatan` varchar(100) NOT NULL,
  `userid` char(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO brgjadi VALUES('0000000001', '133', '2013-03-02', 'rere', 're', 're', 'er', 'goestoe');
INSERT INTO brgjadi VALUES('0000000002', '234', '2013-03-02', '324', '234', '324', '324', 'goestoe');



DROP TABLE IF EXISTS brgjadi_detail;

CREATE TABLE `brgjadi_detail` (
  `nomor` char(10) NOT NULL,
  `id` int(10) NOT NULL auto_increment,
  `no_bpb` varchar(100) NOT NULL,
  `tgl_bpb` date NOT NULL,
  `kode` char(100) NOT NULL,
  `satuan` char(8) NOT NULL,
  `jumlah` float(10,2) NOT NULL,
  `ket` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO brgjadi_detail VALUES('0000000001', '1', '133', '2013-03-02', 'B00004', '', '3.00', 'erre');
INSERT INTO brgjadi_detail VALUES('0000000001', '2', '133', '2013-03-02', 'B00002', '', '3.00', 'ewrerw');
INSERT INTO brgjadi_detail VALUES('0000000002', '3', '234', '2013-03-02', 'B00001', '', '3.00', 'ewrwer');



DROP TABLE IF EXISTS catatan;

CREATE TABLE `catatan` (
  `kd_catatan` char(8) character set latin1 NOT NULL,
  `nm_catatan` varchar(100) character set latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

INSERT INTO catatan VALUES('CAT-0001', 'Ditimbun');
INSERT INTO catatan VALUES('CAT-0002', 'Diproses');
INSERT INTO catatan VALUES('CAT-0003', 'Disubkontrakkan');
INSERT INTO catatan VALUES('CAT-0004', 'Dipinjamkan');
INSERT INTO catatan VALUES('CAT-0005', 'Diperbaiki');
INSERT INTO catatan VALUES('CAT-0006', 'Pengembalian Subkontrak');
INSERT INTO catatan VALUES('CAT-0007', 'Pengembalian Pinjaman');
INSERT INTO catatan VALUES('CAT-0008', 'Pemusnahan');



DROP TABLE IF EXISTS closing;

CREATE TABLE `closing` (
  `id` int(8) NOT NULL auto_increment,
  `tgl_closing` date NOT NULL,
  `kd_barang` char(6) character set latin1 NOT NULL,
  `stock` float(10,2) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;




DROP TABLE IF EXISTS dept;

CREATE TABLE `dept` (
  `kd_dept` char(8) character set latin1 NOT NULL,
  `nm_dept` varchar(100) character set latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

INSERT INTO dept VALUES('DEP-0001', 'Bagian Penyimpanan Bahan Baku / Penolong');
INSERT INTO dept VALUES('DEP-0002', 'Bagian Alat Produksi');
INSERT INTO dept VALUES('DEP-0003', 'Bagian Pra Produksi');
INSERT INTO dept VALUES('DEP-0004', 'Bagian Produksi');
INSERT INTO dept VALUES('DEP-0005', 'Bagian Kontrol Kualitas');
INSERT INTO dept VALUES('DEP-0006', 'Bagian Pasca Produksi');
INSERT INTO dept VALUES('DEP-0007', 'Bagian Penyimpanan Barang Jadi');
INSERT INTO dept VALUES('DEP-0008', 'Bagian Penyimpanan Barang Sisa / Scrap');
INSERT INTO dept VALUES('DEP-0009', 'Bagian Penjualan');



DROP TABLE IF EXISTS incoming_outgoing;

CREATE TABLE `incoming_outgoing` (
  `nomor` char(10) NOT NULL,
  `no_spb` char(100) NOT NULL,
  `tgl_spb` date NOT NULL,
  `dept` char(20) NOT NULL,
  `name_ppc` char(20) NOT NULL,
  `catatan` varchar(100) NOT NULL,
  `userid` char(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO incoming_outgoing VALUES('0000000001', 'fdg', '2013-02-18', 'dfg', 'dfg', 'dfg', 'goestoe');



DROP TABLE IF EXISTS incoming_outgoing_detail;

CREATE TABLE `incoming_outgoing_detail` (
  `nomor` char(10) NOT NULL,
  `id` int(10) NOT NULL auto_increment,
  `no_spb` varchar(100) NOT NULL,
  `tgl_spb` date NOT NULL,
  `kode` char(100) NOT NULL,
  `jumlah` float(10,2) NOT NULL,
  `ket` char(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO incoming_outgoing_detail VALUES('0000000001', '1', 'fdg', '2013-02-18', 'B00002', '200.00', 'dfgdfg');



DROP TABLE IF EXISTS incoming_terima;

CREATE TABLE `incoming_terima` (
  `nomor` char(10) NOT NULL,
  `no_lpb` varchar(100) NOT NULL,
  `tgl_lpb` date NOT NULL,
  `dari` varchar(255) NOT NULL,
  `no_spb` char(8) NOT NULL,
  `tgl_spb` date NOT NULL,
  `dept` char(20) NOT NULL,
  `name_ppc` char(20) NOT NULL,
  `catatan` varchar(100) NOT NULL,
  `user_trt` varchar(100) NOT NULL,
  `userid` char(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO incoming_terima VALUES('0000000002', 'retert', '2013-02-14', 'PRODUKSI', '23', '2013-02-14', '324', '324', '234', 'goestoe', 'goestoe');
INSERT INTO incoming_terima VALUES('0000000001', '4234', '2013-01-10', 'PRODUKSI', 'ewr', '2013-02-01', 'ewrwe', 'ewr', 'wer', 'goestoe', 'goestoe');
INSERT INTO incoming_terima VALUES('0000000003', '12345', '2013-03-04', 'PRODUKSI', '123456', '2013-03-04', 'HHH', 'HHH', 'DSASDF', 'goestoe', 'goestoe');
INSERT INTO incoming_terima VALUES('0000000004', '123', '2013-03-07', 'OUTGOING', '122', '2013-03-04', 'qwe', 'qwe', 'qwe', 'goestoe', 'goestoe');



DROP TABLE IF EXISTS incoming_terima_detail;

CREATE TABLE `incoming_terima_detail` (
  `nomor` char(10) NOT NULL,
  `id` int(10) NOT NULL auto_increment,
  `dari` varchar(255) NOT NULL,
  `no_lpb` varchar(100) NOT NULL,
  `tgl_lpb` date NOT NULL,
  `kode` char(100) NOT NULL,
  `jumlah` float(10,2) NOT NULL,
  `ket` char(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO incoming_terima_detail VALUES('0000000001', '1', 'PRODUKSI', '4234', '2013-01-10', 'B00005', '100.00', 'werwer');
INSERT INTO incoming_terima_detail VALUES('0000000002', '2', 'PRODUKSI', 'retert', '2013-02-14', 'B00002', '200.00', '324');
INSERT INTO incoming_terima_detail VALUES('0000000003', '3', 'PRODUKSI', '12345', '2013-03-04', 'B00001', '1.00', 'fdg');
INSERT INTO incoming_terima_detail VALUES('0000000003', '4', 'PRODUKSI', '12345', '2013-03-04', 'B00001', '2.00', 'SDFG');
INSERT INTO incoming_terima_detail VALUES('0000000004', '5', 'OUTGOING', '123', '2013-03-07', 'B00001', '1.00', '200');
INSERT INTO incoming_terima_detail VALUES('0000000004', '6', 'OUTGOING', '123', '2013-03-07', 'B00001', '1.00', '200');



DROP TABLE IF EXISTS infokb;

CREATE TABLE `infokb` (
  `id` char(4) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `prop` char(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `telp` varchar(100) NOT NULL,
  `fax` varchar(100) NOT NULL,
  `skepkb` varchar(100) NOT NULL,
  `tglskep` date NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO infokb VALUES('KODE', 'PT Indonesia Epson Industry', 'EJIP Industrial Park Plot 4E, Cikarang', 'Jawa Barat', 'Bekasi', '021-8970101', '021-8970101', '1206/KM.4/2012', '2013-01-22');



DROP TABLE IF EXISTS jenisbckeluar;

CREATE TABLE `jenisbckeluar` (
  `kode` char(6) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO jenisbckeluar VALUES('BCOUT1', 'BC 2.7', 'Pengeluaran barang ke Kawasan Berikat lainnya');
INSERT INTO jenisbckeluar VALUES('BCOUT2', 'BC 4.1', 'Pengeluaran barang ke TLDDP');



DROP TABLE IF EXISTS jenisbcmasuk;

CREATE TABLE `jenisbcmasuk` (
  `kode` char(6) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO jenisbcmasuk VALUES('BCIN01', 'BC 2.3', 'Pemasukan barang dari Luar Daerah Pabean/Luar Negeri');
INSERT INTO jenisbcmasuk VALUES('BCIN02', 'BC 2.7', 'Pemasukan barang dari Kawasan Berikat lain atau Gudang Berikat');



DROP TABLE IF EXISTS kategori;

CREATE TABLE `kategori` (
  `kd_kategori` char(3) NOT NULL,
  `nm_kategori` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO kategori VALUES('K01', 'Bahan Baku/Penolong');
INSERT INTO kategori VALUES('K02', 'Barang Jadi');
INSERT INTO kategori VALUES('K03', 'Barang Modal dan Peralatan Perkantoran');
INSERT INTO kategori VALUES('K04', 'Barang Sisa / Scrap');



DROP TABLE IF EXISTS konversi;

CREATE TABLE `konversi` (
  `id` int(6) NOT NULL,
  `kd_barang` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `spec` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `userid` char(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS konversi_detail;

CREATE TABLE `konversi_detail` (
  `kd_barang` char(100) NOT NULL,
  `kode` char(100) NOT NULL,
  `jumlah` float(10,2) NOT NULL,
  `ket` char(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO konversi_detail VALUES('b00005', 'B00002', '1.00', '123');



DROP TABLE IF EXISTS matauang;

CREATE TABLE `matauang` (
  `kode` char(6) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO matauang VALUES('CUR001', 'JPY', 'Jepang Yen');
INSERT INTO matauang VALUES('CUR002', 'USD', 'Dollar Amerika Serikat');



DROP TABLE IF EXISTS outgoing_incoming;

CREATE TABLE `outgoing_incoming` (
  `nomor` char(10) NOT NULL,
  `no_spb` char(100) NOT NULL,
  `tgl_spb` date NOT NULL,
  `dept` char(20) NOT NULL,
  `name_ppc` char(20) NOT NULL,
  `catatan` varchar(100) NOT NULL,
  `userid` char(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO outgoing_incoming VALUES('0000000001', '122', '2013-03-04', 'qwe', 'qwe', 'qwe', 'goestoe');



DROP TABLE IF EXISTS outgoing_incoming_detail;

CREATE TABLE `outgoing_incoming_detail` (
  `nomor` char(10) NOT NULL,
  `id` int(10) NOT NULL auto_increment,
  `no_spb` varchar(100) NOT NULL,
  `tgl_spb` date NOT NULL,
  `kode` char(100) NOT NULL,
  `jumlah` float(10,2) NOT NULL,
  `ket` char(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO outgoing_incoming_detail VALUES('0000000001', '1', '122', '2013-03-04', 'B00001', '1.00', '200');
INSERT INTO outgoing_incoming_detail VALUES('0000000001', '2', '122', '2013-03-04', 'B00001', '1.00', '200');



DROP TABLE IF EXISTS outgoing_produksi;

CREATE TABLE `outgoing_produksi` (
  `nomor` varchar(10) NOT NULL,
  `no_spb` char(100) NOT NULL,
  `tgl_spb` date NOT NULL,
  `dept` char(20) NOT NULL,
  `name_ppc` char(20) NOT NULL,
  `catatan` varchar(100) NOT NULL,
  `userid` char(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS outgoing_produksi_detail;

CREATE TABLE `outgoing_produksi_detail` (
  `nomor` char(10) NOT NULL,
  `id` int(10) NOT NULL auto_increment,
  `no_spb` varchar(100) NOT NULL,
  `tgl_spb` date NOT NULL,
  `kode` char(100) NOT NULL,
  `jumlah` float(10,2) NOT NULL,
  `ket` char(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS outgoing_terima;

CREATE TABLE `outgoing_terima` (
  `nomor` char(10) NOT NULL,
  `no_lpb` varchar(100) NOT NULL,
  `tgl_lpb` date NOT NULL,
  `dari` varchar(255) NOT NULL,
  `no_spb` char(100) NOT NULL,
  `tgl_spb` date NOT NULL,
  `dept` char(200) NOT NULL,
  `name_ppc` char(200) NOT NULL,
  `catatan` varchar(200) NOT NULL,
  `user_trt` varchar(100) NOT NULL,
  `userid` char(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO outgoing_terima VALUES('0000000001', '123', '2013-03-04', 'PRODUKSI', '123', '2013-03-04', '45', '45', '57', 'goestoe', 'goestoe');



DROP TABLE IF EXISTS outgoing_terima_detail;

CREATE TABLE `outgoing_terima_detail` (
  `nomor` char(10) NOT NULL,
  `id` int(10) NOT NULL auto_increment,
  `dari` varchar(255) NOT NULL,
  `no_lpb` varchar(100) NOT NULL,
  `tgl_lpb` date NOT NULL,
  `kode` char(100) NOT NULL,
  `jumlah` float(10,2) NOT NULL,
  `ket` char(200) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO outgoing_terima_detail VALUES('0000000001', '1', 'PRODUKSI', '123', '2013-03-04', 'B00001', '1.00', '555');



DROP TABLE IF EXISTS pemasok;

CREATE TABLE `pemasok` (
  `kode` char(6) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `negara` varchar(100) NOT NULL,
  `notelp` varchar(100) NOT NULL,
  `nofax` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO pemasok VALUES('S00001', 'PT LG Electronics Indonesia', 'Kawasan Industri MM 2100, Jl Sumatera Blok D Nomor 5', 'Bekasi', 'Indonesia', '021-22222', '021-4545454', '45EWR', 'Kawasan Berikat');
INSERT INTO pemasok VALUES('S00002', 'PT Kolang Kaling', 'WER', 'WER', 'Indonesia', 'WER', 'WER', 'WER', 'TLDDP/Lokal');



DROP TABLE IF EXISTS pemasukan;

CREATE TABLE `pemasukan` (
  `nomor` char(10) NOT NULL,
  `no_bpb` char(100) NOT NULL,
  `tgl_bpb` date NOT NULL,
  `pemasok` varchar(100) NOT NULL,
  `no_invoice` char(100) NOT NULL,
  `tgl_invoice` date NOT NULL,
  `no_do` char(100) NOT NULL,
  `catatan` varchar(100) NOT NULL,
  `jenis_dokpab` char(100) NOT NULL,
  `no_dokpab` int(6) NOT NULL,
  `tgl_dokpab` date NOT NULL,
  `userid` char(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO pemasukan VALUES('0000000001', '123456', '2013-02-22', 'S00001', '234', '2013-02-22', '324', 'Ditimbun', 'BC 2.3', '324', '2013-02-22', 'goestoe');
INSERT INTO pemasukan VALUES('0000000002', '4353', '2013-03-02', 'S00001', '435', '2013-03-02', '345', 'Diproses', 'BC 2.3', '344354', '2013-03-02', 'goestoe');
INSERT INTO pemasukan VALUES('0000000003', '23234', '2013-03-04', 'S00001', '345', '2013-03-04', '345', 'Ditimbun', 'BC 2.3', '345345', '2013-03-04', 'goestoe');



DROP TABLE IF EXISTS pemasukan_detail;

CREATE TABLE `pemasukan_detail` (
  `nomor` char(10) NOT NULL,
  `id` int(10) NOT NULL auto_increment,
  `no_bpb` varchar(100) NOT NULL,
  `tgl_bpb` date NOT NULL,
  `kode` char(100) NOT NULL,
  `jumlah` float(10,2) NOT NULL,
  `valuta` char(8) NOT NULL,
  `nilai` float(10,2) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO pemasukan_detail VALUES('0000000001', '1', '4567', '2013-02-25', 'B00002', '100.00', 'JPY', '2000.00');
INSERT INTO pemasukan_detail VALUES('0000000001', '2', '123456', '2013-02-22', 'B00001', '1.00', 'JPY', '34.00');
INSERT INTO pemasukan_detail VALUES('0000000002', '3', '4353', '2013-03-02', 'B00001', '45.00', 'JPY', '34534.00');
INSERT INTO pemasukan_detail VALUES('0000000003', '4', '23234', '2013-03-04', 'B00001', '1.00', 'JPY', '200.00');
INSERT INTO pemasukan_detail VALUES('0000000003', '5', '23234', '2013-03-04', 'B00001', '500.00', 'USD', '2000.00');



DROP TABLE IF EXISTS penerima;

CREATE TABLE `penerima` (
  `kode` char(6) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `negara` varchar(100) NOT NULL,
  `notelp` varchar(100) NOT NULL,
  `nofax` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO penerima VALUES('P00001', 'PT Berlian Tahta', 'Bagong Raya Bejas', 'Bekasi', 'Indonesia', '021-45456', '021', '45asd@gmail.com', 'Kawasan Berikat');



DROP TABLE IF EXISTS pengeluaran;

CREATE TABLE `pengeluaran` (
  `nomor` char(10) NOT NULL,
  `no_sj` char(100) NOT NULL,
  `tgl_sj` date NOT NULL,
  `penerima` varchar(100) NOT NULL,
  `no_invoice` char(100) NOT NULL,
  `tgl_invoice` date NOT NULL,
  `no_do` char(100) NOT NULL,
  `catatan` varchar(100) NOT NULL,
  `jenis_dokpab` char(100) NOT NULL,
  `no_dokpab` int(6) NOT NULL,
  `tgl_dokpab` date NOT NULL,
  `userid` char(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO pengeluaran VALUES('0000000001', '1234', '2013-02-22', 'P00001', '456', '2013-02-22', '1212', 'Diproses', 'BC 2.7', '123456', '2013-02-22', 'goestoe');



DROP TABLE IF EXISTS pengeluaran_detail;

CREATE TABLE `pengeluaran_detail` (
  `nomor` char(10) NOT NULL,
  `id` int(10) NOT NULL auto_increment,
  `no_sj` varchar(100) NOT NULL,
  `tgl_sj` date NOT NULL,
  `kode` char(100) NOT NULL,
  `jumlah` float(10,2) NOT NULL,
  `valuta` char(8) NOT NULL,
  `nilai` float(10,2) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO pengeluaran_detail VALUES('0000000001', '1', '1234', '2013-02-22', 'B00002', '100.00', 'JPY', '100.00');



DROP TABLE IF EXISTS produksi;

CREATE TABLE `produksi` (
  `nomor` char(10) NOT NULL,
  `no_spb` char(100) NOT NULL,
  `tgl_spb` date NOT NULL,
  `no_request` varchar(100) NOT NULL,
  `tgl_request` date NOT NULL,
  `dept` char(200) NOT NULL,
  `name_ppc` char(200) NOT NULL,
  `catatan` varchar(200) NOT NULL,
  `userid` char(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO produksi VALUES('0000000001', 'ewr', '2013-02-14', 'wer', '2013-02-14', 'werwe', 'wer', 'wer', 'goestoe');
INSERT INTO produksi VALUES('0000000002', '1235', '2013-02-20', '4545', '2013-02-20', '4555', '455', '4555', 'goestoe');
INSERT INTO produksi VALUES('0000000003', '78978', '2013-02-20', '789789', '2013-02-20', '789', '789', '789', 'goestoe');
INSERT INTO produksi VALUES('0000000004', '123', '2013-03-04', '213', '2013-03-04', '123', '123', '234', 'goestoe');
INSERT INTO produksi VALUES('0000000005', '123', '2013-03-07', '123', '2013-03-07', 'Bagian Penyimpanan Barang Sisa / Scrap', '21', '123', 'goestoe');



DROP TABLE IF EXISTS produksi_detail;

CREATE TABLE `produksi_detail` (
  `nomor` char(10) NOT NULL,
  `id` int(10) NOT NULL auto_increment,
  `no_spb` varchar(100) NOT NULL,
  `tgl_spb` date NOT NULL,
  `kode` char(100) NOT NULL,
  `jumlah` float(10,2) NOT NULL,
  `ket` char(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO produksi_detail VALUES('0000000001', '1', 'ewr', '2013-02-14', 'B00005', '400.00', 'wer');
INSERT INTO produksi_detail VALUES('0000000001', '2', 'ewr', '2013-02-14', 'B00001', '200.00', 'ewr');
INSERT INTO produksi_detail VALUES('0000000002', '3', '1235', '2013-02-20', 'B00003', '200.00', '200');
INSERT INTO produksi_detail VALUES('0000000003', '4', '78978', '2013-02-20', 'B00002', '400.00', '456');
INSERT INTO produksi_detail VALUES('0000000003', '5', '78978', '2013-02-20', 'B00002', '100.00', '111');
INSERT INTO produksi_detail VALUES('0000000003', '6', '78978', '2013-02-20', 'B00002', '100.00', '455');
INSERT INTO produksi_detail VALUES('0000000004', '7', '123', '2013-03-04', 'B00002', '1.00', 'jkhj');
INSERT INTO produksi_detail VALUES('0000000004', '8', '123', '2013-03-04', 'B00001', '1.00', 'ert');
INSERT INTO produksi_detail VALUES('0000000005', '9', '123', '2013-03-07', 'B00003', '1.00', '54');



DROP TABLE IF EXISTS produksi_incoming;

CREATE TABLE `produksi_incoming` (
  `nomor` char(10) NOT NULL,
  `no_spb` char(100) NOT NULL,
  `tgl_spb` date NOT NULL,
  `dept` char(200) NOT NULL,
  `name_ppc` char(200) NOT NULL,
  `catatan` varchar(200) NOT NULL,
  `userid` char(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO produksi_incoming VALUES('0000000002', '23', '2013-02-14', '324', '324', '234', 'goestoe');
INSERT INTO produksi_incoming VALUES('0000000001', 'ewr', '2013-02-01', 'ewrwe', 'ewr', 'wer', 'goestoe');
INSERT INTO produksi_incoming VALUES('0000000003', '123456', '2013-03-04', 'HHH', 'HHH', 'DSASDF', 'goestoe');



DROP TABLE IF EXISTS produksi_incoming_detail;

CREATE TABLE `produksi_incoming_detail` (
  `nomor` char(10) NOT NULL,
  `id` int(10) NOT NULL auto_increment,
  `no_spb` varchar(100) NOT NULL,
  `tgl_spb` date NOT NULL,
  `kode` char(100) NOT NULL,
  `jumlah` float(10,2) NOT NULL,
  `ket` char(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO produksi_incoming_detail VALUES('0000000002', '1', '23', '2013-02-14', 'B00001', '200.00', '324');
INSERT INTO produksi_incoming_detail VALUES('0000000001', '2', 'ewr', '2013-02-01', 'B00005', '100.00', 'werwer');
INSERT INTO produksi_incoming_detail VALUES('0000000003', '3', '123456', '2013-03-04', 'B00001', '1.00', 'fdg');
INSERT INTO produksi_incoming_detail VALUES('0000000003', '4', '123456', '2013-03-04', 'B00001', '2.00', 'SDFG');



DROP TABLE IF EXISTS produksi_outgoing;

CREATE TABLE `produksi_outgoing` (
  `nomor` char(10) NOT NULL,
  `no_spb` char(100) NOT NULL,
  `tgl_spb` date NOT NULL,
  `dept` char(200) NOT NULL,
  `name_ppc` char(200) NOT NULL,
  `catatan` varchar(200) NOT NULL,
  `userid` char(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO produksi_outgoing VALUES('0000000001', '123', '2013-03-04', '45', '45', '57', 'goestoe');
INSERT INTO produksi_outgoing VALUES('0000000002', '234', '2013-03-04', '234', '234', '234', 'goestoe');
INSERT INTO produksi_outgoing VALUES('0000000003', '12', '2013-03-07', 'Bagian Penyimpanan Barang Sisa / Scrap', 'fdf', 'dfgdf', 'goestoe');



DROP TABLE IF EXISTS produksi_outgoing_detail;

CREATE TABLE `produksi_outgoing_detail` (
  `nomor` char(10) NOT NULL,
  `id` int(10) NOT NULL auto_increment,
  `no_spb` varchar(100) NOT NULL,
  `tgl_spb` date NOT NULL,
  `kode` char(100) NOT NULL,
  `jumlah` float(10,2) NOT NULL,
  `ket` char(200) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO produksi_outgoing_detail VALUES('0000000001', '1', '123', '2013-03-04', 'B00001', '1.00', '555');
INSERT INTO produksi_outgoing_detail VALUES('0000000002', '2', '234', '2013-03-04', 'B00001', '1.00', '234');
INSERT INTO produksi_outgoing_detail VALUES('0000000002', '3', '234', '2013-03-04', 'B00001', '1.00', '234');
INSERT INTO produksi_outgoing_detail VALUES('0000000003', '4', '12', '2013-03-07', 'B00001', '1.00', '4');



DROP TABLE IF EXISTS produksi_terima;

CREATE TABLE `produksi_terima` (
  `nomor` char(10) NOT NULL,
  `no_lpb` varchar(100) NOT NULL,
  `tgl_lpb` date NOT NULL,
  `dari` varchar(255) NOT NULL,
  `no_spb` char(100) NOT NULL,
  `tgl_spb` date NOT NULL,
  `dept` char(200) NOT NULL,
  `name_ppc` char(200) NOT NULL,
  `catatan` varchar(200) NOT NULL,
  `user_trt` varchar(100) NOT NULL,
  `userid` char(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO produksi_terima VALUES('0000000001', '23324', '2013-02-14', 'INCOMING', 'ewr', '2013-02-14', 'werwe', 'wer', 'wer', 'goestoe', 'goestoe');
INSERT INTO produksi_terima VALUES('0000000002', 'erwrwer', '2013-02-20', 'INCOMING', '1235', '2013-02-20', '4555', '455', '4555', 'goestoe', 'goestoe');
INSERT INTO produksi_terima VALUES('0000000003', '879', '2013-02-20', 'INCOMING', '78978', '2013-02-20', '789', '789', '789', 'goestoe', 'goestoe');
INSERT INTO produksi_terima VALUES('0000000004', '1234', '2013-03-04', 'INCOMING', '123', '2013-03-04', '123', '123', '234', 'goestoe', 'goestoe');



DROP TABLE IF EXISTS produksi_terima_detail;

CREATE TABLE `produksi_terima_detail` (
  `nomor` char(10) NOT NULL,
  `id` int(10) NOT NULL auto_increment,
  `dari` varchar(255) NOT NULL,
  `no_lpb` varchar(100) NOT NULL,
  `tgl_lpb` date NOT NULL,
  `kode` char(100) NOT NULL,
  `jumlah` float(10,2) NOT NULL,
  `ket` char(200) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO produksi_terima_detail VALUES('0000000001', '1', 'INCOMING', '23324', '2013-02-14', 'B00001', '200.00', 'ewr');
INSERT INTO produksi_terima_detail VALUES('0000000001', '2', 'INCOMING', '23324', '2013-02-14', 'B00005', '400.00', 'wer');
INSERT INTO produksi_terima_detail VALUES('0000000002', '3', 'INCOMING', 'erwrwer', '2013-02-20', 'B00003', '200.00', '200');
INSERT INTO produksi_terima_detail VALUES('0000000003', '4', 'INCOMING', '879', '2013-02-20', 'B00002', '400.00', '456');
INSERT INTO produksi_terima_detail VALUES('0000000003', '5', 'INCOMING', '879', '2013-02-20', 'B00002', '100.00', '111');
INSERT INTO produksi_terima_detail VALUES('0000000003', '6', 'INCOMING', '879', '2013-02-20', 'B00002', '100.00', '455');
INSERT INTO produksi_terima_detail VALUES('0000000004', '7', 'INCOMING', '1234', '2013-03-04', 'B00002', '1.00', 'jkhj');
INSERT INTO produksi_terima_detail VALUES('0000000004', '8', 'INCOMING', '1234', '2013-03-04', 'B00001', '1.00', 'ert');



DROP TABLE IF EXISTS satuan;

CREATE TABLE `satuan` (
  `kode` char(6) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO satuan VALUES('SAT001', 'PCS', 'Pieces');



DROP TABLE IF EXISTS stock_pemasukan;

CREATE TABLE `stock_pemasukan` (
  `id` int(8) NOT NULL auto_increment,
  `kode` varchar(100) character set latin1 NOT NULL,
  `jumlah` float(10,2) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

INSERT INTO stock_pemasukan VALUES('1', 'B00002', '5002.00');
INSERT INTO stock_pemasukan VALUES('2', 'B00007', '3000.00');
INSERT INTO stock_pemasukan VALUES('3', 'B00009', '3000.00');
INSERT INTO stock_pemasukan VALUES('4', 'B00002', '3000.00');
INSERT INTO stock_pemasukan VALUES('5', 'B00003', '3000.00');
INSERT INTO stock_pemasukan VALUES('6', 'B00004', '3000.00');
INSERT INTO stock_pemasukan VALUES('7', 'B00005', '3000.00');
INSERT INTO stock_pemasukan VALUES('8', 'B00006', '3000.00');
INSERT INTO stock_pemasukan VALUES('9', 'B00001', '549.00');



DROP TABLE IF EXISTS stock_pengeluaran;

CREATE TABLE `stock_pengeluaran` (
  `id` int(8) NOT NULL auto_increment,
  `kode` varchar(100) character set latin1 NOT NULL,
  `jumlah` float(10,2) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

INSERT INTO stock_pengeluaran VALUES('1', 'B00001', '2399.00');
INSERT INTO stock_pengeluaran VALUES('2', 'B00003', '2597.00');
INSERT INTO stock_pengeluaran VALUES('3', 'B00004', '2600.00');
INSERT INTO stock_pengeluaran VALUES('4', 'B00005', '2800.00');
INSERT INTO stock_pengeluaran VALUES('5', 'B00006', '2600.00');
INSERT INTO stock_pengeluaran VALUES('6', 'B00007', '3000.00');
INSERT INTO stock_pengeluaran VALUES('7', 'B00008', '3000.00');
INSERT INTO stock_pengeluaran VALUES('8', 'B00009', '3000.00');
INSERT INTO stock_pengeluaran VALUES('9', 'B00002', '2999.00');
INSERT INTO stock_pengeluaran VALUES('10', 'B00003', '3000.00');
INSERT INTO stock_pengeluaran VALUES('11', 'B00004', '3000.00');
INSERT INTO stock_pengeluaran VALUES('12', 'B00005', '3000.00');
INSERT INTO stock_pengeluaran VALUES('13', 'B00006', '3000.00');
INSERT INTO stock_pengeluaran VALUES('14', 'B00007', '3000.00');
INSERT INTO stock_pengeluaran VALUES('15', 'B00008', '3000.00');
INSERT INTO stock_pengeluaran VALUES('16', 'B00009', '3000.00');
INSERT INTO stock_pengeluaran VALUES('17', 'B00002', '2999.00');
INSERT INTO stock_pengeluaran VALUES('18', 'B00003', '3000.00');
INSERT INTO stock_pengeluaran VALUES('19', 'B00004', '3000.00');
INSERT INTO stock_pengeluaran VALUES('20', 'B00005', '3000.00');
INSERT INTO stock_pengeluaran VALUES('21', 'B00006', '3000.00');
INSERT INTO stock_pengeluaran VALUES('22', 'B00009', '3000.00');
INSERT INTO stock_pengeluaran VALUES('23', 'B00002', '299.20');
INSERT INTO stock_pengeluaran VALUES('24', 'B00003', '200.10');
INSERT INTO stock_pengeluaran VALUES('25', 'B00004', '1000.25');
INSERT INTO stock_pengeluaran VALUES('26', 'B00005', '3000.00');
INSERT INTO stock_pengeluaran VALUES('27', 'B00006', '3000.00');
INSERT INTO stock_pengeluaran VALUES('28', 'B00007', '3000.00');
INSERT INTO stock_pengeluaran VALUES('29', 'B00008', '3000.00');
INSERT INTO stock_pengeluaran VALUES('30', 'B00009', '3000.00');
INSERT INTO stock_pengeluaran VALUES('31', 'B00001', '1.00');



DROP TABLE IF EXISTS stock_produksi;

CREATE TABLE `stock_produksi` (
  `id` int(8) NOT NULL auto_increment,
  `kode` varchar(100) character set latin1 NOT NULL,
  `jumlah` float(10,2) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

INSERT INTO stock_produksi VALUES('1', 'B00004', '3000.00');
INSERT INTO stock_produksi VALUES('2', 'B00003', '3200.00');
INSERT INTO stock_produksi VALUES('3', 'B00002', '3600.00');
INSERT INTO stock_produksi VALUES('4', 'B00005', '3300.00');
INSERT INTO stock_produksi VALUES('5', 'B00006', '3000.00');
INSERT INTO stock_produksi VALUES('6', 'B00007', '3000.00');
INSERT INTO stock_produksi VALUES('7', 'B00008', '3000.00');
INSERT INTO stock_produksi VALUES('8', 'B00001', '2999.00');
INSERT INTO stock_produksi VALUES('9', 'B00002', '3000.00');
INSERT INTO stock_produksi VALUES('10', 'B00003', '3000.00');
INSERT INTO stock_produksi VALUES('11', 'B00004', '3000.00');
INSERT INTO stock_produksi VALUES('12', 'B00005', '3000.00');
INSERT INTO stock_produksi VALUES('13', 'B00006', '3000.00');
INSERT INTO stock_produksi VALUES('14', 'B00007', '3000.00');
INSERT INTO stock_produksi VALUES('15', 'B00009', '3000.00');
INSERT INTO stock_produksi VALUES('16', 'B00004', '3.00');
INSERT INTO stock_produksi VALUES('17', 'B00002', '3.00');
INSERT INTO stock_produksi VALUES('18', 'B00002', '1.00');



DROP TABLE IF EXISTS tbl_stockopname;

CREATE TABLE `tbl_stockopname` (
  `tglstock` date NOT NULL,
  `no_surat` varchar(150) character set latin1 NOT NULL,
  `tglsurat` date NOT NULL,
  `petugas` varchar(255) character set latin1 NOT NULL,
  `kode_brg` varchar(100) character set latin1 NOT NULL,
  `saldo` float(10,2) NOT NULL,
  `stockopname` float(10,2) NOT NULL,
  `selisih` float(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

INSERT INTO tbl_stockopname VALUES('2013-02-01', '34534', '2013-02-01', '43534', 'B00002', '1300.00', '2500.00', '200.00');
INSERT INTO tbl_stockopname VALUES('2012-12-31', 'rtertert', '2012-12-31', 'ertert', 'B00001', '2000.00', '2000.00', '2200.00');



DROP TABLE IF EXISTS tmp_adjusment;

CREATE TABLE `tmp_adjusment` (
  `id` int(4) NOT NULL auto_increment,
  `kode` char(100) NOT NULL,
  `jumlah` float(10,2) NOT NULL,
  `cat` varchar(100) NOT NULL,
  `userid` char(8) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS tmp_barang;

CREATE TABLE `tmp_barang` (
  `id` varchar(4) NOT NULL,
  `kd_barang` char(100) NOT NULL,
  `nm_barang` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `spec` varchar(100) NOT NULL,
  `stok` float(10,2) NOT NULL,
  `satuan` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `kd_kategori` char(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS tmp_brgjadi;

CREATE TABLE `tmp_brgjadi` (
  `id` int(4) NOT NULL auto_increment,
  `kode` char(100) NOT NULL,
  `jumlah` float(10,2) NOT NULL,
  `ket` varchar(200) NOT NULL,
  `userid` char(8) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO tmp_brgjadi VALUES('5', 'B00001', '1.00', 'fdg', 'goestoe');



DROP TABLE IF EXISTS tmp_closing;

CREATE TABLE `tmp_closing` (
  `id` varchar(4) collate latin1_general_ci NOT NULL,
  `tgl_closing` date NOT NULL,
  `kd_barang` char(6) character set latin1 NOT NULL,
  `stock` float(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;




DROP TABLE IF EXISTS tmp_detail_brgjadi;

CREATE TABLE `tmp_detail_brgjadi` (
  `id` char(4) character set latin1 NOT NULL,
  `kode` varchar(100) character set latin1 NOT NULL,
  `jumlah` float(10,2) NOT NULL,
  `ket` varchar(100) character set latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

INSERT INTO tmp_detail_brgjadi VALUES('1', 'B00001', '200.00', 'Baru');
INSERT INTO tmp_detail_brgjadi VALUES('2', 'B00002', '200.00', 'Baru');
INSERT INTO tmp_detail_brgjadi VALUES('3', 'B00003', '200.00', 'Baru');
INSERT INTO tmp_detail_brgjadi VALUES('4', 'B00004', '100.00', 'Baru');
INSERT INTO tmp_detail_brgjadi VALUES('5', 'B00005', '200.00', 'Baru');
INSERT INTO tmp_detail_brgjadi VALUES('6', 'B00006', '200.00', 'Baru');
INSERT INTO tmp_detail_brgjadi VALUES('7', 'B00007', '100.00', 'Baru');
INSERT INTO tmp_detail_brgjadi VALUES('8', 'B00008', '200.00', 'Baru');



DROP TABLE IF EXISTS tmp_detail_incoming;

CREATE TABLE `tmp_detail_incoming` (
  `id` char(4) character set latin1 NOT NULL,
  `kode` varchar(100) character set latin1 NOT NULL,
  `jumlah` float(10,2) NOT NULL,
  `valuta` varchar(100) character set latin1 NOT NULL,
  `nilai` varchar(100) character set latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;




DROP TABLE IF EXISTS tmp_detail_incoming_outgoing;

CREATE TABLE `tmp_detail_incoming_outgoing` (
  `id` char(4) character set latin1 NOT NULL,
  `kode` varchar(100) character set latin1 NOT NULL,
  `jumlah` float(10,2) NOT NULL,
  `ket` varchar(100) character set latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;




DROP TABLE IF EXISTS tmp_detail_outgoing;

CREATE TABLE `tmp_detail_outgoing` (
  `id` char(4) character set latin1 NOT NULL,
  `kode` varchar(100) character set latin1 NOT NULL,
  `jumlah` float(10,2) NOT NULL,
  `valuta` varchar(100) character set latin1 NOT NULL,
  `nilai` varchar(100) character set latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;




DROP TABLE IF EXISTS tmp_detail_outgoing_incoming;

CREATE TABLE `tmp_detail_outgoing_incoming` (
  `id` char(4) character set latin1 NOT NULL,
  `kode` varchar(100) character set latin1 NOT NULL,
  `jumlah` float(10,2) NOT NULL,
  `ket` varchar(100) character set latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;




DROP TABLE IF EXISTS tmp_detail_outgoing_produksi;

CREATE TABLE `tmp_detail_outgoing_produksi` (
  `id` char(4) character set latin1 NOT NULL,
  `kode` varchar(100) character set latin1 NOT NULL,
  `jumlah` float(10,2) NOT NULL,
  `ket` varchar(100) character set latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;




DROP TABLE IF EXISTS tmp_detail_produksi;

CREATE TABLE `tmp_detail_produksi` (
  `id` char(4) character set latin1 NOT NULL,
  `kode` varchar(100) character set latin1 NOT NULL,
  `jumlah` float(10,2) NOT NULL,
  `ket` varchar(100) character set latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;




DROP TABLE IF EXISTS tmp_detail_produksi_incoming;

CREATE TABLE `tmp_detail_produksi_incoming` (
  `id` char(4) character set latin1 NOT NULL,
  `kode` varchar(100) character set latin1 NOT NULL,
  `jumlah` float(10,2) NOT NULL,
  `ket` varchar(100) character set latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;




DROP TABLE IF EXISTS tmp_detail_produksi_outgoing;

CREATE TABLE `tmp_detail_produksi_outgoing` (
  `id` char(4) character set latin1 NOT NULL,
  `kode` varchar(100) character set latin1 NOT NULL,
  `jumlah` float(10,2) NOT NULL,
  `ket` varchar(100) character set latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;




DROP TABLE IF EXISTS tmp_incoming_outgoing;

CREATE TABLE `tmp_incoming_outgoing` (
  `id` int(4) NOT NULL auto_increment,
  `kode` char(100) NOT NULL,
  `jumlah` float(10,2) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `userid` char(8) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS tmp_incoming_terima;

CREATE TABLE `tmp_incoming_terima` (
  `nomor` char(15) NOT NULL,
  `dari` varchar(255) NOT NULL,
  `no_spb` char(100) NOT NULL,
  `tgl_spb` date NOT NULL,
  `dept` char(200) NOT NULL,
  `name_ppc` char(200) NOT NULL,
  `catatan` varchar(200) NOT NULL,
  `user_trt` char(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS tmp_incoming_terima_detail;

CREATE TABLE `tmp_incoming_terima_detail` (
  `nomor` char(15) NOT NULL,
  `id` int(10) NOT NULL auto_increment,
  `dari` varchar(255) NOT NULL,
  `kode` char(100) NOT NULL,
  `jumlah` float(10,2) NOT NULL,
  `ket` char(200) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS tmp_konversi;

CREATE TABLE `tmp_konversi` (
  `id` int(4) NOT NULL auto_increment,
  `kode` char(100) NOT NULL,
  `jumlah` float(10,2) NOT NULL,
  `ket` varchar(200) NOT NULL,
  `userid` char(8) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS tmp_outgoing_incoming;

CREATE TABLE `tmp_outgoing_incoming` (
  `id` int(4) NOT NULL auto_increment,
  `kode` char(100) NOT NULL,
  `jumlah` float(10,2) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `userid` char(8) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS tmp_outgoing_produksi;

CREATE TABLE `tmp_outgoing_produksi` (
  `id` int(4) NOT NULL auto_increment,
  `kode` char(100) NOT NULL,
  `jumlah` float(10,2) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `userid` char(8) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS tmp_outgoing_terima;

CREATE TABLE `tmp_outgoing_terima` (
  `nomor` char(15) NOT NULL,
  `dari` varchar(255) NOT NULL,
  `no_spb` char(100) NOT NULL,
  `tgl_spb` date NOT NULL,
  `dept` char(200) NOT NULL,
  `name_ppc` char(200) NOT NULL,
  `catatan` varchar(200) NOT NULL,
  `user_trt` char(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO tmp_outgoing_terima VALUES('INC-0000000001', 'INCOMING', 'fdg', '2013-02-18', 'dfg', 'dfg', 'dfg', 'goestoe');
INSERT INTO tmp_outgoing_terima VALUES('PROD-0000000002', 'PRODUKSI', '234', '2013-03-04', '234', '234', '234', 'goestoe');
INSERT INTO tmp_outgoing_terima VALUES('PROD-0000000003', 'PRODUKSI', '12', '2013-03-07', 'Bagian Penyimpanan Barang Sisa / Scrap', 'fdf', 'dfgdf', 'goestoe');



DROP TABLE IF EXISTS tmp_outgoing_terima_detail;

CREATE TABLE `tmp_outgoing_terima_detail` (
  `nomor` char(15) NOT NULL,
  `id` int(10) NOT NULL auto_increment,
  `dari` varchar(255) NOT NULL,
  `kode` char(100) NOT NULL,
  `jumlah` float(10,2) NOT NULL,
  `ket` char(200) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO tmp_outgoing_terima_detail VALUES('INC-0000000001', '1', 'INCOMING', 'B00002', '200.00', 'dfgdfg');
INSERT INTO tmp_outgoing_terima_detail VALUES('PROD-0000000002', '3', 'PRODUKSI', 'B00001', '1.00', '234');
INSERT INTO tmp_outgoing_terima_detail VALUES('PROD-0000000002', '4', 'PRODUKSI', 'B00001', '1.00', '234');
INSERT INTO tmp_outgoing_terima_detail VALUES('PROD-0000000003', '5', 'PRODUKSI', 'B00001', '1.00', '4');



DROP TABLE IF EXISTS tmp_pemasukan;

CREATE TABLE `tmp_pemasukan` (
  `id` int(4) NOT NULL auto_increment,
  `kode` char(100) NOT NULL,
  `jumlah` float(10,2) NOT NULL,
  `valuta` char(4) NOT NULL,
  `nilai` float(10,2) NOT NULL,
  `userid` char(8) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS tmp_pengeluaran;

CREATE TABLE `tmp_pengeluaran` (
  `id` int(4) NOT NULL auto_increment,
  `kode` char(100) NOT NULL,
  `jumlah` float(10,2) NOT NULL,
  `valuta` char(4) NOT NULL,
  `nilai` float(10,2) NOT NULL,
  `userid` char(8) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

INSERT INTO tmp_pengeluaran VALUES('31', 'B00003', '100.10', 'JPY', '200.20', 'goestoe');
INSERT INTO tmp_pengeluaran VALUES('32', 'B00002', '500.00', 'JPY', '200.00', 'goestoe');
INSERT INTO tmp_pengeluaran VALUES('33', 'B00002', '400.10', 'JPY', '500.40', 'goestoe');
INSERT INTO tmp_pengeluaran VALUES('34', 'B00002', '1.00', 'JPY', '200.00', 'goestoe');



DROP TABLE IF EXISTS tmp_produksi;

CREATE TABLE `tmp_produksi` (
  `id` int(4) NOT NULL auto_increment,
  `kode` char(100) NOT NULL,
  `jumlah` float(10,2) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `userid` char(8) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=75 DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS tmp_produksi_incoming;

CREATE TABLE `tmp_produksi_incoming` (
  `id` int(4) NOT NULL auto_increment,
  `kode` char(100) NOT NULL,
  `jumlah` float(10,2) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `userid` char(8) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS tmp_produksi_outgoing;

CREATE TABLE `tmp_produksi_outgoing` (
  `id` int(4) NOT NULL auto_increment,
  `kode` char(100) NOT NULL,
  `jumlah` float(10,2) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `userid` char(8) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS tmp_produksi_terima;

CREATE TABLE `tmp_produksi_terima` (
  `nomor` char(15) NOT NULL,
  `dari` varchar(255) NOT NULL,
  `no_spb` char(100) NOT NULL,
  `tgl_spb` date NOT NULL,
  `dept` char(200) NOT NULL,
  `name_ppc` char(200) NOT NULL,
  `catatan` varchar(200) NOT NULL,
  `user_trt` char(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO tmp_produksi_terima VALUES('INC-0000000005', 'INCOMING', '123', '2013-03-07', 'Bagian Penyimpanan Barang Sisa / Scrap', '21', '123', 'goestoe');



DROP TABLE IF EXISTS tmp_produksi_terima_detail;

CREATE TABLE `tmp_produksi_terima_detail` (
  `nomor` char(15) NOT NULL,
  `id` int(10) NOT NULL auto_increment,
  `dari` varchar(255) NOT NULL,
  `kode` char(100) NOT NULL,
  `jumlah` float(10,2) NOT NULL,
  `ket` char(200) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO tmp_produksi_terima_detail VALUES('INC-0000000005', '3', 'INCOMING', 'B00003', '1.00', '54');



DROP TABLE IF EXISTS tmp_stock_pemasukan;

CREATE TABLE `tmp_stock_pemasukan` (
  `id` varchar(4) collate latin1_general_ci NOT NULL,
  `kode` varchar(100) character set latin1 NOT NULL,
  `jumlah` float(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;




DROP TABLE IF EXISTS tmp_stock_pengeluaran;

CREATE TABLE `tmp_stock_pengeluaran` (
  `id` varchar(4) collate latin1_general_ci NOT NULL,
  `kode` varchar(100) character set latin1 NOT NULL,
  `jumlah` float(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;




DROP TABLE IF EXISTS tmp_stock_produksi;

CREATE TABLE `tmp_stock_produksi` (
  `id` varchar(4) collate latin1_general_ci NOT NULL,
  `kode` varchar(100) character set latin1 NOT NULL,
  `jumlah` float(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

INSERT INTO tmp_stock_produksi VALUES('1', 'B00002', '3000.00');
INSERT INTO tmp_stock_produksi VALUES('2', 'B00003', '3000.00');
INSERT INTO tmp_stock_produksi VALUES('3', 'B00004', '3000.00');
INSERT INTO tmp_stock_produksi VALUES('4', 'B00005', '3000.00');
INSERT INTO tmp_stock_produksi VALUES('5', 'B00006', '3000.00');
INSERT INTO tmp_stock_produksi VALUES('6', 'B00007', '3000.00');
INSERT INTO tmp_stock_produksi VALUES('7', 'B00008', '3000.00');
INSERT INTO tmp_stock_produksi VALUES('8', 'B00009', '3000.00');



DROP TABLE IF EXISTS user_act;

CREATE TABLE `user_act` (
  `id` int(10) NOT NULL auto_increment,
  `userid` varchar(12) character set latin1 NOT NULL,
  `aktivitas` varchar(255) character set latin1 NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=128 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

INSERT INTO user_act VALUES('1', 'goestoe', 'Menyimpan data mata uang dengan data jenis USD nama Dollar Amerika', '2013-02-17', '00:00:00');
INSERT INTO user_act VALUES('2', 'goestoe', 'Menyimpan data mata uang dengan data jenis IDR dan nama Indonesian Rupiah', '2013-02-17', '23:45:24');
INSERT INTO user_act VALUES('3', 'goestoe', 'Menambah data transaksi incoming - outgoing nomor SPB: fdg dan tanggal 18-02-2013', '2013-02-18', '11:11:12');
INSERT INTO user_act VALUES('4', 'goestoe', 'Menambah data user dengan nama Super Admin 2 dan userid super', '2013-02-18', '12:38:05');
INSERT INTO user_act VALUES('5', 'super', 'Mengubah data user dengan nama Super Admin1 dan userid goestoe', '2013-02-18', '12:47:29');
INSERT INTO user_act VALUES('6', 'goestoe', 'Menambah data transaksi produksi-outgoing nomor BPB: 4567 dan tanggal 18-02-2013', '2013-02-18', '18:31:01');
INSERT INTO user_act VALUES('7', 'goestoe', 'Menambah data transaksi pemasukan barang dengan nomor BPB: 324 dan tanggal 18-02-2013', '2013-02-18', '23:03:10');
INSERT INTO user_act VALUES('8', 'goestoe', 'Menambah data transaksi incoming-produksi dengan nomor SPB: 1235 dan tanggal 20-02-2013', '2013-02-20', '17:19:52');
INSERT INTO user_act VALUES('9', 'goestoe', 'Mengubah data perusahaan', '2013-02-20', '18:55:57');
INSERT INTO user_act VALUES('10', 'goestoe', 'Menambah data adjustment dengan nomor gf456 tanggal 20-02-2013', '2013-02-20', '18:56:45');
INSERT INTO user_act VALUES('11', 'goestoe', 'Mengubah data PENERIMA dengan nama PT Berlian Tahta', '2013-02-20', '18:57:00');
INSERT INTO user_act VALUES('12', 'goestoe', 'Mengubah data PENERIMA dengan nama PT Berlian Tahta', '2013-02-20', '18:57:06');
INSERT INTO user_act VALUES('13', 'goestoe', 'Mengubah data PENERIMA dengan nama PT Berlian Tahta', '2013-02-20', '19:01:18');
INSERT INTO user_act VALUES('14', 'goestoe', 'Mengubah data barang dengan nama Celana Jeans', '2013-02-20', '19:05:02');
INSERT INTO user_act VALUES('15', 'goestoe', 'Menambah data pemasok/supplier dengan kode S00001 dan nama PT Kolang Kaling', '2013-02-20', '19:11:16');
INSERT INTO user_act VALUES('16', 'goestoe', 'Mengubah data jenis dokpab masuk dengan jenis BC 2.3 dan nama Pemasukan barang dari Luar Daerah Pabean/Luar Negeri', '2013-02-20', '19:12:37');
INSERT INTO user_act VALUES('17', 'goestoe', 'Mengubah data barang dengan nama Baju', '2013-02-20', '19:13:23');
INSERT INTO user_act VALUES('18', 'goestoe', 'Mengubah data barang dengan nama Kaos', '2013-02-20', '19:13:44');
INSERT INTO user_act VALUES('19', 'goestoe', 'Mengubah data barang dengan nama Batu', '2013-02-20', '19:13:57');
INSERT INTO user_act VALUES('20', 'goestoe', 'Mengubah data perusahaan', '2013-02-20', '19:15:19');
INSERT INTO user_act VALUES('21', 'goestoe', 'Mengubah data barang dengan kode  dan nama Kaos Baru', '2013-02-20', '19:17:35');
INSERT INTO user_act VALUES('22', 'goestoe', 'Mengubah data barang dengan kode B00004 dan nama Batu Besar', '2013-02-20', '19:18:45');
INSERT INTO user_act VALUES('23', 'goestoe', 'Menghapus data barang dengan kode: B00004', '2013-02-20', '19:20:14');
INSERT INTO user_act VALUES('24', 'goestoe', 'Menghapus data barang dengan kode: B00003', '2013-02-20', '19:34:34');
INSERT INTO user_act VALUES('25', 'goestoe', 'Mengubah data barang dengan kode B00002 dan nama Celana Jeans', '2013-02-20', '19:34:49');
INSERT INTO user_act VALUES('26', 'goestoe', 'Mengubah data barang dengan kode B00002 dan nama Celana Jeans', '2013-02-20', '19:34:57');
INSERT INTO user_act VALUES('27', 'goestoe', 'Mengubah data barang dengan kode B00002 dan nama Celana Jeans', '2013-02-20', '19:35:04');
INSERT INTO user_act VALUES('28', 'goestoe', 'Mengubah data tujuan pengiriman dengan kode:CAT-0007 dan nama Pengembalian Pinjaman', '2013-02-20', '19:38:24');
INSERT INTO user_act VALUES('29', 'goestoe', 'Menambah data pemasok/supplier dengan kode S00001 dan nama PT Kolang Kaling', '2013-02-20', '19:42:00');
INSERT INTO user_act VALUES('30', 'goestoe', 'Mengubah data pemasok/supplier dengan kode: S00001 dan nama PT Kolang Kaling', '2013-02-20', '19:43:56');
INSERT INTO user_act VALUES('31', 'goestoe', 'Menghapus data pemasok/supplier dengan kode: S00001', '2013-02-20', '19:44:10');
INSERT INTO user_act VALUES('32', 'goestoe', 'Mengubah data satuan barang dengan jenis Mtr dan nama Meter Panjang Pendek', '2013-02-20', '19:45:24');
INSERT INTO user_act VALUES('33', 'goestoe', 'Menghapus data satuan barang dengan kode: SAT001', '2013-02-20', '19:45:42');
INSERT INTO user_act VALUES('34', 'goestoe', 'Menambah data PENERIMA dengan kode P00001 dan nama PT Berlian Tahta', '2013-02-20', '19:46:20');
INSERT INTO user_act VALUES('35', 'goestoe', 'Mengubah data PENERIMA dengan nama PT Berlian Tahta', '2013-02-20', '19:46:46');
INSERT INTO user_act VALUES('36', 'goestoe', 'Mengubah data perusahaan', '2013-02-20', '19:47:03');
INSERT INTO user_act VALUES('37', 'goestoe', 'Mengubah data mata uang dengan data jenis USD dan nama Dollar Amerika Serikat', '2013-02-20', '19:47:31');
INSERT INTO user_act VALUES('38', 'goestoe', 'Menghapus data mata uang dengan data kode:CUR003', '2013-02-20', '19:47:43');
INSERT INTO user_act VALUES('39', 'goestoe', 'Menerima barang PRODUKSI dengan nomor LPB: erwrwer dan tanggal 20-02-2013', '2013-02-20', '19:49:23');
INSERT INTO user_act VALUES('40', 'goestoe', 'Menambah data transaksi incoming-produksi dengan nomor SPB: 78978 dan tanggal 20-02-2013', '2013-02-20', '20:00:56');
INSERT INTO user_act VALUES('41', 'goestoe', 'Menerima barang PRODUKSI dengan nomor LPB: 879 dan tanggal 20-02-2013', '2013-02-20', '20:01:10');
INSERT INTO user_act VALUES('42', 'goestoe', 'Menambah data satuan barang dengan jenis PCS dan nama Pieces', '2013-02-20', '20:10:19');
INSERT INTO user_act VALUES('43', 'goestoe', 'Mengubah data barang dengan kode B00002 dan nama Celana Jeans', '2013-02-20', '20:10:31');
INSERT INTO user_act VALUES('44', 'goestoe', 'Menambah data pemasok/supplier dengan kode S00001 dan nama WER', '2013-02-22', '16:51:56');
INSERT INTO user_act VALUES('45', 'goestoe', 'Menambah data pemasok/supplier dengan kode S00002 dan nama PT Kolang Kaling', '2013-02-22', '16:54:54');
INSERT INTO user_act VALUES('46', 'goestoe', 'Menambah data transaksi pemasukan barang dengan nomor BPB: try dan tanggal 22-02-2013', '2013-02-22', '17:00:06');
INSERT INTO user_act VALUES('47', 'goestoe', 'Menambah data transaksi pemasukan barang dengan nomor BPB: 123456 dan tanggal 22-02-2013', '2013-02-22', '17:20:35');
INSERT INTO user_act VALUES('48', 'goestoe', 'Menambah data transaksi pengeluaran barang nomor surat jalan: 1234 dan tanggal 22-02-2013', '2013-02-22', '18:06:39');
INSERT INTO user_act VALUES('49', 'goestoe', 'Menghapus data barang dengan kode: B00001', '2013-02-26', '10:02:55');
INSERT INTO user_act VALUES('50', 'goestoe', 'Menghapus data barang dengan kode: B00002', '2013-02-26', '10:02:57');
INSERT INTO user_act VALUES('51', 'goestoe', 'Menghapus data barang dengan kode: B00008', '2013-02-26', '14:53:37');
INSERT INTO user_act VALUES('52', 'goestoe', 'Menghapus data barang dengan kode: B00007', '2013-02-26', '14:53:39');
INSERT INTO user_act VALUES('53', 'goestoe', 'Menghapus data barang dengan kode: B00006', '2013-02-26', '14:53:41');
INSERT INTO user_act VALUES('54', 'goestoe', 'Menghapus data barang dengan kode: B00005', '2013-02-26', '14:53:43');
INSERT INTO user_act VALUES('55', 'goestoe', 'Menghapus data barang dengan kode: B00004', '2013-02-26', '14:53:45');
INSERT INTO user_act VALUES('56', 'goestoe', 'Menghapus data barang dengan kode: B00003', '2013-02-26', '14:53:47');
INSERT INTO user_act VALUES('57', 'goestoe', 'Mengubah data user dengan nama Admin1 dan userid admin', '2013-02-27', '07:30:44');
INSERT INTO user_act VALUES('58', 'goestoe', 'Mengubah data barang dengan kode B00001 dan nama Baju', '2013-02-27', '12:49:10');
INSERT INTO user_act VALUES('59', 'goestoe', 'Mengubah Password', '2013-02-28', '08:37:38');
INSERT INTO user_act VALUES('60', 'goestoe', 'Mengubah Password', '2013-02-28', '08:38:26');
INSERT INTO user_act VALUES('61', 'goestoe', 'Mengubah Password', '2013-02-28', '08:41:16');
INSERT INTO user_act VALUES('62', 'goestoe', 'Mengubah data user dengan nama Operator Pemasukan dan userid masuk', '2013-02-28', '08:43:18');
INSERT INTO user_act VALUES('63', 'masuk', 'Mengubah Password', '2013-02-28', '08:43:50');
INSERT INTO user_act VALUES('64', 'goestoe', 'Mengubah Password', '2013-02-28', '09:05:38');
INSERT INTO user_act VALUES('65', 'goestoe', 'Menambah data tujuan pengiriman dengan nama Pemusnahan', '2013-03-01', '08:57:47');
INSERT INTO user_act VALUES('66', 'goestoe', 'Menambah data Barang Jadi hasil produksi dengan nomor BHP 133 dan tanggal 02-03-2013', '2013-03-02', '09:10:33');
INSERT INTO user_act VALUES('67', 'goestoe', 'Menghapus data barang dengan kode: B00001', '2013-03-02', '09:12:55');
INSERT INTO user_act VALUES('68', 'goestoe', 'Menghapus data barang dengan kode: B00008', '2013-03-02', '09:13:09');
INSERT INTO user_act VALUES('69', 'goestoe', 'Menghapus data barang dengan kode: B00007', '2013-03-02', '09:13:13');
INSERT INTO user_act VALUES('70', 'goestoe', 'Menghapus data barang dengan kode: B00006', '2013-03-02', '09:13:17');
INSERT INTO user_act VALUES('71', 'goestoe', 'Menghapus data barang dengan kode: B00005', '2013-03-02', '09:13:21');
INSERT INTO user_act VALUES('72', 'goestoe', 'Menghapus data barang dengan kode: B00004', '2013-03-02', '09:13:24');
INSERT INTO user_act VALUES('73', 'goestoe', 'Menghapus data barang dengan kode: B00003', '2013-03-02', '09:13:26');
INSERT INTO user_act VALUES('74', 'goestoe', 'Menghapus data barang dengan kode: B00002', '2013-03-02', '09:13:28');
INSERT INTO user_act VALUES('75', 'goestoe', 'Menambah data barang dengan kode B00001 dan nama Sepatu', '2013-03-02', '09:14:08');
INSERT INTO user_act VALUES('76', 'goestoe', 'Menambah data transaksi pemasukan barang dengan nomor BPB: 4353 dan tanggal 02-03-2013', '2013-03-02', '09:16:16');
INSERT INTO user_act VALUES('77', 'goestoe', 'Menambah data Barang Jadi hasil produksi dengan nomor BHP 234 dan tanggal 02-03-2013', '2013-03-02', '09:17:09');
INSERT INTO user_act VALUES('78', 'goestoe', 'Mengubah data perusahaan', '2013-03-02', '21:32:53');
INSERT INTO user_act VALUES('79', 'admin', 'Mengubah data kategori barang dengan nama Jig', '2013-03-02', '22:11:15');
INSERT INTO user_act VALUES('80', 'admin', 'Mengubah data kategori barang dengan nama Moulding', '2013-03-02', '22:11:27');
INSERT INTO user_act VALUES('81', 'admin', 'Menghapus data kategori barang dengan kode:K03', '2013-03-02', '22:11:31');
INSERT INTO user_act VALUES('82', 'admin', 'Menghapus data kategori barang dengan kode:K04', '2013-03-02', '22:11:33');
INSERT INTO user_act VALUES('83', 'admin', 'Menghapus data user dengan kode:8', '2013-03-02', '22:12:00');
INSERT INTO user_act VALUES('84', 'admin', 'Menghapus data user dengan kode:9', '2013-03-02', '22:12:03');
INSERT INTO user_act VALUES('85', 'admin', 'Menghapus data user dengan kode:10', '2013-03-02', '22:12:06');
INSERT INTO user_act VALUES('86', 'admin', 'Menghapus data user dengan kode:12', '2013-03-02', '22:12:08');
INSERT INTO user_act VALUES('87', 'admin', 'Menghapus data user dengan kode:4', '2013-03-02', '22:12:14');
INSERT INTO user_act VALUES('88', 'admin', 'Menghapus data user dengan kode:3', '2013-03-02', '22:12:17');
INSERT INTO user_act VALUES('89', 'admin', 'Menghapus data user dengan kode:6', '2013-03-02', '22:12:20');
INSERT INTO user_act VALUES('90', 'admin', 'Mengubah data user dengan nama Gerald dan userid tasya', '2013-03-02', '22:12:36');
INSERT INTO user_act VALUES('91', 'admin', 'Mengubah data user dengan nama Bayu dan userid bayu', '2013-03-02', '22:12:58');
INSERT INTO user_act VALUES('92', 'admin', 'Mengubah data user dengan nama Tasya dan userid tasya', '2013-03-02', '22:13:10');
INSERT INTO user_act VALUES('93', 'admin', 'Menambah data kategori barang dengan nama Tooling', '2013-03-02', '22:59:57');
INSERT INTO user_act VALUES('94', 'admin', 'Menghapus data user dengan kode:5', '2013-03-04', '07:59:21');
INSERT INTO user_act VALUES('95', 'admin', 'Menghapus data user dengan kode:7', '2013-03-04', '07:59:23');
INSERT INTO user_act VALUES('96', 'admin', 'Menambah data user dengan nama Agustu Atihuta dan userid goestoe', '2013-03-04', '07:59:39');
INSERT INTO user_act VALUES('97', 'admin', 'Menghapus data user dengan kode:1', '2013-03-04', '07:59:44');
INSERT INTO user_act VALUES('98', 'goestoe', 'Menambah data transaksi pemasukan barang dengan nomor BPB: 23234 dan tanggal 04-03-2013', '2013-03-04', '08:53:39');
INSERT INTO user_act VALUES('99', 'goestoe', 'Mengubah data kategori barang dengan nama Bahan Baku/Penolong', '2013-03-04', '09:12:45');
INSERT INTO user_act VALUES('100', 'goestoe', 'Mengubah data kategori barang dengan nama Barang Jadi', '2013-03-04', '09:12:53');
INSERT INTO user_act VALUES('101', 'goestoe', 'Mengubah data kategori barang dengan nama Barang Modal dan Peralatan Perkantoran', '2013-03-04', '09:13:10');
INSERT INTO user_act VALUES('102', 'goestoe', 'Menambah data kategori barang dengan nama Barang Sisa / Scrap', '2013-03-04', '09:13:16');
INSERT INTO user_act VALUES('103', 'goestoe', 'Menambah data transaksi produksi-incoming nomor SPB: 123456 dan tanggal 04-03-2013', '2013-03-04', '12:02:45');
INSERT INTO user_act VALUES('104', 'goestoe', 'Menerima barang INCOMING dengan nomor LPB: 12345 dan tanggal 04-03-2013', '2013-03-04', '12:06:33');
INSERT INTO user_act VALUES('105', 'goestoe', 'Menambah data transaksi incoming-produksi dengan nomor SPB: 123 dan tanggal 04-03-2013', '2013-03-04', '14:13:20');
INSERT INTO user_act VALUES('106', 'goestoe', 'Menerima barang PRODUKSI dengan nomor LPB: 1234 dan tanggal 04-03-2013', '2013-03-04', '14:13:59');
INSERT INTO user_act VALUES('107', 'goestoe', 'Menambah data transaksi pemasukan barang dengan nomor SPB: 123 dan tanggal 04-03-2013', '2013-03-04', '14:57:41');
INSERT INTO user_act VALUES('108', 'goestoe', 'Menerima barang OUTGOING dengan nomor LPB: 123 dan tanggal 04-03-2013', '2013-03-04', '14:57:54');
INSERT INTO user_act VALUES('109', 'goestoe', 'Menambah data transaksi pemasukan barang dengan nomor SPB: 234 dan tanggal 04-03-2013', '2013-03-04', '16:42:23');
INSERT INTO user_act VALUES('110', 'goestoe', 'Menambah data transaksi outgoing-incoming nomor SPB: 122 dan tanggal 04-03-2013', '2013-03-04', '18:23:15');
INSERT INTO user_act VALUES('111', 'goestoe', 'Menambah data tujuan pengiriman dengan nama Bagian Penyimpanan Bahan', '2013-03-07', '08:01:14');
INSERT INTO user_act VALUES('112', 'goestoe', 'Menambah data tujuan pengiriman dengan nama Bagian Alat Produksi', '2013-03-07', '08:01:34');
INSERT INTO user_act VALUES('113', 'goestoe', 'Menambah data tujuan pengiriman dengan nama Bagian Pra Produksi', '2013-03-07', '08:02:13');
INSERT INTO user_act VALUES('114', 'goestoe', 'Menambah data tujuan pengiriman dengan nama Bagian Produksi', '2013-03-07', '08:02:31');
INSERT INTO user_act VALUES('115', 'goestoe', 'Menambah data tujuan pengiriman dengan nama Bagian Kontrol Kualitas', '2013-03-07', '08:02:45');
INSERT INTO user_act VALUES('116', 'goestoe', 'Menambah data tujuan pengiriman dengan nama Bagian Pasca Produksi', '2013-03-07', '08:02:58');
INSERT INTO user_act VALUES('117', 'goestoe', 'Menambah data tujuan pengiriman dengan nama Bagian Penyimpanan Barang Jadi', '2013-03-07', '08:03:19');
INSERT INTO user_act VALUES('118', 'goestoe', 'Menambah data tujuan pengiriman dengan nama Bagian Penyimpanan Barang Sisa / Scrap', '2013-03-07', '08:03:36');
INSERT INTO user_act VALUES('119', 'goestoe', 'Menambah data tujuan pengiriman dengan nama Bagian Penjualan', '2013-03-07', '08:03:49');
INSERT INTO user_act VALUES('120', 'goestoe', 'Mengubah data tujuan pengiriman dengan kode:DEP-0001 dan nama Bagian Penyimpanan Bahan Baku / Penolong', '2013-03-07', '08:05:06');
INSERT INTO user_act VALUES('121', 'goestoe', 'Menambah data tujuan pengiriman dengan nama Bagian Personalia', '2013-03-07', '08:05:20');
INSERT INTO user_act VALUES('122', 'goestoe', 'Menghapus data tujuan pengiriman dengan kode:DEP-0010', '2013-03-07', '08:05:23');
INSERT INTO user_act VALUES('123', 'goestoe', 'Menambah data transaksi pemasukan barang dengan nomor SPB: 12 dan tanggal 07-03-2013', '2013-03-07', '08:16:38');
INSERT INTO user_act VALUES('124', 'goestoe', 'Menambah data transaksi incoming-produksi dengan nomor SPB: 123 dan tanggal 07-03-2013', '2013-03-07', '08:33:59');
INSERT INTO user_act VALUES('125', 'goestoe', 'Menerima barang INCOMING dengan nomor LPB: 123 dan tanggal 07-03-2013', '2013-03-07', '10:41:36');
INSERT INTO user_act VALUES('126', 'goestoe', 'Menambah data user dengan nama Bayu Hendra dan userid bayu', '2013-03-10', '00:58:05');
INSERT INTO user_act VALUES('127', 'goestoe', 'Menambah data user dengan nama Administrator dan userid admin', '2013-03-10', '00:58:20');



DROP TABLE IF EXISTS user_login;

CREATE TABLE `user_login` (
  `id` int(4) NOT NULL auto_increment,
  `userid` char(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nm_user` varchar(100) NOT NULL,
  `level` enum('BeaCukai','Pemasukan','Produksi','Pengeluaran','Exim','Highest','Admin','SuperAdmin') NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

INSERT INTO user_login VALUES('13', 'goestoe', 'a23911453577f4ad228cc0bb4698eb37', 'Agustu Atihuta', 'SuperAdmin');
INSERT INTO user_login VALUES('14', 'bayu', 'b0a9d75110b8ec5138271f78c8f899be', 'Bayu Hendra', 'SuperAdmin');
INSERT INTO user_login VALUES('15', 'admin', '400fb4f0c52e7290305e00ab9e3df759', 'Administrator', 'Admin');



