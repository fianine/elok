<?php
  class Admin extends CI_Controller{

    function __construct(){
      parent::__construct();
    }

    function dashboard(){
      $this->load->view('admin/index');
    }
  }
