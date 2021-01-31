<?php 

class Pembelian extends CI_Controller{
	public function index()
	{
		$data["judulHalaman"] = "Pembelian Saya";
		$data["pembelian"] = $this->Pembelian_model->tampilData();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('dashboard/pembelian', $data);
		$this->load->view('templates/footer', $data);
	}

	public function detail($id_invoices)
	{
		$data["invoices"] = $this->Invoices_model->getInvoicesById($id_invoices);
		$data["pesanan"] = $this->Invoices_model->getPesananById($id_invoices);
		$this->load->view('templates_admin/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('dashboard/detail_invoices', $data);
			$this->load->view('templates/footer', $data);
	}

	public function batal_pesan($id_invoices)
	{
		$this->Pembelian_model->batal_pesan($id_invoices);
		//KIRIM FLASHDATA
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		<strong>Pesanan Anda Dibatalkan!</strong> 
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>');
		redirect("pembelian");
	}

	public function terima_pesanan($id_invoices)
	{
		$this->Pembelian_model->terima_pesanan($id_invoices);
		//KIRIM FLASHDATA
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Anda sudah mengkonfirmasi merima pesanan! terima kasih sudah berbelanja di toko kami.</strong> 
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>');
		redirect("pembelian");
	}
}

?>
