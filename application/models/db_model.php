<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Db_model extends CI_Model {
	public function __construct(){
		$this->load->database();
	}
	public function select(){
		$query = $this->db->like('note','bu')->get('moneystudent');
		return $query->result();
	}

	public function update(){
		$data = array(
			'studentid' => '103',
			'company' => 'tabao',
			'note' => 'hahaha'
		);
		$this->db->update('moneystudent',$data,"id = 2");
	}
}
