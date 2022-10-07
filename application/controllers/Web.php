<?php
defined('BASEPATH') or exit ('no direct script accsess allowe');

class Web extends CI_Controller{
     function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }
    public function index(){
         $data['judul'] = "Halaman Depan";
         $this->load->view('v_index',$data);
         
    }
}
