<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_keamanan_admin extends CI_model {

  public function getkeamananadmin()
  {
    $username = $this->session->userdata('username');
    if(empty($username))
    {
      $this->session->sess_destroy();
      redirect('admin');
    }
  }
}
