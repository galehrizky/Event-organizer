<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	function __construct(){
	parent::__construct();
	if($this->session->userdata('status') != 1){
		redirect('backend/login');
	}
}

	public function index()
	{

		$this->load->view('admin/layout/header');
		$data['about'] = $this->db->get('about')->result();
		$this->load->view('admin/about', $data);
		$this->load->view('admin/layout/footer');
	}
	function simpan(){
		$data = [
           'judul' => $this->input->post('judul'),
           'isi' => $this->input->post('isi')
		];
		$update = $this->db->update('about', $data, array('id' => '1'));
		 if(!$update){
		 	echo "<script>alert('Gagal melakukan update About !');history.go(-1);</script>";
		 }else{
		 	echo "<script>alert('Berhasil melakukan update About !');history.go(-1);</script>";
		 }
	}
}
