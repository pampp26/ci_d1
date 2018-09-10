<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member extends CI_Controller {
	
      public function __construct()
    {
        parent::__construct();
        $this->load->model('login_database');
    }

	
	public function login(){
	  $this->load->view("form_login");
	
	}
	//
// Check for user login process
public function user_login_process() {


/*
 if(isset($this->session->userdata['logged_in'])){
$this->load->view('admin_page');
}else{
$this->load->view('login_form');
}
} else {
*/

$data = array(
'username' => $this->input->post('username'),
'password' => $this->input->post('password')
);


$result = $this->login_database->login($data);


if ($result == TRUE) {

$username = $this->input->post('username');
$result = $this->login_database->read_user_information($username);
redirect("member/show","refresh");
 
}else{
  echo "username หรือ password ผิกพลาด";
}

/*

if ($result != false) {

$session_data = array(
'username' => $result[0]->user_name,
'email' => $result[0]->user_email,
);
// Add user data in session
$this->session->set_userdata('logged_in', $session_data);
$this->load->view('admin_page');
}
} else {
$data = array(
'error_message' => 'Invalid Username or Password'
);
$this->load->view('login_form', $data);
}
}
*/
}




	public function add(){
	 $this->load->view("add_view",$data);
	}
	public function add_member(){
		$data=array(
		'id'=>$this->input->get('id'),	
		'name'=>$this->input->get('name'),
		'passwd'=>$this->input->get('passwd'),
		'status'=>$this->input->get('status')
		);
	  $this->db->insert("user",$data);
	  redirect("member/show","refresh");
       exit();
	}
	public function show(){
	$sql="SELECT * FROM user";
	$rs=$this->db->query($sql);
	$data['rs']=$rs->result_array();

	$this->load->view("show_view",$data);
	
	}
	public function del($id){
		$this->db->delete('user', array('id' => $id));
		 redirect("member/show","refresh");
         exit();
	}
	public function edit($id){
		$sql="SELECT *  FROM user WHERE id=$id";
        $rs=$this->db->query($sql);
		$data['rs']=$rs->row_array();
        $this->load->view("edit_view",$data);
	}
	public function update($id){
		$data=array(
			"name"=>$this->input->post('name'),
			"passwd"=>$this->input->post('passwd'),			
			"status"=>$this->input->post('status')
		);
		$this->db->where("id",$id);
		$this->db->update("user",$data);

		 redirect("member/show","refresh");
         exit();
   
	}
}

