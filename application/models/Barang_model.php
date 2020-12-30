<?php 

class Barang_model extends CI_Model{
	public function getAllBarang()
	{
		$query = $this->db->get('tb_barang');
		return $query->result_array();
	}
	public function tambahBarang()
	{
		$nama_barang = $this->input->post('nama_barang');
		$keterangan	 = $this->input->post('keterangan');
		$kategori = $this->input->post('kategori');
		$harga = $this->input->post('harga');
		$stok = $this->input->post('stok');
		$gambar = $_FILES["gambar"]["name"];

		if($gambar = ""){}else{
			$config["upload_path"] = "./assets/uploads";
			$config["allowed_types"] = "jpg|jpeg|png|gif";

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('gambar')){
				echo "gambar gagal diupload";
			}else{
				$gambar = $this->upload->data('file_name');
			}
		}

		$data = array(
			'nama_barang' => $nama_barang,
			'keterangan' => $keterangan,
			'kategori' => $kategori,
			'harga' => $harga,
			'stok' => $stok,
			'gambar' => $gambar
	);
	
	$this->db->insert('tb_barang', $data);
	}

	public function getBarangById($id_barang)
	{
		$query = $this->db->get_where('tb_barang', array('id_barang' => $id_barang));
		return $query->row_array();
	}

	public function edit_barang()
	{
		$id_barang = $this->input->post('id_barang');
		$nama_barang = $this->input->post('nama_barang');
		$keterangan	 = $this->input->post('keterangan');
		$kategori = $this->input->post('kategori');
		$harga = $this->input->post('harga');
		$stok = $this->input->post('stok');
		
		$data = array(
			'nama_barang' => $nama_barang,
			'keterangan' => $keterangan,
			'kategori' => $kategori,
			'harga' => $harga,
			'stok' => $stok

		);
		
		$this->db->where('id_barang', $id_barang);
		$this->db->update('tb_barang', $data);
	}

	public function hapus_Barang($id_barang)
	{
		$this->db->where('id_barang', $id_barang);
		$this->db->delete('tb_barang');
	}

	public function detailBarang($id_barang)
	{
		$query = $this->db->get_where('tb_barang', array('id_barang' => $id_barang));
		return $query->result_array();
	}
}
?>

