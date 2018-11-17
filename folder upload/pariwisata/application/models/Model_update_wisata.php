<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_update_wisata extends CI_model {

	public function getdata($key)
	{
		$this->db->where('id_wisata',$key);
		$hasil = $this->db->get('wisata');
		return $hasil;
	}

	public function getupdate($key,$data)
	{
		$this->db->where('id_wisata',$key);
		$this->db->update('wisata',$data);
	}

	public function getinsert($data)
	{
		$this->db->insert('wisata',$data);
	}
	public function getdelete($key)
	{
		$this->db->where('id_wisata',$key);
		$this->db->delete('wisata');
	}
}
