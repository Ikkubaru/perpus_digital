<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Laporan extends CI_Controller {
    public function index() {
        $this->db->from('peminjaman');
        $peminjaman = $this->db->get()->result_array();

        // Membuat objek spreadsheet baru
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Set header kolom
        $sheet->setCellValue('A1', 'No');
        $sheet->setCellValue('B1', 'Judul Buku');
        $sheet->setCellValue('C1', 'Nama Peminjam');

        // Mengisi data ke dalam Excel
        $row = 2;
        $no =1;
        foreach ($peminjaman as $pinjam) {
            $sheet->setCellValue('A' . $row, $no++);
            $sheet->setCellValue('B' . $row, $pinjam->id_user);
            $sheet->setCellValue('C' . $row, $pinjam->id_buku);
            $row++;
        }

        // Membuat file Excel
        $writer = new Xlsx($spreadsheet);
        $filename = 'Laporan_Peminjaman.xlsx';

        // Mengirim output ke browser
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');
        $writer->save('php://output');
        exit();
    }
}
