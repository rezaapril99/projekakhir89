<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kuesioner_model extends CI_Model {

	public function __construct(){
		// Call the CI_Model constructor
		parent::__construct();
	}

	public function getNomerResponden(){
		$query = $this->db->get('tbl_kuesioner');
		return "RSP-".str_pad($query->num_rows() + 1, 4, 0, STR_PAD_LEFT);
	}
	
	public function setDataResponden(){
		$nama = $this->input->post('nama');
		$umur = $this->input->post('umur');
		$jk = $this->input->post('jk');
		$frekuensi = $this->input->post('frekuensi');
		$kategori = $this->input->post('kategori');
		$tgl = $this->input->post('tgl');
		
		$data = array('nama' => $nama, 'umur' => $umur, 'jk' => $jk,
				'frekuensi' => $frekuensi, 'kategori' => $kategori, 'tgl' => $tgl
		);
		
		$this->session->set_flashdata($data);
	}
	
	public function getDataKuesioner(){
		$query = $this->db->get('tbl_kuesioner');
		$indeks = 0;
		$result = array();
		
		foreach ($query->result_array() as $row){
			$result[$indeks++] = $row;
		}
		
		return $result;
	}
	
	public function getJumlahResponden(){
		$listKuesioner = $this->getDataKuesioner();
		
		return $jumlahResponden = count($listKuesioner);
	}

	public function getData($type="", $id="", $tbl="") {
		if($type === 'kuesioner') {
			$sql = "select *
					from tbl_deskripsi
				";
		} elseif ($type === 'pernyataan') {
			$sql = "select * from tbl_pernyataan";
		} elseif ($type === 'deskripsi') {
			$sql = "select * from tbl_deskripsi";	
		} elseif ($type === 'kenyataan') {
			$sql = "select * from tbl_kuesioner_kenyataan";
		} elseif ($type === 'harapan') {
			$sql = "select * from tbl_kuesioner_harapan";
		} elseif ($type === 'customer') {
			$sql = "select * from tbl_customer";
		} elseif ($type === 'user') {
			$sql = "select * from tbl_user";
		} elseif ($type === 'dtlKuesioner') {
			$sql = "select * from $tbl where id=$id";
		}

		$sql = $this->db->query($sql);
		return $sql->result();
	}

	public function execute($action, $type, $data, $id="", $tbl="") {
		if ($action === 'insert') {
			if ($type === 'skala') {
				$dataCustomer = array(
					'nama' => $data['nama'],
					'umur' => $data['umur'],
					'jk' => $data['jk'],
					'frekuensi' => $data['frekuensi'],
					'kategori' => $data['kategori'],
					'tgl' => $data['tgl'],
				);	
				
				$this->db->insert('tbl_customer', $dataCustomer);
				$customer_id = $this->db->insert_id();	

				$this->execute('insert', 'kenyataan', $data, $customer_id);
				$this->execute('insert', 'harapan', $data, $customer_id);
			} elseif ($type === 'kenyataan') {
				$p = [];
				$p['id_responden'] = $id;
				for ($i=1; $i <= 19 ; $i++) { 
					$pp = "p$i";
					$pk = "kenyataan$i";
					$p[$pp]= $data[$pk];
				}

				$dataKenyataan = $p;

				$this->db->insert('tbl_kuesioner_kenyataan', $dataKenyataan);
			} elseif ($type === 'harapan') {
				$p = [];
				$p['id_responden'] = $id;
				$no=0;
				for ($i=112; $i <= 130 ; $i++) { 
					$no++;
					$pp = "p$no";
					$pk = "harapan$i";
					$p[$pp]= $data[$pk];
				}

				$dataHarapan = $p;

				$this->db->insert('tbl_kuesioner_harapan', $dataHarapan);
			} elseif ($type === 'variabel') {
				$this->db->insert($tbl, array('nama_deskripsi' => $data));
			}
		} elseif ($action === 'update') {
			if ($type === 'variabel') {
				$this->db->where('id', $id);
				$this->db->update($tbl, array('nama_deskripsi' => $data));
			}
		}
	}

}

/* End of file Kuesioner_model.php */
/* Location: ./application/models/Kuesioner_model.php */