<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Dompdf\Dompdf;

class Laporan extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }
    public function Lpeminjaman() {
        $this->db->from('peminjaman');
        $this->db->join('buku','buku.id_buku=peminjaman.id_buku');
        $this->db->join('user','user.id_user=peminjaman.id_user');
        $peminjaman =$this->db->get()->result_array();
        $data = array(
        'judul'         => 'judul',
        'nama_lengkap'  => 'nama_lengkap',
        'email'         => 'email',
        'alamat'        =>  'alamat',
        'no_hp'         => 'no_hp',
        'tgl_dipinjam'  =>  'tgl_dipinjam',
        'tgl_dikembalikan'  =>  'tgl_dikembalikan',
        'peminjaman'    => $peminjaman
        );
        $html = $this->load->view('admin/laporan_pdf', $data, true);

        // Inisialisasi Dompdf
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // (Optional) Setup ukuran dan orientasi kertas
        $dompdf->setPaper('A4', 'landscape');

        // Render PDF
        $dompdf->render();

        // Output PDF ke browser
        $dompdf->stream("laporan_peminjaman.pdf", array("Attachment" => 0));
    }
    public function Lbuku(){

    }
    public function Luser(){
        
    }
}
