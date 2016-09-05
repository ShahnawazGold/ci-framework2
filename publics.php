<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class publics extends  CI_Controller {


	public function index()
	{
		$this->load->view('welcome_message');
		echo"shah";
		$this->load->helper('url');
	
	
	$data['news']= $this->test_model->get_users();
	 $this->load->view("test", $data);
	  
	 //$this->load->view('add_post');
		//$this->load->view('oop');
		
		//$this->query ="SELECT * FROM posts order by rand() LIMIT 0,8 ";
//id DESC
     // $posts = $this->load->db->select("SELECT * FROM posts order by rand() LIMIT 0,8 ");
	  
   //$posts= $db-> select ($query);
		// data bsee here 
		//$this->load->models('database');
		//$this->load->models('cofig');
	}
	public function insert(){
		
	
		 
		$data['news']= $this->test_model->get_insert();
		$this->load->view("add_post", $data);
		
	}
	
}
