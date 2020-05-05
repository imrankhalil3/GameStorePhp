<?php 
class user_model extends CI_Model
{
	public function register()
	{
		$data=array(
		'first_name'=>$this->input->post('firstName'),
		'last_name'=>$this->input->post('lastName'),
		'email'=>$this->input->post('email'),
		'username'=>$this->input->post('userName'),
		'password'=>md5($this->input->post('password'))
		);
		$insert=$this->db->insert('user',$data);
		return $insert;
	}
	public function login($username, $password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query= $this->db->get('user');
		if($query->num_rows()==1)
		{
			return $query->row(0)->id;
		}
		else
			return false;
		
	}
}