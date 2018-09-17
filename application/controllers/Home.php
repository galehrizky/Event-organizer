<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data = [
			'home'     => $this->db->get('home')->result(),
			'about'    => $this->db->get('about')->result(),
			'contact'  => $this->db->get('contact')->result(),
			'client'   => $this->db->get('client')->result(),
			'photo'    => $this->db->get('photo')->result(),
			'team'     => $this->db->get('team')->result()
		];
		$this->load->view('home/layout/header');
		$this->load->view('home/index', $data);
		$this->load->view('home/layout/footer');
	}
}
