<?php
  class Pages extends CI_Controller{

    function __construct(){
      parent::__construct();
    }

    function index(){
      $this->load->view('pages/index');
    }

    function portofolio(){
      $this->load->view('pages/portofolio');
    }
  }
