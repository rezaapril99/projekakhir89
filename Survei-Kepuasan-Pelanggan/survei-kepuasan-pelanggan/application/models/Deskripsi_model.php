<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deskripsi_model extends CI_Model {

	public function get_data()
	{
		$this->db->select('tbl_deskripsi.*, tbl_kategori.nama_kategori');
		$this->db->from('tbl_deskripsi');
		$this->db->join('tbl_kategori','tbl_kategori.id = tbl_deskripsi.id_kategori');
		$query = $this->db->get();
		return $query->result();
	}

	public function insert($data)
	{
		return $this->db->insert('tbl_deskripsi', $data);
	}

	public function get($id)
	{
		return $this->db->where('id', $id)->get('tbl_deskripsi')->row();
	}

	public function update($data, $id)
	{
		return $this->db->where('id', $id)->update('tbl_deskripsi', $data);
	}

	public function delete($id)
	{
		return $this->db->where('id', $id)->delete('tbl_deskripsi');
	}


}

/* End of file Deskripsi_model.php */
/* Location: ./application/models/Deskripsi_model.php */