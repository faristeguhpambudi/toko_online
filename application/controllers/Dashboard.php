<?php 

class Dashboard extends CI_Controller{
	public function index(){
		$data["judulHalaman"] = "Dashboard";
		$data["barang"] = $this->Barang_model->getAllBarang();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('dashboard/index', $data);
		$this->load->view('templates/footer', $data);
	}

	public function tambahKeKeranjang($id_barang)
	{
		$barang =  $this->Barang_model->getBarangById($id_barang);
		$data = array(
			'id'      => $barang["id_barang"],
			'qty'     => 1,
			'price'   => $barang["harga"],
			'name'    => $barang["nama_barang"]
		);
		
		$this->cart->insert($data);
		redirect("dashboard");
	}

	public function detailKeranjang($itemKeranjang)
	{
		$data["JudulHalaman"] = "Keranjang Belanjan";
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('dashboard/keranjang', $data);
		$this->load->view('templates/footer', $data);
	}

	public function hapusKeranjang()
	{
		$this->cart->destroy();
		redirect("dashboard");
	}

	public function pembayaran()
	{
		$data["JudulHalaman"] = "checkout";
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('dashboard/pembayaran', $data);
		$this->load->view('templates/footer', $data);
	}

	public function prosesPesanan()
	{
		$data["JudulHalaman"] = "Proses Pesanan";
		$proses = $this->Invoices_model->getInvoice();
		if($proses){
			$this->cart->destroy();
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('dashboard/prosesPesanan', $data);
			$this->load->view('templates/footer', $data);
		} else {
			echo "MAAF PESANAN ANDA GAGAL DIPROSES";
		}
	}
	public function detailBarang($id_barang)
	{
		$data["barang"] = $this->Barang_model->detailBarang($id_barang);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('dashboard/detail_barang', $data);
		$this->load->view('templates/footer', $data);
	} 
}
?>
