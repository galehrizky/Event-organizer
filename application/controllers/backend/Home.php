<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
	parent::__construct();
	if($this->session->userdata('status') != 1){
		redirect('backend/login');
	}
}

	public function index()
	{

		$this->load->view('admin/layout/header');
		$data['home'] = $this->db->get('home')->result();
		$this->load->view('admin/home', $data);
		$this->load->view('admin/layout/footer');
	}
	function simpan(){
		 $filename = md5(uniqid());
		 $config   = array(
                      'upload_path' => "./assets/upload/home/",
                      'allowed_types' => "png|jpg",
                      'width' => 300,
                      'height' => 350,
                      'overwrite' => TRUE,
		 );
		 $this->load->library('upload', $config);
		   if(empty($this->upload->do_upload('gambar'))){
		   	     	$files = $this->upload->data();
		   	 $data = [
		   	 	'judul' => $this->input->post('judul'),
		   	 	'isi' => $this->input->post('isi'),
		   	 	'banner' => $files['file_name']
		   	 ];

		   	 $update = $this->db->update('home', $data, array('id' => '1'));
		   	  if(!$update){
		   	  	 echo "<script>alert('Gagal melakukan update Home !');history.go(-1);</script>";
		   	  }else{
		   	  	echo "<script>alert('Berhasil melakukan update Home !');history.go(-1);</script>";
		   	  }
		   }else{
		   	$files = $this->upload->data();
		   	 $data = [
		   	 	'judul' => $this->input->post('judul'),
		   	 	'isi' => $this->input->post('isi'),
		   	 	'banner' => $files['file_name']
		   	 ];

		   	 $update = $this->db->update('home', $data, array('id' => '1'));
		   	  if(!$update){
		   	  	 echo "<script>alert('Gagal melakukan update Home !');history.go(-1);</script>";
		   	  }else{
		   	  	echo "<script>alert('Berhasil melakukan update Home !');history.go(-1);</script>";
		   	  }
		   }
	}
}
