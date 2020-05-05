<?php
//get all categories 
function getCategories_h()
{
	$CI=get_instance();
	$categories=$CI->product_model->getAllCategories();
	return $categories;
}