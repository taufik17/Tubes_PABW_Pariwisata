<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {

	public function index()
	{
		$this->model_keamanan_admin->getkeamananadmin();
		$isi['content'] = 'admin/konten_beranda_admin';
		$isi['judul'] = 'Dashboard';
		$isi['sub_judul'] = '';

		$this->load->view('admin/tampilan_beranda_admin', $isi);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('admin');
	}
}
