<?php
class Login_signup extends CI_Model {

    public function __construct() {
        parent::__construct();
		$this->load->database();

    }
    
    public function signUp($data)
    {
    	// echo "<pre>";
    	// print_r($data);
    	// die();
        $email=$data['email'];
        $query = "SELECT * FROM users WHERE `email` = '$email' ";
        
        $result = $this->db->query($query);

        if ($result->num_rows() > 0 ) 
        {

            return false;
        }
        else
        {
            if($this->db->insert('users', $data))
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        
    }

    public function loginUser($email,$password)
    {
        //echo $email." ".$password;
        // print_r($data);
        //die();
        $query = "SELECT * FROM users WHERE `email` = '$email' AND `password` = '$password' ";
        
        $result = $this->db->query($query);

        if ($result->num_rows() > 0 ) 
        {
            return $result->row()->id;
        }
        else
        {
            return false;
        }

        
    }

}