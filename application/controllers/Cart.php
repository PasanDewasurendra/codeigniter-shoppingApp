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

		$rowid = $this->input->get('rowid');
		$qty = $this->input->get('qty');

		if(!empty($rowid) && !empty($qty)){
			$data = array(
				'rowid' => $rowid,
				'qty'   => $qty
			);
			$update = $this->cart->update($data);
		}

		echo $update?'ok':'err';
	}

	public function removeItem($id){

		$this->cart->remove($id);
		redirect('cart/');
	}

}
