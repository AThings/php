<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('db_model');
		
	}
	public function page(){
		$data['query'] = NULL;
		$this->load->view('dbview',$data);
	}
	public function dbmodel(){
		$data['query'] = $this->db_model->select();
		$this->load->view('dbview',$data);
	}
	public function dbupdate(){
		$this->db_model->update();
		$data['query'] = $this->db_model->select();
		$this->load->view('dbview',$data);
	}
}
