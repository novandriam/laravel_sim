-- phpMyAdmin SQL Dump
-- version 2.11.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 13, 2013 at 10:29 AM
-- Server version: 5.0.45
-- PHP Version: 5.2.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `inventorykb`
--

-- --------------------------------------------------------

--
-- Table structure for table `adjusment`
--

CREATE TABLE `adjusment` (
  `nomor` char(10) collate latin1_general_ci NOT NULL,
  `no_adj` varchar(100) collate latin1_general_ci NOT NULL,
  `tgl_adj` date NOT NULL,
  `tgl_stock` date NOT NULL,
  `ket` varchar(255) collate latin1_general_ci NOT NULL,
  `userid` varchar(100) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`nomor`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `adjusment`
--

INSERT INTO `adjusment` (`nomor`, `no_adj`, `tgl_adj`, `tgl_stock`, `ket`, `userid`) VALUES
('0000000001', 'ADJ-2013000001', '2013-03-17', '2013-03-17', '54645', 'admin'),
('0000000002', 'ADJ-2013000002', '2013-05-06', '2013-05-06', '34', 'goestoe');

-- --------------------------------------------------------

--
-- Table structure for table `adjusment_detail`
--

CREATE TABLE `adjusment_detail` (
  `nomor` char(10) collate latin1_general_ci NOT NULL,
  `id` int(10) NOT NULL auto_increment,
  `no_adj` varchar(100) collate latin1_general_ci NOT NULL,
  `tgl_adj` date NOT NULL,
  `kode` char(100) collate latin1_general_ci NOT NULL,
  `jumlah` varchar(20) collate latin1_general_ci NOT NULL,
  `cat` char(100) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `adjusment_detail`
--

INSERT INTO `adjusment_detail` (`nomor`, `id`, `no_adj`, `tgl_adj`, `kode`, `jumlah`, `cat`) VALUES
('0000000001', 4, 'ADJ-2013000001', '2013-03-17', 'MHK37290703', '1.00', '456'),
('0000000002', 5, 'ADJ-2013000002', '2013-05-06', 'MHK37290703', '23', 'ewr');

-- --------------------------------------------------------

--
-- Table structure for table `bahan`
--

CREATE TABLE `bahan` (
  `nomor` char(10) collate latin1_general_ci NOT NULL,
  `no_lap` char(100) collate latin1_general_ci NOT NULL,
  `tgl_lap` date NOT NULL,
  `name_ppc` char(200) collate latin1_general_ci NOT NULL,
  `catatan` varchar(200) collate latin1_general_ci NOT NULL,
  `userid` char(8) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `bahan`
--

INSERT INTO `bahan` (`nomor`, `no_lap`, `tgl_lap`, `name_ppc`, `catatan`, `userid`) VALUES
('0000000001', 'LB-2013000001/LAP-BAHAN', '2013-05-18', 'BB', 'hhh', 'goestoe'),
('0000000002', 'LB-2013000002/LAP-BAHAN', '2013-05-18', 'Berto', 'bsdfsdh sdfn', 'goestoe'),
('0000000003', 'LB-2013000003/LAP-BAHAN', '2013-05-18', '123', 'ewwr', 'goestoe'),
('0000000004', 'LB-2013000004/LAP-BAHAN', '2013-05-18', '324', '324', 'goestoe'),
('0000000005', 'LB-2013000005/LAP-BAHAN', '2013-05-18', 'hdhfg', 'dffg', 'goestoe');

-- --------------------------------------------------------

--
-- Table structure for table `bahanbaku_detail`
--

CREATE TABLE `bahanbaku_detail` (
  `nomor` char(10) collate latin1_general_ci NOT NULL,
  `id` int(10) NOT NULL auto_increment,
  `no_bpb` varchar(100) collate latin1_general_ci NOT NULL,
  `tgl_bpb` date NOT NULL,
  `kode` char(100) collate latin1_general_ci NOT NULL,
  `jumlah` varchar(20) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `bahanbaku_detail`
--

INSERT INTO `bahanbaku_detail` (`nomor`, `id`, `no_bpb`, `tgl_bpb`, `kode`, `jumlah`) VALUES
('0000000004', 1, '345', '2013-03-15', 'B00002', '200.00'),
('0000000005', 2, '324', '2013-03-15', 'B00002', '1000.00'),
('0000000001', 3, 'LP-2013000001/PRODUKSI', '2013-03-17', 'B00002', '1.00'),
('0000000002', 4, 'LP-2013000002/PRODUKSI', '2013-04-13', 'B00001', '1.00');

-- --------------------------------------------------------

--
-- Table structure for table `bahan_detail`
--

CREATE TABLE `bahan_detail` (
  `nomor` char(10) collate latin1_general_ci NOT NULL,
  `id` int(10) NOT NULL auto_increment,
  `no_lap` varchar(100) collate latin1_general_ci NOT NULL,
  `tgl_lap` date NOT NULL,
  `kode` char(100) collate latin1_general_ci NOT NULL,
  `jumlah` varchar(20) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `bahan_detail`
--

INSERT INTO `bahan_detail` (`nomor`, `id`, `no_lap`, `tgl_lap`, `kode`, `jumlah`) VALUES
('0000000001', 1, 'LB-2013000001/LAP-BAHAN', '2013-05-18', 'All ABS', '1'),
('0000000002', 2, 'LB-2013000002/LAP-BAHAN', '2013-05-18', 'All ABS', '509'),
('0000000003', 3, 'LB-2013000003/LAP-BAHAN', '2013-05-18', 'All ABS', '10'),
('0000000004', 4, 'LB-2013000004/LAP-BAHAN', '2013-05-18', 'All ABS', '20'),
('0000000005', 5, 'LB-2013000005/LAP-BAHAN', '2013-05-18', 'CB005-00010', '20'),
('0000000005', 6, 'LB-2013000005/LAP-BAHAN', '2013-05-18', 'All ABS', '20');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(8) NOT NULL auto_increment,
  `kd_barang` char(100) collate latin1_general_ci NOT NULL,
  `nm_barang` varchar(100) collate latin1_general_ci NOT NULL,
  `type` varchar(100) collate latin1_general_ci NOT NULL,
  `spec` varchar(100) collate latin1_general_ci NOT NULL,
  `stok` varchar(20) collate latin1_general_ci NOT NULL,
  `satuan` varchar(100) collate latin1_general_ci NOT NULL,
  `ket` varchar(100) collate latin1_general_ci NOT NULL,
  `kd_kategori` char(3) collate latin1_general_ci NOT NULL,
  `aktif` char(1) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1496 ;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `kd_barang`, `nm_barang`, `type`, `spec`, `stok`, `satuan`, `ket`, `kd_kategori`, `aktif`) VALUES
(1, 'All ABS', 'ABS HF 380 ,XG,EF,TR,DAF,HG,PC,SAM,PCL,AF', '-', '-', '6179.50', 'KGM', '', 'K01', '1'),
(2, 'All HIPS', 'HIPS 60 HR,HT,IDEMITSU,AF', '', '', '13093.00', 'Kg', '', 'K01', ''),
(3, 'All PMMA', 'PMMA 850,HI,IF,SUMIPEX,STYRON', '', '', '735.00', 'Kg', '', 'K01', ''),
(4, 'All INK', 'INK ', '', '', '291.00', 'Kg', '', 'K01', ''),
(5, 'All THINNER', 'THINENER ', '', '', '649.00', 'Kg', '', 'K01', ''),
(6, 'All PAINT', 'PAINT ', '', '', '528.00', 'Kg', '', 'K01', ''),
(7, 'All FOIL', 'FOIL', '', '', '36.80', 'Rl', '', 'K01', ''),
(8, 'DOUBLE TAPE 1', 'Al Tape 0.5T , ST-715A)', '', '', '0.00', 'Sh', '', 'K01', ''),
(9, 'CUSHION 12', 'Urethane (DW-PMF-01) 2T,3T,4T', '', '', '71.00', 'Rl', '', 'K01', ''),
(10, 'CUSHION 13', 'Cushhion PAD NR,Plate Badge,Spin,Bracket Main,Adhesive', '', '', '0.00', 'Sh', '', 'K01', ''),
(11, 'PET', 'PC. Sheet,PP.Grill ,PS.kimito, Pet, Clear, 0.25T, PVC,Valox', '', '', '9776.95', 'Sh', '', 'K01', ''),
(12, 'DOUBLE TAPE 2', 'Silicon Tape , Lakban Korea / All lakban', '', '', '0.00', 'Rl', '', 'K01', ''),
(13, 'CUSHION 1', 'Al Felt & Fu Foam D26 (6T), Fu Foam D32, D26(T)', '', '', '7.00', 'Rl', '', 'K01', ''),
(14, 'CUSHION 2', 'All Esorba', '', '', '42.00', 'Rl', '', 'K01', ''),
(15, 'CUSHION 3', 'ALL Rubber Foot ', '', '', '329.00', 'Sh', '', 'K01', ''),
(16, 'CUSHION 4', 'ALL Gap  Pad', '', '', '7269.00', 'Sh', '', 'K01', ''),
(17, 'PAPER', 'Felt Japan B" Type 1.0T', '', '', '2.00', 'Rl', '', 'K01', ''),
(18, 'CUSHION 5', 'ART PAPER 011671 , FUJI RELEASE PAPER', '', '', '14454.50', 'Rl', '', 'K01', ''),
(19, 'CUSHION 6', 'Bujikpo', '', '', '36.00', 'Rl', '', 'K01', ''),
(20, 'DOUBLE TAPE 3', 'D/Tape ,Bowoo,Nitto,Sony,Century,3M', '', '', '348.10', 'Rl', '', 'K01', ''),
(21, 'CUSHION 7', 'CF-40EG - 6 (T) Sponge', '', '', '0.00', 'Sh', '', 'K01', ''),
(22, 'CUSHION 8', 'All Eva', '', '', '467.00', 'Sh', '', 'K01', ''),
(23, 'CUSHION 9', 'Emi Tape, Paper, Emi Absorber 0.6T,Silicon 2T', '', '', '14.25', 'Rl', '', 'K01', ''),
(24, 'CUSHION 10', 'Hamilon 0.5T, 8MM', '', '', '0.00', 'Rl', '', 'K01', ''),
(25, 'HEXANE', 'Thinner, DSSA - 001-051', '', '', '182.00', 'KG', '', 'K01', ''),
(26, 'PROTECTION', 'Protection', '', '', '346.35', 'Rl', '', 'K01', ''),
(27, 'ALUMINIUM', 'Allmunium Tape 0.2T,0.1T0.5T ', '', '', '72.00', 'Rl', '', 'K01', ''),
(28, 'CUSHION 11', 'Poron SRS, M32 / LE ,IT , 2T, 3T', '', '', '8.00', 'Rl', '', 'K01', ''),
(29, 'DOUBLE TAPE 4', '3M 135 Electrical Tape 0.05t , Both -U / M', '', '', '0.00', 'Rl', '', 'K01', ''),
(30, 'PET', 'Toray Ecsaine W89, 700W, E20 0.1T White ', '', '', '0.00', 'RI', '', 'K01', ''),
(31, 'DOUBLE TAPE 5', 'Teraoka Tape 631$2#50 (Black), 707N, 7075#4', '', '', '0.00', 'RI', '', 'K01', ''),
(32, 'CUSHION 14', 'Gasket ', '', '', '27478.00', 'Btg', '', 'K01', ''),
(33, 'DOUBLE TAPE 6', '3M 244 MASKING TAPE,313 CLEAR,559 INDICATOR TAPE', '', '', '0.00', 'Rl', '', 'K01', ''),
(34, 'CUSHION 15', 'EPDM SHOFT, T, PRIMER 94 (EPDM GLUE)', '', '', '11.00', 'Kg', '', 'K01', ''),
(35, 'DOUBLE TAPE 7', 'Bow Tape 708 GLM,110,DS3C Sanko,Emi Absorber 0.5T', '', '', '0.00', 'RI', '', 'K01', ''),
(36, 'CUSHION 16', 'RUBBER SILICON 3T WHITE, NANOCELL  ESR 1T', '', '', '5.00', 'RI', '', 'K01', ''),
(37, 'DOUBLE TAPE 8', 'EMI SHEET SRA28 0.1T', '', '', '958.00', 'Sh', '', 'K01', ''),
(38, 'CUSHION 17', 'FELT SM266', '', '', '2.00', 'RI', '', 'K01', ''),
(39, 'MBU62446401', 'New CLAMP TIE', '', '', '2034.00', 'Pcs', '', 'K01', ''),
(40, 'MGJ63088001', 'PLATE LG', '', '', '2050.00', 'Pcs', '', 'K01', ''),
(41, '5728573A01', 'SPIN SHEET DECO TOP', '', '', '14300.00', 'Pcs', '', 'K01', ''),
(42, '003x12x13', 'PLASTIK FIBER', '', '', '881.00', 'Pcs', '', 'K01', ''),
(43, 'MHK37290703', 'SHEET CLEAR', '', '', '6000.00', 'Pcs', '', 'K01', ''),
(44, '003x4x8', 'PE PLAIN', '', '', '0.00', 'Pcs', '', 'K01', ''),
(45, 'MAF62327804', 'PE PLAIN 0,03 X 11 X 15', '', '', '5100.00', 'Pcs', '', 'K01', ''),
(46, 'MAF61848003', 'LBP 0,5 X 200 X 180', '', '', '0.00', 'Pcs', '', 'K01', ''),
(47, 'MGJ393733', 'ALLUMINIUM PLATE', '', '', '4000.00', 'Pcs', '', 'K01', ''),
(48, 'MDX62674301', 'GRILL SHEET SPEAKER ND1520', '', '', '4929.00', 'Pcs', '', 'K01', ''),
(49, 'MCQ66973501', 'DAMPER FOOT', '', '', '5655.00', 'Pcs', '', 'K01', ''),
(50, 'MCQ66997402', 'RUBBER SUPPORT ( WHITE)', '', '', '2000.00', 'Pcs', '', 'K01', ''),
(51, 'RGM0116-K1', 'SPEAKER NET', '', '', '110.00', 'Pcs', '', 'K01', ''),
(52, 'RGM0116-T1', 'SPEAKER NET', '', '', '0.00', 'Pcs', '', 'K01', ''),
(53, 'RGMX 024/025 K1', 'SPEAKER NET', '', '', '240.00', 'Pcs', '', 'K01', ''),
(54, 'MCQ69002201', 'DAMPER IPAD WHITE', '', '', '2400.00', 'Pcs', '', 'K01', ''),
(55, 'MCQ69002202', 'DAMPER IPAD BLACK', '', '', '5429.00', 'Pcs', '', 'K01', ''),
(56, 'MCQ67065701', 'DAMPER STAND BLACK', '', '', '1840.00', 'Pcs', '', 'K01', ''),
(57, 'MCQ66961501', 'DAMPER BUTTOM', '', '', '4700.00', 'Pcs', '', 'K01', ''),
(58, 'RJC-91007-1', 'SPRING BATTERY', '', '', '0.00', 'Pcs', '', 'K01', ''),
(59, 'RMB-0484-1', 'CASE OPEN SPRING', '', '', '1500.00', 'Pcs', '', 'K01', ''),
(60, 'RME-0215', 'SPRING ANTENNA', '', '', '4335.00', 'Pcs', '', 'K01', ''),
(61, '1522R-0097K', 'SCREW', '', '', '23000.00', 'Pcs', '', 'K01', ''),
(62, 'PH SEMS M/S', 'SCREW 3 X 8', '', '', '0.00', 'Pcs', '', 'K01', ''),
(63, 'MCQ67216501', 'RUBBER ACCESSORIS NEXUS', '', '', '0.00', 'Pcs', '', 'K01', ''),
(64, 'MKC413606-11', 'WINDOW DECO', '', '', '279.00', 'Pcs', '', 'K01', ''),
(65, 'MKC64299302', 'DECO FRONT DOOR BB5520A', '', '', '1580.00', 'Pcs', '', 'K01', ''),
(66, 'MKC62659301', 'WINDOW DECO', '', '', '360.00', 'Pcs', '', 'K01', ''),
(67, 'GL68-00361A', 'LABEL REMOVE', '', '', '16040.00', 'Pcs', '', 'K01', ''),
(68, 'MCZ62693603', 'DUCT INTAKE', '', '', '100.00', 'Pcs', '', 'K01', ''),
(69, 'MCZ62693604', 'DUCT OUTLETE', '', '', '250.00', 'Pcs', '', 'K01', ''),
(70, 'RJC -1007-1', 'SPRING BATTERY', '', '', '0.00', 'Pcs', '', 'K01', ''),
(71, 'MGJ63533901', 'PLATE BOTTON POWER', '', '', '0.00', 'Pcs', '', 'K01', ''),
(72, 'MGJ63939401', 'PLATE BOTTON POWER', '', '', '0.00', 'Pcs', '', 'K01', ''),
(73, 'MHK64070001', 'SHEET GRAPHINE', '', '', '0.00', 'Pcs', '', 'K01', ''),
(74, 'EAB62688901', 'SPEAKER ND1520', '', '', '140.00', 'Pcs', '', 'K01', ''),
(75, 'AK64-02554A', 'BADGE SAMSUNG', '', '', '13800.00', 'Pcs', '', 'K01', ''),
(76, 'MHK63866101', 'GRAPHENE SHEET', '', '', '0.00', 'Pcs', '', 'K01', ''),
(77, 'MHK63986801', 'GRAPHENE SHEET', '', '', '0.00', 'Pcs', '', 'K01', ''),
(78, 'MEY62594301', 'KNOB VOLUME', '', '', '940.00', 'Pcs', '', 'K01', ''),
(79, 'GL68-00361B', 'LABEL REMOVE', '', '', '40000.00', 'Pcs', '', 'K01', ''),
(80, '0.3 X 380 X 560', 'POLIPOAM', '', '', '234.00', 'Pcs', '', 'K01', ''),
(81, '002 X 11 X 15', 'PE PLAIN', '', '', '590.00', 'Pcs', '', 'K01', ''),
(82, 'MEZ61912004', 'LABEL BARCODE', '', '', '6200.00', 'Pcs', '', 'K01', ''),
(83, 'MEZ61912003', 'LABEL BARCODE', '', '', '500.00', 'Pcs', '', 'K01', ''),
(84, 'MEZ61912008', 'LABEL BARCODE', '', '', '650.00', 'Pcs', '', 'K01', ''),
(85, '10 HP AC', 'AIR COMPRESSOR 10HP', '', '', '325.00', 'EA', '', 'K03', ''),
(86, '10 HP C', 'COMPRESSOR 10HP', '', '', '1.00', 'EA', '', 'K03', ''),
(87, 'CB005-00015', 'Cover Back Assy', '', '', '400.00', 'Ea', '', 'K02', ''),
(88, 'CB005-00009', 'Lens L', '', '', '0.00', 'Ea', '', 'K02', ''),
(89, 'CB005-00010', 'Lens R', '', '', '0.00', 'Ea', '', 'K01', ''),
(90, '1200012520', 'DISPLAY SHEET DIGITAL WM', '', '', '-599.00', 'Ea', '', 'K02', ''),
(91, 'AH63-03135A', 'COVER WIRE FT 1/FT2', '', '', '5035.00', 'Ea', '', 'K02', ''),
(92, 'RMXN0021', 'SPACER BADGE', '', '', '2520.00', 'Ea', '', 'K02', ''),
(93, 'MHK62146302', 'P TAPE', '', '', '27.00', 'Ea', '', 'K02', ''),
(94, 'MHK62146302', 'Protection Tape', '', '', '27.00', 'Ea', '', 'K02', ''),
(95, 'MGJ47126401', 'PLATE FILTER', '', '', '25.00', 'Ea', '', 'K02', ''),
(96, 'MCQ66953102', 'DAMPER SET', '', '', '123.00', 'Ea', '', 'K02', ''),
(97, '4850RC0038W', 'Cushion', '', '', '50.00', 'Ea', '', 'K02', ''),
(98, 'MBG62263102', 'Button Function', '', '', '0.00', 'Ea', '', 'K02', ''),
(99, 'MHK59606701', 'Sheet Filter', '', '', '294.00', 'Ea', '', 'K02', ''),
(100, 'MCV58018401', 'Door Tray/Door DVD', '', '', '0.00', 'Ea', '', 'K02', ''),
(101, 'MFB58351801', 'Lens Volume', '', '', '36.00', 'Ea', '', 'K02', ''),
(102, 'MHK63547701', 'Sheet Touch Button', '', '', '700.00', 'Ea', '', 'K02', ''),
(103, 'MHK63868002', 'S PROTECTION TOP', '', '', '78.00', 'Ea', '', 'K02', ''),
(104, 'MCQ65164543', 'EVA FELT', '', '', '0.00', 'Ea', '', 'K02', ''),
(105, 'MHK63801101', 'SHEET LABEL', '', '', '4588.00', 'Ea', '', 'K02', ''),
(106, 'MCQ62588705', 'DAMPER VIBRATION', '', '', '1180.00', 'Ea', '', 'K02', ''),
(107, 'ENG2209B ( 400 mm X 20 mm )', 'Double Tape', '', '', '1500.00', 'Ea', '', 'K02', ''),
(108, 'MCQ67039201', 'dumper usb', '', '', '500.00', 'Ea', '', 'K02', ''),
(109, 'MDS62491004', 'Gasket Touch', '', '', '3900.00', 'Ea', '', 'K02', ''),
(110, 'MHK63868101', 'SHEET PROTECTION MIDDLE', '', '', '73.00', 'Ea', '', 'K02', ''),
(111, 'MCQ65164531', 'EVA 2t (2tx7x30)', '', '', '11625.00', 'Ea', '', 'K02', ''),
(112, 'MEG58109501', 'Holder Tension IPOD', '', '', '3900.00', 'Ea', '', 'K02', ''),
(113, 'MHK63789301', 'Protection Tape', '', '', '1444.00', 'Ea', '', 'K02', ''),
(114, 'MCV62473301', 'Door MD', '', '', '0.00', 'Ea', '', 'K02', ''),
(115, 'MCV40813601', 'Door Cassete', '', '', '0.00', 'Ea', '', 'K02', ''),
(116, 'AGL73473610/MCR63992702', 'Deco Volume (Blue)', '', '', '173.00', 'Ea', '', 'K02', ''),
(117, 'MHK62249001', 'Sheet Lighting', '', '', '1420.00', 'Ea', '', 'K02', ''),
(118, 'MBG62443601', 'Button Option', '', '', '120.00', 'Ea', '', 'K02', ''),
(119, 'AGL35611412/MCV40705101', 'DOOR TRAY', '', '', '84.00', 'Ea', '', 'K02', ''),
(120, 'MHK42254701', 'Sheet FL', '', '', '100.00', 'Ea', '', 'K02', ''),
(121, 'ENG19075003', 'Sheet Protection Window', '', '', '100.00', 'Ea', '', 'K02', ''),
(122, 'MCQ66978802', 'CUSHION', '', '', '1974.00', 'Ea', '', 'K02', ''),
(123, 'MHK62246501', 'Sheet FL ', '', '', '0.00', 'Ea', '', 'K02', ''),
(124, 'AGL73352907/MCR63992703', 'DECO VOLUME (Brown)', '', '', '441.00', 'Ea', '', 'K02', ''),
(125, 'MHK62629301', 'Protection Tape Top', '', '', '0.00', 'Ea', '', 'K02', ''),
(126, 'MHK63868001', 'S PROTECTION TOP', '', '', '0.00', 'Ea', '', 'K02', ''),
(127, 'MCQ66906001', 'Damper Front', '', '', '122.00', 'Ea', '', 'K02', ''),
(128, '4850R-0037R/T', 'Cushion Door', '', '', '1600.00', 'Ea', '', 'K02', ''),
(129, 'MHK63986001', 'SHEET PROTECTION ', '', '', '367.00', 'Ea', '', 'K02', ''),
(130, 'MHK37397805', 'Sheet EMI', '', '', '0.00', 'Ea', '', 'K02', ''),
(131, 'MHK63934401', 'SHEET LCD', '', '', '0.00', 'Ea', '', 'K02', ''),
(132, 'MKC63999801', 'Window Display', '', '', '0.00', 'Ea', '', 'K02', ''),
(133, 'MFB62533401', 'Lens Volume', '', '', '0.00', 'Ea', '', 'K02', ''),
(134, 'MBG64224701', 'Button Function', '', '', '0.00', 'Ea', '', 'K02', ''),
(135, 'MKC62239001', 'Window LED', '', '', '0.00', 'Ea', '', 'K02', ''),
(136, 'MHK63536201', 'Sheet Top Tape', '', '', '233.00', 'Ea', '', 'K02', ''),
(137, 'MBG64353801', 'Button Power', '', '', '761.00', 'Ea', '', 'K02', ''),
(138, 'MCQ65164548', 'Damper Eva ', '', '', '100.00', 'Ea', '', 'K02', ''),
(139, 'MHK63939201', 'Sheet protection cover', '', '', '1200.00', 'Ea', '', 'K02', ''),
(140, 'MHK63939001', 'Sheet protection front', '', '', '1400.00', 'Ea', '', 'K02', ''),
(141, 'MDS63984901', 'DAMPER EVA', '', '', '0.00', 'Ea', '', 'K02', ''),
(142, 'MDS63772402', 'Gasket Touch', '', '', '0.00', 'Ea', '', 'K02', ''),
(143, 'MHK63953401', 'SHEET TOUCH', '', '', '0.00', 'Ea', '', 'K02', ''),
(144, 'AGU74110701', 'TOUCH BUTTON SHEET ASSY', '', '', '0.00', 'Ea', '', 'K02', ''),
(145, 'MHK63934701', 'SHEET MD', '', '', '80.00', 'Ea', '', 'K02', ''),
(146, 'MDS63984601', 'DAMPER', '', '', '4000.00', 'Ea', '', 'K02', ''),
(147, 'MEG62443701', 'Button Power', '', '', '220.00', 'Ea', '', 'K02', ''),
(148, 'MDS63984401', 'DAMPER', '', '', '148.00', 'Ea', '', 'K02', ''),
(149, 'MHK63309502', 'Diffushion Sheet', '', '', '660.00', 'Ea', '', 'K02', ''),
(150, 'MHK62288401', 'Sheet Filter', '', '', '1020.00', 'Ea', '', 'K02', ''),
(151, 'MHK62005601', 'Sheet Filter', '', '', '500.00', 'Ea', '', 'K02', ''),
(152, 'MHK61911501', 'Protection', '', '', '0.00', 'Ea', '', 'K02', ''),
(153, 'MCV40786701/AGL35075816', 'DOOR TRAY', '', '', '423.00', 'Ea', '', 'K02', ''),
(154, 'ENG19075002', 'Sheet Protection Door DVD', '', '', '0.00', 'Ea', '', 'K02', ''),
(155, 'MCQ67234101', 'DAMPER FOOT', '', '', '3800.00', 'Ea', '', 'K02', ''),
(156, 'MCK40787005/AGL35075816', 'Cover Door', '', '', '1344.00', 'Ea', '', 'K02', ''),
(157, 'MCQ32325007', 'Rubber Foot', '', '', '672.00', 'Ea', '', 'K02', ''),
(158, 'MHK63868201', 'SHEET PROTECTION BOTTOM', '', '', '0.00', 'Ea', '', 'K02', ''),
(159, '5040R-0376D', 'Cushion', '', '', '0.00', 'Ea', '', 'K02', ''),
(160, 'MCR61971101', 'Holder Eye Tape ', '', '', '0.00', 'Ea', '', 'K02', ''),
(161, 'MEV61857002', 'Insulation', '', '', '6020.00', 'Ea', '', 'K02', ''),
(162, 'MCR61971001', 'Double Tape Eye', '', '', '0.00', 'Ea', '', 'K02', ''),
(163, 'MGJ63202101', 'PLATE FILTER', '', '', '900.00', 'Ea', '', 'K02', ''),
(164, 'MGJ63221901', 'Sheet Top', '', '', '317.00', 'Ea', '', 'K02', ''),
(165, 'MGJ63221801', 'Window Filter', '', '', '2300.00', 'Ea', '', 'K02', ''),
(166, 'MHK63846801', 'PROTECTION TAPE', '', '', '2290.00', 'Ea', '', 'K02', ''),
(167, 'AGL72914518/MBG61847002', 'Button EQ', '', '', '0.00', 'Ea', '', 'K02', ''),
(168, 'MHK61843101', 'Sheet FL', '', '', '5570.00', 'Ea', '', 'K02', ''),
(169, 'MCQ65164519', 'Eva Felt', '', '', '0.00', 'Ea', '', 'K02', ''),
(170, 'MCV40786701/AGL35075819', 'DOOR TRAY', '', '', '476.00', 'Ea', '', 'K02', ''),
(171, 'MCK40787005/AGL35075819', 'Cover Door Spray Black', '', '', '2706.00', 'Ea', '', 'K02', ''),
(172, 'MGJ41360501', 'Plate Filter', '', '', '1118.00', 'Ea', '', 'K02', ''),
(173, 'AGL73473604/MCR63992701', 'Deco Volume (Silver)', '', '', '6543.00', 'Ea', '', 'K02', ''),
(174, 'MCQ32325022', 'RUBBER FOOT', '', '', '2700.00', 'Ea', '', 'K02', ''),
(175, 'MHK62945201', 'LSC', '', '', '0.00', 'Ea', '', 'K02', ''),
(176, 'MHK62006802', 'Sheet FL', '', '', '2805.00', 'Ea', '', 'K02', ''),
(177, '4850R-0037W', 'Cushion Door', '', '', '43810.00', 'Ea', '', 'K02', ''),
(178, 'MHK63792201', 'Sheet Protection Panel', '', '', '3104.00', 'Ea', '', 'K02', ''),
(179, '3300R-V133B', 'Plate Badge LG ', '', '', '420.00', 'Ea', '', 'K02', ''),
(180, 'MHK63587901', 'Sheet FL', '', '', '1590.00', 'Ea', '', 'K02', ''),
(181, 'MDP30320007', 'Rubber Foot', '', '', '9776.00', 'Ea', '', 'K02', ''),
(182, '4850R0037S/MCQ65968302', 'Cushion Door', '', '', '4106.00', 'Ea', '', 'K02', ''),
(183, 'MKC62169502/AGL73213705/06', 'WINDOW DISPLAY', '', '', '10.00', 'Ea', '', 'K02', ''),
(184, 'AGL35611437/55/57/MCK40705001', 'COVER TOP', '', '', '420.00', 'Ea', '', 'K02', ''),
(185, 'MHK41099201/2', 'Sheet Function', '', '', '20.00', 'Ea', '', 'K02', ''),
(186, 'MHK64005301', 'SHEET REFLECTOR INNER', '', '', '7100.00', 'Ea', '', 'K02', ''),
(187, 'MCQ62705011', 'DAMPER FRONT FL', '', '', '8190.00', 'Ea', '', 'K02', ''),
(188, 'MCQ62705012', 'DAMPER MD TOP', '', '', '8000.00', 'Ea', '', 'K02', ''),
(189, 'MHK64005302', 'SHEET REFLECTOR INNER', '', '', '640.00', 'Ea', '', 'K02', ''),
(190, 'MHK64005303', 'SHEET REFLECTOR INNER', '', '', '11300.00', 'Ea', '', 'K02', ''),
(191, 'MCQ67234103', 'DAMPER FOOT', '', '', '3260.00', 'Ea', '', 'K02', ''),
(192, 'MHK63307908', 'SHEET LABEL', '', '', '0.00', 'Ea', '', 'K02', ''),
(193, 'MFB62655501', 'Lens Owe Eye', '', '', '0.00', 'Ea', '', 'K02', ''),
(194, 'MHK64031601', 'PROTECTION SHEET', '', '', '0.00', 'Ea', '', 'K02', ''),
(195, 'MHK63935403', 'SHEET', '', '', '1000.00', 'Ea', '', 'K02', ''),
(196, 'MGJ63533901', 'PLATE BTN POWER', '', '', '27549.00', 'Ea', '', 'K02', ''),
(197, 'AH81-07448A', 'SPONGE 3TX30X500MM GREY', '', '', '1807.00', 'Ea', '', 'K02', ''),
(198, 'MKC62660801', 'Double Tape', '', '', '18.00', 'Ea', '', 'K02', ''),
(199, 'MHK63525401', 'Protect', '', '', '35.00', 'Ea', '', 'K02', ''),
(200, 'MKC61997401', 'Clock Deco Tape', '', '', '320.00', 'Ea', '', 'K02', ''),
(201, 'MCR62061401', 'Deco bottom Power', '', '', '0.00', 'Ea', '', 'K02', ''),
(202, 'MCR62061301', 'Window Deco Front R', '', '', '60.00', 'Ea', '', 'K02', ''),
(203, 'MKC47126501', 'DOUBLE TAPE', '', '', '1534.00', 'Ea', '', 'K02', ''),
(204, 'MCR62061601/501', 'Deco Bottom Function', '', '', '0.00', 'Ea', '', 'K02', ''),
(205, '286X214', 'DOUBLE TAPE', '', '', '22.00', 'Ea', '', 'K02', ''),
(206, 'MKC40908501', 'Double Tape', '', '', '94.00', 'Ea', '', 'K02', ''),
(207, 'MKC40705801', 'Double Tape', '', '', '730.00', 'Ea', '', 'K02', ''),
(208, 'MKC64500901', 'DOUBLE TAPE', '', '', '0.00', 'Ea', '', 'K02', ''),
(209, 'MKC63739401', 'Door Deco', '', '', '413.00', 'Ea', '', 'K02', ''),
(210, 'MKC64219101', 'Double Tape', '', '', '111.00', 'Ea', '', 'K02', ''),
(211, 'MKC6421501', 'WINDOW FRONT DECO', '', '', '0.00', 'Ea', '', 'K02', ''),
(212, 'MKC64299201/101', 'Window Deco Front R/L', '', '', '291.00', 'Ea', '', 'K02', ''),
(213, 'RAB32014701', 'Tape OPP Fabric', '', '', '700.00', 'Ea', '', 'K02', ''),
(214, 'VF1A00703900', 'PIECE PIECE CTRL PRO', '', '', '2700.00', 'Ea', '', 'K02', ''),
(215, 'VF1A00704600', 'PIECE PIECE PANEL OSAE', '', '', '0.00', 'Ea', '', 'K02', ''),
(216, 'VF1A00703800', 'PIECE SOURCE GUIDE', '', '', '0.00', 'Ea', '', 'K02', ''),
(217, 'VF1A006885A0', 'PIECE SOURCE GUIDE', '', '', '0.00', 'Ea', '', 'K02', ''),
(218, 'VF1A00688400', 'PIECE PANEL OSAE', '', '', '0.00', 'Ea', '', 'K02', ''),
(219, 'S83C500A89/69-5000-26', 'PC SHEET', '', '', '1000.00', 'Ea', '', 'K02', ''),
(220, 'AKB68183601', 'Top Case', '', '', '300.00', 'Ea', '', 'K02', ''),
(221, 'AKB68183601', 'COVER DOOR', '', '', '300.00', 'Ea', '', 'K02', ''),
(222, 'AKB72915215', 'Deco Plate', '', '', '200.00', 'Ea', '', 'K02', ''),
(223, 'AKB73655707', 'Deco Plate', '', '', '712.00', 'Ea', '', 'K02', ''),
(224, 'AKB73656701', 'DECO PLATE', '', '', '1690.00', 'Ea', '', 'K02', ''),
(225, 'AKB68183601', 'DECO PLATE', '', '', '300.00', 'Ea', '', 'K02', ''),
(226, 'AKB36160909', 'DECO PLATE', '', '', '200.00', 'Ea', '', 'K02', ''),
(227, 'AKB32722904', 'Deco Plate', '', '', '0.00', 'Ea', '', 'K02', ''),
(228, 'AKB35914403', 'Deco Plate', '', '', '1440.00', 'Ea', '', 'K02', ''),
(229, 'AKB36160901/4', 'COVER DOOR', '', '', '0.00', 'Ea', '', 'K02', ''),
(230, 'AKB36160901/4', 'Top Case', '', '', '0.00', 'Ea', '', 'K02', ''),
(231, 'AKB36160901/4', 'BOTTOM CASE', '', '', '0.00', 'Ea', '', 'K02', ''),
(232, 'AKB36160901/4', 'BATTERY COVER', '', '', '0.00', 'Ea', '', 'K02', ''),
(233, 'AKB73155301', 'Deco Plate', '', '', '611.00', 'Ea', '', 'K02', ''),
(234, 'AKB73275611', 'Deco Plate', '', '', '500.00', 'Ea', '', 'K02', ''),
(235, 'AKB72915251', 'Deco Plate', '', '', '0.00', 'Ea', '', 'K02', ''),
(236, 'AKB54089001', 'Deco Plate', '', '', '0.00', 'Ea', '', 'K02', ''),
(237, 'AKB36160903', 'Deco Plate', '', '', '1000.00', 'Ea', '', 'K02', ''),
(238, 'AKB73615313', 'Deco Plate', '', '', '0.00', 'Ea', '', 'K02', ''),
(239, 'AKB36160904', 'Deco Plate', '', '', '70.00', 'Ea', '', 'K02', ''),
(240, 'AKB36160905', 'DECO PLATE', '', '', '500.00', 'Ea', '', 'K02', ''),
(241, 'AKB36160905', 'Top Case', '', '', '500.00', 'Ea', '', 'K02', ''),
(242, 'AKB73155305', 'DECO PLATE', '', '', '0.00', 'Ea', '', 'K02', ''),
(243, 'AKB73615314', 'DECO PLATE', '', '', '500.00', 'Ea', '', 'K02', ''),
(244, 'AKB72915246', 'Deco Plate', '', '', '425.00', 'Ea', '', 'K02', ''),
(245, 'AKB73615305', 'Deco Plate', '', '', '100.00', 'Ea', '', 'K02', ''),
(246, 'AKB73615362', 'DECO PLATE', '', '', '2100.00', 'Ea', '', 'K02', ''),
(247, 'AKB73615312', 'Deco Plate', '', '', '0.00', 'Ea', '', 'K02', ''),
(248, 'AKB73615302', 'Deco Plate', '', '', '100.00', 'Ea', '', 'K02', ''),
(249, 'AKB73615310', 'Deco Plate', '', '', '860.00', 'Ea', '', 'K02', ''),
(250, 'AKB73615309', 'DECO PLATE', '', '', '3300.00', 'Ea', '', 'K02', ''),
(251, 'AKB73615307', 'DECO PLATE', '', '', '4790.00', 'Ea', '', 'K02', ''),
(252, 'AKB73615303', 'Deco Plate', '', '', '800.00', 'Ea', '', 'K02', ''),
(253, 'AKB73656403', 'DECO PLATE', '', '', '60.00', 'Ea', '', 'K02', ''),
(254, 'AKB73756502', 'DECO PLATE', '', '', '3260.00', 'Ea', '', 'K02', ''),
(255, 'AKB73756503', 'DECO PLATE', '', '', '210.00', 'Ea', '', 'K02', ''),
(256, 'AKB73755415', 'Deco Plate', '', '', '93.00', 'Ea', '', 'K02', ''),
(257, 'AKB73756519', 'DECO PLATE', '', '', '910.00', 'Ea', '', 'K02', ''),
(258, 'EC-131949-BCA00B/DN31B949/SN81F734', 'PLATE FOR HOLE SPK OUT REAR L1L2 W/PRINT WHT+DBLTP', '', '', '0.00', 'Ea', '', 'K02', ''),
(259, 'EK-134147-DQB00/DN34D147 EVA=1MM', 'GASKET FOR TWEETER GG8', '', '', '0.00', 'Ea', '', 'K02', ''),
(260, 'EC-137975-BCA00/DN37B975', 'COVER FOR INLET W1A', '', '', '0.00', 'Ea', '', 'K02', ''),
(261, 'EC-131950-BCA00A/DN31B950/SN81F704', 'PLATE FOR SPK OUT REAR L 1L2 W/PRINT+DBLTP', '', '', '0.00', 'Ea', '', 'K02', ''),
(262, 'EK-132001-0QA/WF-320012-200', 'MULTIFLOW SPONGE(M02)  ', '', '', '2110.00', 'Ea', '', 'K02', ''),
(263, 'EK-131121-BKA00/DN31B121', 'Adhesive For PCB HBCO N1 7', '', '', '0.00', 'Ea', '', 'K02', ''),
(264, 'GL-137797-BCA00D/DN37B797/SN87C765', 'PLATE FOR WASH DOOR W1A W/PRNT BLUE GREEN', '', '', '50.00', 'Ea', '', 'K02', ''),
(265, 'GL-131590-BAA00/DN31B590', 'ACCESS FOR SPK TOWER 32 SHO ', '', '', '64.00', 'Ea', '', 'K02', ''),
(266, 'GL-131176-CCA00B/DN 31C176 SN 81G142', 'PLATE F KNOB LED 24L6 W/ PRINT WHITE', '', '', '0.00', 'Ea', '', 'K02', ''),
(267, 'GL-164816-ACA10A/DN 64A816M01 PC SN 84E746M01', 'Decoration Plate KIT PAS 07  (M01) W/Print', '', '', '0.00', 'Ea', '', 'K02', ''),
(268, 'EK-134966-CCA00/DN34C966', 'Diffuser Sheet GL1', '', '', '0.00', 'Ea', '', 'K02', ''),
(269, 'EC-131921-BCA00/DN31B921', 'BARRIER FOR HBDN LED 20 L3', '', '', '0.00', 'Ea', '', 'K02', ''),
(270, 'EC-137046-BCA00A/DN37B046', 'COVER FOR DRIP TRAY RD3 W', '', '', '12.00', 'Ea', '', 'K02', ''),
(271, 'EC-137171-BCA00/DN37B171R01', 'Sheet Screw Cup W08-7568  ', '', '', '36.00', 'Ea', '', 'K02', ''),
(272, 'EK-131911-BQA00/DN31B911', 'ANTIVIBRATION 10X290/WHITE T=1MM', '', '', '0.00', 'Ea', '', 'K02', ''),
(273, 'EK-131912-BQA00/DN31B912', 'ANTIVIBRATION 10X545/WHITE T =1MM', '', '', '0.00', 'Ea', '', 'K02', ''),
(274, 'EK-131910-BQA00/DN31B910', 'ANTIVIBRATION 8X465/WHITE T=1MM', '', '', '0.00', 'Ea', '', 'K02', ''),
(275, 'EK-131909-BQA00/DN31B909', 'ANTIVIBRATION 8X255/WHITE T=1MM', '', '', '0.00', 'Ea', '', 'K02', ''),
(276, 'EK-134301-DQA00/DN34D301EVAT=3MM', 'ANTIVIBRATOR30X10X3MM', '', '', '0.00', 'Ea', '', 'K02', ''),
(277, 'EC-131949-BCA00A/DN31B949/SN81F703', 'PLATE FOR HOLE SPK OUT REAR L1L2 W/PRINT+DBLTP', '', '', '0.00', 'Ea', '', 'K02', ''),
(278, 'EK-134965-CCA00A/DN34C965R1-84E553', 'Diffuser GPO', '', '', '0.00', 'Ea', '', 'K02', ''),
(279, 'EC-134357-DCA00/DN34D357', 'COVER FOR SAFETY EBD', '', '', '0.00', 'Ea', '', 'K02', ''),
(280, 'GL-131125-CCA00B/DN31C125 SN81G015', 'PLATE 1 FOR RCA LED 32L5 W/PRINT WHITE', '', '', '0.00', 'Ea', '', 'K02', ''),
(281, 'GL-134814-CCA10C/DN34C814M01/SN84F103M01', 'PLATE FOR ACCESSORIES 1 GPO M01 W/PUNCH 84F103M1', '', '', '0.00', 'Ea', '', 'K02', ''),
(282, 'EC-137582-ACA00A/DN37A582', 'Drip Tray Cover W/Stamp W/Paint', '', '', '0.00', 'Ea', '', 'K02', ''),
(283, 'GL-184185-DKA00/SN84D185', 'LOGO NAME PLATE GB3', '', '', '0.00', 'Ea', '', 'K02', ''),
(284, 'EK-131851-BQA00/DN31B851', 'SUPPORT FOR IRM L3', '', '', '0.00', 'Ea', '', 'K02', ''),
(285, 'GL-134815-CCA10C/DN34C815M01/SN84F102M01', 'PLATE FOR ACCESSORIES 2 GPO M01 W/PUNCH 84F102M1', '', '', '0.00', 'Ea', '', 'K02', ''),
(286, 'NN-137912-BCA00/DN37B912', 'SPACER FOR SPINTUB W16', '', '', '0.00', 'Ea', '', 'K02', ''),
(287, 'GL-134891-CCA10A/DN34C891M01 PC SN 84E747M01', 'Decoration Plate For Pasive PAS 07 (M01) W/Print ', '', '', '0.00', 'Ea', '', 'K02', ''),
(288, 'GN-137328-AFA00/DN37A328', 'Stiker For Isolator', '', '', '3200.00', 'Ea', '', 'K02', ''),
(289, 'EC-131855-BCA00/DN31B855', 'BARRIER FOR REAR CAB 21N11', '', '', '0.00', 'Ea', '', 'K02', ''),
(290, 'GL-164019-BCA00C/DN64B019R01 SN84G140', 'DECORATION PLATE SPK RH KIT GGB W/PRINT', '', '', '0.00', 'Ea', '', 'K02', ''),
(291, 'GL-131125-CCA00A/DN31C125SN81G013', 'PLATE 1 FOR RCA LED 32L5 W/PRINT', '', '', '0.00', 'Ea', '', 'K02', ''),
(292, 'GL-137797-BCA00F/DN37B797/SN87C764', 'PLATE FOR WASH DOOR W1A W/PRNT HOT PINK', '', '', '1235.00', 'Ea', '', 'K02', ''),
(293, 'GL-131846-BCA00B/DN31B846/SN81F680', 'PLATE 2 FOR RCA LED 20L3 W/PRINT WHITE', '', '', '0.00', 'Ea', '', 'K02', ''),
(294, 'GL-131845-BCA00B/DN31B845/SN81F679', 'PLATE 1 FOR RCA LED 20L3 W/PRINT WHITE', '', '', '0.00', 'Ea', '', 'K02', ''),
(295, 'GL-131900-BCA00A/DN31B900R02 SN81F548R01', 'DECORATION SHEET LED 20 L3 W/CUT ( STAMP BLACK )', '', '', '1.00', 'Ea', '', 'K02', ''),
(296, 'TC-080300-0CC/DN34C479R01 PC 0.5 SN84E050M1', 'SHEET FOR COVER-1 DISPLAY GW0 W/STMP SLV BRUSHED(M01)', '', '', '0.00', 'Ea', '', 'K02', ''),
(297, 'GL-131057-BFB00/DN31B057R01', 'Polytron Name Plate 21 N 17  ', '', '', '0.00', 'Ea', '', 'K02', ''),
(298, 'EC-134410-DCA00/DN34D410R01', 'SHIELDING FOR PCB DISPLAY GG8', '', '', '0.00', 'Ea', '', 'K02', ''),
(299, 'EC-131950-BCA00C/DN31B950/SN81F757', 'PLATE FOR SPK OUT REAR L 1L2 W/PRINT WHITE+DBLTP', '', '', '0.00', 'Ea', '', 'K02', ''),
(300, 'GL-137389-BCA00F/DN37B389/SN87C715', 'DECORATION SHEET FOR LENS 6565 BROWN MOCCA', '', '', '0.00', 'Ea', '', 'K02', ''),
(301, 'GL-137389-BCA00G/DN37B389/SN87C713', 'DECORATION SHEET FOR LENS 6565 HOT PINK MC', '', '', '0.00', 'Ea', '', 'K02', ''),
(302, 'GL-134267-DCA00B/DN34D267R01 SN84G141', 'DECORATION PLATE LH GGB W/PRINT', '', '', '0.00', 'Ea', '', 'K02', ''),
(303, 'GL-131176-CCA00A/DN 31C176 SN 81G106', 'PLATE F KNOB LED 24L6 W/ PRINT', '', '', '0.00', 'Ea', '', 'K02', ''),
(304, 'EC-131680-BCA00/DN31B680', 'Barrier UK 93X96', '', '', '0.00', 'Ea', '', 'K02', ''),
(305, 'EK-131888-BCA00/DN31B888', 'SUPPORT FOR REAR LCD TV', '', '', '0.00', 'Ea', '', 'K02', ''),
(306, 'GL-131846-BCA00A/DN31B846R01 SN81F531R01', 'PLATE 2 FOR RCA LED 20L3 W/PRINT GREY XL', '', '', '0.00', 'Ea', '', 'K02', ''),
(307, 'GL-131845-BCA00A/DN31B845R01 SN81F530R01', 'PLATE 1 FOR RCA LED 20L3 W/PRINT GREY XL', '', '', '0.00', 'Ea', '', 'K02', ''),
(308, 'EC-131673-BCA00/DN31B673', 'Barrier UK 99X67', '', '', '0.00', 'Ea', '', 'K02', ''),
(309, 'GL-134891-CCA10B/DN34C891M01 PC SN 84E767M01', 'Decoration Plate For Pasive PAS 07 (M01) W/Print ', '', '', '0.00', 'Ea', '', 'K02', ''),
(310, 'GL-131556-BCA10/DN31B556M01', 'Barrier For Cab 21N10 SLIM', '', '', '0.00', 'Ea', '', 'K02', ''),
(311, 'EK-131847-BEA00/DN31B847SHEETT=1.5MM', 'CLAMP FOR BRACKET WALLMOUNT', '', '', '0.00', 'Ea', '', 'K02', ''),
(312, 'GL-137296-BCA00/DN37B296R01', 'Foaming Plug R61', '', '', '0.00', 'Ea', '', 'K02', ''),
(313, 'GL-131901-BCA00A/DN31B901RO2 SN81F545R01', 'DECORATION SHEET LED 24 L3 W/CUT ( STAMP BLACK )', '', '', '0.00', 'Ea', '', 'K02', ''),
(314, '12701-0115', '3TX18X100MM ', '', '', '199.00', 'Ea', '', 'K02', ''),
(315, '12701-0142', '3TX18X270MM', '', '', '200.00', 'Ea', '', 'K02', ''),
(316, '12701-0138', '3TX18X80MM', '', '', '210.00', 'Ea', '', 'K02', ''),
(317, '12701-0139', '3TX18X140MM', '', '', '360.00', 'Ea', '', 'K02', ''),
(318, '12701-0140', '3TX18X130MM', '', '', '408.00', 'Ea', '', 'K02', ''),
(319, '12701-0125', '3TX18X120MM', '', '', '1200.00', 'Ea', '', 'K02', ''),
(320, '12701-0117', '3TX18X90MM', '', '', '2584.00', 'Ea', '', 'K02', ''),
(321, '12701-0130', '3TX13X60MM', '', '', '19090.00', 'Ea', '', 'K02', ''),
(322, '4766RC0209A', 'Felt', '', '', '300.00', 'Ea', '', 'K02', ''),
(323, '10 X 4.8 X 0.2T', 'WASHER', '', '', '0.00', 'Ea', '', 'K02', ''),
(324, 'MHK63307002', 'Felt', '', '', '0.00', 'Ea', '', 'K02', ''),
(325, 'MHK63485101', 'Sheet MD', '', '', '210.00', 'Ea', '', 'K02', ''),
(326, 'FAF30971901', 'Washer', '', '', '1540.00', 'Ea', '', 'K02', ''),
(327, 'MHK63728301', 'CHUSION FELT', '', '', '0.00', 'Ea', '', 'K02', ''),
(328, 'MHK63748901', 'SHEET ', '', '', '12303.00', 'Ea', '', 'K02', ''),
(329, 'FAF31272201', 'WASHER', '', '', '0.00', 'Ea', '', 'K02', ''),
(330, 'GL61-00036A', 'RUBBER FOOT', '', '', '0.00', 'Ea', '', 'K02', ''),
(331, 'ED69-00044A', 'BOTTOM PROTECT TAPE', '', '', '270.00', 'Ea', '', 'K02', ''),
(332, 'ED75-00089B', 'MEC-Tape Assy B Set-430', '', '', '617.00', 'Ea', '', 'K02', ''),
(333, 'ED72-00223A', 'Plastic-Window Set', '', '', '0.00', 'Ea', '', 'K02', ''),
(334, 'ED72-00235A', 'SPONGE', '', '', '0.00', 'Ea', '', 'K02', ''),
(335, 'ED73-00023A', 'SCREW CAP SHEET', '', '', '1395.00', 'Ea', '', 'K02', ''),
(336, 'ED74-01026A', 'Tape Top Cover', '', '', '0.00', 'Ea', '', 'K02', ''),
(337, 'ED74-01017A', 'Double Side Tape', '', '', '0.00', 'Ea', '', 'K02', ''),
(338, 'ED74-01016A', 'Double Side Tape', '', '', '0.00', 'Ea', '', 'K02', ''),
(339, 'ED69-00134A', 'WARNING TAPE', '', '', '74.00', 'Ea', '', 'K02', ''),
(340, 'ED74-01024A', 'Tape Bracket Battery', '', '', '5.00', 'Ea', '', 'K02', ''),
(341, 'ED69-00106A', 'Bag Accesory Top Cover Vinyl', '', '', '685.00', 'Ea', '', 'K02', ''),
(342, 'ED69-00090A', 'IR Protect Vinyl', '', '', '0.00', 'Ea', '', 'K02', ''),
(343, 'ED74-01021A', 'Double Side Tape', '', '', '5895.00', 'Ea', '', 'K02', ''),
(344, 'ED74-01022A', 'Tape Baterry', '', '', '0.00', 'Ea', '', 'K02', ''),
(345, 'GL63-00221A', 'COVER LIGHT SHEET', '', '', '1000.00', 'Ea', '', 'K02', ''),
(346, 'AH63-02402A', 'Sheet Front R   ', '', '', '200.00', 'Ea', '', 'K02', ''),
(347, 'GL69-00335A', 'Wrap Vinyl Window', '', '', '350.00', 'Ea', '', 'K02', ''),
(348, 'GL69-00285A', 'Protective Vinyl Window', '', '', '0.00', 'Ea', '', 'K02', ''),
(349, 'GL69-00322A', 'Vinyl Front Window', '', '', '573.00', 'Ea', '', 'K02', ''),
(350, 'AK63-00136X', 'Sheet Conductance', '', '', '0.00', 'Ea', '', 'K02', ''),
(351, 'GL69-00311A', 'Vinyl Front Door', '', '', '0.00', 'Ea', '', 'K02', ''),
(352, 'GL69-00312A', 'Vinyl Front Window', '', '', '0.00', 'Ea', '', 'K02', ''),
(353, 'GL72-00526A', 'LED Sheet', '', '', '0.00', 'Ea', '', 'K02', ''),
(354, 'GL69-00226A', 'Protective Vinyl Door', '', '', '0.00', 'Ea', '', 'K02', ''),
(355, 'GL69-00227A', 'Vinyl Front Door', '', '', '0.00', 'Ea', '', 'K02', ''),
(356, 'GL63-00005A', 'Sheet EMI Gasket', '', '', '0.00', 'Ea', '', 'K02', ''),
(357, 'ED72-00234A', 'Chuson LCD', '', '', '0.00', 'Ea', '', 'K02', ''),
(358, 'AH63-02409A', 'Felt Touch Key', '', '', '500.00', 'Ea', '', 'K02', ''),
(359, 'AH63-01917E', 'Sheet Function', '', '', '1000.00', 'Ea', '', 'K02', ''),
(360, 'AH63-02182Y', 'Sheet Front', '', '', '80.00', 'Ea', '', 'K02', ''),
(361, 'AH63-02408B', 'Sheet Safety', '', '', '250.00', 'Ea', '', 'K02', ''),
(362, 'BN64-02072B', 'Inlay Terminal', '', '', '0.00', 'Ea', '', 'K02', ''),
(363, 'GL69-00157A', 'Protective Vinyl', '', '', '0.00', 'Ea', '', 'K02', ''),
(364, 'MHK62906501', 'Sheet Side Jack', '', '', '500.00', 'Ea', '', 'K02', ''),
(365, 'AK63-00838K', 'SHEET PROTECT FRONT', '', '', '2520.00', 'Ea', '', 'K02', ''),
(366, 'MCR64760203', 'DÉCOR AV', '', '', '0.00', 'Ea', '', 'K02', ''),
(367, 'A10430001', 'VINYL FRONT', '', '', '0.00', 'Ea', '', 'K02', ''),
(368, 'AK63-00838G', 'FRONT VINYL', '', '', '0.00', 'Ea', '', 'K02', ''),
(369, 'A10430003', 'VINYL DOOR', '', '', '0.00', 'Ea', '', 'K02', ''),
(370, 'A10430002', 'VINYL TOP ', '', '', '0.00', 'Ea', '', 'K02', ''),
(371, 'AH63-03244A', 'SHEET DOOR', '', '', '0.00', 'Ea', '', 'K02', ''),
(372, 'AH63-03245A', 'SHEET FRONT ', '', '', '10.00', 'Ea', '', 'K02', ''),
(373, 'AH63-03243A', 'SHEET TOP', '', '', '10.00', 'Ea', '', 'K02', ''),
(374, 'AH63-02408A', 'Felt Touch Key', '', '', '0.00', 'Ea', '', 'K02', ''),
(375, 'MDS30602113', 'GASKET', '', '', '0.00', 'Ea', '', 'K02', ''),
(376, 'MDS63984402', 'FELT BUJIKPO', '', '', '3870.00', 'Ea', '', 'K02', ''),
(377, 'BN64-02023D', 'Inlay Terminal', '', '', '2075.00', 'Ea', '', 'K02', ''),
(378, 'GL72-00341A', 'Front Window', '', '', '0.00', 'Ea', '', 'K02', ''),
(379, 'GL69-00224A', 'Door Vinyl', '', '', '0.00', 'Ea', '', 'K02', ''),
(380, 'MHK63988501', 'FELT', '', '', '0.00', 'Ea', '', 'K02', ''),
(381, 'AH63-02171A', 'Sheet Function', '', '', '1163.00', 'Ea', '', 'K02', ''),
(382, 'MDS64138301', 'FELT BUJIKPO', '', '', '4812.00', 'Ea', '', 'K02', ''),
(383, 'GL69-00223A', 'Window Vinyl', '', '', '0.00', 'Ea', '', 'K02', ''),
(384, 'AH63-02831A', 'SHEET FILTER', '', '', '0.00', 'Ea', '', 'K02', ''),
(385, 'GL72-00339A', 'Front Window', '', '', '2866.00', 'Ea', '', 'K02', ''),
(386, 'MDP62646801', 'RUBBER FOOT', '', '', '18760.00', 'Ea', '', 'K02', ''),
(387, 'AK63-00918A', 'S/Protections', '', '', '6160.00', 'Ea', '', 'K02', ''),
(388, 'MCQ67213602', 'DAMPER', '', '', '400.00', 'Ea', '', 'K02', ''),
(389, 'MDS63984702', 'EVA ', '', '', '0.00', 'Ea', '', 'K02', ''),
(390, 'AH01-00015A', 'SHEET WINDOW', '', '', '0.00', 'Ea', '', 'K02', ''),
(391, 'MDS30602109', 'CUSHION GASKET', '', '', '400.00', 'Ea', '', 'K02', ''),
(392, 'AH63-02433B', 'Sheet Front', '', '', '5900.00', 'Ea', '', 'K02', ''),
(393, 'AH63-02182G', 'Sheet Door', '', '', '12458.00', 'Ea', '', 'K02', ''),
(394, 'AH67-00660A', 'RUBBER FOOT', '', '', '1050.00', 'Ea', '', 'K02', ''),
(395, 'MDS30602108', 'Cushion Gasket', '', '', '0.00', 'Ea', '', 'K02', ''),
(396, 'MDS30602115', 'Gasket', '', '', '0.00', 'Ea', '', 'K02', ''),
(397, 'AH61-03320A', 'Foot Bottom', '', '', '6124.00', 'Ea', '', 'K02', ''),
(398, 'GL63-00004A', 'Gasket', '', '', '11459.00', 'Ea', '', 'K02', ''),
(399, 'D78003766', 'Himiron (Roll)', '', '', '0.00', 'Ea', '', 'K02', ''),
(400, 'RTP1-000035/D78006025', 'SH96TS Double Tape 96X70X0.4', '', '', '273.00', 'Ea', '', 'K02', ''),
(401, 'MDS63984403', 'FELT BUJIKPO', '', '', '75.00', 'Ea', '', 'K02', ''),
(402, 'MDS64160201', 'BUJIKPO DISPLAY', '', '', '7325.00', 'Ea', '', 'K02', ''),
(403, 'MDS63984406', 'FELT BUJIKPO', '', '', '0.00', 'Ea', '', 'K02', ''),
(404, 'MDS63984405', 'FELT BUJIKPO', '', '', '80.00', 'Ea', '', 'K02', ''),
(405, 'D78006028', 'Double Tape Tessa', '', '', '0.00', 'Ea', '', 'K02', ''),
(406, 'MDS63984404', 'FELT BUJIKPO', '', '', '840.00', 'Ea', '', 'K02', ''),
(407, 'MDS63984409', 'FELT BUJIKPO', '', '', '2037.00', 'Ea', '', 'K02', ''),
(408, 'MDS63984703', 'EVA ', '', '', '3000.00', 'Ea', '', 'K02', ''),
(409, 'D7102225K / 12 X 23 X 3T', 'FOOT PORON', '', '', '35800.00', 'Ea', '', 'K02', ''),
(410, 'RBR1-000049/D7102106C/ 20X4.5X3T', 'FOOT PORON', '', '', '6000.00', 'Ea', '', 'K02', ''),
(411, '3846SC0003H/S74B500A16', 'BADGE LG', '', '', '10900.00', 'Ea', '', 'K02', ''),
(412, 'MGJ53270803', 'BADGE LG', '', '', '3832.00', 'Ea', '', 'K02', ''),
(413, '3846SC0003B', 'Badge LG', '', '', '6000.00', 'Ea', '', 'K02', ''),
(414, 'S83B500B72', 'Double Tape 70X80', '', '', '2591.00', 'Ea', '', 'K02', ''),
(415, 'S83C500A77', 'Foot', '', '', '2550.00', 'Ea', '', 'K02', ''),
(416, 'MHK63529601/S16B522B01', 'USB Label Jack ', '', '', '100.00', 'Ea', '', 'K02', ''),
(417, 'S83B500B71', 'Double Tape 70X150', '', '', '0.00', 'Ea', '', 'K02', ''),
(418, 'S83B500B61/MEG62700401(B)', 'Double Tape', '', '', '0.00', 'Ea', '', 'K02', ''),
(419, 'S83B500B60/MEG62700401(A)', 'Double Tape', '', '', '0.00', 'Ea', '', 'K02', ''),
(420, 'S83B500C63', 'D Tape', '', '', '0.00', 'Ea', '', 'K02', ''),
(421, 'S83B500B75', 'STICKING DOUBLE TAPE', '', '', '1363.00', 'Ea', '', 'K02', ''),
(422, 'S83B500B86', 'Double Tape 65X60', '', '', '133.00', 'Ea', '', 'K02', ''),
(423, 'A71A568A03/ACQ85433701', 'Cover MD Assy', '', '', '103.00', 'Ea', '', 'K02', ''),
(424, 'S72B568A09/MHK63465401', 'Sheet Speaker Cable (AL)', '', '', '630.00', 'Ea', '', 'K02', ''),
(425, 'S72B568A08/MHK63326101', 'Sheet Touch', '', '', '239.00', 'Ea', '', 'K02', ''),
(426, 'S72B568A14/MHK63486301', 'SHEET PROTECTION', '', '', '115.00', 'Ea', '', 'K02', ''),
(427, 'S83B500B52/MCQ63567808', 'Felt', '', '', '520.00', 'Ea', '', 'K02', ''),
(428, 'MCQ63567806/S83B500B50', 'FELT SPEAKER', '', '', '2601.00', 'Ea', '', 'K02', ''),
(429, 'S83B500B53/MCQ63567809', 'Felt', '', '', '0.00', 'Ea', '', 'K02', ''),
(430, 'S16A500C89/MHK62906502', 'Sheet Side Jack', '', '', '0.00', 'Ea', '', 'K02', ''),
(431, 'S83B500C78', 'SHEET ESORBA', '', '', '4488.00', 'Ea', '', 'K02', ''),
(432, 'S83B500C73', 'SHEET ESORBA', '', '', '0.00', 'Ea', '', 'K02', ''),
(433, 'S83B500C77', 'D Tape', '', '', '0.00', 'Ea', '', 'K02', ''),
(434, 'S83B500B56/MCQ65164507', 'Felt', '', '', '0.00', 'Ea', '', 'K02', ''),
(435, 'S83B500B55/MCQ65164505', 'Felt', '', '', '12205.00', 'Ea', '', 'K02', ''),
(436, 'S83B500B31', 'Double Tape', '', '', '0.00', 'Ea', '', 'K02', ''),
(437, 'S83B500C14', 'Double Tape', '', '', '0.00', 'Ea', '', 'K02', ''),
(438, 'S83B500C92/MHK63993801', 'SHEET SPK CENTER', '', '', '200.00', 'Ea', '', 'K02', ''),
(439, 'MHK63733102/S72B577A06', 'SHEET FRONT ', '', '', '0.00', 'Ea', '', 'K02', ''),
(440, 'S83B501D12MDS63984402', 'FELT BUJIKPO', '', '', '3870.00', 'Ea', '', 'K02', ''),
(441, 'ED74-01023A', 'Cradle Tape', '', '', '730.00', 'Ea', '', 'K02', ''),
(442, 'ED74-01012A', 'Cradle Plate Tape', '', '', '1170.00', 'Ea', '', 'K02', ''),
(443, 'ED74-01020A', 'Cradle Tape', '', '', '2445.00', 'Ea', '', 'K02', ''),
(444, '40 X 34', 'SPONGE', '', '', '0.00', 'Ea', '', 'K02', ''),
(445, 'AA64-01334B', 'Inlay CRT', '', '', '0.00', 'Ea', '', 'K02', ''),
(446, 'SMT-E6400 40X40', 'SPONGE', '', '', '7500.00', 'Ea', '', 'K02', ''),
(447, 'SMT-G7400 34X40', 'SPONGE', '', '', '31994.00', 'Ea', '', 'K02', ''),
(448, 'MKC62680901', 'Double Tape', '', '', '700.00', 'Ea', '', 'K02', ''),
(449, 'MEV62591404', 'Insulator', '', '', '1655.00', 'Ea', '', 'K02', ''),
(450, 'MCQ65164541', 'BASE STAND BOTTOM', '', '', '2560.00', 'Ea', '', 'K02', ''),
(451, 'MDS39538737', 'Gasket', '', '', '5390.00', 'Ea', '', 'K02', ''),
(452, 'MCK66884701', 'Cover', '', '', '180.00', 'Ea', '', 'K02', ''),
(453, '7250GD0021C', 'Tape Filament', '', '', '6026.00', 'Ea', '', 'K02', ''),
(454, 'MDS42723205', 'Gasket', '', '', '177.00', 'Ea', '', 'K02', ''),
(455, 'MEG61959101', 'Holder', '', '', '1560.00', 'Ea', '', 'K02', ''),
(456, '3300R-D079T', 'Plate', '', '', '954.00', 'Ea', '', 'K02', ''),
(457, '4850RL0002J', 'Damper', '', '', '0.00', 'Ea', '', 'K02', ''),
(458, '7250GD0021D', 'Tape Filament', '', '', '280.00', 'Ea', '', 'K02', ''),
(459, 'MDS63690102', 'Gasket', '', '', '1470.00', 'Ea', '', 'K02', ''),
(460, 'MEG57299701', 'Holder', '', '', '14.00', 'Ea', '', 'K02', ''),
(461, 'MEG62700901', 'Holder', '', '', '3051.00', 'Ea', '', 'K02', ''),
(462, 'MEG62700501', 'Holder', '', '', '246.00', 'Ea', '', 'K02', ''),
(463, 'MDS62912701', 'Gasket', '', '', '42.00', 'Ea', '', 'K02', ''),
(464, 'MEG62682701', 'Holder', '', '', '0.00', 'Ea', '', 'K02', ''),
(465, 'MEY40499001', 'Knob', '', '', '720.00', 'Ea', '', 'K02', ''),
(466, 'MDS63751904', 'GASKET', '', '', '29945.00', 'Ea', '', 'K02', ''),
(467, 'MDS63690104', 'Gasket', '', '', '1036.00', 'Ea', '', 'K02', ''),
(468, 'MEG61898001', 'Holder', '', '', '636.00', 'Ea', '', 'K02', ''),
(469, 'MCK66828201', 'Cover', '', '', '295.00', 'Ea', '', 'K02', ''),
(470, 'MHK63307001', 'Sheet', '', '', '230.00', 'Ea', '', 'K02', ''),
(471, '4766R-0043L', 'Damper', '', '', '1050.00', 'Ea', '', 'K02', ''),
(472, 'MDS61951106', 'Gasket', '', '', '113.00', 'Ea', '', 'K02', ''),
(473, '4766R-0043K', 'Damper', '', '', '168.00', 'Ea', '', 'K02', ''),
(474, 'MCQ62588702', 'Damper', '', '', '240.00', 'Ea', '', 'K02', ''),
(475, '7250CP0005D', 'Tape Copper', '', '', '0.00', 'Ea', '', 'K02', ''),
(476, 'MCQ63084908', 'Damper', '', '', '20.00', 'Ea', '', 'K02', ''),
(477, 'MCQ62765301', 'Damper Thermal', '', '', '0.00', 'Ea', '', 'K02', ''),
(478, 'MEG40500701', 'Holder', '', '', '472.00', 'Ea', '', 'K02', ''),
(479, 'MHK61843201/7', 'Tape felt', '', '', '20.00', 'Ea', '', 'K02', ''),
(480, 'AGU73828006', 'Insulation', '', '', '19.00', 'Ea', '', 'K02', ''),
(481, '4766R-0043Y', 'Felt', '', '', '0.00', 'Ea', '', 'K02', ''),
(482, 'MCR62752201', 'Decor', '', '', '293.00', 'Ea', '', 'K02', ''),
(483, 'AAN73232001', 'Base Assembly', '', '', '212.00', 'Ea', '', 'K02', ''),
(484, '4986R-0049T', 'Damper', '', '', '0.00', 'Ea', '', 'K02', ''),
(485, 'MCR64646602', 'INSULATION', '', '', '133.00', 'Ea', '', 'K02', ''),
(486, 'MDS63690801', 'Gasket', '', '', '490.00', 'Ea', '', 'K02', ''),
(487, '7250GD0021A', 'Tape OPP', '', '', '16494.00', 'Ea', '', 'K02', ''),
(488, 'MHK42178004', 'Sheet', '', '', '57.00', 'Ea', '', 'K02', ''),
(489, 'MCQ32325010', 'Damper', '', '', '6200.00', 'Ea', '', 'K02', ''),
(490, 'MDS61951102', 'Gasket', '', '', '5070.00', 'Ea', '', 'K02', ''),
(491, 'MCK66955503', 'Cover', '', '', '520.00', 'Ea', '', 'K02', ''),
(492, 'MFZ63244601', 'PACKING (LDPE)     TRAY ND 3520', '', '', '521.00', 'Ea', '', 'K02', ''),
(493, 'MCQ62096432', 'D/THERMAL', '', '', '1168.00', 'Ea', '', 'K02', ''),
(494, 'MCQ32777520', 'Cushion', '', '', '132.00', 'Ea', '', 'K02', ''),
(495, 'MCV42310601', 'Door', '', '', '1096.00', 'Ea', '', 'K02', ''),
(496, 'MEG63000201', 'Holder', '', '', '120.00', 'Ea', '', 'K02', ''),
(497, 'MCK67199704', 'Cover', '', '', '0.00', 'Ea', '', 'K02', ''),
(498, 'MCK67199703', 'Cover', '', '', '0.00', 'Ea', '', 'K02', ''),
(499, 'MEG63000101', 'Holder', '', '', '673.00', 'Ea', '', 'K02', ''),
(500, 'MDS62512303', 'Sheet Emi', '', '', '1711.00', 'Ea', '', 'K02', ''),
(501, 'MCR64812505', 'S/STAND BODY HOLD COVER', '', '', '15.00', 'Ea', '', 'K02', ''),
(502, '4986R-0004M', 'Gasket', '', '', '1020.00', 'Ea', '', 'K02', ''),
(503, 'MHK63006903', 'Sheet', '', '', '120.00', 'Ea', '', 'K02', ''),
(504, 'MCQ65965406', 'Damper', '', '', '884.00', 'Ea', '', 'K02', ''),
(505, 'MCQ65965405', 'Damper', '', '', '1087.00', 'Ea', '', 'K02', ''),
(506, 'MCQ62096412', 'THERMAL PAD', '', '', '1600.00', 'Ea', '', 'K02', ''),
(507, 'MCQ62096408', 'Damper', '', '', '1888.00', 'Ea', '', 'K02', ''),
(508, 'MCQ66697504', 'Damper', '', '', '1459.00', 'Ea', '', 'K02', ''),
(509, 'MEY62354602/1', 'Knob', '', '', '2213.00', 'Ea', '', 'K02', ''),
(510, 'ADC73545701', 'Door Assembly', '', '', '0.00', 'Ea', '', 'K02', ''),
(511, 'MCK66671601/AGG73729704', 'Cover', '', '', '40.00', 'Ea', '', 'K02', ''),
(512, 'MHK62149206', 'Sheet', '', '', '11.00', 'Ea', '', 'K02', ''),
(513, 'MHK63408801', 'Sheet', '', '', '0.00', 'Ea', '', 'K02', ''),
(514, 'MCQ38410403', 'Damper', '', '', '1690.00', 'Ea', '', 'K02', ''),
(515, 'AAA73857604', 'Clamp Tie', '', '', '346.00', 'Ea', '', 'K02', ''),
(516, 'MEY62455201', 'Knob', '', '', '481.00', 'Ea', '', 'K02', ''),
(517, '4766R-0043Z', 'Damper', '', '', '165.00', 'Ea', '', 'K02', ''),
(518, 'MEG42992601', 'Holder', '', '', '425.00', 'Ea', '', 'K02', ''),
(519, 'MHK63408901', 'Sheet', '', '', '1531.00', 'Ea', '', 'K02', ''),
(520, 'MHK63385301', 'Sheet', '', '', '0.00', 'Ea', '', 'K02', ''),
(521, 'MDS63751903', 'Gasket', '', '', '9692.00', 'Ea', '', 'K02', ''),
(522, 'MEG40359801', 'Holder', '', '', '400.00', 'Ea', '', 'K02', ''),
(523, 'MDS63690103', 'Gasket', '', '', '150.00', 'Ea', '', 'K02', ''),
(524, 'MDS63690702', 'Gasket', '', '', '692.00', 'Ea', '', 'K02', ''),
(525, 'MDS63690701', 'Gasket', '', '', '1319.00', 'Ea', '', 'K02', ''),
(526, 'MDS63690704', 'Gasket', '', '', '15061.00', 'Ea', '', 'K02', ''),
(527, 'MDS63690703', 'Gasket', '', '', '3452.00', 'Ea', '', 'K02', ''),
(528, 'MEG62520601', 'Holder', '', '', '2125.00', 'Ea', '', 'K02', ''),
(529, 'MCK66037601', 'Cover', '', '', '687.00', 'Ea', '', 'K02', ''),
(530, 'MHK63445501', 'Sheet', '', '', '697.00', 'Ea', '', 'K02', ''),
(531, 'AEJ73619401', 'Holder Assembly', '', '', '408.00', 'Ea', '', 'K02', ''),
(532, 'AGU73828002', 'Insulation', '', '', '513.00', 'Ea', '', 'K02', ''),
(533, 'MEY61934601', 'Knob', '', '', '243.00', 'Ea', '', 'K02', ''),
(534, 'AEJ73440603', 'Holder Assembly', '', '', '494.00', 'Ea', '', 'K02', ''),
(535, 'AGL73679203', 'Panel Assembly,Front', '', '', '622.00', 'Ea', '', 'K02', ''),
(536, 'MDS63255902', 'Gasket', '', '', '2957.00', 'Ea', '', 'K02', ''),
(537, '4940RMP001A', 'Knob', '', '', '1078.00', 'Ea', '', 'K02', ''),
(538, 'MEG62683801', 'Holder', '', '', '558.00', 'Ea', '', 'K02', ''),
(539, 'MHK62705604', 'Sheet', '', '', '282.00', 'Ea', '', 'K02', ''),
(540, 'MHK63405101', 'Sheet', '', '', '0.00', 'Ea', '', 'K02', ''),
(541, 'MCQ63106602', 'Damper', '', '', '0.00', 'Ea', '', 'K02', ''),
(542, 'MEY61853201', 'Knob', '', '', '0.00', 'Ea', '', 'K02', ''),
(543, 'MDS61951109', 'Gasket', '', '', '500.00', 'Ea', '', 'K02', ''),
(544, 'MCQ63084907', 'Damper', '', '', '402.00', 'Ea', '', 'K02', ''),
(545, '4766R-0043R', 'Damper', '', '', '0.00', 'Ea', '', 'K02', ''),
(546, 'MCQ60139108', 'Damper', '', '', '1628.00', 'Ea', '', 'K02', ''),
(547, 'ABN73739201', 'DUCT OUT', '', '', '620.00', 'Ea', '', 'K02', ''),
(548, 'MCQ67127801', 'Cushion', '', '', '1938.00', 'Ea', '', 'K02', ''),
(549, 'MDS64113801', 'Gasket', '', '', '0.00', 'Ea', '', 'K02', ''),
(550, '4940R-V065H', 'Knob', '', '', '1868.00', 'Ea', '', 'K02', ''),
(551, 'MCQ62096433', 'Damper', '', '', '0.00', 'Ea', '', 'K02', ''),
(552, 'MCR64011301/AAX73547902', 'Decor', '', '', '1312.00', 'Ea', '', 'K02', ''),
(553, 'MFZ63399001', 'PE FOAM PAD 50 X 5 X 8.5', '', '', '280.00', 'Ea', '', 'K02', ''),
(554, 'MCR64742802', 'Sheet Insulation', '', '', '200.00', 'Ea', '', 'K02', ''),
(555, 'MCQ63084902', 'Damper', '', '', '140.00', 'Ea', '', 'K02', ''),
(556, 'MCR63988905', 'Decor', '', '', '0.00', 'Ea', '', 'K02', ''),
(557, 'MDS62512501', 'Gasket', '', '', '1380.00', 'Ea', '', 'K02', ''),
(558, 'MCQ32777514', 'Damper', '', '', '379.00', 'Ea', '', 'K02', ''),
(559, '4940RCV035B', 'Knob', '', '', '2660.00', 'Ea', '', 'K02', ''),
(560, 'MCQ32325019', 'Foot Bottom', '', '', '0.00', 'Ea', '', 'K02', ''),
(561, 'MEY62554001', 'Knob', '', '', '1628.00', 'Ea', '', 'K02', ''),
(562, 'MCR62133115', 'DECO PLATE', '', '', '0.00', 'Ea', '', 'K02', ''),
(563, 'MDS62491007', 'Gasket', '', '', '0.00', 'Ea', '', 'K02', ''),
(564, 'MDS62512504', 'Gasket', '', '', '1036.00', 'Ea', '', 'K02', ''),
(565, 'MCV40333905', 'Door', '', '', '2322.00', 'Ea', '', 'K02', ''),
(566, 'MCQ32777502', 'Cushion', '', '', '32.00', 'Ea', '', 'K02', ''),
(567, '4766R-0043H', 'Damper', '', '', '0.00', 'Ea', '', 'K02', ''),
(568, 'MCK67492601', 'COVER SIDE L', '', '', '1175.00', 'Ea', '', 'K02', ''),
(569, 'MCK67492701', 'COVER SIDE R', '', '', '1848.00', 'Ea', '', 'K02', ''),
(570, 'MEG58313201', 'Holder', '', '', '18.00', 'Ea', '', 'K02', ''),
(571, 'MCK66691201/AGG73729705', 'Cover', '', '', '156.00', 'Ea', '', 'K02', ''),
(572, 'ACQ85941001', 'Cover', '', '', '156.00', 'Ea', '', 'K02', ''),
(573, 'MEG62683901', 'Holder', '', '', '0.00', 'Ea', '', 'K02', ''),
(574, 'MEG42022001', 'Holder', '', '', '30.00', 'Ea', '', 'K02', ''),
(575, 'MHK63988601', 'SHEET BUTTON', '', '', '60.00', 'Ea', '', 'K02', ''),
(576, 'RAB33091803', 'Tape Shield', '', '', '70.00', 'Ea', '', 'K02', ''),
(577, 'MHK62149205', 'Sheet', '', '', '22.00', 'Ea', '', 'K02', ''),
(578, 'ACQ85941002', 'Cover', '', '', '266.00', 'Ea', '', 'K02', ''),
(579, 'MHK63991201', 'S/PROTECTION', '', '', '40.00', 'Ea', '', 'K02', ''),
(580, 'MHK63006909', 'Sheet Power', '', '', '70.00', 'Ea', '', 'K02', ''),
(581, 'AAA74287202', 'Holder Assembly', '', '', '23.00', 'Ea', '', 'K02', ''),
(582, 'MAZ62827601', 'Bracket Power Cord', '', '', '366.00', 'Ea', '', 'K02', ''),
(583, 'MCQ66284301', 'Damper', '', '', '0.00', 'Ea', '', 'K02', ''),
(584, 'MCQ66574001', 'Damper', '', '', '0.00', 'Ea', '', 'K02', ''),
(585, '3300R-D079D', 'Plate', '', '', '418.00', 'Ea', '', 'K02', ''),
(586, 'MFZ47272648', 'Packing (LDPE)      TRAY PS48', '', '', '548.00', 'Ea', '', 'K02', ''),
(587, 'MCQ32325011', 'Damper', '', '', '4380.00', 'Ea', '', 'K02', ''),
(588, 'MCQ66284302', 'Damper', '', '', '0.00', 'Ea', '', 'K02', ''),
(589, 'MCQ63567810/S83B500B54', 'Damper', '', '', '9365.00', 'Ea', '', 'K02', ''),
(590, 'MCQ66565604', 'Damper', '', '', '0.00', 'Ea', '', 'K02', ''),
(591, 'AAA74758101', 'Rubber Assy', '', '', '0.00', 'Ea', '', 'K02', ''),
(592, 'MHK62149209', 'Sheet', '', '', '410.00', 'Ea', '', 'K02', ''),
(593, 'MAZ62827602', 'Bracket Power Cord', '', '', '187.00', 'Ea', '', 'K02', ''),
(594, 'AAN73852902', 'Base Assembly', '', '', '1037.00', 'Ea', '', 'K02', ''),
(595, '3508V00746W', 'Decor', '', '', '1250.00', 'Ea', '', 'K02', ''),
(596, 'MCQ66565502', 'Damper', '', '', '0.00', 'Ea', '', 'K02', ''),
(597, 'MCQ66565501', 'Damper', '', '', '0.00', 'Ea', '', 'K02', ''),
(598, 'MCK66037701', 'Cover', '', '', '159.00', 'Ea', '', 'K02', ''),
(599, 'MCK66955504', 'Cover', '', '', '1028.00', 'Ea', '', 'K02', ''),
(600, 'MCR64733101', 'Insulation Sheet ', '', '', '0.00', 'Ea', '', 'K02', ''),
(601, 'MCQ65965401', 'Damper', '', '', '603.00', 'Ea', '', 'K02', ''),
(602, 'MFZ63244701', 'PACKING (LDPE)     TRAY ND 1520', '', '', '140.00', 'Ea', '', 'K02', ''),
(603, 'MCQ65164532', 'EVA FELT', '', '', '181.00', 'Ea', '', 'K02', ''),
(604, '4986R-0030T', 'Gasket', '', '', '0.00', 'Ea', '', 'K02', ''),
(605, 'MCR64646601', 'INSULATION', '', '', '133.00', 'Ea', '', 'K02', ''),
(606, 'MCQ62096417', 'Damper', '', '', '2199.00', 'Ea', '', 'K02', ''),
(607, 'MCQ63084905', 'Damper', '', '', '186.00', 'Ea', '', 'K02', ''),
(608, 'MEY62594301', 'Knob', '', '', '929.00', 'Ea', '', 'K02', ''),
(609, '3300R-D079A', 'Plate', '', '', '864.00', 'Ea', '', 'K02', ''),
(610, '3508V00069Y', 'Decor', '', '', '260.00', 'Ea', '', 'K02', ''),
(611, '3940TKK122Y', 'Damper', '', '', '0.00', 'Ea', '', 'K02', ''),
(612, 'MCQ65965402', 'Damper', '', '', '573.00', 'Ea', '', 'K02', ''),
(613, 'AGL73138201', 'Panel Assembly', '', '', '52.00', 'Ea', '', 'K02', ''),
(614, 'MDP62606701', 'Rubber', '', '', '0.00', 'Ea', '', 'K02', ''),
(615, 'MCQ62096424', 'Damper', '', '', '20.00', 'Ea', '', 'K02', ''),
(616, 'MCQ65965404', 'Damper', '', '', '0.00', 'Ea', '', 'K02', ''),
(617, 'AEJ73239401', 'Holder Assembly', '', '', '1488.00', 'Ea', '', 'K02', ''),
(618, 'MDS63984408', 'FELT BUJIKPO', '', '', '0.00', 'Ea', '', 'K02', ''),
(619, 'MDS63984407', 'FELT BUJIKPO', '', '', '2000.00', 'Ea', '', 'K02', ''),
(620, 'MDS39538708', 'GASKET', '', '', '0.00', 'Ea', '', 'K02', ''),
(621, 'AEJ73199501', 'Holder Assembly', '', '', '340.00', 'Ea', '', 'K02', ''),
(622, '4850RL0002F', 'Damper', '', '', '0.00', 'Ea', '', 'K02', ''),
(623, 'MCQ62588704', 'CUSHION', '', '', '575.00', 'Ea', '', 'K02', ''),
(624, 'MCR62752202', 'DÉCOR', '', '', '0.00', 'Ea', '', 'K02', ''),
(625, '3300R-D079G', 'Plate', '', '', '1228.00', 'Ea', '', 'K02', ''),
(626, 'MCQ65965403', 'Damper', '', '', '0.00', 'Ea', '', 'K02', ''),
(627, 'MEG35981101', 'Holder', '', '', '724.00', 'Ea', '', 'K02', ''),
(628, 'MHK63797701', 'Sheet', '', '', '0.00', 'Ea', '', 'K02', ''),
(629, 'AAA74498302', 'HOLDER STAND', '', '', '104.00', 'Ea', '', 'K02', ''),
(630, 'AGU73827901', 'Insulator', '', '', '0.00', 'Ea', '', 'K02', ''),
(631, 'MCQ67213601', 'Damper', '', '', '1110.00', 'Ea', '', 'K02', ''),
(632, '7250CP0005A', 'Tape', '', '', '956.00', 'Ea', '', 'K02', ''),
(633, 'S72B568A10/4986R-0004A', 'Gasket', '', '', '2000.00', 'Ea', '', 'K02', ''),
(634, 'MDS62491001', 'Gasket', '', '', '0.00', 'Ea', '', 'K02', '');
INSERT INTO `barang` (`id`, `kd_barang`, `nm_barang`, `type`, `spec`, `stok`, `satuan`, `ket`, `kd_kategori`, `aktif`) VALUES
(635, 'AAN73232003', 'Base Assembly', '', '', '97.00', 'Ea', '', 'K02', ''),
(636, 'MHK63766501', 'Sheet', '', '', '62.00', 'Ea', '', 'K02', ''),
(637, 'MCR64647101', 'Insulation', '', '', '40.00', 'Ea', '', 'K02', ''),
(638, '7250CP0005S', 'Tape', '', '', '1383.00', 'Ea', '', 'K02', ''),
(639, 'MHK63798801', 'S.Difution', '', '', '700.00', 'Ea', '', 'K02', ''),
(640, 'MFZ36693849', 'Packing (LDPE)      TRAY PS 49', '', '', '0.00', 'Ea', '', 'K02', ''),
(641, 'MEY62213801/AAX73548002', 'Knob', '', '', '6386.00', 'Ea', '', 'K02', ''),
(642, 'MCQ63084906', 'Damper', '', '', '50.00', 'Ea', '', 'K02', ''),
(643, 'MDS63255903', 'Gasket', '', '', '49.00', 'Ea', '', 'K02', ''),
(644, 'MCR64406201', 'Decor', '', '', '54.00', 'Ea', '', 'K02', ''),
(645, 'MCK67157101', 'COVER DISPLAY', '', '', '0.00', 'Ea', '', 'K02', ''),
(646, 'MDP30320001', 'Foot', '', '', '0.00', 'Ea', '', 'K02', ''),
(647, '3300R-D079E', 'Plat HDD', '', '', '563.00', 'Ea', '', 'K02', ''),
(648, 'MCR64646701', 'Sheet Insulation', '', '', '273.00', 'Ea', '', 'K02', ''),
(649, 'MEG57299702', 'Holder', '', '', '388.00', 'Ea', '', 'K02', ''),
(650, 'MCQ62588405', 'Damper', '', '', '585.00', 'Ea', '', 'K02', ''),
(651, 'ACQ85962701', 'JACK POWER', '', '', '53.00', 'Ea', '', 'K02', ''),
(652, 'MDS62512502', 'Gasket', '', '', '0.00', 'Ea', '', 'K02', ''),
(653, 'AEJ73639702', 'IPAD STAND', '', '', '1037.00', 'Ea', '', 'K02', ''),
(654, 'MHK63969101', 'SHEET', '', '', '1583.00', 'Ea', '', 'K02', ''),
(655, 'MCV62213401', 'Door', '', '', '290.00', 'Ea', '', 'K02', ''),
(656, 'MHK63935401', 'FELT', '', '', '530.00', 'Ea', '', 'K02', ''),
(657, 'MCK67106501', 'Cover', '', '', '1832.00', 'Ea', '', 'K02', ''),
(658, 'MCQ32325020', 'Damper', '', '', '0.00', 'Ea', '', 'K02', ''),
(659, 'MEG40501101', 'Holder', '', '', '1625.00', 'Ea', '', 'K02', ''),
(660, 'ADC73886303', 'Door Assembly', '', '', '1836.00', 'Ea', '', 'K02', ''),
(661, '4850RC0038P', 'Damper', '', '', '380.00', 'Ea', '', 'K02', ''),
(662, 'MCK63766701', 'Cover', '', '', '6915.00', 'Ea', '', 'K02', ''),
(663, 'MEY61841401', 'Knob', '', '', '3094.00', 'Ea', '', 'K02', ''),
(664, '4766R-0043U', 'Damper', '', '', '4438.00', 'Ea', '', 'K02', ''),
(665, 'MCV40333910', 'Door', '', '', '2686.00', 'Ea', '', 'K02', ''),
(666, 'AGU73828001', 'Insulation', '', '', '269.00', 'Ea', '', 'K02', ''),
(667, 'MCQ63084901', 'Damper', '', '', '0.00', 'Ea', '', 'K02', ''),
(668, '3300R-D079F', 'Plate', '', '', '136.00', 'Ea', '', 'K02', ''),
(669, 'MDS38891213', 'Gasket', '', '', '1600.00', 'Ea', '', 'K02', ''),
(670, '4986R-0030G', 'Gasket', '', '', '0.00', 'Ea', '', 'K02', ''),
(671, 'AGU73828005', 'INSULATION', '', '', '0.00', 'Ea', '', 'K02', ''),
(672, 'MCQ62096413', 'Damper', '', '', '271.00', 'Ea', '', 'K02', ''),
(673, 'MCK67007002', 'Cover L', '', '', '879.00', 'Ea', '', 'K02', ''),
(674, 'MCR64733501', 'Insulation', '', '', '106.00', 'Ea', '', 'K02', ''),
(675, '4766R-0043D', 'Damper', '', '', '0.00', 'Ea', '', 'K02', ''),
(676, 'MCV61841504', 'Door', '', '', '245.00', 'Ea', '', 'K02', ''),
(677, 'MEG40387501', 'Holder', '', '', '0.00', 'Ea', '', 'K02', ''),
(678, 'MCQ62096404', 'Damper', '', '', '0.00', 'Ea', '', 'K02', ''),
(679, '4930R-0472A', 'Holder R/L', '', '', '174.00', 'Ea', '', 'K02', ''),
(680, 'MCQ63084903', 'Damper', '', '', '0.00', 'Ea', '', 'K02', ''),
(681, 'MCQ65164528', 'Eva Felt', '', '', '0.00', 'Ea', '', 'K02', ''),
(682, 'MCV40333904', 'Door', '', '', '2762.00', 'Ea', '', 'K02', ''),
(683, 'MHK37290703', 'Sheet', '', '', '1110.00', 'Ea', '', 'K02', ''),
(684, 'MCK67007001', 'Cover R', '', '', '908.00', 'Ea', '', 'K02', ''),
(685, 'MCR64646501', 'Deco Rear', '', '', '1750.00', 'Ea', '', 'K02', ''),
(686, 'MHK62906701', 'Sheet', '', '', '50.00', 'Ea', '', 'K02', ''),
(687, 'MHK62145401', 'Dummy Card', '', '', '1793.00', 'Ea', '', 'K02', ''),
(688, '4986R-0049E', 'Gasket', '', '', '0.00', 'Ea', '', 'K02', ''),
(689, 'MCQ37469902', 'Damper', '', '', '1140.00', 'Ea', '', 'K02', ''),
(690, 'MHK63755501', 'Sheet', '', '', '0.00', 'Ea', '', 'K02', ''),
(691, 'MCQ32777518', 'Damper', '', '', '0.00', 'Ea', '', 'K02', ''),
(692, 'MCQ62096410', 'Damper', '', '', '0.00', 'Ea', '', 'K02', ''),
(693, 'MDS63751905', 'Gasket', '', '', '9.00', 'Ea', '', 'K02', ''),
(694, 'MCK63766801', '0', '', '', '1082.00', 'Ea', '', 'K02', ''),
(695, 'MCK63314201', 'Cover', '', '', '789.00', 'Ea', '', 'K02', ''),
(696, 'MDS63914703', 'Gasket', '', '', '4712.00', 'Ea', '', 'K02', ''),
(697, 'MFZ47272642', 'Packing (LDPE)', '', '', '913.00', 'Ea', '', 'K02', ''),
(698, 'MCQ63106601', 'Damper', '', '', '980.00', 'Ea', '', 'K02', ''),
(699, 'MDS39538710', 'Gasket', '', '', '0.00', 'Ea', '', 'K02', ''),
(700, '7250CP0005J', 'Tape', '', '', '0.00', 'Ea', '', 'K02', ''),
(701, 'MCQ63084909', 'Damper', '', '', '0.00', 'Ea', '', 'K02', ''),
(702, 'MCK66955501', 'Cover', '', '', '886.00', 'Ea', '', 'K02', ''),
(703, 'MDS42723211', 'Gasket', '', '', '0.00', 'Ea', '', 'K02', ''),
(704, 'MCK66955502', 'Cover', '', '', '179.00', 'Ea', '', 'K02', ''),
(705, 'MCR64646901', 'Insulation', '', '', '733.00', 'Ea', '', 'K02', ''),
(706, 'MDS62411302', 'Gasket', '', '', '18351.00', 'Ea', '', 'K02', ''),
(707, 'MHK42194508', 'Sheet', '', '', '1000.00', 'Ea', '', 'K02', ''),
(708, 'MEG61959102', 'Holder', '', '', '55.00', 'Ea', '', 'K02', ''),
(709, 'MDS63255901', 'Gasket', '', '', '0.00', 'Ea', '', 'K02', ''),
(710, 'AGU73968101', 'Insulation', '', '', '0.00', 'Ea', '', 'K02', ''),
(711, '4986R-0004B', 'Gasket', '', '', '162.00', 'Ea', '', 'K02', ''),
(712, '3300R-D079P', 'Plate', '', '', '5138.00', 'Ea', '', 'K02', ''),
(713, '4986R-0033H', 'Gasket', '', '', '3.00', 'Ea', '', 'K02', ''),
(714, '3300R-D079H', 'Plate', '', '', '2025.00', 'Ea', '', 'K02', ''),
(715, 'MCR64733801', 'INSULATION', '', '', '284.00', 'Ea', '', 'K02', ''),
(716, 'MCR64753701', 'Insulation Sheet ', '', '', '0.00', 'Ea', '', 'K02', ''),
(717, 'MCQ60139106', 'Damper', '', '', '17342.00', 'Ea', '', 'K02', ''),
(718, 'MCQ67075601', 'Damper', '', '', '1467.00', 'Ea', '', 'K02', ''),
(719, 'MCQ62096422', 'Damper Thermal', '', '', '20.00', 'Ea', '', 'K02', ''),
(720, '7250CP0005E', 'tape', '', '', '0.00', 'Ea', '', 'K02', ''),
(721, 'MFZ47272655', 'PACKING (LDPE)     TRAY TI320', '', '', '187.00', 'Ea', '', 'K02', ''),
(722, '3858R-X272A', 'Sheet', '', '', '1900.00', 'Ea', '', 'K02', ''),
(723, '5040R-0170C', 'Damper', '', '', '0.00', 'Ea', '', 'K02', ''),
(724, 'MFB62473001', 'Lens', '', '', '0.00', 'Ea', '', 'K02', ''),
(725, 'MCQ62096415', 'Damper', '', '', '0.00', 'Ea', '', 'K02', ''),
(726, 'MBG64207001', 'Knob Control', '', '', '4429.00', 'Ea', '', 'K02', ''),
(727, 'MCQ62096428', 'Damper', '', '', '0.00', 'Ea', '', 'K02', ''),
(728, 'MHK63811002', 'Sheet', '', '', '15197.00', 'Ea', '', 'K02', ''),
(729, 'MCQ60139107', 'Damper', '', '', '10030.00', 'Ea', '', 'K02', ''),
(730, 'MCV40333911', 'Door', '', '', '13032.00', 'Ea', '', 'K02', ''),
(731, '7250GD0021H', 'Tape OPP', '', '', '0.00', 'Ea', '', 'K02', ''),
(732, 'MEZ64775302', 'SHEET SMPS TOP', '', '', '10600.00', 'Ea', '', 'K02', ''),
(733, 'MCQ62096403', 'Damper Thermal', '', '', '0.00', 'Ea', '', 'K02', ''),
(734, 'MHK63307903', 'Sheet Receiver', '', '', '3302.00', 'Ea', '', 'K02', ''),
(735, 'MEG63147801', 'HOLDER LED', '', '', '2090.00', 'Ea', '', 'K02', ''),
(736, 'MDS63914701', 'Gasket', '', '', '1221.00', 'Ea', '', 'K02', ''),
(737, 'MHK63307902', 'Sheet Receiver', '', '', '3473.00', 'Ea', '', 'K02', ''),
(738, 'MCQ32325025', 'Rubber Foot', '', '', '48992.00', 'Ea', '', 'K02', ''),
(739, 'MEV63831501', 'Insulator', '', '', '500.00', 'Ea', '', 'K02', ''),
(740, '5410TKK001D', 'Insulator', '', '', '729.00', 'Ea', '', 'K02', ''),
(741, 'MCQ32325024', 'RUBBER FOOT', '', '', '2120.00', 'Ea', '', 'K02', ''),
(742, 'MHK63307907', 'SHEET', '', '', '1150.00', 'Ea', '', 'K02', ''),
(743, 'MEY62194101/MEY62675101', 'Knob', '', '', '875.00', 'Ea', '', 'K02', ''),
(744, 'MCV62813601', 'DUMMY DOOR', '', '', '144.00', 'Ea', '', 'K02', ''),
(745, 'MCK67394701', 'Cover R', '', '', '309.00', 'Ea', '', 'K02', ''),
(746, 'MCK67394801', 'Cover L', '', '', '357.00', 'Ea', '', 'K02', ''),
(747, 'MHK63939601', 'EMI GASKET', '', '', '1339.00', 'Ea', '', 'K02', ''),
(748, 'MEG62340301/AEJ73280101', 'Holder', '', '', '1195.00', 'Ea', '', 'K02', ''),
(749, 'MCQ67203001', 'Damper', '', '', '504.00', 'Ea', '', 'K02', ''),
(750, 'MAZ62333401', 'Bracket', '', '', '0.00', 'Ea', '', 'K02', ''),
(751, 'MEY61846102/MEY62194401', 'Knob', '', '', '2998.00', 'Ea', '', 'K02', ''),
(752, 'MEG62598701', 'HOLDER ANCHOR', '', '', '0.00', 'Ea', '', 'K02', ''),
(753, 'MEV64350802', 'SHEET INSULATION', '', '', '25.00', 'Ea', '', 'K02', ''),
(754, 'MEV64293002', 'INSULATOR SHEET', '', '', '78.00', 'Ea', '', 'K02', ''),
(755, 'MHK63445577', 'Sheet', '', '', '0.00', 'Ea', '', 'K02', ''),
(756, 'MHK66574001', 'Sheet', '', '', '0.00', 'Ea', '', 'K02', ''),
(757, 'MCQ67220101', 'Damper', '', '', '1650.00', 'Ea', '', 'K02', ''),
(758, 'MCQ32777521', 'CUSHION', '', '', '0.00', 'Ea', '', 'K02', ''),
(759, 'MHK64026001', 'D/Tape R', '', '', '685.00', 'Ea', '', 'K02', ''),
(760, 'MCQ67367201', 'Damper', '', '', '6867.00', 'Ea', '', 'K02', ''),
(761, '3ETA010005A-R', 'SEALING TAPE', '', '', '0.00', 'Ea', '', 'K02', ''),
(762, '3MBPCD0008A-R', 'TOP CASE ADAPTOR 48W', '', '', '0.00', 'Ea', '', 'K02', ''),
(763, '3NTPJM0001B-R', 'INSULATOR ADAPTOR 48W', '', '', '0.00', 'Ea', '', 'K02', ''),
(764, '3MBPCD0008B-R', 'BOTTOM CASE ADAPTOR 48W', '', '', '0.00', 'Ea', '', 'K02', ''),
(765, 'MCR64760201', 'Deco Rear AV', '', '', '250.00', 'Ea', '', 'K02', ''),
(766, 'MCR62527503', 'DECO REAR AV', '', '', '2106.00', 'Ea', '', 'K02', ''),
(767, 'MDS30602114', 'Gasket', '', '', '7034.00', 'Ea', '', 'K02', ''),
(768, 'MCR64760202', 'Deco Side AV', '', '', '100.00', 'Ea', '', 'K02', ''),
(769, 'MCR63998304', 'Decor', '', '', '97.00', 'Ea', '', 'K02', ''),
(770, 'OIC-0760J', 'Deco Plate', '', '', '5050.00', 'Ea', '', 'K02', ''),
(771, 'OIC-0760H', 'Deco Plate', '', '', '3500.00', 'Ea', '', 'K02', ''),
(772, 'OIC-0718L', 'Deco Plate', '', '', '1900.00', 'Ea', '', 'K02', ''),
(773, 'OIC-0718M', 'DECO PLATE', '', '', '1400.00', 'Ea', '', 'K02', ''),
(774, 'OIC-0749N', 'Deco Plate', '', '', '0.00', 'Ea', '', 'K02', ''),
(775, 'OIC-0718F', 'Deco Plate', '', '', '1162.00', 'Ea', '', 'K02', ''),
(776, 'OIC-0649N', 'Deco Plate', '', '', '3750.00', 'Ea', '', 'K02', ''),
(777, 'OIC-0750V', 'Deco Plate', '', '', '36.00', 'Ea', '', 'K02', ''),
(778, 'OIC-0617T', 'Deco Plate', '', '', '0.00', 'Ea', '', 'K02', ''),
(779, 'OIC-0721G', 'DECO PLATE', '', '', '0.00', 'Ea', '', 'K02', ''),
(780, 'OIC-0750G', 'Deco Plate', '', '', '200.00', 'Ea', '', 'K02', ''),
(781, 'OIC-0760D', 'Deco Plate', '', '', '10.00', 'Ea', '', 'K02', ''),
(782, 'OIC-0623D', 'Deco Plate', '', '', '311.00', 'Ea', '', 'K02', ''),
(783, 'OIC-0760B', 'DECO PLATE', '', '', '200.00', 'Ea', '', 'K02', ''),
(784, 'OIC-0724C', 'DECO PLATE', '', '', '125.00', 'Ea', '', 'K02', ''),
(785, 'OIC-0687Q', 'Deco Plate', '', '', '450.00', 'Ea', '', 'K02', ''),
(786, 'OIC-0770Z', 'Deco Plate', '', '', '389.00', 'Ea', '', 'K02', ''),
(787, 'OIC-0757H', 'Deco Plate', '', '', '35.00', 'Ea', '', 'K02', ''),
(788, 'OIC-0768G', 'Deco Plate', '', '', '0.00', 'Ea', '', 'K02', ''),
(789, 'OIC-0721D', 'Deco Plate', '', '', '0.00', 'Ea', '', 'K02', ''),
(790, 'OIC-0757B', 'Deco Plate', '', '', '17.00', 'Ea', '', 'K02', ''),
(791, 'OIC-0785D', 'DECO PLATE', '', '', '0.00', 'Ea', '', 'K02', ''),
(792, 'OIC-0726W', 'Deco Plate', '', '', '47.00', 'Ea', '', 'K02', ''),
(793, 'OIC-0784G', 'Deco Plate', '', '', '60.00', 'Ea', '', 'K02', ''),
(794, 'OIC-0718G', 'Deco Plate', '', '', '1324.00', 'Ea', '', 'K02', ''),
(795, 'OIC-0649B', 'Deco Plate', '', '', '45.00', 'Ea', '', 'K02', ''),
(796, 'OIC-0768F', 'Deco Plate', '', '', '500.00', 'Ea', '', 'K02', ''),
(797, 'OIC-0659L', 'DECO PLATE', '', '', '0.00', 'Ea', '', 'K02', ''),
(798, 'OIC-0750Z', 'Deco Plate', '', '', '250.00', 'Ea', '', 'K02', ''),
(799, 'OIC-0770Y', 'Deco Plate', '', '', '3425.00', 'Ea', '', 'K02', ''),
(800, 'OIC-0726S', 'Deco Plate', '', '', '0.00', 'Ea', '', 'K02', ''),
(801, 'OIC-0767W', 'Deco Plate', '', '', '1000.00', 'Ea', '', 'K02', ''),
(802, 'OIC-0726Q', 'Deco Plate', '', '', '930.00', 'Ea', '', 'K02', ''),
(803, 'OIC-0767D', 'Deco Plate', '', '', '800.00', 'Ea', '', 'K02', ''),
(804, 'OIC-0767F', 'Deco Plate', '', '', '500.00', 'Ea', '', 'K02', ''),
(805, 'OIC-0749R', 'Deco Plate', '', '', '2500.00', 'Ea', '', 'K02', ''),
(806, 'OIC-0659U', 'DECO PLATE', '', '', '13.00', 'Ea', '', 'K02', ''),
(807, 'OIC-0681E', 'DECO PLATE', '', '', '100.00', 'Ea', '', 'K02', ''),
(808, 'OIC-0687E', 'Deco Plate', '', '', '0.00', 'Ea', '', 'K02', ''),
(809, 'OIC-0721E', 'Deco Plate', '', '', '0.00', 'Ea', '', 'K02', ''),
(810, 'OIC-0687V', 'DECO PLATE', '', '', '20.00', 'Ea', '', 'K02', ''),
(811, 'OIC-0681A', 'Deco Plate', '', '', '150.00', 'Ea', '', 'K02', ''),
(812, 'OIC-0687H', 'Deco Plate', '', '', '0.00', 'Ea', '', 'K02', ''),
(813, 'OIC-0757U', 'Deco Plate', '', '', '100.00', 'Ea', '', 'K02', ''),
(814, 'OIC-0757E', 'Deco Plate', '', '', '30.00', 'Ea', '', 'K02', ''),
(815, 'OIC-0757P', 'Deco Plate', '', '', '0.00', 'Ea', '', 'K02', ''),
(816, 'OIC-0757C', 'Deco Plate', '', '', '300.00', 'Ea', '', 'K02', ''),
(817, 'OIC-0757N', 'Deco Plate', '', '', '0.00', 'Ea', '', 'K02', ''),
(818, 'OIC-0757T', 'DECO PLATE', '', '', '707.00', 'Ea', '', 'K02', ''),
(819, 'OIC-0750T', 'Deco Plate', '', '', '177.00', 'Ea', '', 'K02', ''),
(820, 'OIC-0723C', 'Deco Plate', '', '', '0.00', 'Ea', '', 'K02', ''),
(821, 'OIC-0784Y', 'DECO PLATE', '', '', '640.00', 'Ea', '', 'K02', ''),
(822, 'OIC-0785C', 'Deco Plate', '', '', '0.00', 'Ea', '', 'K02', ''),
(823, 'OIC-0475J', 'DECO PLATE', '', '', '1250.00', 'Ea', '', 'K02', ''),
(824, 'OIC-0757D', 'Deco Plate', '', '', '2300.00', 'Ea', '', 'K02', ''),
(825, 'OIC-0760C', 'Deco Plate', '', '', '360.00', 'Ea', '', 'K02', ''),
(826, 'OIC-0757L', 'Deco Plate', '', '', '300.00', 'Ea', '', 'K02', ''),
(827, 'OIC-0750B', 'Deco Plate', '', '', '800.00', 'Ea', '', 'K02', ''),
(828, 'OIC-0785E', 'DECO PLATE', '', '', '0.00', 'Ea', '', 'K02', ''),
(829, 'OIC-0726K', 'Deco Plate', '', '', '0.00', 'Ea', '', 'K02', ''),
(830, 'OIC-0749X', 'Deco Plate', '', '', '545.00', 'Ea', '', 'K02', ''),
(831, 'OIC-0743N', 'Deco Plate', '', '', '56.00', 'Ea', '', 'K02', ''),
(832, 'OIC-0784X', 'DECO PLATE', '', '', '0.00', 'Ea', '', 'K02', ''),
(833, 'OIC-0718N', 'Deco Plate', '', '', '0.00', 'Ea', '', 'K02', ''),
(834, 'OIC-0649E', 'DECO PLATE', '', '', '566.00', 'Ea', '', 'K02', ''),
(835, 'OIC-0743Q', 'Deco Plate', '', '', '0.00', 'Ea', '', 'K02', ''),
(836, 'OIC-0770X', 'Deco Plate', '', '', '0.00', 'Ea', '', 'K02', ''),
(837, 'OIC-0743L', 'Deco Plate', '', '', '0.00', 'Ea', '', 'K02', ''),
(838, 'OIC-0743R', 'Deco Plate', '', '', '70.00', 'Ea', '', 'K02', ''),
(839, 'OIC-0784W', 'DECO PLATE', '', '', '2030.00', 'Ea', '', 'K02', ''),
(840, 'OIC-0785B', 'Deco Plate', '', '', '800.00', 'Ea', '', 'K02', ''),
(841, 'OIC-0726P', 'Deco Plate', '', '', '0.00', 'Ea', '', 'K02', ''),
(842, 'OIC-0770V', 'Deco Plate', '', '', '0.00', 'Ea', '', 'K02', ''),
(843, 'OIC-0718P', 'Deco Plate', '', '', '400.00', 'Ea', '', 'K02', ''),
(844, 'OIC-0760A', 'Deco Plate', '', '', '0.00', 'Ea', '', 'K02', ''),
(845, 'OIC-0770W', 'Deco Plate', '', '', '180.00', 'Ea', '', 'K02', ''),
(846, 'OIC-0784H', 'Deco Plate', '', '', '47.00', 'Ea', '', 'K02', ''),
(847, 'MDP62508401', 'CUSHION', '', '', '28610.00', 'Ea', '', 'K02', ''),
(848, 'OIC-0743U', 'Deco Plate', '', '', '0.00', 'Ea', '', 'K02', ''),
(849, '1PZZR-0011B', 'Pin Heat Sink', '', '', '1.00', 'Ea', '', 'K02', ''),
(850, 'OIC-0721K', 'Deco Plate', '', '', '51.00', 'Ea', '', 'K02', ''),
(851, 'SPL12-2221', 'Deco Plate', '', '', '0.00', 'Ea', '', 'K02', ''),
(852, 'AKB73756504', 'DECOPLATE', '', '', '0.00', 'Ea', '', 'K02', ''),
(853, 'OIC-0768J', 'Deco Plate', '', '', '0.00', 'Ea', '', 'K02', ''),
(854, 'OIC-0768K', 'Deco Plate', '', '', '2030.00', 'Ea', '', 'K02', ''),
(855, 'OIC-0794A', 'Deco Plate', '', '', '80.00', 'Ea', '', 'K02', ''),
(856, 'OIC-0718R', 'Deco Plate', '', '', '925.00', 'Ea', '', 'K02', ''),
(857, 'OIC-0795G', 'Deco Plate', '', '', '0.00', 'Ea', '', 'K02', ''),
(858, 'OIC-0792T', 'Deco Plate', '', '', '0.00', 'Ea', '', 'K02', ''),
(859, 'OIC-0792R', 'Deco Plate', '', '', '128.00', 'Ea', '', 'K02', ''),
(860, 'SPL-0401', 'Deco Plate', '', '', '500.00', 'Ea', '', 'K02', ''),
(861, 'OIC-0792V', 'DECO PLATE', '', '', '0.00', 'Ea', '', 'K02', ''),
(862, 'OIC-0687C', 'Deco Plate', '', '', '50.00', 'Ea', '', 'K02', ''),
(863, 'AKB73275698', 'DECO PLATE', '', '', '1775.00', 'Ea', '', 'K02', ''),
(864, 'RKH0053-2H', 'HANDLE ', '', '', '679.00', 'Ea', '', 'K02', ''),
(865, 'RGUW0018-W', 'TIMER BUTTON', '', '', '2609.00', 'Ea', '', 'K02', ''),
(866, 'RGW0251-1H', 'VOLUME KNOB', '', '', '1200.00', 'Ea', '', 'K02', ''),
(867, 'RGV0174-1H', 'SLIDE KNOP', '', '', '855.00', 'Ea', '', 'K02', ''),
(868, 'RKS0043J-K2', 'BACK CABINET', '', '', '1172.00', 'Ea', '', 'K02', ''),
(869, 'RGKW0011-1S', 'GYRO FRONT CASE', '', '', '0.00', 'Ea', '', 'K02', ''),
(870, 'RGKW0012-1S', 'GYRO BACK CASE', '', '', '220.00', 'Ea', '', 'K02', ''),
(871, 'RKM0077-K4', 'TOP CAB', '', '', '80.00', 'Ea', '', 'K02', ''),
(872, 'RYKX0100A-K2', 'Front Panel PREP', '', '', '0.00', 'Ea', '', 'K02', ''),
(873, 'RGUW0019-W', 'SELECT BUTTON', '', '', '341.00', 'Ea', '', 'K02', ''),
(874, 'RGUW0019-S', 'SELECT BTTM', '', '', '45.00', 'Ea', '', 'K02', ''),
(875, 'RMVW0021', 'LED COVER', '', '', '130.00', 'Ea', '', 'K02', ''),
(876, 'RGZ0032-1H', 'MECHA BUTTON', '', '', '460.00', 'Ea', '', 'K02', ''),
(877, 'RGWW0008-W', 'TUNE KNOB', '', '', '235.00', 'Ea', '', 'K02', ''),
(878, 'RGWW0009-S', 'VOL KNOB', '', '', '686.00', 'Ea', '', 'K02', ''),
(879, 'RGWW0009-W', 'VOL KNOB', '', '', '115.00', 'Ea', '', 'K02', ''),
(880, 'RGUW0018-S', 'SLEEP BTTM', '', '', '694.00', 'Ea', '', 'K02', ''),
(881, 'RGUW0016-S', 'OPERATION BTTM', '', '', '805.00', 'Ea', '', 'K02', ''),
(882, 'RGUW0017-1W', 'POWER BUTTON', '', '', '1402.00', 'Ea', '', 'K02', ''),
(883, 'RMQN0011', 'SUPORT VC', '', '', '0.00', 'Ea', '', 'K02', ''),
(884, 'RGUW0017-W', 'POWER BUTTON', '', '', '327.00', 'Ea', '', 'K02', ''),
(885, 'RMKN0004-1K1', 'CHASIS', '', '', '192.00', 'Ea', '', 'K02', ''),
(886, 'RKF0483A-K', 'CASSET COVER', '', '', '0.00', 'Ea', '', 'K02', ''),
(887, 'RMKN0007', 'DIAL CHASSIS', '', '', '1705.00', 'Ea', '', 'K02', ''),
(888, 'RMNW0006-1', 'LCD HOLDER', '', '', '376.00', 'Ea', '', 'K02', ''),
(889, 'RKK310ZA-0', 'BATTERY COVER', '', '', '2669.00', 'Ea', '', 'K02', ''),
(890, 'RGX0005-K', 'VOLUME KNOB', '', '', '0.00', 'Ea', '', 'K02', ''),
(891, 'RKHX0005-K', 'HANDLE', '', '', '1086.00', 'Ea', '', 'K02', ''),
(892, 'RGW0251-H', 'VOLUME KNOB', '', '', '56.00', 'Ea', '', 'K02', ''),
(893, 'RKS0043L-K1', 'BACK CABINET', '', '', '76.00', 'Ea', '', 'K02', ''),
(894, 'RGKW0011-D', 'GYRO FRONT CASE', '', '', '454.00', 'Ea', '', 'K02', ''),
(895, 'RML0375', 'BAND LEVER', '', '', '1270.00', 'Ea', '', 'K02', ''),
(896, 'RKFX0056A-K3', 'CASS LID', '', '', '499.00', 'Ea', '', 'K02', ''),
(897, 'RKSX0027F-MK', 'BACK CABINET   ', '', '', '0.00', 'Ea', '', 'K02', ''),
(898, 'RGV0175-1H', 'TONE KNOP', '', '', '235.00', 'Ea', '', 'K02', ''),
(899, 'RMKN0006', 'DIAL CHASSIS', '', '', '76.00', 'Ea', '', 'K02', ''),
(900, 'RGWW0008-S', 'TUN KNOB', '', '', '0.00', 'Ea', '', 'K02', ''),
(901, 'RYKN0077-2', 'FRONT CAB', '', '', '95.00', 'Ea', '', 'K02', ''),
(902, 'RKM0077C-K4', 'TOP CAB', '', '', '85.00', 'Ea', '', 'K02', ''),
(903, 'RKMW0013-S', 'FRONT CAB', '', '', '193.00', 'Ea', '', 'K02', ''),
(904, 'RGX0025-K1', 'TUNING KNOB', '', '', '816.00', 'Ea', '', 'K02', ''),
(905, 'RGKW0009-S', 'FRONT PANEL', '', '', '1181.00', 'Ea', '', 'K02', ''),
(906, 'RGKW0012-S', 'GYRO BACK CASE', '', '', '129.00', 'Ea', '', 'K02', ''),
(907, 'RKK0012-2H2', 'BATTERY COVER', '', '', '265.00', 'Ea', '', 'K02', ''),
(908, 'RYKX0100-K1', 'Front Panel PREP', '', '', '1836.00', 'Ea', '', 'K02', ''),
(909, 'RGKW0011-S', 'GYRO FRONT CASE', '', '', '52.00', 'Ea', '', 'K02', ''),
(910, 'RKWW0015-W', 'LED LENS', '', '', '0.00', 'Ea', '', 'K02', ''),
(911, 'RDD414YC', 'DIAL DRUM', '', '', '4429.00', 'Ea', '', 'K02', ''),
(912, 'RKH0007-K1', 'HANDLE BAR', '', '', '711.00', 'Ea', '', 'K02', ''),
(913, 'RGZ0002-K1', 'MECHANICAL BUTTON', '', '', '170.00', 'Ea', '', 'K02', ''),
(914, 'RGJ0020-W', 'FELT SPEAKER', '', '', '0.00', 'Ea', '', 'K02', ''),
(915, 'RKF0090-Q1', 'CASS LID', '', '', '0.00', 'Ea', '', 'K02', ''),
(916, 'RKS0043M-K1', 'BACK CABINET', '', '', '96.00', 'Ea', '', 'K02', ''),
(917, 'RKK0012-1H3', 'BATTERY COVER', '', '', '0.00', 'Ea', '', 'K02', ''),
(918, 'RKF0483-1H', 'CASSETTE COVER', '', '', '218.00', 'Ea', '', 'K02', ''),
(919, 'RKKX0003-K1', 'BATTERY COVER', '', '', '307.00', 'Ea', '', 'K02', ''),
(920, 'RGV0175-H', 'TONE KNOP', '', '', '86.00', 'Ea', '', 'K02', ''),
(921, 'RYKN0078A-4M', 'BACK CABINET ASSMBLY', '', '', '3.00', 'Ea', '', 'K02', ''),
(922, 'RKSX0027A-2MK', 'BACK CABINET', '', '', '265.00', 'Ea', '', 'K02', ''),
(923, 'RKH0053-H1', 'HANDLE', '', '', '175.00', 'Ea', '', 'K02', ''),
(924, 'RGV0174-H', 'SLIDE KNOB', '', '', '0.00', 'Ea', '', 'K02', ''),
(925, 'RGZ0032-H', 'MECHA BUTTON', '', '', '1644.00', 'Ea', '', 'K02', ''),
(926, 'RGX0025-H1', 'TUNNING KNOB', '', '', '132.00', 'Ea', '', 'K02', ''),
(927, 'RMVN0091', 'SAFETY COVER', '', '', '0.00', 'Ea', '', 'K02', ''),
(928, 'RYKN0077A-3', 'FRONT CABINET', '', '', '4.00', 'Ea', '', 'K02', ''),
(929, 'RKFX0056A-K4', 'CASSETTE LID', '', '', '138.00', 'Ea', '', 'K02', ''),
(930, 'RKM0077D-K', 'TOP CAB', '', '', '242.00', 'Ea', '', 'K02', ''),
(931, 'RGC0021-K1', 'DIAL PLATE', '', '', '510.00', 'Ea', '', 'K02', ''),
(932, 'RDG0375-1', 'VC GEAR', '', '', '218.00', 'Ea', '', 'K02', ''),
(933, 'RMN0001-1', 'MIC HOLDER', '', '', '0.00', 'Ea', '', 'K02', ''),
(934, 'RKW0395-Q', 'Dial Panel', '', '', '897.00', 'Ea', '', 'K02', ''),
(935, 'RGV0176-K', 'B*P KNOB', '', '', '350.00', 'Ea', '', 'K02', ''),
(936, 'RMQN0022', 'BATTERY CUSHION', '', '', '180.00', 'Ea', '', 'K02', ''),
(937, 'RMQT0286', 'HEMELON', '', '', '190.00', 'Ea', '', 'K02', ''),
(938, 'RGPW0005', 'S/OUT LINE LAYER', '', '', '82.00', 'Ea', '', 'K02', ''),
(939, 'RHRW0003', 'BATTERY COVER GASKET', '', '', '0.00', 'Ea', '', 'K02', ''),
(940, 'RMZT-0042K', 'Back Sheet', '', '', '1670.00', 'Ea', '', 'K02', ''),
(941, 'D1509464A', 'SPEEDO DIAL', '', '', '340.00', 'Ea', '', 'K02', ''),
(942, 'D1510121A/XC604', 'Dial XC604', '', '', '0.00', 'Ea', '', 'K02', ''),
(943, '29961874299A/182858B001A', 'Spicer', '', '', '1172.00', 'Ea', '', 'K02', ''),
(944, 'D1500039A/X C601/0000009213P', 'Dial XC601 (Press)', '', '', '200.00', 'Ea', '', 'K02', ''),
(945, 'MCQ67125202', 'FELT', '', '', '8400.00', 'Ea', '', 'K02', ''),
(946, '0.5 X 15 X 443/443X5', 'BUJIKPO', '', '', '678979.00', 'Ea', '', 'K02', ''),
(947, '1AG2SAS5681--', 'SPACER CMOS FPC-SGM82', '', '', '250.00', 'Ea', '', 'K02', ''),
(948, '1AG2SAS5672--', 'SPACER', '', '', '9520.00', 'Ea', '', 'K02', ''),
(949, '1AG2SAX1753--', 'SPACER', '', '', '66885.00', 'Ea', '', 'K02', ''),
(950, '1AG2SAS5485A-', 'SPACER HL MONITOR', '', '', '1435.00', 'Ea', '', 'K02', ''),
(951, '1AG2SAS5563--', 'SPACER HEAT SINK LENS', '', '', '2713.00', 'Ea', '', 'K02', ''),
(952, '1AG2ADZ2663--', 'COVER BACK', '', '', '31874.00', 'Ea', '', 'K02', ''),
(953, '1AG2SAS5664--', 'SPACER STR', '', '', '420.00', 'Ea', '', 'K02', ''),
(954, '1AG2ADZ2614--', 'ADH HEAT SINK ', '', '', '13901.00', 'Ea', '', 'K02', ''),
(955, '1AG2ADZ2688--', 'ADH DEC FLASH', '', '', '100.00', 'Ea', '', 'K02', ''),
(956, '1AG2SAS4640--', 'S/POWER STR', '', '', '1500.00', 'Ea', '', 'K02', ''),
(957, '1AG2ADZ2541--', 'ADH BOTTOM BACK', '', '', '31500.00', 'Ea', '', 'K02', ''),
(958, '1AG2ADZ1654--', 'ADH CONDENCER', '', '', '111290.00', 'Ea', '', 'K02', ''),
(959, '1AG2ADZ2653B-', 'ADH LCD', '', '', '4940.00', 'Ea', '', 'K02', ''),
(960, '1AG2SAS5545--', 'SPACER LENS SIDE', '', '', '21880.00', 'Ea', '', 'K02', ''),
(961, '1AG2ADZ2527--', 'DEC GRIP', '', '', '29680.00', 'Ea', '', 'K02', ''),
(962, '1AG2SAS5665--', 'SPACER PW BUTTON', '', '', '1080.00', 'Ea', '', 'K02', ''),
(963, '1AG2ADZ2488--', 'ADH CONDENCER', '', '', '16325.00', 'Ea', '', 'K02', ''),
(964, '1AG2SAX1746--', 'SPACER HT SINK', '', '', '38068.00', 'Ea', '', 'K02', ''),
(965, '1AG2SAS5577--', 'SPACER CPI', '', '', '4000.00', 'Ea', '', 'K02', ''),
(966, '1AG2SAS5654--', 'SPACER BADGE', '', '', '58608.00', 'Ea', '', 'K02', ''),
(967, '1AG2SAX1745--', 'SPACER LINE', '', '', '6000.00', 'Ea', '', 'K02', ''),
(968, '1AG2SAS5573--', 'SPACER STR', '', '', '13656.00', 'Ea', '', 'K02', ''),
(969, '1AG2SAS5661--', 'SPACER', '', '', '4600.00', 'Ea', '', 'K02', ''),
(970, '1AG2SAX1650--', 'SPACER SHEEL', '', '', '6700.00', 'Ea', '', 'K02', ''),
(971, '1AG2ADZ2501A', 'ADH DEC BOTTOM', '', '', '31455.00', 'Ea', '', 'K02', ''),
(972, '1AG2SAS5541--', 'SPACER SPL-56782', '', '', '0.00', 'Ea', '', 'K02', ''),
(973, '1AG2ADZ2500--', 'ADH POWER WIFI', '', '', '5050.00', 'Ea', '', 'K02', ''),
(974, '1AG2SAS5556--', 'SPACER CP1-SG785', '', '', '6779.00', 'Ea', '', 'K02', ''),
(975, '2x8', 'Foot', '', '', '2000.00', 'Ea', '', 'K02', ''),
(976, '2240-00003', '10.8X2.5T', '', '', '1809.00', 'Ea', '', 'K02', ''),
(977, '2240-00005', '10.8X2.5T', '', '', '40980.00', 'Ea', '', 'K02', ''),
(978, 'GL81-00403A', 'A/S-INLAY_HR24', '', '', '0.00', 'Ea', '', 'K02', ''),
(979, '0203-001891', 'Tape Conductive', '', '', '49568.00', 'Ea', '', 'K02', ''),
(980, '15X70', 'ESORBA', '', '', '0.00', 'Ea', '', 'K02', ''),
(981, 'GA68-00090A', 'DSS Paper', '', '', '2.00', 'Ea', '', 'K02', ''),
(982, 'GL73-00039A', 'RMO-VFD PAD', '', '', '4072.00', 'Ea', '', 'K02', ''),
(983, 'GB69-00173A', 'WRAP VINYL-BASE PROTECT VINYL W4320', '', '', '1340.00', 'Ea', '', 'K02', ''),
(984, 'GB73-00146A', 'LED PAD CRADLE', '', '', '1918.00', 'Ea', '', 'K02', ''),
(985, 'GB72-00539A', 'PPR-LIGHTING FILM W4320', '', '', '0.00', 'Ea', '', 'K02', ''),
(986, 'GB72-00536A', 'PPR-DUMMY BOTTOM W4320', '', '', '5042.00', 'Ea', '', 'K02', ''),
(987, 'AH69-03226A', 'PAD Thermal', '', '', '907.00', 'Ea', '', 'K02', ''),
(988, 'GL81-00404A', 'A/S INLAY', '', '', '0.00', 'Ea', '', 'K02', ''),
(989, 'AH63-01947A', 'Cushion PCB', '', '', '310.00', 'Ea', '', 'K02', ''),
(990, 'GL61-00032A', 'FOOT-RUBBER', '', '', '7835.00', 'Ea', '', 'K02', ''),
(991, 'GB72-00537A', 'Dummy Stand', '', '', '2742.00', 'Ea', '', 'K02', ''),
(992, 'GB73-00109A', 'RMO Speaker Back Sponge W3150', '', '', '0.00', 'Ea', '', 'K02', ''),
(993, 'AH63-02184A', 'Sheet EMI', '', '', '840.00', 'Ea', '', 'K02', ''),
(994, 'GA68-00089A', 'Label (P) Index Paper DSS_14B', '', '', '0.00', 'Ea', '', 'K02', ''),
(995, 'GA68-00088A', 'DSS Paper', '', '', '0.00', 'Ea', '', 'K02', ''),
(996, 'AH63-02774B', 'SHEET-SMPS FRONT', '', '', '2037.00', 'Ea', '', 'K02', ''),
(997, 'MF63-00100A', 'Sheet Pallet', '', '', '319.00', 'Ea', '', 'K02', ''),
(998, 'GA68-00168C', 'Label (P) Index DSS-14', '', '', '0.00', 'Ea', '', 'K02', ''),
(999, 'GA68-00086A', 'Label (P) Index Paper DSS_18B', '', '', '0.00', 'Ea', '', 'K02', ''),
(1000, 'AH63-02774A', 'SHEET-SMPS ', '', '', '253.00', 'Ea', '', 'K02', ''),
(1001, 'GA68-00166C', 'Label (P) Index DSS 21-IAP', '', '', '0.00', 'Ea', '', 'K02', ''),
(1002, 'GL02-00009A', 'Double tape touch', '', '', '2380.00', 'Ea', '', 'K02', ''),
(1003, 'GA68-00418B', 'Label (P) Index DSS Paper 9', '', '', '760.00', 'Ea', '', 'K02', ''),
(1004, 'GA68-00085A', 'Label (P) Index DSS_28B', '', '', '0.00', 'Ea', '', 'K02', ''),
(1005, 'AH63-02773A', 'SHEET-VFD', '', '', '1056.00', 'Ea', '', 'K02', ''),
(1006, 'AH63-02776A', 'SHEET-MAIN', '', '', '335.00', 'Ea', '', 'K02', ''),
(1007, 'GL02-00016A', 'TAPE DOUBLE FACE-PBA', '', '', '28597.00', 'Ea', '', 'K02', ''),
(1008, 'GL63-00210A', 'COVER-LIGHT SHEET', '', '', '2005.00', 'Ea', '', 'K02', ''),
(1009, 'GL68-00352A', 'Label (P) Security H24 Direct TV', '', '', '0.00', 'Ea', '', 'K02', ''),
(1010, 'GB73-00112A', 'RMO Sponge PAD PCB W3150', '', '', '5470.00', 'Ea', '', 'K02', ''),
(1011, 'GL69-00179A', 'Wrap Vinyl Pallet Moisture Prevention', '', '', '1111.00', 'Ea', '', 'K02', ''),
(1012, 'GA68-00427A', 'Label (P) Name Sheet STA', '', '', '265.00', 'Ea', '', 'K02', ''),
(1013, 'AH63-02751A', 'SHEET-PCB', '', '', '3561.00', 'Ea', '', 'K02', ''),
(1014, 'GA72-00503A', 'PMO Name Sheet', '', '', '1968.00', 'Ea', '', 'K02', ''),
(1015, 'AH63-01537G', 'Filter VFD', '', '', '6125.00', 'Ea', '', 'K02', ''),
(1016, 'GL63-00085A', 'Filter VFD', '', '', '18760.00', 'Ea', '', 'K02', ''),
(1017, 'GB69-00127A', 'Wrap Vinyl Protect Vinyl Handy W6370', '', '', '1110.00', 'Ea', '', 'K02', ''),
(1018, 'AH63-01537D', 'Filter VFD', '', '', '1460.00', 'Ea', '', 'K02', ''),
(1019, 'GB73-00123A', 'RPR Speaker Back PAD W6370', '', '', '6250.00', 'Ea', '', 'K02', ''),
(1020, 'GL73-00032A', 'HDD Sponge', '', '', '0.00', 'Ea', '', 'K02', ''),
(1021, 'AH63-01537E', 'Filter VFD', '', '', '0.00', 'Ea', '', 'K02', ''),
(1022, 'GL72-00429A', 'PMO S Card SMT C5010', '', '', '72.00', 'Ea', '', 'K02', ''),
(1023, 'GL62-00023A', 'PAD Thermal', '', '', '0.00', 'Ea', '', 'K02', ''),
(1024, 'GL63-00013A', 'Shield EMI Gasket', '', '', '6620.00', 'Ea', '', 'K02', ''),
(1025, 'GL73-00037A', 'RMO Thermal PAD', '', '', '5705.00', 'Ea', '', 'K02', ''),
(1026, 'AH63-02257C', 'FILTER-VFD', '', '', '1950.00', 'Ea', '', 'K02', ''),
(1027, 'AK69-01028A', 'PAD RUBBER', '', '', '0.00', 'Ea', '', 'K02', ''),
(1028, 'AK63-00864A', 'SHEET-CONDUCTANCE', '', '', '6760.00', 'Ea', '', 'K02', ''),
(1029, 'AH63-03376A', 'S/ PROTECTION USB', '', '', '6624.00', 'Ea', '', 'K02', ''),
(1030, 'AK63-00981A', 'SHEET INSULATOR', '', '', '5.00', 'Ea', '', 'K02', ''),
(1031, 'AK63-00979A', 'Insulation Sheet', '', '', '500.00', 'Ea', '', 'K02', ''),
(1032, 'AK63-00983A', 'TAPE TOUCH', '', '', '0.00', 'Ea', '', 'K02', ''),
(1033, 'AK63-00980A', 'Insulator', '', '', '0.00', 'Ea', '', 'K02', ''),
(1034, 'GA72-00522A/GC72-001187A', 'Screw Hold D', '', '', '0.00', 'Ea', '', 'K02', ''),
(1035, 'AK63-00997A', 'SHEET POWER', '', '', '3385.00', 'Ea', '', 'K02', ''),
(1036, 'GB73-00104A', 'RMO Speak PAD', '', '', '480.00', 'Ea', '', 'K02', ''),
(1037, 'MCR62200810', 'Side AV Decor  ', '', '', '190.00', 'Ea', '', 'K02', ''),
(1038, 'MCR62200805', 'DECO SIDE AV', '', '', '120.00', 'Ea', '', 'K02', ''),
(1039, 'MBG64103104/1', 'Power Knob', '', '', '1362.00', 'Ea', '', 'K02', ''),
(1040, 'APG47100-838A', 'Insulation Sheet ', '', '', '300.00', 'Ea', '', 'K02', ''),
(1041, '34319316', 'APG-47100-838-4', '', '', '4640.00', 'Ea', '', 'K02', ''),
(1042, 'GL72-00541A', 'PPR Insulator', '', '', '0.00', 'Ea', '', 'K02', ''),
(1043, 'AK63-00805A', 'Sheet Protection Front', '', '', '47.00', 'Ea', '', 'K02', ''),
(1044, 'GL63-00199A', 'PROTECTOR VINYL TOP', '', '', '0.00', 'Ea', '', 'K02', ''),
(1045, 'GL72-00483A', 'Insulation Sheet', '', '', '0.00', 'Ea', '', 'K02', ''),
(1046, 'GL63-00183A', 'PROTECT VINYL TOP', '', '', '0.00', 'Ea', '', 'K02', ''),
(1047, 'GL69-00329A', 'Protect Vinyl Window', '', '', '0.00', 'Ea', '', 'K02', ''),
(1048, 'GL69-00328A', 'Protect Vinyl Top', '', '', '0.00', 'Ea', '', 'K02', ''),
(1049, 'AK63-00838H', 'Sheet Protection Top', '', '', '0.00', 'Ea', '', 'K02', ''),
(1050, 'AK63-00838E', 'Sheet Protection Top', '', '', '0.00', 'Ea', '', 'K02', ''),
(1051, 'GL63-00109A', 'Protect Vinyl Top', '', '', '0.00', 'Ea', '', 'K02', ''),
(1052, 'AK63-00838L', 'Sheet Protection Top', '', '', '0.00', 'Ea', '', 'K02', ''),
(1053, 'GL63-00153A', 'INLAY', '', '', '1200.00', 'Ea', '', 'K02', ''),
(1054, 'GL63-00184A', 'PROTECT VINYL REAR', '', '', '0.00', 'Ea', '', 'K02', ''),
(1055, 'GL73-00027A', 'Cushion HDD Bracket', '', '', '240.00', 'Ea', '', 'K02', ''),
(1056, 'MF62-00031A', 'Sheet Insulation', '', '', '82.00', 'Ea', '', 'K02', ''),
(1057, 'GL63-00087A', 'LED Protector', '', '', '4560.00', 'Ea', '', 'K02', ''),
(1058, 'AH63-02605B', 'Sheet Insulator', '', '', '0.00', 'Ea', '', 'K02', ''),
(1059, 'AH63-02605A', 'Sheet Insulator', '', '', '132.00', 'Ea', '', 'K02', ''),
(1060, 'GL63-00086A', 'Protect Vinyl Top Cover', '', '', '3215.00', 'Ea', '', 'K02', ''),
(1061, 'GL63-00120A', 'Sheet Protection', '', '', '0.00', 'Ea', '', 'K02', ''),
(1062, 'GL69-00409A', 'Thermal PAD', '', '', '0.00', 'Ea', '', 'K02', ''),
(1063, 'GL63-00172A', 'PROTECTOR VINYL', '', '', '0.00', 'Ea', '', 'K02', ''),
(1064, 'GL63-00125A', 'FRONT FOOT FILM', '', '', '0.00', 'Ea', '', 'K02', ''),
(1065, 'AH63-02894A', 'Sheet Bottom', '', '', '90.00', 'Ea', '', 'K02', ''),
(1066, 'GL63-00084A', 'Diffuser Sheet 4P', '', '', '400.00', 'Ea', '', 'K02', ''),
(1067, 'GL63-00083A', 'Diffuser Sheet 3P', '', '', '0.00', 'Ea', '', 'K02', ''),
(1068, 'GL63-00035A', 'Inlay', '', '', '0.00', 'Ea', '', 'K02', ''),
(1069, 'GL69-00418A', 'Wrap Protect Vinyl Top', '', '', '0.00', 'Ea', '', 'K02', ''),
(1070, 'GL69-00480A', 'Thermal PAD Tape', '', '', '0.00', 'Ea', '', 'K02', ''),
(1071, 'GL69-00277A', 'Protective Vinyl', '', '', '441.00', 'Ea', '', 'K02', ''),
(1072, 'AK73-00083A', 'Cushion Foot', '', '', '16660.00', 'Ea', '', 'K02', ''),
(1073, 'AK63-00982A', 'SHEET POWER', '', '', '6.00', 'Ea', '', 'K02', ''),
(1074, 'AH63-02605J', 'SHEET INSULATOR', '', '', '6.00', 'Ea', '', 'K02', ''),
(1075, 'AK63-00994A', 'SHEET PROTECTION REAR', '', '', '0.00', 'Ea', '', 'K02', ''),
(1076, 'AK63-00948A', 'SHEET POWER', '', '', '1500.00', 'Ea', '', 'K02', ''),
(1077, 'AH61-00015B', 'Sheet Bottom', '', '', '104.00', 'Ea', '', 'K02', ''),
(1078, 'AH63-02605L', 'SHEET INSULATOR', '', '', '0.00', 'Ea', '', 'K02', ''),
(1079, 'AK63-01008A', 'S/PROTECTION', '', '', '0.00', 'Ea', '', 'K02', ''),
(1080, 'AH63-02893A', 'SHEET SIDE JACK', '', '', '0.00', 'Ea', '', 'K02', ''),
(1081, 'GL63-00227A', 'SHEET COVER LIGT', '', '', '0.00', 'Ea', '', 'K02', ''),
(1082, 'MEG62520701', 'Holder LED', '', '', '180.00', 'Ea', '', 'K02', ''),
(1083, '4766R-0043P', 'Felt', '', '', '560.00', 'Ea', '', 'K02', ''),
(1084, 'MCQ40908801', 'Cushion Hinge', '', '', '0.00', 'Ea', '', 'K02', ''),
(1085, 'MCQ65164524', 'Damper Batray', '', '', '400.00', 'Ea', '', 'K02', ''),
(1086, '10 MMX50 M', 'DOUBLE TAPE SP820', '', '', '0.00', 'Ea', '', 'K02', ''),
(1087, 'MHK63949601', 'SHEET PROTECTION', '', '', '0.00', 'Ea', '', 'K02', ''),
(1088, 'MKC42309702', 'COVER DECO BAR', '', '', '31.00', 'Ea', '', 'K02', ''),
(1089, 'MKC40828901', 'Window Filter', '', '', '0.00', 'Ea', '', 'K02', ''),
(1090, 'MCQ67127804', 'DAMPER SUPORTER FRONT', '', '', '330.00', 'Ea', '', 'K02', ''),
(1091, 'MCQ65164525', 'Damper left n Right', '', '', '100.00', 'Ea', '', 'K02', ''),
(1092, 'MKC40387601', 'Plate Filter', '', '', '0.00', 'Ea', '', 'K02', ''),
(1093, 'MCK62844401', 'Cover Stoper', '', '', '0.00', 'Ea', '', 'K02', ''),
(1094, 'MHK63866101', 'SHEET GRAPHENE', '', '', '3450.00', 'Ea', '', 'K02', ''),
(1095, 'MCQ67035701', 'DAMPER HOLDER BATTERY', '', '', '0.00', 'Ea', '', 'K02', ''),
(1096, 'MEG62999101', 'HOLDER DOOR', '', '', '0.00', 'Ea', '', 'K02', ''),
(1097, 'MGJ63387403', 'DOUBLE TAPE', '', '', '0.00', 'Ea', '', 'K02', ''),
(1098, 'MGJ63387404', 'DOUBLE TAPE', '', '', '0.00', 'Ea', '', 'K02', ''),
(1099, 'MGJ63387401', 'DOUBLE TAPE', '', '', '3.00', 'Ea', '', 'K02', ''),
(1100, 'MGJ63387402', 'DOUBLE TAPE', '', '', '0.00', 'Ea', '', 'K02', ''),
(1101, 'MHK63935601', 'S/DOUBLE TAPE', '', '', '350.00', 'Ea', '', 'K02', ''),
(1102, 'MHK63938201', 'SHEET REMOCON', '', '', '6257.00', 'Ea', '', 'K02', ''),
(1103, 'MGJ59342101', 'Window Filter', '', '', '0.00', 'Ea', '', 'K02', ''),
(1104, 'MHK63006906', 'SHEET FUNCTION', '', '', '70.00', 'Ea', '', 'K02', ''),
(1105, 'MHK63765303', 'sheet protection', '', '', '0.00', 'Ea', '', 'K02', ''),
(1106, 'MHK63765302', 'sheet protection', '', '', '0.00', 'Ea', '', 'K02', ''),
(1107, 'MCQ67197801', 'CHUSION NAVIGATION', '', '', '0.00', 'Ea', '', 'K02', ''),
(1108, 'MHK63948601', 'SHEET REMOCON', '', '', '3000.00', 'Ea', '', 'K02', ''),
(1109, 'MHK63727903', 'SHEET PROTECTION', '', '', '139.00', 'Ea', '', 'K02', ''),
(1110, 'MHK63947801', 'SHEET FILTER', '', '', '500.00', 'Ea', '', 'K02', ''),
(1111, 'MHK63307705', 'SHEET PROTECTION', '', '', '300.00', 'Ea', '', 'K02', ''),
(1112, 'MHK63727904', 'SHEET PROTECTION', '', '', '138.00', 'Ea', '', 'K02', ''),
(1113, 'MHK63954701', 'SHEET LENS', '', '', '100.00', 'Ea', '', 'K02', ''),
(1114, 'MCQ67035703', 'DAMPER', '', '', '615.00', 'Ea', '', 'K02', ''),
(1115, 'MBG64530501', 'BOTTOM POWER', '', '', '784.00', 'Ea', '', 'K02', ''),
(1116, 'MCQ65164527', 'Dumper duch', '', '', '200.00', 'Ea', '', 'K02', ''),
(1117, 'MCQ67005601', 'DAMPER REAR', '', '', '0.00', 'Ea', '', 'K02', ''),
(1118, 'MCK66037501', 'DOUBLE TAPE TOP', '', '', '0.00', 'Ea', '', 'K02', ''),
(1119, 'MCQ67035702', 'DAMPER COVER BATTERY', '', '', '0.00', 'Ea', '', 'K02', ''),
(1120, 'MCQ65164526', 'Damper Front', '', '', '0.00', 'Ea', '', 'K02', ''),
(1121, 'MHK61918601', 'SHEET FL', '', '', '350.00', 'Ea', '', 'K02', ''),
(1122, 'MCQ67127802', 'Damper Suporter front', '', '', '0.00', 'Ea', '', 'K02', ''),
(1123, 'MBG64569501', 'BOTTON CLOCK', '', '', '0.00', 'Ea', '', 'K02', ''),
(1124, 'MGJ53270801', 'PLATE BADGE LG', '', '', '0.00', 'Ea', '', 'K02', ''),
(1125, 'MHK63745801', 'Sheet FL', '', '', '100.00', 'Ea', '', 'K02', ''),
(1126, 'MCQ65164516', 'EVA FELT', '', '', '45.00', 'Ea', '', 'K02', ''),
(1127, 'MCQ63107001', 'Damper', '', '', '0.00', 'Ea', '', 'K02', ''),
(1128, 'MCQ65164502', 'EVA FELT', '', '', '0.00', 'Ea', '', 'K02', ''),
(1129, 'MCQ65164518', 'EVA FELT', '', '', '0.00', 'Ea', '', 'K02', ''),
(1130, 'MHK63765301', 'SHEET PROTECTION', '', '', '0.00', 'Ea', '', 'K02', ''),
(1131, 'MCQ65164513', 'EVA FELT', '', '', '0.00', 'Ea', '', 'K02', ''),
(1132, 'MHK63685501', 'Sheet FL', '', '', '0.00', 'Ea', '', 'K02', ''),
(1133, 'MHK63705301', 'SHEET TOUCH', '', '', '0.00', 'Ea', '', 'K02', ''),
(1134, 'MGJ62325601', '3D INLET BADGE ', '', '', '0.00', 'Ea', '', 'K02', ''),
(1135, 'MGJ63523402', 'SHEET FILTER', '', '', '0.00', 'Ea', '', 'K02', ''),
(1136, 'MGJ63573401', 'PLATE FILTER', '', '', '0.00', 'Ea', '', 'K02', ''),
(1137, 'MEZ64851001', 'LABEL TAPE LIGHTING', '', '', '0.00', 'Ea', '', 'K02', ''),
(1138, 'MEZ64851101', 'LABEL TAPE TOUCH', '', '', '0.00', 'Ea', '', 'K02', ''),
(1139, 'MHK64025501', 'SHEET FILTER', '', '', '356.00', 'Ea', '', 'K02', ''),
(1140, 'MCK62299502/AGL72944339', 'Window Display', '', '', '32.00', 'Ea', '', 'K02', ''),
(1141, 'MDS62491009', 'GASKET', '', '', '400.00', 'Ea', '', 'K02', ''),
(1142, 'MHK63566504', 'DOUBLE TAPE', '', '', '200.00', 'Ea', '', 'K02', ''),
(1143, 'MCQ67367001', 'DAMPER CABLE', '', '', '2448.00', 'Ea', '', 'K02', ''),
(1144, 'MCQ67238301', 'DAMPER POWER', '', '', '2470.00', 'Ea', '', 'K02', ''),
(1145, 'MCQ67220102', 'DAMPER ', '', '', '9700.00', 'Ea', '', 'K02', ''),
(1146, 'MHK64086901', 'BATTOM SHEET', '', '', '82.00', 'Ea', '', 'K02', ''),
(1147, 'MCQ62705013', 'D/ MD TOP', '', '', '230.00', 'Ea', '', 'K02', ''),
(1148, 'MDS62491010', 'GASKET', '', '', '6.00', 'Ea', '', 'K02', ''),
(1149, 'MKC66037401', 'Double Tape Door In', '', '', '0.00', 'Ea', '', 'K02', ''),
(1150, 'MCK66691301', 'Double Tape Door In', '', '', '0.00', 'Ea', '', 'K02', ''),
(1151, 'MHK63754301', 'SHEET PROTEC D DVD', '', '', '347.00', 'Ea', '', 'K02', ''),
(1152, '47.7 X 606.5', 'Sheet protection', '', '', '1049.00', 'Ea', '', 'K02', ''),
(1153, '531.5X47.7', 'Sheet', '', '', '35.00', 'Ea', '', 'K02', ''),
(1154, 'MKC57639201-R', 'DOUBLE TAPE R', '', '', '0.00', 'Ea', '', 'K02', ''),
(1155, 'MKC57639201-L', 'DOUBLE TAPE L', '', '', '0.00', 'Ea', '', 'K02', ''),
(1156, '637 X 47.7', 'Sheet protection', '', '', '0.00', 'Ea', '', 'K02', ''),
(1157, 'MHK63791902', 'PROTECT DOOR DVD BH6520', '', '', '2370.00', 'Ea', '', 'K02', ''),
(1158, 'MCK62680801', 'TAPE WINDOW COVER', '', '', '0.00', 'Ea', '', 'K02', ''),
(1159, 'MCR62220612', 'Deco Side AV', '', '', '80.00', 'Ea', '', 'K02', ''),
(1160, 'GL72-00499A', 'Tom Deco Tape', '', '', '870.00', 'Ea', '', 'K02', ''),
(1161, 'MKC57657801', 'DOUBLE TAPE', '', '', '0.00', 'Ea', '', 'K02', ''),
(1162, 'MKC40787601', 'Double Tape', '', '', '5380.00', 'Ea', '', 'K02', ''),
(1163, 'GL73-00049A', 'Tape Touch PCB', '', '', '3049.00', 'Ea', '', 'K02', ''),
(1164, 'AK63-00611A', 'SHEET WINDOW', '', '', '2074.00', 'Ea', '', 'K02', ''),
(1165, 'AH63-02257A', 'FILTER FVD', '', '', '500.00', 'Ea', '', 'K02', ''),
(1166, 'AK63-00772A', 'SHEET FILTER', '', '', '435.00', 'Ea', '', 'K02', ''),
(1167, 'GL72-00507A', 'VFD FILTER', '', '', '0.00', 'Ea', '', 'K02', ''),
(1168, 'AK63-00927A', 'Sheet Power', '', '', '1260.00', 'Ea', '', 'K02', ''),
(1169, 'AK63-00926A', 'TAPE TOUCH', '', '', '480.00', 'Ea', '', 'K02', ''),
(1170, 'AH63-01537C', 'Filter VFD', '', '', '245.00', 'Ea', '', 'K02', ''),
(1171, 'GL69-00558A', 'Protect Film LCD 5220', '', '', '740.00', 'Ea', '', 'K02', ''),
(1172, '74.8 X 38.8', 'TAPE WINDOW LCD', '', '', '100.00', 'Ea', '', 'K02', ''),
(1173, 'GA68-11181A', 'LABEL P NUMBERING', '', '', '89.00', 'Ea', '', 'K02', ''),
(1174, 'GA72-00011A', 'Paper EURO', '', '', '1000.00', 'Ea', '', 'K02', ''),
(1175, 'GA72-10561A', 'LCD Window', '', '', '39.00', 'Ea', '', 'K02', ''),
(1176, 'GA68-00168D', 'DSS Paper', '', '', '515.00', 'Ea', '', 'K02', ''),
(1177, 'GA68-00103A', 'Label Index Paper', '', '', '0.00', 'Ea', '', 'K02', ''),
(1178, 'GA68-00167B', 'LABEL(P)-INDEX DSS PAPER-17', '', '', '1700.00', 'Ea', '', 'K02', ''),
(1179, 'GA69-00037A', 'PROTECTIVE VINYL', '', '', '0.00', 'Ea', '', 'K02', ''),
(1180, 'GA68-00166A', 'DSS Paper', '', '', '220.00', 'Ea', '', 'K02', ''),
(1181, 'GB72-00538A', 'LED Sheet Base', '', '', '0.00', 'Ea', '', 'K02', ''),
(1182, 'GB73-00145A', 'Rubber Foot STAND', '', '', '0.00', 'Ea', '', 'K02', ''),
(1183, 'GA68-00104A', 'DSS Paper 8', '', '', '58.00', 'Ea', '', 'K02', ''),
(1184, 'GA68-00166D', 'Label (P) Index DS5021D', '', '', '199.00', 'Ea', '', 'K02', ''),
(1185, 'GA68-00166E', 'Label (P) Index DSS21 ', '', '', '0.00', 'Ea', '', 'K02', ''),
(1186, 'GB73-00135A', 'MIC PAD ', '', '', '31.00', 'Ea', '', 'K02', ''),
(1187, 'GA68-11671B', 'Paper Telp.', '', '', '0.00', 'Ea', '', 'K02', ''),
(1188, 'GA68-00168E', 'LABEL ( P ) INDEX DSS PAPER-14', '', '', '0.00', 'Ea', '', 'K02', ''),
(1189, 'GA72-00207B', 'LCD Window', '', '', '2400.00', 'Ea', '', 'K02', ''),
(1190, 'GA69-00017A', 'Cushion PAD', '', '', '2540.00', 'Ea', '', 'K02', ''),
(1191, 'GA68-11671A', 'Label (P) Name Paper', '', '', '0.00', 'Ea', '', 'K02', ''),
(1192, 'GA72-00207A', 'LCD Window', '', '', '0.00', 'Ea', '', 'K02', ''),
(1193, 'GA72-00083A', 'PMO DSS Cover 16 ', '', '', '0.00', 'Ea', '', 'K02', ''),
(1194, 'GA68-00168A', 'DSS Paper', '', '', '500.00', 'Ea', '', 'K02', ''),
(1195, 'GA72-00075A', 'LCD Window', '', '', '0.00', 'Ea', '', 'K02', ''),
(1196, 'GA68-00191A', 'DSS Paper', '', '', '0.00', 'Ea', '', 'K02', ''),
(1197, 'GA68-00191C', 'Label (P) Index DSS Paper', '', '', '100.00', 'Ea', '', 'K02', ''),
(1198, 'GA72-00248A', 'DSS Cover 14 ', '', '', '262.00', 'Ea', '', 'K02', ''),
(1199, 'GA68-00087A', 'Paper Function', '', '', '0.00', 'Ea', '', 'K02', ''),
(1200, 'GA68-00085B', 'Label Index', '', '', '0.00', 'Ea', '', 'K02', ''),
(1201, 'GL63-00041A', 'Sponge LED Fence', '', '', '1260.00', 'Ea', '', 'K02', ''),
(1202, 'GA68-00190C', 'LABEL(P)-INDEX DSS-PAPER 5014S', '', '', '0.00', 'Ea', '', 'K02', ''),
(1203, 'GA69-30559A', 'Wrap Vinyl Protection', '', '', '370.00', 'Ea', '', 'K02', ''),
(1204, 'GB63-00013A', 'COVER-LCD WINDOW 5007S', '', '', '0.00', 'Ea', '', 'K02', ''),
(1205, 'GA68-00190A', 'Label (P) Index DSS-DS5014S', '', '', '1180.00', 'Ea', '', 'K02', ''),
(1206, 'GA68-00167A', 'DSS Paper', '', '', '770.00', 'Ea', '', 'K02', ''),
(1207, 'GA73-00098A', 'CUSHION PAD LCD', '', '', '0.00', 'Ea', '', 'K02', ''),
(1208, 'GA72-00249A', 'DSS Paper', '', '', '0.00', 'Ea', '', 'K02', ''),
(1209, 'GC72-01198A', 'Sponge LCD UCS', '', '', '0.00', 'Ea', '', 'K02', ''),
(1210, 'GB73-00088A', 'LCD PAD ', '', '', '100.00', 'Ea', '', 'K02', ''),
(1211, 'DIAMETER 48.8', 'Tape Mode Deco Key', '', '', '0.00', 'Ea', '', 'K02', ''),
(1212, 'GB73-00113A', 'MIC PAD', '', '', '0.00', 'Ea', '', 'K02', ''),
(1213, 'GB72-00364A', 'DSS NAME COVER', '', '', '0.00', 'Ea', '', 'K02', ''),
(1214, 'GA73-00012A', 'LCD Anti PAD', '', '', '350.00', 'Ea', '', 'K02', ''),
(1215, 'GA68-00087B', 'Paper Function', '', '', '6000.00', 'Ea', '', 'K02', ''),
(1216, 'DIAMETER 32.8', 'Tape Wheel Key Inner', '', '', '0.00', 'Ea', '', 'K02', ''),
(1217, 'GA72-10640A', 'PPR Num. Cover', '', '', '0.00', 'Ea', '', 'K02', ''),
(1218, 'GA72-00526A', 'DSS Name Paper', '', '', '0.00', 'Ea', '', 'K02', ''),
(1219, 'GA72-00074A', 'LCD Window', '', '', '0.00', 'Ea', '', 'K02', ''),
(1220, 'GL69-00131A', 'Wrap Vinyl Window Protective', '', '', '70.00', 'Ea', '', 'K02', ''),
(1221, 'GL72-00552A', 'Front LED Sheet', '', '', '2250.00', 'Ea', '', 'K02', ''),
(1222, 'GB73-00108A', 'BACK ANTENA PAD', '', '', '0.00', 'Ea', '', 'K02', ''),
(1223, 'GB69-00120A', 'SHEET PROTECT', '', '', '0.00', 'Ea', '', 'K02', ''),
(1224, 'GB68-00163A', 'DSS Name Paper', '', '', '190.00', 'Ea', '', 'K02', ''),
(1225, 'GA73-00100A', 'LCD Bracket PAD', '', '', '0.00', 'Ea', '', 'K02', ''),
(1226, 'GL69-00365A', 'Protective Vinyl Window', '', '', '0.00', 'Ea', '', 'K02', ''),
(1227, 'GB73-00114A', 'Shield CAN PAD', '', '', '1000.00', 'Ea', '', 'K02', ''),
(1228, 'GA73-00099A', 'Speaker PAD', '', '', '0.00', 'Ea', '', 'K02', ''),
(1229, 'GB73-00120A', 'Sponge Shield CAN', '', '', '0.00', 'Ea', '', 'K02', ''),
(1230, 'GB73-00111A', 'Cushion PAD Receiver', '', '', '0.00', 'Ea', '', 'K02', ''),
(1231, 'GB73-00119A', 'LCD Poron PAD', '', '', '0.00', 'Ea', '', 'K02', ''),
(1232, '67.90X38.52', 'TAPE WINDOW LCD', '', '', '0.00', 'Ea', '', 'K02', ''),
(1233, 'GB73-00121A', 'Cushion PAD Receiver', '', '', '0.00', 'Ea', '', 'K02', ''),
(1234, 'GB73-00107A', 'Speaker front pad', '', '', '0.00', 'Ea', '', 'K02', ''),
(1235, 'GB68-00163A/GA68-00163A', 'DSS Name Paper', '', '', '190.00', 'Ea', '', 'K02', ''),
(1236, '40X55', 'TAPE WINDOW LCD', '', '', '276.00', 'Ea', '', 'K02', ''),
(1237, '6x10', 'MASKING TAPE', '', '', '0.00', 'Ea', '', 'K02', ''),
(1238, '73.9X43.4', 'TAPE LCD WINDOW', '', '', '685.00', 'Ea', '', 'K02', ''),
(1239, 'AK64-01847D', 'Inlay Sheet Remocon', '', '', '1670.00', 'Ea', '', 'K02', ''),
(1240, 'GL69-00391A', 'Vinyl Window', '', '', '483.00', 'Ea', '', 'K02', ''),
(1241, 'GL69-00391B', 'Vinyl Front', '', '', '200.00', 'Ea', '', 'K02', ''),
(1242, 'AK63-00805C', 'Sheet Protection Door', '', '', '410.00', 'Ea', '', 'K02', ''),
(1243, 'AK63-00838F', 'SHEET PROTECTION DOOR', '', '', '1.00', 'Ea', '', 'K02', ''),
(1244, 'AA64-04662A', 'INLAY AV BLANK', '', '', '1715.00', 'Ea', '', 'K02', ''),
(1245, 'AA64-04648A', 'Inlay AV', '', '', '770.00', 'Ea', '', 'K02', ''),
(1246, 'AK63-00805E', 'Sheet Protection Side L', '', '', '630.00', 'Ea', '', 'K02', ''),
(1247, 'GL69-00325A', 'Protective Vinyl', '', '', '0.00', 'Ea', '', 'K02', ''),
(1248, 'GL69-00320A', 'Front Window Vinyl', '', '', '195.00', 'Ea', '', 'K02', ''),
(1249, 'AK63-00696B', 'SHEET PROTECTION', '', '', '90.00', 'Ea', '', 'K02', ''),
(1250, 'AK63-00696E', 'PROTECTION SHEET FRONT', '', '', '100.00', 'Ea', '', 'K02', ''),
(1251, 'AK63-00838D', 'SHEET PROTECTION SIDE', '', '', '0.00', 'Ea', '', 'K02', ''),
(1252, 'AK63-00838M', 'SHEET PROTECTION TOP', '', '', '0.00', 'Ea', '', 'K02', ''),
(1253, 'BN64-02022C', 'Inlay Terminal', '', '', '48.00', 'Ea', '', 'K02', ''),
(1254, 'AH63-02707A', 'Sheet Protection Front', '', '', '0.00', 'Ea', '', 'K02', ''),
(1255, 'BN64-01951A', 'Inlay Terminal', '', '', '0.00', 'Ea', '', 'K02', ''),
(1256, 'BN64-01950A', 'Inlay Terminal', '', '', '0.00', 'Ea', '', 'K02', ''),
(1257, 'AH63-02718A', 'Sheet Protection Front', '', '', '175.00', 'Ea', '', 'K02', ''),
(1258, 'AK63-00838P', 'Sheet Protection Bottom', '', '', '0.00', 'Ea', '', 'K02', ''),
(1259, 'BN63-07556T', 'Cover Sheet Touch', '', '', '0.00', 'Ea', '', 'K02', ''),
(1260, 'BN63-07556W', 'Cover Sheet Led', '', '', '0.00', 'Ea', '', 'K02', ''),
(1261, 'GL72-00335A', 'Power Plate Light', '', '', '400.00', 'Ea', '', 'K02', ''),
(1262, 'GL68-00318A', 'Label Light Shielding', '', '', '981.00', 'Ea', '', 'K02', ''),
(1263, 'GL72-00336A', 'Select Plate Light', '', '', '1000.00', 'Ea', '', 'K02', ''),
(1264, 'GL72-00334A', 'Window USB', '', '', '0.00', 'Ea', '', 'K02', ''),
(1265, 'GL72-00332A', 'Front Window', '', '', '0.00', 'Ea', '', 'K02', ''),
(1266, 'GL63-00042A', 'LED Sheet', '', '', '5000.00', 'Ea', '', 'K02', ''),
(1267, 'GL64-00057A', 'SMART WINDOW', '', '', '0.00', 'Ea', '', 'K02', ''),
(1268, 'BN63-10851B', 'SHEET COVER UF5000', '', '', '6820.00', 'Ea', '', 'K02', ''),
(1269, 'BN63-07556X', 'PROTECT', '', '', '0.00', 'Ea', '', 'K02', ''),
(1270, 'BN63-10851A', 'SHEET COVER', '', '', '3090.00', 'Ea', '', 'K02', ''),
(1271, 'AH61-00015A', 'SHEET WINDOW', '', '', '15940.00', 'Ea', '', 'K02', ''),
(1272, 'MHK63727902', 'SHEET PROTECTION', '', '', '12390.00', 'Ea', '', 'K02', ''),
(1273, 'MCQ65164523', 'FELT', '', '', '0.00', 'Ea', '', 'K02', ''),
(1274, 'MCQ65164522', 'FELT', '', '', '0.00', 'Ea', '', 'K02', ''),
(1275, '4766R-0015A', 'Felt Bracket', '', '', '0.00', 'Ea', '', 'K02', ''),
(1276, 'MHK63732101', 'SHEET RECEIVER', '', '', '6000.00', 'Ea', '', 'K02', ''),
(1277, 'MCQ65164521', 'Felt', '', '', '0.00', 'Ea', '', 'K02', ''),
(1278, 'MHK63389801', 'Sheet', '', '', '150.00', 'Ea', '', 'K02', ''),
(1279, '4766R-0015B', 'Felt Capstan', '', '', '0.00', 'Ea', '', 'K02', ''),
(1280, 'MHK63727901', 'Sheet Protection', '', '', '750.00', 'Ea', '', 'K02', ''),
(1281, 'MCQ65164529', 'Eva Felt', '', '', '0.00', 'Ea', '', 'K02', ''),
(1282, 'MHK62147604', 'Sheet Protection', '', '', '1000.00', 'Ea', '', 'K02', ''),
(1283, 'MHK61989002', 'Sheet All', '', '', '0.00', 'Ea', '', 'K02', ''),
(1284, 'MHK62147603', 'Sheet Protection', '', '', '4445.00', 'Ea', '', 'K02', ''),
(1285, 'MCQ32325009', 'Foot Side', '', '', '0.00', 'Ea', '', 'K02', ''),
(1286, 'MHK63812301', 'SHEET PROTECTION TOP', '', '', '3460.00', 'Ea', '', 'K02', ''),
(1287, 'MHK63986801', 'SHEET GRAPHINE', '', '', '3564.00', 'Ea', '', 'K02', ''),
(1288, 'MHK63850704', 'SHEET', '', '', '1553.00', 'Ea', '', 'K02', ''),
(1289, 'MDS39538750', 'GASKET', '', '', '462.00', 'Ea', '', 'K02', ''),
(1290, 'MHK63812302', 'SHEET PROTECTION', '', '', '14.00', 'Ea', '', 'K02', ''),
(1291, 'MHK63945901', 'SHEET LIGHTING', '', '', '0.00', 'Ea', '', 'K02', ''),
(1292, 'MCQ62096427', 'DAMPER THERMAL SHEET', '', '', '1976.00', 'Ea', '', 'K02', ''),
(1293, 'MDS39538751', 'GASKET', '', '', '137.00', 'Ea', '', 'K02', ''),
(1294, 'MCQ32325008', 'Foot Bottom', '', '', '0.00', 'Ea', '', 'K02', ''),
(1295, 'MDS39538746', 'GASKET', '', '', '0.00', 'Ea', '', 'K02', ''),
(1296, '82.35 x 47', 'Masking Tape Besar (W4220)', '', '', '1188.00', 'Ea', '', 'K02', ''),
(1297, '47 x 35', 'Masking Tape Kecil (W4220)', '', '', '500.00', 'Ea', '', 'K02', ''),
(1298, 'GL62-00036A', 'Sheet insulation top', '', '', '0.00', 'Ea', '', 'K02', ''),
(1299, 'VF1A00711400', 'CELL STOPPER BOTTOM C', '', '', '4300.00', 'Ea', '', 'K02', '');
INSERT INTO `barang` (`id`, `kd_barang`, `nm_barang`, `type`, `spec`, `stok`, `satuan`, `ket`, `kd_kategori`, `aktif`) VALUES
(1300, 'VF1A00683500', 'PIECE PIECESOURCE GUIDE 32PB200', '', '', '11599.00', 'Ea', '', 'K02', ''),
(1301, 'VF1A00694200', 'PIECE PIECE CTRL PROPER 46PX200', '', '', '0.00', 'Ea', '', 'K02', ''),
(1302, 'VF1A00682800', 'PIECE CTRL PROPER H5', '', '', '1991.00', 'Ea', '', 'K02', ''),
(1303, 'VF1A00685700', 'PIECE SOURCE GUIDE', '', '', '3600.00', 'Ea', '', 'K02', ''),
(1304, 'VF1A006854A0', 'CALL STOPER', '', '', '16520.00', 'Ea', '', 'K02', ''),
(1305, 'VF1A00682600', 'PIECE PIECE CTRL PROPER PS200', '', '', '0.00', 'Ea', '', 'K02', ''),
(1306, 'VF1A00693100', 'PIECE SOURCE GUIDE 32PS200', '', '', '7400.00', 'Ea', '', 'K02', ''),
(1307, 'VF1A00704700', 'PIECE SOURCE GUIDE', '', '', '0.00', 'Ea', '', 'K02', ''),
(1308, 'VF1A00682100', 'PIECE PANEL OSAE', '', '', '3776.00', 'Ea', '', 'K02', ''),
(1309, 'VF1A00685800', 'PIECE PANEL OSAE', '', '', '836.00', 'Ea', '', 'K02', ''),
(1310, 'V66A00676300', 'Label Trim', '', '', '5135.00', 'Ea', '', 'K02', ''),
(1311, 'VF1A00685100', 'LENS INDICATOR', '', '', '3844.00', 'Ea', '', 'K02', ''),
(1312, 'VF1A00672600', 'PIECE CTRL PROPER', '', '', '5539.00', 'Ea', '', 'K02', ''),
(1313, 'VF2A00291400', 'PIECE WASHER 8X4.2XT2', '', '', '0.00', 'Ea', '', 'K02', ''),
(1314, 'VF1A00710400', 'PIECE SOURCE GUIDE 29PB200', '', '', '0.00', 'Ea', '', 'K02', ''),
(1315, 'VF1A006822A0', 'PIECE SOURCE GUIDE PB200 A', '', '', '1000.00', 'Ea', '', 'K02', ''),
(1316, 'VF1A007037A0', 'P CELL STP BOTTOM', '', '', '0.00', 'Ea', '', 'K02', ''),
(1317, 'MHK63849601', 'SHEET EMI', '', '', '497.00', 'Ea', '', 'K02', ''),
(1318, 'MHK63800101', 'ABSORBER SHEET', '', '', '735.00', 'Ea', '', 'K02', ''),
(1319, 'MDS39538709', 'Gasket', '', '', '0.00', 'Ea', '', 'K02', ''),
(1320, 'MHK63725301', 'LABEL JACK', '', '', '0.00', 'Ea', '', 'K02', ''),
(1321, 'MDS39538713', 'Gasket', '', '', '0.00', 'Ea', '', 'K02', ''),
(1322, '1PZZR-0011', 'Pin Heat Sink', '', '', '0.00', 'Ea', '', 'K02', ''),
(1323, '4986R-0030Q', 'Gasket', '', '', '1143.00', 'Ea', '', 'K02', ''),
(1324, 'MHK63725402', 'SHEET LABEL', '', '', '98.00', 'Ea', '', 'K02', ''),
(1325, 'MHK62006926', 'panel', '', '', '0.00', 'Ea', '', 'K02', ''),
(1326, 'MCK63314101', 'Cover', '', '', '0.00', 'Ea', '', 'K02', ''),
(1327, '5040H-1023W', 'Damper', '', '', '0.00', 'Ea', '', 'K02', ''),
(1328, 'MHK62245801', 'Sheet', '', '', '0.00', 'Ea', '', 'K02', ''),
(1329, 'MDS39538730', 'Gasket', '', '', '0.00', 'Ea', '', 'K02', ''),
(1330, 'MEZ62781025', 'Label', '', '', '0.00', 'Ea', '', 'K02', ''),
(1331, 'MGC62903401', 'Panel Rear', '', '', '0.00', 'Ea', '', 'K02', ''),
(1332, 'MEG58371702', 'Holder', '', '', '500.00', 'Ea', '', 'K02', ''),
(1333, 'MCQ61847304', 'Damper', '', '', '0.00', 'Ea', '', 'K02', ''),
(1334, 'MCQ32325021', 'Rubber Foot', '', '', '0.00', 'Ea', '', 'K02', ''),
(1335, 'MHK63405201', 'Sheet', '', '', '0.00', 'Ea', '', 'K02', ''),
(1336, 'MHK62006915', 'Label Jack', '', '', '0.00', 'Ea', '', 'K02', ''),
(1337, 'MDP51169303', 'Foot', '', '', '2816.00', 'Ea', '', 'K02', ''),
(1338, 'MEG63063502', 'Decor IPOD Jack', '', '', '0.00', 'Ea', '', 'K02', ''),
(1339, 'MEG63063503', 'HOLDER', '', '', '2238.00', 'Ea', '', 'K02', ''),
(1340, 'MEG63164001', 'Holder WI FI', '', '', '98311.00', 'Ea', '', 'K02', ''),
(1341, 'MDP62507201', 'FOOT MOOL', '', '', '336.00', 'Ea', '', 'K02', ''),
(1342, '4986R-0049L', 'Gasket', '', '', '0.00', 'Ea', '', 'K02', ''),
(1343, 'MHK63934601', 'SHEET', '', '', '0.00', 'Ea', '', 'K02', ''),
(1344, 'MHK63995001', 'SHEET', '', '', '0.00', 'Ea', '', 'K02', ''),
(1345, 'MEG63301301', 'HOLDER FRONT', '', '', '0.00', 'Ea', '', 'K02', ''),
(1346, '4986R-0049Z', 'Gasket', '', '', '0.00', 'Ea', '', 'K02', ''),
(1347, 'MEZ62781043', 'LABEL JACK', '', '', '460.00', 'Ea', '', 'K02', ''),
(1348, 'MHK63934501', 'SHEET', '', '', '0.00', 'Ea', '', 'K02', ''),
(1349, 'MCQ67234102', 'DAMPER', '', '', '0.00', 'Ea', '', 'K02', ''),
(1350, 'MEG63199115', 'HOLDER', '', '', '0.00', 'Ea', '', 'K02', ''),
(1351, 'MDQ63420201', 'FRAME REAR', '', '', '0.00', 'Ea', '', 'K02', ''),
(1352, 'MEG63063514', 'HOLDER', '', '', '1754.00', 'Ea', '', 'K02', ''),
(1353, '4986R-0004P', 'GASKET', '', '', '1868.00', 'Ea', '', 'K02', ''),
(1354, 'MDS39538719', 'Gasket', '', '', '0.00', 'Ea', '', 'K02', ''),
(1355, 'MHK63385401', 'Sheet', '', '', '0.00', 'Ea', '', 'K02', ''),
(1356, 'MCQ67231501', 'SPONGE', '', '', '0.00', 'Ea', '', 'K02', ''),
(1357, 'MHK62006924', 'Label Jack', '', '', '190.00', 'Ea', '', 'K02', ''),
(1358, 'MCQ65164542', 'Eva Felt', '', '', '0.00', 'Ea', '', 'K02', ''),
(1359, 'MGJ63185701', 'Plate Bottom', '', '', '375.00', 'Ea', '', 'K02', ''),
(1360, 'MHK63292701', 'Sheet', '', '', '0.00', 'Ea', '', 'K02', ''),
(1361, 'MHK63798901', 'Sheet', '', '', '0.00', 'Ea', '', 'K02', ''),
(1362, 'MEZ63868401', 'Label Jack', '', '', '0.00', 'Ea', '', 'K02', ''),
(1363, 'MCQ66665901', 'Damper', '', '', '0.00', 'Ea', '', 'K02', ''),
(1364, 'MHK62249104', 'Sheet', '', '', '0.00', 'Ea', '', 'K02', ''),
(1365, 'AGU74048801', 'Assy top', '', '', '0.00', 'Ea', '', 'K02', ''),
(1366, 'MEZ62781024', 'Main Label', '', '', '0.00', 'Ea', '', 'K02', ''),
(1367, 'AAX73811402', 'CASE REAR', '', '', '7.00', 'Ea', '', 'K02', ''),
(1368, 'MEG63298902', 'HOLDER WIRELESS', '', '', '1664.00', 'Ea', '', 'K02', ''),
(1369, 'MCQ62096429', 'GAD PAD', '', '', '16.00', 'Ea', '', 'K02', ''),
(1370, 'MCR64779101', 'Decor IPOD Gray', '', '', '0.00', 'Ea', '', 'K02', ''),
(1371, 'MCQ63084912', 'Damper Termal', '', '', '100.00', 'Ea', '', 'K02', ''),
(1372, 'MEG63199201', 'HOLDER', '', '', '500.00', 'Ea', '', 'K02', ''),
(1373, 'MHK63529502', 'Rear Label Jack', '', '', '0.00', 'Ea', '', 'K02', ''),
(1374, 'AAX73811902', 'BOARD ASSY', '', '', '0.00', 'Ea', '', 'K02', ''),
(1375, 'MCQ65164535', 'CUSHION', '', '', '1658.00', 'Ea', '', 'K02', ''),
(1376, 'MEG62519101', 'Holder', '', '', '0.00', 'Ea', '', 'K02', ''),
(1377, 'MDS39538711', 'Gasket', '', '', '0.00', 'Ea', '', 'K02', ''),
(1378, 'MEG40173101', 'Holder Main', '', '', '0.00', 'Ea', '', 'K02', ''),
(1379, 'MHK63725201', 'Label', '', '', '0.00', 'Ea', '', 'K02', ''),
(1380, 'MHK63950901', 'SHEET CHASIS HDMI', '', '', '0.00', 'Ea', '', 'K02', ''),
(1381, 'MCQ63567814', 'DAMPER', '', '', '0.00', 'Ea', '', 'K02', ''),
(1382, 'MDS39538715', 'Gasket', '', '', '0.00', 'Ea', '', 'K02', ''),
(1383, 'ACQ86022101', 'JACK IPOD', '', '', '566.00', 'Ea', '', 'K02', ''),
(1384, 'MEG62538902', 'Holder Chassis', '', '', '0.00', 'Ea', '', 'K02', ''),
(1385, 'MEG62720001', 'Holder Karaoke', '', '', '1200.00', 'Ea', '', 'K02', ''),
(1386, 'MHK63725401', 'Label', '', '', '0.00', 'Ea', '', 'K02', ''),
(1387, 'MEG63063501', 'holder ipod', '', '', '0.00', 'Ea', '', 'K02', ''),
(1388, 'MCK61994901', 'Holder Fan', '', '', '0.00', 'Ea', '', 'K02', ''),
(1389, 'MCQ66708101', 'Damper', '', '', '224.00', 'Ea', '', 'K02', ''),
(1390, 'MEZ64714801', 'LABEL JACK', '', '', '0.00', 'Ea', '', 'K02', ''),
(1391, 'MHK63725501', 'Label', '', '', '0.00', 'Ea', '', 'K02', ''),
(1392, 'MEG63199101', 'HOLDER', '', '', '0.00', 'Ea', '', 'K02', ''),
(1393, 'MCQ32777519', 'Damper', '', '', '0.00', 'Ea', '', 'K02', ''),
(1394, 'MHK62006921', 'Sheet', '', '', '0.00', 'Ea', '', 'K02', ''),
(1395, 'MCQ67125201', 'Felt', '', '', '0.00', 'Ea', '', 'K02', ''),
(1396, 'MEG57194001', 'Holder', '', '', '780.00', 'Ea', '', 'K02', ''),
(1397, 'MHK62006917', 'Label Jack', '', '', '0.00', 'Ea', '', 'K02', ''),
(1398, 'MEG61870401', 'Holder', '', '', '0.00', 'Ea', '', 'K02', ''),
(1399, 'MDP51169304', 'Foot holder', '', '', '1431.00', 'Ea', '', 'K02', ''),
(1400, '4986R-0033K', 'Gasket', '', '', '199.00', 'Ea', '', 'K02', ''),
(1401, 'MCQ65164534', 'Eva Felt', '', '', '4154.00', 'Ea', '', 'K02', ''),
(1402, 'MEG61846901', 'Holder', '', '', '57.00', 'Ea', '', 'K02', ''),
(1403, 'MEG62079401', 'Holder', '', '', '0.00', 'Ea', '', 'K02', ''),
(1404, 'MCQ60139105', 'Damper', '', '', '0.00', 'Ea', '', 'K02', ''),
(1405, 'MDS39538742', 'Gasket', '', '', '0.00', 'Ea', '', 'K02', ''),
(1406, 'MCQ32325023', 'RUBBER FOOT', '', '', '1000.00', 'Ea', '', 'K02', ''),
(1407, 'MEG58371703', 'Holder', '', '', '6350.00', 'Ea', '', 'K02', ''),
(1408, 'MCK66955601', 'Cover chasis', '', '', '873.00', 'Ea', '', 'K02', ''),
(1409, 'MDS39538748', 'GASKET', '', '', '0.00', 'Ea', '', 'K02', ''),
(1410, 'MDS39538749', 'GASKET', '', '', '0.00', 'Ea', '', 'K02', ''),
(1411, 'MDS61951115', 'Gasket', '', '', '10.00', 'Ea', '', 'K02', ''),
(1412, '5040H-1023U', 'Damper', '', '', '0.00', 'Ea', '', 'K02', ''),
(1413, 'MCQ62096419', 'THERMAL PAD', '', '', '1873.00', 'Ea', '', 'K02', ''),
(1414, '5040R-0069Q', 'Foot', '', '', '24875.00', 'Ea', '', 'K02', ''),
(1415, 'MCQ32325001', 'Damper (Rubber Foot)', '', '', '11082.00', 'Ea', '', 'K02', ''),
(1416, '5040R-0069X/S83C500A73', 'Foot', '', '', '27800.00', 'Ea', '', 'K02', ''),
(1417, '4986R-0004F', 'GASKET', '', '', '0.00', 'Ea', '', 'K02', ''),
(1418, 'MHK62245805', 'SHEET SMPS', '', '', '0.00', 'Ea', '', 'K02', ''),
(1419, 'MHK63992702', 'SHEET LABEL', '', '', '0.00', 'Ea', '', 'K02', ''),
(1420, 'MHK63999601', 'SHEET REGULATION', '', '', '373.00', 'Ea', '', 'K02', ''),
(1421, 'MCQ62096430', 'Damper Thermal', '', '', '22.00', 'Ea', '', 'K02', ''),
(1422, 'GL73-00054A', 'Tape Shield MID', '', '', '1279.00', 'Ea', '', 'K02', ''),
(1423, 'AA63-01413T', 'GASKET EMI', '', '', '235.00', 'Ea', '', 'K02', ''),
(1424, 'MF62-00042A', 'Insulation Sheet ', '', '', '674.00', 'Ea', '', 'K02', ''),
(1425, 'GL73-00053A', 'Tape Shield LR', '', '', '0.00', 'Ea', '', 'K02', ''),
(1426, 'GL63-00071A', 'Touch Bracket Sheet', '', '', '0.00', 'Ea', '', 'K02', ''),
(1427, 'AA63-01387A', 'Gasket Emi', '', '', '0.00', 'Ea', '', 'K02', ''),
(1428, 'AH73-00011B', 'Rubber Foot', '', '', '0.00', 'Ea', '', 'K02', ''),
(1429, 'BN63-03845A', 'Gasket Emi', '', '', '1586.00', 'Ea', '', 'K02', ''),
(1430, 'GL73-00020A', 'Rubber Foot', '', '', '3244.00', 'Ea', '', 'K02', ''),
(1431, 'MCR64812504', 'Décor', '', '', '0.00', 'Ea', '', 'K02', ''),
(1432, 'MCR64812502', 'Décor', '', '', '0.00', 'Ea', '', 'K02', ''),
(1433, 'MCR64812503', 'Décor', '', '', '175.00', 'Ea', '', 'K02', ''),
(1434, 'BADGE HEANDLE', 'LOGO YAMAHA', '', '', '6300.00', 'Ea', '', 'K02', ''),
(1435, 'MDP3032001', 'Rubber Foot', '', '', '0.00', 'Ea', '', 'K02', ''),
(1436, 'AGL73552511', 'D/JACK INDOOR ASSY', '', '', '1412.00', 'Ea', '', 'K02', ''),
(1437, 'MDP61842601', 'Gear Side R', '', '', '25.00', 'Ea', '', 'K02', ''),
(1438, 'MCQ65164533', 'EVA 1t (1tX10X44.5)', '', '', '700.00', 'Ea', '', 'K02', ''),
(1439, 'MCQ62592007', 'DAMPER SHEET', '', '', '140.00', 'Ea', '', 'K02', ''),
(1440, 'MCV40942101', 'DOOR JACK INDOOR', '', '', '525.00', 'Ea', '', 'K02', ''),
(1441, 'MDT61842701', 'Gear Center', '', '', '25.00', 'Ea', '', 'K02', ''),
(1442, 'MDP61842501', 'Gear Side L', '', '', '25.00', 'Ea', '', 'K02', ''),
(1443, 'MCR62061701-USB', 'Deco Panel USB', '', '', '133.00', 'Ea', '', 'K02', ''),
(1444, 'TC-110220-0CB/DN34C483R02', 'Sheet For Decoration Plate GT', '', '', '1628.00', 'Ea', '', 'K02', ''),
(1445, 'GL-164817-ACA10A/DN64A817M01', 'Decoration Plate KIT PAS 27  (M01) W/Print', '', '', '0.00', 'Ea', '', 'K02', ''),
(1446, 'GL-164019-BCA00B/DN64B019R01 SN64F699M01', 'DECORATION PLATE SPK RH KIT GGB W/PRINT(M01)', '', '', '0.00', 'Ea', '', 'K02', ''),
(1447, 'GL-134267-DCA00A/DN34D267R01 SN8F700', 'DECORATION PLATE LH GGB W/PRINT', '', '', '0.00', 'Ea', '', 'K02', ''),
(1448, 'EC-131661-BCA00/DN31B661', 'Barrier  For Cabinet 21 N 16', '', '', '31.00', 'Ea', '', 'K02', ''),
(1449, '47.7 X 609', 'PROTECT VINYL', '', '', '128.00', 'Ea', '', 'K02', ''),
(1450, 'D78006021', 'Double Tape', '', '', '140.00', 'Ea', '', 'K02', ''),
(1451, 'D78001185', 'Sheet Clear', '', '', '1110.00', 'Ea', '', 'K02', ''),
(1452, 'MGJ57353601', 'PLATE BADGE LG', '', '', '0.00', 'Ea', '', 'K02', ''),
(1453, 'S72B577A00/MHK6373101', 'SHEET FRONT', '', '', '79.00', 'Ea', '', 'K02', ''),
(1454, '44X44', 'SPONGE', '', '', '0.00', 'Ea', '', 'K02', ''),
(1455, 'AEZ73533801', 'KNOB ASSEMBLY', '', '', '0.00', 'Ea', '', 'K02', ''),
(1456, 'ADC73886203', 'Door Assembly', '', '', '499.00', 'Ea', '', 'K02', ''),
(1457, 'MHK37250703', 'Sheet', '', '', '133.00', 'Ea', '', 'K02', ''),
(1458, '3MBPCD0002A-R', 'Top Case', '', '', '128.00', 'Ea', '', 'K02', ''),
(1459, 'OIC-0704W', 'DECOPLATE', '', '', '27.00', 'Ea', '', 'K02', ''),
(1460, 'OIC-0659P', 'DECO PLATE', '', '', '7325.00', 'Ea', '', 'K02', ''),
(1461, 'OIC-0784A', 'Deco Plate', '', '', '763.00', 'Ea', '', 'K02', ''),
(1462, 'RGKW0012-D', 'GYRO BACK CASE', '', '', '60.00', 'Ea', '', 'K02', ''),
(1463, 'MCR544062', 'DECO-FOOT', '', '', '0.00', 'Ea', '', 'K02', ''),
(1464, 'DF509040E', 'DIFUSER ARTWORK YAMAHA', '', '', '100.00', 'Ea', '', 'K02', ''),
(1465, 'GA68-00170A', 'DSS Paper', '', '', '79.00', 'Ea', '', 'K02', ''),
(1466, 'GL62-00008A', 'Touch PBA Tape', '', '', '1235.00', 'Ea', '', 'K02', ''),
(1467, '71X13', 'D TAPE', '', '', '2145.00', 'Ea', '', 'K02', ''),
(1468, '73.9 X 43.4', 'TAPE LCD WINDOW', '', '', '685.00', 'Ea', '', 'K02', ''),
(1469, 'AK63-00802C', 'Sheet Lighting', '', '', '10.00', 'Ea', '', 'K02', ''),
(1470, 'BN63-09515A', 'Gasket', '', '', '420.00', 'Ea', '', 'K02', ''),
(1471, 'MC001', 'MIC CASH UPPER PROTECTION', '', '', '600.00', 'Ea', '', 'K02', ''),
(1472, 'MC002', 'MIC CASH LOWER PROTECTION', '', '', '4020.00', 'Ea', '', 'K02', ''),
(1473, '1PZZR-0011C', 'Pin Heat Sink', '', '', '0.00', 'Ea', '', 'K02', ''),
(1474, 'SCRAP01', 'MATERIAL CRUSGING / SCRAPH', '', '', '0.00', 'KG', '', 'K04', ''),
(1475, 'SCRAP02', 'MATERIAL BEKUAN / SRCAPH', '', '', '0.00', 'KG', '', 'K04', ''),
(1476, 'SCRAP03', 'SCRAP/ KARTON BOX', '', '', '0.00', 'KG', '', 'K04', ''),
(1477, 'SCRAP04', 'FALLET KAYU', '', '', '0.00', 'PCS', '', 'K04', ''),
(1478, 'SCRAP05', 'FALLET PLASTIK', '', '', '0.00', 'PCS', '', 'K04', ''),
(1479, '45678', 'Contoh dan Percobaan', 'Cekal', 'Kecil', '900.00', 'KGM', '123', 'K01', ''),
(1480, '7891234', 'Percobaan dan pengetesan', 'Besar', 'Slim', '1000.00', 'ACR', '234', 'K01', ''),
(1481, '99999', 'Coba terakhir', 'Besar', 'Jeratan cinta', '2010', 'KGM', 'Besar', 'K02', ''),
(1494, '4352344', 'drwerer', 'ewrwer', 'werwer', '0', 'ACR', '3453', 'K01', '1'),
(1493, 'fg43534', 'fdgdfg', 'erteterte', 'rertet', '0', 'ACR', 'ert435', 'K01', '1'),
(1492, '6784535', 'fgdgdf', 'gdfgdg', 'dfgdfg', '0', 'ARE', 'ert', 'K03', '1'),
(1495, '34535', 'ewrer', 'dfgdf', 'dfgret', '0', 'ACR', '3453', 'K04', '1');

-- --------------------------------------------------------

--
-- Table structure for table `brgjadi`
--

CREATE TABLE `brgjadi` (
  `nomor` char(10) collate latin1_general_ci NOT NULL,
  `no_bpb` char(100) collate latin1_general_ci NOT NULL,
  `tgl_bpb` date NOT NULL,
  `project` varchar(100) collate latin1_general_ci NOT NULL,
  `dept` char(100) collate latin1_general_ci NOT NULL,
  `name_ppc` char(100) collate latin1_general_ci NOT NULL,
  `catatan` varchar(100) collate latin1_general_ci NOT NULL,
  `userid` char(8) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `brgjadi`
--

INSERT INTO `brgjadi` (`nomor`, `no_bpb`, `tgl_bpb`, `project`, `dept`, `name_ppc`, `catatan`, `userid`) VALUES
('0000000001', 'LP-2013000001/PRODUKSI', '2013-03-17', '324234', 'Bagian Penyimpanan B', '234', '234', 'admin'),
('0000000002', 'LP-2013000002/PRODUKSI', '2013-04-13', '2324', 'Bagian Pra Produksi', '324', '234', 'admin'),
('0000000003', 'LP-2013000003/PRODUKSI', '2013-05-18', 'dsd', 'Bagian Pasca Produksi', 'erer', 'dsdd', 'goestoe'),
('0000000004', 'LP-2013000004/PRODUKSI', '2013-05-18', '121', 'Bagian Pra Produksi', 'trt', 'fdf', 'goestoe'),
('0000000005', 'LP-2013000005/PRODUKSI', '2013-05-18', '234', 'Bagian Produksi', '324', '234', 'goestoe');

-- --------------------------------------------------------

--
-- Table structure for table `brgjadi_detail`
--

CREATE TABLE `brgjadi_detail` (
  `nomor` char(10) collate latin1_general_ci NOT NULL,
  `id` int(10) NOT NULL auto_increment,
  `no_bpb` varchar(100) collate latin1_general_ci NOT NULL,
  `tgl_bpb` date NOT NULL,
  `kode` char(100) collate latin1_general_ci NOT NULL,
  `jumlah` varchar(20) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `brgjadi_detail`
--

INSERT INTO `brgjadi_detail` (`nomor`, `id`, `no_bpb`, `tgl_bpb`, `kode`, `jumlah`) VALUES
('0000000001', 9, 'LP-2013000001/PRODUKSI', '2013-03-17', 'B00001', '1.00'),
('0000000002', 10, 'LP-2013000002/PRODUKSI', '2013-04-13', 'B00009', '1'),
('0000000003', 11, 'LP-2013000003/PRODUKSI', '2013-05-18', 'CB005-00015', '100'),
('0000000004', 12, 'LP-2013000004/PRODUKSI', '2013-05-18', 'CB005-00010', '20'),
('0000000004', 13, 'LP-2013000004/PRODUKSI', '2013-05-18', 'CB005-00015', '80'),
('0000000005', 14, 'LP-2013000005/PRODUKSI', '2013-05-18', 'CB005-00015', '20'),
('0000000005', 15, 'LP-2013000005/PRODUKSI', '2013-05-18', 'CB005-00010', '20');

-- --------------------------------------------------------

--
-- Table structure for table `catatan`
--

CREATE TABLE `catatan` (
  `kd_catatan` char(8) collate latin1_general_ci NOT NULL,
  `nm_catatan` varchar(100) collate latin1_general_ci NOT NULL,
  `kategori` varchar(255) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `catatan`
--

INSERT INTO `catatan` (`kd_catatan`, `nm_catatan`, `kategori`) VALUES
('CAT-0001', 'BC 2.3 Impor SPPB-TPB', 'Pemasukan barang'),
('CAT-0002', 'BC 2.3 Impor SPPB-TPB Merah', 'Pemasukan barang'),
('CAT-0003', 'BC 2.3 Impor PJT', 'Pemasukan barang'),
('CAT-0004', 'Pemasukan dari Gudang Berikat', 'Pemasukan barang'),
('CAT-0005', 'Pemasukan dari PDKB lain', 'Pemasukan barang'),
('CAT-0006', 'Pemasukan dalam rangka subkontrak dari PDKB lain', 'Pemasukan barang'),
('CAT-0007', 'Pemasukan kembali dalam rangka subkontrak dari PDKB', 'Pemasukan barang'),
('CAT-0008', 'Pemasukan peminjaman Mesin/Reparasi dari KB', 'Pemasukan barang'),
('CAT-0009', 'Pemasukan kembali peminjaman/reparasi Mesin dari KB', 'Pemasukan barang'),
('CAT-0010', 'Pemasukan kembali dalam rangka subkontrak dari TLDDP', 'Pemasukan barang'),
('CAT-0011', 'Pemasukan kembali peminjaman/reparasi Mesin dari TLDDP', 'Pemasukan barang'),
('CAT-0012', 'Pemasukan dalam rangka subkontrak dari TLDDP', 'Pemasukan barang'),
('CAT-0013', 'Pemasukan dari TLDDP', 'Pemasukan barang'),
('CAT-0014', 'Pemasukan Mesin dalam rangka peminjaman/sewa dari TLDDP', 'Pemasukan barang'),
('CAT-0015', 'Pemasukan dari perusahaan fasilitas KITE', 'Pemasukan barang'),
('CAT-0016', 'Ekspor Biasa', 'Pengeluaran barang'),
('CAT-0017', 'Ekspor kembali (re-ekspor)', 'Pengeluaran barang'),
('CAT-0018', 'Pengeluaran antar PDKB', 'Pengeluaran barang'),
('CAT-0019', 'Pengeluaran dalam rangka subkontrak ke KB', 'Pengeluaran barang'),
('CAT-0020', 'Pengeluarang barang hasil dalam rangka subkontrak ke KB', 'Pengeluaran barang'),
('CAT-0021', 'Pengeluaran peminjaman/reparasi mesin ke KB', 'Pengeluaran barang'),
('CAT-0022', 'Pengeluaran peminjaman/reparasi mesin untuk dikembalikan ke KB', 'Pengeluaran barang'),
('CAT-0023', 'Pengeluaran dalam rangka subkontrak ke TLDDP', 'Pengeluaran barang'),
('CAT-0024', 'Pengeluaran peminjaman/reparasi mesin ke TLDDP', 'Pengeluaran barang'),
('CAT-0025', 'Pengeluaran kembali dalam rangka subkontrak ke TLDDP', 'Pengeluaran barang'),
('CAT-0026', 'Pengeluaran kembali mesin setelah peminjaman/sewa ke TLDDP', 'Pengeluaran barang'),
('CAT-0027', 'Pengeluaran karena reject/salah kirim ke TLDDP', 'Pengeluaran barang'),
('CAT-0028', 'Pengeluaran untuk penjualan ke TLDDP (Ex Bahan baku 100% dari TLDDP)', 'Pengeluaran barang'),
('CAT-0029', 'Penjualan ke TLDDP (BC 2.5)', 'Pengeluaran barang'),
('CAT-0030', 'Pengeluaran Ekspor melalui PJT', 'Pengeluaran barang');

-- --------------------------------------------------------

--
-- Table structure for table `closing`
--

CREATE TABLE `closing` (
  `id` int(8) NOT NULL auto_increment,
  `tgl_closing` date NOT NULL,
  `kd_barang` char(100) collate latin1_general_ci NOT NULL,
  `stock` varchar(20) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=124 ;

--
-- Dumping data for table `closing`
--

INSERT INTO `closing` (`id`, `tgl_closing`, `kd_barang`, `stock`) VALUES
(8, '2012-12-31', 'B00001', '200'),
(9, '2012-12-31', 'B00002', '200'),
(10, '2012-12-31', 'B00003', '200'),
(11, '2012-12-31', 'B00004', '200'),
(12, '2012-12-31', 'B00005', '200'),
(13, '2012-12-31', 'B00006', '200'),
(14, '2012-12-31', 'B00007', '200'),
(15, '2012-12-31', 'B00008', '200'),
(16, '2012-12-31', 'B00009', '200'),
(17, '2013-04-22', 'B00005', '0'),
(18, '2013-04-22', 'B00001', '-1'),
(19, '2013-04-22', 'B00006', '200'),
(20, '2013-04-22', 'B00002', '202'),
(21, '2013-04-22', 'B00009', '500'),
(22, '2013-04-22', 'B00007', '200'),
(23, '2013-04-22', 'B00003', '200'),
(24, '2013-04-22', 'B00008', '200'),
(25, '2013-04-22', 'B00004', '200'),
(26, '2013-07-07', 'All ABS', '0'),
(27, '2013-07-07', 'All HIPS', '0'),
(28, '2013-07-07', 'All PMMA', '0'),
(29, '2013-07-07', 'All INK', '0'),
(30, '2013-07-07', 'All THINNER', '0'),
(31, '2013-07-07', 'All PAINT', '0'),
(32, '2013-07-07', 'All FOIL', '0'),
(33, '2013-07-07', 'DOUBLE TAPE 1', '0'),
(34, '2013-07-07', 'CUSHION 12', '0'),
(35, '2013-07-07', 'CUSHION 13', '0'),
(36, '2013-07-07', 'PET', '0'),
(37, '2013-07-07', 'DOUBLE TAPE 2', '0'),
(38, '2013-07-07', 'CUSHION 1', '0'),
(39, '2013-07-07', 'CUSHION 2', '0'),
(40, '2013-07-07', 'CUSHION 3', '0'),
(41, '2013-07-07', 'CUSHION 4', '0'),
(42, '2013-07-07', 'PAPER', '0'),
(43, '2013-07-07', 'CUSHION 5', '0'),
(44, '2013-07-07', 'CUSHION 6', '0'),
(45, '2013-07-07', 'DOUBLE TAPE 3', '0'),
(46, '2013-07-07', 'CUSHION 7', '0'),
(47, '2013-07-07', 'CUSHION 8', '0'),
(48, '2013-07-07', 'CUSHION 9', '0'),
(49, '2013-07-07', 'CUSHION 10', '0'),
(50, '2013-07-07', 'HEXANE', '0'),
(51, '2013-07-07', 'PROTECTION', '0'),
(52, '2013-07-07', 'ALUMINIUM', '0'),
(53, '2013-07-07', 'CUSHION 11', '0'),
(54, '2013-07-07', 'DOUBLE TAPE 4', '0'),
(55, '2013-07-07', 'PET', '0'),
(56, '2013-07-07', 'DOUBLE TAPE 5', '0'),
(57, '2013-07-07', 'CUSHION 14', '0'),
(58, '2013-07-07', 'DOUBLE TAPE 6', '0'),
(59, '2013-07-07', 'CUSHION 15', '0'),
(60, '2013-07-07', 'DOUBLE TAPE 7', '0'),
(61, '2013-07-07', 'CUSHION 16', '0'),
(62, '2013-07-07', 'DOUBLE TAPE 8', '0'),
(63, '2013-07-07', 'CUSHION 17', '0'),
(64, '2013-07-07', 'MBU62446401', '0'),
(65, '2013-07-07', 'MGJ63088001', '0'),
(66, '2013-07-07', '5728573A01', '0'),
(67, '2013-07-07', '003x12x13', '881'),
(68, '2013-07-07', 'MHK37290703', '0'),
(69, '2013-07-07', '003x4x8', '0'),
(70, '2013-07-07', 'MAF62327804', '0'),
(71, '2013-07-07', 'MAF61848003', '0'),
(72, '2013-07-07', 'MGJ393733', '0'),
(73, '2013-07-07', 'MDX62674301', '0'),
(74, '2013-07-07', 'MCQ66973501', '0'),
(75, '2013-07-07', 'MCQ66997402', '0'),
(76, '2013-07-07', 'RGM0116-K1', '0'),
(77, '2013-07-07', 'RGM0116-T1', '0'),
(78, '2013-07-07', 'RGMX 024/025 K1', '0'),
(79, '2013-07-07', 'MCQ69002201', '0'),
(80, '2013-07-07', 'MCQ69002202', '0'),
(81, '2013-07-07', 'MCQ67065701', '0'),
(82, '2013-07-07', 'MCQ66961501', '0'),
(83, '2013-07-07', 'RJC-91007-1', '0'),
(84, '2013-07-07', 'RMB-0484-1', '0'),
(85, '2013-07-07', 'RME-0215', '0'),
(86, '2013-07-07', '1522R-0097K', '0'),
(87, '2013-07-07', 'PH SEMS M/S', '0'),
(88, '2013-07-07', 'MCQ67216501', '0'),
(89, '2013-07-07', 'MKC413606-11', '0'),
(90, '2013-07-07', 'MKC64299302', '0'),
(91, '2013-07-07', 'MKC62659301', '0'),
(92, '2013-07-07', 'GL68-00361A', '0'),
(93, '2013-07-07', 'MCZ62693603', '0'),
(94, '2013-07-07', 'MCZ62693604', '0'),
(95, '2013-07-07', 'RJC -1007-1', '0'),
(96, '2013-07-07', 'MGJ63533901', '0'),
(97, '2013-07-07', 'MGJ63939401', '0'),
(98, '2013-07-07', 'MHK64070001', '0'),
(99, '2013-07-07', 'EAB62688901', '0'),
(100, '2013-07-07', 'AK64-02554A', '0'),
(101, '2013-07-07', 'MHK63866101', '0'),
(102, '2013-07-07', 'MHK63986801', '0'),
(103, '2013-07-07', 'MEY62594301', '0'),
(104, '2013-07-07', 'GL68-00361B', '0'),
(105, '2013-07-07', '0.3 X 380 X 560', '234'),
(106, '2013-07-07', '002 X 11 X 15', '21790'),
(107, '2013-07-07', 'MEZ61912004', '0'),
(108, '2013-07-07', 'MEZ61912003', '0'),
(109, '2013-07-07', 'MEZ61912008', '0'),
(110, '2013-07-07', 'CB005-00010', '0'),
(111, '2013-07-07', '45678', '900'),
(112, '2013-07-07', '7891234', '1000'),
(113, '2013-07-07', '4352344', '0'),
(114, '2013-07-07', 'fg43534', '0'),
(115, '2013-07-07', '10 HP AC', '324'),
(116, '2013-07-07', '10 HP C', '0'),
(117, '2013-07-07', '6784535', '0'),
(118, '2013-07-07', 'SCRAP01', '0'),
(119, '2013-07-07', 'SCRAP02', '0'),
(120, '2013-07-07', 'SCRAP03', '0'),
(121, '2013-07-07', 'SCRAP04', '0'),
(122, '2013-07-07', 'SCRAP05', '0'),
(123, '2013-07-07', '34535', '0');

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `kd_dept` char(8) collate latin1_general_ci NOT NULL,
  `nm_dept` varchar(100) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`kd_dept`, `nm_dept`) VALUES
('DEP-0001', 'Bagian Penyimpanan Bahan Baku / Penolong'),
('DEP-0002', 'Bagian Alat Produksi'),
('DEP-0003', 'Bagian Pra Produksi'),
('DEP-0004', 'Bagian Produksi'),
('DEP-0005', 'Bagian Kontrol Kualitas'),
('DEP-0006', 'Bagian Pasca Produksi'),
('DEP-0007', 'Bagian Penyimpanan Barang Jadi'),
('DEP-0008', 'Bagian Penyimpanan Barang Sisa / Scrap'),
('DEP-0009', 'Bagian Penjualan');

-- --------------------------------------------------------

--
-- Table structure for table `detail_lamp_barang`
--

CREATE TABLE `detail_lamp_barang` (
  `nomor_pengajuan` varchar(255) collate latin1_general_ci NOT NULL,
  `kode_barang` varchar(255) collate latin1_general_ci NOT NULL,
  `jumlah_barang` int(20) NOT NULL,
  `harga_penyerahan` varchar(255) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `detail_lamp_barang`
--

INSERT INTO `detail_lamp_barang` (`nomor_pengajuan`, `kode_barang`, `jumlah_barang`, `harga_penyerahan`) VALUES
('050300-000001-20061130-000100', 'gas elpiji merek apa aja deh dikirimkan dari perusahaan gas negara', 12, '10000000'),
('050300-000001-20061130-000100', 'serbuk bunga madu 12 gram', 34, '4000000'),
('234', '789', 789, '789'),
('456', 'tyiyutu', 567, '567'),
('345', 'ert ertt', 345, '345'),
('789', '575', 567, '567'),
('34', 'dfg dfgg', 123, '234'),
('435', 'reterter', 234, 'wer34'),
('87979', '789', 789, '789'),
('78956', 'ytuyu tut', 657, '567');

-- --------------------------------------------------------

--
-- Table structure for table `detail_lamp_barang2`
--

CREATE TABLE `detail_lamp_barang2` (
  `nomor_pengajuan` varchar(255) collate latin1_general_ci NOT NULL,
  `kode_barang` varchar(255) collate latin1_general_ci NOT NULL,
  `jumlah_barang` int(20) NOT NULL,
  `harga_penyerahan` varchar(255) collate latin1_general_ci NOT NULL,
  `jenis_barang` varchar(100) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `detail_lamp_barang2`
--

INSERT INTO `detail_lamp_barang2` (`nomor_pengajuan`, `kode_barang`, `jumlah_barang`, `harga_penyerahan`, `jenis_barang`) VALUES
('050300-000001-20061130-000100', 'gas elpiji merek apa aja deh dikirimkan dari perusahaan gas negara', 12, '10000000', 'barang jadi'),
('050300-000001-20061130-000100', 'serbuk bunga madu 12 gram', 34, '4000000', 'barang jadi'),
('fdf', 'kjljljklk', 0, 'hhkjh', 'barang jadi'),
('fdf', 'khkhkhkjhk', 0, 'khkjhkh', 'barang jadi'),
('dgasgsgsgfs', 'afafafa', 0, 'hjhkhk', 'barang jadi'),
('dgasgsgsgfs', 'khkhkhk', 0, 'kjhkhk', 'barang jadi'),
('xxxxxxxxx', 'afafafa', 0, 'hjhkhk', 'barang jadi'),
('xxxxxxxxx', 'khkhkhk', 0, 'kjhkhk', 'barang jadi'),
('xxxxxxxxx', 'afafafa', 0, 'hjhkhk', 'barang jadi'),
('xxxxxxxxx', 'khkhkhk', 0, 'kjhkhk', 'barang jadi'),
('dfsfsdfssssss', 'afafafa', 0, 'hjhkhk', 'barang jadi'),
('dfsfsdfssssss', 'khkhkhk', 0, 'kjhkhk', 'barang jadi'),
('dfsfsdfssssss', 'afafafa', 0, 'hjhkhk', 'barang jadi'),
('dfsfsdfssssss', 'khkhkhk', 0, 'kjhkhk', 'barang jadi'),
('dfsfsdfssssss', 'afafafa', 0, 'hjhkhk', 'barang jadi'),
('dfsfsdfssssss', 'khkhkhk', 0, 'kjhkhk', 'barang jadi');

-- --------------------------------------------------------

--
-- Table structure for table `detail_lamp_barang9`
--

CREATE TABLE `detail_lamp_barang9` (
  `cflag` varchar(2) collate latin1_general_ci NOT NULL,
  `nomor_pengajuan` varchar(255) collate latin1_general_ci NOT NULL,
  `kode_barang` varchar(255) collate latin1_general_ci NOT NULL,
  `jumlah_jenis` varchar(255) collate latin1_general_ci NOT NULL,
  `uraian` varchar(255) collate latin1_general_ci NOT NULL,
  `berat_bersih` varchar(20) collate latin1_general_ci NOT NULL,
  `volume` varchar(20) collate latin1_general_ci NOT NULL,
  `nilai_cif` varchar(255) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `detail_lamp_barang9`
--

INSERT INTO `detail_lamp_barang9` (`cflag`, `nomor_pengajuan`, `kode_barang`, `jumlah_jenis`, `uraian`, `berat_bersih`, `volume`, `nilai_cif`) VALUES
('A', '000119 28/02/2009', 'B00001', '1', 'tester ya', '1', '1', '1000'),
('A', '000119 28/02/2009', 'B00001', '1', '7318.15.12.00 Baut untuk logam dari besi untuk lemari dari besi merek schaum, ukuran 2 inch.', '1', '1', '1000'),
('C', '000119 28/02/2009', 'B00001', '1', '7318.15.12.00 Baut untuk logam dari besi untuk lemari dari besi merek schaum, ukuran 2 inch.', '1', '1', '1000'),
('A', '1234', 'B00002', '324', '234324', '32', '34', '234');

-- --------------------------------------------------------

--
-- Table structure for table `detail_lamp_document`
--

CREATE TABLE `detail_lamp_document` (
  `nomor_pengajuan` varchar(100) collate latin1_general_ci NOT NULL,
  `jenis_document` varchar(255) collate latin1_general_ci NOT NULL,
  `nomor_document` varchar(255) collate latin1_general_ci NOT NULL,
  `tgl_document` varchar(100) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `detail_lamp_document`
--

INSERT INTO `detail_lamp_document` (`nomor_pengajuan`, `jenis_document`, `nomor_document`, `tgl_document`) VALUES
('050300-000001-20061130-000100', '123333333', 'SGF0012122', '12/22/2009'),
('050300-000001-20061130-000100', 'O021090210921', 'SFG342423424', '22\\11\\2009');

-- --------------------------------------------------------

--
-- Table structure for table `detail_lamp_document2`
--

CREATE TABLE `detail_lamp_document2` (
  `nomor_pengajuan` varchar(100) collate latin1_general_ci NOT NULL,
  `jenis_document` varchar(255) collate latin1_general_ci NOT NULL,
  `nomor_document` varchar(255) collate latin1_general_ci NOT NULL,
  `tgl_document` varchar(100) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `detail_lamp_document2`
--

INSERT INTO `detail_lamp_document2` (`nomor_pengajuan`, `jenis_document`, `nomor_document`, `tgl_document`) VALUES
('050300-000001-20061130-000100', '123333333', 'SGF0012122', '12/22/2009'),
('050300-000001-20061130-000100', 'O021090210921', 'SFG342423424', '22\\11\\2009'),
('fdf', 'dfsfsdf', 'jhkh', ''),
('fdf', 'kkljljk', 'kljljlj', ''),
('dgasgsgsgfs', '', '', ''),
('dgasgsgsgfs', '', '', ''),
('xxxxxxxxx', '', '', ''),
('xxxxxxxxx', '', '', ''),
('xxxxxxxxx', '', '', ''),
('xxxxxxxxx', '', '', ''),
('dfsfsdfssssss', '', '', ''),
('dfsfsdfssssss', '', '', ''),
('dfsfsdfssssss', '', '', ''),
('dfsfsdfssssss', '', '', ''),
('dfsfsdfssssss', '', '', ''),
('dfsfsdfssssss', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `detail_lamp_document9`
--

CREATE TABLE `detail_lamp_document9` (
  `nomor_pengajuan` varchar(100) collate latin1_general_ci NOT NULL,
  `jenis_document` varchar(255) collate latin1_general_ci NOT NULL,
  `nomor_document` varchar(255) collate latin1_general_ci NOT NULL,
  `tgl_document` varchar(100) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `detail_lamp_document9`
--

INSERT INTO `detail_lamp_document9` (`nomor_pengajuan`, `jenis_document`, `nomor_document`, `tgl_document`) VALUES
('000119 28/02/2009', 'Izin Dep. Perindustrian', '99/DEPERIN/2009', '22/10/2009'),
('000119 28/02/2009', 'Izin Dep. Perindustrian', '99/DEPERIN/2009 22/10/2009', '2013-03-27'),
('1234', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `incoming_outgoing`
--

CREATE TABLE `incoming_outgoing` (
  `nomor` char(10) collate latin1_general_ci NOT NULL,
  `no_spb` char(100) collate latin1_general_ci NOT NULL,
  `tgl_spb` date NOT NULL,
  `dept` char(100) collate latin1_general_ci NOT NULL,
  `name_ppc` char(100) collate latin1_general_ci NOT NULL,
  `catatan` varchar(100) collate latin1_general_ci NOT NULL,
  `userid` char(8) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `incoming_outgoing`
--

INSERT INTO `incoming_outgoing` (`nomor`, `no_spb`, `tgl_spb`, `dept`, `name_ppc`, `catatan`, `userid`) VALUES
('0000000001', 'SPB-2013000001/INCOMING', '2013-03-17', 'Bagian Penyimpanan B', 'wer', 'wer', 'admin'),
('0000000002', 'SPB-2013000002/INC-OUT', '2013-04-26', 'Bagian Alat Produksi', 'dsf', 'sdf', 'admin'),
('0000000003', 'SPB-2013000003/INC-OUT', '2013-04-26', 'Bagian Alat Produksi', '45', '45', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `incoming_outgoing_detail`
--

CREATE TABLE `incoming_outgoing_detail` (
  `nomor` char(10) collate latin1_general_ci NOT NULL,
  `id` int(10) NOT NULL auto_increment,
  `no_spb` varchar(100) collate latin1_general_ci NOT NULL,
  `tgl_spb` date NOT NULL,
  `kode` char(100) collate latin1_general_ci NOT NULL,
  `jumlah` varchar(20) collate latin1_general_ci NOT NULL,
  `ket` char(100) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `incoming_outgoing_detail`
--

INSERT INTO `incoming_outgoing_detail` (`nomor`, `id`, `no_spb`, `tgl_spb`, `kode`, `jumlah`, `ket`) VALUES
('0000000001', 2, 'SPB-2013000001/INCOMING', '2013-03-17', 'B00002', '1.00', 'wer'),
('0000000002', 3, 'SPB-2013000002/INC-OUT', '2013-04-26', 'B00003', '1', 'wer'),
('0000000002', 4, 'SPB-2013000002/INC-OUT', '2013-04-26', 'B00003', '1', '345'),
('0000000002', 5, 'SPB-2013000002/INC-OUT', '2013-04-26', 'B00006', '1', '32'),
('0000000002', 6, 'SPB-2013000002/INC-OUT', '2013-04-26', 'B00005', '1', 'ewr'),
('0000000002', 7, 'SPB-2013000002/INC-OUT', '2013-04-26', 'B00007', '1', 'ew'),
('0000000002', 8, 'SPB-2013000002/INC-OUT', '2013-04-26', 'B00001', '1', 'ew'),
('0000000002', 9, 'SPB-2013000002/INC-OUT', '2013-04-26', 'B00002', '1', 'ew'),
('0000000003', 10, 'SPB-2013000003/INC-OUT', '2013-04-26', 'B00004', '100', 'ewe');

-- --------------------------------------------------------

--
-- Table structure for table `incoming_terima`
--

CREATE TABLE `incoming_terima` (
  `nomor` char(10) collate latin1_general_ci NOT NULL,
  `no_lpb` varchar(100) collate latin1_general_ci NOT NULL,
  `tgl_lpb` date NOT NULL,
  `dari` varchar(255) collate latin1_general_ci NOT NULL,
  `no_spb` char(8) collate latin1_general_ci NOT NULL,
  `tgl_spb` date NOT NULL,
  `dept` char(100) collate latin1_general_ci NOT NULL,
  `name_ppc` char(100) collate latin1_general_ci NOT NULL,
  `catatan` varchar(100) collate latin1_general_ci NOT NULL,
  `user_trt` varchar(100) collate latin1_general_ci NOT NULL,
  `userid` char(8) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `incoming_terima`
--

INSERT INTO `incoming_terima` (`nomor`, `no_lpb`, `tgl_lpb`, `dari`, `no_spb`, `tgl_spb`, `dept`, `name_ppc`, `catatan`, `user_trt`, `userid`) VALUES
('0000000001', 'LPB-2013000001/INCOMING', '2013-03-17', 'PRODUKSI', 'SPB-2013', '2013-03-17', 'Bagian Alat Produksi', '324', '234', 'admin', 'admin'),
('0000000002', 'LPB-2013000002/INCOMING', '2013-06-10', 'PRODUKSI', 'SPB-2013', '2013-06-10', 'Bagian Pra Produksi', '324', '234', 'goestoe', 'goestoe');

-- --------------------------------------------------------

--
-- Table structure for table `incoming_terima_detail`
--

CREATE TABLE `incoming_terima_detail` (
  `nomor` char(10) collate latin1_general_ci NOT NULL,
  `id` int(10) NOT NULL auto_increment,
  `dari` varchar(255) collate latin1_general_ci NOT NULL,
  `no_lpb` varchar(100) collate latin1_general_ci NOT NULL,
  `tgl_lpb` date NOT NULL,
  `kode` char(100) collate latin1_general_ci NOT NULL,
  `jumlah` varchar(20) collate latin1_general_ci NOT NULL,
  `ket` char(100) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `incoming_terima_detail`
--

INSERT INTO `incoming_terima_detail` (`nomor`, `id`, `dari`, `no_lpb`, `tgl_lpb`, `kode`, `jumlah`, `ket`) VALUES
('0000000001', 7, 'PRODUKSI', 'LPB-2013000001/INCOMING', '2013-03-17', 'B00003', '1.00', '324'),
('0000000002', 8, 'PRODUKSI', 'LPB-2013000002/INCOMING', '2013-06-10', '45678', '30', '324');

-- --------------------------------------------------------

--
-- Table structure for table `infokb`
--

CREATE TABLE `infokb` (
  `id` char(4) collate latin1_general_ci NOT NULL,
  `kode` varchar(8) collate latin1_general_ci NOT NULL,
  `nama` varchar(100) collate latin1_general_ci NOT NULL,
  `alamat` varchar(200) collate latin1_general_ci NOT NULL,
  `prop` char(100) collate latin1_general_ci NOT NULL,
  `kota` varchar(100) collate latin1_general_ci NOT NULL,
  `npwp` varchar(20) collate latin1_general_ci NOT NULL,
  `telp` varchar(100) collate latin1_general_ci NOT NULL,
  `fax` varchar(100) collate latin1_general_ci NOT NULL,
  `skepkb` varchar(100) collate latin1_general_ci NOT NULL,
  `tglskep` date NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `infokb`
--

INSERT INTO `infokb` (`id`, `kode`, `nama`, `alamat`, `prop`, `kota`, `npwp`, `telp`, `fax`, `skepkb`, `tglskep`) VALUES
('id', 'DEMO', 'PT Demo Aplikasi Indonesia', 'EJIP Industrial Park Plot 4E, Cikarang', 'Jawa Barat', 'Bekasi', '01021221545555', '021-8970101', '021-8970101', '1206/KM.4/2012', '2013-01-22');

-- --------------------------------------------------------

--
-- Table structure for table `jenisbckeluar`
--

CREATE TABLE `jenisbckeluar` (
  `kode` char(6) collate latin1_general_ci NOT NULL,
  `jenis` varchar(100) collate latin1_general_ci NOT NULL,
  `nama` varchar(100) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `jenisbckeluar`
--

INSERT INTO `jenisbckeluar` (`kode`, `jenis`, `nama`) VALUES
('BCOUT1', 'BC 2.7', 'Pengeluaran barang ke Kawasan Berikat lainnya'),
('BCOUT2', 'BC 4.1', 'Pengeluaran barang ke TLDDP');

-- --------------------------------------------------------

--
-- Table structure for table `jenisbcmasuk`
--

CREATE TABLE `jenisbcmasuk` (
  `kode` char(6) collate latin1_general_ci NOT NULL,
  `jenis` varchar(100) collate latin1_general_ci NOT NULL,
  `nama` varchar(100) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `jenisbcmasuk`
--

INSERT INTO `jenisbcmasuk` (`kode`, `jenis`, `nama`) VALUES
('BCIN01', 'BC 2.3', 'Pemasukan barang dari Luar Daerah Pabean/Luar Negeri'),
('BCIN02', 'BC 2.7', 'Pemasukan barang dari Kawasan Berikat lain atau Gudang Berikat');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kd_kategori` char(3) collate latin1_general_ci NOT NULL,
  `nm_kategori` varchar(100) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kd_kategori`, `nm_kategori`) VALUES
('K01', 'Bahan Baku/Penolong'),
('K02', 'Barang Jadi'),
('K03', 'Barang Modal dan Peralatan Perkantoran'),
('K04', 'Barang Sisa / Scrap');

-- --------------------------------------------------------

--
-- Table structure for table `kemasan`
--

CREATE TABLE `kemasan` (
  `id_kemasan` int(3) NOT NULL auto_increment,
  `kd_kemasan` varchar(4) collate latin1_general_ci NOT NULL,
  `uraian_kemasan` varchar(100) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id_kemasan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=140 ;

--
-- Dumping data for table `kemasan`
--

INSERT INTO `kemasan` (`id_kemasan`, `kd_kemasan`, `uraian_kemasan`) VALUES
(1, 'AE', 'AEROSOL'),
(2, 'AM', 'Ampoule, non protected'),
(3, 'AP', 'Ampoule, protected'),
(4, 'AT', 'Atomizer'),
(5, 'BA', 'Barrel'),
(6, 'BB', 'Bobbin'),
(7, 'BC', 'Bottlecrate, bottlerack'),
(8, 'BD', 'Board'),
(9, 'BE', 'Bundle'),
(10, 'BF', 'Balloon, non-protected'),
(11, 'BG', 'Bag'),
(12, 'BH', 'Bunch'),
(13, 'BI', 'Bin'),
(14, 'BJ', 'Bucket'),
(15, 'BK', 'Basket'),
(16, 'BL', 'Bale, compressed'),
(17, 'BN', 'Bale, non -compressed'),
(18, 'BO', 'Bottle, non-protected, cylindrical'),
(19, 'BP', 'Balloon, protected'),
(20, 'BQ', 'Bottle, protected cylindrical'),
(21, 'BR', 'Bar'),
(22, 'BS', 'Bottle, non-protected, bulbous'),
(23, 'BT', 'Bolt'),
(24, 'BU', 'Butt'),
(25, 'BV', 'Bottle, protected bulbous'),
(26, 'BX', 'Box'),
(27, 'BY', 'Board, in bundle/bunch/truss'),
(28, 'BZ', 'Bars, in bundle/bunch/truss'),
(29, 'CA', 'Can, rectangular'),
(30, 'CB', 'Beer crate'),
(31, 'CC', 'Churn'),
(32, 'CE', 'Creel'),
(33, 'CF', 'Coffer'),
(34, 'CG', 'Cage'),
(35, 'CH', 'Chest'),
(36, 'CI', 'Canister'),
(37, 'CJ', 'Coffin'),
(38, 'CK', 'Cask'),
(39, 'CL', 'Coil'),
(40, 'CO', 'Carboy, non-protected'),
(41, 'CP', 'Carboy, protected'),
(42, 'CR', 'Crate'),
(43, 'CS', 'Case'),
(44, 'CT', 'Carton'),
(45, 'CU', 'Cup'),
(46, 'CV', 'Cover'),
(47, 'CX', 'Can, cylindical'),
(48, 'CY', 'Cylinder'),
(49, 'CZ', 'Canvas'),
(50, 'DJ', 'Demijohn, non-protected'),
(51, 'DP', 'Demijohn, protected'),
(52, 'DR', 'Drum'),
(53, 'EN', 'Envelope'),
(54, 'FC', 'Fruit crate'),
(55, 'FD', 'Framed crate'),
(56, 'FI', 'Firkin'),
(57, 'FL', 'Flask'),
(58, 'FO', 'Footlocker'),
(59, 'FP', 'Filmpack'),
(60, 'FR', 'Frame'),
(61, 'GB', 'Gas bottle'),
(62, 'GI', 'Girder'),
(63, 'GZ', 'Girders, in bundle/bunch/truss'),
(64, 'HG', 'Hogshead'),
(65, 'HR', 'Hamper'),
(66, 'IN', 'Ingot'),
(67, 'IZ', 'ingots, in bundle/bunch/truss'),
(68, 'JC', 'Jerrican, rectangular'),
(69, 'JG', 'Jug'),
(70, 'JR', 'Jar'),
(71, 'JT', 'Jutebag'),
(72, 'JY', 'Jerrican, cylindrical'),
(73, 'KG', 'Keg'),
(74, 'LG', 'Log'),
(75, 'LZ', 'Logs, in bundle/bunch/truss'),
(76, 'MB', 'Multiply bag'),
(77, 'MC', 'milk crate'),
(78, 'MS', 'Multiwall sack'),
(79, 'MT', 'Mat'),
(80, 'MX', 'Macth box'),
(81, 'NE', 'Unpacked or unpackaged'),
(82, 'NS', 'Nest'),
(83, 'NT', 'Net'),
(84, 'PA', 'Packet'),
(85, 'PC', 'Parcel'),
(86, 'PG', 'Plate'),
(87, 'PH', 'Pitcher'),
(88, 'PI', 'Pipe'),
(89, 'PK', 'Package'),
(90, 'PL', 'Pail'),
(91, 'PN', 'Plank'),
(92, 'PO', 'Pouch'),
(93, 'PT', 'Pot'),
(94, 'PU', 'Tray pack'),
(95, 'PY', 'Plates, in bundle/bunch/truss'),
(96, 'PZ', 'Planks/Pipes, in bundle/bunch/truss'),
(97, 'RD', 'Rod'),
(98, 'RG', 'Ring'),
(99, 'RL', 'Reel'),
(100, 'RO', 'Roll'),
(101, 'RT', 'Rednet'),
(102, 'RZ', 'Rods, in bundle/ bunch/truss'),
(103, 'SA', 'Sack'),
(104, 'SC', 'Shallow crate'),
(105, 'SD', 'Spindle'),
(106, 'SE', 'Sea-chest'),
(107, 'SH', 'Sachet'),
(108, 'SK', 'Skeleton case'),
(109, 'SL', 'Slipsheet'),
(110, 'SM', 'Sheetmetal'),
(111, 'ST', 'Sheet'),
(112, 'SU', 'Suitcase'),
(113, 'SW', 'Shrinkwrapped'),
(114, 'SZ', 'Sheets, in bundle/bunch/truss'),
(115, 'TB', 'Tub'),
(116, 'TC', 'Tea-chest'),
(117, 'TD', 'Tube, collapsible'),
(118, 'TK', 'Tank, rectangular'),
(119, 'TN', 'Tin'),
(120, 'TO', 'Tun'),
(121, 'TP', 'Tray'),
(122, 'TR', 'Trunk'),
(123, 'TS', 'Truss'),
(124, 'TU', 'Tube'),
(125, 'TY', 'Tank, cylindrical'),
(126, 'TZ', 'Tubes, in bundle/bunch/truss'),
(127, 'VA', 'Vat'),
(128, 'VG', 'Bulk, gas ( at 1031 mbar and 15C )'),
(129, 'VI', 'Vial'),
(130, 'VL', 'Bulk, liquid'),
(131, 'VO', 'Bulk, solid, large particles ("nodules")'),
(132, 'VP', 'Vacuumpacked'),
(133, 'VQ', 'Bulk, liquefied gas (at abnormal temperature)'),
(134, 'VR', 'Bulk, solid, granular particles ("grains")'),
(135, 'VY', 'Bulk, solid, fine particles ("powders")'),
(136, 'WB', 'Wickerbottle');

-- --------------------------------------------------------

--
-- Table structure for table `konversi`
--

CREATE TABLE `konversi` (
  `id` int(6) NOT NULL,
  `kd_barang` varchar(100) collate latin1_general_ci NOT NULL,
  `type` varchar(100) collate latin1_general_ci NOT NULL,
  `spec` varchar(100) collate latin1_general_ci NOT NULL,
  `ket` varchar(100) collate latin1_general_ci NOT NULL,
  `userid` char(100) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `konversi`
--


-- --------------------------------------------------------

--
-- Table structure for table `konversi_detail`
--

CREATE TABLE `konversi_detail` (
  `kd_barang` char(100) collate latin1_general_ci NOT NULL,
  `kode` char(100) collate latin1_general_ci NOT NULL,
  `jumlah` varchar(20) collate latin1_general_ci NOT NULL,
  `ket` char(100) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `konversi_detail`
--

INSERT INTO `konversi_detail` (`kd_barang`, `kode`, `jumlah`, `ket`) VALUES
('b00005', 'B00002', '1.00', '123');

-- --------------------------------------------------------

--
-- Table structure for table `kppbc`
--

CREATE TABLE `kppbc` (
  `id` int(4) NOT NULL auto_increment,
  `KdKpbc` varchar(100) collate latin1_general_ci NOT NULL,
  `UrKdKpbc` varchar(100) collate latin1_general_ci NOT NULL,
  `kota_kppbc` varchar(100) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=858 ;

--
-- Dumping data for table `kppbc`
--

INSERT INTO `kppbc` (`id`, `KdKpbc`, `UrKdKpbc`, `kota_kppbc`) VALUES
(1, '000000', 'KANTOR PUSAT', 'JAKARTA'),
(2, '010000', 'KANTOR WILAYAH I MEDAN', 'MEDAN'),
(3, '010201', 'BALAI PENGUJIAN DAN IDENTIFIKASI BARANG MEDAN', ''),
(4, '010700', 'KPBC BELAWAN', 'BELAWAN'),
(5, '010731', 'POS PERCUT', ''),
(6, '010732', 'POS PANTAI CERMIN', ''),
(7, '010733', 'POS PANTAI LABU', ''),
(8, '010734', 'POS LUBUK PAKAM', ''),
(9, '010735', 'POS BINJAI', ''),
(10, '010736', 'POS UJUNG BARU', ''),
(11, '010737', 'POS GUDANG MERAH', ''),
(12, '010738', 'POS GABION', ''),
(13, '010739', 'POS RANTAU PANJANG', ''),
(14, '010800', 'KPBC MEDAN', 'MEDAN'),
(15, '010838', 'POS BANDARA I', ''),
(16, '010839', 'POS BANDARA II', ''),
(17, '010840', 'POS BANDARA III', ''),
(18, '010900', 'KPBC PANGKALAN SUSU', 'PANGKALAN SUSU'),
(19, '010911', 'KANTOR BANTU PANGKALAN BRANDAN', 'PANGKALAN BRANDAN'),
(20, '010931', 'POS TANJUNG PURA', ''),
(21, '010933', 'POS PANGKALAN SUSU', ''),
(22, '011000', 'KPBC PEMATANG SIANTAR', 'PEMATANG SIANTAR'),
(23, '011031', 'POS PORSEA', ''),
(24, '011032', 'POS KABANJAHE', ''),
(25, '011033', 'POS SIDIKALANG', ''),
(26, '011100', 'KPBC TELUK NIBUNG', 'TELUK NIBUNG'),
(27, '011131', 'POS TANJUNG TIRAM', ''),
(28, '011134', 'POS LEIDONG', ''),
(29, '011135', 'POS LABUHAN BILIK', ''),
(30, '011137', 'POS RANTAU PRAPAT', ''),
(31, '011138', 'POS TELUK NIBUNG', ''),
(32, '011200', 'KPBC KUALA TANJUNG', 'KUALA TANJUNG'),
(33, '011211', 'KANTOR BANTU TEBING TINGGI', 'TEBING TINGGI'),
(34, '011231', 'POS BANDAR KHALIPAH', ''),
(35, '011232', 'POS TELUK MENGKUDU', ''),
(36, '011233', 'POS TANJUNG BERINGIN', ''),
(37, '011234', 'POS PANGKALAN DODEK', ''),
(38, '011235', 'POS KUALA TANJUNG', ''),
(39, '011300', 'KPBC SIBOLGA', 'SIBOLGA'),
(40, '011311', 'KANTOR BANTU GUNUNG SITOLI', ''),
(41, '011331', 'POS BARUS', ''),
(42, '011332', 'POS NATAL', ''),
(43, '011334', 'POS TELUK DALAM', ''),
(44, '011336', 'POS PULAU TELLO', ''),
(45, '011340', 'POS SIBOLGA', ''),
(46, '011500', 'KPBC TELUK BAYUR', 'TELUK BAYUR'),
(47, '011511', 'KANTOR BANTU SIKAKAP', ''),
(48, '011514', 'KANTOR BANTU TUA PEJAT', ''),
(49, '011531', 'POS MUARA PADANG', ''),
(50, '011534', 'POS SIBERUT MENTAWAI', ''),
(51, '011537', 'POS PARIAMAN', ''),
(52, '011539', 'POS PAINAN', ''),
(53, '011540', 'POS MUARO', ''),
(54, '011543', 'POS TELUK BAYUR', ''),
(55, '011544', 'POS CUBADAK', ''),
(56, '011545', 'POS AIR BANGIS', ''),
(57, '011546', 'POS BUNGUS', ''),
(58, '011547', 'POS BANDARA TABING', ''),
(59, '020000', 'KANTOR WILAYAH II TANJUNG BALAI KARIMUN', 'TG. BALAI KARIMUN'),
(60, '020100', 'KPBC TANJUNG BALAI KARIMUN', 'TG. BALAI KARIMUN'),
(61, '020101', 'PANGKALAN SARANA OPERASI TANJUNG BALAI KARIMUN', ''),
(62, '020112', 'KANTOR BANTU TELUK PAKU', ''),
(63, '020131', 'KANTOR BANTU MORO SULIT', ''),
(64, '020132', 'KANTOR BANTU TANJUNG BATU', ''),
(65, '020133', 'POS SAWANG', ''),
(66, '020134', 'POS URUNG', ''),
(67, '020136', 'POS TANJUNG BALAI KARIMUN', ''),
(68, '020137', 'POS PASIR PANJANG', ''),
(69, '020200', 'KPBC SAMBU BELAKANG PADANG', 'SAMBU BLK. PADANG'),
(70, '020231', 'POS PULAU LAYANG', ''),
(71, '020232', 'POS PULAU PELAMPUNG', ''),
(72, '020233', 'POS SUMBU BELAKANG PADANG', ''),
(73, '020300', 'KPBC SELAT PANJANG', 'SELAT PANJANG'),
(74, '020331', 'POS TANJUNG SAMAK', ''),
(75, '020332', 'POS TELUK BELITUNG', ''),
(76, '020333', 'POS TERUS', ''),
(77, '020336', 'POS TANJUNG KEDABU', ''),
(78, '020337', 'POS PENYALAI', ''),
(79, '020338', 'POS SELAT PANJANG', ''),
(80, '020339', 'POS TANJUNG MOTONG', ''),
(81, '020340', 'POS SERAPUNG', ''),
(82, '020400', 'KPBC BATAM', 'BATAM'),
(83, '020411', 'KANTOR BANTU PULAU REMPANG', ''),
(84, '020412', 'KANTOR BANTU PULAU GALANG', ''),
(85, '020431', 'POS PULAU BULUH', ''),
(86, '020432', 'POS TANJUNG RIAU', ''),
(87, '020433', 'POS TANJUNG UNCANG', ''),
(88, '020434', 'POS TANJUNG PIAYU', ''),
(89, '020435', 'POS BATU BESAR PANTAI', ''),
(90, '020436', 'POS SEI JODOH', ''),
(91, '020437', 'POS MOMOI', ''),
(92, '020438', 'POS TANJUNG SAU', ''),
(93, '020439', 'POS PULAU NGENANG', ''),
(94, '020440', 'POS JANDA BERHIAS', ''),
(95, '020441', 'POS TANJUNG KASEM', ''),
(96, '020442', 'POS TELAGA PUNGGUR', ''),
(97, '020443', 'POS NONGSA', ''),
(98, '020444', 'POS SAGULUNG', ''),
(99, '020445', 'POS BATU AMPAR  I', ''),
(100, '020446', 'POS BATU AMPAR  II', ''),
(101, '020447', 'POS BANDARA  I', ''),
(102, '020448', 'POS BANDARA  II', ''),
(103, '020449', 'POS MACOBAR', ''),
(104, '020450', 'POS KABIL', ''),
(105, '020453', 'POS SEKUPANG', ''),
(106, '020455', 'POS TANJUNG REMPANG', ''),
(107, '020456', 'POS TANJUNG SIPATUNG', ''),
(108, '020457', 'POS TANJUNG KAREPA', ''),
(109, '020458', 'POS POKOB BARAT', ''),
(110, '020459', 'POS TANJUNG CAKANG', ''),
(111, '020500', 'KPBC TANJUNG PINANG', 'TANJUNG PINANG'),
(112, '020536', 'POS TANJUNG PINANG', ''),
(113, '020537', 'POS BANDARA KIJANG', ''),
(114, '020538', 'POS PELABUHAN KIJANG', ''),
(115, '020600', 'KPBC TANJUNG UBAN', 'TANJUNG UBAN'),
(116, '020632', 'POS TANJUNG UBAN', ''),
(117, '020633', 'POS LAGOI', ''),
(118, '020634', 'POS LOBAM', ''),
(119, '020800', 'KPBC DABO SINGKEP', 'DABO SINGKEP'),
(120, '020831', 'POS PENUBA', ''),
(121, '020832', 'POS SUNGAI BULUH', ''),
(122, '020833', 'POS SENAYANG', ''),
(123, '020834', 'POS  DAIK', ''),
(124, '020835', 'POS BANDARA DABO', ''),
(125, '020836', 'POS DABO SINGKEP', ''),
(126, '020900', 'KPBC DUMAI', 'DUMAI'),
(127, '020911', 'KANTOR BANTU TANJUNG MEDANG', ''),
(128, '020931', 'POS SELAT MORONG', ''),
(129, '020932', 'POS TANAH PUTIH', ''),
(130, '020933', 'POS DUMAI', ''),
(131, '020934', 'POS TANJUNG MEDANG', ''),
(132, '021000', 'KPBC BAGAN SIAPI-API', 'BAGAN SIAPI-API'),
(133, '021011', 'KANTOR BANTU PENIPAHAN', ''),
(134, '021032', 'POS SINABOI', ''),
(135, '021033', 'POS LUMBA-LUMBA', ''),
(136, '021034', 'POS PULAU HALANG', ''),
(137, '021035', 'POS BAGAN SIAPI-API', ''),
(138, '021100', 'KPBC BENGKALIS', 'BENGKALIS'),
(139, '021111', 'KANTOR BANTU SUNGAI PAKNING', ''),
(140, '021112', 'KANTOR BANTU BANTAN TENGAH', ''),
(141, '021131', 'POS SIAK KECIL', ''),
(142, '021132', 'POS SEI KEMBUNG', ''),
(143, '021133', 'POS BANDUL', ''),
(144, '021134', 'POS BUKIT BATU', ''),
(145, '021136', 'POS PRAPAT TUNGGAL', ''),
(146, '021137', 'POS BENGKALIS', ''),
(147, '021200', 'KPBC PEKANBARU', 'PEKANBARU'),
(148, '021211', 'KANTOR BANTU PERAWANG', ''),
(149, '021212', 'KANTOR BANTU RUMBAI', ''),
(150, '021213', 'KANTOR BANTU RANTAU PANJANG', ''),
(151, '021231', 'POS BANDARA I', ''),
(152, '021232', 'POS BANDARA II', ''),
(153, '021233', 'POS BUATAN', ''),
(154, '021300', 'KPBC SIAK SRI INDRAPURA', 'SIAK SRI INDRAPURA'),
(155, '021331', 'POS SUNGAI APIT', ''),
(156, '021333', 'POS TANJUNG BUTON', ''),
(157, '021334', 'POS SIAK SRI INDRA PURA', ''),
(158, '021500', 'KPBC KUALA ENOK', 'KUALA ENOK'),
(159, '021511', 'KANTOR BANTU SUNGAI GUNTUNG', ''),
(160, '021513', 'KANTOR BANTU RENGAT', ''),
(161, '021531', 'POS PERIGI RAJA', ''),
(162, '021532', 'POS CONCONG LUAR', ''),
(163, '021533', 'POS SEI BULUH, INDRAGIRI', ''),
(164, '021534', 'POS PULAU KIJANG', ''),
(165, '021535', 'POS KUALA GADUNG', ''),
(166, '021536', 'POS KUALA BLARAS', ''),
(167, '021538', 'POS KUALA ENOK', ''),
(168, '021543', 'POS KUALACINAKU', ''),
(169, '021544', 'POS BANDARA JAPURA', ''),
(170, '021545', 'POS PULAU CAWAN', ''),
(171, '021546', 'POS KUALA BAYAS', ''),
(172, '021547', 'POS PULAU BURUNG', ''),
(173, '021700', 'KPBC RANAI', ''),
(174, '021711', 'KANTOR BANTU TAREMPA', ''),
(175, '021731', 'POS UDANG NATUNA', ''),
(176, '021732', 'POS MATAK', ''),
(177, '021733', 'POS SERASAN', ''),
(178, '021734', 'POS MIDAI', ''),
(179, '021735', 'POS TAMBELAN', ''),
(180, '021736', 'POS JEMAJA', ''),
(181, '021737', 'POS BUNGURAN BARAT', ''),
(182, '021738', 'POS BUNGURAN TIMUR', ''),
(183, '030000', 'KANTOR WILAYAH III PALEMBANG', 'PALEMBANG'),
(184, '030100', 'KPBC PALEMBANG', 'PALEMBANG'),
(185, '030131', 'POS TANJUNG BUYUT', ''),
(186, '030134', 'POS MUARAENIM', ''),
(187, '030135', 'POS SEKAYU', ''),
(188, '030136', 'POS LUBUKLINGGAU', ''),
(189, '030138', 'POS BATURAJA', ''),
(190, '030139', 'POS PALEMBANG', ''),
(191, '030140', 'POS PLAJU', ''),
(192, '030141', 'POS SUNGAI GERONG', ''),
(193, '030142', 'POS KERTAPATI', ''),
(194, '030143', 'POS PUSRI', ''),
(195, '030144', 'POS BANDARA S. BADARUDIN II', ''),
(196, '030200', 'KPBC BENGKULU', 'PULAU BAAI'),
(197, '030231', 'POS LINAU', ''),
(198, '030232', 'POS MUKO-MUKO', ''),
(199, '030233', 'POS PULAU ENGGANO', ''),
(200, '030235', 'POS P.BAI', ''),
(201, '030237', 'POS BANDARA PADANG KEMILANG', ''),
(202, '030300', 'KPBC PANGKAL PINANG', 'PANGKAL BALAM'),
(203, '030311', 'KANTOR BANTU BELINYU', ''),
(204, '030312', 'KANTOR BANTU MUNTOK', ''),
(205, '030332', 'POS KURAU', ''),
(206, '030333', 'POS SUNGAI LIAT', ''),
(207, '030334', 'POS LUBUK BESAR', ''),
(208, '030335', 'POS SUNGAI SELAN', ''),
(209, '030337', 'POS PANGKAL BALAM', ''),
(210, '030338', 'POS TOBOALI', ''),
(211, '030339', 'POS AIR ITAM', ''),
(212, '030340', 'POS DEPATI AMIR BANGKA', ''),
(213, '030341', 'POS JEBUS', ''),
(214, '030342', 'POS KAYU ARANG', ''),
(215, '030343', 'POS TEMPILANG', ''),
(216, '030344', 'POS MUNTOK', ''),
(217, '030500', 'KPBC TANJUNG PANDAN', 'TANJUNG PANDAN'),
(218, '030511', 'KANTOR BANTU MANGGAR', ''),
(219, '030535', 'POS TANJUNG PANDAN', ''),
(220, '030537', 'POS KAMPIT', ''),
(221, '030538', 'POS BANDARA H. AS. HANANDJOEDDIN BELITUNG', ''),
(222, '030600', 'KPBC JAMBI', 'JAMBI'),
(223, '030611', 'KANTOR BANTU KUALA TUNGKAL', ''),
(224, '030612', 'KANTOR BANTU MUARA SABAK', ''),
(225, '030631', 'POS PANGKAL DURI', ''),
(226, '030632', 'POS SIMBUR NAIR', ''),
(227, '030633', 'POS KUALA MENDAHARA', ''),
(228, '030634', 'POS KAMPUNG LAUT', ''),
(229, '030635', 'POS NIPAH PANJANG', ''),
(230, '030636', 'POS JAMBI', ''),
(231, '030637', 'POS KUALA TUNGKAL', ''),
(232, '030700', 'KPBC BANDAR LAMPUNG', 'PANJANG'),
(233, '030712', 'KANTOR BANTU KOTA AGUNG', ''),
(234, '030735', 'POS KALIANDA', ''),
(235, '030736', 'POS PUTIH MATARAM', ''),
(236, '030739', 'POS WAY SEPUTIH', ''),
(237, '030744', 'POS BAKAUHENI', ''),
(238, '030745', 'POS DIPASENA', ''),
(239, '030746', 'POS BRATASENA', ''),
(240, '030747', 'POS BANDARA RADIN INTEN', ''),
(241, '040000', 'KANTOR WILAYAH IV JAKARTA', 'JAKARTA'),
(242, '040100', 'KPBC TANJUNG PRIOK I', 'JAKARTA'),
(243, '040101', 'PANGKALAN SARANA OPERASI TANJUNG PRIOK', ''),
(244, '040111', 'KANTOR BANTU SUNDA KELAPA', ''),
(245, '040138', 'POS UTAMA E', ''),
(246, '040142', 'POS UTPK II', ''),
(247, '040143', 'POS SUNDA KELAPA', ''),
(248, '040145', 'POS WIDURI', ''),
(249, '040146', 'POS ARJUNA', ''),
(250, '040147', 'POS CINTA NATOMAR', ''),
(251, '040148', 'POS KBN', ''),
(252, '040149', 'POS NUSANTARA I (002)', ''),
(253, '040150', 'POS NUSANTARA II (005)', ''),
(254, '040151', 'POS 009 X', ''),
(255, '040152', 'POS ARSA', ''),
(256, '040153', 'PELAB. PELNI BARAT (POS 104)', ''),
(257, '040154', 'TERMINAL PENUMPANG', ''),
(258, '040155', 'POS LAPANGAN 207X', ''),
(259, '040156', 'POS BANTU KADE 301/302', ''),
(260, '040157', 'POS KADE 209/210', ''),
(261, '040158', 'BANDA', ''),
(262, '040159', 'MARINA ANCOL', ''),
(263, '040160', 'MUARA BARU', ''),
(264, '040200', 'KPBC TANJUNG PRIOK II', 'JAKARTA'),
(265, '040241', 'POS UTPK I (EKSPOR)', ''),
(266, '040242', 'POS UTPK I (IMPOR)', ''),
(267, '040245', 'POS BEA CUKAI 305', ''),
(268, '040246', 'POS BITUNG UTAMA A', ''),
(269, '040247', 'POS BITUNG UTAMA B', ''),
(270, '040300', 'KPBC TANJUNG PRIOK III', 'JAKARTA'),
(271, '040333', 'POS DWIPA I', ''),
(272, '040334', 'POS DWIPA II', ''),
(273, '040335', 'POS UTPK KOJA I', ''),
(274, '040337', 'AGUNG RAYA', ''),
(275, '040338', 'POS CILINCING', ''),
(276, '040339', 'POS PERTAMINA', ''),
(277, '040340', 'POS BOGASARI', ''),
(278, '040341', 'POS MARUNDA', ''),
(279, '040342', 'DHARMA KARYA PERDANA', ''),
(280, '040343', 'KALIBARU', ''),
(281, '040400', 'KPBC JAKARTA', 'JAKARTA'),
(282, '040432', 'POS UDARA HALIM PERDANA KUSUMA', ''),
(283, '040600', 'KPBC KANTOR POS PASAR BARU', 'JAKARTA'),
(284, '050000', 'KANTOR WILAYAH V BANDUNG', 'BANDUNG'),
(285, '050100', 'KPBC SUKARNO-HATTA', 'CENGKARENG'),
(286, '050132', 'POS TANGERANG', ''),
(287, '050134', 'POS BANDARA I', ''),
(288, '050135', 'POS BANDARA II', ''),
(289, '050136', 'POS BANDARA III', ''),
(290, '050300', 'KPBC BOGOR', 'BOGOR'),
(291, '050331', 'POS SUKABUMI', 'SUKABUMI'),
(292, '050336', 'POS PEL. RATU', ''),
(293, '050337', 'POS DEPOK', ''),
(294, '050338', 'POS CIANJUR', ''),
(295, '050339', 'POS CIBINONG', ''),
(296, '050400', 'KPBC MERAK', 'MERAK'),
(297, '050437', 'POS MERAK', ''),
(298, '050439', 'POS TANJUNG LENENG', ''),
(299, '050440', 'POS CIGADING', ''),
(300, '050441', 'POS CHANDRA ASRI', ''),
(301, '050442', 'POS CIWANDAN', ''),
(302, '050500', 'KPBC BANDUNG', 'BANDUNG'),
(303, '050531', 'POS SUMEDANG', ''),
(304, '050535', 'POS GEDE BAGE', ''),
(305, '050536', 'POS BANDARA I', ''),
(306, '050537', 'POS BANDARA II', ''),
(307, '050600', 'KPBC TASIKMALAYA', 'TASIKMALAYA'),
(308, '050631', 'POS GARUT', ''),
(309, '050632', 'POS CIAMIS', ''),
(310, '050633', 'POS PANGANDARAN', ''),
(311, '050634', 'POS TASIKMALAYA', ''),
(312, '050700', 'KPBC CIREBON', 'CIREBON'),
(313, '050711', 'KANTOR BANTU BALONGAN', ''),
(314, '050745', 'POS CIREBON', ''),
(315, '050746', 'POS NASA SARI ACID', ''),
(316, '050747', 'POS PALIMANAN', ''),
(317, '050800', 'KPBC PURWAKARTA', 'PURWAKARTA'),
(318, '050833', 'POS PURWAKARTA', ''),
(319, '050834', 'POS SUBANG', ''),
(320, '050836', 'POS CILAMAYA', ''),
(321, '050900', 'KPBC BEKASI', 'BEKASI'),
(322, '060000', 'KANTOR WILAYAH VI SEMARANG', 'SEMARANG'),
(323, '060100', 'KPBC TANJUNG EMAS', 'SEMARANG'),
(324, '060133', 'POS DEMAK', ''),
(325, '060134', 'POS PURWODADI', ''),
(326, '060135', 'POS SALATIGA', ''),
(327, '060136', 'POS TANJUNG EMAS I', ''),
(328, '060137', 'POS TANJUNG EMAS II', ''),
(329, '060138', 'POS TANJUNG EMAS III', ''),
(330, '060139', 'POS BANDARA I', ''),
(331, '060140', 'POS BANDARA II', ''),
(332, '060141', 'POS KALIWUNGU', ''),
(333, '060143', 'POS LIK SEMARANG', ''),
(334, '060200', 'KPBC PEKALONGAN', 'PEKALONGAN'),
(335, '060235', 'POS BATANG', ''),
(336, '060236', 'POS PEKALONGAN', ''),
(337, '060300', 'KPBC KUDUS', 'KUDUS'),
(338, '060311', 'KANTOR BANTU JUWONO', ''),
(339, '060312', 'KANTOR BANTU JEPARA', ''),
(340, '060332', 'POS BANYUTOWO', ''),
(341, '060333', 'POS REMBANG', 'REMBANG'),
(342, '060334', 'POS CEPU', 'CEPU'),
(343, '060338', 'POS BLORA', ''),
(344, '060339', 'POS KARIMUN JAWA', ''),
(345, '060400', 'KPBC CILACAP', 'CILACAP'),
(346, '060412', 'KANTOR BANTU PURWOKERTO', ''),
(347, '060413', 'KANTOR BANTU KEBUMEN', ''),
(348, '060431', 'POS BANDARA TUNGGUL WULUNG', ''),
(349, '060433', 'POS MAJENANG', ''),
(350, '060434', 'POS TANJUNG INTAN', ''),
(351, '060435', 'POS PURBALINGGA', ''),
(352, '060436', 'POS BANJARNEGARA', ''),
(353, '060437', 'POS PURWOREJO', ''),
(354, '060500', 'KPPBC PURWOKERTO', 'PURWOKERTO'),
(355, '060600', 'KPBC SURAKARTA', 'SURAKARTA'),
(356, '060637', 'POS KEBAK KRAMAT', ''),
(357, '060638', 'POS KLATEN', ''),
(358, '060639', 'POS KARANGANYAR', ''),
(359, '060640', 'POS SRAGEN', ''),
(360, '060641', 'POS SUKOHARDJO', ''),
(361, '060642', 'POS WONOGIRI', ''),
(362, '060643', 'POS BOYOLALI', ''),
(363, '060644', 'POS JEBRES', ''),
(364, '060645', 'POS BANDARA I', ''),
(365, '060646', 'POS BANDARA II', ''),
(366, '060700', 'KPBC YOGYAKARTA', 'YOGYAKARTA'),
(367, '060711', 'KANTOR BANTU MAGELANG', ''),
(368, '060732', 'POS SLEMAN', ''),
(369, '060733', 'POS WATES', ''),
(370, '060734', 'POS BANTUL', ''),
(371, '060735', 'POS WONOSARI', ''),
(372, '060736', 'POS BANDARA I', ''),
(373, '060737', 'POS BANDARA II', ''),
(374, '060738', 'POS TEMANGGUNG', ''),
(375, '060739', 'POS WONOSOBO', ''),
(376, '061000', 'KPBC TEGAL', 'TEGAL'),
(377, '061035', 'POS BREBES', 'BREBES'),
(378, '061036', 'POS PEMALANG', ''),
(379, '061037', 'POS SLAWI', ''),
(380, '061038', 'POS COMAL', ''),
(381, '061039', 'POS SURODADI', ''),
(382, '061040', 'POS TEGAL', ''),
(383, '061041', 'POS SUGIH WARAS', ''),
(384, '070000', 'KANTOR WILAYAH VII SURABAYA', 'SURABAYA'),
(385, '070100', 'KPBC TANJUNG PERAK', 'SURABAYA'),
(386, '070134', 'POS ICT I', ''),
(387, '070135', 'POS ICT II', ''),
(388, '070136', 'POS NILAM I', ''),
(389, '070137', 'POS NILAM II', ''),
(390, '070138', 'POS BERLIAN I', ''),
(391, '070139', 'POS BERLIAN II', ''),
(392, '070140', 'POS MIRAH I', ''),
(393, '070141', 'POS MIRAH II', ''),
(394, '070142', 'POS JAMRUD I', ''),
(395, '070143', 'POS JAMRUD II', ''),
(396, '070144', 'POS ICT III', ''),
(397, '070145', 'POS ICT IV', ''),
(398, '070200', 'KPBC KALIANGET', 'KALIANGET'),
(399, '070201', 'BALAI PENGUJIAN DAN IDENTIFIKASI BARANG SURABAYA', ''),
(400, '070233', 'POS PASEAN', ''),
(401, '070234', 'POS SAMPANG', 'SAMPANG'),
(402, '070236', 'POS BONGKEK', ''),
(403, '070239', 'POS SAPUDI', ''),
(404, '070240', 'POS KANGEAN', ''),
(405, '070243', 'POS BRANTA', ''),
(406, '070244', 'POS BANDARA TRUNOJOYO', ''),
(407, '070245', 'POS KALIANGET', ''),
(408, '070246', 'POS TELAGA BIRU', ''),
(409, '070247', 'POS PAGERUNGAN', ''),
(410, '070300', 'KPBC GRESIK', 'GRESIK'),
(411, '070331', 'POS TAMBAK', ''),
(412, '070332', 'POS SEDAYULAWAS', ''),
(413, '070334', 'POS LAMONGAN', ''),
(414, '070335', 'POS GRESIK', ''),
(415, '070336', 'POS POLENG', ''),
(416, '070337', 'POS SANGKA PURA', ''),
(417, '070338', 'POS NGIMBOH', ''),
(418, '070400', 'KPBC BOJONEGORO', 'BOJONEGORO'),
(419, '070431', 'POS GLONDONG', ''),
(420, '070432', 'POS SOCOREJO-JENU', ''),
(421, '070433', 'POS TUBAN', ''),
(422, '070500', 'KPBC JUANDA', 'SURABAYA'),
(423, '070531', 'POS MOJOKERTO', 'MOJOKERTO'),
(424, '070533', 'POS SIDOARJO', 'SIDOARJO'),
(425, '070539', 'POS BANDARA I', ''),
(426, '070540', 'POS BANDARA II', ''),
(427, '070541', 'POS BANDARA III', ''),
(428, '070543', 'POS WATES', ''),
(429, '070600', 'KPBC MALANG', 'MALANG'),
(430, '070634', 'POS SENDANG BIRU', ''),
(431, '070635', 'POS BANDARA ABDULRACHMAN SALEH', ''),
(432, '070700', 'KPBC BLITAR', 'BLITAR'),
(433, '070800', 'KPBC KEDIRI', 'KEDIRI'),
(434, '070831', 'POS NGANJUK', 'NGANJUK'),
(435, '070833', 'POS KERTOSONO', 'KERTOSONO'),
(436, '070834', 'POS CUKIR', ''),
(437, '070835', 'POS JOMBANG', 'JOMBANG'),
(438, '070900', 'KPBC TULUNGAGUNG', 'TULUNGAGUNG'),
(439, '070932', 'POS POPOH', ''),
(440, '071000', 'KPBC MADIUN', 'MADIUN'),
(441, '071031', 'POS MAGETAN', 'MAGETAN'),
(442, '071032', 'POS NGAWI', 'NGAWI'),
(443, '071033', 'POS PONOROGO', 'PONOROGO'),
(444, '071034', 'POS CARUBAN', 'CARUBAN'),
(445, '071035', 'POS PACITAN', 'PACITAN'),
(446, '071100', 'KPBC PANARUKAN', 'PANARUKAN'),
(447, '071112', 'KANTOR BANTU TANJUNG WANGI', ''),
(448, '071132', 'POS JEMBER', 'JEMBER'),
(449, '071134', 'POS SITUBONDO', 'SITUBONDO'),
(450, '071135', 'POS BESUKI', ''),
(451, '071136', 'POS KALBUT', ''),
(452, '071137', 'POS JANGKAR', ''),
(453, '071138', 'POS BONDOWOSO', ''),
(454, '071139', 'POS PUGER', ''),
(455, '071140', 'POS PANARUKAN', ''),
(456, '071141', 'POS RAMBI PUJI', ''),
(457, '071142', 'POS BANYUWANGI', ''),
(458, '071143', 'POS TANJUNG WANGI', ''),
(459, '071144', 'POS MUNCAR', ''),
(460, '071145', 'POS GRAJAGAN', ''),
(461, '071146', 'POS KETAPANG', ''),
(462, '071200', 'KPBC PROBOLINGGO', 'PROBOLINGGO'),
(463, '071232', 'POS PEJARAKAN', ''),
(464, '071235', 'POS LUMAJANG', ''),
(465, '071236', 'POS PAITON', ''),
(466, '071237', 'POS PROBOLINGGO', ''),
(467, '071300', 'KPBC PASURUAN', 'PASURUAN'),
(468, '071333', 'POS PASURUAN', ''),
(469, '071334', 'POS LEKOK', ''),
(470, '080000', 'KANTOR WILAYAH VIII DENPASAR', 'DENPASAR'),
(471, '080100', 'KPBC NGURAH RAI', 'DENPASAR'),
(472, '080131', 'POS BANDARA I', ''),
(473, '080132', 'POS BANDARA II', ''),
(474, '080133', 'POS BANDARA III', ''),
(475, '080134', 'POS KARANGASEM', ''),
(476, '080135', 'POS BANGLI', ''),
(477, '080136', 'POS KLUNGKUNG', ''),
(478, '080137', 'POS GIANYAR', ''),
(479, '080138', 'POS TABANAN', ''),
(480, '080139', 'POS PINTU UTAMA PADANG BAI', ''),
(481, '080140', 'POS DARMAGA PADANG BAI', ''),
(482, '080141', 'POS PERTAMINA AMUK', ''),
(483, '080300', 'KPBC MATARAM', 'LEMBAR'),
(484, '080331', 'POS LABUHAN HAJI', ''),
(485, '080332', 'POS LABUHAN LOMBOK', ''),
(486, '080333', 'POS BANDARA SELAPARANG', ''),
(487, '080334', 'POS LEMBAR', ''),
(488, '080335', 'POS PEMENANG', ''),
(489, '080400', 'KPBC BIMA', 'BIMA'),
(490, '080411', 'KANTOR BANTU BADAS SUMBAWA', ''),
(491, '080412', 'KANTOR BANTU BENETE', ''),
(492, '080431', 'POS SAPE', ''),
(493, '080432', 'POS LABUHAN ALAS', ''),
(494, '080433', 'POS BANDARA BRANG BIJI', ''),
(495, '080434', 'POS BANDARA PALIBELO', ''),
(496, '080435', 'POS BIMA', ''),
(497, '080437', 'POS PEL. FERRY POTOTANO', ''),
(498, '080439', 'POS KEMPU', ''),
(499, '080500', 'KPBC KUPANG', 'TENAU KUPANG'),
(500, '080513', 'KANTOR BANTU WAINGAPU', ''),
(501, '080536', 'POS BAA/P. ROTE', ''),
(502, '080537', 'POS BANDARA MAUHAI', ''),
(503, '080538', 'POS BANDARA TAMBOLAKA', ''),
(504, '080539', 'POS RUA', ''),
(505, '080540', 'POS TENAU', ''),
(506, '080700', 'KPBC MAUMERE', 'MAUMERE'),
(507, '080711', 'KANTOR BANTU LARANTUKA', ''),
(508, '080712', 'KANTOR BANTU KEDINDI REO', ''),
(509, '080713', 'KANTOR BANTU ENDE (PL dan POS LALU BEA)', ''),
(510, '080731', 'POS LABUHAN BAJO (PU)', ''),
(511, '080733', 'POS BANDARA SATARTACIK', ''),
(512, '080734', 'POS BANDARA GEWAYANGTANA', ''),
(513, '080735', 'POS BANDARA WAJOTI', ''),
(514, '080737', 'POS BANDARA PADHA MALEDA', ''),
(515, '080738', 'POS MAUMERE', ''),
(516, '080739', 'POS ENDE IPI', ''),
(517, '080740', 'POS BANDARA H. AROEBOESMAN', ''),
(518, '080741', 'POS LABUHAN BAJO dan KOMODO (PL)', ''),
(519, '081200', 'KPBC BENOA', ''),
(520, '081211', 'KANTOR BANTU CELUKAN BAWANG', ''),
(521, '081231', 'POS NUSA PANIDA', ''),
(522, '081232', 'POS DARMAGA CARGO I', ''),
(523, '081233', 'POS DARMAGA CARGO II', ''),
(524, '081234', 'POS DARMAGA KAPAL IKAN', ''),
(525, '081235', 'POS DARMAGA KAPAL TURIS', ''),
(526, '081237', 'POS BULELENG', ''),
(527, '081238', 'POS NEGARA', ''),
(528, '081239', 'POS GILIMANUK', ''),
(529, '081300', 'KPBC ATAPUPU', ''),
(530, '081311', 'KANTOR BANTU MOTA AIN (LBD)', ''),
(531, '081312', 'KANTOR BANTU MOTA MAUK (LBD)', ''),
(532, '081313', 'KANTOR BANTU NAPAN (LBD)', ''),
(533, '081314', 'KANTOR BANTU KALABAHI (LBD)', ''),
(534, '081331', 'POS BANDARA HALIWEN', ''),
(535, '081332', 'POS LINTAS BATAS DAERAH WINI', ''),
(536, '081333', 'POS BANDARA MALI', ''),
(537, '090000', 'KANTOR WILAYAH IX PONTIANAK', 'PONTIANAK'),
(538, '090100', 'KPBC PONTIANAK', 'PONTIANAK'),
(539, '090111', 'KANTOR BANTU BANDARA SUPADIO', ''),
(540, '090131', 'POS JUNGKAT', ''),
(541, '090137', 'POS PONTIANAK', ''),
(542, '090138', 'POS SUNGAI KAKAP', ''),
(543, '090200', 'KPBC ENTIKONG', 'ENTIKONG'),
(544, '090211', 'KANTOR BANTU NANGAU BADAU', ''),
(545, '090231', 'POS MARAKAI PANJANG', ''),
(546, '090234', 'POS SIMPANG TIGA LUBUK SABUK', ''),
(547, '090235', 'POS SEGUMON', ''),
(548, '090236', 'POS BANTAN', ''),
(549, '090238', 'POS NANGA BAYAN', ''),
(550, '090300', 'KPBC TELUK AIR', 'TELUK AIR'),
(551, '090331', 'POS KUBU', ''),
(552, '090332', 'POS TELUK AIR', ''),
(553, '090333', 'POS PADANG TIKAR', ''),
(554, '090400', 'KPBC KETAPANG', 'KETAPANG'),
(555, '090411', 'KANTOR BANTU KENDAWANGAN', ''),
(556, '090431', 'POS TELUK BATANG', ''),
(557, '090433', 'POS TELUK MELANO', ''),
(558, '090434', 'POS KETAPANG', ''),
(559, '090435', 'POS BANDARA RAHADI USMAN', ''),
(560, '090500', 'KPBC SINTETE', 'SINTETE'),
(561, '090511', 'KANTOR BANTU JAGOI BABANG', ''),
(562, '090512', 'KANTOR BANTU SAMBAS', ''),
(563, '090531', 'POS SINGKAWANG', 'SINGKAWANG'),
(564, '090532', 'POS TELUK SUAK', ''),
(565, '090534', 'POS SIDDING', ''),
(566, '090537', 'POS PEMANGKAT', ''),
(567, '090538', 'POS PENJAJAB', ''),
(568, '090539', 'POS ARUK', ''),
(569, '090540', 'POS SAJINGAN', ''),
(570, '090541', 'POS SAPARAN', ''),
(571, '090542', 'POS TEMAJUK', ''),
(572, '090543', 'POS TEBAS', ''),
(573, '090700', 'KPBC SAMPIT', 'SAMPIT'),
(574, '090731', 'POS SAMUDA', ''),
(575, '090732', 'POS KUALA PEMBUANG', ''),
(576, '090733', 'POS PEGATAN MENDAWAI', ''),
(577, '090734', 'POS BANDARA H.ASAN', ''),
(578, '090735', 'POS SAMPIT', ''),
(579, '090800', 'KPBC PANGKALAN BUN', 'PANGKALAN BUN'),
(580, '090811', 'KANTOR BANTU KUMAI', ''),
(581, '090831', 'POS MUARA S. ARUT', ''),
(582, '090833', 'POS KUALA JELAI', ''),
(583, '090834', 'POS BANDARA ISKANDAR', ''),
(584, '090835', 'POS PANGKALAN BUN', ''),
(585, '090900', 'KPBC PULANG PISAU', 'PULANG PISAU'),
(586, '090911', 'KANTOR BANTU KUALA KAPUAS', ''),
(587, '090931', 'POS BAHAUR', ''),
(588, '090932', 'POS BANDARA CILIKRIWUT', ''),
(589, '090933', 'POS BANDARA BERINGIN', ''),
(590, '090934', 'POS PULANG PISAU', ''),
(591, '090935', 'POS MANGKAHOI', ''),
(592, '100000', 'KANTOR WILAYAH X BALIKPAPAN', 'BALIKPAPAN'),
(593, '100100', 'KPBC BANJARMASIN', 'BANJARMASIN'),
(594, '100131', 'POS BANDARA SAMSUDIN NOOR', 'BANJARMASIN'),
(595, '100134', 'POS BANDARA WARUKIN', ''),
(596, '100135', 'POS ASAM-ASAM / KINTAP', ''),
(597, '100136', 'POS BANJARMASIN', ''),
(598, '100137', 'POS JORONG', ''),
(599, '100200', 'KPBC KOTABARU', 'KOTABARU'),
(600, '100211', 'KANTOR BANTU BATU LICIN', ''),
(601, '100231', 'POS PEGATAN', ''),
(602, '100233', 'POS TG.PEMANCINGAN', ''),
(603, '100234', 'POS MEKAR PUTIH', ''),
(604, '100235', 'POS BANDARA STAGEN', ''),
(605, '100236', 'POS KOTA BARU', ''),
(606, '100237', 'POS TARJUN', ''),
(607, '100239', 'POS PELABUHAN STAGEN', ''),
(608, '100240', 'POS SATUI', ''),
(609, '100300', 'KPBC BALIKPAPAN', 'BALIKPAPAN'),
(610, '100312', 'KANTOR BANTU TANAH GROGOT', ''),
(611, '100313', 'KANTOR BANTU TANJUNG SANTAN', ''),
(612, '100331', 'POS KAMPUNG BARU', ''),
(613, '100332', 'POS PENAJAM', ''),
(614, '100335', 'POS BALIKPAPAN', ''),
(615, '100336', 'POS TANJUNG BATU', ''),
(616, '100337', 'POS KARIANGGAU', ''),
(617, '100500', 'KPBC SAMARINDA', 'SAMARINDA'),
(618, '100512', 'KANTOR BANTU SENIPAH', ''),
(619, '100531', 'POS HANDIL DUA', ''),
(620, '100532', 'POS MUARA SANGA-SANGA', ''),
(621, '100534', 'POS MUARA BADAK', ''),
(622, '100535', 'POS TENGGARONG', ''),
(623, '100536', 'POS BANDARA TEMINDUNG', ''),
(624, '100538', 'POS SAMARINDA', ''),
(625, '100600', 'KPBC BONTANG', 'BONTANG'),
(626, '100631', 'POS LHOK TUAN', ''),
(627, '100632', 'POS BONTANG', ''),
(628, '100633', 'POS NYERANGAT SEKAMBING', ''),
(629, '100800', 'KPBC TARAKAN', 'TARAKAN'),
(630, '100811', 'KANTOR BANTU BUNYU', ''),
(631, '100812', 'KANTOR BANTU REDEP', ''),
(632, '100832', 'POS TANJUNG SELOR', ''),
(633, '100833', 'POS BANDARA TARAKAN', ''),
(634, '100834', 'POS BANDARA TANJUNG REDEP', ''),
(635, '100835', 'POS TARAKAN', ''),
(636, '100836', 'POS BUNYU', ''),
(637, '100837', 'POS LONG NAWANG', ''),
(638, '100838', 'POS LONG BAWAN', ''),
(639, '100839', 'POS MALINO', ''),
(640, '100900', 'KPBC NUNUKAN', 'NUNUKAN'),
(641, '100912', 'KANTOR BANTU SUNGAI NYAMUK', ''),
(642, '100932', 'POS LEMIJUNG', ''),
(643, '100933', 'POS NUNUKAN', ''),
(644, '100934', 'POS SUNGAI PANCANG', ''),
(645, '100935', 'POS AJI KUNING', ''),
(646, '101000', 'KPBC TANJUNG BARA /SANGATA', ''),
(647, '101031', 'POS SANGKURILANG', ''),
(648, '101032', 'POS TANJUNG BARA SANGATA', ''),
(649, '110000', 'KANTOR WILAYAH XI MAKASAR', 'MAKASSAR'),
(650, '110100', 'KPBC MAKASAR', 'MAKASSAR'),
(651, '110101', 'PANGKALAN SARANA OPERASI PANTOLOAN', ''),
(652, '110111', 'KANTOR BANTU BENTENG/P.SELAYAR', ''),
(653, '110113', 'KANTOR BANTU BIRINGKASI', ''),
(654, '110131', 'POS BANTAENG', ''),
(655, '110132', 'POS BULU KUMBA', ''),
(656, '110138', 'POS PAOTERE', ''),
(657, '110139', 'POS SUKARNO I', ''),
(658, '110140', 'POS SUKARNO II', ''),
(659, '110141', 'POS HATTA I', ''),
(660, '110142', 'POS HATTAII', ''),
(661, '110300', 'KPBC PARE-PARE', 'PARE-PARE'),
(662, '110332', 'POS BARRU', ''),
(663, '110339', 'POS PARE-PARE', ''),
(664, '110340', 'POS WATANSOPPENG', ''),
(665, '110342', 'POS MAMUJU', ''),
(666, '110400', 'KPBC MALILI', 'BALANTANG'),
(667, '110411', 'KANTOR BANTU PALOPO', 'PALOPO'),
(668, '110433', 'POS SIWA', ''),
(669, '110436', 'POS BALANTANG', ''),
(670, '110437', 'POS BANDARA SOROAKO', ''),
(671, '110500', 'KPBC BAJOE', 'BAJOE'),
(672, '110533', 'POS SINJAI', ''),
(673, '110535', 'POS ULOE', ''),
(674, '110537', 'POS BAJOE', ''),
(675, '110539', 'POS ARESOE', ''),
(676, '110540', 'POS PATTIRO', ''),
(677, '110600', 'KPBC KENDARI', 'KENDARI'),
(678, '110611', 'KANTOR BANTU BAU-BAU', ''),
(679, '110631', 'POS WAWONI', ''),
(680, '110632', 'POS LASOLO', ''),
(681, '110634', 'POS WANCI', ''),
(682, '110635', 'POS RAHA', ''),
(683, '110636', 'POS SIKELI', ''),
(684, '110637', 'POS BANABUNI', ''),
(685, '110638', 'POS BANDARA WOLTER MONGINSIDI', ''),
(686, '110639', 'POS KENDARI', ''),
(687, '110640', 'POS EREKE', ''),
(688, '110700', 'KPBC POMALAA', 'POMALAA'),
(689, '110731', 'POS KOLAKA', ''),
(690, '110734', 'POS POMALAA', ''),
(691, '110735', 'POS BOEPINANG', ''),
(692, '110800', 'KPBC PANTOLOAN', 'PANTOLOAN'),
(693, '110811', 'KANTOR BANTU TOLI-TOLI', 'TOLI-TOLI'),
(694, '110832', 'POS WANI', ''),
(695, '110833', 'POS SABANG', ''),
(696, '110834', 'POS PARIGI', ''),
(697, '110835', 'POS BANDARA MUTIARA', ''),
(698, '110836', 'POS LOLI', ''),
(699, '110837', 'POS OGOTUA', ''),
(700, '110838', 'POS LEOK', ''),
(701, '110839', 'POS PALELEH', ''),
(702, '110840', 'POS PANTOLOAN', ''),
(703, '110841', 'POS PASANG KAYU', ''),
(704, '110842', 'POS MOUTONG', ''),
(705, '110843', 'POS DONGGALA', ''),
(706, '110900', 'KPBC POSO', 'POSO'),
(707, '110931', 'POS AMPANA', ''),
(708, '110932', 'POS KOLONEDALE', ''),
(709, '110933', 'POS BANDARA KASIGUNCU', ''),
(710, '110934', 'POS MOAHINO/BOHUMBELU', ''),
(711, '110935', 'POS POSO', ''),
(712, '110936', 'POS WAKAI', ''),
(713, '111000', 'KPBC LUWUK', 'LUWUK'),
(714, '111031', 'POS PAGIMANA', ''),
(715, '111032', 'POS BANGGAI', ''),
(716, '111033', 'POS TOILI', ''),
(717, '111034', 'POS BUNTA', ''),
(718, '111035', 'POS BANDARA BUBUNG', ''),
(719, '111036', 'POS LUWUK', ''),
(720, '111100', 'KPBC BITUNG', 'BITUNG'),
(721, '111131', 'POS KEMA', ''),
(722, '111132', 'POS BELANG', ''),
(723, '111133', 'POS KOTABUNAN', ''),
(724, '111134', 'POS LIKUPANG', ''),
(725, '111137', 'POS BITUNG', ''),
(726, '111139', 'POS RATATOTOK', ''),
(727, '111200', 'KPBC MANADO', 'MANADO'),
(728, '111211', 'KANTOR BANTU LABUHAN UKI', ''),
(729, '111212', 'KANTOR BANTU TAHUNA', ''),
(730, '111213', 'KANTOR BANTU HULU SIAU', ''),
(731, '111214', 'KANTOR BANTU MARORE', ''),
(732, '111215', 'KANTOR BANTU MIANGAS', ''),
(733, '111216', 'KANTOR BANTU AMURANG', ''),
(734, '111217', 'KANTOR BANTU LIRUNG', ''),
(735, '111233', 'POS INOBONTO', ''),
(736, '111239', 'POS TAGULANDANG', ''),
(737, '111240', 'POS MANADO', ''),
(738, '111241', 'POS BANDARA SAM RATULANGI', ''),
(739, '111242', 'POS MALIBAGU', ''),
(740, '111300', 'KPBC GORONTALO', 'GORONTALO'),
(741, '111331', 'POS KUANDANG', ''),
(742, '111333', 'POS PAGUAT', ''),
(743, '111334', 'POS PAPAYATO', ''),
(744, '111335', 'POS BANDARA JALALUDIN', ''),
(745, '111336', 'POS GORONTALO', ''),
(746, '120000', 'KANTOR WILAYAH XII AMBON', 'AMBON'),
(747, '120100', 'KPBC AMBON', 'AMBON'),
(748, '120111', 'KANTOR BANTU WAISARISA', ''),
(749, '120114', 'KANTOR BANTU BANDARA PATTIMURA', ''),
(750, '120131', 'POS BANDA', ''),
(751, '120132', 'POS NAMLEA', ''),
(752, '120135', 'POS GESER', ''),
(753, '120137', 'POS WAINIBE / P.BURU', ''),
(754, '120138', 'POS MASOHI', ''),
(755, '120139', 'POS AMBON', ''),
(756, '120140', 'POS GALALA', ''),
(757, '120141', 'POS TULEHU', ''),
(758, '120143', 'POS HITU', ''),
(759, '120144', 'POS OPIN/PASAHARI', ''),
(760, '120200', 'KPBC TERNATE', 'TERNATE'),
(761, '120211', 'KANTOR BANTU P. GEBE', ''),
(762, '120212', 'KANTOR BANTU GALELA/TOBELO', ''),
(763, '120213', 'KANTOR BANTU P. MANOLE', ''),
(764, '120232', 'POS LABUHA', ''),
(765, '120234', 'POS BANDARA BABULLAH', ''),
(766, '120236', 'POS TERNATE', ''),
(767, '120237', 'POS BASTIONG', ''),
(768, '120238', 'POS SANANA', ''),
(769, '120239', 'POS TANJUNG BARNABAS', ''),
(770, '120300', 'KPBC SORONG', 'SORONG'),
(771, '120311', 'KANTOR BANTU TELUK KASIM', ''),
(772, '120331', 'POS BANDARA JEFMAN', ''),
(773, '120332', 'POS PULAU GAK', ''),
(774, '120335', 'POS DARMAGA KHUSUS USAHA MINA', 'MINA'),
(775, '120337', 'POS ARAR', ''),
(776, '120338', 'POS SORONG', ''),
(777, '120400', 'KPBC MANOKWARI', 'MANOKWARI'),
(778, '120412', 'KANTOR BANTU BABO', ''),
(779, '120431', 'POS BINTUNI', ''),
(780, '120432', 'POS BANDARA RENDANI', ''),
(781, '120433', 'POS MANOKWARI', ''),
(782, '120435', 'POS WIMRO', ''),
(783, '120500', 'KPBC FAK-FAK', 'FAK-FAK'),
(784, '120531', 'POS KAIMANA', ''),
(785, '120532', 'POS KOKAS', ''),
(786, '120533', 'POS PULAU ADI', ''),
(787, '120534', 'POS BANDARA FAK-FAK', ''),
(788, '120535', 'POS FAK-FAK', ''),
(789, '120600', 'KPBC JAYAPURA', 'JAYAPURA'),
(790, '120611', 'KANTOR BANTU BANDARA SENTANI', ''),
(791, '120612', 'KANTOR BANTU SKOU', ''),
(792, '120631', 'POS SARMI', ''),
(793, '120633', 'POS KIWIROK', ''),
(794, '120634', 'POS SENGAI', ''),
(795, '120635', 'POS WARIS', ''),
(796, '120636', 'POS WEMBI', ''),
(797, '120637', 'POS DEMTA', ''),
(798, '120638', 'POS WAMENA', ''),
(799, '120639', 'POS JAYAPURA', ''),
(800, '120700', 'KPBC MERAUKE', 'MERAUKE'),
(801, '120731', 'POS SORTA', ''),
(802, '120732', 'POS BUPUL', ''),
(803, '120734', 'POS MINDIPTANAA', ''),
(804, '120736', 'POS AGATS', ''),
(805, '120737', 'POS  BADE', ''),
(806, '120738', 'POS BANDARA MOPAH', ''),
(807, '120739', 'POS MERAUKE', ''),
(808, '120740', 'POS WANAM', ''),
(809, '120800', 'KPBC AMAMAPARE', 'AMAMAPARE'),
(810, '120812', 'KANTOR BANTU KULALA KENCANA/KOTA BARU', ''),
(811, '120813', 'KANTOR BANTU BANDARA TIMIKA', ''),
(812, '120831', 'POS AMAMAPARE', ''),
(813, '120832', 'POS CARGO DOCK', ''),
(814, '120833', 'POS PAD XI', ''),
(815, '120834', 'POS ETNA', ''),
(816, '120835', 'POS TEMBAGAPURA', ''),
(817, '120836', 'POS POMAKO I', ''),
(818, '120900', 'KPBC BIAK', 'BIAK'),
(819, '120911', 'KANTOR BANTU NABIRE/TELUK KIMI', ''),
(820, '120931', 'POS SERUI', ''),
(821, '120933', 'POS BIAK', ''),
(822, '120934', 'POS DAWAI', ''),
(823, '121000', 'KPBC TUAL', ''),
(824, '121031', 'POS DABO', ''),
(825, '121032', 'POS BENJINA/P. KEI', ''),
(826, '121033', 'POS SAUMLAKI', ''),
(827, '121034', 'POS NGADI', ''),
(828, '121035', 'POS ELAT', ''),
(829, '121036', 'POS LARAT', ''),
(830, '121037', 'POS WONRELI/KISAR', ''),
(831, '121038', 'POS BANDARA D. DUMATUBUN LANGGUR', ''),
(832, '121039', 'POS SERWARU', ''),
(833, '121040', 'POS HWAKI/WETAR', ''),
(834, '130000', 'KANTOR WILAYAH XIII BANDA ACEH', ''),
(835, '130100', 'KPBC ULEELHEUE', ''),
(836, '130111', 'KANTOR BANTU LHOK NGA', ''),
(837, '130131', 'POS LAM PULO', ''),
(838, '130132', 'POS SIGLI', ''),
(839, '130133', 'POS COT BAU', ''),
(840, '130134', 'POS MALAHAYATI', ''),
(841, '130200', 'KPBC ISKANDAR MUDA', ''),
(842, '130231', 'POS BANDARA ISKANDAR MUDA', ''),
(843, '130300', 'KPBC SABANG', ''),
(844, '130400', 'KPBC MEULABOH', ''),
(845, '130411', 'KANTOR BANTU SINABANG', ''),
(846, '130412', 'KANTOR BANTU TAPAK TUAN', ''),
(847, '130413', 'KANTOR BANTU SINGKEL', ''),
(848, '130431', 'POS SUSOH', ''),
(849, '130500', 'KPBC LHOK SEUMAWE', ''),
(850, '130511', 'KANTOR BANTU LHOK SUKON', ''),
(851, '130531', 'POS BLANG LANCANG', ''),
(852, '130532', 'POS KRUENG GEUKUH', ''),
(853, '130600', 'KPBC KUALA LANGSA', ''),
(854, '130631', 'POS KUALA LANGSA', ''),
(855, '130632', 'POS SARANG JAYA', ''),
(856, '150300', 'KPPBC TANGERANG', 'TANGERANG'),
(857, '160200', 'KPPBC SUNDA KELAPA', 'JAKARTA');

-- --------------------------------------------------------

--
-- Table structure for table `lampiran1`
--

CREATE TABLE `lampiran1` (
  `nomor_pengajuan` varchar(100) collate latin1_general_ci NOT NULL,
  `kantor_pabean` varchar(255) collate latin1_general_ci NOT NULL,
  `jenis_tpb` varchar(255) collate latin1_general_ci NOT NULL,
  `tujuan_pengiriman` varchar(255) collate latin1_general_ci NOT NULL,
  `nomor_pendaftaran` varchar(100) collate latin1_general_ci NOT NULL,
  `tgl_pendaftaran` date NOT NULL,
  `npwp_pengusaha` varchar(255) collate latin1_general_ci NOT NULL,
  `nama_pengusaha` varchar(255) collate latin1_general_ci NOT NULL,
  `alamat_pengusaha` varchar(255) collate latin1_general_ci NOT NULL,
  `no_ijin_tpb_pengusaha` varchar(255) collate latin1_general_ci NOT NULL,
  `npwp_pengirim` varchar(255) collate latin1_general_ci NOT NULL,
  `nama_pengirim` varchar(255) collate latin1_general_ci NOT NULL,
  `alamat_pengirim` varchar(255) collate latin1_general_ci NOT NULL,
  `packing_list` varchar(255) collate latin1_general_ci NOT NULL,
  `tgl_packing_list` date NOT NULL,
  `kontrak` varchar(255) collate latin1_general_ci NOT NULL,
  `tgl_kontrak` varchar(100) collate latin1_general_ci NOT NULL,
  `sk_persetujuan` varchar(255) collate latin1_general_ci NOT NULL,
  `tgl_persetujuan` date NOT NULL,
  `jenis_pengangkut` varchar(255) collate latin1_general_ci NOT NULL,
  `nomor_polisi` varchar(255) collate latin1_general_ci NOT NULL,
  `harga_penyerahan` varchar(100) collate latin1_general_ci NOT NULL,
  `jenis_kemasan` varchar(255) collate latin1_general_ci NOT NULL,
  `merek_kemasan` varchar(255) collate latin1_general_ci NOT NULL,
  `jumlah_kemasan` varchar(255) collate latin1_general_ci NOT NULL,
  `volume` int(10) NOT NULL,
  `berat_kotor` int(10) NOT NULL,
  `berat_bersih` int(10) NOT NULL,
  `nip_pejabat` varchar(255) collate latin1_general_ci NOT NULL,
  `nama_pejabat` varchar(255) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`nomor_pengajuan`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `lampiran1`
--

INSERT INTO `lampiran1` (`nomor_pengajuan`, `kantor_pabean`, `jenis_tpb`, `tujuan_pengiriman`, `nomor_pendaftaran`, `tgl_pendaftaran`, `npwp_pengusaha`, `nama_pengusaha`, `alamat_pengusaha`, `no_ijin_tpb_pengusaha`, `npwp_pengirim`, `nama_pengirim`, `alamat_pengirim`, `packing_list`, `tgl_packing_list`, `kontrak`, `tgl_kontrak`, `sk_persetujuan`, `tgl_persetujuan`, `jenis_pengangkut`, `nomor_polisi`, `harga_penyerahan`, `jenis_kemasan`, `merek_kemasan`, `jumlah_kemasan`, `volume`, `berat_kotor`, `berat_bersih`, `nip_pejabat`, `nama_pejabat`) VALUES
('050300-000001-20061130-000100', '050300 KPPBC Bogor', 'Gudang Berikat', 'Disubkontrakkan', 'SK-050802', '2013-04-28', '01.061.747.0-092.000', 'PT. Internasional Industri', 'Kawasan Industri Jababeka Jalan Jababeka IX Blok Z no. 23 Cikarang, Bekasi, Jawa Barat', '9999/KMK.04/2009', '01.061.747.0-999.000', 'PT. Zahira Manufactur', 'Jl. Ahmad Yani No. 2410, Bekasi', 'PL-00099-999999', '2013-04-28', 'SK-050802', '24/12/2009', '023/WBC.05/KP.03/Subkon/2009', '2013-04-28', 'Truk Box', 'B 1111 LA', 'Rp. 10.900.000,00', 'CT	Carton', 'Hanson Brothers', '100', 62, 998, 550, '11111111', 'Ateng'),
('234', '', 'Kawasan Berikat', 'Disubkontrakkan', '234', '0000-00-00', '', '', '', '', '', 'S0000001 PT LG Electronics Indonesia', '', '324', '0000-00-00', '234', '', '342', '0000-00-00', '234', '234', '234', 'BG Bag', '234', '234', 234, 234, 234, '0600076867', '2343'),
('456', '', 'Kawasan Berikat', 'Disubkontrakkan', '456', '0000-00-00', '', '', '', '', '', 'S0000002 PT Kolang Kaling', '', '456', '0000-00-00', '456', '', '465', '0000-00-00', '456', '456', '456', 'BI Bin', '456', '456', 456, 45, 456, '657', '678'),
('345', '', 'Kawasan Berikat', 'Disubkontrakkan', '345', '0000-00-00', '', '', '', '', '', 'S0000001 PT LG Electronics Indonesia', '', '345', '0000-00-00', '34', '', '34', '0000-00-00', '34', '34', '435', 'BB Bobbin', '34', '345', 345, 34, 345, '0600076867', '234'),
('789', '', 'Kawasan Berikat', 'Disubkontrakkan', '78987', '0000-00-00', '', '', '', '', '', 'S0000001 PT LG Electronics Indonesia', '', '789', '0000-00-00', '879', '', '789', '0000-00-00', '879', '879', '879', 'BN Bale, non -compressed', '789', '789', 977, 789, 789, '567', '567'),
('', '', 'Pilih Jenis TPB', 'Pilih Tujuan', '', '0000-00-00', '', '', '', '', '', 'Pilih Nama Pengirim', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', 'Pilih Jenis Kemasan', '', '', 0, 0, 0, '', ''),
('34', '', 'Gudang Berikat', 'Disubkontrakkan', '324', '0000-00-00', '', '', '', '', '', 'S0000001 PT LG Electronics Indonesia', '', '234', '0000-00-00', '234', '', '432', '0000-00-00', '234', '234', '234', 'BN Bale, non -compressed', '234', '234', 234, 234, 324, 'fef', '34'),
('435', '', 'Kawasan Berikat', 'Dipinjamkan', '345345', '0000-00-00', '', '', '', '', '', 'S0000002 PT Kolang Kaling', '', '345', '0000-00-00', '345', '', '345', '0000-00-00', '3454', '3454', '234', 'BO Bottle, non-protected, cylindrical', 'dfgd', 'dfg', 234, 234, 234, '2343', '234234'),
('545', '', 'Gudang Berikat', 'Disubkontrakkan', '4345', '0000-00-00', '', '', '', '', '', 'Pilih Nama Pengirim', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', 'Pilih Jenis Kemasan', '', '', 0, 0, 0, '', ''),
('87979', '', 'Kawasan Berikat', 'Disubkontrakkan', '8798', '0000-00-00', '', '', '', '', '', 'S0000001 PT LG Electronics Indonesia', '', '789', '0000-00-00', '789', '', '789', '0000-00-00', '789', '789', '798', 'AE AEROSOL', '789', '789', 79, 79, 79, '978', '789'),
('78956', '', 'Kawasan Berikat', 'Dipinjamkan', '667676', '0000-00-00', '', '', '', '', '', 'S0000002 PT Kolang Kaling', '', '567', '0000-00-00', '5', '', '57', '0000-00-00', '657', '5778', '6576', 'BL Bale, compressed', '768', '576', 677, 678, 67876, '567', '57');

-- --------------------------------------------------------

--
-- Table structure for table `lampiran2`
--

CREATE TABLE `lampiran2` (
  `nomor_pengajuan` varchar(100) collate latin1_general_ci NOT NULL,
  `kantor_pabean` varchar(255) collate latin1_general_ci NOT NULL,
  `jenis_tpb` varchar(255) collate latin1_general_ci NOT NULL,
  `tujuan_pengiriman` varchar(255) collate latin1_general_ci NOT NULL,
  `nomor_pendaftaran` varchar(100) collate latin1_general_ci NOT NULL,
  `tgl_pendaftaran` varchar(100) collate latin1_general_ci NOT NULL,
  `npwp_pengusaha` varchar(255) collate latin1_general_ci NOT NULL,
  `nama_pengusaha` varchar(255) collate latin1_general_ci NOT NULL,
  `alamat_pengusaha` varchar(255) collate latin1_general_ci NOT NULL,
  `no_ijin_tpb_pengusaha` varchar(255) collate latin1_general_ci NOT NULL,
  `npwp_pengirim` varchar(255) collate latin1_general_ci NOT NULL,
  `nama_pengirim` varchar(255) collate latin1_general_ci NOT NULL,
  `alamat_pengirim` varchar(255) collate latin1_general_ci NOT NULL,
  `packing_list` varchar(255) collate latin1_general_ci NOT NULL,
  `tgl_packing_list` varchar(100) collate latin1_general_ci NOT NULL,
  `kontrak` varchar(255) collate latin1_general_ci NOT NULL,
  `tgl_kontrak` varchar(100) collate latin1_general_ci NOT NULL,
  `sk_persetujuan` varchar(255) collate latin1_general_ci NOT NULL,
  `tgl_persetujuan` varchar(100) collate latin1_general_ci NOT NULL,
  `jenis_pengangkut` varchar(255) collate latin1_general_ci NOT NULL,
  `nomor_polisi` varchar(255) collate latin1_general_ci NOT NULL,
  `harga_penyerahan` varchar(100) collate latin1_general_ci NOT NULL,
  `jenis_kemasan` varchar(255) collate latin1_general_ci NOT NULL,
  `merek_kemasan` varchar(255) collate latin1_general_ci NOT NULL,
  `jumlah_kemasan` varchar(255) collate latin1_general_ci NOT NULL,
  `volume` int(10) NOT NULL,
  `berat_kotor` int(10) NOT NULL,
  `berat_bersih` int(10) NOT NULL,
  `nip_pejabat` varchar(255) collate latin1_general_ci NOT NULL,
  `nama_pejabat` varchar(255) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `lampiran2`
--

INSERT INTO `lampiran2` (`nomor_pengajuan`, `kantor_pabean`, `jenis_tpb`, `tujuan_pengiriman`, `nomor_pendaftaran`, `tgl_pendaftaran`, `npwp_pengusaha`, `nama_pengusaha`, `alamat_pengusaha`, `no_ijin_tpb_pengusaha`, `npwp_pengirim`, `nama_pengirim`, `alamat_pengirim`, `packing_list`, `tgl_packing_list`, `kontrak`, `tgl_kontrak`, `sk_persetujuan`, `tgl_persetujuan`, `jenis_pengangkut`, `nomor_polisi`, `harga_penyerahan`, `jenis_kemasan`, `merek_kemasan`, `jumlah_kemasan`, `volume`, `berat_kotor`, `berat_bersih`, `nip_pejabat`, `nama_pejabat`) VALUES
('050300-000001-20061130-000100', '050300 KPPBC Bogor', 'Gudang Berikat', 'Disubkontrakkan', 'SK-050802', '24/12/2009', '01.061.747.0-092.000', 'PT. Internasional Industri', 'Kawasan Industri Jababeka Jalan Jababeka IX Blok Z no. 23 Cikarang, Bekasi, Jawa Barat', '9999/KMK.04/2009', '01.061.747.0-999.000', 'PT. Zahira Manufactur', 'Jl. Ahmad Yani No. 2410, Bekasi', 'PL-00099-999999', '24/12/2009', 'SK-050802', '24/12/2009', '023/WBC.05/KP.03/Subkon/2009', '22/11/2009', 'Truk Box', 'B 1111 LA', 'Rp. 10.900.000,00', 'CT	Carton', 'Hanson Brothers', '100', 62, 998, 550, '11111111', 'Ateng'),
('fdf', 'fdfdf', 'Kawasan Berikat', 'Disubkontrakkan', 'fsdfsf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', ''),
('dgasgsgsgfs', 'sgfsgsfgs', 'Pilih Jenis TPB', 'Pilih Tujuan', 'fgsgsgf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', ''),
('xxxxxxxxx', 'sgfsgsfgs', 'Pilih Jenis TPB', 'Disubkontrakkan', 'fgsgsgf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', ''),
('xxxxxxxxx', 'sgfsgsfgs', 'Pilih Jenis TPB', 'Disubkontrakkan', 'fgsgsgf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', ''),
('dfsfsdfssssss', 'sgfsgsfgs', 'Pilih Jenis TPB', 'Disubkontrakkan', 'fgsgsgf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', ''),
('dfsfsdfssssss', 'sgfsgsfgs', 'Pilih Jenis TPB', 'Disubkontrakkan', 'fgsgsgf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', ''),
('dfsfsdfssssss', 'sgfsgsfgs', 'Pilih Jenis TPB', 'Disubkontrakkan', 'fgsgsgf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `lampiran9`
--

CREATE TABLE `lampiran9` (
  `nomor_pengajuan` varchar(255) collate latin1_general_ci NOT NULL,
  `kantor_pabean_asal` varchar(255) collate latin1_general_ci NOT NULL,
  `kantor_pabean_tujuan` varchar(255) collate latin1_general_ci NOT NULL,
  `jenis_tpb_asal` varchar(255) collate latin1_general_ci NOT NULL,
  `jenis_tpb_tujuan` varchar(255) collate latin1_general_ci NOT NULL,
  `tujuan_pengiriman` varchar(255) collate latin1_general_ci NOT NULL,
  `nomor_pendaftaran` varchar(255) collate latin1_general_ci NOT NULL,
  `tanggal_pendaftaran` date NOT NULL,
  `nip_pejabat_pabean_asal` varchar(255) collate latin1_general_ci NOT NULL,
  `nama_pejabat_pabean_asal` varchar(255) collate latin1_general_ci NOT NULL,
  `nip_pejabat_pabean_tujuan` varchar(255) collate latin1_general_ci NOT NULL,
  `nama_pejabat_pabean_tujuan` varchar(255) collate latin1_general_ci NOT NULL,
  `npwp_pengusaha_asal` varchar(255) collate latin1_general_ci NOT NULL,
  `nama_pengusaha_asal` varchar(255) collate latin1_general_ci NOT NULL,
  `nomor_ijin_tpb_pengusaha_asal` varchar(255) collate latin1_general_ci NOT NULL,
  `alamat_pengusaha_asal` varchar(255) collate latin1_general_ci NOT NULL,
  `npwp_pengusaha_tujuan` varchar(255) collate latin1_general_ci NOT NULL,
  `nama_pengusaha_tujuan` varchar(255) collate latin1_general_ci NOT NULL,
  `nomor_ijin_tpb_pengusaha_tujuan` varchar(255) collate latin1_general_ci NOT NULL,
  `alamat_pengusaha_tujuan` varchar(255) collate latin1_general_ci NOT NULL,
  `invoice` varchar(255) collate latin1_general_ci NOT NULL,
  `tanggal_invoice` date NOT NULL,
  `packinglist` varchar(255) collate latin1_general_ci NOT NULL,
  `tanggal_packinglist` date NOT NULL,
  `kontrak` varchar(255) collate latin1_general_ci NOT NULL,
  `tanggal_kontrak` date NOT NULL,
  `surat_jalan` varchar(255) collate latin1_general_ci NOT NULL,
  `tanggal_surat_jalan` date NOT NULL,
  `surat_keputusan` varchar(255) collate latin1_general_ci NOT NULL,
  `tanggal_surat_keputusan` date NOT NULL,
  `nomor_bc_asal` varchar(255) collate latin1_general_ci NOT NULL,
  `tanggal_bc_asal` date NOT NULL,
  `jenis_valuta_asing` varchar(255) collate latin1_general_ci NOT NULL,
  `nilai_cif` int(20) NOT NULL,
  `harga_penyerahan` int(20) NOT NULL,
  `jenis_sarana_pengangkut_darat` varchar(255) collate latin1_general_ci NOT NULL,
  `nomor_polisi` varchar(255) collate latin1_general_ci NOT NULL,
  `merk_nomor_petikemas` varchar(255) collate latin1_general_ci NOT NULL,
  `jumlah_jenis_kemasan` int(20) NOT NULL,
  `volume` int(20) NOT NULL,
  `berat_kotor` int(20) NOT NULL,
  `berat_bersih` int(20) NOT NULL,
  `nomor_segel` varchar(20) collate latin1_general_ci NOT NULL,
  `jenis` varchar(255) collate latin1_general_ci NOT NULL,
  `catatan_bc_tujuan` varchar(255) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`nomor_pengajuan`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `lampiran9`
--

INSERT INTO `lampiran9` (`nomor_pengajuan`, `kantor_pabean_asal`, `kantor_pabean_tujuan`, `jenis_tpb_asal`, `jenis_tpb_tujuan`, `tujuan_pengiriman`, `nomor_pendaftaran`, `tanggal_pendaftaran`, `nip_pejabat_pabean_asal`, `nama_pejabat_pabean_asal`, `nip_pejabat_pabean_tujuan`, `nama_pejabat_pabean_tujuan`, `npwp_pengusaha_asal`, `nama_pengusaha_asal`, `nomor_ijin_tpb_pengusaha_asal`, `alamat_pengusaha_asal`, `npwp_pengusaha_tujuan`, `nama_pengusaha_tujuan`, `nomor_ijin_tpb_pengusaha_tujuan`, `alamat_pengusaha_tujuan`, `invoice`, `tanggal_invoice`, `packinglist`, `tanggal_packinglist`, `kontrak`, `tanggal_kontrak`, `surat_jalan`, `tanggal_surat_jalan`, `surat_keputusan`, `tanggal_surat_keputusan`, `nomor_bc_asal`, `tanggal_bc_asal`, `jenis_valuta_asing`, `nilai_cif`, `harga_penyerahan`, `jenis_sarana_pengangkut_darat`, `nomor_polisi`, `merk_nomor_petikemas`, `jumlah_jenis_kemasan`, `volume`, `berat_kotor`, `berat_bersih`, `nomor_segel`, `jenis`, `catatan_bc_tujuan`) VALUES
('000119 28/02/2009', '000000 KANTOR PUSAT', '010000 KANTOR WILAYAH I MEDAN', '', '', 'Disubkontrakan', '121212', '2013-03-28', '12', 'toeko', '13', 'lina', '01.061.747.0-092.000', 'PT. Samack Industri', '888/KMK.04/2006', 'Jl Raya Cileungsi No. 20 Bogor, Jawa Barat', '01.061.747.0-999.000', 'PT. Onthego Industri', '9999/KMK.04/2009', 'Kawasan Industri Jababeka Jalan Jababeka IX Blok Z no. 23 Cikarang, Bekasi, Jawa Barat', 'IN-00099-999999', '2013-03-28', 'PL-00099-999999', '2013-03-28', 'SK-050802', '2013-03-28', 'SJ-00009', '2013-03-28', '023/WBC.05/KP.03/Subkon/2009', '2013-03-28', '000.023', '0000-00-00', 'USD US Dollar', 1000, 15000000, 'Truk Box', 'B 1111 LA', '2 x 40; HDMU20009299, HDMU90909000', 1000, 62, 998, 550, '2323', 'Kertas', 'Kondisi Baik, 20/04/2009 Ahmad NIP.0600000'),
('1234', '010733 POS PANTAI LABU', '010732 POS PANTAI CERMIN', 'Kawasan Berikat', 'Kawasan Berikat', 'Disubkontrakan', '324', '2013-03-31', '3424', '234', '24', '243', '01021221545555', 'PT Demo Aplikasi Indonesia', '1206/KM.4/2012', 'EJIP Industrial Park Plot 4E, Cikarang', '01021221545555', 'PT Demo Aplikasi Indonesia', '1206/KM.4/2012', 'EJIP Industrial Park Plot 4E, Cikarang', '324243', '2013-03-31', '234', '2013-03-31', '234', '2013-03-31', '324', '2013-03-31', '234', '2013-03-31', '123123', '2013-12-19', 'ALL Lek', 234234, 234234234, 'Mobil', 'B1235DKK', '234234', 234, 234, 234, 324, '3424', '234', '234');

-- --------------------------------------------------------

--
-- Table structure for table `matauang`
--

CREATE TABLE `matauang` (
  `kd_valas` char(6) collate latin1_general_ci NOT NULL,
  `jenis_valas` varchar(100) collate latin1_general_ci NOT NULL,
  `nama_valas` varchar(100) collate latin1_general_ci NOT NULL,
  `negara_valas` varchar(100) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `matauang`
--

INSERT INTO `matauang` (`kd_valas`, `jenis_valas`, `nama_valas`, `negara_valas`) VALUES
('CUR001', 'AFN', 'Afghani', 'Afghanistan'),
('CUR002', 'EUR', 'Euro', 'Aland Islands'),
('CUR003', 'ALL', 'Lek', 'Albania'),
('CUR004', 'DZD', 'Algerian Dinar', 'Algeria'),
('CUR005', 'USD', 'US Dollar', 'American Samoa'),
('CUR006', 'EUR', 'Euro', 'Andorra'),
('CUR007', 'AOA', 'Kwanza', 'Angola'),
('CUR008', 'XCD', 'East Caribbean Dollar', 'Anguilla'),
('CUR009', 'XCD', 'East Caribbean Dollar', 'Antigua and Barbuda'),
('CUR010', 'ARS', 'Argentine Peso', 'Argentina'),
('CUR011', 'AMD', 'Armenian Dram', 'Armenia'),
('CUR012', 'AWG', 'Aruban Florin', 'Aruba'),
('CUR013', 'AUD', 'Australian Dollar', 'Australia'),
('CUR014', 'EUR', 'Euro', 'Austria'),
('CUR015', 'AZN', 'Azerbaijanian Manat', 'Azerbaijan'),
('CUR016', 'BSD', 'Bahamian Dollar', 'Bahamas'),
('CUR017', 'BHD', 'Bahraini Dinar', 'Bahrain'),
('CUR018', 'BDT', 'Taka', 'Bangladesh'),
('CUR019', 'BBD', 'Barbados Dollar', 'Barbados'),
('CUR020', 'BYR', 'Belarussian Ruble', 'Belarus'),
('CUR021', 'EUR', 'Euro', 'Belgium'),
('CUR022', 'BZD', 'Belize Dollar', 'Belize'),
('CUR023', 'XOF', 'CFA Franc BCEAO ', 'Benin'),
('CUR024', 'BMD', 'Bermudian Dollar', 'Bermuda'),
('CUR025', 'BTN', 'Ngultrum', 'Bhutan'),
('CUR026', 'BOB', 'Boliviano', 'Bolivia, Plurinational State of'),
('CUR027', 'USD', 'US Dollar', 'Bonaire, Sint Eustatius and Saba'),
('CUR028', 'BAM', 'Convertible Marks', 'Bosnia and Herzegovina'),
('CUR029', 'BWP', 'Pula', 'Botswana'),
('CUR030', 'NOK', 'Norwegian Krone', 'Bouvet Island'),
('CUR031', 'BRL', 'Brazilian Real', 'Brazil'),
('CUR032', 'USD', 'US Dollar', 'British Indian Ocean Territory'),
('CUR033', 'BND', 'Brunei Dollar', 'Brunei Darussalam'),
('CUR034', 'BGN', 'Bulgarian Lev', 'Bulgaria'),
('CUR035', 'XOF', 'CFA Franc BCEAO ?', 'Burkina Faso'),
('CUR036', 'BIF', 'Burundi Franc', 'Burundi'),
('CUR037', 'KHR', 'Riel', 'Cambodia'),
('CUR038', 'XAF', 'CFA Franc BEAC ', 'Cameroon'),
('CUR039', 'CAD', 'Canadian Dollar', 'Canada'),
('CUR040', 'CVE', 'Cape Verde Escudo', 'Cape Verde'),
('CUR041', 'KYD', 'Cayman Islands Dollar', 'Cayman Islands'),
('CUR042', 'XAF', 'CFA Franc BEAC ', 'Central African Republic'),
('CUR043', 'XAF', 'CFA Franc BEAC ', 'Chad'),
('CUR044', 'CLP', 'Chilean Peso', 'Chile'),
('CUR045', 'CNY', 'Yuan Renminbi', 'China'),
('CUR046', 'AUD', 'Australian Dollar', 'Christmas Island'),
('CUR047', 'COP', 'Colombian Peso', 'Colombia'),
('CUR048', 'KMF', 'Comoro Franc', 'Comoros'),
('CUR049', 'XAF', 'CFA Franc BEAC ', 'Congo'),
('CUR050', 'CDF', 'Franc Congolais', 'Congo, The Democratic Republic of the'),
('CUR051', 'NZD', 'New Zealand Dollar', 'Cook Islands'),
('CUR052', 'CRC', 'Costa Rican Colon', 'Costa Rica'),
('CUR053', 'XOF', 'CFA Franc BCEAO ?', 'C?te D?Ivoire'),
('CUR054', 'HRK', 'Croatian Kuna', 'Croatia'),
('CUR055', 'CUP', 'Cuban Peso', 'Cuba'),
('CUR056', 'ANG', 'Netherlands Antillean Guilder', 'Cura?o'),
('CUR057', 'CYP', 'Cyprus Pound', 'Cyprus'),
('CUR058', 'CZK', 'Czech Koruna', 'Czech Republic'),
('CUR059', 'DKK', 'Danish Krone', 'Denmark'),
('CUR060', 'DJF', 'Djibouti Franc', 'Djibouti'),
('CUR061', 'XCD', 'East Caribbean Dollar', 'Dominica'),
('CUR062', 'DOP', 'Dominican Peso', 'Dominican Republic'),
('CUR063', 'USD', 'US Dollar', 'Ecuador'),
('CUR064', 'EGP', 'Egyptian Pound', 'Egypt'),
('CUR065', 'SVC', 'El Salvador Colon', 'El Salvador'),
('CUR066', 'XAF', 'CFA Franc BEAC ', 'Equatorial Guinea'),
('CUR067', 'ERN', 'Nakfa', 'Eritrea'),
('CUR068', 'EUR', 'Euro', 'Estonia'),
('CUR069', 'ETB', 'Ethiopian Birr', 'Ethiopia'),
('CUR070', 'EUR', 'Euro', 'European Economic and Monetary Union area'),
('CUR071', 'FKP', 'Falkland Islands Pound', 'Falkland Islands (Malvinas)'),
('CUR072', 'DKK', 'Danish Krone', 'Faroe Islands'),
('CUR073', 'FJD', 'Fiji Dollar', 'Fiji'),
('CUR074', 'EUR', 'Euro', 'Finland'),
('CUR075', 'EUR', 'Euro', 'France'),
('CUR076', 'EUR', 'Euro', 'French Guiana'),
('CUR077', 'XPF', 'CFP Franc', 'French Polynesia'),
('CUR078', 'EUR', 'Euro', 'French Southern Territories'),
('CUR079', 'XAF', 'CFA Franc BEAC ', 'Gabon'),
('CUR080', 'GMD', 'Dalasi', 'Gambia'),
('CUR081', 'GEL', 'Lari', 'Georgia'),
('CUR082', 'EUR', 'Euro', 'Germany'),
('CUR083', 'GHS', 'Ghana Cedi', 'Ghana'),
('CUR084', 'GIP', 'Gibraltar Pound', 'Gibraltar'),
('CUR085', 'EUR', 'Euro', 'Greece'),
('CUR086', 'DKK', 'Danish Krone', 'Greenland'),
('CUR087', 'XCD', 'East Caribbean Dollar', 'Grenada'),
('CUR088', 'EUR', 'Euro', 'Guadeloupe'),
('CUR089', 'USD', 'US Dollar', 'Guam'),
('CUR090', 'GTQ', 'Quetzal', 'Guatemala'),
('CUR091', 'GBP', 'Pound Sterling', 'Guernsey'),
('CUR092', 'GNF', 'Guinea Franc', 'Guinea'),
('CUR093', 'GWP', 'Guinea-Bissau Peso', 'Guinea-Bissau'),
('CUR094', 'GYD', 'Guyana Dollar', 'Guyana'),
('CUR095', 'HTG', 'Gourde', 'Haiti'),
('CUR096', 'AUD', 'Australian Dollar', 'Heard Island and McDonald Islands'),
('CUR097', 'EUR', 'Euro', 'Holy See (Vatican City State)'),
('CUR098', 'HNL', 'Lempira', 'Honduras'),
('CUR099', 'HKD', 'Hong Kong Dollar', 'Hong Kong'),
('CUR100', 'HUF', 'Forint', 'Hungary'),
('CUR101', 'ISK', 'Iceland Krona', 'Iceland'),
('CUR102', 'INR', 'Indian Rupee', 'India'),
('CUR103', 'IDR', 'Rupiah', 'Indonesia'),
('CUR104', 'IRR', 'Iranian Rial', 'Iran, Islamic Republic Of'),
('CUR105', 'IQD', 'Iraqi Dinar', 'Iraq'),
('CUR106', 'EUR', 'Euro', 'Ireland'),
('CUR107', 'GBP', 'Pound Sterling', 'Isle of Man'),
('CUR108', 'ILS', 'New Israeli Sheqel', 'Israel'),
('CUR109', 'EUR', 'Euro', 'Italy'),
('CUR110', 'JMD', 'Jamaican Dollar', 'Jamaica'),
('CUR111', 'JPY', 'Yen', 'Japan'),
('CUR112', 'GBP', 'Pound Sterling', 'Jersey'),
('CUR113', 'JOD', 'Jordanian Dinar', 'Jordan'),
('CUR114', 'KZT', 'Tenge', 'Kazakhstan'),
('CUR115', 'KES', 'Kenyan Shilling', 'Kenya'),
('CUR116', 'AUD', 'Australian Dollar', 'Kiribati'),
('CUR117', 'KPW', 'North Korean Won', 'Korea, Democratic People?s Republic of'),
('CUR118', 'KRW', 'Won', 'Korea, Republic of'),
('CUR119', 'KWD', 'Kuwaiti Dinar', 'Kuwait'),
('CUR120', 'KGS', 'Som', 'Kyrgyzstan'),
('CUR121', 'LAK', 'Kip', 'Lao People?s Democratic Republic'),
('CUR122', 'LVL', 'Latvian Lats', 'Latvia'),
('CUR123', 'LBP', 'Lebanese Pound', 'Lebanon'),
('CUR124', 'LSL', 'Loti', 'Lesotho'),
('CUR125', 'LRD', 'Liberian Dollar', 'Liberia'),
('CUR126', 'LYD', 'Libyan Dinar', 'Libya'),
('CUR127', 'CHF', 'Swiss Franc', 'Liechtenstein'),
('CUR128', 'LTL', 'Lithuanian Litas', 'Lithuania'),
('CUR129', 'EUR', 'Euro', 'Luxembourg'),
('CUR130', 'MOP', 'Pataca', 'Macao'),
('CUR131', 'MKD', 'Denar', 'Macedonia, The Former Yugoslav Republic of'),
('CUR132', 'MGA', 'Malagasy Ariary', 'Madagascar'),
('CUR133', 'MWK', 'Kwacha', 'Malawi'),
('CUR134', 'MYR', 'Malaysian Ringgit', 'Malaysia'),
('CUR135', 'MVR', 'Rufiyaa', 'Maldives'),
('CUR136', 'XOF', 'CFA Franc BCEAO ?', 'Mali'),
('CUR137', 'EUR', 'Euro', 'Malta'),
('CUR138', 'USD', 'US Dollar', 'Marshall Islands'),
('CUR139', 'EUR', 'Euro', 'Martinique'),
('CUR140', 'MRO', 'Ouguiya', 'Mauritania'),
('CUR141', 'MUR', 'Mauritius Rupee', 'Mauritius'),
('CUR142', 'EUR', 'Euro', 'Mayotte'),
('CUR143', 'MXN', 'Mexican Peso', 'Mexico'),
('CUR144', 'USD', 'US Dollar', 'Micronesia, Federated States of'),
('CUR145', 'MDL', 'Moldovan Leu', 'Moldova, Republic of'),
('CUR146', 'EUR', 'Euro', 'Monaco'),
('CUR147', 'MNT', 'Tugrik', 'Mongolia'),
('CUR148', 'EUR', 'Euro', 'Montenegro'),
('CUR149', 'XCD', 'East Caribbean Dollar', 'Montserrat'),
('CUR150', 'MAD', 'Moroccan Dirham', 'Morocco'),
('CUR151', 'MZN', 'Mozambique Metical', 'Mozambique'),
('CUR152', 'MMK', 'Kyat', 'Myanmar'),
('CUR153', 'NAD', 'Namibia Dollar', 'Namibia'),
('CUR154', 'AUD', 'Australian Dollar', 'Nauru'),
('CUR155', 'NPR', 'Nepalese Rupee', 'Nepal'),
('CUR156', 'EUR', 'Euro', 'Netherlands'),
('CUR157', 'ANG', 'Netherlands Antillean Guilder', 'Netherlands Antilles'),
('CUR158', 'XPF', 'CFP Franc', 'New Caledonia'),
('CUR159', 'NZD', 'New Zealand Dollar', 'New Zealand'),
('CUR160', 'NIO', 'Cordoba Oro', 'Nicaragua'),
('CUR161', 'XOF', 'CFA Franc BCEAO ?', 'Niger'),
('CUR162', 'NGN', 'Naira', 'Nigeria'),
('CUR163', 'NZD', 'New Zealand Dollar', 'Niue'),
('CUR164', 'AUD', 'Australian Dollar', 'Norfolk Island'),
('CUR165', 'USD', 'US Dollar', 'Northern Mariana Islands'),
('CUR166', 'NOK', 'Norwegian Krone', 'Norway'),
('CUR167', 'OMR', 'Rial Omani', 'Oman'),
('CUR168', 'PKR', 'Pakistan Rupee', 'Pakistan'),
('CUR169', 'USD', 'US Dollar', 'Palau'),
('CUR170', '', 'No universal currency', 'Palestinian Territory, Occupied'),
('CUR171', 'PAB', 'Balboa', 'Panama'),
('CUR172', 'PGK', 'Kina', 'Papua New Guinea'),
('CUR173', 'PYG', 'Guarani', 'Paraguay'),
('CUR174', 'PEN', 'Nuevo Sol', 'Peru'),
('CUR175', 'PHP', 'Philippine Peso', 'Philippines'),
('CUR176', 'NZD', 'New Zealand Dollar', 'Pitcairn'),
('CUR177', 'PLN', 'Zloty', 'Poland'),
('CUR178', 'EUR', 'Euro', 'Portugal'),
('CUR179', 'USD', 'US Dollar', 'Puerto Rico'),
('CUR180', 'QAR', 'Qatari Rial', 'Qatar'),
('CUR181', 'EUR', 'Euro', 'R?union'),
('CUR182', 'RON', 'New Romanian Leu', 'Romania'),
('CUR183', 'RUB', 'Russian Ruble', 'Russian Federation'),
('CUR184', 'RWF', 'Rwanda Franc', 'Rwanda'),
('CUR185', 'EUR', 'Euro', 'Saint Barth?lemy'),
('CUR186', 'SHP', 'Saint Helena Pound', 'Saint Helena, Ascension and Tristan Da Cunha'),
('CUR187', 'XCD', 'East Caribbean Dollar', 'Saint Kitts and Nevis'),
('CUR188', 'XCD', 'East Caribbean Dollar', 'Saint Lucia'),
('CUR189', 'EUR', 'Euro', 'Saint Martin (French part)'),
('CUR190', 'EUR', 'Euro', 'Saint Pierre and Miquelon'),
('CUR191', 'XCD', 'East Caribbean Dollar', 'Saint Vincent and The Grenadines'),
('CUR192', 'WST', 'Tala', 'Samoa'),
('CUR193', 'EUR', 'Euro', 'San Marino'),
('CUR194', 'STD', 'Dobra', 'Sao Tome and Principe'),
('CUR195', 'SAR', 'Saudi Riyal', 'Saudi Arabia'),
('CUR196', 'XOF', 'CFA Franc BCEAO ?', 'Senegal'),
('CUR197', 'RSD', 'Serbian Dinar', 'Serbia'),
('CUR198', 'SCR', 'Seychelles Rupee', 'Seychelles'),
('CUR199', 'SLL', 'Leone', 'Sierra Leone'),
('CUR200', 'SGD', 'Singapore Dollar', 'Singapore'),
('CUR201', 'ANG', 'Netherlands Antillean Guilder', 'Sint Maarten (Dutch part)'),
('CUR202', 'EUR', 'Euro', 'Slovakia'),
('CUR203', 'EUR', 'Euro', 'Slovenia'),
('CUR204', 'SBD', 'Solomon Islands Dollar', 'Solomon Islands'),
('CUR205', 'SOS', 'Somali Shilling', 'Somalia'),
('CUR206', 'ZAR', 'Rand', 'South Africa'),
('CUR208', 'SSP', 'South Sudanese Pound', 'South Sudan'),
('CUR209', 'EUR', 'Euro', 'Spain'),
('CUR210', 'LKR', 'Sri Lanka Rupee', 'Sri Lanka'),
('CUR211', 'SDG', 'Sudanese Pound', 'Sudan'),
('CUR212', 'SRD', 'Surinam Dollar', 'Suriname'),
('CUR213', 'NOK', 'Norwegian Krone', 'Svalbard and Jan Mayen'),
('CUR214', 'SZL', 'Lilangeni', 'Swaziland'),
('CUR215', 'SEK', 'Swedish Krona', 'Sweden'),
('CUR216', 'CHF', 'Swiss Franc', 'Switzerland'),
('CUR217', 'SYP', 'Syrian Pound', 'Syrian Arab Republic'),
('CUR218', 'TWD', 'New Taiwan Dollar', 'Taiwan, Province of China'),
('CUR219', 'TJS', 'Somoni', 'Tajikistan'),
('CUR220', 'TZS', 'Tanzanian Shilling', 'Tanzania, United Republic of'),
('CUR221', 'THB', 'Baht', 'Thailand'),
('CUR222', 'USD', 'US Dollar', 'Timor-Leste'),
('CUR223', 'XOF', 'CFA Franc BCEAO ?', 'Togo'),
('CUR224', 'NZD', 'New Zealand Dollar', 'Tokelau'),
('CUR225', 'TOP', 'Pa?anga', 'Tonga'),
('CUR226', 'TTD', 'Trinidad and Tobago Dollar', 'Trinidad and Tobago'),
('CUR227', 'TND', 'Tunisian Dinar', 'Tunisia'),
('CUR228', 'TRY', 'New Turkish Lira', 'Turkey'),
('CUR229', 'TMM', 'Turkmenistan New Manat', 'Turkmenistan'),
('CUR230', 'USD', 'US Dollar', 'Turks and Caicos Islands'),
('CUR231', 'AUD', 'Australian Dollar', 'Tuvalu'),
('CUR232', 'UGX', 'Uganda Shilling', 'Uganda'),
('CUR233', 'UAH', 'Hryvnia', 'Ukraine'),
('CUR234', 'AED', 'UAE Dirham', 'United Arab Emirates'),
('CUR235', 'GBP', 'Pound Sterling', 'United Kingdom'),
('CUR236', 'USD', 'US Dollar', 'United States'),
('CUR237', 'UYU', 'Peso Uruguayo', 'Uruguay'),
('CUR238', 'UZS', 'Uzbekistan Sum', 'Uzbekistan'),
('CUR239', 'VUV', 'Vatu', 'Vanuatu'),
('CUR240', 'VEF', 'Bolivar', 'Venezuela, Bolivarian Republic of'),
('CUR241', 'VND', 'Dong', 'Viet Nam'),
('CUR242', 'USD', 'US Dollar', 'Virgin Islands, British'),
('CUR243', 'USD', 'US Dollar', 'Virgin Islands, U.S.'),
('CUR244', 'XPF', 'CFP Franc', 'Wallis And Futuna'),
('CUR245', 'MAD', 'Moroccan Dirham', 'Western Sahara'),
('CUR246', 'YER', 'Yemeni Rial', 'Yemen'),
('CUR247', 'ZMK', 'Kwacha', 'Zambia'),
('CUR248', 'ZWD', 'Zimbabwe Dollar', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `outgoing_incoming`
--

CREATE TABLE `outgoing_incoming` (
  `nomor` char(10) collate latin1_general_ci NOT NULL,
  `no_spb` char(100) collate latin1_general_ci NOT NULL,
  `tgl_spb` date NOT NULL,
  `dept` char(100) collate latin1_general_ci NOT NULL,
  `name_ppc` char(100) collate latin1_general_ci NOT NULL,
  `catatan` varchar(100) collate latin1_general_ci NOT NULL,
  `userid` char(8) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `outgoing_incoming`
--

INSERT INTO `outgoing_incoming` (`nomor`, `no_spb`, `tgl_spb`, `dept`, `name_ppc`, `catatan`, `userid`) VALUES
('0000000001', 'SPB-2013000001/OUTGOING', '2013-03-17', 'Bagian Alat Produksi', 'ewr', 'wer', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `outgoing_incoming_detail`
--

CREATE TABLE `outgoing_incoming_detail` (
  `nomor` char(10) collate latin1_general_ci NOT NULL,
  `id` int(10) NOT NULL auto_increment,
  `no_spb` varchar(100) collate latin1_general_ci NOT NULL,
  `tgl_spb` date NOT NULL,
  `kode` char(100) collate latin1_general_ci NOT NULL,
  `jumlah` varchar(20) collate latin1_general_ci NOT NULL,
  `ket` char(100) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `outgoing_incoming_detail`
--

INSERT INTO `outgoing_incoming_detail` (`nomor`, `id`, `no_spb`, `tgl_spb`, `kode`, `jumlah`, `ket`) VALUES
('0000000001', 3, 'SPB-2013000001/OUTGOING', '2013-03-17', 'B00001', '1.00', 'wre');

-- --------------------------------------------------------

--
-- Table structure for table `outgoing_produksi`
--

CREATE TABLE `outgoing_produksi` (
  `nomor` varchar(10) collate latin1_general_ci NOT NULL,
  `no_spb` char(100) collate latin1_general_ci NOT NULL,
  `tgl_spb` date NOT NULL,
  `dept` char(100) collate latin1_general_ci NOT NULL,
  `name_ppc` char(100) collate latin1_general_ci NOT NULL,
  `catatan` varchar(100) collate latin1_general_ci NOT NULL,
  `userid` char(8) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `outgoing_produksi`
--

INSERT INTO `outgoing_produksi` (`nomor`, `no_spb`, `tgl_spb`, `dept`, `name_ppc`, `catatan`, `userid`) VALUES
('0000000001', 'SPB-2013000001/OUTGOING', '2013-03-17', 'Bagian Alat Produksi', '34', '34', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `outgoing_produksi_detail`
--

CREATE TABLE `outgoing_produksi_detail` (
  `nomor` char(10) collate latin1_general_ci NOT NULL,
  `id` int(10) NOT NULL auto_increment,
  `no_spb` varchar(100) collate latin1_general_ci NOT NULL,
  `tgl_spb` date NOT NULL,
  `kode` char(100) collate latin1_general_ci NOT NULL,
  `jumlah` varchar(20) collate latin1_general_ci NOT NULL,
  `ket` char(100) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `outgoing_produksi_detail`
--

INSERT INTO `outgoing_produksi_detail` (`nomor`, `id`, `no_spb`, `tgl_spb`, `kode`, `jumlah`, `ket`) VALUES
('0000000001', 1, 'SPB-2013000001/OUTGOING', '2013-03-17', 'B00003', '1.00', '345');

-- --------------------------------------------------------

--
-- Table structure for table `outgoing_terima`
--

CREATE TABLE `outgoing_terima` (
  `nomor` char(10) collate latin1_general_ci NOT NULL,
  `no_lpb` varchar(100) collate latin1_general_ci NOT NULL,
  `tgl_lpb` date NOT NULL,
  `dari` varchar(255) collate latin1_general_ci NOT NULL,
  `no_spb` char(100) collate latin1_general_ci NOT NULL,
  `tgl_spb` date NOT NULL,
  `dept` char(200) collate latin1_general_ci NOT NULL,
  `name_ppc` char(200) collate latin1_general_ci NOT NULL,
  `catatan` varchar(200) collate latin1_general_ci NOT NULL,
  `user_trt` varchar(100) collate latin1_general_ci NOT NULL,
  `userid` char(8) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `outgoing_terima`
--

INSERT INTO `outgoing_terima` (`nomor`, `no_lpb`, `tgl_lpb`, `dari`, `no_spb`, `tgl_spb`, `dept`, `name_ppc`, `catatan`, `user_trt`, `userid`) VALUES
('0000000001', '123', '2013-03-04', 'PRODUKSI', '123', '2013-03-04', '45', '45', '57', 'goestoe', 'goestoe'),
('0000000002', 'LPB-2013000001/OUTGOING', '2013-03-17', 'PRODUKSI', 'SPB-2013000001/PRODUKSI', '2013-03-17', 'Bagian Alat Produksi', 'ewr', 'wer', 'admin', 'admin'),
('0000000003', 'LPB-2013000002/OUTGOING', '2013-03-17', 'PRODUKSI', '234', '2013-03-04', '234', '234', '234', 'goestoe', 'admin'),
('0000000004', 'LPB-2013000003/OUTGOING', '2013-04-13', 'PRODUKSI', 'SPB-2013000002/PROD-OUT', '2013-04-13', 'Bagian Produksi', 'wer', 'wer', 'admin', 'admin'),
('0000000005', 'LPB-2013000004/OUTGOING', '2013-04-20', 'INCOMING', 'fdg', '2013-02-18', 'dfg', 'dfg', 'dfg', 'goestoe', 'admin'),
('0000000006', 'LPB-2013000005/OUTGOING', '2013-04-26', 'INCOMING', 'SPB-2013000002/INC-OUT', '2013-04-26', 'Bagian Alat Produksi', 'dsf', 'sdf', 'admin', 'admin'),
('0000000007', 'LPB-2013000006/OUTGOING', '2013-07-03', 'PRODUKSI', '12', '2013-03-07', 'Bagian Penyimpanan Barang Sisa / Scrap', 'fdf', 'dfgdf', 'goestoe', 'goestoe');

-- --------------------------------------------------------

--
-- Table structure for table `outgoing_terima_detail`
--

CREATE TABLE `outgoing_terima_detail` (
  `nomor` char(10) collate latin1_general_ci NOT NULL,
  `id` int(10) NOT NULL auto_increment,
  `dari` varchar(255) collate latin1_general_ci NOT NULL,
  `no_lpb` varchar(100) collate latin1_general_ci NOT NULL,
  `tgl_lpb` date NOT NULL,
  `kode` char(100) collate latin1_general_ci NOT NULL,
  `jumlah` varchar(20) collate latin1_general_ci NOT NULL,
  `ket` char(200) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=19 ;

--
-- Dumping data for table `outgoing_terima_detail`
--

INSERT INTO `outgoing_terima_detail` (`nomor`, `id`, `dari`, `no_lpb`, `tgl_lpb`, `kode`, `jumlah`, `ket`) VALUES
('0000000001', 1, 'PRODUKSI', '123', '2013-03-04', 'B00001', '1.00', '555'),
('0000000002', 2, 'PRODUKSI', 'LPB-2013000001/OUTGOING', '2013-03-17', 'B00002', '1.00', 'wer'),
('0000000003', 3, 'PRODUKSI', 'LPB-2013000002/OUTGOING', '2013-03-17', 'B00001', '1.00', '234'),
('0000000003', 4, 'PRODUKSI', 'LPB-2013000002/OUTGOING', '2013-03-17', 'B00001', '1.00', '234'),
('0000000004', 5, 'PRODUKSI', 'LPB-2013000003/OUTGOING', '2013-04-13', 'B00009', '300', 'ewr'),
('0000000005', 6, 'INCOMING', 'LPB-2013000004/OUTGOING', '2013-04-20', 'B00002', '200.00', 'dfgdfg'),
('0000000005', 7, 'INCOMING', 'LPB-2013000004/OUTGOING', '2013-04-20', 'B00002', '1.00', 'wer'),
('0000000006', 8, 'INCOMING', 'LPB-2013000005/OUTGOING', '2013-04-26', 'B00003', '1', 'wer'),
('0000000006', 9, 'INCOMING', 'LPB-2013000005/OUTGOING', '2013-04-26', 'B00003', '1', '345'),
('0000000006', 10, 'INCOMING', 'LPB-2013000005/OUTGOING', '2013-04-26', 'B00006', '1', '32'),
('0000000006', 11, 'INCOMING', 'LPB-2013000005/OUTGOING', '2013-04-26', 'B00005', '1', 'ewr'),
('0000000006', 12, 'INCOMING', 'LPB-2013000005/OUTGOING', '2013-04-26', 'B00007', '1', 'ew'),
('0000000006', 13, 'INCOMING', 'LPB-2013000005/OUTGOING', '2013-04-26', 'B00001', '1', 'ew'),
('0000000006', 14, 'INCOMING', 'LPB-2013000005/OUTGOING', '2013-04-26', 'B00002', '1', 'ew'),
('0000000007', 15, 'PRODUKSI', 'LPB-2013000006/OUTGOING', '2013-07-03', 'B00001', '1.00', '4'),
('0000000007', 16, 'PRODUKSI', 'LPB-2013000006/OUTGOING', '2013-07-03', '99999', '10', 'Kecil Sekali'),
('0000000007', 17, 'PRODUKSI', 'LPB-2013000006/OUTGOING', '2013-07-03', 'CUSHION 1', '200', 'Besar'),
('0000000007', 18, 'PRODUKSI', 'LPB-2013000006/OUTGOING', '2013-07-03', 'CUSHION 3', '300', 'Besar');

-- --------------------------------------------------------

--
-- Table structure for table `pemasok`
--

CREATE TABLE `pemasok` (
  `kode_pemasok` char(8) collate latin1_general_ci NOT NULL,
  `npwp` varchar(20) collate latin1_general_ci NOT NULL,
  `nama` varchar(100) collate latin1_general_ci NOT NULL,
  `alamat` varchar(200) collate latin1_general_ci NOT NULL,
  `kota` varchar(100) collate latin1_general_ci NOT NULL,
  `negara` varchar(100) collate latin1_general_ci NOT NULL,
  `notelp` varchar(100) collate latin1_general_ci NOT NULL,
  `nofax` varchar(100) collate latin1_general_ci NOT NULL,
  `email` varchar(100) collate latin1_general_ci NOT NULL,
  `status` varchar(100) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `pemasok`
--

INSERT INTO `pemasok` (`kode_pemasok`, `npwp`, `nama`, `alamat`, `kota`, `negara`, `notelp`, `nofax`, `email`, `status`) VALUES
('S0000001', '01021221545555', 'PT LG Electronics Indonesia', 'Kawasan Industri MM 2100, Jl Sumatera Blok D Nomor 5', 'Bekasi', 'Indonesia', '021-22222', '021-4545454', '45EWR', 'Kawasan Berikat'),
('S0000002', '010002221212000', 'PT Kolang Kaling', 'JL. Raya Setu', 'WER', 'Indonesia', 'WER', 'WER', 'WER', 'TLDDP/Lokal');

-- --------------------------------------------------------

--
-- Table structure for table `pemasukan`
--

CREATE TABLE `pemasukan` (
  `nomor` char(10) collate latin1_general_ci NOT NULL,
  `no_bpb` varchar(100) collate latin1_general_ci NOT NULL,
  `tgl_bpb` date NOT NULL,
  `pemasok` varchar(100) collate latin1_general_ci NOT NULL,
  `no_invoice` char(100) collate latin1_general_ci NOT NULL,
  `tgl_invoice` date NOT NULL,
  `no_kontrak` char(100) collate latin1_general_ci NOT NULL,
  `tgl_kontrak` date NOT NULL,
  `no_do` char(100) collate latin1_general_ci NOT NULL,
  `catatan` varchar(100) collate latin1_general_ci NOT NULL,
  `jenis_dokpab` char(100) collate latin1_general_ci NOT NULL,
  `no_dokpab` char(6) collate latin1_general_ci NOT NULL,
  `tgl_dokpab` date NOT NULL,
  `harga` varchar(20) collate latin1_general_ci NOT NULL,
  `jenis_kemasan` varchar(20) collate latin1_general_ci NOT NULL,
  `merek_kemasan` varchar(20) collate latin1_general_ci NOT NULL,
  `jumlah_kemasan` varchar(20) collate latin1_general_ci NOT NULL,
  `brutto` varchar(20) collate latin1_general_ci NOT NULL,
  `netto` varchar(20) collate latin1_general_ci NOT NULL,
  `volume` varchar(20) collate latin1_general_ci NOT NULL,
  `userid` char(8) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`no_bpb`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `pemasukan`
--

INSERT INTO `pemasukan` (`nomor`, `no_bpb`, `tgl_bpb`, `pemasok`, `no_invoice`, `tgl_invoice`, `no_kontrak`, `tgl_kontrak`, `no_do`, `catatan`, `jenis_dokpab`, `no_dokpab`, `tgl_dokpab`, `harga`, `jenis_kemasan`, `merek_kemasan`, `jumlah_kemasan`, `brutto`, `netto`, `volume`, `userid`) VALUES
('0000000001', 'BPB-2013000001/DEMO', '2013-04-26', 'S0000001', 'wer', '2013-04-26', '324', '2013-06-08', 'wer', 'CAT-0001', 'BC 2.3', '123123', '2013-04-26', '32423', '234', '324', '343', '234', '234', '324', 'admin'),
('0000000002', 'BPB-2013000002/DEMO', '2013-04-26', 'S0000002', 'wer', '2013-04-26', '34rwer', '2013-06-08', 'wer', 'CAT-0002', 'BC 2.3', '123213', '2013-04-26', '234', '234', '234', '234', '234', '234', '3443', 'admin'),
('0000000003', 'BPB-2013000003/DEMO', '2013-05-18', 'S0000001', '3545', '2013-05-18', '34', '2013-06-08', '34', 'CAT-0003', 'BC 2.3', '567', '2013-05-18', '345', '345', '345', '324', '2345', '344', '3454', 'goestoe'),
('0000000004', 'BPB-2013000004/DEMO', '2013-06-04', 'S0000002', '213', '2013-06-04', '344', '2013-06-08', '213', 'CAT-0004', 'BC 2.3', '213223', '2013-06-04', '345', '34234', '234', '234', '345', '345', '234', 'goestoe'),
('0000000005', 'BPB-2013000005/DEMO', '2013-06-06', 'S0000002', '4354', '2013-06-06', '345', '2013-06-06', '34543', 'CAT-0003', 'BC 2.3', '123456', '2013-06-06', '234', 'BO', '435', '345', '345', '34', '43544', 'goestoe'),
('0000000006', 'BPB-2013000006/DEMO', '2013-06-07', 'S0000002', '324', '2013-06-07', '34324', '2013-06-07', '234', 'CAT-0006', 'BC 2.3', '2343', '2013-06-07', '324', 'BN', '324', '324', '234', '342', '234', 'goestoe'),
('0000000007', 'BPB-2013000007/DEMO', '2013-06-07', 'S0000002', '324', '2013-06-07', '324', '2013-06-07', '324', 'CAT-0007', 'BC 2.7', '324', '2013-06-07', '3244', 'BO', '34', '345', '435', '345', '234', 'goestoe'),
('0000000008', 'BPB-2013000008/DEMO', '2013-06-07', 'S0000002', '324', '2013-06-07', '324', '2013-06-07', '234', 'CAT-0008', 'BC 2.3', '324333', '2013-06-07', '34543', 'BO', '234234', '234', '23', '234', '234', 'goestoe'),
('0000000009', 'BPB-2013000009/DEMO', '2013-06-07', 'S0000002', '2343', '2013-06-07', '324', '2013-06-07', '234', 'CAT-0009', 'BC 2.7', '324', '2013-06-07', '345', 'BG', '342', '324', '345', '324', '234', 'goestoe'),
('0000000010', 'BPB-2013000010/DEMO', '2013-06-07', 'S0000001', '2343', '2013-06-07', '324', '2013-06-07', '324', 'CAT-0010', 'BC 2.7', '324333', '2013-06-07', '345', 'BH', '234', '324', '32', '33', '3343', 'goestoe'),
('0000000011', 'BPB-2013000011/DEMO', '2013-06-07', 'S0000002', '2343', '2013-06-07', '234', '2013-06-07', '234', 'CAT-0011', 'BC 2.3', '324324', '2013-06-07', '435', 'BO', '23', '234', '234', '324', '324', 'goestoe'),
('0000000012', 'BPB-2013000012/DEMO', '2013-06-07', 'S0000002', '4534', '2013-06-07', '345', '2013-06-07', '456', 'CAT-0012', 'BC 2.7', '34', '2013-06-07', '435', 'BN', '55', '55', '345', '546', '456', 'goestoe'),
('0000000013', 'BPB-2013000013/DEMO', '2013-06-07', 'S0000001', '54', '2013-06-07', '45', '2013-06-07', '456', 'CAT-0013', 'BC 2.3', '456455', '2013-06-07', '345', 'BK', '546', '56', '45', '45', '456', 'goestoe'),
('0000000014', 'BPB-2013000014/DEMO', '2013-06-07', 'S0000002', '456', '2013-06-07', '45', '2013-06-07', '4456', 'CAT-0014', 'BC 2.7', '456455', '2013-06-07', '345', 'BT', '54', '54', '45', '4545', '45', 'goestoe'),
('0000000015', 'BPB-2013000015/DEMO', '2013-06-07', 'S0000001', '456', '2013-06-07', '45', '2013-06-07', '45', 'CAT-0015', 'BC 2.3', '456456', '2013-06-07', '345', 'BO', '456', '545', '546', '456', '456', 'goestoe'),
('0000000016', 'BPB-2013000016/DEMO', '2013-06-08', 'S0000002', '234332', '2013-06-08', '234324', '2013-06-08', '234234', 'CAT-0013', 'BC 2.7', '423333', '2013-06-08', '23432.54', 'AP', '345', '34', '4443', '345', '435', 'goestoe'),
('0000000017', 'BPB-2013000017/DEMO', '2013-06-10', 'S0000002', '23423', '2013-06-10', '234324', '2013-06-10', '234', 'CAT-0004', 'BC 2.3', '2343', '2013-06-10', '234.56', 'AM', '234', '234', '234', '234', '234', 'goestoe'),
('0000000018', 'BPB-2013000018/DEMO', '2013-06-10', 'S0000001', '23423', '2013-06-10', '234324', '2013-06-10', '43324', 'CAT-0006', 'BC 2.3', '234', '2013-06-10', '23432.54', 'BA', '234', '234', '234', '234', '324', 'goestoe'),
('0000000019', 'BPB-2013000019/DEMO', '2013-06-10', 'S0000001', '132', '2013-06-10', '231', '2013-06-10', '123', 'CAT-0003', 'BC 2.3', '123455', '2013-06-10', '123', 'BO', '123', '23', '213', '123', '213', 'goestoe');

-- --------------------------------------------------------

--
-- Table structure for table `pemasukan_detail`
--

CREATE TABLE `pemasukan_detail` (
  `nomor` char(10) collate latin1_general_ci NOT NULL,
  `id` int(10) NOT NULL auto_increment,
  `no_bpb` varchar(100) collate latin1_general_ci NOT NULL,
  `tgl_bpb` date NOT NULL,
  `kode` char(100) collate latin1_general_ci NOT NULL,
  `jumlah` varchar(20) collate latin1_general_ci NOT NULL,
  `valuta` char(8) collate latin1_general_ci NOT NULL,
  `nilai` varchar(20) collate latin1_general_ci NOT NULL,
  `netto_detail` varchar(20) collate latin1_general_ci NOT NULL,
  `volume_detail` varchar(20) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=25 ;

--
-- Dumping data for table `pemasukan_detail`
--

INSERT INTO `pemasukan_detail` (`nomor`, `id`, `no_bpb`, `tgl_bpb`, `kode`, `jumlah`, `valuta`, `nilai`, `netto_detail`, `volume_detail`) VALUES
('0000000001', 1, 'BPB-2013000001/DEMO', '2013-04-26', '002 X 11 X 15', '200', 'USD', '123.78', '', ''),
('0000000001', 2, 'BPB-2013000001/DEMO', '2013-04-26', '002 X 11 X 15', '1000', 'USD', '123.78', '', ''),
('0000000002', 3, 'BPB-2013000002/DEMO', '2013-04-26', '002 X 11 X 15', '20000', 'USD', '123.45', '', ''),
('0000000003', 5, 'BPB-2013000003/DEMO', '2013-05-18', '002 X 11 X 15', '1', 'USD', '234.67', '', ''),
('0000000004', 6, 'BPB-2013000004/DEMO', '2013-06-04', '002 X 11 X 15', '200', 'USD', '12343.67', '234', '324'),
('0000000005', 7, 'BPB-2013000005/DEMO', '2013-06-06', '1PZZR-0011B', '1', 'OMR', '234', '', ''),
('0000000005', 8, 'BPB-2013000005/DEMO', '2013-06-06', '003x12x13', '45', 'PGK', '4565.87', '678.90', '678.90'),
('0000000005', 9, 'BPB-2013000005/DEMO', '2013-06-06', '0.5 X 15 X 443/443X5', '1', 'PGK', '679', '3434', '3454'),
('0000000005', 10, 'BPB-2013000005/DEMO', '2013-06-06', '0.5 X 15 X 443/443X5', '678899', 'USD', '9879', '769066', '5'),
('0000000006', 11, 'BPB-2013000006/DEMO', '2013-06-07', '1200012520', '100', 'USD', '234.56', '345.67', '23'),
('0000000007', 12, 'BPB-2013000007/DEMO', '2013-06-07', '002 X 11 X 15', '44', 'USD', '234', '34', '234'),
('0000000008', 13, 'BPB-2013000008/DEMO', '2013-06-07', '10 HP AC', '324', 'USD', '324', '324', '324'),
('0000000009', 14, 'BPB-2013000009/DEMO', '2013-06-07', '0.5 X 15 X 443/443X5', '34', 'PKR', '34', '324', '234'),
('0000000010', 15, 'BPB-2013000010/DEMO', '2013-06-07', '0.3 X 380 X 560', '234', 'NOK', '324', '324', '234'),
('0000000011', 16, 'BPB-2013000011/DEMO', '2013-06-07', '003x12x13', '234', 'NOK', '234', '234', '324'),
('0000000012', 17, 'BPB-2013000012/DEMO', '2013-06-07', '002 X 11 X 15', '345', 'AUD', '345', '345', '345'),
('0000000013', 18, 'BPB-2013000013/DEMO', '2013-06-07', '003x12x13', '56', 'NOK', '546', '546', '546'),
('0000000014', 19, 'BPB-2013000014/DEMO', '2013-06-07', '003x12x13', '546', 'OMR', '456', '45', '45'),
('0000000015', 20, 'BPB-2013000015/DEMO', '2013-06-07', '0.5 X 15 X 443/443X5', '45', 'NGN', '456', '546', '456'),
('0000000016', 21, 'BPB-2013000016/DEMO', '2013-06-08', '1200012520', '234', 'OMR', '2343', '234', '324'),
('0000000017', 22, 'BPB-2013000017/DEMO', '2013-06-10', '45678', '1000', 'USD', '12343.67', '123', '123'),
('0000000018', 23, 'BPB-2013000018/DEMO', '2013-06-10', '7891234', '2000', 'USD', '32443', '2343', '234'),
('0000000019', 24, 'BPB-2013000019/DEMO', '2013-06-10', '99999', '2000', 'USD', '32443', '324', '234');

-- --------------------------------------------------------

--
-- Table structure for table `pemusnahan`
--

CREATE TABLE `pemusnahan` (
  `nomor` char(10) collate latin1_general_ci NOT NULL,
  `no_pem` char(100) collate latin1_general_ci NOT NULL,
  `tgl_pem` date NOT NULL,
  `penerima` varchar(100) collate latin1_general_ci NOT NULL,
  `no_invoice` char(100) collate latin1_general_ci NOT NULL,
  `tgl_invoice` date NOT NULL,
  `no_kontrak` varchar(255) collate latin1_general_ci NOT NULL,
  `tgl_kontrak` date NOT NULL,
  `catatan` varchar(100) collate latin1_general_ci NOT NULL,
  `no_skep` varchar(100) collate latin1_general_ci NOT NULL,
  `tgl_skep` date NOT NULL,
  `no_bap` varchar(255) collate latin1_general_ci NOT NULL,
  `tgl_bap` date NOT NULL,
  `harga` varchar(20) collate latin1_general_ci NOT NULL,
  `jenis_kemasan` varchar(20) collate latin1_general_ci NOT NULL,
  `merek_kemasan` varchar(20) collate latin1_general_ci NOT NULL,
  `jumlah_kemasan` varchar(20) collate latin1_general_ci NOT NULL,
  `brutto` varchar(20) collate latin1_general_ci NOT NULL,
  `netto` varchar(20) collate latin1_general_ci NOT NULL,
  `volume` varchar(20) collate latin1_general_ci NOT NULL,
  `userid` char(8) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `pemusnahan`
--

INSERT INTO `pemusnahan` (`nomor`, `no_pem`, `tgl_pem`, `penerima`, `no_invoice`, `tgl_invoice`, `no_kontrak`, `tgl_kontrak`, `catatan`, `no_skep`, `tgl_skep`, `no_bap`, `tgl_bap`, `harga`, `jenis_kemasan`, `merek_kemasan`, `jumlah_kemasan`, `brutto`, `netto`, `volume`, `userid`) VALUES
('0000000001', 'PEM-2013000001/DEMO', '2013-06-09', 'P00001', '123', '2013-06-09', '123', '2013-06-09', '213123', '123', '2013-06-09', '123', '2013-06-09', '123', 'BO', '123', '123', '123', '123', '123', 'goestoe');

-- --------------------------------------------------------

--
-- Table structure for table `pemusnahan_detail`
--

CREATE TABLE `pemusnahan_detail` (
  `nomor` char(10) collate latin1_general_ci NOT NULL,
  `id` int(10) NOT NULL auto_increment,
  `no_pem` varchar(100) collate latin1_general_ci NOT NULL,
  `tgl_pem` date NOT NULL,
  `kode` char(100) collate latin1_general_ci NOT NULL,
  `jumlah` varchar(20) collate latin1_general_ci NOT NULL,
  `valuta` char(8) collate latin1_general_ci NOT NULL,
  `nilai` varchar(20) collate latin1_general_ci NOT NULL,
  `netto_detail` varchar(20) collate latin1_general_ci NOT NULL,
  `volume_detail` varchar(20) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pemusnahan_detail`
--

INSERT INTO `pemusnahan_detail` (`nomor`, `id`, `no_pem`, `tgl_pem`, `kode`, `jumlah`, `valuta`, `nilai`, `netto_detail`, `volume_detail`) VALUES
('0000000001', 1, 'PEM-2013000001/DEMO', '2013-06-09', '1200012520', '200.00', 'USD', '12343.67', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `penerima`
--

CREATE TABLE `penerima` (
  `kode_penerima` char(8) collate latin1_general_ci NOT NULL,
  `npwp` varchar(20) collate latin1_general_ci NOT NULL,
  `nama` varchar(100) collate latin1_general_ci NOT NULL,
  `alamat` varchar(200) collate latin1_general_ci NOT NULL,
  `kota` varchar(100) collate latin1_general_ci NOT NULL,
  `negara` varchar(100) collate latin1_general_ci NOT NULL,
  `notelp` varchar(100) collate latin1_general_ci NOT NULL,
  `nofax` varchar(100) collate latin1_general_ci NOT NULL,
  `email` varchar(100) collate latin1_general_ci NOT NULL,
  `status` varchar(100) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `penerima`
--

INSERT INTO `penerima` (`kode_penerima`, `npwp`, `nama`, `alamat`, `kota`, `negara`, `notelp`, `nofax`, `email`, `status`) VALUES
('P00001', '010002221212000', 'PT Berlian Tahta', 'Bagong Raya Bejasi', 'Bekasi Raya', 'Indonesia', '021-45456', '021', '45asd@gmail.com', 'LDP/Luar Negeri');

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `nomor` char(10) collate latin1_general_ci NOT NULL,
  `no_sj` char(100) collate latin1_general_ci NOT NULL,
  `tgl_sj` date NOT NULL,
  `penerima` varchar(100) collate latin1_general_ci NOT NULL,
  `no_invoice` char(100) collate latin1_general_ci NOT NULL,
  `tgl_invoice` date NOT NULL,
  `no_kontrak` varchar(255) collate latin1_general_ci NOT NULL,
  `tgl_kontrak` date NOT NULL,
  `no_do` char(100) collate latin1_general_ci NOT NULL,
  `catatan` varchar(100) collate latin1_general_ci NOT NULL,
  `jenis_dokpab` char(100) collate latin1_general_ci NOT NULL,
  `no_dokpab` int(6) NOT NULL,
  `tgl_dokpab` date NOT NULL,
  `harga` varchar(20) collate latin1_general_ci NOT NULL,
  `jenis_kemasan` varchar(20) collate latin1_general_ci NOT NULL,
  `merek_kemasan` varchar(20) collate latin1_general_ci NOT NULL,
  `jumlah_kemasan` varchar(20) collate latin1_general_ci NOT NULL,
  `brutto` varchar(20) collate latin1_general_ci NOT NULL,
  `netto` varchar(20) collate latin1_general_ci NOT NULL,
  `volume` varchar(20) collate latin1_general_ci NOT NULL,
  `userid` char(8) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `pengeluaran`
--

INSERT INTO `pengeluaran` (`nomor`, `no_sj`, `tgl_sj`, `penerima`, `no_invoice`, `tgl_invoice`, `no_kontrak`, `tgl_kontrak`, `no_do`, `catatan`, `jenis_dokpab`, `no_dokpab`, `tgl_dokpab`, `harga`, `jenis_kemasan`, `merek_kemasan`, `jumlah_kemasan`, `brutto`, `netto`, `volume`, `userid`) VALUES
('0000000001', 'SJ-2013000001/DEMO', '2013-04-26', 'P00001', '34', '2013-04-26', '324', '2013-06-08', '4', 'CAT-0016', 'BC 4.1', 324324, '2013-04-26', '324', '234', '234', '234', '234', '234', '234', 'admin'),
('0000000002', 'SJ-2013000002/DEMO', '2013-06-04', 'P00001', '23423', '2013-06-04', '324', '2013-06-08', '323', 'CAT-0017', 'BC 2.7', 232323, '2013-06-04', '234', '234', 'wer', '233', '324', '234', '324', 'goestoe'),
('0000000003', 'SJ-2013000003/DEMO', '2013-06-04', 'P00001', '123', '2013-06-04', '234', '2013-06-08', '324', 'CAT-0018', 'BC 2.7', 324324, '2013-06-04', '24', '234', '234', '234', '234', '342', '234', 'goestoe'),
('0000000004', 'SJ-2013000004/DEMO', '2013-06-07', 'P00001', '2343', '2013-06-07', '234', '2013-06-07', '34234', 'CAT-0018', 'BC 4.1', 234234, '2013-06-07', '324', 'AM', '234', '234', '234', '234', '234', 'goestoe'),
('0000000005', 'SJ-2013000005/DEMO', '2013-06-08', 'P00001', '3243', '2013-06-08', '324', '2013-06-08', '324', 'CAT-0021', 'BC 4.1', 324332, '2013-06-08', '324', 'BO', '345', '34', '234', '234', '234', 'goestoe');

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran_detail`
--

CREATE TABLE `pengeluaran_detail` (
  `nomor` char(10) collate latin1_general_ci NOT NULL,
  `id` int(10) NOT NULL auto_increment,
  `no_sj` varchar(100) collate latin1_general_ci NOT NULL,
  `tgl_sj` date NOT NULL,
  `kode` char(100) collate latin1_general_ci NOT NULL,
  `jumlah` varchar(20) collate latin1_general_ci NOT NULL,
  `valuta` char(8) collate latin1_general_ci NOT NULL,
  `nilai` varchar(20) collate latin1_general_ci NOT NULL,
  `netto_detail` varchar(20) collate latin1_general_ci NOT NULL,
  `volume_detail` varchar(20) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `pengeluaran_detail`
--

INSERT INTO `pengeluaran_detail` (`nomor`, `id`, `no_sj`, `tgl_sj`, `kode`, `jumlah`, `valuta`, `nilai`, `netto_detail`, `volume_detail`) VALUES
('0000000001', 1, 'SJ-2013000001/DEMO', '2013-04-26', 'B00001', '1.00', 'AUD', '345.00', '', ''),
('0000000001', 2, 'SJ-2013000001/DEMO', '2013-04-26', 'B00003', '2.00', 'NAD', '234.00', '', ''),
('0000000002', 3, 'SJ-2013000002/DEMO', '2013-06-04', '1200012520', '200.00', 'USD', '3232.00', '', ''),
('0000000003', 4, 'SJ-2013000003/DEMO', '2013-06-04', '1200012520', '300.00', 'USD', '324.00', '', ''),
('0000000004', 5, 'SJ-2013000004/DEMO', '2013-06-07', '1200012520', '33.00', 'USD', '2343.00', '', ''),
('0000000005', 6, 'SJ-2013000005/DEMO', '2013-06-08', '1200012520', '200.00', 'USD', '65.00', '34', '34');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(4) NOT NULL auto_increment,
  `penggunaid` char(20) collate latin1_general_ci NOT NULL,
  `password` varchar(200) collate latin1_general_ci NOT NULL,
  `nm_pengguna` varchar(100) collate latin1_general_ci NOT NULL,
  `level` enum('BeaCukai','Admin','SuperAdmin') collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `penggunaid`, `password`, `nm_pengguna`, `level`) VALUES
(2, 'goestoe', 'ba1d96f9f8a054ae54137008667eecf8', 'Agustu Atihuta', 'SuperAdmin'),
(3, 'bayu', '6853aa20dbf58f53d482a55f0ad694a6', 'Bayu Hendra Wianto', 'SuperAdmin');

-- --------------------------------------------------------

--
-- Table structure for table `produksi`
--

CREATE TABLE `produksi` (
  `nomor` char(10) collate latin1_general_ci NOT NULL,
  `no_spb` char(100) collate latin1_general_ci NOT NULL,
  `tgl_spb` date NOT NULL,
  `no_request` varchar(100) collate latin1_general_ci NOT NULL,
  `tgl_request` date NOT NULL,
  `dept` char(200) collate latin1_general_ci NOT NULL,
  `name_ppc` char(200) collate latin1_general_ci NOT NULL,
  `catatan` varchar(200) collate latin1_general_ci NOT NULL,
  `userid` char(8) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `produksi`
--

INSERT INTO `produksi` (`nomor`, `no_spb`, `tgl_spb`, `no_request`, `tgl_request`, `dept`, `name_ppc`, `catatan`, `userid`) VALUES
('0000000001', 'SPB-2013000001/INCOMING', '2013-03-17', '345', '2013-03-17', 'Bagian Penyimpanan Bahan Baku / Penolong', '345', '345', 'admin'),
('0000000002', 'SPB-2013000002/INC-PROD', '2013-04-26', '234', '2013-04-26', 'Bagian Pra Produksi', '234', '234', 'admin'),
('0000000003', 'SPB-2013000003/INC-PROD', '2013-06-10', '234', '2013-06-10', 'Bagian Produksi', '234', '234', 'goestoe'),
('0000000004', 'SPB-2013000004/INC-PROD', '2013-06-10', '234', '2013-06-10', 'Bagian Alat Produksi', '324', '234', 'goestoe'),
('0000000005', 'SPB-2013000005/INC-PROD', '2013-06-10', '324', '2013-06-10', 'Bagian Alat Produksi', '234', '234', 'goestoe'),
('0000000006', 'SPB-2013000006/INC-PROD', '2013-06-10', '123', '2013-06-10', 'Bagian Pra Produksi', '123', '3123', 'goestoe');

-- --------------------------------------------------------

--
-- Table structure for table `produksi_detail`
--

CREATE TABLE `produksi_detail` (
  `nomor` char(10) collate latin1_general_ci NOT NULL,
  `id` int(10) NOT NULL auto_increment,
  `no_spb` varchar(100) collate latin1_general_ci NOT NULL,
  `tgl_spb` date NOT NULL,
  `kode` char(100) collate latin1_general_ci NOT NULL,
  `jumlah` varchar(20) collate latin1_general_ci NOT NULL,
  `ket` char(100) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `produksi_detail`
--

INSERT INTO `produksi_detail` (`nomor`, `id`, `no_spb`, `tgl_spb`, `kode`, `jumlah`, `ket`) VALUES
('0000000001', 10, 'SPB-2013000001/INCOMING', '2013-03-17', 'B00002', '1.00', '45'),
('0000000002', 11, 'SPB-2013000002/INC-PROD', '2013-04-26', 'B00004', '1', '435'),
('0000000003', 12, 'SPB-2013000003/INC-PROD', '2013-06-10', '45678', '100', '234'),
('0000000004', 13, 'SPB-2013000004/INC-PROD', '2013-06-10', '7891234', '1000', '324'),
('0000000005', 14, 'SPB-2013000005/INC-PROD', '2013-06-10', '45678', '30', '324'),
('0000000006', 15, 'SPB-2013000006/INC-PROD', '2013-06-10', '99999', '300', 'wer');

-- --------------------------------------------------------

--
-- Table structure for table `produksi_incoming`
--

CREATE TABLE `produksi_incoming` (
  `nomor` char(10) collate latin1_general_ci NOT NULL,
  `no_spb` char(100) collate latin1_general_ci NOT NULL,
  `tgl_spb` date NOT NULL,
  `dept` char(200) collate latin1_general_ci NOT NULL,
  `name_ppc` char(200) collate latin1_general_ci NOT NULL,
  `catatan` varchar(200) collate latin1_general_ci NOT NULL,
  `userid` char(8) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `produksi_incoming`
--

INSERT INTO `produksi_incoming` (`nomor`, `no_spb`, `tgl_spb`, `dept`, `name_ppc`, `catatan`, `userid`) VALUES
('0000000001', 'SPB-2013000001/PRODUKSI', '2013-03-17', 'Bagian Alat Produksi', '324', '234', 'admin'),
('0000000002', 'SPB-2013000002/PROD-INC', '2013-06-10', 'Bagian Pra Produksi', '324', '234', 'goestoe');

-- --------------------------------------------------------

--
-- Table structure for table `produksi_incoming_detail`
--

CREATE TABLE `produksi_incoming_detail` (
  `nomor` char(10) collate latin1_general_ci NOT NULL,
  `id` int(10) NOT NULL auto_increment,
  `no_spb` varchar(100) collate latin1_general_ci NOT NULL,
  `tgl_spb` date NOT NULL,
  `kode` char(100) collate latin1_general_ci NOT NULL,
  `jumlah` varchar(20) collate latin1_general_ci NOT NULL,
  `ket` char(100) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `produksi_incoming_detail`
--

INSERT INTO `produksi_incoming_detail` (`nomor`, `id`, `no_spb`, `tgl_spb`, `kode`, `jumlah`, `ket`) VALUES
('0000000001', 5, 'SPB-2013000001/PRODUKSI', '2013-03-17', 'B00003', '1.00', '324'),
('0000000002', 6, 'SPB-2013000002/PROD-INC', '2013-06-10', '45678', '30', '324');

-- --------------------------------------------------------

--
-- Table structure for table `produksi_outgoing`
--

CREATE TABLE `produksi_outgoing` (
  `nomor` char(10) collate latin1_general_ci NOT NULL,
  `no_spb` char(100) collate latin1_general_ci NOT NULL,
  `tgl_spb` date NOT NULL,
  `dept` char(200) collate latin1_general_ci NOT NULL,
  `name_ppc` char(200) collate latin1_general_ci NOT NULL,
  `catatan` varchar(200) collate latin1_general_ci NOT NULL,
  `userid` char(8) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `produksi_outgoing`
--

INSERT INTO `produksi_outgoing` (`nomor`, `no_spb`, `tgl_spb`, `dept`, `name_ppc`, `catatan`, `userid`) VALUES
('0000000001', 'SPB-2013000001/PRODUKSI', '2013-03-17', 'Bagian Alat Produksi', 'ewr', 'wer', 'admin'),
('0000000002', 'SPB-2013000002/PROD-OUT', '2013-04-13', 'Bagian Produksi', 'wer', 'wer', 'admin'),
('0000000003', 'SPB-2013000003/PROD-OUT', '2013-07-03', 'Bagian Alat Produksi', '423', '234', 'goestoe');

-- --------------------------------------------------------

--
-- Table structure for table `produksi_outgoing_detail`
--

CREATE TABLE `produksi_outgoing_detail` (
  `nomor` char(10) collate latin1_general_ci NOT NULL,
  `id` int(10) NOT NULL auto_increment,
  `no_spb` varchar(100) collate latin1_general_ci NOT NULL,
  `tgl_spb` date NOT NULL,
  `kode` char(100) collate latin1_general_ci NOT NULL,
  `jumlah` varchar(20) collate latin1_general_ci NOT NULL,
  `ket` char(200) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `produksi_outgoing_detail`
--

INSERT INTO `produksi_outgoing_detail` (`nomor`, `id`, `no_spb`, `tgl_spb`, `kode`, `jumlah`, `ket`) VALUES
('0000000001', 5, 'SPB-2013000001/PRODUKSI', '2013-03-17', 'B00002', '1.00', 'wer'),
('0000000002', 6, 'SPB-2013000002/PROD-OUT', '2013-04-13', 'B00009', '300', 'ewr'),
('0000000003', 7, 'SPB-2013000003/PROD-OUT', '2013-07-03', '99999', '10', 'Kecil Sekali'),
('0000000003', 8, 'SPB-2013000003/PROD-OUT', '2013-07-03', 'CUSHION 1', '200', 'Besar'),
('0000000003', 9, 'SPB-2013000003/PROD-OUT', '2013-07-03', 'CUSHION 3', '300', 'Besar');

-- --------------------------------------------------------

--
-- Table structure for table `produksi_terima`
--

CREATE TABLE `produksi_terima` (
  `nomor` char(10) collate latin1_general_ci NOT NULL,
  `no_lpb` varchar(100) collate latin1_general_ci NOT NULL,
  `tgl_lpb` date NOT NULL,
  `dari` varchar(255) collate latin1_general_ci NOT NULL,
  `no_spb` char(100) collate latin1_general_ci NOT NULL,
  `tgl_spb` date NOT NULL,
  `dept` char(200) collate latin1_general_ci NOT NULL,
  `name_ppc` char(200) collate latin1_general_ci NOT NULL,
  `catatan` varchar(200) collate latin1_general_ci NOT NULL,
  `user_trt` varchar(100) collate latin1_general_ci NOT NULL,
  `userid` char(8) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `produksi_terima`
--

INSERT INTO `produksi_terima` (`nomor`, `no_lpb`, `tgl_lpb`, `dari`, `no_spb`, `tgl_spb`, `dept`, `name_ppc`, `catatan`, `user_trt`, `userid`) VALUES
('0000000001', '23324', '2013-02-14', 'INCOMING', 'ewr', '2013-02-14', 'werwe', 'wer', 'wer', 'goestoe', 'goestoe'),
('0000000002', 'erwrwer', '2013-02-20', 'INCOMING', '1235', '2013-02-20', '4555', '455', '4555', 'goestoe', 'goestoe'),
('0000000003', '879', '2013-02-20', 'INCOMING', '78978', '2013-02-20', '789', '789', '789', 'goestoe', 'goestoe'),
('0000000004', '1234', '2013-03-04', 'INCOMING', '123', '2013-03-04', '123', '123', '234', 'goestoe', 'goestoe'),
('0000000005', 'LPB-2013000001/PRODUKSI', '2013-03-17', 'OUTGOING', 'SPB-2013000001/OUTGOING', '2013-03-17', 'Bagian Alat Produksi', '34', '34', 'admin', 'admin'),
('0000000006', 'LPB-2013000002/PRODUKSI', '2013-04-26', 'INCOMING', 'SPB-2013000001/INCOMING', '2013-03-17', 'Bagian Penyimpanan Bahan Baku / Penolong', '345', '345', 'admin', 'admin'),
('0000000007', 'LPB-2013000003/PRODUKSI', '2013-06-10', 'INCOMING', 'SPB-2013000003/INC-PROD', '2013-06-10', 'Bagian Produksi', '234', '234', 'goestoe', 'goestoe'),
('0000000008', 'LPB-2013000004/PRODUKSI', '2013-06-10', 'INCOMING', 'SPB-2013000004/INC-PROD', '2013-06-10', 'Bagian Alat Produksi', '324', '234', 'goestoe', 'goestoe'),
('0000000009', 'LPB-2013000005/PRODUKSI', '2013-06-10', 'INCOMING', '123', '2013-03-07', 'Bagian Penyimpanan Barang Sisa / Scrap', '21', '123', 'goestoe', 'goestoe'),
('0000000010', 'LPB-2013000006/PRODUKSI', '2013-06-10', 'INCOMING', 'SPB-2013000006/INC-PROD', '2013-06-10', 'Bagian Pra Produksi', '123', '3123', 'goestoe', 'goestoe');

-- --------------------------------------------------------

--
-- Table structure for table `produksi_terima_detail`
--

CREATE TABLE `produksi_terima_detail` (
  `nomor` char(10) collate latin1_general_ci NOT NULL,
  `id` int(10) NOT NULL auto_increment,
  `dari` varchar(255) collate latin1_general_ci NOT NULL,
  `no_lpb` varchar(100) collate latin1_general_ci NOT NULL,
  `tgl_lpb` date NOT NULL,
  `kode` char(100) collate latin1_general_ci NOT NULL,
  `jumlah` varchar(20) collate latin1_general_ci NOT NULL,
  `ket` char(200) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `produksi_terima_detail`
--

INSERT INTO `produksi_terima_detail` (`nomor`, `id`, `dari`, `no_lpb`, `tgl_lpb`, `kode`, `jumlah`, `ket`) VALUES
('0000000001', 1, 'INCOMING', '23324', '2013-02-14', 'B00001', '200.00', 'ewr'),
('0000000001', 2, 'INCOMING', '23324', '2013-02-14', 'B00005', '400.00', 'wer'),
('0000000002', 3, 'INCOMING', 'erwrwer', '2013-02-20', 'B00003', '200.00', '200'),
('0000000003', 4, 'INCOMING', '879', '2013-02-20', 'B00002', '400.00', '456'),
('0000000003', 5, 'INCOMING', '879', '2013-02-20', 'B00002', '100.00', '111'),
('0000000003', 6, 'INCOMING', '879', '2013-02-20', 'B00002', '100.00', '455'),
('0000000004', 7, 'INCOMING', '1234', '2013-03-04', 'B00002', '1.00', 'jkhj'),
('0000000004', 8, 'INCOMING', '1234', '2013-03-04', 'B00001', '1.00', 'ert'),
('0000000005', 9, 'OUTGOING', 'LPB-2013000001/PRODUKSI', '2013-03-17', 'B00003', '1.00', '345'),
('0000000006', 10, 'INCOMING', 'LPB-2013000002/PRODUKSI', '2013-04-26', 'B00002', '1.00', '45'),
('0000000007', 11, 'INCOMING', 'LPB-2013000003/PRODUKSI', '2013-06-10', '45678', '100', '234'),
('0000000008', 12, 'INCOMING', 'LPB-2013000004/PRODUKSI', '2013-06-10', '7891234', '1000', '324'),
('0000000009', 13, 'INCOMING', 'LPB-2013000005/PRODUKSI', '2013-06-10', 'B00003', '1.00', '54'),
('0000000009', 14, 'INCOMING', 'LPB-2013000005/PRODUKSI', '2013-06-10', '45678', '30', '324'),
('0000000010', 15, 'INCOMING', 'LPB-2013000006/PRODUKSI', '2013-06-10', '99999', '300', 'wer');

-- --------------------------------------------------------

--
-- Table structure for table `satuan`
--

CREATE TABLE `satuan` (
  `kode` char(6) collate latin1_general_ci NOT NULL,
  `jenis` varchar(100) collate latin1_general_ci NOT NULL,
  `nama` varchar(100) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `satuan`
--

INSERT INTO `satuan` (`kode`, `jenis`, `nama`) VALUES
('SAT001', 'ACR', 'Acre (4840 yd2)'),
('SAT002', 'AMH', 'Ampere-hour  (3,6 kC)'),
('SAT003', 'AMP', 'Ampere'),
('SAT004', 'ANN', 'Year'),
('SAT005', 'APZ', 'Ounce GB,US (31,10348 g)'),
('SAT006', 'ARE', 'Are (100m2)'),
('SAT007', 'ATM', 'Standard atmosphere (101325 Pa)'),
('SAT008', 'ATT', 'Technical atmosphere (98066,5 Pa)'),
('SAT009', 'BAR', 'Bar'),
('SAT010', 'BIL', 'Trillion US / Billion'),
('SAT011', 'BLD', 'Dry barrel (115,627 dm3)'),
('SAT012', 'BLL', 'Barrel (petroleum) (458,987 dm3)'),
('SAT013', 'BUA', 'Bushel (35,2391 dm3)'),
('SAT014', 'BUI', 'Bushel (36,36874 dm3)'),
('SAT015', 'CCT', 'Carrying capacity in metric tonnes'),
('SAT016', 'CDL', 'Candela'),
('SAT017', 'CEL', 'Degree celcius'),
('SAT018', 'CEN', 'Hundred'),
('SAT019', 'CKG', 'Coulomb per kilogram'),
('SAT020', 'CLT', 'Centilitre'),
('SAT021', 'CMK', 'Square centimetre'),
('SAT022', 'CMQ', 'Cubic centimetre'),
('SAT023', 'CMT', 'Centimetre'),
('SAT024', 'CNP', 'Hundred packs'),
('SAT025', 'CNT', 'Cental GB (45,359237 kg)'),
('SAT026', 'COU', 'Coulomb'),
('SAT027', 'CTM', 'Metric carat (200 mg = 2.10-4 kg)'),
('SAT028', 'CWA', 'Hundredweight, US (45,3592 kg)'),
('SAT029', 'CWI', 'Long/ hundredweight GB (50,802345 kg)'),
('SAT030', 'DAA', 'Decare'),
('SAT031', 'DAD', 'Ten day'),
('SAT032', 'DAY', 'Day'),
('SAT033', 'DBC', 'Decade (ten years)'),
('SAT034', 'DMK', 'Square decimetre'),
('SAT035', 'DMQ', 'Cubic decimetre'),
('SAT036', 'DMT', 'Decimetre'),
('SAT037', 'DPR', 'Dozen pairs'),
('SAT038', 'DPT', 'Displecement tonnege'),
('SAT039', 'DRA', 'Dram US (3,887935 g)'),
('SAT040', 'DRI', 'Dram GB (1,771745 g)'),
('SAT041', 'DRL', 'Dozen rolls'),
('SAT042', 'DRM', 'Drachm, GB (3,887935 g)'),
('SAT043', 'DTN', 'Decitonne, Centner, Quintall, metric (100 kg)'),
('SAT044', 'DWT', 'Pennyweight GB,US (1,555174 g)'),
('SAT045', 'DZN', 'Dozen'),
('SAT046', 'DZP', 'Dozen packs'),
('SAT047', 'FAH', 'degree Fahrenheit'),
('SAT048', 'FOT', 'Foot (0.3048 m)'),
('SAT049', 'FTK', 'Square foot'),
('SAT050', 'FTQ', 'Cubic foot'),
('SAT051', 'GBQ', 'Gigabecquerel'),
('SAT052', 'GGR', 'Great gross (12 gross)'),
('SAT053', 'GIA', 'Gill (11,8294 cm3)'),
('SAT054', 'GII', 'Gill (0,142065 dm3)'),
('SAT055', 'GLD', 'Dry gallon (4,404884 dm3)'),
('SAT056', 'GLI', 'Gallon (4,546092 dm3)'),
('SAT057', 'GLL', 'Liquid gallon (3,78541 dm3)'),
('SAT058', 'GRM', 'Gram'),
('SAT059', 'GRN', 'Grain GB,US (64,798910 mg)'),
('SAT060', 'GRO', 'Gross'),
('SAT061', 'GRT', 'Gross (register) ton'),
('SAT062', 'GWH', 'Gigawatt-hour (1 million KW/h)'),
('SAT063', 'HAR', 'Hectare'),
('SAT064', 'HBA', 'Hectobar'),
('SAT065', 'HGM', 'Hectogram'),
('SAT066', 'HIU', 'Hundred intenational units'),
('SAT067', 'HLT', 'Hectolitre'),
('SAT068', 'HMQ', 'Million cubic metres'),
('SAT069', 'HMT', 'Hectometre'),
('SAT070', 'HPA', 'Hectolitre of pure alcohol'),
('SAT071', 'HTZ', 'Hertz'),
('SAT072', 'HUR', 'Hour'),
('SAT073', 'INH', 'Inch (2.54 mm)'),
('SAT074', 'INK', 'Square inch'),
('SAT075', 'INQ', 'Cubic inch'),
('SAT076', 'JOU', 'Joule'),
('SAT077', 'KBA', 'Kilobar'),
('SAT078', 'KEL', 'Kelvin'),
('SAT079', 'KGM', 'Kilogram'),
('SAT080', 'KJO', 'Kilojoule'),
('SAT081', 'KMH', 'Kilometre per hour'),
('SAT082', 'KMK', 'Square kilometre'),
('SAT083', 'KMQ', 'Kilogram per cubic meter'),
('SAT084', 'KMT', 'Kilometre'),
('SAT085', 'KNI', 'Kilogram of nitrogen'),
('SAT086', 'KNS', 'Kilogram of named substance'),
('SAT087', 'KNT', 'Knot ( 1 n mile oer hour'),
('SAT088', 'KPH', 'Kilogram of potassium hydroxide (caustic pota'),
('SAT089', 'KPO', 'Kilogram of potassium oxide'),
('SAT090', 'KPP', 'Kilogram of phosphorus pentoxide  (phosphoric'),
('SAT091', 'KSD', 'Kilogram of substance 90 per cent dry'),
('SAT092', 'KSH', 'Kilogram of sodium hydyoxide  (caustic soda)'),
('SAT093', 'KTN', 'Kilotonne'),
('SAT094', 'KUR', 'Kilogram of uranium'),
('SAT095', 'KVA', 'Kilovolt - ampere'),
('SAT096', 'KWH', 'Kilowatt-hour'),
('SAT097', 'KWT', 'Kilowatt'),
('SAT098', 'LBR', 'Pound GB,US (0,45359237 kg)'),
('SAT099', 'LBT', 'Troy pound, US 9373,242 g)'),
('SAT100', 'LNT', 'Long ton GB, US 2/ (1,0160469 t)'),
('SAT101', 'LPA', 'Litre of pure alcohol'),
('SAT102', 'LTR', 'Litre ( 1 dm3 )'),
('SAT103', 'LUM', 'Lumen'),
('SAT104', 'MAL', 'Megalitre'),
('SAT105', 'MAM', 'Megametre'),
('SAT106', 'MAW', 'Megawatt'),
('SAT107', 'MGM', 'Milligram'),
('SAT108', 'MID', 'Thousand'),
('SAT109', 'MIK', 'Square mile'),
('SAT110', 'MIN', 'Minute'),
('SAT111', 'MIO', 'Million'),
('SAT112', 'MIU', 'Million international units'),
('SAT113', 'MLD', 'Milliard, Billion US'),
('SAT114', 'MLT', 'Millilitre'),
('SAT115', 'MMK', 'Square millimetre'),
('SAT116', 'MMQ', 'Cubic millimetre'),
('SAT117', 'MMT', 'Millimetre'),
('SAT118', 'MON', 'Month'),
('SAT119', 'MQH', 'cubic metre per hour'),
('SAT120', 'MSK', 'Metre per second squared'),
('SAT121', 'MTK', 'Square metre'),
('SAT122', 'MTQ', 'Cubic metre'),
('SAT123', 'MTR', 'Metre'),
('SAT124', 'MVA', 'Megavolt -  ampere (1000 KVA)'),
('SAT125', 'MWH', 'Megawatt-hour (1000 KW/h)'),
('SAT126', 'NAR', 'Number of articles'),
('SAT127', 'NBB', 'Number bobbins'),
('SAT128', 'NEW', 'Newton'),
('SAT129', 'NIU', 'Number of international units'),
('SAT130', 'NMB', 'Number'),
('SAT131', 'NMI', 'Nautical mile (1852 m)'),
('SAT132', 'NMP', 'Number of packs'),
('SAT133', 'NPL', 'Number of parcels'),
('SAT134', 'NPR', 'number of pairs'),
('SAT135', 'NPT', 'Number of parts'),
('SAT136', 'NRL', 'Number of rolls'),
('SAT137', 'NTT', 'Net (regirter) ton'),
('SAT138', 'OHM', 'Ohm'),
('SAT139', 'ONZ', 'Ounce GB,US (28,349523 g)'),
('SAT140', 'OZA', 'Fluid ounce (29,5735 cm3)'),
('SAT141', 'OZI', 'Fluid ounce (29,5735 cm3)'),
('SAT142', 'PAL', 'Pascal'),
('SAT143', 'PCE', 'Piece'),
('SAT144', 'PGL', 'Proof gallon'),
('SAT145', 'PTD', 'Dry pint (0.55061 dm3)'),
('SAT146', 'PTI', 'Pint (0,568262 dm3)'),
('SAT147', 'PTL', 'Liquid Pint (0,473176 dm3)'),
('SAT148', 'QAN', 'Quarter (of a year)'),
('SAT149', 'QTD', 'Dry quart (1,101221 dm3)'),
('SAT150', 'QTI', 'Quart (1,136523 dm3)'),
('SAT151', 'QTL', 'Liquid quart (0,946353 dm3)'),
('SAT152', 'QTR', 'Quarter GB (12,700586 kg)'),
('SAT153', 'RPM', 'Revolution per minute'),
('SAT154', 'RPS', 'Revolution per second'),
('SAT155', 'SAN', 'Half year (six Months)'),
('SAT156', 'SCO', 'Score'),
('SAT157', 'SCR', 'Scruple GP,US (1,295982 g)'),
('SAT158', 'SEC', 'Second'),
('SAT159', 'SET', 'Set'),
('SAT160', 'SHT', 'Shipping ton'),
('SAT161', 'SIE', 'Siemens'),
('SAT162', 'SMI', 'Statute mile (1609.344 m)'),
('SAT163', 'SST', 'Short standard  (7200 matches )'),
('SAT164', 'STI', 'Stone GB (6,350293 kg)'),
('SAT165', 'STN', 'Short ton GB, US 2/ (0,90718474 t)'),
('SAT166', 'TAH', 'Thousand ampere-hour'),
('SAT167', 'TNE', 'Tonne, Metric ton (1000 kg)'),
('SAT168', 'TPR', 'Ten pairs'),
('SAT169', 'TQD', 'Thousand cubic metres per day'),
('SAT170', 'TRL', 'Trillion Eur'),
('SAT171', 'TSD', 'Tonne of subtance 90 per cent dry'),
('SAT172', 'TSH', 'Ton of steam per hour'),
('SAT173', 'VLT', 'Volt'),
('SAT174', 'WCD', 'Cord (3,63 m3)'),
('SAT175', 'WEB', 'Weber'),
('SAT176', 'WEE', 'Week'),
('SAT177', 'WHR', 'Watt-hour'),
('SAT178', 'WSD', 'Standard'),
('SAT179', 'WTT', 'Watt'),
('SAT180', 'YDK', 'Square yard'),
('SAT181', 'YDQ', 'Cubic yard'),
('SAT182', 'YRD', 'Yard (0.9144 m)');

-- --------------------------------------------------------

--
-- Table structure for table `scrap`
--

CREATE TABLE `scrap` (
  `nomor` char(10) collate latin1_general_ci NOT NULL,
  `no_lap` char(100) collate latin1_general_ci NOT NULL,
  `tgl_lap` date NOT NULL,
  `name_ppc` char(200) collate latin1_general_ci NOT NULL,
  `catatan` varchar(200) collate latin1_general_ci NOT NULL,
  `userid` char(8) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `scrap`
--

INSERT INTO `scrap` (`nomor`, `no_lap`, `tgl_lap`, `name_ppc`, `catatan`, `userid`) VALUES
('0000000001', 'LS-2013000001/LAP-SCRAP', '2013-05-01', 'Martin', 'Hasil Cetakan', 'goestoe'),
('0000000002', 'LS-2013000002/LAP-SCRAP', '2013-05-01', 'Martin', 'dicetak', 'goestoe'),
('0000000003', 'LS-2013000003/LAP-SCRAP', '2013-05-18', 'Berto', 'Produksi Desember 2013', 'goestoe');

-- --------------------------------------------------------

--
-- Table structure for table `scrap_detail`
--

CREATE TABLE `scrap_detail` (
  `nomor` char(10) collate latin1_general_ci NOT NULL,
  `id` int(10) NOT NULL auto_increment,
  `no_lap` varchar(100) collate latin1_general_ci NOT NULL,
  `tgl_lap` date NOT NULL,
  `kode` char(100) collate latin1_general_ci NOT NULL,
  `jumlah` varchar(20) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `scrap_detail`
--

INSERT INTO `scrap_detail` (`nomor`, `id`, `no_lap`, `tgl_lap`, `kode`, `jumlah`) VALUES
('0000000001', 1, 'LS-2013000001/LAP-SCRAP', '2013-05-01', 'B00004', '100'),
('0000000002', 2, 'LS-2013000002/LAP-SCRAP', '2013-05-01', 'B00004', '194'),
('0000000003', 3, 'LS-2013000003/LAP-SCRAP', '2013-05-18', 'SCRAP01', '100');

-- --------------------------------------------------------

--
-- Table structure for table `stock_pemasukan`
--

CREATE TABLE `stock_pemasukan` (
  `id` int(8) NOT NULL auto_increment,
  `kode` varchar(100) collate latin1_general_ci NOT NULL,
  `jumlah` varchar(100) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1482 ;

--
-- Dumping data for table `stock_pemasukan`
--

INSERT INTO `stock_pemasukan` (`id`, `kode`, `jumlah`) VALUES
(1, 'All ABS', '11435.5'),
(2, 'All HIPS', '3583.0'),
(3, 'All PMMA', '1260.0'),
(4, 'All INK', '163.0'),
(5, 'All THINNER', '520.0'),
(6, 'All PAINT', '469.0'),
(7, 'All FOIL', '31.4'),
(8, 'DOUBLE TAPE 1', '20.0'),
(9, 'CUSHION 12', '26.0'),
(10, 'CUSHION 13', '0.0'),
(11, 'PET', '21354.95'),
(12, 'DOUBLE TAPE 2', '31.0'),
(13, 'CUSHION 1', '-179'),
(14, 'CUSHION 2', '13.0'),
(15, 'CUSHION 3', '-235'),
(16, 'CUSHION 4', '4094.0'),
(17, 'PAPER', '2.5'),
(18, 'CUSHION 5', '1376.5'),
(19, 'CUSHION 6', '6.5'),
(20, 'DOUBLE TAPE 3', '1585.1'),
(21, 'CUSHION 7', '12000.0'),
(22, 'CUSHION 8', '455.75'),
(23, 'CUSHION 9', '6.25'),
(24, 'CUSHION 10', '0.0'),
(25, 'HEXANE', '134.0'),
(26, 'PROTECTION', '229.35'),
(27, 'ALUMINIUM', '741.0'),
(28, 'CUSHION 11', '4.15'),
(29, 'DOUBLE TAPE 4', '6.0'),
(30, 'PET', '1.0'),
(31, 'DOUBLE TAPE 5', '0.75'),
(32, 'CUSHION 14', '37374.0'),
(33, 'DOUBLE TAPE 6', '5.0'),
(34, 'CUSHION 15', '0.0'),
(35, 'DOUBLE TAPE 7', '21.0'),
(36, 'CUSHION 16', '1.7'),
(37, 'DOUBLE TAPE 8', '1218.0'),
(38, 'CUSHION 17', '1.5'),
(39, 'MBU62446401', '2034.0'),
(40, 'MGJ63088001', '1200.0'),
(41, '5728573A01', '14300.0'),
(42, '003x12x13', '2181'),
(43, 'MHK37290703', '9520.0'),
(44, '003x4x8', '5000.0'),
(45, 'MAF62327804', '2000.0'),
(46, 'MAF61848003', '4000.0'),
(47, 'MGJ393733', '4000.0'),
(48, 'MDX62674301', '5700.0'),
(49, 'MCQ66973501', '10500.0'),
(50, 'MCQ66997402', '1700.0'),
(51, 'RGM0116-K1', '428.0'),
(52, 'RGM0116-T1', '0.0'),
(53, 'RGMX 024/025 K1', '1696.0'),
(54, 'MCQ69002201', '1800.0'),
(55, 'MCQ69002202', '5429.0'),
(56, 'MCQ67065701', '1000.0'),
(57, 'MCQ66961501', '1950.0'),
(58, 'RJC-91007-1', '0.0'),
(59, 'RMB-0484-1', '1300.0'),
(60, 'RME-0215', '635.0'),
(61, '1522R-0097K', '52000.0'),
(62, 'PH SEMS M/S', '14000.0'),
(63, 'MCQ67216501', '400.0'),
(64, 'MKC413606-11', '279.0'),
(65, 'MKC64299302', '0.0'),
(66, 'MKC62659301', '0.0'),
(67, 'GL68-00361A', '0.0'),
(68, 'MCZ62693603', '0.0'),
(69, 'MCZ62693604', '0.0'),
(70, 'RJC -1007-1', '0.0'),
(71, 'MGJ63533901', '0.0'),
(72, 'MGJ63939401', '0.0'),
(73, 'MHK64070001', '0.0'),
(74, 'EAB62688901', '0.0'),
(75, 'AK64-02554A', '0.0'),
(76, 'MHK63866101', '0.0'),
(77, 'MHK63986801', '0.0'),
(78, 'MEY62594301', '0.0'),
(79, 'GL68-00361B', '0.0'),
(80, '0.3 X 380 X 560', '234'),
(81, '002 X 11 X 15', '590'),
(82, 'MEZ61912004', '0.0'),
(83, 'MEZ61912003', '0.0'),
(84, 'MEZ61912008', '0.0'),
(85, '10 HP AC', '324'),
(86, '10 HP C', ''),
(87, 'CB005-00015', ''),
(88, 'CB005-00009', ''),
(89, 'CB005-00010', ''),
(90, '1200012520', '334'),
(91, 'AH63-03135A', ''),
(92, 'RMXN0021', ''),
(93, 'MHK62146302', ''),
(94, 'MHK62146302', ''),
(95, 'MGJ47126401', ''),
(96, 'MCQ66953102', ''),
(97, '4850RC0038W', ''),
(98, 'MBG62263102', ''),
(99, 'MHK59606701', ''),
(100, 'MCV58018401', ''),
(101, 'MFB58351801', ''),
(102, 'MHK63547701', ''),
(103, 'MHK63868002', ''),
(104, 'MCQ65164543', ''),
(105, 'MHK63801101', ''),
(106, 'MCQ62588705', ''),
(107, 'ENG2209B ( 400 mm X 20 mm )', ''),
(108, 'MCQ67039201', ''),
(109, 'MDS62491004', ''),
(110, 'MHK63868101', ''),
(111, 'MCQ65164531', ''),
(112, 'MEG58109501', ''),
(113, 'MHK63789301', ''),
(114, 'MCV62473301', ''),
(115, 'MCV40813601', ''),
(116, 'AGL73473610/MCR63992702', ''),
(117, 'MHK62249001', ''),
(118, 'MBG62443601', ''),
(119, 'AGL35611412/MCV40705101', ''),
(120, 'MHK42254701', ''),
(121, 'ENG19075003', ''),
(122, 'MCQ66978802', ''),
(123, 'MHK62246501', ''),
(124, 'AGL73352907/MCR63992703', ''),
(125, 'MHK62629301', ''),
(126, 'MHK63868001', ''),
(127, 'MCQ66906001', ''),
(128, '4850R-0037R/T', ''),
(129, 'MHK63986001', ''),
(130, 'MHK37397805', ''),
(131, 'MHK63934401', ''),
(132, 'MKC63999801', ''),
(133, 'MFB62533401', ''),
(134, 'MBG64224701', ''),
(135, 'MKC62239001', ''),
(136, 'MHK63536201', ''),
(137, 'MBG64353801', ''),
(138, 'MCQ65164548', ''),
(139, 'MHK63939201', ''),
(140, 'MHK63939001', ''),
(141, 'MDS63984901', ''),
(142, 'MDS63772402', ''),
(143, 'MHK63953401 ', ''),
(144, 'AGU74110701', ''),
(145, 'MHK63934701', ''),
(146, 'MDS63984601', ''),
(147, 'MEG62443701', ''),
(148, 'MDS63984401', ''),
(149, 'MHK63309502', ''),
(150, 'MHK62288401', ''),
(151, 'MHK62005601', ''),
(152, 'MHK61911501', ''),
(153, 'MCV40786701/AGL35075816', ''),
(154, 'ENG19075002', ''),
(155, 'MCQ67234101', ''),
(156, 'MCK40787005/AGL35075816', ''),
(157, 'MCQ32325007', ''),
(158, 'MHK63868201', ''),
(159, '5040R-0376D', ''),
(160, 'MCR61971101', ''),
(161, 'MEV61857002', ''),
(162, 'MCR61971001', ''),
(163, 'MGJ63202101', ''),
(164, 'MGJ63221901', ''),
(165, 'MGJ63221801', ''),
(166, 'MHK63846801', ''),
(167, 'AGL72914518/MBG61847002', ''),
(168, 'MHK61843101', ''),
(169, 'MCQ65164519', ''),
(170, 'MCV40786701/AGL35075819', ''),
(171, 'MCK40787005/AGL35075819', ''),
(172, 'MGJ41360501', ''),
(173, 'AGL73473604/MCR63992701', ''),
(174, 'MCQ32325022', ''),
(175, 'MHK62945201', ''),
(176, 'MHK62006802', ''),
(177, '4850R-0037W', ''),
(178, 'MHK63792201', ''),
(179, '3300R-V133B', ''),
(180, 'MHK63587901', ''),
(181, 'MDP30320007', ''),
(182, '4850R0037S/MCQ65968302', ''),
(183, 'MKC62169502/AGL73213705/06', ''),
(184, 'AGL35611437/55/57/MCK40705001', ''),
(185, 'MHK41099201/2', ''),
(186, 'MHK64005301', ''),
(187, 'MCQ62705011', ''),
(188, 'MCQ62705012', ''),
(189, 'MHK64005302', ''),
(190, 'MHK64005303', ''),
(191, 'MCQ67234103', ''),
(192, 'MHK63307908', ''),
(193, 'MFB62655501', ''),
(194, 'MHK64031601', ''),
(195, 'MHK63935403', ''),
(196, 'MGJ63533901', ''),
(197, 'AH81-07448A', ''),
(198, 'MKC62660801', ''),
(199, 'MHK63525401', ''),
(200, 'MKC61997401', ''),
(201, 'MCR62061401', ''),
(202, 'MCR62061301', ''),
(203, 'MKC47126501', ''),
(204, 'MCR62061601/501', ''),
(205, '286X214', ''),
(206, 'MKC40908501', ''),
(207, 'MKC40705801', ''),
(208, 'MKC64500901', ''),
(209, 'MKC63739401', ''),
(210, 'MKC64219101', ''),
(211, 'MKC6421501', ''),
(212, 'MKC64299201/101', ''),
(213, 'RAB32014701', ''),
(214, 'VF1A00703900', ''),
(215, 'VF1A00704600', ''),
(216, 'VF1A00703800', ''),
(217, 'VF1A006885A0', ''),
(218, 'VF1A00688400', ''),
(219, 'S83C500A89/69-5000-26', ''),
(220, 'AKB68183601', ''),
(221, 'AKB68183601', ''),
(222, 'AKB72915215', ''),
(223, 'AKB73655707', ''),
(224, 'AKB73656701', ''),
(225, 'AKB68183601', ''),
(226, 'AKB36160909', ''),
(227, 'AKB32722904', ''),
(228, 'AKB35914403', ''),
(229, 'AKB36160901/4', ''),
(230, 'AKB36160901/4', ''),
(231, 'AKB36160901/4', ''),
(232, 'AKB36160901/4', ''),
(233, 'AKB73155301', ''),
(234, 'AKB73275611', ''),
(235, 'AKB72915251', ''),
(236, 'AKB54089001', ''),
(237, 'AKB36160903', ''),
(238, 'AKB73615313', ''),
(239, 'AKB36160904', ''),
(240, 'AKB36160905', ''),
(241, 'AKB36160905', ''),
(242, 'AKB73155305', ''),
(243, 'AKB73615314', ''),
(244, 'AKB72915246', ''),
(245, 'AKB73615305', ''),
(246, 'AKB73615362', ''),
(247, 'AKB73615312', ''),
(248, 'AKB73615302', ''),
(249, 'AKB73615310', ''),
(250, 'AKB73615309', ''),
(251, 'AKB73615307', ''),
(252, 'AKB73615303', ''),
(253, 'AKB73656403', ''),
(254, 'AKB73756502', ''),
(255, 'AKB73756503', ''),
(256, 'AKB73755415', ''),
(257, 'AKB73756519', ''),
(258, 'EC-131949-BCA00B/DN31B949/SN81F734', ''),
(259, 'EK-134147-DQB00/DN34D147 EVA=1MM', ''),
(260, 'EC-137975-BCA00/DN37B975', ''),
(261, 'EC-131950-BCA00A/DN31B950/SN81F704', ''),
(262, 'EK-132001-0QA/WF-320012-200  ', ''),
(263, 'EK-131121-BKA00/DN31B121', ''),
(264, 'GL-137797-BCA00D/DN37B797/SN87C765', ''),
(265, 'GL-131590-BAA00/DN31B590', ''),
(266, 'GL-131176-CCA00B/DN 31C176 SN 81G142', ''),
(267, 'GL-164816-ACA10A/DN 64A816M01 PC SN 84E746M01', ''),
(268, 'EK-134966-CCA00/DN34C966', ''),
(269, 'EC-131921-BCA00/DN31B921', ''),
(270, 'EC-137046-BCA00A/DN37B046', ''),
(271, 'EC-137171-BCA00/DN37B171R01', ''),
(272, 'EK-131911-BQA00/DN31B911', ''),
(273, 'EK-131912-BQA00/DN31B912', ''),
(274, 'EK-131910-BQA00/DN31B910', ''),
(275, 'EK-131909-BQA00/DN31B909', ''),
(276, 'EK-134301-DQA00/DN34D301EVAT=3MM', ''),
(277, 'EC-131949-BCA00A/DN31B949/SN81F703', ''),
(278, 'EK-134965-CCA00A/DN34C965R1-84E553', ''),
(279, 'EC-134357-DCA00/DN34D357', ''),
(280, 'GL-131125-CCA00B/DN31C125 SN81G015', ''),
(281, 'GL-134814-CCA10C/DN34C814M01/SN84F103M01', ''),
(282, 'EC-137582-ACA00A/DN37A582', ''),
(283, 'GL-184185-DKA00/SN84D185', ''),
(284, 'EK-131851-BQA00/DN31B851', ''),
(285, 'GL-134815-CCA10C/DN34C815M01/SN84F102M01', ''),
(286, 'NN-137912-BCA00/DN37B912', ''),
(287, 'GL-134891-CCA10A/DN34C891M01 PC SN 84E747M01', ''),
(288, 'GN-137328-AFA00/DN37A328', ''),
(289, 'EC-131855-BCA00/DN31B855', ''),
(290, 'GL-164019-BCA00C/DN64B019R01 SN84G140', ''),
(291, 'GL-131125-CCA00A/DN31C125SN81G013', ''),
(292, 'GL-137797-BCA00F/DN37B797/SN87C764', ''),
(293, 'GL-131846-BCA00B/DN31B846/SN81F680', ''),
(294, 'GL-131845-BCA00B/DN31B845/SN81F679', ''),
(295, 'GL-131900-BCA00A/DN31B900R02 SN81F548R01', ''),
(296, 'TC-080300-0CC/DN34C479R01 PC 0.5 SN84E050M1', ''),
(297, 'GL-131057-BFB00/DN31B057R01', ''),
(298, 'EC-134410-DCA00/DN34D410R01', ''),
(299, 'EC-131950-BCA00C/DN31B950/SN81F757', ''),
(300, 'GL-137389-BCA00F/DN37B389/SN87C715', ''),
(301, 'GL-137389-BCA00G/DN37B389/SN87C713', ''),
(302, 'GL-134267-DCA00B/DN34D267R01 SN84G141', ''),
(303, 'GL-131176-CCA00A/DN 31C176 SN 81G106', ''),
(304, 'EC-131680-BCA00/DN31B680', ''),
(305, 'EK-131888-BCA00/DN31B888', ''),
(306, 'GL-131846-BCA00A/DN31B846R01 SN81F531R01', ''),
(307, 'GL-131845-BCA00A/DN31B845R01 SN81F530R01', ''),
(308, 'EC-131673-BCA00/DN31B673', ''),
(309, 'GL-134891-CCA10B/DN34C891M01 PC SN 84E767M01', ''),
(310, 'GL-131556-BCA10/DN31B556M01', ''),
(311, 'EK-131847-BEA00/DN31B847SHEETT=1.5MM', ''),
(312, 'GL-137296-BCA00/DN37B296R01', ''),
(313, 'GL-131901-BCA00A/DN31B901RO2 SN81F545R01', ''),
(314, '12701-0115', ''),
(315, '12701-0142', ''),
(316, '12701-0138', ''),
(317, '12701-0139', ''),
(318, '12701-0140', ''),
(319, '12701-0125', ''),
(320, '12701-0117', ''),
(321, '12701-0130', ''),
(322, '4766RC0209A', ''),
(323, '10 X 4.8 X 0.2T', ''),
(324, 'MHK63307002', ''),
(325, 'MHK63485101', ''),
(326, 'FAF30971901', ''),
(327, 'MHK63728301', ''),
(328, 'MHK63748901', ''),
(329, 'FAF31272201', ''),
(330, 'GL61-00036A', ''),
(331, 'ED69-00044A', ''),
(332, 'ED75-00089B', ''),
(333, 'ED72-00223A', ''),
(334, 'ED72-00235A', ''),
(335, 'ED73-00023A', ''),
(336, 'ED74-01026A', ''),
(337, 'ED74-01017A', ''),
(338, 'ED74-01016A', ''),
(339, 'ED69-00134A', ''),
(340, 'ED74-01024A', ''),
(341, 'ED69-00106A', ''),
(342, 'ED69-00090A', ''),
(343, 'ED74-01021A', ''),
(344, 'ED74-01022A', ''),
(345, 'GL63-00221A', ''),
(346, 'AH63-02402A', ''),
(347, 'GL69-00335A', ''),
(348, 'GL69-00285A', ''),
(349, 'GL69-00322A', ''),
(350, 'AK63-00136X', ''),
(351, 'GL69-00311A', ''),
(352, 'GL69-00312A', ''),
(353, 'GL72-00526A', ''),
(354, 'GL69-00226A', ''),
(355, 'GL69-00227A', ''),
(356, 'GL63-00005A', ''),
(357, 'ED72-00234A', ''),
(358, 'AH63-02409A', ''),
(359, 'AH63-01917E', ''),
(360, 'AH63-02182Y', ''),
(361, 'AH63-02408B', ''),
(362, 'BN64-02072B', ''),
(363, 'GL69-00157A', ''),
(364, 'MHK62906501', ''),
(365, 'AK63-00838K', ''),
(366, 'MCR64760203', ''),
(367, 'A10430001', ''),
(368, 'AK63-00838G', ''),
(369, 'A10430003', ''),
(370, 'A10430002', ''),
(371, 'AH63-03244A', ''),
(372, 'AH63-03245A', ''),
(373, 'AH63-03243A', ''),
(374, 'AH63-02408A', ''),
(375, 'MDS30602113', ''),
(376, 'MDS63984402', ''),
(377, 'BN64-02023D', ''),
(378, 'GL72-00341A', ''),
(379, 'GL69-00224A', ''),
(380, 'MHK63988501', ''),
(381, 'AH63-02171A', ''),
(382, 'MDS64138301', ''),
(383, 'GL69-00223A', ''),
(384, 'AH63-02831A', ''),
(385, 'GL72-00339A', ''),
(386, 'MDP62646801', ''),
(387, 'AK63-00918A', ''),
(388, 'MCQ67213602', ''),
(389, 'MDS63984702', ''),
(390, 'AH01-00015A', ''),
(391, 'MDS30602109', ''),
(392, 'AH63-02433B', ''),
(393, 'AH63-02182G', ''),
(394, 'AH67-00660A', ''),
(395, 'MDS30602108', ''),
(396, 'MDS30602115', ''),
(397, 'AH61-03320A', ''),
(398, 'GL63-00004A', ''),
(399, 'D78003766', ''),
(400, 'RTP1-000035/D78006025', ''),
(401, 'MDS63984403', ''),
(402, 'MDS64160201', ''),
(403, 'MDS63984406', ''),
(404, 'MDS63984405', ''),
(405, 'D78006028', ''),
(406, 'MDS63984404', ''),
(407, 'MDS63984409', ''),
(408, 'MDS63984703', ''),
(409, 'D7102225K / 12 X 23 X 3T', ''),
(410, 'RBR1-000049/D7102106C/ 20X4.5X3T', ''),
(411, '3846SC0003H/S74B500A16', ''),
(412, 'MGJ53270803', ''),
(413, '3846SC0003B', ''),
(414, 'S83B500B72 ', ''),
(415, 'S83C500A77', ''),
(416, 'MHK63529601/S16B522B01', ''),
(417, 'S83B500B71', ''),
(418, 'S83B500B61/MEG62700401(B)', ''),
(419, 'S83B500B60/MEG62700401(A)', ''),
(420, 'S83B500C63', ''),
(421, 'S83B500B75', ''),
(422, 'S83B500B86', ''),
(423, 'A71A568A03/ACQ85433701', ''),
(424, 'S72B568A09/MHK63465401', ''),
(425, 'S72B568A08/MHK63326101', ''),
(426, 'S72B568A14/MHK63486301', ''),
(427, 'S83B500B52/MCQ63567808', ''),
(428, 'MCQ63567806/S83B500B50', ''),
(429, 'S83B500B53/MCQ63567809', ''),
(430, 'S16A500C89/MHK62906502', ''),
(431, 'S83B500C78', ''),
(432, 'S83B500C73', ''),
(433, 'S83B500C77', ''),
(434, 'S83B500B56/MCQ65164507', ''),
(435, 'S83B500B55/MCQ65164505', ''),
(436, 'S83B500B31', ''),
(437, 'S83B500C14', ''),
(438, 'S83B500C92/MHK63993801', ''),
(439, 'MHK63733102/S72B577A06', ''),
(440, 'S83B501D12MDS63984402', ''),
(441, 'ED74-01023A', ''),
(442, 'ED74-01012A', ''),
(443, 'ED74-01020A', ''),
(444, '40 X 34', ''),
(445, 'AA64-01334B', ''),
(446, 'SMT-E6400 40X40', ''),
(447, 'SMT-G7400 34X40', ''),
(448, 'MKC62680901', ''),
(449, 'MEV62591404', ''),
(450, 'MCQ65164541', ''),
(451, 'MDS39538737', ''),
(452, 'MCK66884701', ''),
(453, '7250GD0021C', ''),
(454, 'MDS42723205', ''),
(455, 'MEG61959101', ''),
(456, '3300R-D079T', ''),
(457, '4850RL0002J', ''),
(458, '7250GD0021D', ''),
(459, 'MDS63690102', ''),
(460, 'MEG57299701', ''),
(461, 'MEG62700901', ''),
(462, 'MEG62700501', ''),
(463, 'MDS62912701', ''),
(464, 'MEG62682701', ''),
(465, 'MEY40499001', ''),
(466, 'MDS63751904', ''),
(467, 'MDS63690104', ''),
(468, 'MEG61898001', ''),
(469, 'MCK66828201', ''),
(470, 'MHK63307001', ''),
(471, '4766R-0043L', ''),
(472, 'MDS61951106', ''),
(473, '4766R-0043K', ''),
(474, 'MCQ62588702', ''),
(475, '7250CP0005D', ''),
(476, 'MCQ63084908', ''),
(477, 'MCQ62765301', ''),
(478, 'MEG40500701', ''),
(479, 'MHK61843201/7', ''),
(480, 'AGU73828006', ''),
(481, '4766R-0043Y', ''),
(482, 'MCR62752201', ''),
(483, 'AAN73232001', ''),
(484, '4986R-0049T', ''),
(485, 'MCR64646602', ''),
(486, 'MDS63690801', ''),
(487, '7250GD0021A', ''),
(488, 'MHK42178004', ''),
(489, 'MCQ32325010', ''),
(490, 'MDS61951102', ''),
(491, 'MCK66955503', ''),
(492, 'MFZ63244601', ''),
(493, 'MCQ62096432', ''),
(494, 'MCQ32777520', ''),
(495, 'MCV42310601', ''),
(496, 'MEG63000201', ''),
(497, 'MCK67199704', ''),
(498, 'MCK67199703', ''),
(499, 'MEG63000101', ''),
(500, 'MDS62512303', ''),
(501, 'MCR64812505', ''),
(502, '4986R-0004M', ''),
(503, 'MHK63006903', ''),
(504, 'MCQ65965406', ''),
(505, 'MCQ65965405', ''),
(506, 'MCQ62096412', ''),
(507, 'MCQ62096408', ''),
(508, 'MCQ66697504', ''),
(509, 'MEY62354602/1', ''),
(510, 'ADC73545701', ''),
(511, 'MCK66671601/AGG73729704', ''),
(512, 'MHK62149206', ''),
(513, 'MHK63408801', ''),
(514, 'MCQ38410403', ''),
(515, 'AAA73857604', ''),
(516, 'MEY62455201', ''),
(517, '4766R-0043Z', ''),
(518, 'MEG42992601', ''),
(519, 'MHK63408901', ''),
(520, 'MHK63385301', ''),
(521, 'MDS63751903', ''),
(522, 'MEG40359801', ''),
(523, 'MDS63690103', ''),
(524, 'MDS63690702', ''),
(525, 'MDS63690701', ''),
(526, 'MDS63690704', ''),
(527, 'MDS63690703', ''),
(528, 'MEG62520601', ''),
(529, 'MCK66037601', ''),
(530, 'MHK63445501', ''),
(531, 'AEJ73619401', ''),
(532, 'AGU73828002', ''),
(533, 'MEY61934601', ''),
(534, 'AEJ73440603', ''),
(535, 'AGL73679203', ''),
(536, 'MDS63255902', ''),
(537, '4940RMP001A', ''),
(538, 'MEG62683801', ''),
(539, 'MHK62705604', ''),
(540, 'MHK63405101', ''),
(541, 'MCQ63106602', ''),
(542, 'MEY61853201', ''),
(543, 'MDS61951109', ''),
(544, 'MCQ63084907', ''),
(545, '4766R-0043R', ''),
(546, 'MCQ60139108', ''),
(547, 'ABN73739201', ''),
(548, 'MCQ67127801', ''),
(549, 'MDS64113801', ''),
(550, '4940R-V065H', ''),
(551, 'MCQ62096433', ''),
(552, 'MCR64011301/AAX73547902', ''),
(553, 'MFZ63399001', ''),
(554, 'MCR64742802', ''),
(555, 'MCQ63084902', ''),
(556, 'MCR63988905', ''),
(557, 'MDS62512501', ''),
(558, 'MCQ32777514', ''),
(559, '4940RCV035B', ''),
(560, 'MCQ32325019', ''),
(561, 'MEY62554001', ''),
(562, 'MCR62133115', ''),
(563, 'MDS62491007', ''),
(564, 'MDS62512504', ''),
(565, 'MCV40333905', ''),
(566, 'MCQ32777502', ''),
(567, '4766R-0043H', ''),
(568, 'MCK67492601', ''),
(569, 'MCK67492701', ''),
(570, 'MEG58313201', ''),
(571, 'MCK66691201/AGG73729705', ''),
(572, 'ACQ85941001', ''),
(573, 'MEG62683901', ''),
(574, 'MEG42022001', ''),
(575, 'MHK63988601', ''),
(576, 'RAB33091803', ''),
(577, 'MHK62149205', ''),
(578, 'ACQ85941002', ''),
(579, 'MHK63991201', ''),
(580, 'MHK63006909', ''),
(581, 'AAA74287202', ''),
(582, 'MAZ62827601', ''),
(583, 'MCQ66284301', ''),
(584, 'MCQ66574001', ''),
(585, '3300R-D079D', ''),
(586, 'MFZ47272648', ''),
(587, 'MCQ32325011', ''),
(588, 'MCQ66284302', ''),
(589, 'MCQ63567810/S83B500B54', ''),
(590, 'MCQ66565604', ''),
(591, 'AAA74758101', ''),
(592, 'MHK62149209', ''),
(593, 'MAZ62827602', ''),
(594, 'AAN73852902', ''),
(595, '3508V00746W', ''),
(596, 'MCQ66565502', ''),
(597, 'MCQ66565501', ''),
(598, 'MCK66037701', ''),
(599, 'MCK66955504', ''),
(600, 'MCR64733101', ''),
(601, 'MCQ65965401', ''),
(602, 'MFZ63244701', ''),
(603, 'MCQ65164532', ''),
(604, '4986R-0030T', ''),
(605, 'MCR64646601', ''),
(606, 'MCQ62096417', ''),
(607, 'MCQ63084905', ''),
(608, 'MEY62594301', ''),
(609, '3300R-D079A', ''),
(610, '3508V00069Y', ''),
(611, '3940TKK122Y', ''),
(612, 'MCQ65965402', ''),
(613, 'AGL73138201', ''),
(614, 'MDP62606701', ''),
(615, 'MCQ62096424', ''),
(616, 'MCQ65965404', ''),
(617, 'AEJ73239401', ''),
(618, 'MDS63984408', ''),
(619, 'MDS63984407', ''),
(620, 'MDS39538708', ''),
(621, 'AEJ73199501', ''),
(622, '4850RL0002F', ''),
(623, 'MCQ62588704', ''),
(624, 'MCR62752202', ''),
(625, '3300R-D079G', ''),
(626, 'MCQ65965403', ''),
(627, 'MEG35981101', ''),
(628, 'MHK63797701', ''),
(629, 'AAA74498302', ''),
(630, 'AGU73827901', ''),
(631, 'MCQ67213601', ''),
(632, '7250CP0005A', ''),
(633, 'S72B568A10/4986R-0004A', ''),
(634, 'MDS62491001', ''),
(635, 'AAN73232003', ''),
(636, 'MHK63766501', ''),
(637, 'MCR64647101', ''),
(638, '7250CP0005S', ''),
(639, 'MHK63798801', ''),
(640, 'MFZ36693849', ''),
(641, 'MEY62213801/AAX73548002', ''),
(642, 'MCQ63084906', ''),
(643, 'MDS63255903', ''),
(644, 'MCR64406201', ''),
(645, 'MCK67157101', ''),
(646, 'MDP30320001', ''),
(647, '3300R-D079E', ''),
(648, 'MCR64646701', ''),
(649, 'MEG57299702', ''),
(650, 'MCQ62588405', ''),
(651, 'ACQ85962701', ''),
(652, 'MDS62512502', ''),
(653, 'AEJ73639702', ''),
(654, 'MHK63969101', ''),
(655, 'MCV62213401', ''),
(656, 'MHK63935401', ''),
(657, 'MCK67106501', ''),
(658, 'MCQ32325020', ''),
(659, 'MEG40501101', ''),
(660, 'ADC73886303', ''),
(661, '4850RC0038P', ''),
(662, 'MCK63766701', ''),
(663, 'MEY61841401', ''),
(664, '4766R-0043U', ''),
(665, 'MCV40333910', ''),
(666, 'AGU73828001', ''),
(667, 'MCQ63084901', ''),
(668, '3300R-D079F', ''),
(669, 'MDS38891213', ''),
(670, '4986R-0030G', ''),
(671, 'AGU73828005', ''),
(672, 'MCQ62096413', ''),
(673, 'MCK67007002', ''),
(674, 'MCR64733501', ''),
(675, '4766R-0043D', ''),
(676, 'MCV61841504', ''),
(677, 'MEG40387501', ''),
(678, 'MCQ62096404', ''),
(679, '4930R-0472A', ''),
(680, 'MCQ63084903', ''),
(681, 'MCQ65164528', ''),
(682, 'MCV40333904', ''),
(683, 'MHK37290703', ''),
(684, 'MCK67007001', ''),
(685, 'MCR64646501', ''),
(686, 'MHK62906701', ''),
(687, 'MHK62145401', ''),
(688, '4986R-0049E', ''),
(689, 'MCQ37469902', ''),
(690, 'MHK63755501', ''),
(691, 'MCQ32777518', ''),
(692, 'MCQ62096410', ''),
(693, 'MDS63751905', ''),
(694, 'MCK63766801', ''),
(695, 'MCK63314201', ''),
(696, 'MDS63914703', ''),
(697, 'MFZ47272642', ''),
(698, 'MCQ63106601', ''),
(699, 'MDS39538710', ''),
(700, '7250CP0005J', ''),
(701, 'MCQ63084909', ''),
(702, 'MCK66955501', ''),
(703, 'MDS42723211', ''),
(704, 'MCK66955502', ''),
(705, 'MCR64646901', ''),
(706, 'MDS62411302', ''),
(707, 'MHK42194508', ''),
(708, 'MEG61959102', ''),
(709, 'MDS63255901', ''),
(710, 'AGU73968101', ''),
(711, '4986R-0004B', ''),
(712, '3300R-D079P', ''),
(713, '4986R-0033H', ''),
(714, '3300R-D079H', ''),
(715, 'MCR64733801', ''),
(716, 'MCR64753701', ''),
(717, 'MCQ60139106', ''),
(718, 'MCQ67075601', ''),
(719, 'MCQ62096422', ''),
(720, '7250CP0005E', ''),
(721, 'MFZ47272655 ', ''),
(722, '3858R-X272A', ''),
(723, '5040R-0170C', ''),
(724, 'MFB62473001', ''),
(725, 'MCQ62096415', ''),
(726, 'MBG64207001', ''),
(727, 'MCQ62096428', ''),
(728, 'MHK63811002', ''),
(729, 'MCQ60139107', ''),
(730, 'MCV40333911', ''),
(731, '7250GD0021H', ''),
(732, 'MEZ64775302', ''),
(733, 'MCQ62096403', ''),
(734, 'MHK63307903', ''),
(735, 'MEG63147801', ''),
(736, 'MDS63914701', ''),
(737, 'MHK63307902', ''),
(738, 'MCQ32325025', ''),
(739, 'MEV63831501', ''),
(740, '5410TKK001D', ''),
(741, 'MCQ32325024', ''),
(742, 'MHK63307907', ''),
(743, 'MEY62194101/MEY62675101', ''),
(744, 'MCV62813601', ''),
(745, 'MCK67394701', ''),
(746, 'MCK67394801', ''),
(747, 'MHK63939601', ''),
(748, 'MEG62340301/AEJ73280101', ''),
(749, 'MCQ67203001', ''),
(750, 'MAZ62333401', ''),
(751, 'MEY61846102/MEY62194401', ''),
(752, 'MEG62598701', ''),
(753, 'MEV64350802', ''),
(754, 'MEV64293002', ''),
(755, 'MHK63445577', ''),
(756, 'MHK66574001', ''),
(757, 'MCQ67220101', ''),
(758, 'MCQ32777521', ''),
(759, 'MHK64026001', ''),
(760, 'MCQ67367201', ''),
(761, '3ETA010005A-R', ''),
(762, '3MBPCD0008A-R', ''),
(763, '3NTPJM0001B-R', ''),
(764, '3MBPCD0008B-R', ''),
(765, 'MCR64760201', ''),
(766, 'MCR62527503', ''),
(767, 'MDS30602114', ''),
(768, 'MCR64760202', ''),
(769, 'MCR63998304', ''),
(770, 'OIC-0760J', ''),
(771, 'OIC-0760H', ''),
(772, 'OIC-0718L', ''),
(773, 'OIC-0718M', ''),
(774, 'OIC-0749N', ''),
(775, 'OIC-0718F', ''),
(776, 'OIC-0649N', ''),
(777, 'OIC-0750V', ''),
(778, 'OIC-0617T', ''),
(779, 'OIC-0721G', ''),
(780, 'OIC-0750G', ''),
(781, 'OIC-0760D', ''),
(782, 'OIC-0623D', ''),
(783, 'OIC-0760B', ''),
(784, 'OIC-0724C', ''),
(785, 'OIC-0687Q', ''),
(786, 'OIC-0770Z', ''),
(787, 'OIC-0757H', ''),
(788, 'OIC-0768G', ''),
(789, 'OIC-0721D', ''),
(790, 'OIC-0757B', ''),
(791, 'OIC-0785D', ''),
(792, 'OIC-0726W', ''),
(793, 'OIC-0784G', ''),
(794, 'OIC-0718G', ''),
(795, 'OIC-0649B', ''),
(796, 'OIC-0768F', ''),
(797, 'OIC-0659L', ''),
(798, 'OIC-0750Z', ''),
(799, 'OIC-0770Y', ''),
(800, 'OIC-0726S', ''),
(801, 'OIC-0767W', ''),
(802, 'OIC-0726Q', ''),
(803, 'OIC-0767D', ''),
(804, 'OIC-0767F', ''),
(805, 'OIC-0749R', ''),
(806, 'OIC-0659U', ''),
(807, 'OIC-0681E', ''),
(808, 'OIC-0687E', ''),
(809, 'OIC-0721E', ''),
(810, 'OIC-0687V', ''),
(811, 'OIC-0681A', ''),
(812, 'OIC-0687H', ''),
(813, 'OIC-0757U', ''),
(814, 'OIC-0757E', ''),
(815, 'OIC-0757P', ''),
(816, 'OIC-0757C', ''),
(817, 'OIC-0757N', ''),
(818, 'OIC-0757T', ''),
(819, 'OIC-0750T', ''),
(820, 'OIC-0723C', ''),
(821, 'OIC-0784Y', ''),
(822, 'OIC-0785C', ''),
(823, 'OIC-0475J', ''),
(824, 'OIC-0757D', ''),
(825, 'OIC-0760C', ''),
(826, 'OIC-0757L', ''),
(827, 'OIC-0750B', ''),
(828, 'OIC-0785E', ''),
(829, 'OIC-0726K', ''),
(830, 'OIC-0749X', ''),
(831, 'OIC-0743N', ''),
(832, 'OIC-0784X', ''),
(833, 'OIC-0718N', ''),
(834, 'OIC-0649E', ''),
(835, 'OIC-0743Q', ''),
(836, 'OIC-0770X', ''),
(837, 'OIC-0743L', ''),
(838, 'OIC-0743R', ''),
(839, 'OIC-0784W', ''),
(840, 'OIC-0785B', ''),
(841, 'OIC-0726P', ''),
(842, 'OIC-0770V', ''),
(843, 'OIC-0718P', ''),
(844, 'OIC-0760A', ''),
(845, 'OIC-0770W', ''),
(846, 'OIC-0784H', ''),
(847, 'MDP62508401', ''),
(848, 'OIC-0743U', ''),
(849, '1PZZR-0011B', '1'),
(850, 'OIC-0721K', ''),
(851, 'SPL12-2221', ''),
(852, 'AKB73756504', ''),
(853, 'OIC-0768J', ''),
(854, 'OIC-0768K', ''),
(855, 'OIC-0794A', ''),
(856, 'OIC-0718R', ''),
(857, 'OIC-0795G', ''),
(858, 'OIC-0792T', ''),
(859, 'OIC-0792R', ''),
(860, 'SPL-0401', ''),
(861, 'OIC-0792V', ''),
(862, 'OIC-0687C', ''),
(863, 'AKB73275698', ''),
(864, 'RKH0053-2H', ''),
(865, 'RGUW0018-W', ''),
(866, 'RGW0251-1H', ''),
(867, 'RGV0174-1H', ''),
(868, 'RKS0043J-K2', ''),
(869, 'RGKW0011-1S', ''),
(870, 'RGKW0012-1S', ''),
(871, 'RKM0077-K4', ''),
(872, 'RYKX0100A-K2', ''),
(873, 'RGUW0019-W', ''),
(874, 'RGUW0019-S', ''),
(875, 'RMVW0021', ''),
(876, 'RGZ0032-1H', ''),
(877, 'RGWW0008-W', ''),
(878, 'RGWW0009-S', ''),
(879, 'RGWW0009-W', ''),
(880, 'RGUW0018-S', ''),
(881, 'RGUW0016-S', ''),
(882, 'RGUW0017-1W', ''),
(883, 'RMQN0011', ''),
(884, 'RGUW0017-W', ''),
(885, 'RMKN0004-1K1', ''),
(886, 'RKF0483A-K', ''),
(887, 'RMKN0007', ''),
(888, 'RMNW0006-1', ''),
(889, 'RKK310ZA-0', ''),
(890, 'RGX0005-K', ''),
(891, 'RKHX0005-K', ''),
(892, 'RGW0251-H', ''),
(893, 'RKS0043L-K1', ''),
(894, 'RGKW0011-D', ''),
(895, 'RML0375', ''),
(896, 'RKFX0056A-K3', ''),
(897, 'RKSX0027F-MK', ''),
(898, 'RGV0175-1H', ''),
(899, 'RMKN0006', ''),
(900, 'RGWW0008-S', ''),
(901, 'RYKN0077-2', ''),
(902, 'RKM0077C-K4', ''),
(903, 'RKMW0013-S', ''),
(904, 'RGX0025-K1', ''),
(905, 'RGKW0009-S', ''),
(906, 'RGKW0012-S', ''),
(907, 'RKK0012-2H2', ''),
(908, 'RYKX0100-K1', ''),
(909, 'RGKW0011-S', ''),
(910, 'RKWW0015-W', ''),
(911, 'RDD414YC', ''),
(912, 'RKH0007-K1', ''),
(913, 'RGZ0002-K1', ''),
(914, 'RGJ0020-W', ''),
(915, 'RKF0090-Q1', ''),
(916, 'RKS0043M-K1', ''),
(917, 'RKK0012-1H3', ''),
(918, 'RKF0483-1H', ''),
(919, 'RKKX0003-K1', ''),
(920, 'RGV0175-H', ''),
(921, 'RYKN0078A-4M', ''),
(922, 'RKSX0027A-2MK', ''),
(923, 'RKH0053-H1', ''),
(924, 'RGV0174-H', ''),
(925, 'RGZ0032-H', ''),
(926, 'RGX0025-H1', ''),
(927, 'RMVN0091', ''),
(928, 'RYKN0077A-3', ''),
(929, 'RKFX0056A-K4', ''),
(930, 'RKM0077D-K', ''),
(931, 'RGC0021-K1', ''),
(932, 'RDG0375-1', ''),
(933, 'RMN0001-1', ''),
(934, 'RKW0395-Q', ''),
(935, 'RGV0176-K', ''),
(936, 'RMQN0022', ''),
(937, 'RMQT0286', ''),
(938, 'RGPW0005', ''),
(939, 'RHRW0003', ''),
(940, 'RMZT-0042K', ''),
(941, 'D1509464A', ''),
(942, 'D1510121A/XC604', ''),
(943, '29961874299A/182858B001A', ''),
(944, 'D1500039A/X C601/0000009213P', ''),
(945, 'MCQ67125202', ''),
(946, '0.5 X 15 X 443/443X5 ', '678979'),
(947, '1AG2SAS5681--', ''),
(948, '1AG2SAS5672--', ''),
(949, '1AG2SAX1753--', ''),
(950, '1AG2SAS5485A-', ''),
(951, '1AG2SAS5563--', ''),
(952, '1AG2ADZ2663--', ''),
(953, '1AG2SAS5664--', ''),
(954, '1AG2ADZ2614--', ''),
(955, '1AG2ADZ2688--', ''),
(956, '1AG2SAS4640--', ''),
(957, '1AG2ADZ2541--', ''),
(958, '1AG2ADZ1654--', ''),
(959, '1AG2ADZ2653B-', ''),
(960, '1AG2SAS5545--', ''),
(961, '1AG2ADZ2527--', ''),
(962, '1AG2SAS5665--', ''),
(963, '1AG2ADZ2488--', ''),
(964, '1AG2SAX1746--', ''),
(965, '1AG2SAS5577--', ''),
(966, '1AG2SAS5654--', ''),
(967, '1AG2SAX1745--', ''),
(968, '1AG2SAS5573--', ''),
(969, '1AG2SAS5661--', ''),
(970, '1AG2SAX1650--', ''),
(971, '1AG2ADZ2501A', ''),
(972, '1AG2SAS5541--', ''),
(973, '1AG2ADZ2500--', ''),
(974, '1AG2SAS5556--', ''),
(975, '2x8', ''),
(976, '2240-00003', ''),
(977, '2240-00005', ''),
(978, 'GL81-00403A', ''),
(979, '0203-001891', ''),
(980, '15X70', ''),
(981, 'GA68-00090A', ''),
(982, 'GL73-00039A', ''),
(983, 'GB69-00173A', ''),
(984, 'GB73-00146A', ''),
(985, 'GB72-00539A', ''),
(986, 'GB72-00536A', ''),
(987, 'AH69-03226A', ''),
(988, 'GL81-00404A', ''),
(989, 'AH63-01947A', ''),
(990, 'GL61-00032A', ''),
(991, 'GB72-00537A', ''),
(992, 'GB73-00109A', ''),
(993, 'AH63-02184A', ''),
(994, 'GA68-00089A', ''),
(995, 'GA68-00088A', ''),
(996, 'AH63-02774B', ''),
(997, 'MF63-00100A', ''),
(998, 'GA68-00168C', ''),
(999, 'GA68-00086A', ''),
(1000, 'AH63-02774A', ''),
(1001, 'GA68-00166C', ''),
(1002, 'GL02-00009A', ''),
(1003, 'GA68-00418B', ''),
(1004, 'GA68-00085A', ''),
(1005, 'AH63-02773A', ''),
(1006, 'AH63-02776A', ''),
(1007, 'GL02-00016A', ''),
(1008, 'GL63-00210A', ''),
(1009, 'GL68-00352A', ''),
(1010, 'GB73-00112A', ''),
(1011, 'GL69-00179A', ''),
(1012, 'GA68-00427A', ''),
(1013, 'AH63-02751A', ''),
(1014, 'GA72-00503A', ''),
(1015, 'AH63-01537G', ''),
(1016, 'GL63-00085A', ''),
(1017, 'GB69-00127A', ''),
(1018, 'AH63-01537D', ''),
(1019, 'GB73-00123A', ''),
(1020, 'GL73-00032A', ''),
(1021, 'AH63-01537E', ''),
(1022, 'GL72-00429A', ''),
(1023, 'GL62-00023A', ''),
(1024, 'GL63-00013A', ''),
(1025, 'GL73-00037A', ''),
(1026, 'AH63-02257C', ''),
(1027, 'AK69-01028A', ''),
(1028, 'AK63-00864A', ''),
(1029, 'AH63-03376A', ''),
(1030, 'AK63-00981A', ''),
(1031, 'AK63-00979A', ''),
(1032, 'AK63-00983A', ''),
(1033, 'AK63-00980A', ''),
(1034, 'GA72-00522A/GC72-001187A', ''),
(1035, 'AK63-00997A', ''),
(1036, 'GB73-00104A', ''),
(1037, 'MCR62200810', ''),
(1038, 'MCR62200805', ''),
(1039, 'MBG64103104/1', ''),
(1040, 'APG47100-838A', ''),
(1041, '34319316', ''),
(1042, 'GL72-00541A', ''),
(1043, 'AK63-00805A', ''),
(1044, 'GL63-00199A', ''),
(1045, 'GL72-00483A', ''),
(1046, 'GL63-00183A', ''),
(1047, 'GL69-00329A', ''),
(1048, 'GL69-00328A', ''),
(1049, 'AK63-00838H', ''),
(1050, 'AK63-00838E', ''),
(1051, 'GL63-00109A', ''),
(1052, 'AK63-00838L', ''),
(1053, 'GL63-00153A', ''),
(1054, 'GL63-00184A', ''),
(1055, 'GL73-00027A', ''),
(1056, 'MF62-00031A', ''),
(1057, 'GL63-00087A', ''),
(1058, 'AH63-02605B', ''),
(1059, 'AH63-02605A', ''),
(1060, 'GL63-00086A', ''),
(1061, 'GL63-00120A', ''),
(1062, 'GL69-00409A', ''),
(1063, 'GL63-00172A', ''),
(1064, 'GL63-00125A', ''),
(1065, 'AH63-02894A', ''),
(1066, 'GL63-00084A', ''),
(1067, 'GL63-00083A', ''),
(1068, 'GL63-00035A', ''),
(1069, 'GL69-00418A', ''),
(1070, 'GL69-00480A', ''),
(1071, 'GL69-00277A', ''),
(1072, 'AK73-00083A', ''),
(1073, 'AK63-00982A', ''),
(1074, 'AH63-02605J', ''),
(1075, 'AK63-00994A', ''),
(1076, 'AK63-00948A', ''),
(1077, 'AH61-00015B', ''),
(1078, 'AH63-02605L', ''),
(1079, 'AK63-01008A', ''),
(1080, 'AH63-02893A', ''),
(1081, 'GL63-00227A', ''),
(1082, 'MEG62520701', ''),
(1083, '4766R-0043P', ''),
(1084, 'MCQ40908801', ''),
(1085, 'MCQ65164524', ''),
(1086, '10 MMX50 M', ''),
(1087, 'MHK63949601', ''),
(1088, 'MKC42309702', ''),
(1089, 'MKC40828901', ''),
(1090, 'MCQ67127804', ''),
(1091, 'MCQ65164525', ''),
(1092, 'MKC40387601', ''),
(1093, 'MCK62844401', ''),
(1094, 'MHK63866101', ''),
(1095, 'MCQ67035701', ''),
(1096, 'MEG62999101', ''),
(1097, 'MGJ63387403', ''),
(1098, 'MGJ63387404', ''),
(1099, 'MGJ63387401', ''),
(1100, 'MGJ63387402', ''),
(1101, 'MHK63935601', ''),
(1102, 'MHK63938201', ''),
(1103, 'MGJ59342101', ''),
(1104, 'MHK63006906', ''),
(1105, 'MHK63765303', ''),
(1106, 'MHK63765302', ''),
(1107, 'MCQ67197801', ''),
(1108, 'MHK63948601', ''),
(1109, 'MHK63727903', ''),
(1110, 'MHK63947801', ''),
(1111, 'MHK63307705', ''),
(1112, 'MHK63727904', ''),
(1113, 'MHK63954701', ''),
(1114, 'MCQ67035703', ''),
(1115, 'MBG64530501', ''),
(1116, 'MCQ65164527', ''),
(1117, 'MCQ67005601', ''),
(1118, 'MCK66037501', ''),
(1119, 'MCQ67035702', ''),
(1120, 'MCQ65164526', ''),
(1121, 'MHK61918601', ''),
(1122, 'MCQ67127802', ''),
(1123, 'MBG64569501', ''),
(1124, 'MGJ53270801', ''),
(1125, 'MHK63745801', ''),
(1126, 'MCQ65164516', ''),
(1127, 'MCQ63107001', ''),
(1128, 'MCQ65164502', ''),
(1129, 'MCQ65164518', ''),
(1130, 'MHK63765301', ''),
(1131, 'MCQ65164513', ''),
(1132, 'MHK63685501', ''),
(1133, 'MHK63705301', ''),
(1134, 'MGJ62325601', ''),
(1135, 'MGJ63523402', ''),
(1136, 'MGJ63573401', ''),
(1137, 'MEZ64851001', ''),
(1138, 'MEZ64851101', ''),
(1139, 'MHK64025501', ''),
(1140, 'MCK62299502/AGL72944339', ''),
(1141, 'MDS62491009', ''),
(1142, 'MHK63566504', ''),
(1143, 'MCQ67367001', ''),
(1144, 'MCQ67238301', ''),
(1145, 'MCQ67220102', ''),
(1146, 'MHK64086901', ''),
(1147, 'MCQ62705013', ''),
(1148, 'MDS62491010', ''),
(1149, 'MKC66037401', ''),
(1150, 'MCK66691301', ''),
(1151, 'MHK63754301', ''),
(1152, '47.7 X 606.5', ''),
(1153, '531.5X47.7', ''),
(1154, 'MKC57639201-R', ''),
(1155, 'MKC57639201-L', ''),
(1156, '637 X 47.7', ''),
(1157, 'MHK63791902', ''),
(1158, 'MCK62680801', ''),
(1159, 'MCR62220612', ''),
(1160, 'GL72-00499A', ''),
(1161, 'MKC57657801', ''),
(1162, 'MKC40787601', ''),
(1163, 'GL73-00049A', ''),
(1164, 'AK63-00611A', ''),
(1165, 'AH63-02257A', ''),
(1166, 'AK63-00772A', ''),
(1167, 'GL72-00507A', ''),
(1168, 'AK63-00927A', ''),
(1169, 'AK63-00926A', ''),
(1170, 'AH63-01537C', ''),
(1171, 'GL69-00558A', ''),
(1172, '74.8 X 38.8', ''),
(1173, 'GA68-11181A', ''),
(1174, 'GA72-00011A', ''),
(1175, 'GA72-10561A', ''),
(1176, 'GA68-00168D', ''),
(1177, 'GA68-00103A', ''),
(1178, 'GA68-00167B', ''),
(1179, 'GA69-00037A', ''),
(1180, 'GA68-00166A', ''),
(1181, 'GB72-00538A', ''),
(1182, 'GB73-00145A', ''),
(1183, 'GA68-00104A', ''),
(1184, 'GA68-00166D', ''),
(1185, 'GA68-00166E', ''),
(1186, 'GB73-00135A', ''),
(1187, 'GA68-11671B', ''),
(1188, 'GA68-00168E', ''),
(1189, 'GA72-00207B', ''),
(1190, 'GA69-00017A', ''),
(1191, 'GA68-11671A', ''),
(1192, 'GA72-00207A', ''),
(1193, 'GA72-00083A', ''),
(1194, 'GA68-00168A', ''),
(1195, 'GA72-00075A', ''),
(1196, 'GA68-00191A', ''),
(1197, 'GA68-00191C', ''),
(1198, 'GA72-00248A', ''),
(1199, 'GA68-00087A', ''),
(1200, 'GA68-00085B', ''),
(1201, 'GL63-00041A', ''),
(1202, 'GA68-00190C', ''),
(1203, 'GA69-30559A', ''),
(1204, 'GB63-00013A', ''),
(1205, 'GA68-00190A', ''),
(1206, 'GA68-00167A', ''),
(1207, 'GA73-00098A', ''),
(1208, 'GA72-00249A', ''),
(1209, 'GC72-01198A', ''),
(1210, 'GB73-00088A', ''),
(1211, 'DIAMETER 48.8', ''),
(1212, 'GB73-00113A', ''),
(1213, 'GB72-00364A', ''),
(1214, 'GA73-00012A', ''),
(1215, 'GA68-00087B', ''),
(1216, 'DIAMETER 32.8', ''),
(1217, 'GA72-10640A', ''),
(1218, 'GA72-00526A', ''),
(1219, 'GA72-00074A', ''),
(1220, 'GL69-00131A', ''),
(1221, 'GL72-00552A', ''),
(1222, 'GB73-00108A', ''),
(1223, 'GB69-00120A', ''),
(1224, 'GB68-00163A', ''),
(1225, 'GA73-00100A', ''),
(1226, 'GL69-00365A', ''),
(1227, 'GB73-00114A', ''),
(1228, 'GA73-00099A', ''),
(1229, 'GB73-00120A', ''),
(1230, 'GB73-00111A', ''),
(1231, 'GB73-00119A', ''),
(1232, '67.90X38.52', ''),
(1233, 'GB73-00121A', ''),
(1234, 'GB73-00107A', ''),
(1235, 'GB68-00163A/GA68-00163A', ''),
(1236, '40X55', ''),
(1237, '6x10', ''),
(1238, '73.9X43.4', ''),
(1239, 'AK64-01847D', ''),
(1240, 'GL69-00391A', ''),
(1241, 'GL69-00391B', ''),
(1242, 'AK63-00805C', ''),
(1243, 'AK63-00838F', ''),
(1244, 'AA64-04662A', ''),
(1245, 'AA64-04648A', ''),
(1246, 'AK63-00805E', ''),
(1247, 'GL69-00325A', ''),
(1248, 'GL69-00320A', ''),
(1249, 'AK63-00696B', ''),
(1250, 'AK63-00696E', ''),
(1251, 'AK63-00838D', ''),
(1252, 'AK63-00838M', ''),
(1253, 'BN64-02022C', ''),
(1254, 'AH63-02707A', ''),
(1255, 'BN64-01951A', ''),
(1256, 'BN64-01950A', ''),
(1257, 'AH63-02718A', ''),
(1258, 'AK63-00838P', ''),
(1259, 'BN63-07556T', ''),
(1260, 'BN63-07556W', ''),
(1261, 'GL72-00335A', ''),
(1262, 'GL68-00318A', ''),
(1263, 'GL72-00336A', ''),
(1264, 'GL72-00334A', ''),
(1265, 'GL72-00332A', ''),
(1266, 'GL63-00042A', ''),
(1267, 'GL64-00057A', ''),
(1268, 'BN63-10851B', ''),
(1269, 'BN63-07556X', ''),
(1270, 'BN63-10851A', ''),
(1271, 'AH61-00015A', ''),
(1272, 'MHK63727902', ''),
(1273, 'MCQ65164523', ''),
(1274, 'MCQ65164522', ''),
(1275, '4766R-0015A', ''),
(1276, 'MHK63732101', ''),
(1277, 'MCQ65164521', ''),
(1278, 'MHK63389801', ''),
(1279, '4766R-0015B', ''),
(1280, 'MHK63727901', ''),
(1281, 'MCQ65164529', ''),
(1282, 'MHK62147604', ''),
(1283, 'MHK61989002', ''),
(1284, 'MHK62147603', ''),
(1285, 'MCQ32325009', ''),
(1286, 'MHK63812301', ''),
(1287, 'MHK63986801', ''),
(1288, 'MHK63850704', ''),
(1289, 'MDS39538750', ''),
(1290, 'MHK63812302', ''),
(1291, 'MHK63945901', ''),
(1292, 'MCQ62096427', ''),
(1293, 'MDS39538751', ''),
(1294, 'MCQ32325008', ''),
(1295, 'MDS39538746', ''),
(1296, '82.35 x 47', ''),
(1297, '47 x 35', ''),
(1298, 'GL62-00036A', ''),
(1299, 'VF1A00711400', ''),
(1300, 'VF1A00683500', ''),
(1301, 'VF1A00694200', ''),
(1302, 'VF1A00682800', ''),
(1303, 'VF1A00685700', ''),
(1304, 'VF1A006854A0', ''),
(1305, 'VF1A00682600', ''),
(1306, 'VF1A00693100', ''),
(1307, 'VF1A00704700', ''),
(1308, 'VF1A00682100', ''),
(1309, 'VF1A00685800', ''),
(1310, 'V66A00676300', ''),
(1311, 'VF1A00685100', ''),
(1312, 'VF1A00672600', ''),
(1313, 'VF2A00291400', ''),
(1314, 'VF1A00710400', ''),
(1315, 'VF1A006822A0', ''),
(1316, 'VF1A007037A0', ''),
(1317, 'MHK63849601', ''),
(1318, 'MHK63800101', ''),
(1319, 'MDS39538709', ''),
(1320, 'MHK63725301', ''),
(1321, 'MDS39538713', ''),
(1322, '1PZZR-0011', ''),
(1323, '4986R-0030Q', ''),
(1324, 'MHK63725402', ''),
(1325, 'MHK62006926', ''),
(1326, 'MCK63314101', ''),
(1327, '5040H-1023W', ''),
(1328, 'MHK62245801', ''),
(1329, 'MDS39538730', ''),
(1330, 'MEZ62781025', ''),
(1331, 'MGC62903401', ''),
(1332, 'MEG58371702', ''),
(1333, 'MCQ61847304', ''),
(1334, 'MCQ32325021', ''),
(1335, 'MHK63405201', ''),
(1336, 'MHK62006915', ''),
(1337, 'MDP51169303', ''),
(1338, 'MEG63063502', ''),
(1339, 'MEG63063503', ''),
(1340, 'MEG63164001', ''),
(1341, 'MDP62507201', ''),
(1342, '4986R-0049L', ''),
(1343, 'MHK63934601', ''),
(1344, 'MHK63995001', ''),
(1345, 'MEG63301301', ''),
(1346, '4986R-0049Z', ''),
(1347, 'MEZ62781043', ''),
(1348, 'MHK63934501', ''),
(1349, 'MCQ67234102', ''),
(1350, 'MEG63199115', ''),
(1351, 'MDQ63420201', ''),
(1352, 'MEG63063514', ''),
(1353, '4986R-0004P', ''),
(1354, 'MDS39538719', ''),
(1355, 'MHK63385401', ''),
(1356, 'MCQ67231501', ''),
(1357, 'MHK62006924', ''),
(1358, 'MCQ65164542', ''),
(1359, 'MGJ63185701', ''),
(1360, 'MHK63292701', ''),
(1361, 'MHK63798901', ''),
(1362, 'MEZ63868401', ''),
(1363, 'MCQ66665901', ''),
(1364, 'MHK62249104', ''),
(1365, 'AGU74048801', ''),
(1366, 'MEZ62781024', ''),
(1367, 'AAX73811402', ''),
(1368, 'MEG63298902', ''),
(1369, 'MCQ62096429', ''),
(1370, 'MCR64779101', ''),
(1371, 'MCQ63084912', ''),
(1372, 'MEG63199201', ''),
(1373, 'MHK63529502', ''),
(1374, 'AAX73811902', ''),
(1375, 'MCQ65164535', ''),
(1376, 'MEG62519101', ''),
(1377, 'MDS39538711', ''),
(1378, 'MEG40173101', ''),
(1379, 'MHK63725201', ''),
(1380, 'MHK63950901', ''),
(1381, 'MCQ63567814', ''),
(1382, 'MDS39538715', ''),
(1383, 'ACQ86022101', ''),
(1384, 'MEG62538902', ''),
(1385, 'MEG62720001', ''),
(1386, 'MHK63725401', ''),
(1387, 'MEG63063501', ''),
(1388, 'MCK61994901', ''),
(1389, 'MCQ66708101', ''),
(1390, 'MEZ64714801', ''),
(1391, 'MHK63725501', ''),
(1392, 'MEG63199101', ''),
(1393, 'MCQ32777519', ''),
(1394, 'MHK62006921', ''),
(1395, 'MCQ67125201', ''),
(1396, 'MEG57194001', ''),
(1397, 'MHK62006917', ''),
(1398, 'MEG61870401', ''),
(1399, 'MDP51169304', ''),
(1400, '4986R-0033K', ''),
(1401, 'MCQ65164534', ''),
(1402, 'MEG61846901', ''),
(1403, 'MEG62079401', ''),
(1404, 'MCQ60139105', ''),
(1405, 'MDS39538742', ''),
(1406, 'MCQ32325023', ''),
(1407, 'MEG58371703', ''),
(1408, 'MCK66955601', ''),
(1409, 'MDS39538748', ''),
(1410, 'MDS39538749', ''),
(1411, 'MDS61951115', ''),
(1412, '5040H-1023U', ''),
(1413, 'MCQ62096419', ''),
(1414, '5040R-0069Q', ''),
(1415, 'MCQ32325001', ''),
(1416, '5040R-0069X/S83C500A73', ''),
(1417, '4986R-0004F', ''),
(1418, 'MHK62245805', ''),
(1419, 'MHK63992702', ''),
(1420, 'MHK63999601', ''),
(1421, 'MCQ62096430', ''),
(1422, 'GL73-00054A', ''),
(1423, 'AA63-01413T', ''),
(1424, 'MF62-00042A', ''),
(1425, 'GL73-00053A', ''),
(1426, 'GL63-00071A', ''),
(1427, 'AA63-01387A', ''),
(1428, 'AH73-00011B', ''),
(1429, 'BN63-03845A', ''),
(1430, 'GL73-00020A', ''),
(1431, 'MCR64812504', ''),
(1432, 'MCR64812502', ''),
(1433, 'MCR64812503', ''),
(1434, 'BADGE HEANDLE', ''),
(1435, 'MDP3032001', ''),
(1436, 'AGL73552511', ''),
(1437, 'MDP61842601', ''),
(1438, 'MCQ65164533', ''),
(1439, 'MCQ62592007', ''),
(1440, 'MCV40942101 ', ''),
(1441, 'MDT61842701', ''),
(1442, 'MDP61842501', ''),
(1443, 'MCR62061701-USB', ''),
(1444, 'TC-110220-0CB/DN34C483R02', ''),
(1445, 'GL-164817-ACA10A/DN64A817M01', ''),
(1446, 'GL-164019-BCA00B/DN64B019R01 SN64F699M01', ''),
(1447, 'GL-134267-DCA00A/DN34D267R01 SN8F700', ''),
(1448, 'EC-131661-BCA00/DN31B661', ''),
(1449, '47.7 X 609', ''),
(1450, 'D78006021', ''),
(1451, 'D78001185', ''),
(1452, 'MGJ57353601', ''),
(1453, 'S72B577A00/MHK6373101', ''),
(1454, '44X44', ''),
(1455, 'AEZ73533801', ''),
(1456, 'ADC73886203', ''),
(1457, 'MHK37250703', ''),
(1458, '3MBPCD0002A-R', ''),
(1459, 'OIC-0704W', ''),
(1460, 'OIC-0659P', ''),
(1461, 'OIC-0784A', ''),
(1462, 'RGKW0012-D', ''),
(1463, 'MCR544062', ''),
(1464, 'DF509040E', ''),
(1465, 'GA68-00170A', ''),
(1466, 'GL62-00008A', ''),
(1467, '71X13', ''),
(1468, '73.9 X 43.4', ''),
(1469, 'AK63-00802C', ''),
(1470, 'BN63-09515A', ''),
(1471, 'MC001', ''),
(1472, 'MC002', ''),
(1473, '1PZZR-0011C', ''),
(1474, 'SCRAP01', ''),
(1475, 'SCRAP02', ''),
(1476, 'SCRAP03', ''),
(1477, 'SCRAP04', ''),
(1478, 'SCRAP05', ''),
(1479, '45678', '1000'),
(1480, '7891234', '2000'),
(1481, '99999', '1690');

-- --------------------------------------------------------

--
-- Table structure for table `stock_pengeluaran`
--

CREATE TABLE `stock_pengeluaran` (
  `id` int(8) NOT NULL auto_increment,
  `kode` varchar(100) collate latin1_general_ci NOT NULL,
  `jumlah` varchar(20) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `stock_pengeluaran`
--

INSERT INTO `stock_pengeluaran` (`id`, `kode`, `jumlah`) VALUES
(1, 'B00003', '0'),
(2, 'B00006', '1'),
(3, 'B00005', '1'),
(4, 'B00007', '1'),
(5, 'B00001', '1'),
(6, '1200012520', '1067'),
(7, '99999', '10'),
(8, 'CUSHION 1', '200'),
(9, 'CUSHION 3', '300');

-- --------------------------------------------------------

--
-- Table structure for table `stock_produksi`
--

CREATE TABLE `stock_produksi` (
  `id` int(8) NOT NULL auto_increment,
  `kode` varchar(100) collate latin1_general_ci NOT NULL,
  `jumlah` varchar(20) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=29 ;

--
-- Dumping data for table `stock_produksi`
--

INSERT INTO `stock_produksi` (`id`, `kode`, `jumlah`) VALUES
(1, 'B00004', '3000.00'),
(2, 'B00002', '2000'),
(4, 'B00005', '3300.00'),
(5, 'B00006', '3000.00'),
(6, 'B00007', '3000.00'),
(7, 'B00008', '1.00'),
(8, 'B00001', '5000'),
(10, 'B00003', '3000'),
(11, 'B00004', '3000.00'),
(12, 'B00005', '3000.00'),
(13, 'B00006', '3000.00'),
(14, 'B00007', '3000.00'),
(15, 'B00009', '3001'),
(16, 'B00004', '3.00'),
(20, 'B00004', '403.00'),
(19, 'B00004', '400.00'),
(21, 'B00004', '194'),
(22, 'CB005-00015', '200'),
(23, 'CB005-00010', '20'),
(24, 'All ABS', '480'),
(25, 'SCRAP01', '100'),
(26, '45678', '100'),
(27, '7891234', '1000'),
(28, '99999', '300');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bc40`
--

CREATE TABLE `tbl_bc40` (
  `nomor` char(10) collate latin1_general_ci NOT NULL,
  `nomor_pengajuan` varchar(100) collate latin1_general_ci NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `kantor_pabean` varchar(255) collate latin1_general_ci NOT NULL,
  `jenis_tpb` varchar(255) collate latin1_general_ci NOT NULL,
  `tujuan_pengiriman` varchar(255) collate latin1_general_ci NOT NULL,
  `nomor_pendaftaran` varchar(100) collate latin1_general_ci NOT NULL,
  `tgl_pendaftaran` date NOT NULL,
  `pemasok` varchar(255) collate latin1_general_ci NOT NULL,
  `no_invoice` varchar(255) collate latin1_general_ci NOT NULL,
  `tgl_invoice` date NOT NULL,
  `no_kontrak` varchar(255) collate latin1_general_ci NOT NULL,
  `tgl_kontrak` varchar(100) collate latin1_general_ci NOT NULL,
  `no_skep` varchar(255) collate latin1_general_ci NOT NULL,
  `tgl_skep` date NOT NULL,
  `jenis_doklain` varchar(255) collate latin1_general_ci NOT NULL,
  `doklain` varchar(255) collate latin1_general_ci NOT NULL,
  `tgl_doklain` date NOT NULL,
  `jenis_pengangkut` varchar(255) collate latin1_general_ci NOT NULL,
  `nomor_polisi` varchar(255) collate latin1_general_ci NOT NULL,
  `harga_penyerahan` varchar(100) collate latin1_general_ci NOT NULL,
  `jenis_kemasan` varchar(255) collate latin1_general_ci NOT NULL,
  `merek_kemasan` varchar(255) collate latin1_general_ci NOT NULL,
  `jumlah_kemasan` varchar(255) collate latin1_general_ci NOT NULL,
  `volume` int(10) NOT NULL,
  `brutto` int(10) NOT NULL,
  `netto` int(10) NOT NULL,
  `nip_petugas` varchar(255) collate latin1_general_ci NOT NULL,
  `nama_petugas` varchar(255) collate latin1_general_ci NOT NULL,
  `userid` varchar(8) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`nomor_pengajuan`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tbl_bc40`
--

INSERT INTO `tbl_bc40` (`nomor`, `nomor_pengajuan`, `tgl_pengajuan`, `kantor_pabean`, `jenis_tpb`, `tujuan_pengiriman`, `nomor_pendaftaran`, `tgl_pendaftaran`, `pemasok`, `no_invoice`, `tgl_invoice`, `no_kontrak`, `tgl_kontrak`, `no_skep`, `tgl_skep`, `jenis_doklain`, `doklain`, `tgl_doklain`, `jenis_pengangkut`, `nomor_polisi`, `harga_penyerahan`, `jenis_kemasan`, `merek_kemasan`, `jumlah_kemasan`, `volume`, `brutto`, `netto`, `nip_petugas`, `nama_petugas`, `userid`) VALUES
('0000000001', 'BPB-2013000001/DEMO', '2013-05-30', '010700', 'Kawasan Berikat', 'Disubkontrakkan', '123456', '2013-05-30', 'S0000002', '1234', '2013-05-30', '234', '2013-05-30', '243', '2013-05-30', '', '', '0000-00-00', '324', '324', '34', 'BO', '345', '345', 34, 34, 34, '3454', '345', 'goestoe'),
('0000000002', 'BPB-2013000002/DEMO', '2013-06-14', '050900', 'Kawasan Berikat', 'Pemasukan kembali peminjaman/reparasi Mesin dari TLDDP', '123445', '2013-06-14', 'S0000002', 'Nomor Invoice', '2013-06-14', 'Nomor Kontrak', '2013-06-14', 'Nomor Skep', '2013-06-14', 'Jenis Doklain', 'NomorDoklain', '2013-06-14', 'Jenis Sarana', 'Nompol', '123', 'BG', 'MerekKemasan', 'JmlKemasan', 123123, 123123, 123, '1213', '123', 'goestoe');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bc40_detail`
--

CREATE TABLE `tbl_bc40_detail` (
  `nomor` char(10) collate latin1_general_ci NOT NULL,
  `id` int(4) NOT NULL auto_increment,
  `kode` char(100) collate latin1_general_ci NOT NULL,
  `jumlah` varchar(20) collate latin1_general_ci NOT NULL,
  `satuan` char(4) collate latin1_general_ci NOT NULL,
  `netto_detail` varchar(20) collate latin1_general_ci NOT NULL,
  `volume_detail` varchar(20) collate latin1_general_ci NOT NULL,
  `harga_detail` varchar(20) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_bc40_detail`
--

INSERT INTO `tbl_bc40_detail` (`nomor`, `id`, `kode`, `jumlah`, `satuan`, `netto_detail`, `volume_detail`, `harga_detail`) VALUES
('0000000001', 1, '003x12x13', '300', 'SAN', '222', '2332', '3243'),
('0000000001', 2, '0.5 X 15 X 443/443X5', '789.90', 'DAA', '3090', '4563', '8796'),
('0000000002', 3, '0.3 X 380 X 560', '600', 'CEN', '677', '878', '99'),
('0000000002', 4, '003x12x13', '677', 'CEN', '1', '212', '345'),
('0000000002', 5, '0.5 X 15 X 443/443X5', '1', 'CEN', '1', '67', '78'),
('0000000002', 6, '002 X 11 X 15', '788', 'CEN', '898', '5675', '767'),
('0000000002', 7, '10 HP AC', '1', 'CEN', '1', '90', '989'),
('0000000002', 8, '1200012520', '90', 'CEN', '788', '87', '78'),
('0000000002', 9, '10 HP AC', '7890', 'CEN', '78', '8', '99');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stockopname`
--

CREATE TABLE `tbl_stockopname` (
  `tglstock` date NOT NULL,
  `no_surat` varchar(150) collate latin1_general_ci NOT NULL,
  `tglsurat` date NOT NULL,
  `petugas` varchar(255) collate latin1_general_ci NOT NULL,
  `kode_brg` varchar(100) collate latin1_general_ci NOT NULL,
  `saldo` varchar(20) collate latin1_general_ci NOT NULL,
  `stockopname` varchar(20) collate latin1_general_ci NOT NULL,
  `selisih` varchar(20) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tbl_stockopname`
--

INSERT INTO `tbl_stockopname` (`tglstock`, `no_surat`, `tglsurat`, `petugas`, `kode_brg`, `saldo`, `stockopname`, `selisih`) VALUES
('2013-04-21', '123', '2013-04-21', 'Bea Cukai', 'B00005', '400', '400', '0'),
('2013-04-21', '123', '2013-04-21', 'Bea Cukai', 'B00001', '0.00', '0.00', '0'),
('2013-04-21', '123', '2013-04-21', 'Bea Cukai', 'B00006', '0.00', '0.00', '0'),
('2013-04-21', '123', '2013-04-21', 'Bea Cukai', 'B00007', '0.00', '0.00', '0'),
('2013-04-21', '123', '2013-04-21', 'Bea Cukai', 'B00009', '300', '300', '0'),
('2013-04-21', '123', '2013-04-21', 'Bea Cukai', 'B00002', '202', '202', '0'),
('2013-04-21', '123', '2013-04-21', 'Bea Cukai', 'B00004', '0', '0', '0'),
('2013-04-21', '123', '2013-04-21', 'Bea Cukai', 'B00003', '356', '356', '0'),
('2013-04-21', '123', '2013-04-21', 'Bea Cukai', 'B00008', '1.00', '1.00', '0'),
('2013-04-21', '', '2013-04-21', '', 'B00005', '400', '400', '0'),
('2013-04-21', '', '2013-04-21', '', 'B00001', '0.00', '0.00', '0'),
('2013-04-21', '', '2013-04-21', '', 'B00006', '0.00', '0.00', '0'),
('2013-04-21', '', '2013-04-21', '', 'B00009', '300', '300', '0'),
('2013-04-21', '', '2013-04-21', '', 'B00007', '0.00', '0.00', '0'),
('2013-04-21', '', '2013-04-21', '', 'B00008', '1.00', '1.00', '0'),
('2013-04-21', '', '2013-04-21', '', 'B00002', '202', '202', '0'),
('2013-04-21', '', '2013-04-21', '', 'B00003', '356', '356', '0'),
('2013-04-21', '', '2013-04-21', '', 'B00004', '0', '0', '0'),
('2013-04-30', '213', '2013-04-21', '123', 'B00005', '400', '400', '0'),
('2013-04-30', '213', '2013-04-21', '123', 'B00001', '0.00', '0.00', '0'),
('2013-04-30', '213', '2013-04-21', '123', 'B00006', '0.00', '0.00', '0'),
('2013-04-30', '213', '2013-04-21', '123', 'B00002', '202', '202', '0'),
('2013-04-30', '213', '2013-04-21', '123', 'B00009', '300', '300', '0'),
('2013-04-30', '213', '2013-04-21', '123', 'B00003', '356', '356', '0'),
('2013-04-30', '213', '2013-04-21', '123', 'B00007', '0.00', '0.00', '0'),
('2013-04-30', '213', '2013-04-21', '123', 'B00008', '1.00', '1.00', '0'),
('2013-04-30', '213', '2013-04-21', '123', 'B00004', '0', '0', '0'),
('2013-04-25', '34', '2013-04-21', '324', 'B00005', '400', '400', '0'),
('2013-04-25', '34', '2013-04-21', '324', 'B00001', '0.00', '0.00', '0'),
('2013-04-25', '34', '2013-04-21', '324', 'B00006', '0.00', '0.00', '0'),
('2013-04-25', '34', '2013-04-21', '324', 'B00002', '202', '202', '0'),
('2013-04-25', '34', '2013-04-21', '324', 'B00009', '300', '300', '0'),
('2013-04-25', '34', '2013-04-21', '324', 'B00004', '0', '0', '0'),
('2013-04-25', '34', '2013-04-21', '324', 'B00003', '356', '356', '0'),
('2013-04-25', '34', '2013-04-21', '324', 'B00008', '1.00', '1.00', '0'),
('2013-04-25', '34', '2013-04-21', '324', 'B00007', '0.00', '0.00', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_adjusment`
--

CREATE TABLE `tmp_adjusment` (
  `id` int(4) NOT NULL auto_increment,
  `kode` char(100) collate latin1_general_ci NOT NULL,
  `jumlah` varchar(20) collate latin1_general_ci NOT NULL,
  `cat` varchar(100) collate latin1_general_ci NOT NULL,
  `userid` char(8) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tmp_adjusment`
--

INSERT INTO `tmp_adjusment` (`id`, `kode`, `jumlah`, `cat`, `userid`) VALUES
(4, '0.5 X 15 X 443/443X5', '4', 'Keterangan', 'goestoe');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_bahan`
--

CREATE TABLE `tmp_bahan` (
  `id` int(4) NOT NULL auto_increment,
  `kode` char(100) collate latin1_general_ci NOT NULL,
  `jumlah` varchar(20) collate latin1_general_ci NOT NULL,
  `userid` char(8) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tmp_bahan`
--

INSERT INTO `tmp_bahan` (`id`, `kode`, `jumlah`, `userid`) VALUES
(9, '7891234', '6', 'goestoe');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_bahanbaku`
--

CREATE TABLE `tmp_bahanbaku` (
  `id` int(4) NOT NULL auto_increment,
  `kode` char(100) collate latin1_general_ci NOT NULL,
  `jumlah` varchar(20) collate latin1_general_ci NOT NULL,
  `userid` char(8) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tmp_bahanbaku`
--

INSERT INTO `tmp_bahanbaku` (`id`, `kode`, `jumlah`, `userid`) VALUES
(14, '7891234', '34', 'goestoe');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_barang`
--

CREATE TABLE `tmp_barang` (
  `id` varchar(4) collate latin1_general_ci NOT NULL,
  `kd_barang` char(100) collate latin1_general_ci NOT NULL,
  `nm_barang` varchar(100) collate latin1_general_ci NOT NULL,
  `type` varchar(100) collate latin1_general_ci NOT NULL,
  `spec` varchar(100) collate latin1_general_ci NOT NULL,
  `stok` varchar(20) collate latin1_general_ci NOT NULL,
  `satuan` varchar(100) collate latin1_general_ci NOT NULL,
  `ket` varchar(100) collate latin1_general_ci NOT NULL,
  `kd_kategori` char(3) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tmp_barang`
--


-- --------------------------------------------------------

--
-- Table structure for table `tmp_bc40`
--

CREATE TABLE `tmp_bc40` (
  `id` int(4) NOT NULL auto_increment,
  `kode` char(100) collate latin1_general_ci NOT NULL,
  `jumlah` varchar(20) collate latin1_general_ci NOT NULL,
  `satuan` char(4) collate latin1_general_ci NOT NULL,
  `netto_detail` varchar(20) collate latin1_general_ci NOT NULL,
  `volume_detail` varchar(20) collate latin1_general_ci NOT NULL,
  `harga_detail` varchar(20) collate latin1_general_ci NOT NULL,
  `userid` char(8) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tmp_bc40`
--

INSERT INTO `tmp_bc40` (`id`, `kode`, `jumlah`, `satuan`, `netto_detail`, `volume_detail`, `harga_detail`, `userid`) VALUES
(12, '0.5 X 15 X 443/443X5', '4500', 'AMH', '4500', '4500', '4500', 'goestoe');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_brgjadi`
--

CREATE TABLE `tmp_brgjadi` (
  `id` int(4) NOT NULL auto_increment,
  `kode` char(100) collate latin1_general_ci NOT NULL,
  `jumlah` varchar(20) collate latin1_general_ci NOT NULL,
  `userid` char(8) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=48 ;

--
-- Dumping data for table `tmp_brgjadi`
--

INSERT INTO `tmp_brgjadi` (`id`, `kode`, `jumlah`, `userid`) VALUES
(47, '99999', '2000', 'goestoe');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_closing`
--

CREATE TABLE `tmp_closing` (
  `id` int(4) NOT NULL,
  `tgl_closing` date NOT NULL,
  `kd_barang` char(100) collate latin1_general_ci NOT NULL,
  `stock` varchar(20) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tmp_closing`
--

INSERT INTO `tmp_closing` (`id`, `tgl_closing`, `kd_barang`, `stock`) VALUES
(1, '2012-02-26', 'B00001', '400.00'),
(2, '2012-02-26', 'B00001', '400.00'),
(3, '2012-02-26', 'B00001', '400.00'),
(4, '2012-02-26', 'B00001', '400.00'),
(5, '2012-02-26', 'B00001', '400.00'),
(6, '2012-02-26', 'B00001', '400.00'),
(7, '2012-02-26', 'B00001', '400.00');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_daftar_kodebrg`
--

CREATE TABLE `tmp_daftar_kodebrg` (
  `id` varchar(4) collate latin1_general_ci NOT NULL,
  `kd_barang` char(100) collate latin1_general_ci NOT NULL,
  `nm_barang` varchar(100) collate latin1_general_ci NOT NULL,
  `type` varchar(100) collate latin1_general_ci NOT NULL,
  `spec` varchar(100) collate latin1_general_ci NOT NULL,
  `satuan` varchar(10) collate latin1_general_ci NOT NULL,
  `ket` varchar(100) collate latin1_general_ci NOT NULL,
  `kd_kategori` char(3) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tmp_daftar_kodebrg`
--


-- --------------------------------------------------------

--
-- Table structure for table `tmp_detail_bahan`
--

CREATE TABLE `tmp_detail_bahan` (
  `id` char(4) collate latin1_general_ci NOT NULL,
  `kode` varchar(100) collate latin1_general_ci NOT NULL,
  `jumlah` varchar(20) collate latin1_general_ci NOT NULL,
  `ket` varchar(100) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tmp_detail_bahan`
--


-- --------------------------------------------------------

--
-- Table structure for table `tmp_detail_brgjadi`
--

CREATE TABLE `tmp_detail_brgjadi` (
  `id` char(4) collate latin1_general_ci NOT NULL,
  `kode` varchar(100) collate latin1_general_ci NOT NULL,
  `jumlah` varchar(20) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tmp_detail_brgjadi`
--


-- --------------------------------------------------------

--
-- Table structure for table `tmp_detail_incoming`
--

CREATE TABLE `tmp_detail_incoming` (
  `id` char(4) collate latin1_general_ci NOT NULL,
  `kode` varchar(100) collate latin1_general_ci NOT NULL,
  `jumlah` varchar(20) collate latin1_general_ci NOT NULL,
  `valuta` varchar(100) collate latin1_general_ci NOT NULL,
  `nilai` varchar(100) collate latin1_general_ci NOT NULL,
  `netto_detail` varchar(20) collate latin1_general_ci NOT NULL,
  `volume_detail` varchar(20) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tmp_detail_incoming`
--

INSERT INTO `tmp_detail_incoming` (`id`, `kode`, `jumlah`, `valuta`, `nilai`, `netto_detail`, `volume_detail`) VALUES
('1', 'CUSHION 1', '200', 'Besar', '', '', ''),
('2', 'CUSHION 2', '100', 'Kecil', '', '', ''),
('3', 'CUSHION 3', '300', 'Besar', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_detail_incoming_outgoing`
--

CREATE TABLE `tmp_detail_incoming_outgoing` (
  `id` char(4) collate latin1_general_ci NOT NULL,
  `kode` varchar(100) collate latin1_general_ci NOT NULL,
  `jumlah` varchar(20) collate latin1_general_ci NOT NULL,
  `ket` varchar(100) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tmp_detail_incoming_outgoing`
--

INSERT INTO `tmp_detail_incoming_outgoing` (`id`, `kode`, `jumlah`, `ket`) VALUES
('1', 'CUSHION 1', '200', 'Besar'),
('2', 'CUSHION 2', '100', 'Kecil'),
('3', '0.5 X 15 X 443/443X5', '10', 'Besar Sekali');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_detail_outgoing`
--

CREATE TABLE `tmp_detail_outgoing` (
  `id` char(4) collate latin1_general_ci NOT NULL,
  `kode` varchar(100) collate latin1_general_ci NOT NULL,
  `jumlah` varchar(20) collate latin1_general_ci NOT NULL,
  `valuta` varchar(100) collate latin1_general_ci NOT NULL,
  `nilai` varchar(100) collate latin1_general_ci NOT NULL,
  `netto_detail` varchar(20) collate latin1_general_ci NOT NULL,
  `volume_detail` varchar(20) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tmp_detail_outgoing`
--


-- --------------------------------------------------------

--
-- Table structure for table `tmp_detail_outgoing_incoming`
--

CREATE TABLE `tmp_detail_outgoing_incoming` (
  `id` char(4) collate latin1_general_ci NOT NULL,
  `kode` varchar(100) collate latin1_general_ci NOT NULL,
  `jumlah` varchar(20) collate latin1_general_ci NOT NULL,
  `ket` varchar(100) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tmp_detail_outgoing_incoming`
--


-- --------------------------------------------------------

--
-- Table structure for table `tmp_detail_outgoing_produksi`
--

CREATE TABLE `tmp_detail_outgoing_produksi` (
  `id` char(4) collate latin1_general_ci NOT NULL,
  `kode` varchar(100) collate latin1_general_ci NOT NULL,
  `jumlah` varchar(20) collate latin1_general_ci NOT NULL,
  `ket` varchar(100) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tmp_detail_outgoing_produksi`
--

INSERT INTO `tmp_detail_outgoing_produksi` (`id`, `kode`, `jumlah`, `ket`) VALUES
('1', 'CUSHION 1', '200', 'Besar'),
('2', 'CUSHION 2', '100', 'Kecil'),
('3', '1200012520', '100', 'Besar Sekali');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_detail_produksi`
--

CREATE TABLE `tmp_detail_produksi` (
  `id` char(4) collate latin1_general_ci NOT NULL,
  `kode` varchar(100) collate latin1_general_ci NOT NULL,
  `jumlah` varchar(20) collate latin1_general_ci NOT NULL,
  `ket` varchar(255) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tmp_detail_produksi`
--


-- --------------------------------------------------------

--
-- Table structure for table `tmp_detail_produksi_incoming`
--

CREATE TABLE `tmp_detail_produksi_incoming` (
  `id` char(4) collate latin1_general_ci NOT NULL,
  `kode` varchar(100) collate latin1_general_ci NOT NULL,
  `jumlah` varchar(20) collate latin1_general_ci NOT NULL,
  `ket` varchar(100) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tmp_detail_produksi_incoming`
--


-- --------------------------------------------------------

--
-- Table structure for table `tmp_detail_produksi_outgoing`
--

CREATE TABLE `tmp_detail_produksi_outgoing` (
  `id` char(4) collate latin1_general_ci NOT NULL,
  `kode` varchar(100) collate latin1_general_ci NOT NULL,
  `jumlah` varchar(20) collate latin1_general_ci NOT NULL,
  `ket` varchar(100) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tmp_detail_produksi_outgoing`
--


-- --------------------------------------------------------

--
-- Table structure for table `tmp_incoming_outgoing`
--

CREATE TABLE `tmp_incoming_outgoing` (
  `id` int(4) NOT NULL auto_increment,
  `kode` char(100) collate latin1_general_ci NOT NULL,
  `jumlah` varchar(20) collate latin1_general_ci NOT NULL,
  `ket` varchar(100) collate latin1_general_ci NOT NULL,
  `userid` char(8) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=28 ;

--
-- Dumping data for table `tmp_incoming_outgoing`
--

INSERT INTO `tmp_incoming_outgoing` (`id`, `kode`, `jumlah`, `ket`, `userid`) VALUES
(2, 'B00003', '1.00', '100', 'goestoe'),
(3, 'B00003', '1.00', 'jer', 'goestoe'),
(27, '0.5 X 15 X 443/443X5', '400', 'Keterangan berhasil', 'goestoe');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_incoming_terima`
--

CREATE TABLE `tmp_incoming_terima` (
  `nomor` char(15) collate latin1_general_ci NOT NULL,
  `dari` varchar(255) collate latin1_general_ci NOT NULL,
  `no_spb` char(100) collate latin1_general_ci NOT NULL,
  `tgl_spb` date NOT NULL,
  `dept` char(200) collate latin1_general_ci NOT NULL,
  `name_ppc` char(200) collate latin1_general_ci NOT NULL,
  `catatan` varchar(200) collate latin1_general_ci NOT NULL,
  `user_trt` char(100) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tmp_incoming_terima`
--

INSERT INTO `tmp_incoming_terima` (`nomor`, `dari`, `no_spb`, `tgl_spb`, `dept`, `name_ppc`, `catatan`, `user_trt`) VALUES
('OUT-0000000001', 'OUTGOING', 'SPB-2013000001/OUTGOING', '2013-03-17', 'Bagian Alat Produksi', 'ewr', 'wer', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_incoming_terima_detail`
--

CREATE TABLE `tmp_incoming_terima_detail` (
  `nomor` char(15) collate latin1_general_ci NOT NULL,
  `id` int(10) NOT NULL auto_increment,
  `dari` varchar(255) collate latin1_general_ci NOT NULL,
  `kode` char(100) collate latin1_general_ci NOT NULL,
  `jumlah` varchar(20) collate latin1_general_ci NOT NULL,
  `ket` char(200) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tmp_incoming_terima_detail`
--

INSERT INTO `tmp_incoming_terima_detail` (`nomor`, `id`, `dari`, `kode`, `jumlah`, `ket`) VALUES
('OUT-0000000001', 6, 'OUTGOING', 'B00001', '1.00', 'wre');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_konversi`
--

CREATE TABLE `tmp_konversi` (
  `id` int(4) NOT NULL auto_increment,
  `kode` char(100) collate latin1_general_ci NOT NULL,
  `jumlah` varchar(20) collate latin1_general_ci NOT NULL,
  `ket` varchar(200) collate latin1_general_ci NOT NULL,
  `userid` char(8) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tmp_konversi`
--

INSERT INTO `tmp_konversi` (`id`, `kode`, `jumlah`, `ket`, `userid`) VALUES
(3, 'B00002', '1.00', 'try', 'goestoe'),
(4, 'B00004', '1', '213', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_outgoing_incoming`
--

CREATE TABLE `tmp_outgoing_incoming` (
  `id` int(4) NOT NULL auto_increment,
  `kode` char(100) collate latin1_general_ci NOT NULL,
  `jumlah` varchar(20) collate latin1_general_ci NOT NULL,
  `ket` varchar(100) collate latin1_general_ci NOT NULL,
  `userid` char(8) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=17 ;

--
-- Dumping data for table `tmp_outgoing_incoming`
--

INSERT INTO `tmp_outgoing_incoming` (`id`, `kode`, `jumlah`, `ket`, `userid`) VALUES
(4, 'B00001', '200', 'Baru', 'admin'),
(5, 'B00002', '200', 'Baru', 'admin'),
(6, 'B00003', '200', 'Baru', 'admin'),
(7, 'B00004', '100', 'Baru', 'admin'),
(8, 'B00005', '200', 'Baru', 'admin'),
(9, 'B00006', '200', 'Baru', 'admin'),
(10, 'B00007', '100', 'Baru', 'admin'),
(11, 'B00008', '200', 'Baru', 'admin'),
(15, '1200012520', '10', 'Kecil Sekali', 'goestoe'),
(14, 'CUSHION 1', '200', 'Besar', 'goestoe'),
(16, 'CUSHION 3', '300', 'Besar', 'goestoe');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_outgoing_produksi`
--

CREATE TABLE `tmp_outgoing_produksi` (
  `id` int(4) NOT NULL auto_increment,
  `kode` char(100) collate latin1_general_ci NOT NULL,
  `jumlah` varchar(20) collate latin1_general_ci NOT NULL,
  `ket` varchar(100) collate latin1_general_ci NOT NULL,
  `userid` char(8) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tmp_outgoing_produksi`
--

INSERT INTO `tmp_outgoing_produksi` (`id`, `kode`, `jumlah`, `ket`, `userid`) VALUES
(3, '1200012520', '1', 'wre', 'goestoe');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_outgoing_terima`
--

CREATE TABLE `tmp_outgoing_terima` (
  `nomor` char(15) collate latin1_general_ci NOT NULL,
  `dari` varchar(255) collate latin1_general_ci NOT NULL,
  `no_spb` char(100) collate latin1_general_ci NOT NULL,
  `tgl_spb` date NOT NULL,
  `dept` char(200) collate latin1_general_ci NOT NULL,
  `name_ppc` char(200) collate latin1_general_ci NOT NULL,
  `catatan` varchar(200) collate latin1_general_ci NOT NULL,
  `user_trt` char(100) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tmp_outgoing_terima`
--

INSERT INTO `tmp_outgoing_terima` (`nomor`, `dari`, `no_spb`, `tgl_spb`, `dept`, `name_ppc`, `catatan`, `user_trt`) VALUES
('INC-0000000003', 'INCOMING', 'SPB-2013000003/INC-OUT', '2013-04-26', 'Bagian Alat Produksi', '45', '45', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_outgoing_terima_detail`
--

CREATE TABLE `tmp_outgoing_terima_detail` (
  `nomor` char(15) collate latin1_general_ci NOT NULL,
  `id` int(10) NOT NULL auto_increment,
  `dari` varchar(255) collate latin1_general_ci NOT NULL,
  `kode` char(100) collate latin1_general_ci NOT NULL,
  `jumlah` varchar(20) collate latin1_general_ci NOT NULL,
  `ket` char(200) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=20 ;

--
-- Dumping data for table `tmp_outgoing_terima_detail`
--

INSERT INTO `tmp_outgoing_terima_detail` (`nomor`, `id`, `dari`, `kode`, `jumlah`, `ket`) VALUES
('INC-0000000003', 16, 'INCOMING', 'B00004', '100', 'ewe');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_pemasukan`
--

CREATE TABLE `tmp_pemasukan` (
  `id` int(4) NOT NULL auto_increment,
  `kode` char(100) collate latin1_general_ci NOT NULL,
  `jumlah` varchar(20) collate latin1_general_ci NOT NULL,
  `valuta` char(4) collate latin1_general_ci NOT NULL,
  `nilai` varchar(20) collate latin1_general_ci NOT NULL,
  `netto_detail` varchar(20) collate latin1_general_ci NOT NULL,
  `volume_detail` varchar(20) collate latin1_general_ci NOT NULL,
  `userid` char(8) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=91 ;

--
-- Dumping data for table `tmp_pemasukan`
--

INSERT INTO `tmp_pemasukan` (`id`, `kode`, `jumlah`, `valuta`, `nilai`, `netto_detail`, `volume_detail`, `userid`) VALUES
(90, '0.3 X 380 X 560', '10', 'MMK', '456', '456', '4564', 'goestoe'),
(89, 'CUSHION 3', '300', 'USD', '6000', '4343.67', '8675.90', 'goestoe'),
(88, 'CUSHION 2', '100', 'NZD', '5000', '234.67', '345.89', 'goestoe'),
(87, 'CUSHION 1', '200', 'USD', '4500', '456.78', '543.67', 'goestoe');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_pemusnahan`
--

CREATE TABLE `tmp_pemusnahan` (
  `id` int(4) NOT NULL auto_increment,
  `kode` char(100) collate latin1_general_ci NOT NULL,
  `jumlah` varchar(20) collate latin1_general_ci NOT NULL,
  `valuta` char(4) collate latin1_general_ci NOT NULL,
  `nilai` varchar(20) collate latin1_general_ci NOT NULL,
  `netto_detail` varchar(20) collate latin1_general_ci NOT NULL,
  `volume_detail` varchar(20) collate latin1_general_ci NOT NULL,
  `userid` char(8) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tmp_pemusnahan`
--

INSERT INTO `tmp_pemusnahan` (`id`, `kode`, `jumlah`, `valuta`, `nilai`, `netto_detail`, `volume_detail`, `userid`) VALUES
(2, '1200012520', '1000', 'TOP', '4500', '4500', '45600', 'goestoe');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_pengeluaran`
--

CREATE TABLE `tmp_pengeluaran` (
  `id` int(4) NOT NULL auto_increment,
  `kode` char(100) collate latin1_general_ci NOT NULL,
  `jumlah` varchar(20) collate latin1_general_ci NOT NULL,
  `valuta` char(4) collate latin1_general_ci NOT NULL,
  `nilai` varchar(20) collate latin1_general_ci NOT NULL,
  `netto_detail` varchar(20) collate latin1_general_ci NOT NULL,
  `volume_detail` varchar(20) collate latin1_general_ci NOT NULL,
  `userid` char(8) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=48 ;

--
-- Dumping data for table `tmp_pengeluaran`
--

INSERT INTO `tmp_pengeluaran` (`id`, `kode`, `jumlah`, `valuta`, `nilai`, `netto_detail`, `volume_detail`, `userid`) VALUES
(45, 'CUSHION 1', '200', 'USD', '4500', '456.78', '543.67', 'goestoe'),
(46, '0.5 X 15 X 443/443X5', '2000', 'TND', '1000', '100.67', '300.89', 'goestoe'),
(47, '002 X 11 X 15', '3000', 'USD', '3000', '3000', '3000', 'goestoe');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_produksi`
--

CREATE TABLE `tmp_produksi` (
  `id` int(4) NOT NULL auto_increment,
  `kode` char(100) collate latin1_general_ci NOT NULL,
  `jumlah` varchar(20) collate latin1_general_ci NOT NULL,
  `ket` varchar(100) collate latin1_general_ci NOT NULL,
  `userid` char(8) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=95 ;

--
-- Dumping data for table `tmp_produksi`
--

INSERT INTO `tmp_produksi` (`id`, `kode`, `jumlah`, `ket`, `userid`) VALUES
(94, '002 X 11 X 15', '1', '767', 'goestoe');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_produksi_incoming`
--

CREATE TABLE `tmp_produksi_incoming` (
  `id` int(4) NOT NULL auto_increment,
  `kode` char(100) collate latin1_general_ci NOT NULL,
  `jumlah` varchar(20) collate latin1_general_ci NOT NULL,
  `ket` varchar(100) collate latin1_general_ci NOT NULL,
  `userid` char(8) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tmp_produksi_incoming`
--

INSERT INTO `tmp_produksi_incoming` (`id`, `kode`, `jumlah`, `ket`, `userid`) VALUES
(8, 'CUSHION 2', '100', 'Kecil', 'goestoe'),
(7, '7891234', '100', 'Besar Kecil', 'goestoe'),
(9, '99999', '10', 'Besar Kecil', 'goestoe');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_produksi_outgoing`
--

CREATE TABLE `tmp_produksi_outgoing` (
  `id` int(4) NOT NULL auto_increment,
  `kode` char(100) collate latin1_general_ci NOT NULL,
  `jumlah` varchar(20) collate latin1_general_ci NOT NULL,
  `ket` varchar(100) collate latin1_general_ci NOT NULL,
  `userid` char(8) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=18 ;

--
-- Dumping data for table `tmp_produksi_outgoing`
--

INSERT INTO `tmp_produksi_outgoing` (`id`, `kode`, `jumlah`, `ket`, `userid`) VALUES
(12, 'B00002', '2', 'ret', 'admin'),
(13, 'B00009', '400', 'wer', 'admin'),
(11, 'B00009', '200.87', 'ert', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_produksi_terima`
--

CREATE TABLE `tmp_produksi_terima` (
  `nomor` char(15) collate latin1_general_ci NOT NULL,
  `dari` varchar(255) collate latin1_general_ci NOT NULL,
  `no_spb` char(100) collate latin1_general_ci NOT NULL,
  `tgl_spb` date NOT NULL,
  `dept` char(200) collate latin1_general_ci NOT NULL,
  `name_ppc` char(200) collate latin1_general_ci NOT NULL,
  `catatan` varchar(200) collate latin1_general_ci NOT NULL,
  `user_trt` char(100) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tmp_produksi_terima`
--

INSERT INTO `tmp_produksi_terima` (`nomor`, `dari`, `no_spb`, `tgl_spb`, `dept`, `name_ppc`, `catatan`, `user_trt`) VALUES
('INC-0000000002', 'INCOMING', 'SPB-2013000002/INC-PROD', '2013-04-26', 'Bagian Pra Produksi', '234', '234', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_produksi_terima_detail`
--

CREATE TABLE `tmp_produksi_terima_detail` (
  `nomor` char(15) collate latin1_general_ci NOT NULL,
  `id` int(10) NOT NULL auto_increment,
  `dari` varchar(255) collate latin1_general_ci NOT NULL,
  `kode` char(100) collate latin1_general_ci NOT NULL,
  `jumlah` varchar(20) collate latin1_general_ci NOT NULL,
  `ket` char(200) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tmp_produksi_terima_detail`
--

INSERT INTO `tmp_produksi_terima_detail` (`nomor`, `id`, `dari`, `kode`, `jumlah`, `ket`) VALUES
('INC-0000000002', 6, 'INCOMING', 'B00004', '1', '435');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_scrap`
--

CREATE TABLE `tmp_scrap` (
  `id` int(4) NOT NULL auto_increment,
  `kode` char(100) collate latin1_general_ci NOT NULL,
  `jumlah` varchar(20) collate latin1_general_ci NOT NULL,
  `userid` char(8) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tmp_scrap`
--

INSERT INTO `tmp_scrap` (`id`, `kode`, `jumlah`, `userid`) VALUES
(4, 'SCRAP04', '200', 'goestoe');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_stock_pemasukan`
--

CREATE TABLE `tmp_stock_pemasukan` (
  `id` varchar(4) collate latin1_general_ci NOT NULL,
  `kode` varchar(100) collate latin1_general_ci NOT NULL,
  `jumlah` varchar(20) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tmp_stock_pemasukan`
--

INSERT INTO `tmp_stock_pemasukan` (`id`, `kode`, `jumlah`) VALUES
('1', 'B00002', '3000.00'),
('2', 'B00003', '3000.00'),
('3', 'B00004', '3000.00'),
('4', 'B00005', '3000.00'),
('5', 'B00006', '3000.00'),
('6', 'B00007', '3000.00'),
('7', 'B00008', '3000.00'),
('8', 'B00009', '3000.00');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_stock_pengeluaran`
--

CREATE TABLE `tmp_stock_pengeluaran` (
  `id` varchar(4) collate latin1_general_ci NOT NULL,
  `kode` varchar(100) collate latin1_general_ci NOT NULL,
  `jumlah` varchar(20) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tmp_stock_pengeluaran`
--


-- --------------------------------------------------------

--
-- Table structure for table `tmp_stock_produksi`
--

CREATE TABLE `tmp_stock_produksi` (
  `id` varchar(4) collate latin1_general_ci NOT NULL,
  `kode` varchar(100) collate latin1_general_ci NOT NULL,
  `jumlah` varchar(20) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tmp_stock_produksi`
--

INSERT INTO `tmp_stock_produksi` (`id`, `kode`, `jumlah`) VALUES
('1', 'B00002', '3000.00'),
('2', 'B00003', '3000.00'),
('3', 'B00004', '3000.00'),
('4', 'B00005', '3000.00'),
('5', 'B00006', '3000.00'),
('6', 'B00007', '3000.00'),
('7', 'B00008', '3000.00'),
('8', 'B00009', '3000.00');

-- --------------------------------------------------------

--
-- Table structure for table `user_act`
--

CREATE TABLE `user_act` (
  `id` int(10) NOT NULL auto_increment,
  `userid` varchar(12) collate latin1_general_ci NOT NULL,
  `aktivitas` varchar(255) collate latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=342 ;

--
-- Dumping data for table `user_act`
--

INSERT INTO `user_act` (`id`, `userid`, `aktivitas`, `tanggal`, `jam`) VALUES
(1, 'goestoe', 'Menyimpan data mata uang dengan data jenis USD nama Dollar Amerika', '2013-02-17', '00:00:00'),
(2, 'goestoe', 'Menyimpan data mata uang dengan data jenis IDR dan nama Indonesian Rupiah', '2013-02-17', '23:45:24'),
(3, 'goestoe', 'Menambah data transaksi incoming - outgoing nomor SPB: fdg dan tanggal 18-02-2013', '2013-02-18', '11:11:12'),
(4, 'goestoe', 'Menambah data user dengan nama Super Admin 2 dan userid super', '2013-02-18', '12:38:05'),
(5, 'super', 'Mengubah data user dengan nama Super Admin1 dan userid goestoe', '2013-02-18', '12:47:29'),
(6, 'goestoe', 'Menambah data transaksi produksi-outgoing nomor BPB: 4567 dan tanggal 18-02-2013', '2013-02-18', '18:31:01'),
(7, 'goestoe', 'Menambah data transaksi pemasukan barang dengan nomor BPB: 324 dan tanggal 18-02-2013', '2013-02-18', '23:03:10'),
(8, 'goestoe', 'Menambah data transaksi incoming-produksi dengan nomor SPB: 1235 dan tanggal 20-02-2013', '2013-02-20', '17:19:52'),
(9, 'goestoe', 'Mengubah data perusahaan', '2013-02-20', '18:55:57'),
(10, 'goestoe', 'Menambah data adjustment dengan nomor gf456 tanggal 20-02-2013', '2013-02-20', '18:56:45'),
(11, 'goestoe', 'Mengubah data PENERIMA dengan nama PT Berlian Tahta', '2013-02-20', '18:57:00'),
(12, 'goestoe', 'Mengubah data PENERIMA dengan nama PT Berlian Tahta', '2013-02-20', '18:57:06'),
(13, 'goestoe', 'Mengubah data PENERIMA dengan nama PT Berlian Tahta', '2013-02-20', '19:01:18'),
(14, 'goestoe', 'Mengubah data barang dengan nama Celana Jeans', '2013-02-20', '19:05:02'),
(15, 'goestoe', 'Menambah data pemasok/supplier dengan kode S00001 dan nama PT Kolang Kaling', '2013-02-20', '19:11:16'),
(16, 'goestoe', 'Mengubah data jenis dokpab masuk dengan jenis BC 2.3 dan nama Pemasukan barang dari Luar Daerah Pabean/Luar Negeri', '2013-02-20', '19:12:37'),
(17, 'goestoe', 'Mengubah data barang dengan nama Baju', '2013-02-20', '19:13:23'),
(18, 'goestoe', 'Mengubah data barang dengan nama Kaos', '2013-02-20', '19:13:44'),
(19, 'goestoe', 'Mengubah data barang dengan nama Batu', '2013-02-20', '19:13:57'),
(20, 'goestoe', 'Mengubah data perusahaan', '2013-02-20', '19:15:19'),
(21, 'goestoe', 'Mengubah data barang dengan kode  dan nama Kaos Baru', '2013-02-20', '19:17:35'),
(22, 'goestoe', 'Mengubah data barang dengan kode B00004 dan nama Batu Besar', '2013-02-20', '19:18:45'),
(23, 'goestoe', 'Menghapus data barang dengan kode: B00004', '2013-02-20', '19:20:14'),
(24, 'goestoe', 'Menghapus data barang dengan kode: B00003', '2013-02-20', '19:34:34'),
(25, 'goestoe', 'Mengubah data barang dengan kode B00002 dan nama Celana Jeans', '2013-02-20', '19:34:49'),
(26, 'goestoe', 'Mengubah data barang dengan kode B00002 dan nama Celana Jeans', '2013-02-20', '19:34:57'),
(27, 'goestoe', 'Mengubah data barang dengan kode B00002 dan nama Celana Jeans', '2013-02-20', '19:35:04'),
(28, 'goestoe', 'Mengubah data tujuan pengiriman dengan kode:CAT-0007 dan nama Pengembalian Pinjaman', '2013-02-20', '19:38:24'),
(29, 'goestoe', 'Menambah data pemasok/supplier dengan kode S00001 dan nama PT Kolang Kaling', '2013-02-20', '19:42:00'),
(30, 'goestoe', 'Mengubah data pemasok/supplier dengan kode: S00001 dan nama PT Kolang Kaling', '2013-02-20', '19:43:56'),
(31, 'goestoe', 'Menghapus data pemasok/supplier dengan kode: S00001', '2013-02-20', '19:44:10'),
(32, 'goestoe', 'Mengubah data satuan barang dengan jenis Mtr dan nama Meter Panjang Pendek', '2013-02-20', '19:45:24'),
(33, 'goestoe', 'Menghapus data satuan barang dengan kode: SAT001', '2013-02-20', '19:45:42'),
(34, 'goestoe', 'Menambah data PENERIMA dengan kode P00001 dan nama PT Berlian Tahta', '2013-02-20', '19:46:20'),
(35, 'goestoe', 'Mengubah data PENERIMA dengan nama PT Berlian Tahta', '2013-02-20', '19:46:46'),
(36, 'goestoe', 'Mengubah data perusahaan', '2013-02-20', '19:47:03'),
(37, 'goestoe', 'Mengubah data mata uang dengan data jenis USD dan nama Dollar Amerika Serikat', '2013-02-20', '19:47:31'),
(38, 'goestoe', 'Menghapus data mata uang dengan data kode:CUR003', '2013-02-20', '19:47:43'),
(39, 'goestoe', 'Menerima barang PRODUKSI dengan nomor LPB: erwrwer dan tanggal 20-02-2013', '2013-02-20', '19:49:23'),
(40, 'goestoe', 'Menambah data transaksi incoming-produksi dengan nomor SPB: 78978 dan tanggal 20-02-2013', '2013-02-20', '20:00:56'),
(41, 'goestoe', 'Menerima barang PRODUKSI dengan nomor LPB: 879 dan tanggal 20-02-2013', '2013-02-20', '20:01:10'),
(42, 'goestoe', 'Menambah data satuan barang dengan jenis PCS dan nama Pieces', '2013-02-20', '20:10:19'),
(43, 'goestoe', 'Mengubah data barang dengan kode B00002 dan nama Celana Jeans', '2013-02-20', '20:10:31'),
(44, 'goestoe', 'Menambah data pemasok/supplier dengan kode S00001 dan nama WER', '2013-02-22', '16:51:56'),
(45, 'goestoe', 'Menambah data pemasok/supplier dengan kode S00002 dan nama PT Kolang Kaling', '2013-02-22', '16:54:54'),
(46, 'goestoe', 'Menambah data transaksi pemasukan barang dengan nomor BPB: try dan tanggal 22-02-2013', '2013-02-22', '17:00:06'),
(47, 'goestoe', 'Menambah data transaksi pemasukan barang dengan nomor BPB: 123456 dan tanggal 22-02-2013', '2013-02-22', '17:20:35'),
(48, 'goestoe', 'Menambah data transaksi pengeluaran barang nomor surat jalan: 1234 dan tanggal 22-02-2013', '2013-02-22', '18:06:39'),
(49, 'goestoe', 'Menghapus data barang dengan kode: B00001', '2013-02-26', '10:02:55'),
(50, 'goestoe', 'Menghapus data barang dengan kode: B00002', '2013-02-26', '10:02:57'),
(51, 'goestoe', 'Menghapus data barang dengan kode: B00008', '2013-02-26', '14:53:37'),
(52, 'goestoe', 'Menghapus data barang dengan kode: B00007', '2013-02-26', '14:53:39'),
(53, 'goestoe', 'Menghapus data barang dengan kode: B00006', '2013-02-26', '14:53:41'),
(54, 'goestoe', 'Menghapus data barang dengan kode: B00005', '2013-02-26', '14:53:43'),
(55, 'goestoe', 'Menghapus data barang dengan kode: B00004', '2013-02-26', '14:53:45'),
(56, 'goestoe', 'Menghapus data barang dengan kode: B00003', '2013-02-26', '14:53:47'),
(57, 'goestoe', 'Mengubah data user dengan nama Admin1 dan userid admin', '2013-02-27', '07:30:44'),
(58, 'goestoe', 'Mengubah data barang dengan kode B00001 dan nama Baju', '2013-02-27', '12:49:10'),
(59, 'goestoe', 'Mengubah Password', '2013-02-28', '08:37:38'),
(60, 'goestoe', 'Mengubah Password', '2013-02-28', '08:38:26'),
(61, 'goestoe', 'Mengubah Password', '2013-02-28', '08:41:16'),
(62, 'goestoe', 'Mengubah data user dengan nama Operator Pemasukan dan userid masuk', '2013-02-28', '08:43:18'),
(63, 'masuk', 'Mengubah Password', '2013-02-28', '08:43:50'),
(64, 'goestoe', 'Mengubah Password', '2013-02-28', '09:05:38'),
(65, 'goestoe', 'Menambah data tujuan pengiriman dengan nama Pemusnahan', '2013-03-01', '08:57:47'),
(66, 'goestoe', 'Menambah data Barang Jadi hasil produksi dengan nomor BHP 133 dan tanggal 02-03-2013', '2013-03-02', '09:10:33'),
(67, 'goestoe', 'Menghapus data barang dengan kode: B00001', '2013-03-02', '09:12:55'),
(68, 'goestoe', 'Menghapus data barang dengan kode: B00008', '2013-03-02', '09:13:09'),
(69, 'goestoe', 'Menghapus data barang dengan kode: B00007', '2013-03-02', '09:13:13'),
(70, 'goestoe', 'Menghapus data barang dengan kode: B00006', '2013-03-02', '09:13:17'),
(71, 'goestoe', 'Menghapus data barang dengan kode: B00005', '2013-03-02', '09:13:21'),
(72, 'goestoe', 'Menghapus data barang dengan kode: B00004', '2013-03-02', '09:13:24'),
(73, 'goestoe', 'Menghapus data barang dengan kode: B00003', '2013-03-02', '09:13:26'),
(74, 'goestoe', 'Menghapus data barang dengan kode: B00002', '2013-03-02', '09:13:28'),
(75, 'goestoe', 'Menambah data barang dengan kode B00001 dan nama Sepatu', '2013-03-02', '09:14:08'),
(76, 'goestoe', 'Menambah data transaksi pemasukan barang dengan nomor BPB: 4353 dan tanggal 02-03-2013', '2013-03-02', '09:16:16'),
(77, 'goestoe', 'Menambah data Barang Jadi hasil produksi dengan nomor BHP 234 dan tanggal 02-03-2013', '2013-03-02', '09:17:09'),
(78, 'goestoe', 'Mengubah data perusahaan', '2013-03-02', '21:32:53'),
(79, 'admin', 'Mengubah data kategori barang dengan nama Jig', '2013-03-02', '22:11:15'),
(80, 'admin', 'Mengubah data kategori barang dengan nama Moulding', '2013-03-02', '22:11:27'),
(81, 'admin', 'Menghapus data kategori barang dengan kode:K03', '2013-03-02', '22:11:31'),
(82, 'admin', 'Menghapus data kategori barang dengan kode:K04', '2013-03-02', '22:11:33'),
(83, 'admin', 'Menghapus data user dengan kode:8', '2013-03-02', '22:12:00'),
(84, 'admin', 'Menghapus data user dengan kode:9', '2013-03-02', '22:12:03'),
(85, 'admin', 'Menghapus data user dengan kode:10', '2013-03-02', '22:12:06'),
(86, 'admin', 'Menghapus data user dengan kode:12', '2013-03-02', '22:12:08'),
(87, 'admin', 'Menghapus data user dengan kode:4', '2013-03-02', '22:12:14'),
(88, 'admin', 'Menghapus data user dengan kode:3', '2013-03-02', '22:12:17'),
(89, 'admin', 'Menghapus data user dengan kode:6', '2013-03-02', '22:12:20'),
(90, 'admin', 'Mengubah data user dengan nama Gerald dan userid tasya', '2013-03-02', '22:12:36'),
(91, 'admin', 'Mengubah data user dengan nama Bayu dan userid bayu', '2013-03-02', '22:12:58'),
(92, 'admin', 'Mengubah data user dengan nama Tasya dan userid tasya', '2013-03-02', '22:13:10'),
(93, 'admin', 'Menambah data kategori barang dengan nama Tooling', '2013-03-02', '22:59:57'),
(94, 'admin', 'Menghapus data user dengan kode:5', '2013-03-04', '07:59:21'),
(95, 'admin', 'Menghapus data user dengan kode:7', '2013-03-04', '07:59:23'),
(96, 'admin', 'Menambah data user dengan nama Agustu Atihuta dan userid goestoe', '2013-03-04', '07:59:39'),
(97, 'admin', 'Menghapus data user dengan kode:1', '2013-03-04', '07:59:44'),
(98, 'goestoe', 'Menambah data transaksi pemasukan barang dengan nomor BPB: 23234 dan tanggal 04-03-2013', '2013-03-04', '08:53:39'),
(99, 'goestoe', 'Mengubah data kategori barang dengan nama Bahan Baku/Penolong', '2013-03-04', '09:12:45'),
(100, 'goestoe', 'Mengubah data kategori barang dengan nama Barang Jadi', '2013-03-04', '09:12:53'),
(101, 'goestoe', 'Mengubah data kategori barang dengan nama Barang Modal dan Peralatan Perkantoran', '2013-03-04', '09:13:10'),
(102, 'goestoe', 'Menambah data kategori barang dengan nama Barang Sisa / Scrap', '2013-03-04', '09:13:16'),
(103, 'goestoe', 'Menambah data transaksi produksi-incoming nomor SPB: 123456 dan tanggal 04-03-2013', '2013-03-04', '12:02:45'),
(104, 'goestoe', 'Menerima barang INCOMING dengan nomor LPB: 12345 dan tanggal 04-03-2013', '2013-03-04', '12:06:33'),
(105, 'goestoe', 'Menambah data transaksi incoming-produksi dengan nomor SPB: 123 dan tanggal 04-03-2013', '2013-03-04', '14:13:20'),
(106, 'goestoe', 'Menerima barang PRODUKSI dengan nomor LPB: 1234 dan tanggal 04-03-2013', '2013-03-04', '14:13:59'),
(107, 'goestoe', 'Menambah data transaksi pemasukan barang dengan nomor SPB: 123 dan tanggal 04-03-2013', '2013-03-04', '14:57:41'),
(108, 'goestoe', 'Menerima barang OUTGOING dengan nomor LPB: 123 dan tanggal 04-03-2013', '2013-03-04', '14:57:54'),
(109, 'goestoe', 'Menambah data transaksi pemasukan barang dengan nomor SPB: 234 dan tanggal 04-03-2013', '2013-03-04', '16:42:23'),
(110, 'goestoe', 'Menambah data transaksi outgoing-incoming nomor SPB: 122 dan tanggal 04-03-2013', '2013-03-04', '18:23:15'),
(111, 'goestoe', 'Menambah data tujuan pengiriman dengan nama Bagian Penyimpanan Bahan', '2013-03-07', '08:01:14'),
(112, 'goestoe', 'Menambah data tujuan pengiriman dengan nama Bagian Alat Produksi', '2013-03-07', '08:01:34'),
(113, 'goestoe', 'Menambah data tujuan pengiriman dengan nama Bagian Pra Produksi', '2013-03-07', '08:02:13'),
(114, 'goestoe', 'Menambah data tujuan pengiriman dengan nama Bagian Produksi', '2013-03-07', '08:02:31'),
(115, 'goestoe', 'Menambah data tujuan pengiriman dengan nama Bagian Kontrol Kualitas', '2013-03-07', '08:02:45'),
(116, 'goestoe', 'Menambah data tujuan pengiriman dengan nama Bagian Pasca Produksi', '2013-03-07', '08:02:58'),
(117, 'goestoe', 'Menambah data tujuan pengiriman dengan nama Bagian Penyimpanan Barang Jadi', '2013-03-07', '08:03:19'),
(118, 'goestoe', 'Menambah data tujuan pengiriman dengan nama Bagian Penyimpanan Barang Sisa / Scrap', '2013-03-07', '08:03:36'),
(119, 'goestoe', 'Menambah data tujuan pengiriman dengan nama Bagian Penjualan', '2013-03-07', '08:03:49'),
(120, 'goestoe', 'Mengubah data tujuan pengiriman dengan kode:DEP-0001 dan nama Bagian Penyimpanan Bahan Baku / Penolong', '2013-03-07', '08:05:06'),
(121, 'goestoe', 'Menambah data tujuan pengiriman dengan nama Bagian Personalia', '2013-03-07', '08:05:20'),
(122, 'goestoe', 'Menghapus data tujuan pengiriman dengan kode:DEP-0010', '2013-03-07', '08:05:23'),
(123, 'goestoe', 'Menambah data transaksi pemasukan barang dengan nomor SPB: 12 dan tanggal 07-03-2013', '2013-03-07', '08:16:38'),
(124, 'goestoe', 'Menambah data transaksi incoming-produksi dengan nomor SPB: 123 dan tanggal 07-03-2013', '2013-03-07', '08:33:59'),
(125, 'goestoe', 'Menerima barang INCOMING dengan nomor LPB: 123 dan tanggal 07-03-2013', '2013-03-07', '10:41:36'),
(126, 'goestoe', 'Menambah data user dengan nama Bayu Hendra dan userid bayu', '2013-03-10', '00:58:05'),
(127, 'goestoe', 'Menambah data user dengan nama Administrator dan userid admin', '2013-03-10', '00:58:20'),
(128, 'goestoe', 'Menambah data pengguna dengan nama Agustu Atihuta dan penggunaid goestoe', '2013-03-12', '10:43:13'),
(129, 'goestoe', 'Mengubah data pengguna dengan nama Agustu Atihuta dan penggunaid goestoe', '2013-03-12', '10:43:25'),
(130, 'goestoe', 'Mengubah data pengguna dengan nama Agustu Atihuta dan penggunaid goestoe', '2013-03-12', '10:43:39'),
(131, 'goestoe', 'Menghapus data pengguna dengan kode:1', '2013-03-12', '10:43:42'),
(132, 'goestoe', 'Menambah data pengguna dengan nama Agustu Atihuta dan penggunaid goestoe', '2013-03-12', '10:43:55'),
(133, 'goestoe', 'Menambah data pengguna dengan nama Bayu Hendra Wianto dan penggunaid bayu', '2013-03-12', '12:34:28'),
(134, 'goestoe', 'Menambah data Barang Jadi hasil produksi dengan nomor BHP ewr dan tanggal 14-03-2013', '2013-03-14', '21:27:57'),
(135, 'goestoe', 'Menambah data Barang Jadi hasil produksi dengan nomor BHP 345 dan tanggal 15-03-2013', '2013-03-15', '00:06:16'),
(136, 'goestoe', 'Menambah data Barang Jadi hasil produksi dengan nomor BHP 324 dan tanggal 15-03-2013', '2013-03-15', '00:08:24'),
(137, 'goestoe', 'Mengubah data perusahaan', '2013-03-15', '16:15:45'),
(138, 'goestoe', 'Mengubah data perusahaan', '2013-03-17', '17:16:32'),
(139, 'admin', 'Menambah data transaksi pemasukan barang dengan nomor BPB: BPB-00000001 dan tanggal 17-03-2013', '2013-03-17', '19:12:20'),
(140, 'admin', 'Menambah data transaksi pemasukan barang dengan nomor BPB: BPB-00000001 dan tanggal 17-03-2013', '2013-03-17', '19:16:56'),
(141, 'admin', 'Menambah data transaksi pemasukan barang dengan nomor BPB: 201303170001 dan tanggal 17-03-2013', '2013-03-17', '19:32:29'),
(142, 'admin', 'Mengubah data perusahaan', '2013-03-17', '20:09:33'),
(143, 'admin', 'Mengubah data perusahaan', '2013-03-17', '20:09:44'),
(144, 'admin', 'Mengubah data perusahaan', '2013-03-17', '20:11:20'),
(145, 'admin', 'Mengubah data perusahaan', '2013-03-17', '20:11:30'),
(146, 'admin', 'Mengubah data perusahaan', '2013-03-17', '20:11:40'),
(147, 'admin', 'Mengubah data perusahaan', '2013-03-17', '20:11:51'),
(148, 'admin', 'Mengubah data perusahaan', '2013-03-17', '20:11:59'),
(149, 'admin', 'Menambah data transaksi pemasukan barang dengan nomor BPB: BPB-000001/EPSON/2013 dan tanggal 17-03-2013', '2013-03-17', '20:27:11'),
(150, 'admin', 'Menambah data transaksi pemasukan barang dengan nomor BPB: BPB-000001/EPSON/20130317 dan tanggal 17-03-2013', '2013-03-17', '20:29:11'),
(151, 'admin', 'Menambah data transaksi pemasukan barang dengan nomor BPB: BPB-0000012013/EPSON dan tanggal 17-03-2013', '2013-03-17', '20:36:20'),
(152, 'admin', 'Menambah data transaksi pemasukan barang dengan nomor BPB: BPB-2013000001 dan tanggal 17-03-2013', '2013-03-17', '20:41:10'),
(153, 'admin', 'Menambah data transaksi pemasukan barang dengan nomor BPB: 2013000001 dan tanggal 17-03-2013', '2013-03-17', '20:42:03'),
(154, 'admin', 'Menambah data transaksi pemasukan barang dengan nomor BPB: BPB-2013000001 dan tanggal 17-03-2013', '2013-03-17', '20:44:03'),
(155, 'admin', 'Menambah data transaksi pemasukan barang dengan nomor BPB: BPB-2013000001/EPSON dan tanggal 17-03-2013', '2013-03-17', '20:52:31'),
(156, 'admin', 'Menambah data transaksi pemasukan barang dengan nomor BPB: BPB-2013000002/EPSON dan tanggal 17-03-2013', '2013-03-17', '20:54:34'),
(157, 'admin', 'Menambah data transaksi pengeluaran barang nomor surat jalan: SJ-2013000001/EPSON dan tanggal 17-03-2013', '2013-03-17', '21:03:26'),
(158, 'admin', 'Menambah data transaksi incoming - outgoing nomor SPB: SPB-2013000001/INCOMING dan tanggal 17-03-2013', '2013-03-17', '21:07:40'),
(159, 'admin', 'Menambah data transaksi incoming-produksi dengan nomor SPB: SPB-2013000001/INCOMING dan tanggal 17-03-2013', '2013-03-17', '21:11:08'),
(160, 'admin', 'Menambah data transaksi produksi-incoming nomor SPB: SPB-2013000001/PRODUKSI dan tanggal 17-03-2013', '2013-03-17', '21:14:36'),
(161, 'admin', 'Menambah data transaksi pemasukan barang dengan nomor SPB: SPB-2013000001/PRODUKSI dan tanggal 17-03-2013', '2013-03-17', '21:16:56'),
(162, 'admin', 'Menambah data Barang Jadi hasil produksi dengan nomor BHP LP-2013000001/PRODUKSI dan tanggal 17-03-2013', '2013-03-17', '21:19:48'),
(163, 'admin', 'Menambah data transaksi outgoing-incoming nomor SPB: SPB-2013000001/OUTGOING dan tanggal 17-03-2013', '2013-03-17', '21:23:19'),
(164, 'admin', 'Menambah data transaksi outgoing-produksi nomor SPB: SPB-2013000001/OUTGOING dan tanggal 17-03-2013', '2013-03-17', '21:24:40'),
(165, 'admin', 'Menerima barang INCOMING dengan nomor LPB: LPB-2013000001/INCOMING dan tanggal 17-03-2013', '2013-03-17', '21:29:18'),
(166, 'admin', 'Menerima barang PRODUKSI dengan nomor LPB: LPB-2013000001/PRODUKSI dan tanggal 17-03-2013', '2013-03-17', '21:31:12'),
(167, 'admin', 'Menerima barang OUTGOING dengan nomor LPB: LPB-2013000001/OUTGOING dan tanggal 17-03-2013', '2013-03-17', '21:34:11'),
(168, 'admin', 'Menerima barang OUTGOING dengan nomor LPB: LPB-2013000002/OUTGOING dan tanggal 17-03-2013', '2013-03-17', '21:34:16'),
(169, 'admin', 'Menambah data adjustment dengan nomor ADJ-2013000001 tanggal 17-03-2013', '2013-03-17', '22:07:12'),
(170, 'goestoe', 'Mengubah data perusahaan', '2013-03-18', '08:23:09'),
(171, 'goestoe', 'Menambah data user dengan nama Exim dan userid exim', '2013-03-18', '08:26:27'),
(172, 'goestoe', 'Mengubah data barang dengan kode B00001 dan nama Sepatu', '2013-03-22', '07:35:49'),
(173, 'goestoe', 'Mengubah data barang dengan kode B00002 dan nama Celana Jeans', '2013-03-22', '07:36:04'),
(174, 'goestoe', 'Mengubah data barang dengan kode B00003 dan nama Kaos Oblong', '2013-03-22', '07:36:55'),
(175, 'goestoe', 'Mengubah data barang dengan kode B00003 dan nama Kaos Oblong', '2013-03-22', '07:37:41'),
(176, 'goestoe', 'Mengubah data barang dengan kode B00004 dan nama Kemeja', '2013-03-22', '07:37:50'),
(177, 'goestoe', 'Mengubah data barang dengan kode B00001 dan nama Sepatu Roda', '2013-03-22', '07:46:28'),
(178, 'goestoe', 'Menambah data barang dengan kode K00002 dan nama Sabun', '2013-03-22', '07:49:48'),
(179, 'goestoe', 'Menghapus data barang dengan kode: B00002', '2013-03-22', '07:50:22'),
(180, 'goestoe', 'Menambah data barang dengan kode K00003 dan nama Kemeja', '2013-03-22', '07:52:40'),
(181, 'goestoe', 'Menambah data transaksi pengeluaran barang nomor surat jalan: SJ-2013000002/DEMO dan tanggal 23-03-2013', '2013-03-23', '17:04:00'),
(182, 'goestoe', 'Menambah data transaksi pemasukan barang dengan nomor BPB: BPB-2013000003/DEMO dan tanggal 23-03-2013', '2013-03-23', '17:35:41'),
(183, 'goestoe', 'Menambah data pemasok/supplier dengan kode S0000003 dan nama PT Indonesia Epson Industry', '2013-03-23', '18:35:43'),
(184, 'goestoe', 'Mengubah data pemasok/supplier dengan kode: S0000003 dan nama PT Indonesia Epson Industry', '2013-03-23', '18:35:55'),
(185, 'goestoe', 'Menghapus data pemasok/supplier dengan kode: S0000003', '2013-03-23', '18:36:03'),
(186, 'goestoe', 'Mengubah data pemasok/supplier dengan kode: S00002 dan nama PT Kolang Kaling', '2013-03-23', '18:36:21'),
(187, 'goestoe', 'Menambah data PENERIMA dengan kode P0000002 dan nama PT Bersatu Kita Teguh', '2013-03-23', '18:37:33'),
(188, 'goestoe', 'Mengubah data PENERIMA dengan nama PT Bersatu Kita Teguh', '2013-03-23', '18:37:48'),
(189, 'goestoe', 'Menghapus data PENERIMA dengan kode:P0000002', '2013-03-23', '18:37:52'),
(190, 'goestoe', 'Menambah data transaksi pengeluaran barang nomor surat jalan: SJ-2013000003/DEMO dan tanggal 23-03-2013', '2013-03-23', '18:38:25'),
(191, 'goestoe', 'Mengubah data PENERIMA dengan nama PT Berlian Tahta', '2013-03-24', '14:41:36'),
(192, 'goestoe', 'Mengubah data PENERIMA dengan nama PT Berlian Tahta', '2013-03-24', '14:58:42'),
(193, 'goestoe', 'Menambah data PENERIMA dengan kode P0000002 dan nama PT Berlian Tahta Sejahtera', '2013-03-24', '15:00:09'),
(194, 'goestoe', 'Menghapus data PENERIMA dengan kode:P0000002', '2013-03-24', '15:00:48'),
(195, 'goestoe', 'Mengubah data PENERIMA dengan nama PT Berlian Tahta', '2013-03-24', '15:01:00'),
(196, 'goestoe', 'Mengubah data PENERIMA dengan nama PT Berlian Tahta', '2013-03-24', '15:01:13'),
(197, 'goestoe', 'Mengubah data pemasok/supplier dengan kode: S00001 dan nama PT LG Electronics Indonesia', '2013-03-24', '15:19:29'),
(198, 'goestoe', 'Mengubah data pemasok/supplier dengan kode: S00002 dan nama PT Kolang Kaling', '2013-03-24', '15:19:44'),
(199, 'goestoe', 'Menambah data transaksi pemasukan barang dengan nomor BPB: BPB-2013000004/DEMO dan tanggal 24-03-2013', '2013-03-24', '16:24:14'),
(200, 'goestoe', 'Menambah data transaksi pemasukan barang dengan nomor BPB: BPB-2013000005/DEMO dan tanggal 24-03-2013', '2013-03-24', '22:42:25'),
(201, 'goestoe', 'Menambah data transaksi pemasukan barang dengan nomor BPB: BPB-2013000006/DEMO dan tanggal 06-04-2013', '2013-04-06', '20:10:32'),
(202, 'admin', 'Mengubah data barang dengan kode B00008 dan nama Sisa Benang', '2013-04-13', '13:04:30'),
(203, 'admin', 'Mengubah data barang dengan kode B00001 dan nama Benang ', '2013-04-13', '13:11:57'),
(204, 'admin', 'Menambah data barang dengan kode B00009 dan nama Celana Panjang', '2013-04-13', '15:14:23'),
(205, 'admin', 'Menambah data Barang Jadi hasil produksi dengan nomor BHP LP-2013000002/PRODUKSI dan tanggal 13-04-2013', '2013-04-13', '15:15:05'),
(206, 'admin', 'Menambah data transaksi pemasukan barang dengan nomor SPB: SPB-2013000002/PROD-OUT dan tanggal 13-04-2013', '2013-04-13', '15:36:22'),
(207, 'admin', 'Menerima barang OUTGOING dengan nomor LPB: LPB-2013000003/OUTGOING dan tanggal 13-04-2013', '2013-04-13', '15:37:03'),
(208, 'admin', 'Menerima barang OUTGOING dengan nomor LPB: LPB-2013000004/OUTGOING dan tanggal 20-04-2013', '2013-04-20', '21:30:38'),
(209, 'admin', 'Menambah data transaksi pemasukan barang dengan nomor BPB: BPB-2013000001/DEMO dan tanggal 01-02-2013', '2013-04-21', '20:31:33'),
(210, 'admin', 'Menambah data transaksi pemasukan barang dengan nomor BPB: BPB-2013000001/DEMO dan tanggal 21-04-2013', '2013-04-21', '20:37:54'),
(211, 'admin', 'Menambah data transaksi pemasukan barang dengan nomor BPB: BPB-2013000001/DEMO dan tanggal 26-04-2013', '2013-04-26', '21:09:58'),
(212, 'admin', 'Menambah data transaksi incoming - outgoing nomor SPB: SPB-2013000002/INC-OUT dan tanggal 26-04-2013', '2013-04-26', '21:57:12'),
(213, 'admin', 'Menerima barang OUTGOING dengan nomor LPB: LPB-2013000005/OUTGOING dan tanggal 26-04-2013', '2013-04-26', '21:57:27'),
(214, 'admin', 'Menambah data transaksi pengeluaran barang nomor surat jalan: SJ-2013000001/DEMO dan tanggal 26-04-2013', '2013-04-26', '22:39:10'),
(215, 'admin', 'Menambah data transaksi pemasukan barang dengan nomor BPB: BPB-2013000002/DEMO dan tanggal 26-04-2013', '2013-04-26', '22:54:48'),
(216, 'admin', 'Menambah data transaksi incoming - outgoing nomor SPB: SPB-2013000003/INC-OUT dan tanggal 26-04-2013', '2013-04-26', '23:03:56'),
(217, 'admin', 'Menambah data transaksi incoming-produksi dengan nomor SPB: SPB-2013000002/INC-PROD dan tanggal 26-04-2013', '2013-04-26', '23:06:06'),
(218, 'admin', 'Menerima barang PRODUKSI dengan nomor LPB: LPB-2013000002/PRODUKSI dan tanggal 26-04-2013', '2013-04-26', '23:10:04'),
(219, 'goestoe', 'Menambah data transaksi pemasukan scrap dengan nomor Laporan Scrap: LS-2013000001/LAP-SCRAP dan tanggal 01-05-2013', '2013-05-01', '08:54:46'),
(220, 'goestoe', 'Menambah data transaksi pemasukan scrap dengan nomor Laporan Scrap: LS-2013000002/LAP-SCRAP dan tanggal 01-05-2013', '2013-05-01', '10:56:08'),
(221, 'goestoe', 'Menambah data adjustment dengan nomor ADJ-2013000002 tanggal 06-05-2013', '2013-05-06', '00:50:14'),
(222, 'goestoe', 'Menambah data user dengan nama Petugas Bea Cukai dan userid beacukai', '2013-05-07', '23:53:37'),
(223, 'goestoe', 'Menambah data transaksi pemasukan barang dengan nomor BPB: BPB-2013000003/DEMO dan tanggal 18-05-2013', '2013-05-18', '10:49:05'),
(224, 'goestoe', 'Menambah data Barang Jadi hasil produksi dengan nomor Laporan Produksi LP-2013000003/PRODUKSI dan tanggal 18-05-2013', '2013-05-18', '11:47:31'),
(225, 'goestoe', 'Menambah data Barang Jadi hasil produksi dengan nomor Laporan Produksi LP-2013000004/PRODUKSI dan tanggal 18-05-2013', '2013-05-18', '11:49:01'),
(226, 'goestoe', 'Menambah data Barang Jadi hasil produksi dengan nomor Laporan Produksi LP-2013000005/PRODUKSI dan tanggal 18-05-2013', '2013-05-18', '13:39:02'),
(227, 'goestoe', 'Menambah data pemakaian bahan baku/penolong dengan nomor Laporan Pemakaian Bahan: LB-2013000001/LAP-BAHAN dan tanggal 18-05-2013', '2013-05-18', '15:54:23'),
(228, 'goestoe', 'Menambah data transaksi pemasukan scrap dengan nomor Laporan Scrap: LS-2013000003/LAP-SCRAP dan tanggal 18-05-2013', '2013-05-18', '16:17:52'),
(229, 'goestoe', 'Menambah data pemakaian bahan baku/penolong dengan nomor Laporan Pemakaian Bahan: LB-2013000002/LAP-BAHAN dan tanggal 18-05-2013', '2013-05-18', '16:21:06'),
(230, 'goestoe', 'Menambah data pemakaian bahan baku/penolong dengan nomor Laporan Pemakaian Bahan: LB-2013000003/LAP-BAHAN dan tanggal 18-05-2013', '2013-05-18', '16:34:36'),
(231, 'goestoe', 'Menambah data pemakaian bahan baku/penolong dengan nomor Laporan Pemakaian Bahan: LB-2013000004/LAP-BAHAN dan tanggal 18-05-2013', '2013-05-18', '16:35:09'),
(232, 'goestoe', 'Menambah data pemakaian bahan baku/penolong dengan nomor Laporan Pemakaian Bahan: LB-2013000005/LAP-BAHAN dan tanggal 18-05-2013', '2013-05-18', '16:38:18'),
(233, 'goestoe', 'Menambah data dokumen BC 40 dengan nomor aju: BPB-2013000001/DEMO dan tanggal 30-05-2013', '2013-05-30', '21:20:44'),
(234, 'goestoe', 'Menambah data tujuan pengiriman dengan nama Tes', '2013-06-04', '15:54:38'),
(235, 'goestoe', 'Mengubah data tujuan pengiriman dengan kode:CAT-0008 dan nama Pemusnahan', '2013-06-04', '16:03:32'),
(236, 'goestoe', 'Mengubah data tujuan pengiriman dengan kode:CAT-0007 dan nama Pengembalian Pinjaman', '2013-06-04', '16:03:49'),
(237, 'goestoe', 'Mengubah data tujuan pengiriman dengan kode:CAT-0001 dan nama Pemasukan dari TPS; Impor Non PJT', '2013-06-04', '16:06:33'),
(238, 'goestoe', 'Mengubah data tujuan pengiriman dengan kode:CAT-0002 dan nama Pemasukan dari TPS; Impor melalui PJT', '2013-06-04', '16:07:01'),
(239, 'goestoe', 'Mengubah data tujuan pengiriman dengan kode:CAT-0003 dan nama Pemasukan dari Gudang Berikat', '2013-06-04', '16:07:23'),
(240, 'goestoe', 'Mengubah data tujuan pengiriman dengan kode:CAT-0004 dan nama Pemasukan dari PDKB lain', '2013-06-04', '16:07:42'),
(241, 'goestoe', 'Mengubah data tujuan pengiriman dengan kode:CAT-0005 dan nama Pemasukan dalam rangka subkontrak dari PDKB lain', '2013-06-04', '16:08:50'),
(242, 'goestoe', 'Mengubah data tujuan pengiriman dengan kode:CAT-0006 dan nama Pemasukan kembali dalam rangka subkontrak dari PDKB', '2013-06-04', '16:10:37'),
(243, 'goestoe', 'Mengubah data tujuan pengiriman dengan kode:CAT-0007 dan nama Pemasukan peminjaman Mesin/Reparasi dari KB', '2013-06-04', '16:12:05'),
(244, 'goestoe', 'Mengubah data tujuan pengiriman dengan kode:CAT-0001 dan nama BC 2.3 Impor SPPB-TPB', '2013-06-04', '16:14:14'),
(245, 'goestoe', 'Mengubah data tujuan pengiriman dengan kode:CAT-0002 dan nama BC 2.3 Impor SPPB-TPB Merah', '2013-06-04', '16:14:29'),
(246, 'goestoe', 'Mengubah data tujuan pengiriman dengan kode:CAT-0003 dan nama BC 2.3 Impor PJT', '2013-06-04', '16:14:48'),
(247, 'goestoe', 'Mengubah data tujuan pengiriman dengan kode:CAT-0004 dan nama Pemasukan dari Gudang Berikat', '2013-06-04', '16:15:00'),
(248, 'goestoe', 'Mengubah data tujuan pengiriman dengan kode:CAT-0005 dan nama Pemasukan dari PDKB lain', '2013-06-04', '16:15:11'),
(249, 'goestoe', 'Mengubah data tujuan pengiriman dengan kode:CAT-0006 dan nama Pemasukan dalam rangka subkontrak dari PDKB lain', '2013-06-04', '16:15:27'),
(250, 'goestoe', 'Mengubah data tujuan pengiriman dengan kode:CAT-0007 dan nama Pemasukan kembali dalam rangka subkontrak dari PDKB', '2013-06-04', '16:15:49'),
(251, 'goestoe', 'Mengubah data tujuan pengiriman dengan kode:CAT-0008 dan nama Pemasukan peminjaman Mesin/Reparasi dari KB', '2013-06-04', '16:16:20'),
(252, 'goestoe', 'Mengubah data tujuan pengiriman dengan kode:CAT-0009 dan nama Pemasukan kembali peminjaman/reparasi Mesin dari KB', '2013-06-04', '16:16:52'),
(253, 'goestoe', 'Menambah data tujuan pengiriman dengan nama Pemasukan kembali dalam rangka subkontrak dari TLDDP', '2013-06-04', '16:17:21'),
(254, 'goestoe', 'Menambah data tujuan pengiriman dengan nama Pemasukan kembali peminjaman/reparasi Mesin dari TLDDP', '2013-06-04', '16:18:06'),
(255, 'goestoe', 'Menambah data tujuan pengiriman dengan nama Pemasukan dalam rangka subkontrak dari TLDDP', '2013-06-04', '16:18:22'),
(256, 'goestoe', 'Menambah data tujuan pengiriman dengan nama Pemasukan dari TLDDP', '2013-06-04', '16:18:47'),
(257, 'goestoe', 'Menambah data tujuan pengiriman dengan nama Pemasukan Mesin dalam rangka peminjaman/sewa dari TLDDP', '2013-06-04', '16:19:16'),
(258, 'goestoe', 'Menambah data tujuan pengiriman dengan nama Pemasukan dari perusahaan fasilitas KITE', '2013-06-04', '16:19:59'),
(259, 'goestoe', 'Menambah data tujuan pengiriman dengan nama Ekspor Biasa', '2013-06-04', '16:23:45'),
(260, 'goestoe', 'Menambah data tujuan pengiriman dengan nama Ekspor kembali (re-ekspor)', '2013-06-04', '16:24:11'),
(261, 'goestoe', 'Menambah data tujuan pengiriman dengan nama Pengeluaran antar PDKB', '2013-06-04', '16:25:01'),
(262, 'goestoe', 'Menambah data tujuan pengiriman dengan nama Pengeluaran dalam rangka subkontrak ke KB', '2013-06-04', '16:29:23'),
(263, 'goestoe', 'Menambah data tujuan pengiriman dengan nama Pengeluarang barang hasil dalam rangka subkontrak ke KB', '2013-06-04', '16:29:55'),
(264, 'goestoe', 'Menambah data tujuan pengiriman dengan nama Pengeluaran peminjaman/reparasi mesin ke KB', '2013-06-04', '16:30:24'),
(265, 'goestoe', 'Menambah data tujuan pengiriman dengan nama Pengeluaran peminjaman/reparasi mesin untuk dikembalikan ke KB', '2013-06-04', '16:49:01'),
(266, 'goestoe', 'Menambah data tujuan pengiriman dengan nama Pengeluaran dalam rangka subkontrak ke TLDDP', '2013-06-04', '16:49:24'),
(267, 'goestoe', 'Menambah data tujuan pengiriman dengan nama Pengeluaran peminjaman/reparasi mesin ke TLDDP', '2013-06-04', '16:49:52'),
(268, 'goestoe', 'Menambah data tujuan pengiriman dengan nama Pengeluaran kembali dalam rangka subkontrak ke TLDDP', '2013-06-04', '16:50:17'),
(269, 'goestoe', 'Menambah data tujuan pengiriman dengan nama Pengeluaran kembali mesin setelah peminjaman/sewa ke TLDDP', '2013-06-04', '16:50:47'),
(270, 'goestoe', 'Menambah data tujuan pengiriman dengan nama Pengeluaran karena reject/salah kirim ke TLDDP', '2013-06-04', '16:51:15'),
(271, 'goestoe', 'Menambah data tujuan pengiriman dengan nama Pengeluaran untuk penjualan ke TLDDP (Ex Bahan baku 100% dari TLDDP)', '2013-06-04', '16:52:02'),
(272, 'goestoe', 'Menambah data tujuan pengiriman dengan nama Penjualan ke TLDDP', '2013-06-04', '16:52:22'),
(273, 'goestoe', 'Menambah data transaksi pemasukan barang dengan nomor BPB: BPB-2013000004/DEMO dan tanggal 04-06-2013', '2013-06-04', '21:38:50'),
(274, 'goestoe', 'Menambah data transaksi pengeluaran barang nomor surat jalan: SJ-2013000002/DEMO dan tanggal 04-06-2013', '2013-06-04', '21:58:25'),
(275, 'goestoe', 'Menambah data transaksi pengeluaran barang nomor surat jalan: SJ-2013000003/DEMO dan tanggal 04-06-2013', '2013-06-04', '22:00:28'),
(276, 'goestoe', 'Menambah data transaksi pemasukan barang dengan nomor BPB: BPB-2013000005/DEMO dan tanggal 06-06-2013', '2013-06-06', '13:45:16'),
(277, 'goestoe', 'Menambah data transaksi pengeluaran barang nomor surat jalan: SJ-2013000004/DEMO dan tanggal 07-06-2013', '2013-06-07', '00:28:08'),
(278, 'goestoe', 'Menambah data transaksi pemasukan barang dengan nomor BPB: BPB-2013000006/DEMO dan tanggal 07-06-2013', '2013-06-07', '19:30:20'),
(279, 'goestoe', 'Menambah data transaksi pemasukan barang dengan nomor BPB: BPB-2013000007/DEMO dan tanggal 07-06-2013', '2013-06-07', '19:30:54'),
(280, 'goestoe', 'Menambah data transaksi pemasukan barang dengan nomor BPB: BPB-2013000008/DEMO dan tanggal 07-06-2013', '2013-06-07', '19:33:29'),
(281, 'goestoe', 'Menambah data transaksi pemasukan barang dengan nomor BPB: BPB-2013000009/DEMO dan tanggal 07-06-2013', '2013-06-07', '19:34:10'),
(282, 'goestoe', 'Menambah data transaksi pemasukan barang dengan nomor BPB: BPB-2013000010/DEMO dan tanggal 07-06-2013', '2013-06-07', '19:34:52'),
(283, 'goestoe', 'Menambah data transaksi pemasukan barang dengan nomor BPB: BPB-2013000011/DEMO dan tanggal 07-06-2013', '2013-06-07', '19:35:31'),
(284, 'goestoe', 'Menambah data transaksi pemasukan barang dengan nomor BPB: BPB-2013000012/DEMO dan tanggal 07-06-2013', '2013-06-07', '19:36:25'),
(285, 'goestoe', 'Menambah data transaksi pemasukan barang dengan nomor BPB: BPB-2013000013/DEMO dan tanggal 07-06-2013', '2013-06-07', '19:37:01'),
(286, 'goestoe', 'Menambah data transaksi pemasukan barang dengan nomor BPB: BPB-2013000014/DEMO dan tanggal 07-06-2013', '2013-06-07', '19:37:34'),
(287, 'goestoe', 'Menambah data transaksi pemasukan barang dengan nomor BPB: BPB-2013000015/DEMO dan tanggal 07-06-2013', '2013-06-07', '19:38:23'),
(288, 'goestoe', 'Menambah data transaksi pemasukan barang dengan nomor BPB: BPB-2013000016/DEMO dan tanggal 08-06-2013', '2013-06-08', '08:39:43'),
(289, 'goestoe', 'Menambah data transaksi pengeluaran barang nomor surat jalan: SJ-2013000005/DEMO dan tanggal 08-06-2013', '2013-06-08', '09:06:46'),
(290, 'goestoe', 'Menambah data transaksi pemusnahan barang nomor surat transaksi: PEM-2013000001/DEMO dan tanggal 09-06-2013', '2013-06-09', '16:54:34'),
(291, 'goestoe', 'Menambah data tujuan pengiriman dengan nama Pengeluaran Ekspor melalui PJT', '2013-06-10', '16:29:03'),
(292, 'goestoe', 'Menambah data barang dengan kode 45678 dan nama Contoh dan Percobaan', '2013-06-10', '17:42:34'),
(293, 'goestoe', 'Menambah data transaksi pemasukan barang dengan nomor BPB: BPB-2013000017/DEMO dan tanggal 10-06-2013', '2013-06-10', '17:43:44'),
(294, 'goestoe', 'Menambah data transaksi incoming-produksi dengan nomor SPB: SPB-2013000003/INC-PROD dan tanggal 10-06-2013', '2013-06-10', '17:44:25'),
(295, 'goestoe', 'Menerima barang PRODUKSI dengan nomor LPB: LPB-2013000003/PRODUKSI dan tanggal 10-06-2013', '2013-06-10', '17:45:49'),
(296, 'goestoe', 'Menambah data barang dengan kode 7891234 dan nama Percobaan dan pengetesan', '2013-06-10', '17:48:12'),
(297, 'goestoe', 'Menambah data transaksi pemasukan barang dengan nomor BPB: BPB-2013000018/DEMO dan tanggal 10-06-2013', '2013-06-10', '17:49:17'),
(298, 'goestoe', 'Menambah data transaksi incoming-produksi dengan nomor SPB: SPB-2013000004/INC-PROD dan tanggal 10-06-2013', '2013-06-10', '17:50:11'),
(299, 'goestoe', 'Menerima barang PRODUKSI dengan nomor LPB: LPB-2013000004/PRODUKSI dan tanggal 10-06-2013', '2013-06-10', '17:50:35'),
(300, 'goestoe', 'Menambah data transaksi incoming-produksi dengan nomor SPB: SPB-2013000005/INC-PROD dan tanggal 10-06-2013', '2013-06-10', '19:26:44'),
(301, 'goestoe', 'Menerima barang PRODUKSI dengan nomor LPB: LPB-2013000005/PRODUKSI dan tanggal 10-06-2013', '2013-06-10', '19:26:56'),
(302, 'goestoe', 'Menambah data transaksi produksi-incoming nomor SPB: SPB-2013000002/PROD-INC dan tanggal 10-06-2013', '2013-06-10', '19:28:18'),
(303, 'goestoe', 'Menerima barang INCOMING dengan nomor LPB: LPB-2013000002/INCOMING dan tanggal 10-06-2013', '2013-06-10', '19:28:33'),
(304, 'goestoe', 'Menambah data barang dengan kode 99999 dan nama Coba terakhir', '2013-06-10', '19:40:03'),
(305, 'goestoe', 'Menambah data transaksi pemasukan barang dengan nomor BPB: BPB-2013000019/DEMO dan tanggal 10-06-2013', '2013-06-10', '19:41:31'),
(306, 'goestoe', 'Menambah data transaksi incoming-produksi dengan nomor SPB: SPB-2013000006/INC-PROD dan tanggal 10-06-2013', '2013-06-10', '19:42:30'),
(307, 'goestoe', 'Menerima barang PRODUKSI dengan nomor LPB: LPB-2013000006/PRODUKSI dan tanggal 10-06-2013', '2013-06-10', '19:42:45'),
(308, 'goestoe', 'Menambah data dokumen BC 40 dengan nomor aju: BPB-2013000002/DEMO dan tanggal 14-06-2013', '2013-06-14', '15:10:38'),
(309, 'goestoe', 'Mengubah data kemasan barang dengan jenis BU dan nama Butt Panjang', '2013-06-14', '17:47:04'),
(310, 'goestoe', 'Mengubah data kemasan barang dengan jenis BU dan nama Butt', '2013-06-14', '17:47:12'),
(311, 'goestoe', 'Menambah data kemasan barang dengan jenis VI dan nama Sasasa', '2013-06-14', '17:47:36'),
(312, 'goestoe', 'Menghapus data kemasan barang dengan id: 137', '2013-06-14', '17:49:21'),
(313, 'goestoe', 'Menambah data kemasan barang dengan jenis VI dan nama sadsa', '2013-06-14', '17:49:30'),
(314, 'goestoe', 'Menghapus data kemasan barang dengan id: 137', '2013-06-14', '17:49:39'),
(315, 'goestoe', 'Menambah data kemasan barang dengan jenis VL dan nama asdsaa', '2013-06-14', '17:49:49'),
(316, 'goestoe', 'Menambah data kemasan barang dengan jenis AE dan nama asdasd', '2013-06-14', '17:50:25'),
(317, 'goestoe', 'Menambah data kemasan barang dengan jenis VI dan nama dsad', '2013-06-14', '17:50:55'),
(318, 'goestoe', 'Menghapus data kemasan barang dengan id: 139', '2013-06-14', '17:52:11'),
(319, 'goestoe', 'Menghapus data kemasan barang dengan id: 138', '2013-06-14', '17:52:15'),
(320, 'goestoe', 'Menghapus data kemasan barang dengan id: 137', '2013-06-14', '17:52:20'),
(321, 'goestoe', 'Mengubah data barang dengan kode All ABS dan nama ABS HF 380 ,XG,EF,TR,DAF,HG,PC,SAM,PCL,AF', '2013-06-14', '20:23:45'),
(322, 'goestoe', 'Menambah data barang dengan kode 2343432 dan nama 234fefd', '2013-06-29', '00:16:53'),
(323, 'goestoe', 'Menambah data barang dengan kode 345345 dan nama 34534', '2013-06-29', '00:30:15'),
(324, 'goestoe', 'Menambah data barang dengan kode 6634534 dan nama 43', '2013-06-29', '01:06:31'),
(325, 'goestoe', 'Menambah data barang dengan kode 46456234 dan nama ewdgdfg', '2013-06-29', '01:07:04'),
(326, 'goestoe', 'Menambah data barang dengan kode 443 dan nama 34534', '2013-06-29', '01:13:17'),
(327, 'goestoe', 'Menambah data barang dengan kode 324 dan nama 324', '2013-06-29', '01:13:45'),
(328, 'goestoe', 'Menambah data barang dengan kode 65456 dan nama 456', '2013-06-29', '01:19:25'),
(329, 'goestoe', 'Menambah data barang dengan kode 5345345 dan nama 345345', '2013-06-29', '01:20:16'),
(330, 'goestoe', 'Menambah data barang dengan kode 1234325435 dan nama eert', '2013-06-29', '01:20:56'),
(331, 'goestoe', 'Menambah data barang dengan kode 67545345 dan nama fgfdg', '2013-06-29', '01:21:53'),
(332, 'goestoe', 'Menambah data barang dengan kode 6784535 dan nama fgdgdf', '2013-06-29', '01:22:40'),
(333, 'goestoe', 'Menambah data barang dengan kode fg43534 dan nama fdgdfg', '2013-06-29', '01:24:37'),
(334, 'goestoe', 'Menambah data barang dengan kode 4352344 dan nama drwerer', '2013-06-29', '01:25:36'),
(335, 'goestoe', 'Menambah data barang dengan kode 34535 dan nama ewrer', '2013-06-29', '01:26:08'),
(336, 'goestoe', 'Mengubah data barang dengan kode 34535 dan nama ewrer', '2013-06-29', '01:33:17'),
(337, 'goestoe', 'Mengubah data barang dengan kode 34535 dan nama ewrer', '2013-06-29', '01:36:01'),
(338, 'goestoe', 'Mengubah data barang dengan kode 4352344 dan nama drwerer', '2013-06-29', '01:50:16'),
(339, 'goestoe', 'Mengubah data barang dengan kode All ABS dan nama ABS HF 380 ,XG,EF,TR,DAF,HG,PC,SAM,PCL,AF', '2013-06-29', '20:39:02'),
(340, 'goestoe', 'Menambah data transaksi pemasukan barang dengan nomor SPB: SPB-2013000003/PROD-OUT dan tanggal 03-07-2013', '2013-07-03', '14:13:53'),
(341, 'goestoe', 'Menerima barang OUTGOING dengan nomor LPB: LPB-2013000006/OUTGOING dan tanggal 03-07-2013', '2013-07-03', '14:14:19');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(4) NOT NULL auto_increment,
  `userid` char(20) collate latin1_general_ci NOT NULL,
  `password` varchar(200) collate latin1_general_ci NOT NULL,
  `nm_user` varchar(100) collate latin1_general_ci NOT NULL,
  `level` enum('BeaCukai','Pemasukan','Produksi','Pengeluaran','Exim','Highest','Admin','SuperAdmin') collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=18 ;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `userid`, `password`, `nm_user`, `level`) VALUES
(13, 'goestoe', 'a23911453577f4ad228cc0bb4698eb37', 'Agustu Atihuta', 'SuperAdmin'),
(14, 'bayu', 'b0a9d75110b8ec5138271f78c8f899be', 'Bayu Hendra', 'SuperAdmin'),
(15, 'admin', '400fb4f0c52e7290305e00ab9e3df759', 'Administrator', 'Admin'),
(16, 'exim', 'b0a9d75110b8ec5138271f78c8f899be', 'Exim', 'Exim'),
(17, 'beacukai', '323cf753feb1956c5da5378a0a99d3e3', 'Petugas Bea Cukai', 'BeaCukai');
