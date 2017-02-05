<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crop extends CI_Controller {
    
    public function index()
    {
        $this->load->view('crop');
    }


    public function getCropData()
    {
        echo json_encode(array('resp' => '1', 'txt' => $_POST));
    }

}
