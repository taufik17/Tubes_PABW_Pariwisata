<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimoni extends CI_Controller {

	public function index()
	{
		$this->model_keamanan_admin->getkeamananadmin();
		$isi['content'] = 'admin/konten_Testimoni';
		$isi['judul'] = 'Testimoni';
		$isi['sub_judul'] = '';
		$isi['data']		= $this->db->query("SELECT * FROM testimoni");

		$this->load->view('admin/tampilan_beranda_admin', $isi);
	}

  public function edit()
	{
		$this->model_keamanan_admin->getkeamananadmin();
		$isi['content'] 	= 'admin/edit_konten_Testimoni';
		$isi['judul']		= 'Testimoni';
		$isi['sub_judul']	= 'Edit Testimoni';

		$key = $this->uri->segment(3);
		$this->db->where('id_testimoni',$key);
		$query = $this->db->get('testimoni');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row)
			{
        $isi['id_testimoni'] = $row->id_testimoni;
				$isi['nama']	= $row->nama;
				$isi['text']	= $row->text;
				$isi['asal']	= $row->asal;
				$isi['foto']	= $row->foto;
			}
		}
		else
		{
      $isi['id_testimoni']	= '';
			$isi['nama']	= '';
			$isi['text']	= '';
			$isi['asal']	= '';
			$isi['foto']	= '';
		}
		$this->load->view('admin/tampilan_beranda_admin',$isi);
	}

	public function simpan()
	{
		$this->model_keamanan_admin->getkeamananadmin();
		$key = $this->input->post('id_testimoni');
		$data['id_testimoni']		= $this->input->post('id_testimoni');
		$data['nama']				= $this->input->post('nama');
		$data['asal']				= $this->input->post('asal');
		$data['text']				= $this->input->post('text');
		

		$this->load->model('model_update_testimoni');
		$query = $this->model_update_testimoni->getdata($key);
		if($query->num_rows()>0)
		{
			$this->model_update_testimoni->getupdate($key,$data);
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
			$this->model_update_testimoni->getinsert($data);
			$this->session->set_flashdata('info', '<div class="alert alert-block alert-success">
					<button type="button" class="close" data-dismiss="alert">
					<i class="icon-remove"></i>
					</button>
					<i class="icon-ok green"></i>
					<strong class="green">
					</strong>Data sukses di simpan </div>');
		}
		redirect('testimoni/tambah');
	}
	public function tambah(){
		$this->model_keamanan_admin->getkeamananadmin();
		$isi['content'] 	= 'admin/tampilan_tambah_testimoni';
		$isi['judul']		= 'Testimoni';
		$isi['sub_judul']	= 'Tambah Testimoni';
		$isi['id_testimoni']		= '';
		$isi['nama']			= '';
		$isi['text']			= '';
		$isi['asal']		= '';
		$isi['foto']	= '';
		$this->load->view('admin/tampilan_beranda_admin',$isi);
	}
	public function delete()
	{
		$this->model_keamanan_admin->getkeamananadmin();
		$this->load->model('model_update_testimoni');

		$key = $this->uri->segment(3);
		$this->db->where('id_testimoni',$key);
		$query = $this->db->get('testimoni');
		if($query->num_rows()>0)
		{
			$this->model_update_testimoni->getdelete($key);
		}
		redirect('testimoni');
	}
}