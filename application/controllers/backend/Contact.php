<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
  function __construct(){
  parent::__construct();
  if($this->session->userdata('status') != 1){
    redirect('backend/login');
  }
}

	public function index()
	{
        $this->load->view('admin/layout/header');
        $data['contact'] = $this->db->get('contact')->result();
		$this->load->view('admin/kontak', $data);
		$this->load->view('admin/layout/footer');
	}
	function simpan(){
		$data = [
         'alamat' => $this->input->post('alamat'),
         'telepon' => $this->input->post('tlpn'),
         'email' => $this->input->post('email')
		];
      $update = $this->db->update('contact', $data, array('id' => '1'));
       if(!$update){
       	  echo "<script>alert('Gagal melakukan update Contact !');history.go(-1);</script>";
       }else{
       	echo "<script>alert('Berhasil melakukan update Contact !');history.go(-1);</script>";
       }
	}
}
