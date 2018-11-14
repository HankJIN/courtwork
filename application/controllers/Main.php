<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller
{
	public function __construct(){
		parent::__construct();
	}

  public function _remap($method){
    $this->load->view('default_top_v');
    switch ($method) {
      case 'view':
      $this->view();
      break;
      default:
      $this->view();
      break;
    }
    $this->load->view('default_bottom_v');
  }

  public function view(){
    $this->load->view('main_v');
  }


}
