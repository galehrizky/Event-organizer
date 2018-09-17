<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
  function __construct(){
	parent::__construct();
	if($this->session->userdata('status') != 1){
		redirect('backend/login');
	}
}

	public function index()
	{
        $this->load->view('admin/layout/header');
        $data = [
           'blog' => $this->db->get('blog')->num_rows(),
           'client' => $this->db->get('client')->num_rows(),
           'team' => $this->db->get('team')->num_rows(),
           'foto' => $this->db->get('photo')->num_rows(),
           'user' => $this->db->get('user')->num_rows()
           
        ];
		$this->load->view('admin/index', $data);
		$this->load->view('admin/layout/footer');
	}
}
