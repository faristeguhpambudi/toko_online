<?php 

class Pembelian_model extends CI_Model{
	public function tampilData()
	{
		$id_user = $this->session->userdata('id');
		$query = "SELECT `tb_invoices`.*,`tb_pengiriman`.*
                    FROM `tb_invoices` 
                    JOIN `tb_pengiriman` ON `tb_invoices`.`id_invoices` = `tb_pengiriman`.`id_invoices`
					WHERE `tb_invoices`.`id_user` = $id_user
        ";
        return $this->db->query($query)->result_array();

	}

	public function getInvoicesById($id_invoices)
	{
		$query = $this->db->get_where('tb_invoices', array('id_invoices' => $id_invoices));
		return $query->row_array();
	}

	public function getPesananById($id_invoices)
	{
		$query = $this->db->get_where('tb_pesanan', array('id_invoices' => $id_invoices));
		return $query->result_array();
	}

	public function batal_pesan($id_invoices)
	{
		$this->db->where('id_invoices', $id_invoices);
		$this->db->delete('tb_invoices');

		$this->db->where('id_invoices', $id_invoices);
		$this->db->delete('tb_pesanan');

		$this->db->where('id_invoices', $id_invoices);
		$this->db->delete('tb_pengiriman');
	}

	public function terima_pesanan($id_invoices)
	{
		$data = array(
			'status' => "Diterima"
		);
		
		$this->db->where('id_invoices', $id_invoices);
		$this->db->update('tb_pengiriman', $data);
	}
}
?>
