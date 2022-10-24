<?php
defined("BASEPATH")or exit("ERROR");

class Game extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Main_model");
        $this->load->model("Game_model");
    }

    public function index($kode)
    {
        $this->load->view("Game_view");
    }

    public function chat($idRoom)
    {
        $chat = $this->Game_model->getChat($idRoom);
        echo json_encode($chat);
    }

    public function sendChat()
    {
        $i = $this->input->post();
        $data = [
            'id_user'=>$i['id_user'],
            'id_room'=>$i['id_room'],
            'chat'=>$i['chat'],
            'public'=>$i['public']
        ];
        return $this->Game_model->sendChat("proses",$data);
    }
}
