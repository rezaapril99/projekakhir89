<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('username')){
			redirect('administrator');
		}
		$this->load->model('user_model');
	}

	public function index()
	{
		$data['title'] = 'User';
		$data['user'] = $this->user_model->get_data('tbl_user')->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('user', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['title'] = 'Tambah User';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('tambah_user');
		$this->load->view('templates/footer');
	}

	public function tambah_aksi()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->tambah();
		} else {
			$data = array(
				'nama' => htmlspecialchars($this->input->post('nama', true)),
				'username' => htmlspecialchars($this->input->post('username', true)),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'email' => $this->input->post('email'),
			);

			$this->user_model->insert_data($data, 'tbl_user');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Data berhasil Ditambahkan!
  				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('user');
		}
	}

	public function edit($id_user)
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->index();
		} else {
			$data = array(
				'id_user' => $id_user,
				'nama' => htmlspecialchars($this->input->post('nama', true)),
				'username' => htmlspecialchars($this->input->post('username', true)),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'email' => $this->input->post('email'),
			);

			$this->user_model->update_data($data, 'tbl_user');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Data berhasil Diubah!
  				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('user');
		}


	}


	public function _rules()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required', array(
			'required' => '%s harus diisi !!'
		));
		$this->form_validation->set_rules('username', 'Username', 'required', array(
			'required' => '%s harus diisi !!'
		));
		$this->form_validation->set_rules('password', 'Password', 'required', array(
			'required' => '%s harus diisi !!'
		));
		$this->form_validation->set_rules('email', 'Email', 'required', array(
			'required' => '%s harus diisi !!'
		));
	}

	public function delete($id)
	{
		$where = array('id_user' => $id);

		$this->user_model->delete($where, 'tbl_user');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Data berhasil Dihapus!
  				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('user');
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */