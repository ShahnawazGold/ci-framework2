<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class user extends  CI_Controller {


       // yehan bi CONSTATC CLL KRTY HAIN OR PARNT BI
        public function __construct()
        {
                parent::__construct();
                //$this->load->model('test_model'); yeh 
                //$this->load->helper('url_helper');
				 $this->load->model("test_model","m");
        }



	public function index()
	{
		
		 $this->load->view('index');
		
	}
	
	
	public function savadata()
	{
		
		// creat arry for dtata insertt
		
		$data = array(
		// arry mn data
		
		'name'=>$this->input->post('name'),
		'pass'=>$this->input->post('pass')
		
		);
		// inserrt in data base here
		$this->db->insert('user',$data);
		
		/// when insert here go to paga index
		redirect("user/index");
	}
	
	
	
	
	/// updata data yeh function jb hum id ko clik krty tw sara data again ly kr ata hash
	/// EIS KA KAAM SHOW KRNA H VALUE KO EDIT FORM 
	public function edit($id)
	{
		// m model mn dya h
		$row = $this->m->getonerow ($id);
		$data['r']= $row;
		$this->load->view( 'edit',$data);
		
	}
	
	public function update($id)
	{
		
		$id = $this->input->post('id');
		
		$data = array(
		// arry mn data
		
		'name'=>$this->input->post('name'),
		'pass'=>$this->input->post('pass')
		
		);
		// inserrt in data base here
		$this->db->where('id',$id);
		$this->db->update('user',$data);
		redirect("user/index");
	}
	
	public function delete($id)
	{
		 $id = $this->db->where('id',$id);
		$this->db->delete('user');
		redirect("user/index");
		
	}
	
	
	
	
	
	
	
	
}
