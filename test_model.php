<?Php

 class test_model extends  CI_model{

 ///CONSTRACT AUTO CALL KRTa h
 public function __construct()
        {
                $this->load->database();
        }
 
 
  public function gettable ()
  {
	  
	   $query = $this->db->get('user');
	   return $query->result();
  }
  
  
  
  // yeh hum ny model py kaaam liaya /// ab ja ky hum log controll
  public function getonerow ($id)
  {
	  //id ko controller mn get kry gy
	   $this->db->where('id',$id);
	   $query = $this->db->get('user');
	   return $query->row();
  }


}
?>