<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct(){
		parent::__construct();
		date_default_timezone_set("Asia/Kolkata");
		$this->load->library('email');
		$this->load->model('dashboard');
		if(!$this->session->userdata('id'))
		{
			return redirect(BASE_URL);
		}
		
    }

	public function index()
	{
		$userId=$this->session->userdata('id');
		$date=date('Y-m-d');

		$info=$this->dashboard->info($userId);
		$chartInfo1=$this->dashboard->chartInfo1($date);
		$chartInfo2=$this->dashboard->chartInfo2($date);
		$data['info']=$info;
		$data['chartInfo2']=$chartInfo2;
		$data['chartInfo1']=$chartInfo1;

		$regInfo1=$this->dashboard->regInfo1($userId,$date);
		$regInfo2=$this->dashboard->regInfo2($userId,$date);

		$data['regInfo1']=$regInfo1;
		$data['regInfo2']=$regInfo2;


		//Get Slot List
		$slotList1=$this->dashboard->slotList1($date);
		$slotList2=$this->dashboard->slotList2($date);

		$data['slotList1']=$slotList1;
		$data['slotList2']=$slotList2;

		//get id & password
		$idPass1=$this->dashboard->idPass1($date);

		$data['idPass1']=$idPass1;

		$idPass2=$this->dashboard->idPass2($date);

		$data['idPass2']=$idPass2;

		// echo "<pre>";

		// print_r($data['idPass1']);
		// die();

		$this->load->view('user/dashboard',$data);
	}

	public function logout()
	{
		$this->session->unset_userdata('id');
		return redirect(BASE_URL);
	}

	public function scrim1()
	{
		$data = array(
			'user_id' =>$this->session->userdata('id'),
			'team_name' =>$this->input->post('teamName'),
			'date' => date('Y-m-d'),
	        'insterted_at' => date('Y-m-d H:i:s')

		);

		$msg=$this->dashboard->addToScim1($data);
		if($msg)
		{
		
			$this->session->set_flashdata("message",$msg);
			// return redirect(BASE_URL);

			return redirect(BASE_URL."users/");
		}
		else
		{

			$this->session->set_flashdata("message2","Error");
			return redirect(BASE_URL."users/");
		}
	}

	public function scrim2()
	{

		$data = array(
			'user_id' =>$this->session->userdata('id'),
			'team_name' =>$this->input->post('teamName'),
			'date' => date('Y-m-d'),
	        'insterted_at' => date('Y-m-d H:i:s')

		);

		$msg=$this->dashboard->addToScim2($data);
		if($msg)
		{
		
			$this->session->set_flashdata("message",$msg);
			// return redirect(BASE_URL);

			return redirect(BASE_URL."users/");
		}
		else
		{

			$this->session->set_flashdata("message2","Error");
			return redirect(BASE_URL."users/");
		}
	}

}

?>