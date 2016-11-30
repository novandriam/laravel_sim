<?php
include_once "library/inc.connection.php";
include_once "library/inc.library.php";
include_once "Spreadsheet/Excel/Writer.php";

if($_GET[module]=='simpan'){
   if($_POST[kode]<>null){
         $sql = mysql_query("insert into tbl_stockopname values('".InggrisTgl($_POST['cmbTglstock'])."','$_POST[no_surat_tugas]','".InggrisTgl($_POST['cmbTglsurat'])."','$_POST[petugas]', '$_POST[kode]','$_POST[saldo]', '$_POST[stockopname]','$_POST[selisih]')");
   }
}else if($_GET[module]=='excel'){
        $xls =& new Spreadsheet_Excel_Writer("stock_opname.xls");
        $sheet =& $xls->addWorksheet("Laporan stock opname");
        $sheet->write(0,0,"Tanggal");
        $sheet->write(0,1,"No Surat Tugas");
        $sheet->write(0,2,"Tanggal Surat Tugas");
        $sheet->write(0,3,"Operator");
        $sheet->write(0,4,"Kategori");
        $sheet->write(0,5,"Kode Barang");
        $sheet->write(0,6,"Nama Barang");
        $sheet->write(0,7,"Satuan");
        $sheet->write(0,8,"Jumlah Stok");
        $sheet->write(0,9,"Stock Opname");
        $sheet->write(0,10,"Selisih");
        $sheet->write(0,11,"Keterangan");
        $sql = mysql_query("select a.*,b.kategori,b.nama from tbl_stockopname a,tbl_databarang b
                           where a.kode_brg=b.kode and a.tgl_stockopname='$_POST[tgl]' and a.no_surat='$_POST[no_surat_tugas]'");
        $posisi = 1;
        while($rsql = mysql_fetch_array($sql)){
                 $sheet->write($posisi,0,$rsql[tgl_stockopname]);
                 $sheet->write($posisi,1,$rsql[no_surat]);
                 $sheet->write($posisi,2,$rsql[tgl_surat]);
                 $sheet->write($posisi,3,$rsql[operator]);
                 $sheet->write($posisi,4,$rsql[kategori]);
                 $sheet->write($posisi,5,$rsql[kode_brg]);
                 $sheet->write($posisi,6,$rsql[nama]);
                 $sheet->write($posisi,7,$rsql[satuan_brg]);
                 $sheet->write($posisi,8,$rsql[jumlah_brg]);
                 $sheet->write($posisi,9,$rsql[stock_opname]);
                 $sheet->write($posisi,10,$rsql[selisih]);
                 $sheet->write($posisi,11,"");
                 $posisi++;
        }
        $xls->close();
}
?>