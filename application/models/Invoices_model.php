<?php 

class Invoices_model extends CI_Model{
	public function getInvoice()
	{
		date_default_timezone_set('Asia/Jakarta');
		$data = array(
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'tgl_pesan' => date('Y-m-d H:i:s'),
			'batas_bayar' => date('Y-m-d H:i:s', mktime(date('H'),date('i'), date('s'), date('m'), date('d') + 1, date('Y')))
	);
	
	$this->db->insert('tb_invoices', $data);
	$id_invoices = $this->db->insert_id();
	foreach($this->cart->contents() as $item)
	{
		$data2 = [
			'id_invoices' => $id_invoices,
			'id_barang' => $item["id"],
			'nama_barang' => $item["name"],
			'harga' => $item["price"],
			'qty' => $item["qty"],
		];
		$this->db->insert('tb_pesanan', $data2);
	}
		return TRUE;
	}

	public function tampilData()
	{
		$query = $this->db->get('tb_invoices');
		return $query->result_array();
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
}
?>
