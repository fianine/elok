<?php
  class Auth extends CI_Controller{

    var $model = 'UserModel';
    var $table = 'elok_admin';

    function __construct(){
      parent::__construct();
        $this->load->model($this->model);
    }

    function login(){
      $this->load->view('admin/login');
    }

    function checkLogin(){
				$data = array('username' => $this->input->post('username', TRUE),
											'password' => md5($this->input->post('password', TRUE))
								);
				$hasil = $this->UserModel->login($data);
				if ($hasil->num_rows() == 1) {
				foreach ($hasil->result() as $sess) {
					$sess_data['logged_in'] = 'Sudah Login';
					$sess_data['user_id'] = $sess->user_id;
					$sess_data['username'] = $sess->username;
					$sess_data['level'] = $sess->level;
					$sess_data['isLogin'] = TRUE;
					$this->session->set_userdata($sess_data);
				}
				if ($this->session->userdata('level')=='admin') {
					redirect('admin/dashboard');
				}
				elseif ($this->session->userdata('level')=='Member') {
					redirect('membercontroller/home');
				}
				}else {
					echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
				}
    }

    function logout(){
      $this->session->unset_userdata('username');
			$this->session->unset_userdata('level');
			$this->session->sess_destroy();
			redirect('auth/login');
    }
  }
