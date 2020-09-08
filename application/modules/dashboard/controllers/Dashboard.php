<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

  public function index()
  {
    // code...
    $data['_view'] = '';
    $this->load->view('dashboard/_layout', $data);
  }

}
