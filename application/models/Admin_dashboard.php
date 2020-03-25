<?php
class Admin_dashboard extends CI_Model {

    public function __construct() {
        parent::__construct();
		$this->load->database();
        

    }

    public function saveIdPass($data)
    {
        
        $date=$data['date'];
        $query = "SELECT * FROM registered_team_$data[scrim] WHERE  `date`='$date'";
        
        $result = $this->db->query($query);

       foreach ($result->result_array() as $key) {
           # code...

            $query = "SELECT * FROM users WHERE  `id`='$key[user_id]'";
        
            $result = $this->db->query($query);

        

            $this->email->from('support@knifemastergaming.in', "Underdogs eSports");
            $this->email->to($result->row()->email);
            $this->email->cc('knightgaming12222@gmail.com');
            $this->email->bcc('knightgaming12222@gmail.com');
            $this->email->subject('Room Id and Password');
            $this->email->message("Room Id : ".$data['room_id'].' and Password : '.$data['password']." Join Fast Guys.");

            $this->email->send();
            
       }        

        if($this->db->insert('custom_rooms', $data))
        {
            return "Room Id & Pasword has been sent.";
        }
        else
        {
            return "Unable to send room id & password";
        }

        
    }

}