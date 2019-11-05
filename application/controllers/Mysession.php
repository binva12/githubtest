<?php
  
	class Mysession extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->library("session");
		}

		public function add_session(){

			$this->session->set_userdata("name", "Online Web Tutor");
		
			$this->session->set_userdata("email", "abcd@gmail.com");
		}

		public function get_session(){

			$all_session_value = $this->session->all_userdata();

			//print_r($all_session_value);
			//$name = $this->session->userdata("name");
			//$name = $this->session->name;
			//echo $name;

			if($this->session->has_userdata("email")){
				echo $this->session->email;
			}else{
				echo "Mobile does not exist";
			}
		}

		public function remove_session(){

			$this->session->unset_userdata("email");
			$this->session->unset_userdata("name");

			$this->session->set_userdata(array(

				"name" => "Sanjay",
				"email" => "sanjay@gmail.com"
			));

			print_r($this->session->all_userdata());
		}
		
	}

?>
