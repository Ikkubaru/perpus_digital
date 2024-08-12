<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}
    public function register(){
		$this->load->view('register');
    }
	public function login(){
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		// $password = $this->input->post('password');
		$this->db->from('user')->where('username',$username);
		$query = $this->db->get()->row();
		if($query == NULL){
			$this->session->flashdata('<script>alert("Username tidak ditemukan")</script>');
			redirect('Auth');
		}elseif($query->password==$password){
			$data = array(
				'id_user'  		=> $query->id_user,
				'username'		=> $query->username,
				'email'			=> $query->email,
				'nama_lengkap'	=> $query->nama_lengkap,
				'alamat'		=> $query->alamat,
				'no_hp'			=> $query->no_hp,
				'level'			=> $query->level,
			);
			$this->session->set_userdata($data);
		}else{
			$this->session->set_flashdata('<script>alert("Password salah")</script>');
			redirect('Auth');
		}

		if ($this->session->userdata('level') == 'admin' || $this->session->userdata('level') == 'petugas') {
			redirect('Welcome');
		} elseif ($this->session->userdata('level') == 'user') {
			redirect('Home');
		} else {
			redirect('auth');
		}
		
	}
	public function logout(){
		$this->session->sess_destroy();
        redirect('home');
	}
	public function registerSave(){
		$data = array(
			'username'		=> $this->input->post('username'),
			'password'		=> md5($this->input->post('password')),
			'email'			=> $this->input->post('email'),
			'nama_lengkap'	=> $this->input->post('nama_lengkap'),
			'alamat'		=> $this->input->post('alamat'),
			'no_hp'			=> $this->input->post('no_hp'),
			'level'			=> $this->input->post('level'),
		);
		$this->db->insert('user',$data);
		redirect('auth');
	}
}
