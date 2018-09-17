<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {
function __construct(){
	parent::__construct();
	if($this->session->userdata('status') != 1){
		redirect('backend/login');
	}
}

	public function index()
	{
        $this->load->view('admin/layout/header');
		$this->load->view('admin/klien');
		$this->load->view('admin/layout/footer');
	}
	function data(){
		$data['client'] = $this->db->get('client')->result();
		$this->load->view('admin/layout/header');
		$this->load->view('admin/data-klient', $data);
		$this->load->view('admin/layout/footer');
	}
	function simpan(){
		$filename = md5(uniqid());
		$config   = array(
                      'upload_path' => "./assets/upload/client/",
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
		  	 	'instansi' => $this->input->post('instansi'),
		  	 	'url' => $this->input->post('url'),
		  	 	'poto' => $files['file_name']
		  	 ];
		  	 $simpan = $this->db->insert('client', $data);
		  	 // print_r($simpan);
		  	   if($simpan){
		  	   	    redirect('backend/client/data');
		  	   }else{
		  	   	echo "<script>alert('data gagal di simpan');history.go(-1);</script>";
		  	   }
		  }
	}

  function hapus($id){
  	$where = array('id' => $id);
  	$hapus = $this->db->delete('client', $where);
  	// print_r($hapus);
  	 if($hapus){
  	 	echo "<script>alert('Data berhasil di delete !');history.go(-1);</script>";
  	 }else{
  	 		echo "<script>alert('Data gagal di delete');history.go(-1);</script>";
  	 }
  }
  function edit($id = ""){
        if($id == ""){
        	redirect('backend/client/data');
        }else{
        	$where = array('id' => $id);
        	$data['client'] = $this->db->get_where('client', $where)->result();
        	$this->load->view('admin/layout/header');
        	$this->load->view('admin/edit_client', $data);
        	$this->load->view('admin/layout/footer');
        }
  }
  function update(){
		$filename = md5(uniqid());
		$config   = array(
                      'upload_path' => "./assets/upload/client/",
                      'allowed_types' => "png|jpg",
                      'width' => 300,
                      'height' => 350,
                      'overwrite' => TRUE,
                      'file_name' => $filename
		 );
		$this->load->library('upload', $config);
		  if(empty($this->upload->do_upload('gambar'))){
		  	  	$files = $this->upload->data();
		  	 $data = [
		  	 	'instansi' => $this->input->post('instansi'),
		  	 	'url' => $this->input->post('url'),
		  	 ];
		  	 $id = $this->input->post('id');
		  	 $simpan = $this->db->update('client', $data, array('id' => $id));
		  	 // print_r($simpan);
		  	   if($simpan){
		  	   	    redirect('backend/client/data');
		  	   }else{
		  	   	echo "<script>alert('data gagal di simpan');history.go(-1);</script>";
		  	   }
		  }else{
		  	$files = $this->upload->data();
		  	 $data = [
		  	 	'instansi' => $this->input->post('instansi'),
		  	 	'url' => $this->input->post('url'),
		  	 	'poto' => $files['file_name']
		  	 ];
		  	 $id = $this->input->post('id');
		  	 $simpan = $this->db->update('client', $data, array('id' => $id));
		  	 // print_r($simpan);
		  	   if($simpan){
		  	   	    redirect('backend/client/data');
		  	   }else{
		  	   	echo "<script>alert('data gagal di simpan');history.go(-1);</script>";
		  	   }
		  }
	}
}
