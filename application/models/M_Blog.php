<?php 
 if (!defined('BASEPATH'))
        exit('No direct script access allowed');
class M_Blog extends CI_Model
{
	
	function get_slug($slug = NULL){
  		$query = $this->db->get_where('blog', array('slug_blog' => $slug))->row();
  		return $query;
  	}
}
?>