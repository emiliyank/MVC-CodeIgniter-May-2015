<?php
class Forms extends CI_Controller{
	public $cars = array('Tesla', 'Mercedes', 'Audi');

	public function view_cars1(){
		$data['c'] = $this->cars;
		return $this->load->view('cars1', $data);
	}

	public function view_cars2(){
		$data['c1'] = $this->cars;
		return $this->load->view('cars2', $data);
	}

	public function method1($one, $two="default two"){
		$data['one'] = $one;
		$data['t'] = $two;
		$this->load->view('params', $data);
	}

	public function method2($u){
		$data['username'] = $u;
		$this->load->view('params2', $data);
	}

	public function form1_show(){
		return $this->load->view('form1_show');
	}

	public function form1_submit(){
		$this->load->helper('form');

		$data['user'] = $this->input->post('username');
		$data['p'] = $this->input->post('pass');
		if($this->input->post('pass') == $this->input->post('pass2')){
			$data['equal'] = "Passwords are equal!";
		}else{
			$data['equal'] = "Passwords does not match!";
		}
		return $this->load->view('form1_submitted', $data);
	}
}

?>