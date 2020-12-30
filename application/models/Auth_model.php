<?php 

class Auth_model extends CI_Model{
	public function cekLogin()
	{
		//tangkap data dari form login
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		//query ke tabel user
		$query = $this->db->get_where('tb_user', array('username' => $username, 'password' => $password))->row_array();
		
		if($query !== null){
			//buat session
			$this->session->set_userdata('username', $query["username"]);
			$this->session->set_userdata('role_id', $query["role_id"]);

			//redirect sesuai role
			if($this->session->userdata('role_id') == 1)
			{
				redirect("dashboard_admin");
			} else {
				redirect("dashboard");
			}
		}


	}
}
?>
