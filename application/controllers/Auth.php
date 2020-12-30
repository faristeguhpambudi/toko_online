<?php 

class Auth extends CI_Controller{
	public function login()
	{
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');

		if($this->form_validation->run() == false)
		{
			$this->load->view('templates/header');
			$this->load->view('login');
		} else {
			$this->Auth_model->cekLogin();
		}

	
}
	public function logout()
	{
		$array_items = array('username', 'role_id');
		$this->session->unset_userdata($array_items);
		redirect("Auth/login");
	}
}

?>

