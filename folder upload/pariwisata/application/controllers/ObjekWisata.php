<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ObjekWisata extends CI_Controller {

	public function index()
	{
		//$this->model_keamanan_user->getkeamananuser();
		$isi['content'] = 'user/konten_wisata';
		$isi['judul'] = 'wisata';
		$isi['sub_judul'] = '';
		$isi['data']		= $this->db->query("SELECT * FROM  wisata where uname='uname'");
		//$this->load->model('model_update_wisata');

		$this->load->view('user/tampilan_beranda_user', $isi);
        //$this->load->view('user/tampilan_tambah_wisata', $isi);
	}

  public function edit()
	{
		//$this->model_keamanan_user->getkeamananuser();
		$isi['content'] 	= 'user/edit_konten_wisata';
		$isi['judul']		= 'wisata';
		$isi['sub_judul']	= 'Edit wisata';

		$key = $this->uri->segment(3);
		$this->db->where('id_wisata',$key);
		$query = $this->db->get('wisata');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row)
			{
        $isi['id_wisata'] = $row->id_wisata;
				$isi['nama']	= $row->nama;
				$isi['text']	= $row->text;
				$isi['asal']	= $row->asal;
				$isi['foto']	= $row->foto;
			}
		}
		else
		{
      $isi['id_wisata']	= '';
			$isi['nama']	= '';
			$isi['text']	= '';
			$isi['asal']	= '';
			$isi['foto']	= '';
		}
		$this->load->view('user/tampilan_beranda_user',$isi);
	}

	public function simpan()
	{
//	   // mysqli_insert_id()
		$this->model_keamanan_user->getkeamananuser();
		$key = $this->input->post('id_wisata');
        $data['id_daerah']          = $this->input->post('id_daerah');
		$data['nama_wisata']	    = $this->input->post('nama');
		$data['lokasi']				= $this->input->post('lokasi');
		$data['deskripsi']			= $this->input->post('deskripsi');
		$data['harga']              = $this->input->post('harga');
		$data['uname']              = $this->input->post('uname');
		

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
					</strong>Data sukses diupdate '.$key.' </div>');
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
					</strong>Data sukses di simpan '.$key.' </div>');
		}
		redirect('Objekwisata/tambahdata');
	}
	public function tambahdata(){
		//$this->model_keamanan_user->getkeamananuser();
		$isi['content'] 	= 'user/tampilan_tambah_wisata';
		$isi['judul']		= 'wisata';
		$isi['sub_judul']	= 'Tambah wisata';
		$isi['id_wisata']		= '';
		$isi['nama']			= '';
		$isi['text']			= '';
		$isi['asal']		= '';
		$isi['foto']	= '';
        $isi;
        $this->load->model('Model_update_wisata');
        //$this->isi = $this->Model_update_wisata->dropdown();
		$this->load->view('user/tampilan_beranda_user',$isi);
	}
	public function delete()
	{
		$this->model_keamanan_user->getkeamananuser();
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
	public function dropdown($isi){
	    $isi;
        $this->isi = $this->model_update_wisata->dropdown();
        $this->load->view('user/tampilan_beranda_user',$isi);
    }
}