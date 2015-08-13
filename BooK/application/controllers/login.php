<?php

class Login extends CI_Controller{
	
    public function __construct(){
        parent::__construct();
       $this->load->helper(array('form', 'url'));
       $this->load->helper('security'); 

		$this->load->library('form_validation');
    }
    function index(){
		$data['main_content'] = 'login/login_form';
		$this->load->view('includes/template', $data);
	}
	function validate_credentials(){
            extract($_POST);
               $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
                if ($this->form_validation->run() == FALSE)
		{
                    
			redirect('login');
		}
		else
		{
			
		
		$this->load->model('membership_model');
		$query = $this->membership_model->validate($username,$password);
		
		if($query){
			$data = array(
				'name'=> $this->input->post('username'),
                                'firstName'=>$query->first_name,
                                'userID'=>$query->id,
				'is_logged_in' => true
			);
			
                       //print_r($data);exit;
			$this->session->set_userdata($data);
			redirect(base_url().'index.php/booking_controller');
		}else{
                    $this->session->set_flashdata('warning','<div class="alert alert-warning">Invalid username or password</div>');
			$this->index();
		}
                }
	}
	
        function logout(){
            
            $this->session->sess_destroy();
            redirect(base_url().'index.php/login');
        }
        
	function signup(){
		$data['main_content']= 'login/signup_form';
		$this->load->view('includes/template', $data);
	}
	function create_member(){
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email|is_unique[user.email]');
		
		
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|matches[password]');
		
		if($this->form_validation->run()==FALSE){
			$this->signup();
		}else{
			$this->load->model('membership_model');
                         $new_member_insert_data = array(
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username',TRUE),
            'password' => md5($this->input->post('password'))
        );
                         $query = $this->membership_model->create_member($new_member_insert_data);
			if($query){
                            $this->session->set_flashdata('loginSuccess','<div class="alert alert-success">Welcome, You can now Log In</div>');
                                redirect(base_url().'index.php/login');
//$data['main_content'] = 'login/signup_successful';
				//$this->load->view('includes/template', $data);
			}else{
				$this->load->view('signup_form');
			}
		}// nahi tumne yeh select query kahan rakhi hai isko insert krna chahiy
                
                
                
	}
}