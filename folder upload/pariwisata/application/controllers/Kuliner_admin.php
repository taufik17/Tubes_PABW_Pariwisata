<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kuliner_admin extends CI_Controller {

	public function index()
	{
		$this->model_keamanan_admin->getkeamananadmin();
		$isi['content'] = 'admin/konten_kuliner';
		$isi['judul'] = 'Kuliner';
		$isi['sub_judul'] = '';
		$isi['data']		= $this->db->query("SELECT * FROM kuliner");

		$this->load->view('admin/tampilan_beranda_admin', $isi);
	}

  public function edit()
	{
		$this->model_keamanan_admin->getkeamananadmin();
		$isi['content'] 	= 'admin/edit_konten_kuliner';
		$isi['judul']		= 'Kuliner';
		$isi['sub_judul']	= 'Edit Kuliner';

		$key = $this->uri->segment(3);
		$this->db->where('id_resto',$key);
		$query = $this->db->get('kuliner');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row)
			{
        		$isi['id_resto'] 	= $row->id_resto;
				$isi['id_daerah']	= $row->id_daerah;
				$isi['tempat']		= $row->tempat;
				$isi['nam_resto']	= $row->nam_resto;
				$isi['tempat']		= $row->tempat;
				$isi['lokasi']		= $row->lokasi;
				$isi['deskripsi']	= $row->deskripsi;
				$isi['gambar']		= $row->gambar;
			}
		}
		else
		{
      			$isi['id_resto'] 	= '';
				$isi['id_daerah']	= '';
				$isi['tempat']		= '';
				$isi['nam_resto']	= '';
				$isi['tempat']		= '';
				$isi['lokasi']		= '';
				$isi['deskripsi']	= '';
				$isi['gambar']		= '';
		}
		$this->load->view('admin/tampilan_beranda_admin',$isi);
	}

	public function simpan()
	{
		$this->model_keamanan_admin->getkeamananadmin();
		$key = $this->input->post('id_resto');
		$data['id_resto']			= $this->input->post('id_resto');
		$data['tempat']				= $this->input->post('tempat');
		$data['nam_resto']			= $this->input->post('nam_resto');
		$data['tempat']				= $this->input->post('tempat');
		$data['lokasi']				= $this->input->post('lokasi');
		$data['deskripsi']			= $this->input->post('deskripsi');
		$data['gambar']				= $this->input->post('gambar');
		

		$this->load->model('model_update_hotel');
		$query = $this->model_update_kuliner->getdata($key);
		if($query->num_rows()>0)
		{
			$this->model_update_kuliner->getupdate($key,$data);
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
			$this->model_update_kuliner->getinsert($data);
			$this->session->set_flashdata('info', '<div class="alert alert-block alert-success">
					<button type="button" class="close" data-dismiss="alert">
					<i class="icon-remove"></i>
					</button>
					<i class="icon-ok green"></i>
					<strong class="green">
					</strong>Data sukses di simpan </div>');
		}
		redirect('Kuliner_admin/tambah');
	}
	public function tambah(){
		$this->model_keamanan_admin->getkeamananadmin();
		$isi['content'] 		= 'admin/tampilan_tambah_kuliner';
		$isi['judul']			= 'Kuliner';
		$isi['sub_judul']		= 'Tambah kuliner';
		$isi['id_resto']	= '';
		$isi['id_daerah']			= '';
		$isi['nam_resto']			= '';
		$isi['tempat']			= '';
		$isi['lokasi']			= '';
		$isi['deskripsi']			= '';
		$isi['gambar']			= '';
		$this->load->view('admin/tampilan_beranda_admin',$isi);
	}
	public function delete()
	{
		$this->model_keamanan_admin->getkeamananadmin();
		$this->load->model('model_update_kuliner');

		$key = $this->uri->segment(3);
		$this->db->where('id_resto',$key);
		$query = $this->db->get('kuliner');
		if($query->num_rows()>0)
		{
			$this->model_update_hotel->getdelete($key);
		}
		redirect('Kuliner_admin');
	}
}