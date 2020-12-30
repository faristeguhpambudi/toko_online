<?php 

class Kategori_model extends CI_Model{

	public function getAllElektronik()
		{
			$query = $this->db->get_where('tb_barang', array('kategori' => 'Elektronik'));
			return $query->result_array();
		}

		public function getAllPakaianPria()
		{
			$query = $this->db->get_where('tb_barang', array('kategori' => 'Pakaian Pria'));
			return $query->result_array();
		}

		public function getAllPakaianWanita()
		{
			$query = $this->db->get_where('tb_barang', array('kategori' => 'Pakaian Wanita'));
			return $query->result_array();
		}

		public function getAllPakaianAnak()
		{
			$query = $this->db->get_where('tb_barang', array('kategori' => 'Pakaian Anak Anak'));
			return $query->result_array();
		}

		public function getAllPeralatanOlahraga()
		{
			$query = $this->db->get_where('tb_barang', array('kategori' => 'Peralatan Olahraga'));
			return $query->result_array();
		}
}
?>
