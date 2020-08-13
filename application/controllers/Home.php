<?php


class Home extends CI_Controller{

	public function index(){
		$data['title']  = 'Product List';

		$this->load->view('templates/header');
		$this->load->view('products/index');
		$this->load->view('templates/footer');

	}

}
