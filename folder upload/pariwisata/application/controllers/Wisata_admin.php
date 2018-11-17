<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisata_admin extends CI_Controller {

	public function index()
	{
		$this->model_keamanan_admin->getkeamananadmin();
		$isi['content'] = 'admin/konten_wisata';
		$isi['judul'] = 'wisata';
		$isi['sub_judul'] = '';
		$isi['data']		= $this->db->query("SELECT * FROM wisata");

		$this->load->view('admin/tampilan_beranda_admin', $isi);
	}

  public function edit()
	{
		$this->model_keamanan_admin->getkeamananadmin();
		$isi['content'] 	= 'admin/edit_konten_wisata';
		$isi['judul']		= 'wisata';
		$isi['sub_judul']	= 'Edit Wisata';

		$key = $this->uri->segment(3);
		$this->db->where('id_wisata',$key);
		$query = $this->db->get('wisata');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row)
			{
        $isi['id_wisata'] = $row->id_wisata;
        		$isi['id_daerah'] = $row->id_daerah;
				$isi['tempat']	= $row->tempat;
				$isi['nama_wisata']	= $row->nama_wisata;
				$isi['lokasi']	= $row->lokasi;
				$isi['harga']	= $row->harga;
				$isi['deskripsi']	= $row->deskripsi;
				$isi['gambar']	= $row->gambar;
			}
		}
		else
		{
      $isi['id_wisata'] = '';
      			$isi['id_daerah'] = '';
				$isi['tempat']	= '';
				$isi['nama_wisata']	= '';
				$isi['lokasi']	= '';
				$isi['harga']	= '';
				$isi['deskripsi']	= '';
				$isi['gambar']	= '';
		}
		$this->load->view('admin/tampilan_beranda_admin',$isi);
	}

	public function simpan()
	{
		$this->model_keamanan_admin->getkeamananadmin();
		$key = $this->input->post('id_wisata');
		$data['id_wisata']		= $this->input->post('id_wisata');
		$data['id_daerah']		= $this->input->post('id_daerah');
		$data['tempat']				= $this->input->post('tempat');
		$data['nama_wisata']				= $this->input->post('nama_wisata');
		$data['lokasi']				= $this->input->post('lokasi');
		$data['harga']				= $this->input->post('harga');
		$data['deskripsi']				= $this->input->post('deskripsi');
		$data['gambar']				= $this->input->post('gambar');
		

		$this->load->model('model_update_wisata');
		$query = $this->model_update_wisata->getdata($key);
		if($query->num_rows()>0)
		{
			$this->model_update_wisata->getupdate($key,$data);
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
			$this->model_update_wisata->getinsert($data);
			$this->session->set_flashdata('info', '<div class="alert alert-block alert-success">
					<button type="button" class="close" data-dismiss="alert">
					<i class="icon-remove"></i>
					</button>
					<i class="icon-ok green"></i>
					<strong class="green">
					</strong>Data sukses di simpan </div>');
		}
		redirect('wisata/tambah');
	}
	public function tambah(){
		$this->model_keamanan_admin->getkeamananadmin();
		$isi['content'] 	= 'admin/tampilan_tambah_wisata';
		$isi['judul']		= 'wisata';
		$isi['sub_judul']	= 'Tambah Wisata';
		$isi['id_wisata']		= '';
		$isi['id_daerah']		= '';
		$isi['tempat']			= '';
		$isi['nama_wisata']			= '';
		$isi['lokasi']		= '';
		$isi['harga']	= '';
		$isi['deskripsi']	= '';
		$isi['gambar']	= '';
		$this->load->view('admin/tampilan_beranda_admin',$isi);
	}
	public function delete()
	{
		$this->model_keamanan_admin->getkeamananadmin();
		$this->load->model('model_update_wisata');

		$key = $this->uri->segment(3);
		$this->db->where('id_wisata',$key);
		$query = $this->db->get('wisata');
		if($query->num_rows()>0)
		{
			$this->model_update_wisata->getdelete($key);
		}
		redirect('wisata');
	}
}