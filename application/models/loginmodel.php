<?php

/**
*this model is uesd for controlling login section
*/
class Loginmodel extends CI_Model{

	public function login_valid($username,$password){
		$q = $this->db->where(['username'=>$username,'password'=>$password])
					  ->get('admin');
		
		if ($q->num_rows()){
			return $q->row()->admin_id;
			//return True;
		}
		else{
			return False;
		}
		
	}
}