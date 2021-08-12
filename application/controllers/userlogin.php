<?php

class Userlogin extends MY_Controller{
	public function index(){
        if( $this->session->userdata('user_id')){
            return redirect('user/userpage');
        }

		$this->load->view('user/user_login');
	}

    public function user_info(){

        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
        
        if($this->form_validation->run('add_user_rules')){
            
            $post = $this->input->post();
            //print_r($post);exit;
            unset($post['submit'],$post['password1']);
            //print_r($post);exit;
            $this->userlistmodel->adduser($post);
            redirect(base_url('homecontrol'),'refresh');
        }else{

            $this->load->view('user/user_reg');

        }

    }

	public function user_login(){
		$this->load->library('form_validation');
		//$this->form_validation->set_rules('username', 'User Name', 'required|alpha|trim');
		//$this->form_validation->set_rules('password', 'Password', 'required');

		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

		if ($this->form_validation->run('user_login_rules') == FALSE){  //if validation passes
            $this->load->view('user/user_login');
            //echo "validation error";
         }
        else{
            //$this->load->view('validation successful');
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            //echo "email: $email and password: $password";
            //echo "validation successful";

            $Login_id=$this->userlistmodel->login_valid($email,$password);
            //print_r($Login_id);exit;
            if ($Login_id){
            	//echo "password match";
                $this->session->set_userdata('user_id',$Login_id);
                return redirect('user/userpage');
            	//credential valid
            }
            else{
            	$this->session->set_flashdata('login_failed','Invalid Username or Password');
                return redirect('userlogin');
                //echo "password not match";
            	//authentication failed
            }
        }
	}

    public function user_history(){
        $this->load->model('bookingmodel');
        $user_history = $this->bookingmodel->get_history();
        //print_r($user_history);exit;
        $this->load->view('userpage/history',['user_history'=>$user_history]);
    }

    public function user_history1(){
        $this->load->model('bookingmodel');
        $user_history = $this->bookingmodel->get_history();
        //print_r($user_history);exit;
        $this->load->view('userpage/history1',['user_history'=>$user_history]);
    }

    public function logout(){
        $this->session->unset_userdata('user_id');
        redirect(base_url('homecontrol'),'refresh');
    }

    private function _flashandredirect($successful,$successMessage,$failureMessage){

        if($successful ){
            $this->session->set_flashdata('feedback',$successMessage);
            $this->session->set_flashdata('feedback_class',"alert-success");
        }else{
                $this->session->set_flashdata('feedback',$failureMessage);
                $this->session->set_flashdata('feedback_class',"alert-danger");
            }
            return redirect('homecontrol');
    }

    public function __construct(){
        parent::__construct();          
            $this->load->helper('form');
            $this->load->model('userlistmodel');
    }
}