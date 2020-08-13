<?php

class Product extends CI_Model{

	function __construct()
	{
		$this->tblProducts = 'products';
		$this->tblCustomers = 'customers';
		$this->tblOrders = 'orders';
	}

	public function getProducts($id = ''){

		if($id){
			$query = $this->db->get_where('products', array('id'=> $id));
			return $query->row_array();
		}else{
			$query = $this->db->get('products');
			return $query->result_array();
		}

	}



}
