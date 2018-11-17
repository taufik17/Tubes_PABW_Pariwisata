<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proses_login extends CI_Controller {

	public function index()
	{
		$this->load->view('tampilan_login');
	}

	public function adminlogin()
	{
		$u = $this->input->post('username');
		$p = $this->input->post('password');
		$this->load->model('model_adminlogin');
		$this->model_adminlogin->getlogin($u, $p);
	}
}
