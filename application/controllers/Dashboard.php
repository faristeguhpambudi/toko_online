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
		//cek sudah login atau belum
		if($this->session->userdata('username') == null){
			//KIRIM FLASHDATA
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Anda belum login! Silahkan login dulu!</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
			redirect('auth/login');
		}
		//jika sudah login
		$barang =  $this->Barang_model->getBarangById($id_barang);
		$data = array(
			'id'      => $barang["id_barang"],
			'qty'     => 1,
			'price'   => $barang["harga"],
			'name'    => $barang["nama_barang"]
		);
		
		$this->cart->insert($data);
		//KIRIM FLASHDATA
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Berhasil masuk ke keranjang belanja anda!</strong> 
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>');
		redirect("dashboard");
	}

	public function detailKeranjang($itemKeranjang)
	{
		//cek sudah login atau belum
		if($this->session->userdata('username') == null){
			//KIRIM FLASHDATA
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Anda belum login! Silahkan login dulu!</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
			redirect('auth/login');
		}
		//jika sudah login
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
		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('alamat', 'alamat', 'required');
		$this->form_validation->set_rules('telp', 'telp', 'required|numeric');
		$this->form_validation->set_rules('pengiriman', 'pengiriman', 'required');
		$this->form_validation->set_rules('bank', 'bank', 'required');
		 
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('dashboard/pembayaran', $data);
			$this->load->view('templates/footer', $data);
		} else {
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
