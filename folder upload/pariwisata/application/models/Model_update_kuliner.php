<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_update_kuliner extends CI_model {

	public function getdata($key)
	{
		$this->db->where('id_resto',$key);
		$hasil = $this->db->get('kuliner');
		return $hasil;
	}

	public function getupdate($key,$data)
	{
		$this->db->where('id_resto',$key);
		$this->db->update('kuliner',$data);
	}

	public function getinsert($data)
	{
		$this->db->insert('kuliner',$data);
	}
	public function getdelete($key)
	{
		$this->db->where('id_resto',$key);
		$this->db->delete('kuliner');
	}
}
