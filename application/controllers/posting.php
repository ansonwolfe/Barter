<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Posting extends CI_Controller{
 
 public function __construct()
 {
  parent::__construct();
  $this->load->model('posting_model');
 }

 public function add_listing()
 {

  $result=$this->posting_model->add_listing();
  redirect('user/landing');
 }

  function delete()
 {
 	$this->posting_model->delete_listing();
 	redirect('/user/landing/', 'refresh');
 }

   function edit_title()
 {
 	$post_info = array('id' => $this->input->post('pk'),
 		'title' => $this->input->post('value'));

 	$this->posting_model->edit_listing($post_info);
 	redirect('/user/landing/', 'refresh');
 }
   function edit_posting()
 {
 	$post_info = array('id' => $this->input->post('pk'),
 		'description' => $this->input->post('value'));

 	$this->posting_model->edit_listing($post_info);
 	redirect('/user/landing/', 'refresh');
 }
   function edit_offer()
 {
 	$post_info = array('id' => $this->input->post('pk'),
 		'offer' => $this->input->post('value'));

 	$this->posting_model->edit_listing($post_info);
 	redirect('/user/landing/', 'refresh');
 }


}
?>