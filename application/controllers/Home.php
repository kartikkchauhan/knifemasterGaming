<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('login_signup');
		if($this->session->userdata('id'))
		{
			return redirect(BASE_URL."users/");
		}
	}

	public function index()
	{
		$this->load->view('main/index');
	}

	public function signUp()
	{
		date_default_timezone_set("Asia/Kolkata");
		$data = array(
	        'teamName' => $this->input->post('teamName'),
			'name' => $this->input->post('name'),
			'contact' => $this->input->post('contact'),
			'email' => $this->input->post('email'),
			'password' => sha1($this->input->post('password')),
	        'datetime' => date('Y-m-d H:i:s')

		);


		if($this->login_signup->signUp($data))
		{
			$config=array(
            'charset'=>'utf-8',
            'wordwrap'=> TRUE,
            'mailtype' => 'html'
            );
            $this->email->initialize($config);

			$this->email->from("support@Knifemaster.in", "Knifemaster Gaming");
			$this->email->to($this->input->post('email'));
			 
			$this->email->subject('Contacting  from Knifemaster gaming website');
			$this->email->message($this->load->view('signUpMail', $data, TRUE));

			$this->email->send();

			$this->session->set_flashdata("message","Account Created Sucessfully. You can now Sign In.");
			return redirect(BASE_URL);
		}
		else
		{	

			$this->session->set_flashdata("message","Error in creating Your Account.");
			return redirect(BASE_URL);
		}
		

	}

	public function loginUser()
	{
		$email = $this->input->post('email');
		$password = sha1($this->input->post('password'));
		$msg=$this->login_signup->loginUser($email,$password);
		if($msg)
		{
		
			// $this->session->set_flashdata("message","You are ready for Login.");
			// return redirect(BASE_URL);

			$this->session->set_userdata('id',$msg);

			return redirect(BASE_URL."users/");
		}
		else
		{

			$this->session->set_flashdata("message","Error in your email or password.");
			return redirect(BASE_URL);
		}
	}
}
