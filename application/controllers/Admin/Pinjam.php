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
		$this->db->from('peminjaman')->where('status','0');
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
	public function simpan($id_buku){
		$this->db->from('peminjaman')->where('id_buku',$id_buku);
		$borrow = $this->db->get()->result_array();

		$data = array(
			'id_buku'			=> $id_buku,
			'tgl_dikembalikan'	=> $this->input->post('tgl_dikembalikan'),
			'status'			=> $this->input->post('status'),
		);
		$where = array('id_buku' => $id_buku);
		$this->db->update('peminjaman',$data, $where);
		redirect('Admin/pinjam');
	}
	public function onGoing(){
		$this->db->from('peminjaman')->where('status','disetujui');
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
        $this->load->view('admin/ongoing',$data);
	}
	public function returnBook($id_buku){
		$data = array(	
			'tgl_dikembalikan'	=> $this->input->post('tgl_dikembalikan'),
		);
		$where = array('id_buku'	=> $id_buku);
		// $this->db->update($data, $where);
		redirect('Admin/pinjam/ongoing');
	}
	public function canceled(){
		$this->db->from('peminjaman')->where('status','disetujui');
		$this->db->join('buku','peminjaman.id_buku = buku.id_buku');
		$this->db->join('user','peminjaman.id_user = user.id_user');
		$cancel = $this->db->get()->result_array();
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
			'cancel' 	=> $cancel
		);
		
		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('layout/sidebar');
		$this->load->view('layout/js');
        $this->load->view('admin/canceled',$data);
	}
}
