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

	public function getOrder($id){
		$this->db->select('odr.* c.name, c.email, c.phone, c.address');
		$this->db->from($this->tblOrders.'as ord');
		$this->db->jont($this->tblCustomers.'as c', 'c.id = odr.cust_id', 'left');
		$this->db->where('odr',$id);
		$query = $this->db->get();
		$result = $query->row_array();
	}

	public function addOrder($data){
		if(!array_key_exists('created_date', $data)){
			$data['created_date'] = date('Y-m-d H-i-s');
		}
		if (!array_key_exists('updated_date', $data)){
			$data['updated_date'] = date('Y-m-d H-i-s');
		}
		$insert = $this->db->insert($this->tblOrders, $data);
		return $insert?$this->db->insert_id():false;
	}


}
