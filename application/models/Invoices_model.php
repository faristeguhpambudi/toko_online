<?php 

class Invoices_model extends CI_Model{
	public function getInvoice()
	{
		date_default_timezone_set('Asia/Jakarta');
		$nama = $this->input->post('nama');
		$alamat	 = $this->input->post('alamat');
		$telp = $this->input->post('telp');
		$pengiriman = $this->input->post('pengiriman');
		$bank = $this->input->post('bank');
		$bukti_bayar = $_FILES["bukti_bayar"]["name"];
		$tgl_pesan = date('Y-m-d H:i:s');
		$batas_bayar = date('Y-m-d H:i:s', mktime(date('H'),date('i'), date('s'), date('m'), date('d') + 1, date('Y')));

		if($bukti_bayar = ""){}else{
			$config["upload_path"] = "./assets/uploads/buktibayar";
			$config["allowed_types"] = "jpg|jpeg|png|gif";

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('bukti_bayar')){
				echo "gambar gagal diupload";
			}else{
				$bukti_bayar = $this->upload->data('file_name');
			}
		}

		$data = array(
			'id_user' => $this->session->userdata('id'),
			'nama' => $nama,
			'alamat' => $alamat,
			'telp' => $telp,
			'pengiriman' => $pengiriman,
			'bank' => $bank,
			'bukti_bayar' => $bukti_bayar,
			'tgl_pesan' => $tgl_pesan,
			'batas_bayar' => $batas_bayar
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

	$data3 = [
		'id_invoices' => $id_invoices,
		'pengiriman' => $pengiriman,
		'resi' => "Belum Tersedia",
		'status' => "Dikemas"
	];
	$this->db->insert('tb_pengiriman', $data3);

	return TRUE;
	}

	public function tampilData()
	{
		$query = "SELECT `tb_invoices`.*,`tb_pengiriman`.*
                    FROM `tb_invoices` 
                    JOIN `tb_pengiriman` ON `tb_invoices`.`id_invoices` = `tb_pengiriman`.`id_invoices`
        ";
        return $this->db->query($query)->result_array();
	}

	public function getInvoicesById($id_invoices)
	{
		$query = "SELECT `tb_invoices`.*,`tb_pengiriman`.*
                    FROM `tb_invoices` 
                    JOIN `tb_pengiriman` ON `tb_invoices`.`id_invoices` = `tb_pengiriman`.`id_invoices`
					WHERE `tb_invoices`.`id_invoices` = $id_invoices
        ";
        return $this->db->query($query)->row_array();
	}

	public function getPesananById($id_invoices)
	{
		$query = $this->db->get_where('tb_pesanan', array('id_invoices' => $id_invoices));
		return $query->result_array();
	}

	public function getPengirimanById($id_invoices)
	{
		$query = "SELECT *
                    FROM `tb_pengiriman` 
					WHERE `tb_pengiriman`.`id_invoices` = $id_invoices
        ";
        return $this->db->query($query)->row_array();
	}

	public function edit_pengiriman()
	{
		$id_invoices = $this->input->post('id_invoices');
		$resi = $this->input->post('resi');
		$status	 = $this->input->post('status');
		$data = array(
			'resi' => $resi,
			'status' => $status
		);
		$this->db->where('id_invoices', $id_invoices);
		$this->db->update('tb_pengiriman', $data);
	}
}
?>
