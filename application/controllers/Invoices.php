<?php 

class Invoices extends CI_Controller{
	public function index()
	{
		$data["invoices"] = $this->Invoices_model->tampilData();
			$this->load->view('templates_admin/header', $data);
			$this->load->view('templates_admin/sidebar', $data);
			$this->load->view('templates_admin/topbar', $data);
			$this->load->view('admin/invoices', $data);
			$this->load->view('templates_admin/footer', $data);
	}

	public function detail($id_invoices)
	{
		$data["invoices"] = $this->Invoices_model->getInvoicesById($id_invoices);
		$data["pesanan"] = $this->Invoices_model->getPesananById($id_invoices);
		$this->load->view('templates_admin/header', $data);
			$this->load->view('templates_admin/sidebar', $data);
			$this->load->view('templates_admin/topbar', $data);
			$this->load->view('admin/detail_invoices', $data);
			$this->load->view('templates_admin/footer', $data);
	}

	public function pengiriman($id_invoices)
	{
		$data["invoices"] = $this->Invoices_model->getPengirimanById($id_invoices);
		$data["judulHalaman"] = "Pengiriman";
		$this->form_validation->set_rules('resi', 'No. Resi', 'required');
		
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates_admin/header', $data);
			$this->load->view('templates_admin/sidebar', $data);
			$this->load->view('templates_admin/topbar', $data);
			$this->load->view('admin/pengiriman', $data);
			$this->load->view('templates_admin/footer', $data);
		} else {
			$this->Invoices_model->edit_pengiriman();
			//KIRIM FLASHDATA
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Pengiriman berhasil diubah!</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
			redirect("invoices/detail/".$id_invoices);
		}
	}
}

?>
