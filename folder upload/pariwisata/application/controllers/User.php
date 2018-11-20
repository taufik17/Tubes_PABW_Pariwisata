<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function index()
	{
    $this->model_keamanan_user->getkeamananuser();
		$this->load->view('user/dashboard_user');
	}

  public function userlogin()
	{
		$output = array('error' => false);
		$u = $this->input->post('Email');
		$p = $this->input->post('password');
		$this->load->model('model_userlogin');
		$data = $this->model_userlogin->getlogin($u, $p);

		if($data){
			$this->session->set_userdata('Email', $data);
			$output['message'] = 'Masuk. Silahkan tunggu...';
		}
		else{
			$output['error'] = true;
			$output['message'] = 'Masuk gagal. Email atau password salah';
		}

		echo json_encode($output);
	}

  public function logout()
	{
		$this->session->sess_destroy();
		redirect('Beranda');
	}
}
