<?php

class Homecontrol extends MY_Controller{
	public function index(){
		$this->load->model('notification_offersmodel');
		$notificationlisting = $this->notification_offersmodel->notificationlist2();
		//print_r($notificationlisting);exit;
		$offerslisting = $this->notification_offersmodel->offerslist2();
    	//print_r($offerslisting);exit;
    	$this->load->view('homepage/home.php',['offerslisting'=>$offerslisting,'notificationlisting'=>$notificationlisting]);
	}

	public function home1(){
		$this->load->model('notification_offersmodel');
		$notificationlisting = $this->notification_offersmodel->notificationlist2();
		//print_r($notificationlisting);exit;
		$offerslisting = $this->notification_offersmodel->offerslist2();
    	//print_r($offerslisting);exit;
    	$this->load->view('homepage/home1.php',['offerslisting'=>$offerslisting,'notificationlisting'=>$notificationlisting]);
		// $this->load->view('homepage/home1.php');
	}

	public function user_reg(){
		$this->load->helper('form');
		$this->load->view('user/user_reg');
	}

	public function about_us(){
		$this->load->view('homepage/aboutus');
	}

	public function contact_us()
	{
		$this->load->view('homepage/contactus');
	}
}