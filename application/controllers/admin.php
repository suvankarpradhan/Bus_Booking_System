<?php

class Admin extends MY_Controller{
	
	public function dashbord(){
		
		$this->load->view('dashbord/dashbord');
	}

	public function add_notification(){
		$this->load->view('dashbord/addnotification');
	}

	public function notification_info(){
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
		if( $this->form_validation->run('add_notification_rules')){
			$post = $this->input->post();
			unset($post['submit']);
			//print_r($post);exit;
			$this->notification_offersmodel->addnotification($post);
			redirect('admin/notification_list','refresh');
		}else{
			$this->load->view('dashbord/addnotification');
		}
	}

	public function notification_list(){
		$notificationlisting = $this->notification_offersmodel->notificationlist();
		//print_r($notificationlisting);exit;
		$this->load->view('dashbord/notificationlist',['notificationlisting'=>$notificationlisting]);
	}

	public function edit_notification($notification_id){

		//echo "$notification_id";exit;
		$select_notification = $this->notification_offersmodel->find_notification($notification_id);
		//print_r($select_notification);exit;
		$this->load->view('dashbord/editnotification',['select_notification'=>$select_notification]);

	}

	public function update_notification(){

		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
		if( $this->form_validation->run('add_notification_rules')){
			$post = $this->input->post();
			$notification_id=$post['notification_id'];
			unset($post['submit'],$post['notification_id']);
			//print_r($post);exit;
			$this->notification_offersmodel->updatenotification($notification_id,$post);
			redirect('admin/notification_list','refresh');
		}else{
			$this->load->view('dashbord/editnotification');
		}

	}

	public function delete_notification(){

		//print_r($this->input->post());
		$notification_id = $this->input->post('notification_id');
		$this->notification_offersmodel->deletenotification($notification_id);
		redirect('admin/notification_list','refresh');
	}

		public function add_offers(){
		$this->load->view('dashbord/addoffers');
	}

	public function offers_info(){
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
		if( $this->form_validation->run('add_offers_rules')){
			$post = $this->input->post();
			unset($post['submit']);
			//print_r($post);exit;
			$this->notification_offersmodel->addoffers($post);
			redirect('admin/offers_list','refresh');
		}else{
			$this->load->view('dashbord/addoffers');
		}
	}

	public function offers_list(){
		$offerslisting = $this->notification_offersmodel->offerslist();
		//print_r($offerslisting);exit;
		$this->load->view('dashbord/offerslist',['offerslisting'=>$offerslisting]);
	}

	public function edit_offers($offers_id){

		//echo "$offers_id";exit;
		$select_offers = $this->notification_offersmodel->find_offers($offers_id);
		//print_r($select_offers);exit;
		$this->load->view('dashbord/editoffers',['select_offers'=>$select_offers]);

	}

	public function update_offers(){

		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
		if( $this->form_validation->run('add_offers_rules')){
			$post = $this->input->post();
			$offers_id=$post['offers_id'];
			unset($post['submit'],$post['offers_id']);
			//print_r($post);exit;
			$this->notification_offersmodel->updateoffers($offers_id,$post);
			redirect('admin/offers_list','refresh');
		}else{
			$this->load->view('dashbord/editoffers');
		}

	}

	public function delete_offers(){

		//print_r($this->input->post());
		$offers_id = $this->input->post('offers_id');
		$this->notification_offersmodel->deleteoffers($offers_id);
		redirect('admin/offers_list','refresh');
	}


	public function buslist(){
		$buslisting = $this->buslistmodel->buslist();
		$this->load->view('dashbord/buslist',['buslisting'=>$buslisting]);

	}

	public function add_bus(){

		$this->load->view('dashbord/addbus');
	}

	public function bus_info(){

		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
		
		if( $this->form_validation->run('add_bus_rules')){

			$post = $this->input->post();
			//print_r($post);exit;
			unset($post['submit']);

			return $this->_flashandredirect(
					$this->buslistmodel->addbus($post),
					"Bus information is added successfully",
					"Bus information is not added successfully, please try again"
					);
		}else{
			$this->load->view('dashbord/addbus');
		}
	}

	public function edit_bus($bus_id){

		//echo "$bus_id";
		$select_bus = $this->buslistmodel->find_bus($bus_id);
		//print_r($select_bus);
		$this->load->view('dashbord/editbus',['select_bus'=>$select_bus]);

	}

	public function update_bus(){

		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
		
		if( $this->form_validation->run('add_bus_rules')){

			$post = $this->input->post();
			$bus_id = $post['bus_id'];
			unset($post['submit'],$post['bus_id']);

			//print_r($post); exit;
			return $this->_flashandredirect(
					$this->buslistmodel->updatebus($bus_id,$post),
					"Bus information is updated successfully",
					"Bus information is not updated successfully, please try again"
					);
		}else{
			$this->load->view('dashbord/editbus');
		}

	}

	public function delete_bus(){

		//print_r($this->input->post());
		$bus_id = $this->input->post('bus_id');
		return $this->_flashandredirect(
				$this->buslistmodel->deletebus($bus_id),
				"Bus information is deleted successfully",
				"Bus information is not deleted successfully, please try again"
				);
	}

	public function userlist(){
		
		//echo "user list is here";
		$userlisting = $this->userlistmodel->userlist();
		//print_r($userlisting);
		$this->load->view('dashbord/userlist',['userlisting'=>$userlisting]);
	}

	public function delete_user(){

		//print_r($this->input->post());
		$user_id = $this->input->post('user_id');
		return $this->_flashandredirect(
				$this->userlistmodel->deleteuser($user_id),
				"User information is deleted successfully",
				"User information is not deleted successfully, please try again"
				);
	}

	public function ticket_details(){
		$ticket_detailing = $this->bookingmodel->ticket_details();
		// echo "<pre>";
		// print_r($ticket_detailing);exit;
		$this->load->view('dashbord/ticket_details',['ticket_detailing'=>$ticket_detailing]);
	}

	public function cost_estimation(){
		$estimation = $this->costestimationmodel->estimation();
		//print_r($estimation);exit;
		$this->load->view('dashbord/cost_estimation',['estimation'=>$estimation]);
	}

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('admin_id')){
			return redirect('Login');
		}
		$this->load->model('userlistmodel');
		$this->load->model('buslistmodel');
		$this->load->model('bookingmodel');
		$this->load->model('costestimationmodel');
		$this->load->model('notification_offersmodel');
		$this->load->helper('form');
	}

	private function _flashandredirect($successful,$successMessage,$failureMessage){

		if($successful ){
			$this->session->set_flashdata('feedback',$successMessage);
			$this->session->set_flashdata('feedback_class',"alert-success");
		}else{
				$this->session->set_flashdata('feedback',$failureMessage);
				$this->session->set_flashdata('feedback_class',"alert-danger");
			}
			return redirect('admin/buslist');
	}
}