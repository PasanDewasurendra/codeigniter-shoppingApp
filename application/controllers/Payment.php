<?php


class Payment extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('form');
		$this->load->library('cart');
		$this->load->model('product');
		$this->load->model('user');

		if(!$this->session->userdata['logged_in']){
			redirect('cart/');
		}

		$user = ($this->session->userdata['logged_in']['email']);
		$this->data['customer'] = $this->user->read_user_information($user);
	}

	public function index(){

//		$data['myCart'] = $this->cart->contents();

		if($this->cart->total_items()<=0){
			echo '<script>alert("Oops.You Dont have Any Product yet!");</script>';
			redirect('cart/');
		}

		$this->load->view('templates/header');
		$this->load->view('payment/index',$this->data);
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

		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('phone', 'Phone', 'required');
		$this->form_validation->set_rules('city', 'City', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');

		if($this->form_validation->run() == FALSE){

			$this->load->view('templates/header');
			$this->load->view('payment/index',$this->data);
			$this->load->view('templates/footer');
		}else{

			$merchant_id = $this->input->post('merchant_id');
			$order_id = $this->input->post('order_id');
			$payhere_amount = $this->input->post('payhere_amount');
			$payhere_currency = $this->input->post('payhere_currency');
			$status_code = $this->input->post('status_code');
			$md5sig = $this->input->post('md5sig');

			$merchant_secret = 'XXXXXXXXXXXXX'; // Replace with your Merchant Secret (Can be found on your PayHere account's Settings page)

			$local_md5sig = strtoupper (md5 ( $merchant_id . $order_id . $payhere_amount . $payhere_currency . $status_code . strtoupper(md5($merchant_secret)) ) );

			if (($local_md5sig === $md5sig) AND ($status_code == 2) ){
				echo 'sdsd';;
			}
		}

	}

}
