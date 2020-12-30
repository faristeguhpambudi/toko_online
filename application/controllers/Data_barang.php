<?php 

class Data_barang extends CI_Controller{
	public function index()
	{
		$data["judulHalaman"] = "data barang";
		$data["barang"] = $this->Barang_model->getAllBarang();
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar', $data);
		$this->load->view('templates_admin/topbar', $data);
		$this->load->view('admin/data_barang', $data);
		$this->load->view('templates_admin/footer', $data);
	}

	public function tambah()
	{
		$data["judulHalaman"] = "data barang";
		$this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
		$this->form_validation->set_rules('kategori', 'kategori', 'required');
		$this->form_validation->set_rules('harga', 'harga', 'required|integer');
		$this->form_validation->set_rules('stok', 'stok', 'required|integer');
		
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates_admin/header', $data);
			$this->load->view('templates_admin/sidebar', $data);
			$this->load->view('templates_admin/topbar', $data);
			$this->load->view('admin/tambah_barang', $data);
			$this->load->view('templates_admin/footer', $data);
		} else {
			$this->Barang_model->tambahBarang();
			redirect("data_barang");
		}
	}

	public function edit($id_barang)
	{
		$data["judulHalaman"] = "data barang";
		$data["barang"] = $this->Barang_model->getBarangById($id_barang);
		$this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
		$this->form_validation->set_rules('kategori', 'kategori', 'required');
		$this->form_validation->set_rules('harga', 'harga', 'required|integer');
		$this->form_validation->set_rules('stok', 'stok', 'required|integer');
		
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates_admin/header', $data);
			$this->load->view('templates_admin/sidebar', $data);
			$this->load->view('templates_admin/topbar', $data);
			$this->load->view('admin/edit_barang', $data);
			$this->load->view('templates_admin/footer', $data);
		} else {
			$this->Barang_model->edit_Barang();
			redirect("data_barang");
		}
	}

	public function hapus($id_barang)
	{
		$this->Barang_model->hapus_Barang($id_barang);
		redirect("data_barang");
	}
}
?>
