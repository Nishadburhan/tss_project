<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Base_model extends CI_Model {
	public $date;
	public function __construct()
    {
        parent::__construct();
        $this->load->config('my_config');
    }

    public function get_all($table) {
    	return $this->db->get($table);
    }

	public function add($table, $data) {
	 return $this->db->insert($table, $data);
	}

    public function update($table, $column, $key, $data) {
        $this->db->where($column, $key);
        $this->db->update($table, $data);
    }
    public function edit($table, $column, $key) {
        $this->db->where($column, $key);
        return $this->db->get($table);
    }

    public function delete($table, $column, $key) {
        $this->db->where($column, $key);
        $this->db->delete($table);
    }
    public function select_max($string, $table) {
        $this->db->select($string)->from($table);
        return $this->db->get();
    }
}