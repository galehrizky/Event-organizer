<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Photo extends CI_Controller {
function __construct(){
	parent::__construct();
	if($this->session->userdata('status') != 1){
		redirect('backend/login');
	}
}

	public function index()
	{
        $this->load->view('admin/layout/header');
		$this->load->view('admin/photo');
		$this->load->view('admin/layout/footer');
	}
	function data(){
		$this->load->view('admin/layout/header');
		$data['poto'] = $this->db->get('photo')->result();
		$this->load->view('admin/data-photo', $data);
		$this->load->view('admin/layout/footer');
	}
	function simpan(){
		$filename = md5(uniqid());
		$config   = array(
                      'upload_path' => "./assets/upload/photos/",
                      'allowed_types' => "png|jpg",
                      'width' => 300,
                      'height' => 350,
                      'overwrite' => TRUE,
                      'file_name' => $filename
		 );
		$this->load->library('upload', $config);
		  if(!$this->upload->do_upload('gambar')){
		  	echo $this->upload->display_errors();
		  }else{
		  	$files = $this->upload->data();
		  	 $data = [
		  	 	'project' => $this->input->post('projek'),
		  	 	'poto' => $files['file_name']
		  	 ];
		  	 $simpan = $this->db->insert('photo', $data);
		  	 // print_r($simpan);
		  	   if($simpan){
		  	   	    redirect('backend/photo/data');
		  	   }else{
		  	   	echo "<script>alert('data gagal di simpan');history.go(-1);</script>";
		  	   }
		  }
	}
	function hapus($id){
		$where = array('id' => $id);
		$delete = $this->db->delete('photo', $where);
		 // print_r($delete);
		 if($delete){
		 	echo "<script>alert('Data berhasil di hapus !');history.go(-1);</script>";
		 }else{
		 	echo "<script>alert('Data gagal di hapus !');history.go(-1);</script>";
		 }
	}
}
