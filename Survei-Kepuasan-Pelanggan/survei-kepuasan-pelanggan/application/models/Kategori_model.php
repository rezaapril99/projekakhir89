<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model {

	public function get_data($table)
	{
		return $this->db->get($table);
	}

	public function insert_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

	public function update_data($data, $table)
	{
		$this->db->where('id', $data['id']);
		$this->db->update($table, $data);
	}

	public function delete($id)
	{
		return $this->db->where('id', $id)->delete('tbl_kategori');
	}

	public function join($table,$tbljoin,$join)
	{
		$this->db->join($tbljoin,$join);
		return $this->db->get($table);
	}

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */