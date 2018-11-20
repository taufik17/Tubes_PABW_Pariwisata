<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tidakditemukan extends CI_Controller {
	public function index()
	{
		$this->load->view('web/tidakditemukan');
	}
}
