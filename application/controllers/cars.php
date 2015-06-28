<?php
Class Cars extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->model(array('cars_model', 'categories_model'));
	}

	public function list_all_cars(){
		$data['all_cars'] = $this->cars_model->get_all_cars();

		$this->load->view('cars/list_cars', $data);
	}

	public function show_add_car(){
		$db_categories = $this->categories_model->get_all_categories();
		foreach($db_categories as $category){
			$options[$category['id']] = $category['category'];
		}
		$data['all_categories'] = $options;
		$this->load->view('cars/add_car', $data);
	}

	public function submit_car(){
		$this->form_validation->set_rules('brand', 'Brand', 'required');
		$this->form_validation->set_rules('model', 'Model', 'required');
		$this->form_validation->set_rules('year_created', 'Year', 'required');
		$this->form_validation->set_rules('price', 'Price', 'required');
		
		if($this->form_validation->run() == FALSE){
			$this->load->view('cars/add_car');
		}else{
			$this->cars_model->add_new_car();
			$this->list_all_cars();
		}
	}

	public function show_edit_car($car_id){
		$data['car'] = $this->cars_model->get_car($car_id);
		$data['all_categories'] = $this->categories_model->get_all_categories();

		$this->load->view('cars/edit_car', $data);
	}

	public function update_car($car_id){
		$this->form_validation->set_rules('brand', 'Brand', 'required');
		$this->form_validation->set_rules('model', 'Model', 'required');
		$this->form_validation->set_rules('year_created', 'Year', 'required');
		$this->form_validation->set_rules('price', 'Price', 'required');
		
		if($this->form_validation->run() == FALSE){
			$data['car'] = $this->cars_model->get_car($car_id);
			$this->load->view('cars/edit_car', $data);
		}else{
			$this->cars_model->update_car();
			$this->list_all_cars();
		}
	}

	public function delete_car($car_id){
		$this->cars_model->delete_car($car_id);
		$this->list_all_cars();
	}

}