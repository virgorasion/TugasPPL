<?php
defined("BASEPATH") or exit("ERROR");

class Process extends CI_Controller 
{
    public function __construct(){
        parent::__construct();
        $this->load->model('Main_model');
    }

    public function create_session($post){
        if (empty($this->session->name)) {
            $this->session->set_userdata("name",$post('name'));
        }else{
            redirect('Ruang_tunggu');
        }
    }
}
