<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends CI_Controller {
function __construct(){
	parent::__construct();
	if($this->session->userdata('status') != 1){
		redirect('backend/login');
	}
}

	public function index()
	{
        $this->load->view('admin/layout/header');
		$this->load->view('admin/team');
		$this->load->view('admin/layout/footer');
	}
	function data(){
		$this->load->view('admin/layout/header');
		$data['team'] = $this->db->get('team')->result();
		$this->load->view('admin/data-team', $data);
		$this->load->view('admin/layout/footer');
	}
	function simpan(){
		$filename = md5(uniqid());
		$config   = array(
                      'upload_path' => "./assets/upload/team/",
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
			// print_r($files);
			$data = array(
				   'nama' => $this->input->post('nama'),
				   'jabatan' => $this->input->post('jabatan'),
				   'facebook' => $this->input->post('facebook'),
				   'twit' => $this->input->post('twit'),
				   'instagram' => $this->input->post('ig'),
				   'foto' => $files['file_name']
			);
			$simpan = $this->db->insert('team', $data);
			  if($simpan){
			  	redirect('backend/team/data');
			  }else{
			  	echo "<script>alert('Data gagal di simpan !');history.go(-1);</script>";
			  }
		}
	}

  function hapus($id){
  	$where = array('id' => $id);
  	$hapus = $this->db->delete('team', $where);
  	// print_r($hapus);
  	 if($hapus){
  	 	echo "<script>alert('Data berhasil di Hapus !');history.go(-1);</script>";
  	 }else{
  	 	echo "<script>alert('Data gagal di Hapus !');history.go(-1);</script>";
  	 }
  }
  function edit($id = ""){
  	 if($id == ""){
  	 	redirect('backend/team/data');
  	 }else{
  	 	$where = array('id' => $id);
  	 	$data['team'] = $this->db->get_where('team', $where)->result();
  	 	$this->load->view('admin/layout/header');
        $this->load->view('admin/edit-team', $data);
        $this->load->view('admin/layout/footer');
  	 }
  }
  function update(){
		$filename = md5(uniqid());
		$config   = array(
                      'upload_path' => "./assets/upload/team/",
                      'allowed_types' => "png|jpg",
                      'width' => 300,
                      'height' => 350,
                      'overwrite' => TRUE,
                      'file_name' => $filename
		 );
		$this->load->library('upload', $config);
		if(empty($this->upload->do_upload('gambar'))){
				$files = $this->upload->data();
			// print_r($files);
			$data = array(
				   'nama' => $this->input->post('nama'),
				   'jabatan' => $this->input->post('jabatan'),
				   'facebook' => $this->input->post('facebook'),
				   'twit' => $this->input->post('twit'),
				   'instagram' => $this->input->post('ig'),
			);
			$id = $this->input->post('id');
			$update = $this->db->update('team', $data, array('id' => $id));
			  if($update){
			  	redirect('backend/team/data');
			  }else{
			  	echo "<script>alert('Data gagal di simpan !');history.go(-1);</script>";
			  }
		}else{

			$files = $this->upload->data();
			// print_r($files);
			$data = array(
				   'nama' => $this->input->post('nama'),
				   'jabatan' => $this->input->post('jabatan'),
				   'facebook' => $this->input->post('facebook'),
				   'twit' => $this->input->post('twit'),
				   'instagram' => $this->input->post('ig'),
				   'foto' => $files['file_name']
			);
			$id = $this->input->post('id');
			$update = $this->db->update('team', $data, array('id' => $id));
			  if($update){
			  	redirect('backend/team/data');
			  }else{
			  	echo "<script>alert('Data gagal di simpan !');history.go(-1);</script>";
			  }
		}
	}
}
