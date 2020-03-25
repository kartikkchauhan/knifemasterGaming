<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Route_to_admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		date_default_timezone_set("Asia/Kolkata");
		$this->load->library('email');
		$this->load->model('admin_verify');
		if($this->session->userdata('adminId'))
        {
            return redirect(BASE_URL.'admin');
        }
		
    }

    public function index()
	{
		$this->load->view('admin/login');
	}

	public function login()
	{
		$userName = $this->input->post('userName');
		$password = sha1($this->input->post('password'));



		$msg=$this->admin_verify->loginAdmin($userName,$password);
		if($msg)
		{
		
			// $this->session->set_flashdata("message","You are ready for Login.");
			// return redirect(BASE_URL);

			$this->session->set_userdata('adminId',$msg);

			return redirect(BASE_URL."admin/");

		}
		else
		{

			$this->session->set_flashdata("message","Error in your username or password.");
			return redirect(BASE_URL.'route_to_admin/');
		}

		// $this->load->view('admin/dashboard');
	}

}