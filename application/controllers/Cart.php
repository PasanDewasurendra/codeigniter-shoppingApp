<?php

class Cart extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->library('cart');
		$this->load->model('product');
	}

	public function index(){
		$data = array();
		$data['orders'] = $this->cart->contents();

		$this->load->view('templates/header');
		$this->load->view('cart/index', $data);
		$this->load->view('templates/footer');
	}

	public function updateItemQty(){
		$update = 0;

		// Get cart item info
		$rowid = $this->input->get('rowid');
		$qty = $this->input->get('qty');

		// Update item in the cart
		if(!empty($rowid) && !empty($qty)){
			$data = array(
				'rowid' => $rowid,
				'qty'   => $qty
			);
			$update = $this->cart->update($data);
		}

		// Return response
		echo $update?'ok':'err';
	}

	public function removeItem($rowid){
		// Remove item from cart
		$remove = $this->cart->remove($rowid);

		// Redirect to the cart page
		redirect('cart/');
	}

}
