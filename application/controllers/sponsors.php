<?php
class Sponsors extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('sponsors_model');
	}

	public function show_add_sponsor(){
		$this->load->library('form_validation');
		$this->load->view('add_sponsors_view');
	}

	public function insert_sponsor(){
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('sponsor', 'спонсор', 'required|min_length[3]');
		$this->form_validation->set_rules('country', 'Държава', 'required');
		$this->form_validation->set_rules('sector', 'сектор', 'required');


		if($this->form_validation->run() === FALSE){
			$this->show_add_sponsor();
		}else{
			$this->sponsors_model->add_sponsor();
			echo "Successfully inserted sponsor in DB!";
		}
	}
}

?>