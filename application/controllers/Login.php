<?php

class Login extends MY_Controller{
	public function index(){
        if( $this->session->userdata('admin_id')){
            return redirect('admin/dashbord');
        }

		$this->load->helper('form');
		$this->load->view('admin/admin_login');
	}
	public function admin_login(){
		$this->load->library('form_validation');
		//$this->form_validation->set_rules('username', 'User Name', 'required|alpha|trim');
		//$this->form_validation->set_rules('password', 'Password', 'required');

		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

		if ($this->form_validation->run('admin_login_rules') == FALSE){  //if validation passes
            $this->load->view('admin/admin_login');
            //echo "validation error";
         }
        else{
            //$this->load->view('validation successful');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            //echo "user: $username and password: $password";
            //echo "validation successful";
            $this->load->model('loginmodel');

            $Login_id=$this->loginmodel->login_valid($username,$password);
            //print_r($Login_id);exit;
            if ($Login_id){
            	//echo "password match";
                $this->session->set_userdata('admin_id',$Login_id);
                return redirect('admin/dashbord');
            	//credential valid
            }
            else{
            	$this->session->set_flashdata('login_failed','Invalid Username or Password');
                return redirect('Login');
                //echo "password not match";
            	//authentication failed
            }
        }
	}
    public function logout(){
        $this->session->unset_userdata('admin_id');
        redirect(base_url('homecontrol'),'refresh');
    }
}