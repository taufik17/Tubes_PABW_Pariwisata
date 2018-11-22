<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_update_wisata extends CI_model {

	public function getdata($key)
	{
		$this->db->where('id_wisata',$key);
		$hasil = $this->db->get('wisata');
		return $hasil;
	}
    public function dropdown(){
        $sql="select * from daerah";
        $res = $this->db->query($sql);
        $a = $res->row();

        foreach ($res->result() as $r){
            $a = new stdClass();

            $a->id = $r->id_daerah;
            $a->nama = $r->nama_daerah;

            $data[] = $a;
        }
        $s = $data;
        return $s;
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
