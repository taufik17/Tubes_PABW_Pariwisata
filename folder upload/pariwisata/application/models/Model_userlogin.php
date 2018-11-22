<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_userlogin extends CI_model {

	public function getlogin($u,$p)
	{
		$pwd = md5($p);
		$this->db->where('uname',$u);
		$this->db->where('pass',$pwd);
		$query = $this->db->get('member');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row)
			{
				$sess = array('uname'	=> $row->uname,
							  'pass'	=> $row->pass);
				$this->session->set_userdata($sess);
				redirect('Berandauser');


			}
		}
		else
		{
			$this->session->set_flashdata('info',
					'<div class="alert alert-block alert-dismiss">
					<button type="button" class="close" data-dismiss="alert">
					<i class="icon-remove"></i>
					</button>
					<i class="icon-ban-circle red"></i>
					<strong class="red">
					</strong>Maaf Pengguna atau Sandi salah </div>');
			redirect('user');
		}
	}
}
