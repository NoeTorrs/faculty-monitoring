<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->model('Faculty_M', 'faculty_m');
    }
    public function dir(){
    	$url = $this->uri->segment(3);
    	$response = "";
    	$data = [];
    	if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    		if ($url=="add_users" || $url=="add_subject" || $url=="update_course" || $url=="view_course" || $url=="set_schedule"){
				$data['course'] = $this->faculty_m->get("view_course");
    		}
    		if ($url=="add_course" || $url=="update_college" || $url=="view_college"){
    			$data['college'] = $this->faculty_m->get("view_college");
    		}
    		if ($url=="set_schedule" || $url=="update_users" || $url=="view_users"){
    			$data['users'] = $this->faculty_m->get("view_users");
    		}
    		if ($url=="set_attendance" || $url=="update_schedule" ||  $url=="view_schedule"){
    			$data['schedule'] = $this->faculty_m->get("view_sched");
    		}
    		if ($url=="update_subject" || $url=="view_subject" || $url=="set_schedule" ){
    			$data['subject'] = $this->faculty_m->get("view_subject");
    		}
    		if ($url=="update_attendance" || $url=="view_attendance") {
    			$data['attendance'] = $this->faculty_m->get("view_attendance");
    		}
    		if ($url=="manage_privilege") {
    			$data['userpriv'] = $this->faculty_m->get("view_userprivilege");
    		}	
    		$this->load->view('header');
			$this->load->view($url,$data);
			$this->load->view('footer');
		}

	    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	    	if ($url=="add_college"){
	    		$table="tbl_college";
	    		$key="college_code";
	    	}
	    	else if ($url=="add_course"){
	    		$table="tbl_course";
	    		$key="course_code";
	    	}
	    	else if ($url=="add_subject"){
	    		$table="tbl_subject";
	    		$key="subject_code";
	    	}
	    	else if ($url=="add_users"){
	    		$table="tbl_users";
	    		$key="username";
	    	}
	    	else if ($url=="set_sched"){
	    		$table="tbl_sched";
	    		$key="day";
	    		$key1="time_start";
	    		$key2="time_end";
	    	}
	    	foreach($_POST as $data):
    			if($data == null){
    				$response="error";
    			}
	    	endforeach;
	    	if ($response!="error"){
		    	$response=$this->faculty_m->insert($_POST,$table,$key);
		    }
	    	die(json_encode(
	    			["status"=>$response]
	    		));
		}

		if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
	     
		}

		if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
	     
		}	
    }
    

}