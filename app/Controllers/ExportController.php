<?php

namespace App\Controllers;

use App\Models\KeluhanModel;
use App\Models\FormModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ExportController extends BaseController
{
    public function export()
    {
        $keluhanModel = new KeluhanModel();
        $keluhan = $keluhanModel->findAll();

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue('A1', 'Nama Lengkap');
        $sheet->setCellValue('B1', 'Email');
        $sheet->setCellValue('C1', 'NO. WhatsApp');
        $sheet->setCellValue('D1', 'Jenis Keluhan');
        $sheet->setCellValue('E1', 'Rincian');
        $sheet->setCellValue('F1', 'Tanggapan');
        $sheet->setCellValue('G1', 'Status');


        $row = 2;
        foreach ($keluhan as $item) {
            $sheet->setCellValue('A' . $row, $item['nama_lengkap']);
            $sheet->setCellValue('B' . $row, $item['email']);
            $sheet->setCellValue('C' . $row, $item['nomor_wa']);
            $sheet->setCellValue('D' . $row, $item['jenis_keluhan']);
            $sheet->setCellValue('E' . $row, $item['rincian']);
            $sheet->setCellValue('F' . $row, $item['tanggapan']);
            $sheet->setCellValue('G' . $row, $item['status']);
            $row++;
        }

        $filename = 'Data Keluhan' . '_' . date('dmY') . '.xlsx';
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');

        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');
        exit;
    }
}
