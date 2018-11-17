<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_update_testimoni extends CI_model {

	public function getdata($key)
	{
		$this->db->where('id_testimoni',$key);
		$hasil = $this->db->get('testimoni');
		return $hasil;
	}

	public function getupdate($key,$data)
	{
		$this->db->where('id_testimoni',$key);
		$this->db->update('testimoni',$data);
	}

	public function getinsert($data)
	{
		$this->db->insert('testimoni',$data);
	}
	public function getdelete($key)
	{
		$this->db->where('id_testimoni',$key);
		$this->db->delete('testimoni');
	}
}
