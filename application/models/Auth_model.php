<?php 

class Auth_model extends CI_Model{
	public function cekLogin()
	{
		//tangkap data dari form login
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		//query ke tabel user
		$query = $this->db->get_where('tb_user', array('username' => $username, 'password' => $password))->row_array();
		
		//Jika Password atau username salah
		if($query == null){
			//KIRIM FLASHDATA
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		<strong>Username atau password anda salah!</strong> 
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>');
		redirect('auth/login');
		}
		if($query !== null){
			//buat session
			$this->session->set_userdata('id', $query["id"]);
			$this->session->set_userdata('username', $query["username"]);
			$this->session->set_userdata('role_id', $query["role_id"]);

			//redirect sesuai role
			if($this->session->userdata('role_id') == 1)
			{
				redirect("data_barang");
			} else {
				redirect("dashboard");
			}
		}


	}
}
?>
