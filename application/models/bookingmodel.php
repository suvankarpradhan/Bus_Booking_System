<?php
/**
 * 
 */
class Bookingmodel extends CI_Model
{

	
	public function checkstatus($array){

		$query=$this->db->where('date',$array['date'])
						->where('bus_id',$array['bus_id'])
						->get('booking_details');
		
		if ($query->result_array()){
			$total_seat = $query->row()->total_seat;
			$booked_seat = $query->row()->booked_seat;
			
			$available_seat = $total_seat - $booked_seat;
			
			$date = $query->row()->date;
			$bus_id = $query->row()->bus_id;
			
			// $update_value = array('available_seat'=>$available_seat);
			
			// $this->db->where('date',$date)
			// 		->where('bus_id',$bus_id)
			// 		->update('booking_details',$update_value);
			//return True;
			// print_r($available_seat);exit;
			return $available_seat;
		}
		else{
			$this->db->insert('booking_details',$array);
			$update_value = array('available_seat'=>$array['total_seat']);
			
			$this->db->where('date',$array['date'])
					->where('bus_id',$array['bus_id'])
					->update('booking_details',$update_value);
			 return $array['total_seat'];
		}
	}

	
	public function	ticketinfo($array){
		//print_r($array);
		$query=$this->db->where('date',$array['date'])
						->where('bus_id',$array['bus_id'])
						->get('booking_details');
		
		$total_seat = $query->row()->total_seat;
		$total_book_seat = ($query->row()->booked_seat) + $array['bookseat_no'];
		$available_seat = $total_seat - $total_book_seat;
		//print_r($total_book_seat);exit;
		$update_value = array('booked_seat'=>$total_book_seat,'available_seat'=>$available_seat);
		$this->db->where('date',$array['date'])
					->where('bus_id',$array['bus_id'])
					->update('booking_details',$update_value);
		
		$this->db->insert('ticket_details',$array);
		
	}

	public function get_id(){
		$id = $this->db->select('ticket_id')
						->get('ticket_details');
		if ($id->result_array()) {
 		return ($id->last_row()->ticket_id);
 		}
	}

	public function get_history(){
		$user_id = $this->session->userdata('user_id');
		$query = $this->db
							->select(['ticket_id','date','bus_id','bookseat_no','total_fare'])
							->from('ticket_details')
							->where('user_id',$user_id)
							->get();
		//print_r($query->result());exit();
		return $query->result();
	}

	public function ticket_details(){
		$query = $this->db
							->select(['t1.ticket_id','t1.user_id','u1.f_name','t1.date','t1.bus_id','t1.bookseat_no','t1.total_fare'])
							->from('ticket_details as t1')
							->join('user as u1', 'u1.user_id = t1.user_id')
							->get();
		return $query->result();
	}
}