<?php
class Look extends CI_Controller{
	public $cars = array('Tesla', 'Mercedes', 'Audi');

	public function demo1(){
		$data['dynamic_view'] = 'view1';
		$this->load->view('templates/main_template', $data);
	}

	public function demo2(){
		$this->load->library('form_validation');

		$data['dynamic_view'] = 'add_sponsors_view';
		$this->load->view('templates/main_template', $data);
	}

	public function demo3(){
		$data['c1'] = $this->cars;

		$data['dynamic_view'] = 'cars2';
		$this->load->view('templates/main_template', $data);
	}

	public function show_new_form(){
		$this->load->helper('form');

		$data['dynamic_view'] = 'new_form1';
		$this->load->view('templates/main_template', $data);
	}

	public function submit_new_form(){
		$this->show_new_form();
	}
}

?>