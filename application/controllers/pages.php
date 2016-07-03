<?php
  class Pages extends CI_Controller{

    function __construct(){
      parent::__construct();
      $this->load->model('PortofolioModel');
      $this->load->model('PagesModel');
      $this->load->model('SliderModel');
    }

    function index(){
      $data['showS'] = $this->SliderModel->showSlider();
      $this->load->view('pages/index',$data);
    }

    function portofolio(){
      $data['showK'] = $this->PortofolioModel->showKat();
      $data['showP'] = $this->PortofolioModel->showPorto();
      $this->load->view('pages/portofolio',$data);
    }

    function send(){
      date_default_timezone_set('Asia/Jakarta');
      $data = array(
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'no_telp' => $this->input->post('no_telp'),
            'pesan' => $this->input->post('pesan'),
						'tgl' => date('d/M/Y'),
						'jam' => date('h:i A')
        );
			$this->PagesModel->send($data);
			redirect('/');
    }
    
  }
