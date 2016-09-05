<?php


class oop_model extends  CI_model{


	//SELECT DATA BASE
	public  function  select ($query){
	
	$result=$this->db->query($query);
	
	if($result->num_rows>0){
	return $result;}
		
		else{ return false;}
		
	}
	
	//insert data 
	public  function insert ($query){
	
	$insert=$this->db->query($query);
	
	if($insert){
		
		header('location:indux.php?msg= Post inserted...');
	}else{
		echo"did  not insert";
	}
}


	//update   data
public  function update ($query){
	
	$update=$this->db->query($query);
	//2no delete or update url same msg
	if($update){
		
		header('location:indux.php?msg= Post updated...');
	}else{
		echo"did  not update";
	}
}

//delete data
public  function deletes($query){
	
	$delete=$this->db->query($query);
	
	if($delete){
		// dono url must same msg
		header('location:indux.php?msg= Post deleted...');
	}else{
		echo"did  not delete";
	}
}
	
	
	
	
	
}