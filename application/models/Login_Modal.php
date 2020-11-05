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
            
            $password = md5($password);	
            $result=$this->db->query("SELECT * FROM user WHERE LCASE(userName)='$username' AND password='$password'");
            $count=$this->db->affected_rows();
            if($count==1)
            {
                if($result->first_row()->block==0){
                    $res = $result->row();
                    $this->session->set_userdata(array(
                        'userid'	=> $res->userId,
                        'usertype'	=> $res->userType,
                        'username'	=> $res->firstName . " " . $res->lastName,
                        'rootfolder' => 'filelist'
                    ));
                    
                    $this->session->set_userdata('appdata',array(
                        'user'	=> array('userid' => $res->userId,
                        'usertype'	=> $res->userType,
                        'username'	=> $res->firstName . " " . $res->lastName
                    )));
                    
                    $query = "update `user` set lastlogin='$date' where userId='" . $res->userId . "'";
                    $result=$this->db->query($query);
                    
                    $query = "update `user` set active='1' where userId='" . $res->userId . "'";
                    $result=$this->db->query($query);
                    
                    //$query = "select dashboard,filemanager,createuser,project,profile,category,setting,report from useracl where userid='" . $res->userId . "'";
                    $query = "select LPAD(conv(BIT_OR(conv(role1,2,10)),10,2), 8, '0') role1,LPAD(conv(BIT_OR(conv(role2,2,10)),10,2), 8, '0') role2, LPAD(conv(BIT_OR(conv(role3,2,10)),10,2), 8, '0') role3, LPAD(conv(BIT_OR(conv(role4,2,10)),10,2), 8, '0') role4, LPAD(conv(BIT_OR(conv(`role5`,2,10)),10,2), 8, '0') `role5`, LPAD(conv(BIT_OR(conv(role6,2,10)),10,2), 8, '0') role6,LPAD(conv(BIT_OR(conv(role7,2,10)),10,2), 8, '0') role7, LPAD(conv(BIT_OR(conv(role8,2,10)),10,2), 8, '0') role8 from (select role1,role2,role3,role4,`role5`,role6,role7,role8 from groupacl where groupid in (select groupid from groupmember where userid='" . $res->userId . "') union select role1,role2,role3,role4,`role5`,role6,role7,role8 from useracl where userid='" . $res->userId . "') tempdata";
                    $result=$this->db->query($query);
                    $count=$this->db->affected_rows();
                    if($count==1){
                        $res = $result->row();
                        $useracl=array('dashboard'=>$res->role1,'upload'=>$res->role2,
                        'advsearch'=>$res->role3,'genrefno'=>$res->role4,'chpassword'=>$res->role5,
                        'user'=>$res->role6,'project'=>$res->role7,'indexform'=>$res->role8);
                    }else{
                        $useracl=array('dashboard'=>'00000000','upload'=>'00000000',
                        'advsearch'=>'00000000','genrefno'=>'00000000',
                        'chpassword'=>'00000000','user'=>'00000000',
                        'project'=>'00000000','indexform'=>'00000000');
                    }
                    $this->session->set_userdata('useracl',$useracl);
                    
                    //return true;
                    return json_encode(array("success"=>true, "msg"=>"Login Successfull"));
                }else{
                    return json_encode(array("success"=>false, "msg"=> "Blocked By Admin"));
                }	
            }
            else
            {
                //return false;
                return json_encode(array("success"=> false,"msg"=> "Incorrect Username or Password"));
            }
        }
}
?>                                                                                                                                              