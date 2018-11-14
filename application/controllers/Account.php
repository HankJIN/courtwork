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
      case 'signup':
      $this->signup();
      break;
      default:
      $this->signup();
      break;
    }
    $this->load->view('default_bottom_v');
  }

  public function signup(){
    $this->load->view('account/signup_v');
  }


}
