<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Books extends CI_Controller {
    public function __construct(){
		parent::__construct();
		if($this->session->userdata('id_user')==NULL){
			redirect('Auth');
		}
	}
	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('layout/navbar');
		$this->load->view('layout/js');

        $this->db->from('buku');
        $book = $this->db->get()->result_array();
        $this->db->from('kategori');
        $categories = $this->db->get()->result_array();
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
        $this->db->from('buku');
		$this->load->view('admin/all_books',$data);
	}
    public function save(){
        $namafoto                       = date('YmdHis').'.png';
        $config['upload_path']          = 'assets/cover/';
        $config['max_size']             = 1024 * 1024;
        $config['file_name']            = $namafoto;
        $config['allowed_types']        = '*';
        $this->load->library('upload', $config);
        if($_FILES['cover']['size'] >= 1024 * 1024){
            $this->session->set_flashdata('alert', '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Ukuran foto terlalu besar</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>',);
        } elseif ( ! $this->upload->do_upload('cover')){
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = array('upload_data' => $this->upload->data());
        }

        $data = array(
            'judul'         => $this->input->post('judul'),
            'penulis'       => $this->input->post('penulis'),
            'tahun_terbit'  => $this->input->post('tahun_terbit'),
            'sinopsis'      => $this->input->post('sinopsis'),
            'cover'         => $namafoto,
            'available'     => $this->input->post('available'),
        );
        $this->db->insert('buku',$data);
        redirect('admin/books');
    }
    public function deleteBook($id_buku){
        $where = array(
            'id_buku'   => $id_buku
        );
        $this->db->delete('buku',$where);
        redirect('Admin/books');
    }
    public function editBook($id_buku){ 
        $this->db->from('buku')->where('id_buku',$id_buku);
        $book = $this->db->get()->row();
        $data = array(
            'id_buku'       => $id_buku,
            'judul'         => $book->judul,
            'penulis'       => $book->penulis,
            'tahun_terbit'  => $book->tahun_terbit,
            'sinopsis'      => $book->sinopsis,
            'cover'         => $book->cover,
            'available'     => $book->available,
            'book'          => $book
        );
        $this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('layout/navbar');
		$this->load->view('layout/js');
        $this->load->view('admin/editBook',$data);
    }
    public function updateBook($id_buku){
        $namafoto                       = date('YmdHis').'.png';
        $config['upload_path']          = 'assets/cover/';
        $config['max_size']             = 1024 * 1024;
        $config['file_name']            = $namafoto;
        $config['allowed_types']        = '*';
        $this->load->library('upload', $config);
        if($_FILES['cover']['size'] >= 1024 * 1024){
            $this->session->set_flashdata('alert', '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Ukuran foto terlalu besar</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>',);
        } elseif ( ! $this->upload->do_upload('cover')){
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = array('upload_data' => $this->upload->data());
        }

        if ($_FILES['cover']['size'] > 0) {
            if ($_FILES['cover']['size'] >= 1024 * 1024) {
                $this->session->set_flashdata('alert', '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Ukuran foto terlalu besar</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>');
            } elseif (! $this->upload->do_upload('cover')) {
                $error = array('error' => $this->upload->display_errors());
            } else {
                $data = array('upload_data' => $this->upload->data());
            }
        }

        $where = array('id_buku' => $id_buku);
        $book = $this->db->get_where('buku', array('id_buku' => $id_buku))->row();
        $previousCover = $book->cover;

        if ($_FILES['cover']['size'] > 0 && $this->upload->do_upload('cover')) {
            $cover = $namafoto;
        } else {
            $cover = $previousCover;
        }

        $data = array(
            'judul'         => $this->input->post('judul'),
            'penulis'       => $this->input->post('penulis'),
            'tahun_terbit'  => $this->input->post('tahun_terbit'),
            'available'     => $this->input->post('available'),
            'cover'         => $cover,
            'sinopsis'      => $this->input->post('sinopsis'),
        );
    $this->db->update('buku',$data,$where);
    redirect('admin/books');
    }
}
