<?php
  class PagesModel extends CI_Model{

    var $table = 'elok_pesan';

    function __construct(){
      parent::__construct();
    }

    function showPesan(){
      $this->db->select('*');
      $this->db->order_by('pesan_id','DESC');
      $query = $this->db->get($this->table);
      if($query->num_rows()>0){
        return $query->result_array();
      }
    }

    function send($data) {
      $this->db->insert($this->table,$data);
    }

  }
