<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_us extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->library('email');
		
    }

	public function index()
	{
		if (isset($_POST['submit'])) {
			# code...
		
			$cf_fname = $this->input->post('cf_fname');
		    $cf_lname = $this->input->post('cf_lname');
	        $cf_number = $this->input->post('cf_number');
	        $cf_email = $this->input->post('cf_email');
	        $cf_message = $this->input->post('cf_message');
	  //       $config = Array(
			//     'protocol' => 'smtp',
			//     'smtp_host' => 'ssl://smtp.googlemail.com',
			//     'smtp_port' => 465,
			//     'smtp_user' => ADMIN_EMAIL,
			//     'smtp_pass' => ADMIN_PASS,
			//     'mailtype'  => 'html', 
			//     'charset'   => 'iso-8859-1'
			// );
			//$this->load->library('email', $config);
			//$this->email->set_newline("\r\n");

			// Set to, from, message, etc.
			
	        $this->email->from($cf_email, $cf_fname.''.$cf_lname);
			$this->email->to('knightgaming1222@gmail.com');
			 
			$this->email->subject('Contacting  from Knifemaster gaming website');
			$this->email->message($cf_message.' Contact no:-'.$cf_number);

			$this->email->send();

			$this->session->set_flashdata("message","Messege Sent Sucessfully.");
			return redirect(BASE_URL);

		}
		else
		{
			$this->session->set_flashdata("message","There Is a Problem In Sending Your Messege.");
			return redirect(BASE_URL);
		}
	}
}