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
}

?>
