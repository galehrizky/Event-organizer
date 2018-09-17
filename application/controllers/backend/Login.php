<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/login');
	}
	function ngecek(){
		$data = [
			'username' => htmlspecialchars($this->input->post('username')),
			'password' => htmlspecialchars(md5($this->input->post('password')))
		];
		$this->load->model('M_login');
		$validasi = $this->M_login->validasi($data);
		   if($validasi->num_rows() == 1){
		   	$this->session->set_userdata('file_manager', true);
		   	   foreach($validasi->result() as $sess){
		   	   	         $_SESSION['status'] = $sess->status;
		   	   	         $_SESSION['username'] = $sess->username;
		   	   	         $_SESSION['foto'] = $sess->foto;
		   	   	         $_SESSION['telepon'] = $sess->no_telp;
		   	   	         $_SESSION['email'] = $sess->email;
		   	   	         $_SESSION['id'] = $sess->id;
		   	   	         $this->session->set_userdata($_SESSION);
		   	   	           if($this->session->userdata('status') == 1){
		   	   	           	    redirect('backend/dashboard');
		   	   	           	    $this->session->sess_expiration = '900';
		   	   	           	    $this->session->sess_expire_on_close = 'false';
		   	   	           }
		   	   }
		   }else{
		   	echo "<script>alert('Gagal Login: Cek username , password!');history.go(-1);</script>";
		   }
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('backend/login');
	}
}
