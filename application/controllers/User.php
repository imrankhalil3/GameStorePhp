<?php 
class User extends CI_Controller
{
	public function Create()
	{
		$this->load->helper('form');
        $this->load->library('form_validation');
		//validation rules
		 $this->form_validation->set_rules('firstName', 'Username', 'trim|required', 
											array('required'=>'enter first name')
											);
         $this->form_validation->set_rules('lastName', 'Password', 'required');
		 $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		
		if($this->form_validation->run()==false)
		{
		$data['main_content']="register_user";
		$this->load->view("Layouts/main", $data);
		}
		else
		{
			$this->load->model('user_model'); //loads user_model
			if($this->user_model->register()) //if data inserted successfully
			{
			$this->session->set_flashdata('register', 'user added successfully');
			redirect("product");
			}
		}
	}
	public function login()
	{
		$this->load->helper('form');
        $this->load->library('form_validation');
		$this->load->model('user_model');
		//setting validation rules 
		 $this->form_validation->set_rules('password', 'Password', 'required');
		 $this->form_validation->set_rules('user_name', 'Email', 'required');
		
		$username=$this->input->post('user_name');
		$password=$this->input->post('password');
		
		$login_id=$this->user_model->login($username, $password);
		if($login_id)
		{
			$data=array(
				'user_id'=>$login_id,
				'username'=>$username,
				'logged_in'=>true
			);
			$this->session->set_userdata($data);
			//setmessage
			$this->session->set_flashdata('login_success','You login sucessfull');
			redirect('product');
		}
		else
		{
			$this->session->set_flashdata('login_fail','Login failded');
			redirect('product');
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('username');
        $this->session->sess_destroy();

        redirect('product');
	}
}