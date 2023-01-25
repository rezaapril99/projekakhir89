<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HasilKuesioner extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('username')){
			redirect('administrator');
		}
		$this->load->model('hasilkuesioner_model');
	}

	public function index()
	{
		$data['title'] = 'Hasil Survei';
		$data['tbl_kuesioner_kenyataan'] = $this->hasilkuesioner_model->get_data('tbl_kuesioner_kenyataan')->result();
		$data['tbl_kuesioner_harapan'] = $this->hasilkuesioner_model->get_data('tbl_kuesioner_harapan')->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('hasilkuesioner', $data);
		$this->load->view('templates/footer');
	}

	
}

/* End of file HasilKuesioner.php */
/* Location: ./application/controllers/HasilKuesioner.php */