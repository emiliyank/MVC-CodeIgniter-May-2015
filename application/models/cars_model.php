<?php
Class Cars_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}

	public function get_all_cars(){
		$this->db->from('cars');
		$this->db->where('deleted_at', '0000-00-00');
		$query = $this->db->get();

		return $query->result_array();
	}

	public function get_car($car_id){
		$this->db->from('cars');
		$this->db->where('id', $car_id);
		$query = $this->db->get();
		return $query->row_array();
	}

	public function add_new_car(){
		$now = date('Y-m-d H:i:s');
		$car = array(
			'brand' => $this->input->post('brand'),
			'model' => $this->input->post('model'),
			'year_created' => $this->input->post('year_created'),
			'price' => $this->input->post('price'),
			'date_created' => $now,
			'category' => $this->input->post('category')
		);

		$this->db->insert('cars', $car);
	}

	public function update_car(){
		$car = array(
			'brand' => $this->input->post('brand'),
			'model' => $this->input->post('model'),
			'year_created' => $this->input->post('year_created'),
			'price' => $this->input->post('price'),
			'category' => 1
		);

		$this->db->where('id', $this->input->post('car_id'));
		$this->db->update('cars', $car);
	}

	public function delete_car($car_id){
		$now = date('Y-m-d H:i:s');
		$car = array(
			'deleted_at' => $now
		);

		$this->db->where('id', $car_id);
		$this->db->update('cars', $car);
	}
}