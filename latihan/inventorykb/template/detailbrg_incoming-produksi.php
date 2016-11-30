<?php
/** Error reporting */
error_reporting(E_ALL);
 
/** Include path **/
ini_set('include_path', ini_get('include_path').';../Classes/');
 
/** PHPExcel */
include 'PHPExcel.php';
 
/** PHPExcel_Writer_Excel2007 */
include 'PHPExcel/Writer/Excel2007.php';
 
$excel = new PHPExcel();
$excel->setActiveSheetIndex(0);
$worksheet = $excel->getActiveSheet();
 
$worksheet->SetCellValue('A1', 'id');
$worksheet->SetCellValue('B1', 'kode');
$worksheet->SetCellValue('C1', 'jumlah');
$worksheet->SetCellValue('D1', 'ket');

$objWriter = PHPExcel_IOFactory::createWriter($excel, 'Excel5');
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="template_incoming-produksi"'.date("dmyHis").'".xls"');
header('Cache-Control: max-age=0');
$objWriter->save('php://output');
$excel->disconnectWorksheets();
unset($excel);
 
?>