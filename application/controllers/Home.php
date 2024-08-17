<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	// guest can see homepage
	public function index()
	{
		$this->db->from('buku')->where('available >','0');
        $book = $this->db->get()->result_array();
        $this->db->from('kategori');
        $categories = $this->db->get()->result_array();
        $this->db->from('peminjaman');
        $pinjam = $this->db->get()->result_array();

        $data = array(
            'id_buku'       => 'id_buku',
            'judul'         => 'judul',
            'penulis'       => 'penulis',
            'tahun_terbit'  => 'tahun_terbit',
            'sinopsis'      => 'sinopsis',
            'cover'         => 'cover',
            'available'     => 'available',
            'book'          => $book,
            'categories'    => $categories,
        );
		$this->load->view('homepage',$data);
	}
    public function pinjam($id_user){
        $data = array(
            'id_user'   => $id_user,
            'id_buku'   => $id_buku = $this->input->post('id_buku'),
            'tgl_dipinjam'    => $this->input->post('tgl_dipinjam'),
            'lama_meminjam'   => $this->input->post('lama_meminjam'),
        );
        $this->db->insert('peminjaman',$data);
        $this->db->from('buku')->where('id_buku',$id_buku);
        $stok = $this->db->get()->row()->available;
        if($stok > 0){
            $this->db->set('available', 'available -1', FALSE);
            $this->db->where('id_buku', $id_buku);
            $this->db->update('buku');
            redirect('home');
            return true;
        }else{
            return false;
        }
    }
    public function book(){
        if($this->session->userdata('id_user')==NULL){
			redirect('Auth');
		}
        $id_user = $this->session->userdata('id_user');
        $this->db->from('peminjaman')->where('id_user',$id_user);
        $this->db->join('buku','buku.id_buku=peminjaman.id_buku');
        $book = $this->db->get()->result_array();

        $data = array(
            'judul'     => 'judul',
            'cover'     => 'cover',
            'book'      => $book
        );
        $this->load->view('koleksi',$data);
    }
	public function logout(){
		$this->session->sess_destroy();
        redirect('home');
	}
}
