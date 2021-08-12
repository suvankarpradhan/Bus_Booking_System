<?php

/**
 * this model is uesd for controlling the notification database
 */
class Notification_offersmodel extends CI_Model{

	public function addnotification($array){


		return $this->db->insert('notification',$array);

	}

	public function notificationlist(){

		$admin_id = $this->session->userdata('admin_id');
		$query = $this->db
							->select(['notification_id','notification'])
							->from('notification')
							->where('admin_id',$admin_id)
							->get();
		//print_r($query->result());exit();
		return $query->result();

	}

	public function notificationlist2(){

		$query = $this->db
							->select(['notification_id','notification'])
							->from('notification')
							->get();
		//print_r($query->result());exit();
		return $query->result();

	}

	public function find_notification($notification_id){

		$query = $this->db->select(['notification_id','notification'])		
						->where('notification_id',$notification_id)
						->get('notification');
		return $query->row();


	}

	public function updatenotification($notification_id, Array $notificationlisting){

		return $this->db
				->where('notification_id',$notification_id)
				->update('notification',$notificationlisting);

	}

	public function deletenotification($notification_id){
		return $this->db->delete('notification',['notification_id'=>$notification_id]);
	}
	

	public function addoffers($array){


		return $this->db->insert('offers',$array);

	}

	public function offerslist(){

		$admin_id = $this->session->userdata('admin_id');
		$query = $this->db
							->select(['offers_id','offers'])
							->from('offers')
							->where('admin_id',$admin_id)
							->get();
		//print_r($query->result());exit();
		return $query->result();

	}

	public function offerslist2(){

		$query = $this->db
							->select(['offers_id','offers'])
							->from('offers')
							->get();
		//print_r($query->result());exit();
		return $query->result();

	}

	public function find_offers($offers_id){

		$query = $this->db->select(['offers_id','offers'])		
						->where('offers_id',$offers_id)
						->get('offers');
		return $query->row();


	}

	public function updateoffers($offers_id, Array $offerslisting){

		return $this->db
				->where('offers_id',$offers_id)
				->update('offers',$offerslisting);

	}

	public function deleteoffers($offers_id){
		return $this->db->delete('offers',['offers_id'=>$offers_id]);
	}
}