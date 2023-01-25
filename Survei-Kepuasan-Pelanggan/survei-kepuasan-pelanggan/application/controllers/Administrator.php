<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['title'] = 'Halaman Login';
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if($this->form_validation->run() == FALSE){
			
			$this->load->view('templates/header',$data);
			$this->load->view('admin/login');
			$this->load->view('templates/footer');
		} else {

			$this->_login();
		}
		
	}

	private function _login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->db->get_where('tbl_user', ['username' => $username])->row_array();
		
		// jika usernya ada
		if($user) {
			
			if(password_verify($password, $user['password'])){
				$data = [
					'username' => $user['username'],
					'email' => $user['email'],
				];
				$this->session->set_userdata($data);
				redirect('dashboard');
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Password salah!</div>');
				redirect('administrator');
			}

		} else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Username tidak terdaftar!</div>');
			redirect('administrator');
		}
		
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('email');

		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
		redirect('administrator');
	}

}

/* End of file Administrator.php */
/* Location: ./application/controllers/Administrator.php */