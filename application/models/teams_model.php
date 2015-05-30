<?php
class Teams_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}

	public function get_all_teams(){
		$query = $this->db->get('teams');
		return $query->result_array();
	}

	public function get_one_team($team){
		$this->db->from('teams');
		$this->db->where('teamName', $team);
		$query = $this->db->get();
		return $query->row_array();
	}

	public function add_team(){
		$team = array(
			'teamName' => $this->input->post('team'),
			'country' => $this->input->post('country'),
			'budget' => $this->input->post('budget'),
			'arena' => $this->input->post('arena'),
			);

		return $this->db->insert('teams', $team);
	}

}

?>