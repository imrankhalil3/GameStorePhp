<?php 
class Cart extends CI_Controller
{
	public function add()
	{
		//getting data from form 
		$data=array(
		'id'=>$this->input->post('id'),
		'qty'=>$this->input->post('qty'),
		'price'=>$this->input->post('price'),
		'name'=>$this->input->post('name')
		);
		//add to cart 
		$this->cart->insert($data);
		redirect('product');
	}
	public function update()
	{
		$data = $_POST;
		//print_r($data);die();
		$this->cart->update($data);
		
		//Show Cart Page
		redirect('Cart/Details');
	}
	public function Details()
	{
		$data['main_content']='cart';
		$this->load->view('Layouts/main', $data);
		
	}
}