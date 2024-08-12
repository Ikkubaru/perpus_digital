<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
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
        $this->db->from('kategori');
		$categories = $this->db->get()->result_array();
		$data = array(
			'nama_kategori'	=> 'nama_kategori',
			'categories'	=> $categories,
		);
		$this->load->view('layout/js');
		$this->load->view('admin/kategori', $data);
	}
	public function save(){
		$this->db->from('kategori');
		$categories = $this->db->get()->result_array();

		$data = array(
			'nama_kategori'	=> $this->input->post('nama_kategori'),
		);
		$this->db->insert('kategori',$data);
		redirect('admin/kategori');
	}
	public function delete($id_kategori){
		$where = array(
			'id_kategori'	=> $id_kategori,
		);
		$this->db->delete('kategori',$where);
		redirect('Admin/kategori');
	}
}
