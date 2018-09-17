<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
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
		$this->load->view('admin/blog');
		$this->load->view('admin/layout/footer');
	}
	function simpan(){
		 $filename = md5(uniqid());
		 $config   = array(
                      'upload_path' => "./assets/upload/blog/",
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
		   	$random = array('1','2','3','4','5','6','7','8','9','0');
		   	$slug = date('ymd').$random[array_rand($random)]."-".$this->input->post('judul');
		   	 $data = [
		   	 	'judul' => $this->input->post('judul'),
		   	 	'isi' => $this->input->post('isi'),
		   	 	'slug_blog' => slug($slug),
		   	 	'date' => date('Y M D'),
		   	 	'gambar' => $files['file_name']
		   	 ];

		   	 $simpan = $this->db->insert('blog', $data);
		   	 // print_r($simpan);
		   	  if(!$simpan){
		   	  	 echo "<script>alert('Data gagal di simpan !');history.go(-1);</script>";
		   	  }else{
		   	  	redirect('backend/blog/data');
		   	  }
		   }
	}

	function data(){
		$data['blog'] = $this->db->get('blog')->result();
		$this->load->view('admin/layout/header');
		$this->load->view('admin/data-blog', $data);
		$this->load->view('admin/layout/footer');
	}
	function hapus($id){
		$where = array('id' => $id);
		$hapus = $this->db->delete('blog', $where);
		if($hapus){
				 echo "<script>alert('Data Berhasil di hapus !');history.go(-1);</script>";
		}else{
				 echo "<script>alert('Data gagal di simpan !');history.go(-1);</script>";
		}
	}
	function edit($id = ""){
		if($id == ""){
			redirect('backend/blog/data');
		}else{
			$where = array('id' => $id);
			$data['blog'] = $this->db->get_where('blog', $where)->result();
			$this->load->view('admin/layout/header');
		    $this->load->view('admin/edit-blog', $data);
		    $this->load->view('admin/layout/footer');

		}
	}
	function update(){
		 $filename = md5(uniqid());
		 $config   = array(
                      'upload_path' => "./assets/upload/blog/",
                      'allowed_types' => "png|jpg",
                      'width' => 300,
                      'height' => 350,
                      'overwrite' => TRUE,
                      'file_name' => $filename
		 );
		 $this->load->library('upload', $config);
		   if(empty($this->upload->do_upload('gambar'))){
		   	   	$files = $this->upload->data();
		   	$random = array('1','2','3','4','5','6','7','8','9','0');
		   	$slug = date('ymd').$random[array_rand($random)]."-".$this->input->post('judul');
		   	 $data = [
		   	 	'judul' => $this->input->post('judul'),
		   	 	'isi' => $this->input->post('isi'),
		   	 	'slug_blog' => slug($slug),
		   	 	'date' => date('Y M D')
		   	 ];
             $id = $this->input->post('id');
		   	 $update = $this->db->update('blog', $data, array('id' => $id));
		   	 // print_r($simpan);
		   	  if(!$update){
		   	  	 echo "<script>alert('Data gagal di Update !');history.go(-1);</script>";
		   	  }else{
		   	  	redirect('backend/blog/data');
		   	  }
		   }else{
		   	$files = $this->upload->data();
		   	$random = array('1','2','3','4','5','6','7','8','9','0');
		   	$slug = date('ymd').$random[array_rand($random)]."-".$this->input->post('judul');
		   	 $data = [
		   	 	'judul' => $this->input->post('judul'),
		   	 	'isi' => $this->input->post('isi'),
		   	 	'slug_blog' => slug($slug),
		   	 	'date' => date('Y M D'),
		   	 	'gambar' => $files['file_name']
		   	 ];
             $id = $this->input->post('id');
		   	 $update = $this->db->update('blog', $data, array('id' => $id));
		   	 // print_r($simpan);
		   	  if(!$update){
		   	  	 echo "<script>alert('Data gagal di Update !');history.go(-1);</script>";
		   	  }else{
		   	  	redirect('backend/blog/data');
		   	  }
		   }
	}
}
