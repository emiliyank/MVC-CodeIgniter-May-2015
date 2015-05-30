<?php
class Teams extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('teams_model');
	}

	public function show_all_teams(){
		$data['all_teams'] = $this->teams_model->get_all_teams();
		$this->load->view('show_teams', $data);
	}

	public function show_one_team($team = 'Botev Vratsa'){
		$data['one_team'] = $this->teams_model->get_one_team($team);
		$this->load->view('show_one_team', $data);
	}

	public function show_add_team(){
		$this->load->library('form_validation');
		$this->load->view('add_team_view');
	}

	public function insert_team(){
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('team', 'тъ-тъ-тъ', 'required|min_length[3]');
		$this->form_validation->set_rules('country', 'Държава', 'required');
		$this->form_validation->set_rules('budget', 'бюджед', 'required');


		if($this->form_validation->run() === FALSE){
			$this->show_add_team();
		}else{
			$this->teams_model->add_team();
			echo "Successfully inserted team in DB!";
		}

	}
}

?>