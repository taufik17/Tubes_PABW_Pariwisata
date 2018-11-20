<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotel_admin extends CI_Controller {

	public function index()
	{
		$this->model_keamanan_admin->getkeamananadmin();
		$isi['content'] = 'admin/konten_Hotel';
		$isi['judul'] = 'Hotel';
		$isi['sub_judul'] = '';
		$isi['data']		= $this->db->query("SELECT * FROM hotel");

		$this->load->view('admin/tampilan_beranda_admin', $isi);
	}

  public function edit()
	{
		$this->model_keamanan_admin->getkeamananadmin();
		$isi['content'] 	= 'admin/edit_konten_hotel';
		$isi['judul']		= 'Hotel';
		$isi['sub_judul']	= 'Edit hotel';

		$key = $this->uri->segment(3);
		$this->db->where('id_hotel',$key);
		$query = $this->db->get('hotel');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row)
			{
        		$isi['id_hotel'] 	= $row->id_hotel;
				$isi['id_daerah']	= $row->id_daerah;
				$isi['tempat']		= $row->tempat;
				$isi['nama_hotel']	= $row->nama_hotel;
				$isi['lokasi']		= $row->lokasi;
				$isi['harga']		= $row->harga;
				$isi['deskripsi']	= $row->deskripsi;
				$isi['gambar']		= $row->gambar;
			}
		}
		else
		{
      			$isi['id_hotel'] 	= '';
				$isi['id_daerah']	= '';
				$isi['tempat']		= '';
				$isi['nama_hotel']	= '';
				$isi['lokasi']		= '';
				$isi['harga']		= '';
				$isi['deskripsi']	= '';
				$isi['gambar']		= '';
		}
		$this->load->view('admin/tampilan_beranda_admin',$isi);
	}

	public function simpan()
	{
		$this->model_keamanan_admin->getkeamananadmin();
		$key = $this->input->post('id_hotel');
		$data['id_hotel']			= $this->input->post('id_hotel');
		$data['tempat']				= $this->input->post('tempat');
		$data['nama_hotel']			= $this->input->post('nama_hotel');
		$data['lokasi']				= $this->input->post('lokasi');
		$data['harga']				= $this->input->post('harga');
		$data['deskripsi']			= $this->input->post('deskripsi');
		$data['gambar']				= $this->input->post('gambar');
		

		$this->load->model('model_update_hotel');
		$query = $this->model_update_hotel->getdata($key);
		if($query->num_rows()>0)
		{
			$this->model_update_hotel->getupdate($key,$data);
			$this->session->set_flashdata('info', '<div class="alert alert-block alert-success">
					<button type="button" class="close" data-dismiss="alert">
					<i class="icon-remove"></i>
					</button>
					<i class="icon-ok green"></i>
					<strong class="green">
					</strong>Data sukses diupdate </div>');
		}
		else
		{
			$this->model_update_hotel->getinsert($data);
			$this->session->set_flashdata('info', '<div class="alert alert-block alert-success">
					<button type="button" class="close" data-dismiss="alert">
					<i class="icon-remove"></i>
					</button>
					<i class="icon-ok green"></i>
					<strong class="green">
					</strong>Data sukses di simpan </div>');
		}
		redirect('Hotel_admin/tambah');
	}
	public function tambah(){
		$this->model_keamanan_admin->getkeamananadmin();
		$isi['content'] 		= 'admin/tampilan_tambah_hotel';
		$isi['judul']			= 'Hotel';
		$isi['sub_judul']		= 'Tambah hotel';
		$isi['id_hotel']	= '';
		$isi['id_daerah']			= '';
		$isi['tempat']			= '';
		$isi['nama_hotel']			= '';
		$isi['lokasi']			= '';
		$isi['harga']			= '';
		$isi['deskripsi']			= '';
		$isi['gambar']			= '';
		$this->load->view('admin/tampilan_beranda_admin',$isi);
	}
	public function delete()
	{
		$this->model_keamanan_admin->getkeamananadmin();
		$this->load->model('model_update_hotel');

		$key = $this->uri->segment(3);
		$this->db->where('id_hotel',$key);
		$query = $this->db->get('hotel');
		if($query->num_rows()>0)
		{
			$this->model_update_hotel->getdelete($key);
		}
		redirect('hotel_admin');
	}
}