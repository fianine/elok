<?php
  class Auth extends CI_Controller{

    function __construct(){
      parent::__construct();

    }

    function login(){
      $this->load->view('admin/login');
    }
  }
