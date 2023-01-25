<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hasilkuesioner_model extends CI_Model {

	public function get_data($table)
	{
		return $this->db->get($table);
	}
	

}

/* End of file Hasilkuesioner_model.php */
/* Location: ./application/models/Hasilkuesioner_model.php */