<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {
    
	public function index($id_buku)
	{
        $this->db->from('buku')->where('id_buku',$id_buku);
        $book = $this->db->get()->row();
        $this->db->from('kategori');
        $categories = $this->db->get()->result_array();

        $user_id = $this->session->userdata('id_user');
        $this->db->from('peminjaman');
        $query = $this->db->query("SELECT SUM(status = 'disetujui') AS jumlah_disetujui FROM peminjaman WHERE id_user = ?", array($user_id));
        $result = $query->row();
        $jumlah_pinjaman = $result->jumlah_disetujui;

        $data = array(
            'id_buku'       => $id_buku,
            'judul'         => $book->judul,
            'penulis'       => $book->penulis,
            'tahun_terbit'  => $book->tahun_terbit,
            'sinopsis'      => $book->sinopsis,
            'cover'         => $book->cover,
            'available'     => $book->available,
            'book'          => $book,
            'categories'    => $categories,
            'limit'         => $jumlah_pinjaman
        );
		$this->load->view('bookDetail',$data);
	}
	public function logout(){
		$this->session->sess_destroy();
        redirect('home');
	}
}
