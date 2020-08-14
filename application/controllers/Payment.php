<?php


class Payment extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('form');
		$this->load->library('cart');
		$this->load->model('product');
		$this->controller = 'payment';
	}

	public function index(){

		$data = array();
		$data['orders'] = $this->cart->contents();

		if($this->cart->total_items()<=0){
			echo '<script>alert("Oops.You Dont have Any Product yet!");</script>';
			redirect('cart/');
		}

		$this->load->view('templates/header');
		$this->load->view('payment/index', $data);
		$this->load->view('templates/footer');
	}

	public function removeItem($id){
		$this->cart->remove($id);
		if($this->cart->total_items()<=0){
			redirect('cart/');
		}else{
			redirect('payment/index');
		}

	}

	public function buyNow(){

		$merchant_id = $_POST['merchant_id'];
		$order_id = $_POST['order_id'];
		$payhere_amount = $_POST['payhere_amount'];
		$payhere_currency = $_POST['payhere_currency'];
		$status_code = $_POST['status_code'];
		$md5sig = $_POST['md5sig'];

		$merchant_secret = 'XXXXXXXXXXXXX'; // Replace with your Merchant Secret (Can be found on your PayHere account's Settings page)

		$local_md5sig = strtoupper (md5 ( $merchant_id . $order_id . $payhere_amount . $payhere_currency . $status_code . strtoupper(md5($merchant_secret)) ) );

		if (($local_md5sig === $md5sig) AND ($status_code == 2) ){

		}

	}

}
