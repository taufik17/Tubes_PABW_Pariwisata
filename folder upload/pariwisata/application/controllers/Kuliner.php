<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kuliner extends CI_Controller {
	public function index()
	{
		$isi['kuliner'] = $this->db->query("SELECT * FROM kuliner");
		$isi['tempat'] = $this->db->query("SELECT * FROM daerah");
		$this->load->view('web/tampilan_kuliner', $isi);
	}

  public function pos()
	{
		$key = $this->uri->segment(3);
		$this->db->where('id_resto',$key);
		$query = $this->db->get('kuliner');
    if($query->num_rows()>0)
		{
			foreach ($query->result() as $row)
			{
				$isi['id_resto']		= $row->id_resto;
				$isi['id_daerah']   = $row->id_daerah;
				$isi['nam_resto']		= $row->nam_resto;
				$isi['lokasi']      = $row->lokasi;
        $isi['deskripsi']   = $row->deskripsi;
        $isi['gambar']      = $row->gambar;
			}
		}
		else
		{
			$isi['id_resto']		= '';
			$isi['id_daerah']			= '';
			$isi['nam_resto']			= '';
			$isi['lokasi']	= '';
      $isi['deskripsi']	= '';
      $isi['gambar']	= '';
		}
		$this->load->view('web/tampilan_postingan_kuliner',$isi);
	}
}
