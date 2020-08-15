<?php


class Users extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->library('cart');
		$this->load->database();
		$this->load->model('user');
		$this->load->model('product');
	}
	public function login(){
		$this->load->view('templates/header');
		$this->load->view('auth/login');
		$this->load->view('templates/footer');
	}
	public function register(){
		$this->load->view('templates/header');
		$this->load->view('auth/register');
		$this->load->view('templates/footer');
	}

	public function createUser(){
		//validations
		$this->form_validation->set_rules('first_name', 'FirstName', 'trim|required');
		$this->form_validation->set_rules('last_name', 'LastName', 'trim|required');
		$this->form_validation->set_rules('phone', 'Mobile Number', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('address', 'Address', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header');
			$this->load->view('auth/register');
			$this->load->view('templates/footer');
		} else {
			$name = $this->input->post('first_name').' '.$this->input->post('last_name');
			$data = array(
				'name' => $name,
				'email' => $this->input->post('email'),
				'phone' => $this->input->post('phone'),
				'address' => $this->input->post('address'),
				'password' => $this->input->post('password')
			);

			$result = $this->user->register($data);
			if ($result == TRUE) {
				$data['message_display'] = 'Registration Successfully !';
				$this->load->view('templates/header');
				$this->load->view('auth/login', $data);
				$this->load->view('templates/footer');
			} else {
				$data['message_display'] = 'User already exist!';
				$this->load->view('templates/header');
				$this->load->view('auth/register', $data);
				$this->load->view('templates/footer');
			}
		}
	}

	public function validateUser(){
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == FALSE) {

		//	echo 'aaaaaaa';
			if(isset($this->session->userdata['logged_in'])){

				$data['product'] = $this->product->getProducts();
				$this->load->view('templates/header');
				$this->load->view('products/index', $data);
				$this->load->view('templates/footer');
			}else{
				$this->load->view('templates/header');
				$this->load->view('auth/login');
				$this->load->view('templates/footer');
			}
		} else {
		//	echo 'fffffffffff';
			$data = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password')
			);
			$result = $this->user->login($data);
			if ($result == TRUE) {
				$username = $this->input->post('username');
				$result = $this->user->read_user_information($username);
				if ($result) {
					$session_data = array(
						'username' => $result[0]->name,
						'email' => $result[0]->email,
					);

					// Add user data in session
					$this->session->set_userdata('logged_in', $session_data);

					$data['product'] = $this->product->getProducts();
					$this->load->view('templates/header');
					$this->load->view('products/index', $data);
					$this->load->view('templates/footer');
				}
			}else{
				$data = array(
					'error_message' => 'Invalid Username or Password'
				);
				$this->load->view('templates/header');
				$this->load->view('auth/login');
				$this->load->view('templates/footer');
			}

		}

	}

	public function logout(){
		$sess_array = array(
			'username' => ''
		);
		$this->session->unset_userdata('logged_in', $sess_array);
		$data['message_display'] = 'Successfully Logout';
		$this->load->view('templates/header');
		$this->load->view('auth/login');
		$this->load->view('templates/footer');
	}

}
