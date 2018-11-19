<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends CI_Controller {
	public function index()
	{
		$isi['hotel'] = $this->db->query("SELECT * FROM hotel");
		$isi['tempat'] = $this->db->query("SELECT * FROM daerah");
		$hotel = $this->db->query("SELECT id_hotel FROM hotel");
		$this->load->view('web/tampilan_tentang', $isi);
	}

	public function pos()
	{
		$key = $this->uri->segment(3);
		$this->db->where('id_hotel',$key);
		$query = $this->db->get('hotel');
    if($query->num_rows()>0)
		{
			foreach ($query->result() as $row)
			{
				$isi['id_daerah']		= $row->id_daerah;
				$isi['id_hotel']   = $row->id_hotel;
				$isi['tempat']			= $row->tempat;
				$isi['nama_hotel'] = $row->nama_hotel;
				$isi['lokasi']      = $row->lokasi;
				$isi['harga']      = $row->harga;
        $isi['deskripsi']   = $row->deskripsi;
        $isi['gambar']      = $row->gambar;
				$isi['maps']      = $row->maps;
			}
		}
		else
		{
			$isi['id_daerah']		= '';
			$isi['id_hotel']			= '';
			$isi['tempat']			= '';
			$isi['nama_hotel']		= '';
			$isi['lokasi']	= '';
			$isi['harga']	= '';
      $isi['deskripsi']	= '';
      $isi['gambar']	= '';
			$isi['maps']	= '';
		}
		$this->load->view('web/tampilan_tentang',$isi);
	}
}
