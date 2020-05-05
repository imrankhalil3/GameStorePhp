<?php 
class product_model extends CI_Model
{
	public function getAllProducts()
	{
		//query bulider functions 
	 $query=$this->db->get('products'); //select * from product 
	 return $query->result();
	}
	public function getAllCategories()
	{
		$this->db->select("*");
		$this->db->from("categories");
		$query=$this->db->get();
		return $query->result();
	}
}