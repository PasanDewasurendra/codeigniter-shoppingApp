<?php

class Pages extends CI_Controller{
	public function view($page = 'home'){
		if(!file_exists(APPPATH.'views/'.$page.'.php')){
			show_404();
		}

		$data['title'] = ucfirst($page);

		$this->load->view('templates/header');
		$this->load->view($page, $data);
		$this->load->view('templates/footer');

	}
}
