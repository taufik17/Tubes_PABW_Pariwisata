<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
	public function index()
	{
		$isi['tempat'] = $this->db->query("SELECT * FROM daerah");
		$isi['wisata'] = $this->db->query("SELECT * FROM wisata");
		$isi['testimoni'] = $this->db->query("SELECT * FROM testimoni");
		$isi['hotel'] = $this->db->query("SELECT * FROM hotel_favorit");
		$isi['kuliner'] = $this->db->query("SELECT * FROM kuliner_favorit");
		$this->load->view('web/tampilan_beranda', $isi);
	}
	
	public function cari()
	{
		$katakunci1 = $this->input->post('kategori');
		$katakunci2 = $this->input->post('lokasi');
		if ($katakunci1 == 'hotel') {
			$isi['hotel'] = $this->db->query("SELECT * FROM `$katakunci1` WHERE `id_daerah` = '$katakunci2'");
			$this->load->view('web/tampilan_pencarian_hotel', $isi);
		}
		elseif ($katakunci1 == 'wisata') {
			$isi['wisata'] = $this->db->query("SELECT * FROM `$katakunci1` WHERE `id_daerah` = '$katakunci2'");
			$this->load->view('web/tampilan_pencarian_wisata', $isi);
		}
	}
}
