<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller
{
  public function __construct(){
    parent::__construct();

    $this->load->library('form_validation');
    $this->load->model('account_m');
  }

  public function _remap($method){
    $this->load->view('default_top_v');
    // body 안 내용 구현
    switch ($method) {
      case 'signup':
        $this->signup();
        break;
      case 'signin':
        $this->signin();
        break;
      case 'logout':
        $this->logout();
      default:
        $this->signup();
        break;
    }
    $this->load->view('default_bottom_v');
  }

  public function signup(){

    if($this->input->method() === 'post'){
      $this->form_validation->set_rules('email', '이메일 주소', 'required|valid_email|is_unique[courtwork_user.email]');
      $this->form_validation->set_rules('nickname', '닉네임', 'required|min_length[5]|max_length[20]');
      $this->form_validation->set_rules('password', '비밀번호', 'required|min_length[6]|max_length[30]|matches[re_password]');
      $this->form_validation->set_rules('re_password', '비밀번호 확인', 'required');
      $this->form_validation->set_message('required', '%s 필드는 필수입니다.');       // 입력하지 않았을 때. 유효하지 않을 때는 (valid_email)

      if($this->form_validation->run() === false){
        $this->load->view('account/signup_v');
      } else {
        $hash = password_hash($this->input->post('password'), PASSWORD_BCRYPT);

        $this->account_m->add(array(
          'email'=>$this->input->post('email'),
          'password'=>$hash,
          'nickname'=>$this->input->post('nickname')
        ));
        alert('회원가입이 완료되었습니다.', BASEURL."account/signin");
      }

    }else{
      $this->load->view('account/signup_v');
    }
  }

  public function signin(){

    if($this->input->method() === 'post'){
      $this->form_validation->set_rules('email', '이메일 주소', 'required');
      $this->form_validation->set_rules('password', '비밀번호', 'required');

      if($this->form_validation->run() === false){
        $this->load->view('account/signin_v');
      } else {
        $user_info = $this->account_m->get_by_email($this->input->post('email'));     // 회원 정보 레코드
        if ( $user_info === FALSE ){
          // 가입된 이메일이 없다
          alert('이메일 또는 패스워드가 올바르지 않습니다.', BASEURL."account/signin");
        }else{
          if( password_verify($this->input->post('password'), $user_info->password) ){
            // 계정 존재 -> 세션 생성(기본적인 정보, 자주 쓰는 정보는 저장해둠)
            $sess_data = array(
              'user_id' => $user_info->id,
              'user_nickname' => $user_info->nickname,
              'user_email' => $user_info->email,
              'logged_in' => TRUE
            );
            $this->session->set_userdata($sess_data);
            alert('로그인 되었습니다.', BASEURL);
          }else{
            alert('이메일 또는 패스워드가 올바르지 않습니다.', BASEURL."account/signin");
          }
        }
      }
    }else{
      $this->load->view('account/signin_v');

    }
  }

  public function logout(){
    $this->session->sess_destroy();
    alert('로그아웃 되었습니다.', BASEURL);
  }

}
