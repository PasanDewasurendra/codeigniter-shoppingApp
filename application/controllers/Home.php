<?php


class Home extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->library('cart');
		$this->load->model('product');
	}

	public function index(){
		$data['title']  = 'Product List';

		$data['product'] = $this->product->getProducts();

		$this->load->view('templates/header');
		$this->load->view('products/index', $data);
		$this->load->view('templates/footer');

	}

	public function view($id = null){
		if(empty($id)){
			show_404();
		}
		$data['product'] = $id;

		$this->load->view('templates/header');
		$this->load->view('products/view', $data);
		$this->load->view('templates/footer');
	}

	public function addToCart($pId){
		$product = $this->product->getProducts($pId);

		$data = array(
			'id' => $product['id'],
			'qty' => 1,
			'price' => $product['price'],
			'name' => $product['name'],
			'image' => $product['image']
		);
		$this->cart->insert($data);

		redirect('cart/');
	}

}
