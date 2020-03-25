<?php
class Admin_verify extends CI_Model {

    public function __construct() {
        parent::__construct();
		$this->load->database();
       

    }

    public function loginAdmin($userName,$password)
    {
        //echo $email." ".$password;
        // print_r($data);
        //die();
        $query = "SELECT * FROM admin WHERE `username` = '$userName' AND `password` = '$password' ";
        
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