<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deskripsi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('username')){
			redirect('administrator');
		}
		$this->load->model('deskripsi_model');

	}

	public function index()
	{
		$data['title'] = 'Deskripsi';
		$data["tbl_deskripsi"] = 
		$this->deskripsi_model->get_data();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('deskripsi', $data);
		$this->load->view('templates/footer');
	}

	public function tambahdata()
	{
		$data['title'] = 'Tambah Deskripsi';
		$this->load->model('Mid_kategori');
		$data['tbl_kategori'] = $this->Mid_kategori->getAll();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('tambah_deskripsi', $data);
		$this->load->view('templates/footer');
	}

	public function simpandata()
	{
		$this->load->model('deskripsi_model');
		$kategori = $this->input->post('kategori');
		$nama_deskripsi = $this->input->post('nama_deskripsi');

		$data = [
			'id_kategori' => $kategori,
			'nama_deskripsi' => $nama_deskripsi
		];

		$simpan = $this->deskripsi_model->insert($data);

		if ($simpan){
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Data berhasil Ditambahkan!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		}else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Data gagal Ditambahkan!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		}


		redirect('deskripsi');
	}

	public function edit($id)
	{
		$data['title'] = 'Edit Deskripsi';
		$this->load->model('Mid_kategori');
		$this->load->model('deskripsi_model');
		$data['tbl_kategori'] = $this->Mid_kategori->getAll();
		$data['tbl_deskripsi'] = $this->deskripsi_model->get($id);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('edit_deskripsi', $data);
		$this->load->view('templates/footer');
	}
	public function update(){
		$this->load->model('deskripsi_model');
		$id = $this->input->post('id');
		$id_kategori = $this->input->post('kategori');
		$nama_deskripsi = $this->input->post('nama_deskripsi');
		$data = [
			'id_kategori' => $id_kategori,
			'nama_deskripsi' => $nama_deskripsi,
		];

		$save = $this->deskripsi_model->update($data, $id);
		if($save) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Data berhasil Diupdate!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		}else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Data gagal Diupdate!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		}


		redirect('deskripsi');
	}


	public function delete($id)
	{
		$this->load->model('deskripsi_model');
		$delete = $this->deskripsi_model->delete($id);
		if ($delete){
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Data berhasil Dihapus!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		}else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Data gagal Dihapus!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		}


		redirect('deskripsi');
	}

}

/* End of file Deskripsi.php */
/* Location: ./application/controllers/Deskripsi.php */