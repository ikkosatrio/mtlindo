<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_potensi extends CI_Model {

	public $variable;
	
	public function __construct()
	{
		parent::__construct();
	}

	function tampil_data($table){
		$this->db->from($table);
		$this->db->order_by('created_at','desc');
		return $query = $this->db->get();
		// return $this->db->get($table);
	}

	function tampil_dataBaru($table){
		$this->db->from($table);
		$this->db->order_by('id_potensi','desc');
		return $query = $this->db->get();
		// return $this->db->get($table);
	}

	function tampil_dataPop($table){
		$this->db->from($table);
		$this->db->order_by('view','desc');
		return $query = $this->db->get();
		// return $this->db->get($table);
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	
	function detail($where,$table){	
		return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

}

/* End of file M_potensi.php */
/* Location: ./application/controllers/M_potensi.php */