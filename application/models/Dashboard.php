<?php
class Dashboard extends CI_Model {

    public function __construct() {
        parent::__construct();
		$this->load->database();

    }
    
    public function info($userId)
    {
        //echo $email." ".$password;
        // print_r($data);
        //die();
        $query = "SELECT * FROM users WHERE `id` = '$userId'";
        
        $result = $this->db->query($query);

        $data = $result->row_array();
        return $data;
    

        
    }

    public function addToScim1($data)
    {
        $team_name=$data['team_name'];
        $date=$data['date'];
        $query = "SELECT * FROM registered_team_1 WHERE `team_name` = '$team_name' AND `date` ='$date' AND  `scrims` = 1";
        
        $result = $this->db->query($query);

        if ($result->num_rows() > 0 ) 
        {

            return "Your Team Is Already Registered In One Of Our Custom.";
        }
        else
        {
            $query = "SELECT * FROM registered_team_2 WHERE `team_name` = '$team_name' AND `date` ='$date' AND  `scrims` = 2";
        
            $result = $this->db->query($query);

            if ($result->num_rows() > 0 ) 
            {

                return "Your Team Is Already Registered In One Of Our Custom.";
            }

            $query = "SELECT * FROM registrations WHERE `date` ='$date' AND  `scrims` = 1 ";
            $result = $this->db->query($query);

            if ($result->num_rows() > 0 ) 
            {
                $remaningSlots=$result->row()->slots_left;
                if ($remaningSlots==0) {
                    # code...

                    return "All slots are filled. Register tomorrow.";
                }
                $totalSlots=24;

                $data['slots']=$totalSlots-$remaningSlots+1;

                $final=$remaningSlots-1;

                $data4 = array(
                    'slots_left' => $final,
                    'updated_at'  => date('Y-m-d H:i:s')
                );
                $data3 =array(
                    'date' => $date,
                    'scrims'  => 1
                );

                $this->db->set($data4);
                $this->db->where($data3);
                $this->db->update('registrations');

                //$this->db->replace('registrations', $data4);
                
            }
            else
            {
                $data2 = array(
                    'scrims' =>1,
                    'slots_left' =>23,
                    'date' => date('Y-m-d'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'scrims' => 1

                );

                $this->db->insert('registrations', $data2);

                $data['slots']=1;
                $data['scrims']=1;
            }


            if($this->db->insert('registered_team_1', $data))
            {


                return "Team Registered Sucessfully. Please check your slot number.";
            }
            else
            {
                return "Error while registering your team.";
            }
        }

        
    }
    public function addToScim2($data)
    {
        $team_name=$data['team_name'];
        $date=$data['date'];
        $query = "SELECT * FROM registered_team_2 WHERE `team_name` = '$team_name' AND `date` ='$date' AND `scrims` = 2";
        
        $result = $this->db->query($query);

        if ($result->num_rows() > 0 ) 
        {

            return "Your Team Is Already Registered In One Of Our Custom.";
        }
        else
        {
            $query = "SELECT * FROM registered_team_1 WHERE `team_name` = '$team_name' AND `date` ='$date' AND  `scrims` = 1";
        
            $result = $this->db->query($query);

            if ($result->num_rows() > 0 ) 
            {

                return "Your Team Is Already Registered In One Of Our Custom.";
            }

            $query = "SELECT * FROM registrations WHERE `date` ='$date' AND  `scrims` = 2";
            $result = $this->db->query($query);

            if ($result->num_rows() > 0 ) 
            {
                $remaningSlots=$result->row()->slots_left;
                if ($remaningSlots==0) {
                    # code...

                    return "All slots are filled. Register tomorrow.";
                }
                $totalSlots=24;

                $data['slots']=$totalSlots-$remaningSlots+1;

                $final=$remaningSlots-1;

                $data4 = array(
                    'slots_left' => $final,
                    'updated_at'  => date('Y-m-d H:i:s')
                );

                $data3 =array(
                    'date' => $date,
                    'scrims' => 2
                );

                $this->db->set($data4);
                $this->db->where($data3);
                $this->db->update('registrations');

                //$this->db->replace('registrations', $data4);
                
            }
            else
            {
                $data2 = array(
                    'scrims' =>2,
                    'slots_left' =>23,
                    'date' => date('Y-m-d'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'scrims' => 2

                );

                $this->db->insert('registrations', $data2);

                $data['slots']=1;
                $data['scrims']=2;
            }


            if($this->db->insert('registered_team_2', $data))
            {


                return "Team Registered Sucessfully. Please check your slot number.";
            }
            else
            {
                return "Error while registering your team.";
            }
        }

        
    }

    public function chartInfo1($date)
    {
        $query = "SELECT * FROM registrations WHERE `scrims`=1 AND `date`='$date' ";
        
        $result = $this->db->query($query);

        if ($result->num_rows() > 0 ) 
        {
            $data = $result->row_array();
            return $data;
        }
        else
        {
            $data['slots_left']=24;
            return $data;

        }
    }

    public function chartInfo2($date)
    {
        $query = "SELECT * FROM registrations WHERE `scrims`=2 AND `date`='$date' ";
        
        $result = $this->db->query($query);

       

        if ($result->num_rows() > 0 ) 
        {
            $data = $result->row_array();
            return $data;
        }
        else
        {
            $data['slots_left']=24;
            return $data;

        }
    }

    public function regInfo1($userId,$date)
    {
        $userId=$this->session->userdata('id');

        $query = "SELECT * FROM registered_team_1 WHERE `user_id`='$userId' AND `date`='$date'";
        
        $result = $this->db->query($query);

        if ($result->num_rows() > 0 ) 
        {
            return "yes";
        }
        else
        {
            return "no";
        }
    }

    public function regInfo2($userId,$date)
    {
        $userId=$this->session->userdata('id');
        $query = "SELECT * FROM registered_team_2 WHERE `user_id`='$userId' AND `date`='$date'";
        
        $result = $this->db->query($query);

        if ($result->num_rows() > 0 ) 
        {
            return "yes";
        }
        else
        {
            return "no";
        }
    }

    public function slotList1($date)
    {
        $userId=$this->session->userdata('id');
        $query = "SELECT * FROM registered_team_1 WHERE `date`='$date'";
        
        $result = $this->db->query($query);

        if ($result->num_rows() > 0 ) 
        {
            $data['res']='true';
            $data['msg']="success.";
            $data['result'] = $result->result_array();
            return $data;
        }
        else
        {
            $data['res']='false';
            $data['msg']="Team Not Registered Yet.";
            return $data;
        }
    }

    public function slotList2($date)
    {
        $userId=$this->session->userdata('id');
        $query = "SELECT * FROM registered_team_2 WHERE `date`='$date'";
        
        $result = $this->db->query($query);

        if ($result->num_rows() > 0 ) 
        {
            $data['res']='true';
            $data['msg']="success.";
            $data['result'] = $result->result_array();
            return $data;
        }
        else
        {
            $data['res']='false';
            $data['msg']="Team Not Registered Yet.";
            return $data;
        }
    }

    public function idPass1($date)
    {
        $query = "SELECT * FROM custom_rooms WHERE `date`='$date' AND `scrim`=1";
        
        $result = $this->db->query($query);

        if ($result->num_rows() > 0 ) 
        {
            $data['res']='true';
            $data['msg']="success.";
            $data['result'] = $result->result_array();
            return $data;
        }
        else
        {
            $data['res']='false';
            $data['msg']="Room not ceated yet.";
            return $data;
        }
    }

    public function idPass2($date)
    {
        $query = "SELECT * FROM custom_rooms WHERE `date`='$date' AND `scrim`=2";
        
        $result = $this->db->query($query);

        if ($result->num_rows() > 0 ) 
        {
            $data['res']='true';
            $data['msg']="success.";
            $data['result'] = $result->result_array();
            return $data;
        }
        else
        {
            $data['res']='false';
            $data['msg']="Room not ceated yet.";
            return $data;
        }
    }


}

?>