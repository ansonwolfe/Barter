<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Posting_model extends CI_Model {
 public function __construct()
 {
  parent::__construct();
 }

 public function add_listing()
 {
  $data=array(
    'title'=>$this->input->post('title'),
    'description'=>$this->input->post('seeking'),
    'offer'=>$this->input->post('offer'),
    'user_id'=>$this->input->post('user_id'),
    'status_id'=>1,
	  'created_at' => date('Y-m-d')
  );
  $this->db->insert('postings',$data);
 }

public function get_user_listings() {
	$user = $this->session->userdata('user_id');
	$query = $this->db->get_where('postings', array('user_id' => $user));
	return $query->result();
}

public function edit_listing($data) 
{

	$this->db->where('id', $data['id']);
	$this->db->update('postings', $data);
}

public function delete_listing() {

	$this->db->where('id', $this->uri->segment(3));
	$this->db->delete('postings');

}


}
?>