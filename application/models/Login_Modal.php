<?php
class Login_Modal  extends CI_Model{
		private $conn='';
		function __construct(){
			$this->load->database();
		} 
		function __destruct() 
		{        
        }  	
        
        public function login($username,$password){
            date_default_timezone_set('Asia/Kolkata');
            $date = date("Y/m/d H:i:s.");
            
            //$password = md5($password);
            $result=$this->db->query("SELECT * FROM users WHERE LCASE(userName)='$username' AND password='$password'");
            $count=$this->db->affected_rows();
            if($count==1)
            {
                if($result->first_row()->status==1){
                    $res = $result->row();
                    $this->session->set_userdata(array(
                        'userId'	=> $res->id,
                        'userType'	=> $res->employeeCode,
                        'userName'	=> $res->firstName . " " . $res->lastName,
                    ));
                
                    //$this->session->set_userdata('useracl',$useracl);
                    $query = "update `users` set lastLoginDate='$date' where id='" . $res->id . "'";
                    $result=$this->db->query($query);
                    
                    // $query = "update `user` set active='1' where userId='" . $res->userId . "'";
                    // $result=$this->db->query($query);
                    return json_encode(array("success"=>true, "msg"=>"Login Successfull"));
                }else{
                    return json_encode(array("success"=>false, "msg"=> "Blocked By Admin"));
                }	
            }
            else
            {
                return json_encode(array("success"=> false,"msg"=> "Incorrect Username or Password"));
            }
        }
}
?>                                                                                                                                              