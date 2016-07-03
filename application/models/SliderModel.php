<?php
  class SliderModel extends CI_Model{

    var $table = 'elok_slider';

    function __construct(){
      parent::__construct();
    }

    function getQuery($datainput){
      $q = $this->db->query($datainput);
    }

    function showSlider(){
      $this->db->select('*');
      $this->db->order_by('slider_id','DESC');
      $query = $this->db->get($this->table);
      if($query->num_rows()>0){
        return $query->result_array();
      }
    }
  }
