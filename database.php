<?php

class database{
	
	public $host=DB_HOST;
	public $user=DB_USER;
	public $pass=DB_PASSS;
	public $db_name=DB_NAME;
	
	public $links ;
	public $error ;
	
	public function __construct(){
		$this->connect();	
	}
	
	
	private function connect(){
		
	$this->links= new mysqli ($this->host,$this->user,$this->pass,$this->db_name);	
	if(!$this->links){
		
		$this->error ="connection failed " ;
	}
	}
    // select data   
	public  function  select ($query){
	
	$result=$this->links->query($query);
	
	if($result->num_rows>0){
	return $result;}
		
		else{ return false;}	
	}

	
//insert data 
	public  function insert ($query){
	
	$insert=$this->links->query($query);
	
	if($insert){
		
		header('location:indux.php?msg= Post inserted...');
	}else{
		echo"did  not insert";
	}
}

//update   data
public  function update ($query){
	
	$update=$this->links->query($query);
	//2no delete or update url same msg
	if($update){
		
		header('location:indux.php?msg= Post updated...');
	}else{
		echo"did  not update";
	}
}

//delete data
public  function deletes($query){
	
	$delete=$this->links->query($query);
	
	if($delete){
		// dono url must same msg
		header('location:indux.php?msg= Post deleted...');
	}else{
		echo"did  not delete";
	}
}
	
	
	
}
?>