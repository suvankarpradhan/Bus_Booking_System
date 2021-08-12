<?php

class User extends MY_Controller{

	public function userpage(){
		$this->load->view('homepage/home1');
	}

	public function book(){
		$this->load->view('userpage/userdetail');
	}

	public function search(){

		$post = $this->input->post();
		unset($post['submit']);
		//print_r($post);exit;
		$source = $this->input->post('source');
		$destination = $this->input->post('destination');
		//echo "source: $source and destination: $destination";exit;
		$buslisting=$this->buslistmodel->searchbus($source,$destination);
		//print_r($buslisting);exit;

		$this->load->view('userpage/book',['buslisting'=>$buslisting]);        
	}

	public function check_bus(){
		$post = $this->input->post();
		unset($post['submit']); 
		$bus_id = $this->input->post('bus_id');
		//print_r($bus_id);exit;
		$selectbus = $this->buslistmodel->find_bus($bus_id);
		//print_r($selectbus);exit;
		$this->load->view('userpage/checkbus',['selectbus'=>$selectbus]);

	}

	public function selectbus(){


	}

	public function final_book(){
		$post = $this->input->post();
		unset($post['submit']);
		$date = $this->input->post('date');
		$newdate = date('Y-m-d',strtotime($date));
		$availdate = date('d-m-Y',strtotime($date));

		$bus_id = $this->input->post('bus_id');
		$seat_no = $this->input->post('seat_no');
		$value = array('date'=>$newdate,'bus_id'=>$bus_id,'total_seat'=>$seat_no);
		
		$status = $this->bookingmodel->checkstatus($value);
		// print_r($status);exit;
		$selectbus = $this->buslistmodel->find_bus($bus_id);

		if ($status > 0) {
			$available = array('date'=>$availdate,'available_seat'=>$status);

			$this->load->view('userpage/ticketdetail',['selectbus'=>$selectbus,'available'=>$available]);
		}else{
			echo "not available..";
		}
	}

	public function ticket_detail(){

		$post = $this->input->post();
		unset($post['submit']);
		$date = $this->input->post('date');
		$newdate = date('Y-m-d',strtotime($date));
		//print_r($newdate);exit;
		$bus_id = $this->input->post('bus_id');
		$num_of_seat = $this->input->post('num_of_seat');
		
		$user_id = $this->input->post('user_id');
		//print_r($user_id);exit;
		$userinfo = $this->userlistmodel->userinfo($user_id);
		$fare = $this->input->post('fare');
		$total_fare = $num_of_seat * $fare;
		//print_r($total_fare);

		//print_r($userinfo);exit;
		$info = array('date'=>$newdate, 'bus_id'=>$bus_id, 'bookseat_no'=>$num_of_seat, 'user_id'=>$user_id, 'total_fare'=>$total_fare);
		$detail = array('date'=>$newdate, 'bus_id'=>$bus_id, 'total_reserve'=>$num_of_seat, 'total_sale'=>$total_fare);
		//print_r($info);exit;
		$this->bookingmodel->ticketinfo($info);
		$ticket_id=$this->bookingmodel->get_id();
		$ticket_id = array('ticket_id'=>$ticket_id);
		//print_r($ticket_id);exit;
		$selectbus = $this->buslistmodel->find_bus($bus_id);
		$this->costestimationmodel->cost($detail);
		$this->load->view('userpage/invoice',['userinfo'=>$userinfo,'selectbus'=>$selectbus,'info'=>$info, 'ticket_id'=>$ticket_id]);
		//print_r($info);
	}

	public function __construct(){
		parent::__construct();			
		if(!$this->session->userdata('user_id')){
			return redirect('userlogin');
		}
		$this->load->helper('form');
		$this->load->model('userlistmodel');
		$this->load->model('buslistmodel');
		$this->load->model('bookingmodel');
		$this->load->model('costestimationmodel');
	}

}