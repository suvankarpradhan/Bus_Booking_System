<?php

/**
 * this model is uesd for controlling the bus list database
 */
class Buslistmodel extends CI_Model{

	public function buslist(){

		$admin_id = $this->session->userdata('admin_id');
		$query = $this->db
							->select(['bus_name','bus_type','seat_no','source','destination','depature','arrive','fare','bus_id'])
							->from('bus')
							->where('admin_id',$admin_id)
							->get();
		//print_r($query->result());exit();
		return $query->result();

	}

	public function addbus($array){


		return $this->db->insert('bus',$array);

	}

	public function find_bus($bus_id){

		$query = $this->db->select(['bus_id','bus_name','bus_type','seat_no','source','destination','depature','arrive','fare'])		
						->where('bus_id',$bus_id)
						->get('bus');
		return $query->row();


	}

	public function updatebus($bus_id, Array $buslisting){

		return $this->db
				->where('bus_id',$bus_id)
				->update('bus',$buslisting);

	}

	public function deletebus($bus_id){
		return $this->db->delete('bus',['bus_id'=>$bus_id]);
	}

	public function searchbus($source,$destination){

		$query = $this->db->select(['bus_id','bus_name','bus_type','seat_no','source','destination','depature','arrive','fare'])		
						->where(['source'=>$source,'destination'=>$destination])
						->get('bus');
		return $query->result();

	}

}