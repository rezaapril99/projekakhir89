<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('username')){
			redirect('administrator');
		}
		$this->load->model('customer_model');
	}

	public function index()
	{
		$data['title'] = 'Customer';
		$data['customer'] = $this->customer_model->get_data('tbl_customer')->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('customer', $data);
		$this->load->view('templates/footer');
	}

}

/* End of file Customer.php */
/* Location: ./application/controllers/Customer.php */