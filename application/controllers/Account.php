<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller
{
  public function __construct(){
    parent::__construct();
  }

  public function _remap($method){
    $this->load->view('default_top_v');
    switch ($method) {
      case 'register':
      $this->register();
      break;
      default:
      $this->signup();
      break;
    }
    $this->load->view('default_bottom_v');
  }

  public function signup(){
    $this->load->view('account/head_v');
  }
  public function register(){

    $this->load->library('form_validation');

    $this->form_validation->set_rules('email', '이메일 주소', 'required|valid_email|is_unique[courtwork_user.email]');
    $this->form_validation->set_rules('nickname', '닉네임', 'required|min_length[5]|max_length[20]');
    $this->form_validation->set_rules('password', '비밀번호', 'required|min_length[6]|max_length[30]|matches[re_password]');
    $this->form_validation->set_rules('re_password', '비밀번호 확인', 'required');
    $this->form_validation->set_message('required', '%s 필드는 필수입니다.');       // 입력하지 않았을 때. 유효하지 않을 때는 (valid_email)


    if($this->form_validation->run() === false){
      $this->load->view('account/head_v');
      $this->load->view('account/register_v');
    } else {
      if(!function_exists('password_hash')){
        $this->load->helper('password');
      }
      $hash = password_hash($this->input->post('password'), PASSWORD_BCRYPT);

      $this->load->model('account_m');
      $this->account_m->add(array(
        'email'=>$this->input->post('email'),
        'password'=>$hash,
        'nickname'=>$this->input->post('nickname')
      ));

      $this->session->set_flashdata('message', '회원가입에 성공했습니다.');
      $this->load->helper('url');
      redirect('/');
    }

  }


}
