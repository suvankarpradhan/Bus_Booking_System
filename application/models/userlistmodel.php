<?php

/**
 * all user database controls are done from here...
 */
class Userlistmodel extends CI_Model
{
	
	public function adduser($array){


		return $this->db->insert('user',$array);

	}

	public function login_valid($email,$password){
		$q = $this->db->where(['email'=>$email,'password'=>$password])
					  ->get('user');
		
		if ($q->num_rows()){
			return $q->row()->user_id;
			//return True;
		}
		else{
			return False;
		}
		
	}

	public function userlist(){

		$query = $this->db
							->select(['user_id','f_name','l_name','phone','email'])
							->from('user')
							->get();

		//print_r($query);exit();
		return $query->result();

	}
	public function userinfo($user_id){
		$query = $this->db->select(['f_name','l_name','phone','email'])
						->where('user_id',$user_id)
						->get('user');
		return $query->row();
	}

	public function deleteuser($user_id){
		return $this->db->delete('user',['user_id'=>$user_id]);
	}
}