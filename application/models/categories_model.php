<?php
Class Categories_model extends CI_Model{
	public function get_all_categories(){
		$this->db->from('categories');
		$query = $this->db->get();
		return $query->result_array();
	}
}