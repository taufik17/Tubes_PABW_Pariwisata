<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_keamanan_user extends CI_model {

  public function getkeamananuser()
  {
    $username = $this->session->userdata('uname');
    if(empty($username))
    {
      $this->session->sess_destroy();
      redirect('user');
    }
  }
}
