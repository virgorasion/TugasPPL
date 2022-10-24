<?php
defined("BASEPATH")or exit("ERROR");

class Ruang_tunggu extends CI_Controller 
{
    public function __construct(){
        parent::__construct();

    }

    public function index($kode){
        print($kode);
    }

    public function room($kode){
        print($kode);
        // $tes['kode'] = $kode;
        // $this->load->view("Masuk",$tes);
    }
}
