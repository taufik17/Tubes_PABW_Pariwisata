<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berandauser extends CI_Controller {

	public function index()
	{
		//$this->model_keamanan_user->getkeamananuser();
		$isi['content'] = 'user/konten_beranda_user';
		$isi['judul'] = 'Dashboard';
		$isi['sub_judul'] = '';
		$isi['wisata'] = $this->db->query("SELECT id_wisata FROM wisata;")->num_rows();
		$isi['uname'] = $this->session->userdata;
		$this->load->view('user/tampilan_beranda_user', $isi);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('user');
	}


}
