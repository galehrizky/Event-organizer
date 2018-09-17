<?php 
 if (!defined('BASEPATH'))
        exit('No direct script access allowed');
class M_Login extends CI_Model
{
	
  function validasi($data){
  	return $this->db->get_where('user', $data);
  }
}
?>