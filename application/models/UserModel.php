<?php
  class UserModel extends CI_Model{

    var $table = 'elok_admin';

    function __construct(){
      parent::__construct();
    }

    function login($data){
      $check = $this->db->get_where($this->table,$data);
      return $check;
    }
  }
