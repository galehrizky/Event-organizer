<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index()
	{

		$this->load->view('home/layout/header');
		$data['blog'] = $this->db->order_by('id', 'DESC')->get('blog')->result();
		$this->load->view('home/blog', $data);
		$this->load->view('home/layout/footer');
	}
	function detail($slug = ""){
		if($slug == ""){
			show_404();
		}else{
			$this->load->model('M_Blog');
			$baca = $this->M_Blog->get_slug($slug);
			$data['blog'] = $baca;
			$data['post'] = $this->db->order_by('id', 'DESC')->get('blog')->result();
		    $this->load->view('home/blog-post', $data);
		    $this->load->view('home/layout/footer');

		}
	}
}
