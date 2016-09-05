<?Php

 class test_model extends  CI_model{

 ///CONSTRACT AUTO CALL KRTa h
 public function __construct()
        {
                $this->load->database();
        }
 
 
 
// method getter 
   public function get_users(){
	   
	
	
	//SELECT QURU H... DATA BASE KIYA H
	$query = $this->db->query("SELECT * FROM user order by rand() LIMIT 0,8  ");
	return $query->result_array();
   }
	
	
	
	
	//insert data 
	public  function get_insert (){
	
     //$this->db->insert('user',$data);
		$data = array(
        'title' => 'shah',
        'name'  => 'shah',
        
);

$this->db->insert('user',$data);
	
}

	public  function get_update (){
	
     $data = array(
        'title' => $title,
        'name' => $name,
        'date' => $date
);

$this->db->where('id', $id);
$this->db->update('mytable', $data);
		
	
}











}
?>