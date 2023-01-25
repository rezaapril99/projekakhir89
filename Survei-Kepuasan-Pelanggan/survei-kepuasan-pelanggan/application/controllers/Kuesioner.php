<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kuesioner extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('kuesioner_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['title'] = "PT MITRA GEMILAN INTI PERKASA | Responden Kuisioner Kepuasan Pelanggan";
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('umur', 'Umur', 'trim|required|numeric');
		#$this->form_validation->set_rules('jk', 'JK', 'is_numeric');
		$this->form_validation->set_rules('frekuensi', 'frekuensi', 'trim|required');
		$this->form_validation->set_rules('kategori', 'Kategori', 'trim|required');
		$this->form_validation->set_rules('tgl', 'Tgl', 'trim|required');
		if ($this->form_validation->run() == FALSE){
			
		}else{
			// $this->load->model('kuesioner_model');
			$this->kuesioner_model->setDataResponden();
			header("Location:".base_url('form'));

		}
		$this->load->template('form_responden', $data);

	}

	public function form() {
		$responden = $this->session->flashdata();
		//$responden = $this->input->post();
		//if(empty($responden)){
			//header("Location:".base_url(""));
		//}else{
		$data['responden'] = $responden;
		$data['title'] = "PT MITRA GEMILAN INTI PERKASA | Kuisioner Kepuasan Pelanggan";
		if ($this->form_validation->run() == FALSE){
			
		}else{
				//$this->load->model('kuesioner_model');
			$data['error'] = $this->kuesioner_model->setDataKuisioner();
			if(empty($data['error']))
				header("Location:".base_url("kuesioner/sukses_page"));
		}
		
			 //$this->load->template("form_kuesioner", $data);
		$this->formKuesioner($data);
	}
	

	public function formSubmit() {
		$responden = $this->input->post();

		
		if(empty($responden)){
			header("Location:".base_url(""));
		}else{
			$data['responden'] = $responden;
			$data['title'] = "PT MITRA GEMILAN INTI PERKASA | Kuisioner Kepuasan Pelanggan";
			
			$data['success'] = $this->kuesioner_model->execute('insert', 'skala', $responden);
			if(empty($data['success']))
				header("Location:".base_url("kuesioner/sukses_page"));
		}
	}
	
	public function sukses_page(){
		$data['title'] = "PT MITRA GEMILAN INTI PERKASA | Kuisioner Kepuasan Pelanggan";
		$this->load->template("notif_sukses", $data);
	}

	public function formKuesioner($dataResponden) {
		$data = $this->kuesioner_model->getData('kuesioner');
		$pernyataan = $this->kuesioner_model->getData('pernyataan');

		$tmpPernyataan = [];
		foreach ($pernyataan as $value) {
			$tmpPernyataan[] = $value->pernyataan."~".$value->skor;
		}

		$dataKuesioner = [];
		$no = 0;
		$noSkala = 111;
		foreach ($data as $kuesioner) {
			$no++;
			$noSkala++;
			$dataKuesioner[] = array(
				'kuesioner' => $kuesioner->nama_deskripsi,
				'pernyataan' => array(
					'id_pernyataan' => $no,
					'id_skala' => $noSkala,
					'pernyataan' => $tmpPernyataan,
				)
			);
		}

		$dataTmp['dataKuesioner'] = $dataKuesioner;
		$dataTmp['dataResponden'] = $dataResponden;
		$this->load->template("form_kuesioner", $dataTmp);
	}

}

/* End of file Kuesioner.php */
/* Location: ./application/controllers/Kuesioner.php */