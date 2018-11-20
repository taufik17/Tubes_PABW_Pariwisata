<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_update_hotel extends CI_model {

	public function getdata($key)
	{
		$this->db->where('id_hotel',$key);
		$hasil = $this->db->get('hotel');
		return $hasil;
	}

	public function getupdate($key,$data)
	{
		$this->db->where('id_hotel',$key);
		$this->db->update('hotel',$data);
	}

	public function getinsert($data)
	{
		$this->db->insert('hotel',$data);
	}
	public function getdelete($key)
	{
		$this->db->where('id_hotel',$key);
		$this->db->delete('hotel');
	}
}
