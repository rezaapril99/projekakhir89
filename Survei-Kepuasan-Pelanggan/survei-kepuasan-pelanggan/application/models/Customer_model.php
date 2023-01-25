<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_model extends CI_Model {

	public function get_data($table)
	{
		return $this->db->get($table);
	}

}

/* End of file Customer_model.php */
/* Location: ./application/models/Customer_model.php */