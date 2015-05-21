<?php
class First extends CI_Controller{
	public function test1(){
		echo "I am using codeigniter!";
	}

	public function real1(){
		return $this->load->view('view1');
	}
}

?>