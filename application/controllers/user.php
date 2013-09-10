<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller{
 public function __construct()
 {
  parent::__construct();
  $this->load->model('user_model');
 }
 public function index()
 {
  if(($this->session->userdata('user_name')!=""))
  {
   $this->landing();
  }
  else{
   $data['title']= 'Home';
   $this->load->view("header_view", $data);
   $this->load->view("home", $data);
   $this->load->view("footer_view", $data);   
  }
 }
 public function landing()
 {
  $data['title']= 'Barter | Welcome back!';
  $this->load->model('posting_model');

  $data['user_listings'] = $this->posting_model->get_user_listings();

  $this->load->view('header_view',$data);
  $this->load->view('profile.php', $data);
  $this->load->view('_postings_view', $data);
  $this->load->view('footer_view',$data);
 }

 // public function login_validation() {

 //    $this->load->library('form_validation');

 //    $this->form_validation->set_rules('email','Email', 'required|trim|xss_clean');
 //    $this->form_validation->set_rules('password','Password', 'required|md5|trim');

 //    if ($this->form_validation->run()) {
 //      redirect('user/landing');
 //    }
 //    else {
 //      $data['title']= 'Register Now!';
 //      $this->load->view('header_view');
 //      $this->load->view('login_view');
 //      $this->load->view('footer_view'); 
 //    }

 // }
 public function login()
 {
  $email=$this->input->post('email');
  $password=md5($this->input->post('password'));

  $result=$this->user_model->login($email,$password);
  if($result !== "") 
      redirect('user/landing');
  else        
    $data['login_error'] = 'Username or password do not match.';
      redirect('static_pages/registration');
 }
 public function thank()
 {
  $data['title']= 'Thank';
  $this->load->view('header_view',$data);
  $this->load->view('thank_view.php', $data);
  $this->load->view('footer_view',$data);
 }


 public function registration()
 {
  $this->load->library('form_validation');
  // field name, error message, validation rules
  $this->form_validation->set_rules('user_name', 'User Name', 'trim|required|min_length[4]|xss_clean');
  $this->form_validation->set_rules('first_name', 'First Name', 'trim|required|min_length[2]|xss_clean');
  $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|min_length[2]|xss_clean');
  $this->form_validation->set_rules('email_address', 'Email', 'trim|required|is_unique[users.email]|valid_email');
  $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
  $this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]');

  if($this->form_validation->run() == FALSE)
  {
   $this->index();
  }
  else
  {
   $this->user_model->add_user();
   $this->thank();
  }
 }
 public function logout()
 {
  $newdata = array(
  'user_id'   =>'',
  'user_name'  =>'',
  'first_name' => '',
  'last_name'  => '', 
  'user_email'     => '',
  'logged_in' => FALSE,
  );
  $this->session->unset_userdata($newdata);
  $this->session->sess_destroy();
  $this->index();
 }
}
?>