<?php
class Second extends CI_Controller{
	public function real(){
		$data['title'] = 'Noicy 12th graders in Vratsa!';
		$data['content'] = "They are really noisy!!!";
		$this->load->view('news', $data);
	}

	public function t(){
		echo "test";
	}
}

?>