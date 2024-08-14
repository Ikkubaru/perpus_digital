<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pinjam extends CI_Controller {
    public function __construct(){
		parent::__construct();
		if($this->session->userdata('id_user')==NULL){
			redirect('Auth');
		}
	}
	public function index()
	{
		$this->db->from('peminjaman');
		$this->db->join('buku','peminjaman.id_buku = buku.id_buku');
		$this->db->join('user','peminjaman.id_user = user.id_user');
		$peminjaman = $this->db->get()->result_array();
		$data= array(
			'id_buku'				=> 'id_buku',
			'judul'					=> 'judul',
			'cover'					=> 'cover',
			'id_user'			=> 'id_user',
			'username'			=> 'username',
			'email'				=> 'email',
			'nama_lengkap'		=> 'nama_lengkap',
			'alamat'			=> 'alamat',
			'no_hp'				=> 'no_hp',
			'tgl_dipinjam'			=> 'tgl_dipinjam',
			'status'				=> 'status',
			'peminjaman' 	=> $peminjaman
		);
		
		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('layout/sidebar');
		$this->load->view('layout/js');
        $this->load->view('admin/peminjaman',$data);
	}
	public function simpan($id_user){
		$this->db->from('peminjaman')->where('id_user',$id_user);
		$borrow = $this->db->get()->row();

		$tgl_dipinjam = $this->input->post('tgl_dipinjam');
		$lama_meminjam = (int)$this->input->post('lama_meminjam');
		$date = new DateTime($tgl_dipinjam);
		$date->modify("+$lama_meminjam days");
		$tgl_dikembalikan = $date->format('Y-m-d');

		$data = array(
			'id_user'	=> $id_user,
			'id_buku'	=> $this->input->post('id_buku'),
			'tgl_dipinjam'		=> $this->input->post('tgl_dipinjam'),
			'tgl_dikembalikan'	=> $tgl_dikembalikan,
			'lama_meminjam'		=> $this->input->post('lama_meminjam'),
			'status'			=> $this->input->post('status'),
		);

		var_dump($data);
		die;
	}
}
