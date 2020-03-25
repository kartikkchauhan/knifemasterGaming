<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		date_default_timezone_set("Asia/Kolkata");
		$this->load->library('email');
		$this->load->model('admin_dashboard');

		if(!$this->session->userdata('adminId'))
		{
			return redirect(BASE_URL.'route_to_admin');
		}
		
    }

    public function index()
	{
		$this->load->view('admin/dashboard');
	}

	public function logout()
	{
		$this->session->unset_userdata('adminId');
		return redirect(BASE_URL.'route_to_admin');
	}

	public function roomId1()
	{

		$data = array(
			'room_id' => $this->input->post('roomId'),
			'password' => $this->input->post('roomPass'),
			'scrim' => 1,
	        'date' => date('Y-m-d')

		);


		$msg=$this->admin_dashboard->saveIdPass($data);
		if($msg)
		{
		
			$this->session->set_flashdata("message",$msg);

			return redirect(BASE_URL."admin/");

		}
	}

	public function roomId2()
	{

		$data = array(
			'room_id' => $this->input->post('roomId'),
			'password' => $this->input->post('roomPass'),
			'scrim' => 2,
	        'date' => date('Y-m-d')

		);


		$msg=$this->admin_dashboard->saveIdPass($data);
		if($msg)
		{
		
			$this->session->set_flashdata("message",$msg);

			return redirect(BASE_URL."admin/");

		}
	}




}