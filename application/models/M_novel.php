<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_novel extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	function data($offset,$number,$where=array()){

        $keyword = "";
        if(isset($where['keyword'])){
            $keyword = $where['keyword'];
            unset($where['keyword']);
        }

        $this->db->from('novel');
        $this->db->where($where);
        $this->db->like('judul', $keyword, 'both');
		$this->db->join('kategori','kategori.id_kategori=novel.id_kategori');
        $this->db->limit($offset, $number);
        return $query = $this->db->get();
	}

	function tampil_data($table){
		$this->db->from($table);
		$this->db->join('kategori','kategori.id_kategori=novel.id_kategori');
		return $query = $this->db->get();
		// return $this->db->get($table);
	}

    function tampil_data2($table,$where=array()){
	    $keyword = "";
	    if(isset($where['keyword'])){
	        $keyword = $where['keyword'];
	        unset($where['keyword']);
        }
        $this->db->from($table);
        $this->db->where($where);
        $this->db->like('judul', $keyword, 'both');
        $this->db->join('kategori','kategori.id_kategori=novel.id_kategori');
        return $query = $this->db->get();
        // return $this->db->get($table);
    }

    function tampil_dataBaru($table,$limit = 5){
        $this->db->from($table);
        $this->db->join('kategori','kategori.id_kategori=novel.id_kategori');
        $this->db->order_by('novel.created_at','desc');
        $this->db->limit($limit);
        return $query = $this->db->get();
        // return $this->db->get($table);
    }

    function tampil_data_page($table,$limit = 10){
        $this->db->from($table);
        $this->db->join('kategori','kategori.id_kategori=novel.id_kategori');
        $this->db->order_by('novel.created_at','desc');
        $this->db->limit($limit);
        return $query = $this->db->get();
        // return $this->db->get($table);
    }

	function tampil_dataPop($table){
		$this->db->from($table);
		$this->db->join('kategori','kategori.id_kategori=novel.id_kategori');
		$this->db->order_by('view','desc');
		return $query = $this->db->get();
		// return $this->db->get($table);
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
		return $this->db->insert_id();
	}
	
	function cari($where,$table){	
		$this->db->join('kategori','kategori.id_kategori=novel.id_kategori');
		$this->db->like($where);
		return $this->db->get($table);
	}

	function detail($where,$table){	
		$this->db->join('kategori','kategori.id_kategori=novel.id_kategori');
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

/* End of file M_artikel.php */
/* Location: ./application/models/M_artikel.php */