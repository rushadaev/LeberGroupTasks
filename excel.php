<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'Ruslan');
$sheet->setCellValue('B1', 'Shadaev');
$sheet->setCellValue('C1', 'rushadaev@gmail.com');

$writer = new Xlsx($spreadsheet);
$writer->save('Profile.xlsx');

?>