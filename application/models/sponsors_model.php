<?php
class Sponsors_model extends CI_Model{
	public function add_sponsor(){
		$sp = array(
			'sponsor' => $this->input->post('sponsor'),
			'country' => $this->input->post('country'),
			'president' => $this->input->post('president'),
			'sector' => $this->input->post('sector'),
			);

		return $this->db->insert('sponsors', $sp);
	}
}
?>