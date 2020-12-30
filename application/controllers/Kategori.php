<?php 

class Kategori extends CI_Controller{
	public function index()
	{
		$data["barang"] = $this->Barang_model->getAllBarang();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('dashboard/index', $data);
		$this->load->view('templates/footer', $data);
	}
	public function elektronik()
	{
		$data["barang"] = $this->Kategori_model->getAllElektronik();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('dashboard/elektronik', $data);
		$this->load->view('templates/footer', $data);
	}

	public function pakaianPria()
	{
		$data["barang"] = $this->Kategori_model->getAllPakaianPria();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('dashboard/pakaianPria', $data);
		$this->load->view('templates/footer', $data);
	}

	public function pakaianWanita()
	{
		$data["barang"] = $this->Kategori_model->getAllPakaianWanita();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('dashboard/pakaianWanita', $data);
		$this->load->view('templates/footer', $data);
	}

	public function pakaianAnak()
	{
		$data["barang"] = $this->Kategori_model->getAllPakaianAnak();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('dashboard/pakaianAnak', $data);
		$this->load->view('templates/footer', $data);
	}

	public function peralatanOlahraga()
	{
		$data["barang"] = $this->Kategori_model->getAllPeralatanOlahraga();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('dashboard/peralatanOlahraga', $data);
		$this->load->view('templates/footer', $data);
	}
}

?>
