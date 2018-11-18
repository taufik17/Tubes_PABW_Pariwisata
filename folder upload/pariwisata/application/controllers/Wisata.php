<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisata extends CI_Controller {
	public function index()
	{
		$isi['wisata'] = $this->db->query("SELECT * FROM wisata");
		$isi['tempat'] = $this->db->query("SELECT * FROM daerah");
		$hotel = $this->db->query("SELECT id_hotel FROM hotel");
		$this->load->view('web/tampilan_wisata', $isi);
	}

  public function pos()
	{
		$key = $this->uri->segment(3);
		$this->db->where('id_wisata',$key);
		$query = $this->db->get('wisata');
    if($query->num_rows()>0)
		{
			foreach ($query->result() as $row)
			{
				$isi['id_daerah']		= $row->id_daerah;
				$isi['id_wisata']   = $row->id_wisata;
				$isi['tempat']			= $row->tempat;
				$isi['nama_wisata'] = $row->nama_wisata;
				$isi['lokasi']      = $row->lokasi;
        $isi['deskripsi']   = $row->deskripsi;
        $isi['gambar']      = $row->gambar;
				$isi['maps']      = $row->maps;
			}
		}
		else
		{
			$isi['id_daerah']		= '';
			$isi['id_wisata']			= '';
			$isi['tempat']			= '';
			$isi['nama_wisata']		= '';
			$isi['lokasi']	= '';
      $isi['deskripsi']	= '';
      $isi['gambar']	= '';
			$isi['maps']	= '';
		}
		$this->load->view('web/tampilan_postingan_wisata',$isi);
	}
}
