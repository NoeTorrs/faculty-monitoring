<?php

class Faculty_M extends CI_Model {
    function insert($data,$table,$key=null,$key1=null,$key2=null){
        if($key!=null){
            $this->db->where("$key",$data[$key]);    
        }
    	if($key1!=null){
            $this->db->where('order_date >=', $key1);
            $this->db->where('order_date <=', $key2);
        }
    	$query = $this->db->get($table);
    	if ($query->num_rows()==0){
    		$this->db->insert($table,$data);
    		return "success";
    	}
    	else {
    		return "exists";
    	}      
    }
    function get($procedure=null){
        $query = $this->db->query("call ".$procedure);
        mysqli_next_result($this->db->conn_id);
        return $query->result_object();
    	
    }
}