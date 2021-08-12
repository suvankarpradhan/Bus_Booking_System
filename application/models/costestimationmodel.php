<?php
/**
 * 
 */
class Costestimationmodel extends CI_Model
{
	public function cost($array){
		$query=$this->db->where('date',$array['date'])
						->where('bus_id',$array['bus_id'])
						->get('cost_estimation');
		
		if ($query->result_array()){
			$total_reserve = $query->row()->total_reserve;
			$total_sale = $query->row()->total_sale;
			
			$total_reserve = $total_reserve + $array['total_reserve'];
			$total_sale = $total_sale + $array['total_sale'];
			
			$date = $query->row()->date;
			$bus_id = $query->row()->bus_id;
			
			$update_value = array('total_reserve'=>$total_reserve,'total_sale'=>$total_sale);
			
			$this->db->where('date',$date)
					->where('bus_id',$bus_id)
					->update('cost_estimation',$update_value);
		}
		else{
			$this->db->insert('cost_estimation',$array);
		}

	}

	public function estimation(){
		$query = $this->db
							->select(['date','bus_id','total_reserve','total_sale'])
							->get('cost_estimation');
		return $query->result();
	}
	
}