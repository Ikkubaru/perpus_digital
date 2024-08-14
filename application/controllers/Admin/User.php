<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct(){
		parent::__construct();
		if($this->session->userdata('id_user')==NULL){
			redirect('Auth');
		}
	}
	public function index()
	{
        $this->db->from('user')->where('level','user');
        $peminjam = $this->db->get()->result_array();
        $data = array(
            'id_user'       => 'id_user',
            'username'      => 'username',
            'email'         => 'email',
            'nama_lengkap'  => 'nama_lengkap',
            'alamat'        => 'alamat',
            'no_hp'         => 'no_hp',
            'peminjam'      => $peminjam,
        );

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('layout/navbar');
		$this->load->view('admin/user_index',$data);
        $this->load->view('layout/js');
	}

	public function petugas(){
        $this->db->from('user')->where('level','petugas');
        $officer = $this->db->get()->result_array();
        $data = array(
            'id_user'       => 'id_user',
            'username'      => 'username',
            'email'         => 'email',
            'nama_lengkap'  => 'nama_lengkap',
            'alamat'        => 'alamat',
            'no_hp'         => 'no_hp',
            'officer'       => $officer,
        );
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('layout/navbar');
		$this->load->view('admin/petugas_index',$data);
        $this->load->view('layout/js');
	}
	public function admin(){
        $this->db->from('user')->where('level','admin');
        $admint = $this->db->get()->result_array();
        $data = array(
            'username'      => 'username',
            'email'         => 'email',
            'nama_lengkap'  => 'nama_lengkap',
            'alamat'        => 'alamat',
            'no_hp'         => 'no_hp',
            'admint'        => $admint,
        );
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('layout/navbar');
		$this->load->view('admin/admin_index',$data);
        $this->load->view('layout/js');
	}
    public function profile(){
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('layout/navbar');
		$this->load->view('admin/userProfile');
        $this->load->view('layout/js');
    }
    public function tambahUser(){
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('layout/navbar');
		$this->load->view('admin/tambahUser');
        $this->load->view('layout/js');
    }
    public function userSimpan(){
        $data = array(
            'username'      => $this->input->post('username'),
            'password'      => md5($this->input->post('password')),
            'email'         => $this->input->post('email'),
            'nama_lengkap'  => $this->input->post('nama_lengkap'),
            'alamat'        => $this->input->post('alamat'),
            'no_hp'         => $this->input->post('no_hp'),
            'level'         => $this->input->post('level'),
        );
        $this->db->insert('user',$data);
        redirect('admin/user');
    }
    public function tambahPetugas(){
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('layout/navbar');
		$this->load->view('admin/tambahpetugas');
        $this->load->view('layout/js');
    }
    public function petugasSimpan(){
        $data = array(
            'username'      => $this->input->post('username'),
            'password'      => md5($this->input->post('password')),
            'email'         => $this->input->post('email'),
            'nama_lengkap'  => $this->input->post('nama_lengkap'),
            'alamat'        => $this->input->post('alamat'),
            'no_hp'         => $this->input->post('no_hp'),
            'level'         => $this->input->post('level'),
        );
        $this->db->insert('user',$data);
        redirect('admin/user/petugas');
    }
    public function editUser($id_user){
        $this->db->from('user')->where('id_user',$id_user);
        $user = $this->db->get()->row();

        $data = array(
            'id_user'       => $id_user,
            'username'      => $user->username,
            'email'         => $user->email,
            'nama_lengkap'  => $user->nama_lengkap,
            'alamat'        => $user->alamat,
            'no_hp'         => $user->no_hp,
            'level'         => $user->level,
        );
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('layout/navbar');
		$this->load->view('admin/editUser',$data);
        $this->load->view('layout/js');
    }
    public function updateUser($id_user){
        $data = array(
            'id_user'       => $id_user,
            'username'      => $this->input->post('username'),
            'email'         => $this->input->post('email'),
            'nama_lengkap'  => $this->input->post('nama_lengkap'),
            'alamat'        => $this->input->post('alamat'),
            'no_hp'         => $this->input->post('no_hp'),
        );
        $where = array('id_user' => $id_user);
        $this->db->update('user',$data, $where);
        redirect('Admin/user/');
    }
    public function editPetugas($id_user){
        $this->db->from('user')->where('id_user',$id_user);
        $petugas = $this->db->get()->row();
        $data = array(
            'id_user'       => $id_user,
            'username'      => $petugas->username,
            'email'         => $petugas->email,
            'nama_lengkap'  => $petugas->nama_lengkap,
            'alamat'        => $petugas->alamat,
            'no_hp'         => $petugas->no_hp,
            'level'         => $petugas->level,
        );
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('layout/navbar');
		$this->load->view('admin/editPetugas',$data);
        $this->load->view('layout/js');
    }
    public function updatePetugas($id_user){
        $data = array(
            'id_user'       => $id_user,
            'username'      => $this->input->post('username'),
            'email'         => $this->input->post('email'),
            'nama_lengkap'  => $this->input->post('nama_lengkap'),
            'alamat'        => $this->input->post('alamat'),
            'no_hp'         => $this->input->post('no_hp'),
        );
        $where = array('id_user'    => $id_user);
        $this->db->update('user',$data,$where);
        redirect('Admin/user/petugas');
    }
    public function deleteUser($id_user){
        $where = array(
            'id_user'   => $id_user
        );
        $this->db->delete('user',$where);
        redirect('Admin/user');
    }
    public function deletePetugas($id_user){
        $where = array(
            'id_user'   => $id_user
        );
        $this->db->delete('user',$where);
        redirect('Admin/user/petugas');
    }
    public function tambahAdmin(){
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('layout/navbar');
		$this->load->view('admin/tambahAdmin');
        $this->load->view('layout/js');
    }
    public function adminSimpan(){
        $data = array(
            'username'      => $this->input->post('username'),
            'password'      => md5($this->input->post('password')),
            'email'         => $this->input->post('email'),
            'nama_lengkap'  => $this->input->post('nama_lengkap'),
            'alamat'        => $this->input->post('alamat'),
            'no_hp'         => $this->input->post('no_hp'),
            'level'         => $this->input->post('level'),
        );
        $this->db->insert('user',$data);
        redirect('Admin/user/admin');
    }
    public function deleteAdmin(){
        
    }
    public function editAdmin(){

    }
}
