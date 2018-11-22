<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proses_login extends CI_Controller {

	public function index()
	{

	}

	public function adminlogin()
	{
		$u = $this->input->post('username');
		$p = $this->input->post('password');
		$this->load->model('model_adminlogin');
		$this->model_adminlogin->getlogin($u, $p);
	}

	public function userlogin()
    {
        $u = $this->input->post('Email');
        $p = $this->input->post('password');
        $this->load->model('model_userlogin');
        $this->model_userlogin->getlogin($u, $p);

    }
}
