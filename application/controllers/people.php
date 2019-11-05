<?php
class People extends CI_Controller
{
    function hungry()
    {
        // Load model
        //$this->load->model('people_model');
  
        // Gọi function trong model
        $hungry = $this->people_model->eat();
    }
}
?>