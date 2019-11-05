<?php	

	class User_model extends CI_Model{

		public function __construct() {
			parent::__construct();
			$this->load->database();
		}
	
		public function insert_into_user_table($data_array) {
			
			return $this->db->insert("tbl_users", $data_array);
		}

		public function get_all_user(){

			$this->db->select("*");
			$this->db->from("tbl_users");
			$query = $this->db->get();

			return $result = $query->result();
		}

	}

?>
