<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faculty_C extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Faculty_M','mod');
    }
	public function index()
	{
		$this->load->view('header');
		$this->load->view('dashboard');
		$this->load->view('footer');
	}
	public function add_users()
	{
		$data['college'] = $this->mod->get("tbl_college");
		$data['course'] = $this->mod->get("tbl_course");
		$this->load->view('header');
		$this->load->view('add_users',$data);
		$this->load->view('footer');
	}
	public function set_schedule()
	{
		$data['users'] = $this->mod->get("tbl_users");
		$this->load->view('header');
		$this->load->view('set_schedule',$data);
		$this->load->view('footer');
	}
	public function set_attendance()
	{
		$this->load->view('header');
		$this->load->view('set_attendance');
		$this->load->view('footer');
	}
	public function add_subject()
	{
		$data['college'] = $this->mod->get("tbl_college");
		$data['course'] = $this->mod->get("tbl_course");
		$this->load->view('header');
		$this->load->view('add_subject',$data);
		$this->load->view('footer');
	}
	public function add_course()
	{
		$data['college'] = $this->mod->get("tbl_college");
		$this->load->view('header');
		$this->load->view('add_course',$data);
		$this->load->view('footer');
	}
	public function add_college()
	{
		$this->load->view('header');
		$this->load->view('add_college');
		$this->load->view('footer');
	}
	public function update_users()
	{
		$this->load->view('header');
		$this->load->view('update_users');
		$this->load->view('footer');
	}
	public function update_faculty()
	{
		$this->load->view('header');
		$this->load->view('update_faculty');
		$this->load->view('footer');
	}	
	public function update_schedule()
	{
		$this->load->view('header');
		$this->load->view('update_schedule');
		$this->load->view('footer');
	}	
	public function update_attendance()
	{
		$this->load->view('header');
		$this->load->view('update_attendance');
		$this->load->view('footer');
	}	
	public function update_subject()
	{
		$this->load->view('header');
		$this->load->view('update_subject');
		$this->load->view('footer');
	}	
	public function update_course()
	{
		$this->load->view('header');
		$this->load->view('update_course');
		$this->load->view('footer');
	}
	public function update_college()
	{
		$this->load->view('header');
		$this->load->view('update_college');
		$this->load->view('footer');
	}
	public function view_users()
	{
		$this->load->view('header');
		$this->load->view('view_users');
		$this->load->view('footer');
	}
	public function view_faculty()
	{
		$this->load->view('header');
		$this->load->view('view_faculty');
		$this->load->view('footer');
	}	
	public function view_schedule()
	{
		$this->load->view('header');
		$this->load->view('view_schedule');
		$this->load->view('footer');
	}	
	public function view_attendance()
	{
		$this->load->view('header');
		$this->load->view('view_attendance');
		$this->load->view('footer');
	}
		public function view_subject()
	{
		$this->load->view('header');
		$this->load->view('view_subject');
		$this->load->view('footer');
	}
	public function view_course()
	{
		$this->load->view('header');
		$this->load->view('view_course');
		$this->load->view('footer');
	}
	public function view_college()
	{
		$this->load->view('header');
		$this->load->view('view_college');
		$this->load->view('footer');
	}
	public function set_previlege()
	{
		$this->load->view('header');
		$this->load->view('set_previlege');
		$this->load->view('footer');
	}
}
