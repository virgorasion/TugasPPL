<?php
defined("BASEPATH") or exit("error");
include_once (dirname(__FILE__) . "/Process.php");

class Main extends CI_Controller 
{
    public function __construct(){
        parent::__construct();
        $this->load->model('Main_model');
    }

    public function index(){
        if(empty($_SESSION['nama']) && empty($_SESSION['kode_ruang'])){
            $this->load->view("Masuk");
        }else{
            redirect(site_url('Main/Room/'.$_SESSION['kode_ruang']));
        }
    }

    public function Room($kode){
        $data['kode'] = $kode;
        $this->load->view("Room_view", $data);
    }

    public function ruang_permainan(){
        $this->load->view("");
    }

    public function buat_ruang() {
        $kode = rand(000000,999999);
        $id_ruang = $this->Main_model->insert('room', ['kode'=>$kode]);
        if ($id_ruang) {
            return [$kode,$id_ruang];
        }else {
            return $this->session->set_flashdata("error", $this->db->_error_message());
        }
    }

    public function create_session(){
        $inpt = $this->input->post();
        if($inpt['kode_ruang'] != ""){ //jika user tidak memiliki kode room
            $id_user = $this->Main_model->insert("user",['nama'=>$inpt['nama']]); //buat user & return id_user
            // buat session user
            $_SESSION['nama'] = $inpt['nama'];
            $_SESSION['id_user'] = $id_user;
            
            $cek_ruang = $this->Main_model->get('*','room',['kode'=>$inpt['kode_ruang']])->num_rows();
            if ($cek_ruang > 0) {
                $id_room = $this->Main_model->get("*","room","kode =".$inpt['kode_ruang'])->result();
                $insert_user_in_room = $this->Main_model->insert("user_in_room",['id_room'=>$id_room[0]->id_room,'id_user'=>$id_user]);
                $_SESSION['id_room'] = $id_room[0]->id_room;
                $_SESSION['id_user_in_room'] = $insert_user_in_room;
                $_SESSION['kode_ruang'] = $inpt['kode_ruang'];
                redirect(site_url('Main/Room/'.$inpt['kode_ruang']));
            }else{
                $id_ruang = $this->Main_model->insert("room",['kode'=>$inpt['kode_ruang']]);
                $insert_room = $this->Main_model->insert("user_in_room",['id_room'=>$id_ruang,'id_user'=>$id_user]);
                $_SESSION['id_room'] = $id_ruang;
                $_SESSION['nama'] = $inpt['nama'];
                $_SESSION['id_user'] = $id_user;
                $_SESSION['id_user_in_room'] = $insert_room;
                $_SESSION['kode_ruang'] = $inpt['kode_ruang'];
                redirect(site_url('Main/Room/'.$inpt['kode_ruang']));
            }
        }else{
            $id_user = $this->Main_model->insert("user",['nama'=>$inpt['nama']]);
            $kode_ruang = $this->buat_ruang();
            $insert_room = $this->Main_model->insert("user_in_room",['id_room'=>$kode_ruang[1],'id_user'=>$id_user]);
            $_SESSION['id_room'] = $kode_ruang[1];
            $_SESSION['nama'] = $inpt['nama'];
            $_SESSION['id_user'] = $id_user;
            $_SESSION['id_user_in_room'] = $insert_room;
            $_SESSION['kode_ruang'] = $kode_ruang[0];
            redirect(site_url('Main/Room/'.$kode_ruang[0]));
        }
    }

    public function ready($id_user){
        $data = ['ready'=> 1];
        $where = ['id_user'=> $id_user];
        $this->Main_model->update("user_in_room",$data,$where);
    }

    public function data_user($kode){
        $data = $this->Main_model->get_user_dalam_room($kode);
        echo json_encode($data);
    }

    public function change_name(){
        unset($_SESSION['name']);
        redirect('Main');
    }
}
