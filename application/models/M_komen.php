<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_komen extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function tampil_data($where,$table){	
		$this->db->join('member','member.id_member = komentar.id_member', 'left');
		return $this->db->get_where($table,$where);
	}

}

/* End of file  */
/* Location: ./application/models/ */