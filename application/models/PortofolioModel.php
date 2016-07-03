<?php
  class PortofolioModel extends CI_Model{

    var $table = 'elok_porto';
    var $table1 = 'elok_kategori';

    function __construct(){
      parent::__construct();
    }

    function getQuery($datainput){
      $q = $this->db->query($datainput);
    }

    function showPorto(){
      $this->db->select('*');
      $this->db->order_by('porto_id','DESC');
      $query = $this->db->get($this->table);
      if($query->num_rows()>0){
        return $query->result_array();
      }
    }

    function showKat(){
      $this->db->select('*');
      $this->db->order_by('kat_id','DESC');
      $query = $this->db->get($this->table1);
      if($query->num_rows()>0){
        return $query->result_array();
      }
    }

    function getDataEdit($id){
      $param = array('porto_id'=>$id);
      return $this->db->get_where($this->table,$param);
    }

  }
