<?php
class Test extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library("session");
        $this->load->library("pagination");
    }
    public function welcome(){
        echo "Welcome to Vietpro";
        $this->load->database();
    }
    public function goodbye(){
        echo "Good bye";
    }
    
    public function load_view()
    {
        $this->form_validation->set_rules('txtnhap','Ô nhập','required');
        $data = array(
            'string'=> 'Vietpro',
        );
        
        $this->session->set_userdata($data);
        $this->session->unset_userdata($data);

        echo $this->session->userdata('string');
        
        $this->load->view('new_view',$data);       
    }
}
?>