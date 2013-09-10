<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload_model extends CI_Model {
 public function __construct()
 {
  parent::__construct();

 }

 public function do_upload()
 {
      $config['allowed_types'] = 'jpeg|gif|jpg|png';
      $config['upload_path'] = './uploads/';
      $config['max_size'] = '1000';

      $this->load->library('upload', $config);
      $this->upload->do_upload();

      $filename = $this->upload->file_name;
      //If the upload success
    //  $data=array(
    // // 'title'=>$this->input->post('title'),
    //     'filename' = $filename;
    //    );

      $this->db->insert('images',$filename);
 }
}