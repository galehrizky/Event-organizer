<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('slug','url');
		if($this->session->userdata('status') != 1){
		redirect('backend/login');
	}
	}

	public function index()
	{
		$this->load->view('admin/layout/header');
		$this->load->view('admin/admin');
		$this->load->view('admin/layout/footer');
	}
	function simpan(){
		 $filename = md5(uniqid());
		 $config   = array(
                      'upload_path' => "./assets/upload/admin/",
                      'allowed_types' => "png|jpg",
                      'width' => 300,
                      'height' => 350,
                      'overwrite' => TRUE,
                      'file_name' => $filename
		 );
		 $this->load->library('upload', $config);
		   if(!$this->upload->do_upload('gambar')){
		   	echo 	$this->upload->display_errors();
		   }else{
		   	$files = $this->upload->data();
		   	 $data = [
		   	 	'username' => $this->input->post('username'),
		   	 	'password' => md5($this->input->post('password')),
		   	 	'status' => $this->input->post('status'),
		   	 	'email' => $this->input->post('email'),
		   	 	'no_telp' => $this->input->post('tlp'),
		   	 	'foto' => $files['file_name']
		   	 ];

		   	 $simpan = $this->db->insert('user', $data);
		   	 // print_r($simpan);
		   	  if(!$simpan){
		   	  	 echo "<script>alert('Data gagal di simpan !');history.go(-1);</script>";
		   	  }else{
		   	  	 redirect('backend/admin/data');
		   	  }
		   }
	}

	function data(){
		$data['admin'] = $this->db->get('user')->result();
		$this->load->view('admin/layout/header');
		$this->load->view('admin/data-admin', $data);
		$this->load->view('admin/layout/footer');
	}
	function hapus($id){
		$where = array('id' => $id);
		$hapus = $this->db->delete('user', $where);
		if($hapus){
				 echo "<script>alert('Data Berhasil di hapus !');history.go(-1);</script>";
		}else{
				 echo "<script>alert('Data gagal di simpan !');history.go(-1);</script>";
		}
	}
	function edit($id = ""){
		if($id == ""){
			redirect('backend/admin/data');
		}else{
			$where = array('id' => $id);
			$data['admin'] = $this->db->get_where('user', $where)->result();
			$this->load->view('admin/layout/header');
		    $this->load->view('admin/edit-admin', $data);
		    $this->load->view('admin/layout/footer');

		}
	}
	function update(){
		 $filename = md5(uniqid());
		 $config   = array(
                      'upload_path' => "./assets/upload/admin/",
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
		   	 	'username' => $this->input->post('username'),
		   	 	'status' => $this->input->post('status'),
		   	 	'email' => $this->input->post('email'),
		   	 	'no_telp' => $this->input->post('tlp'),
		   	 ];
             $id = $this->input->post('id');
		   	 $update = $this->db->update('user', $data, array('id' => $id));
		   	 // print_r($simpan);
		   	  if(!$update){
		   	  	 echo "<script>alert('Data gagal di Update !');history.go(-1);</script>";
		   	  }else{
		   	  	redirect('backend/admin/data');
		   	  }
		   }else{
		   	$files = $this->upload->data();
		   	$data = [
		   	 	'username' => $this->input->post('username'),
		   	 	'status' => $this->input->post('status'),
		   	 	'email' => $this->input->post('email'),
		   	 	'no_telp' => $this->input->post('tlp'),
		   	 	'foto' => $files['file_name']
		   	 ];
             $id = $this->input->post('id');
		   	 $update = $this->db->update('user', $data, array('id' => $id));
		   	 // print_r($simpan);
		   	  if(!$update){
		   	  	 echo "<script>alert('Data gagal di Update !');history.go(-1);</script>";
		   	  }else{
		   	  	redirect('backend/admin/data');
		   	  }
		   }
	}
	function edit_profile($id = ""){
		 if($id == ""){
		 	redirect('backend');
		 }else{
		 	$where = array('id' => $id);
			$data['admin'] = $this->db->get_where('user', $where)->result();
			$this->load->view('admin/layout/header');
		    $this->load->view('admin/update-admin', $data);
		    $this->load->view('admin/layout/footer');
		 }
	}
	function update_profile(){
		 $filename = md5(uniqid());
		 $config   = array(
                      'upload_path' => "./assets/upload/admin/",
                      'allowed_types' => "png|jpg",
                      'width' => 300,
                      'height' => 350,
                      'overwrite' => TRUE,
                      'file_name' => $filename
		 );
		 $this->load->library('upload', $config);
		   if(empty($this->upload->do_upload('gambar'))){
		   	      	$files = $this->upload->data();
		   	$pwlama = md5($this->input->post('passwordlm'));
		   	$ngecek = $this->db->get_where('user', array('password' => $pwlama));
		   	 if($ngecek->num_rows() == 1){
		   	    	  	$data = [
					   	 	'username' => $this->input->post('username'),
					   	 	'status' => $this->input->post('status'),
					   	 	'password' => md5($this->input->post('password')),
					   	 	'email' => $this->input->post('email'),
					   	 	'no_telp' => $this->input->post('tlp'),
					   	 	'foto' => $files['file_name']
		   	          ];
             $id = $this->input->post('id');
		   	 $update = $this->db->update('user', $data, array('id' => $id));
		   	 print_r($simpan);
		   	  if(!$update){
		   	  	 echo "<script>alert('Data gagal di Update !');history.go(-1);</script>";
		   	  }else{
		   	  	redirect('backend/dashboard');
		   	  }
		   	 }else{
		   	 	echo "<script>alert('Password lama salah ! !');history.go(-1);</script>";
		   	 }
		   }else{
		   	$files = $this->upload->data();
		   	$pwlama = md5($this->input->post('passwordlm'));
		   	$ngecek = $this->db->get_where('user', array('password' => $pwlama));
		   	 if($ngecek->num_rows() == 1){
		   	    	  	$data = [
					   	 	'username' => $this->input->post('username'),
					   	 	'status' => $this->input->post('status'),
					   	 	'password' => md5($this->input->post('password')),
					   	 	'email' => $this->input->post('email'),
					   	 	'no_telp' => $this->input->post('tlp'),
					   	 	'foto' => $files['file_name']
		   	          ];
             $id = $this->input->post('id');
		   	 $update = $this->db->update('user', $data, array('id' => $id));
		   	 print_r($simpan);
		   	  if(!$update){
		   	  	 echo "<script>alert('Data gagal di Update !');history.go(-1);</script>";
		   	  }else{
		   	  	redirect('backend/dashboard');
		   	  }
		   	 }else{
		   	 	echo "<script>alert('Password lama salah ! !');history.go(-1);</script>";
		   	 }
		 }
	}
}
