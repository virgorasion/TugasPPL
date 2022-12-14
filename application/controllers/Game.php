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
        $food = $this->Game_model->getFood();
        $user = $this->Game_model->getUser($_SESSION['id_user']);
        $data['food_item'] = $food;
        $data['nama'] = $user[0]->nama;
        $data['gold'] = $user[0]->gold;
        $data['hp'] = $user[0]->hp;
        $data['mana'] = $user[0]->mana;
        $data['str'] = $user[0]->str;
        $data['tidur'] = $user[0]->waktu_tidur;
        $data['level'] = $user[0]->level;
        $data['def'] = $user[0]->def;
        $this->load->view("Game_view",$data);
    }

    public function getStoreItem()
    {
        $data = $this->Game_model->getItem($_SESSION['id_user']);
        echo json_encode($data);
    }
    public function getStoreSkill()
    {
        $data = $this->Game_model->getSkill($_SESSION['id_user']);
        echo json_encode($data);
    }

    public function test()
    {
        $data = $this->Game_model->getItem(11);
        echo json_encode($data);
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

    public function turnamen()
    {
        $this->load->view("Turnamen_view");
    }

    public function insertAttribut()
    {
        $i = $this->input->post();
        $id = ['id'=>$i['id']];
        $data = [
            'hp'=>$i['hp'],
            'gold'=>$i['gold'],
            'mana'=>$i['mana'],
            'str'=>$i['str'],
            'def'=>$i['def'],
            'waktu_tidur'=>$i['tidur'],
            'level'=>$i['level']
        ];
        return $this->Main_model->update("user", $data, $id);
    }

    public function buy()
    {
        $p = $this->input->post();
        $level = (int)$p['level'] + 1;
       if ($p["type"] == "equip") {
            // Proses Autorisasi Item Ke User
            $table = "item_user";
            $data = [
                'id_user'=>$p['id_user'],
                'id_item'=>$p['id_item'],
                'level'=>$level
            ];
            $where = [
                'id_user'=>$p['id_user'],
                'id_item'=>$p['id_item']
            ];
            return $this->Game_model->setData($table,$data,$where);
        }elseif ($p["type"] == "skill") {
            // Proses Insert Skill
            $table = "skill_user";
            $data = [
                'id_user'=>$p['id_user'],
                'id_skill'=>$p['id_item'],
                'level'=>$level
            ];
            $where = [
                'id_user'=>$p['id_user'],
                'id_skill'=>$p['id_item']
            ];
            return $this->Game_model->setData($table,$data,$where);
        }
    }
}
