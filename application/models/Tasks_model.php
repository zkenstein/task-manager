<?php

class Tasks_model extends CI_Model{
  function get_unstopped_timer($task_id){
    $this->db->where("task_id",$task_id);
    $this->db->where("stopped",0);
    $query=$this->db->get("timers");
    return $query->row();
  }
}
