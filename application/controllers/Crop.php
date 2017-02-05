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
    public  function img()
    {
        $name = basename($_FILES["croppedImage"]['name']);
        $tmp_name = $_FILES["croppedImage"]['tmp_name'];
        $destination =$_SERVER['DOCUMENT_ROOT']."/CropImage/assets/img/".time().$name.".jpg";
        move_uploaded_file($tmp_name, $destination);
        echo json_encode(array('resp' => '1', 'txt' => $name));
    }

}
