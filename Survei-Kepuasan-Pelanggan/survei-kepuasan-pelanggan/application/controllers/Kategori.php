<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('username')){
			redirect('administrator');
		}
		$this->load->model('kategori_model');
	}

	public function index()
	{
		$data['title'] = 'Kategori';
		$data['kategori'] = 
		$data['user'] = $this->kategori_model->get_data('tbl_kategori')->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('kategori', $data);
		$this->load->view('templates/footer');
	}

	public function tambahdata()
	{
		$data['title'] = 'Tambah Kategori';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('tambah_kategori');
		$this->load->view('templates/footer');
	}

	public function simpandata()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->tambah();
		} else {
			$data = array(
				'nama_kategori' => $this->input->post('nama_kategori'),
			);

			$this->kategori_model->insert_data($data, 'tbl_kategori');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Data berhasil Ditambahkan!
  				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('kategori');
		}
	}

	public function edit($id)
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->index();
		} else {
			$data = array(
				'id' => $id,
				'nama_kategori' => $this->input->post('nama_kategori'),
			);

			$this->kategori_model->update_data($data, 'tbl_kategori');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Data berhasil Diubah!
  				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('kategori');
		}


	}

	public function _rules()
	{
		$this->form_validation->set_rules('nama_kategori', 'Kategori', 'required', array(
			'required' => '%s harus diisi !!'
		));
		
	}

	public function delete($id)
	{
		$this->load->model('kategori_model');
		$delete = $this->kategori_model->delete($id);
		if ($delete){
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Data berhasil Dihapus!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		}else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Data gagal Dihapus!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		}


		redirect('kategori');
	}

}

/* End of file Kategori.php */
/* Location: ./application/controllers/Kategori.php */