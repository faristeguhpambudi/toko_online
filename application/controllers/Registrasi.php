<?php 

class Registrasi extends CI_Controller{

	public function index()
	{
		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required|matches[password2]');
		$this->form_validation->set_rules('password2', 'password', 'required|matches[password]');


		if($this->form_validation->run() == false)
		{
			$this->load->view('templates/header');
			$this->load->view('registrasi');
		} else {
			$data = array(
				"id" => '',
				"nama" => $this->input->post('nama'),
				"username" => $this->input->post('username'),
				"password" => $this->input->post('password'), 
				"role_id" => 2,
			);

			$this->db->insert('tb_user', $data);
			//KIRIM FLASHDATA
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Selamat! Akun anda berhasil dibuat. silahkan Login!</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
			redirect('auth/login');
		}
	}
}
?>
