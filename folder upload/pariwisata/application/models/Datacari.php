<?php
	class Datacari extends CI_Model{
		public function get_all(){
			return $this->db->get('wisata')->result();
		}
		public function get_product_keyword($keyword){
			$this->db->select('*');
			$this->db->from('wisata', $keyword);
			return $this->db->get()->result();
		}
	}
