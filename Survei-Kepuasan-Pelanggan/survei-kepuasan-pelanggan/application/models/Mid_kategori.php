<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mid_kategori extends CI_Model {

	public function getAll()
	{
		return $this->db->get('tbl_kategori')->result();
	}

	

}

/* End of file Mid_kategori.php */
/* Location: ./application/models/Mid_kategori.php */