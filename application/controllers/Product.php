<?php 
class product extends CI_Controller
{
	public function index()
	{
		//$this->load->model('product_model');
		$data['products']=$this->product_model->getAllProducts();
		//$data['categories']=$this->product_model->getAllCategories();
		$data['main_content']="product";
		$this->load->view("Layouts/main", $data);
	}
	public function details($id)
	{
		
	}
	
}