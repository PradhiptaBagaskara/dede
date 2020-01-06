<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model {

	protected $table;
	protected $cols;
	protected $prefix 			= '';
	protected $tblAdmin		 	= 'admin';
	protected $tblCerita 			= 'cerita';
	protected $tblKategori 			= 'kategori';
	protected $tblMasukan		= 'masukan';
	protected $tblUser 		= 'user';

	
	public function __construct($table)
	{
		if ($this->prefix) {
			$table = $this->prefix . $table;
		}
		$this->table 			= $table;
		$this->tblAdmin 		= $this->prefix . $this->tblAdmin;
		$this->tblCerita 		= $this->prefix . $this->tblCerita;
		$this->tblKategori 	= $this->prefix . $this->tblKategori;
		$this->tblMasukan 	= $this->prefix . $this->tblMasukan;
		$this->tblUser 	= $this->prefix . $this->tblUser;

		parent::__construct();
	}

	public function get($limit = null) //get all
	{
		$q = $this->db->get($this->table, $limit);
		return $q->result();
	}

	public function getById($id, $coloumn = 'id') //get index
	{
		$q = $this->db->where($coloumn, $id)->get($this->table);
		return $q->row();
	}

	public function isUnique($coloumn, $index)
	{
		$q = $this->db->where($coloumn, $index)->get($this->table);
		if ($q->num_rows() > 0) {
			return false;
		}

		return true;
	}

	public function isUniqueExceptId($coloumn, $index, $id, $coloumnId = 'id')
	{
		$q = $this->db->where_not_in($coloumnId, $id)
					   ->where($coloumn, $index)
					   ->get($this->table);
		if ($q->num_rows() > 0) {
			return false;
		}

		return true;
	}

	public function getByColoumn($coloumn, $value, $retRow = true)
	{
		$q = $this->db->where($coloumn, $value)->get($this->table);
		if ($retRow) {
			return $q->row();
		}
		return $q->result();
	}

	public function getByColoumnIn($coloumn = [], $values)
	{
		$q = $this->db->where_in($coloumn, $values)->get($this->table);
		return $q->result();
		
	}

	public function countTotal()
	{
		$q = $this->db->get($this->table);
		return $q->num_rows();
	}

	public function save($data)
	{
		return $this->db->insert($this->table, $data);
	}

	public function saveAndGetId($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function updateById($data, $id, $columnId = 'id')
	{
		$this->db->set($data);
		$this->db->where($columnId, $id);
		return $this->db->update($this->table);
	}

	public function updateByColoumn($data, $value, $column)
	{
		$this->db->set($data);
		$this->db->where($column, $value);
		return $this->db->update($this->table);
	}

	public function deleteById($id, $columnId = 'id')
	{
		$this->db->where($columnId, $id);
		return $this->db->delete($this->table);
	}

	public function deleteMultiple($ids, $column = 'id')
	{
		$this->db->where_in($column, $ids);
		$this->db->delete($this->table);
	}

	public function insertBatch($data)
	{
		$this->db->insert_batch($this->table, $data);
	}

	public function updateBatchById($data, $key)
	{
		$this->db->update_batch($this->table, $data, $key);
	}

}
