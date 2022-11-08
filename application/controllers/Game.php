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
        $item = $this->Game_model->getItem();
        $skill = $this->Game_model->getSkill();
        $user = $this->Game_model->getUser($_SESSION['id_user']);
        $data['food_item'] = $food;
        $data['item_item'] = $item;
        $data['skill_item'] = $skill;
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
        if ($p == "food"){
            // Proses Update User
            $table = "user";
            $data = [
                'hp'=>$p['hp'],
                'mana'=>$p['mp']
            ];
            $where = ['id'=>$p['id_user']];
            return $this->Main_model->update($table,$data,$where);
        }elseif ($p == "equip") {
            // Proses Autorisasi Item Ke User
            $table = "item_user";
            $data = [
                'id_user'=>$p['id_user'],
                'id_item'=>$p['id_item']
            ];
            return $this->Main_model->insert($table,$data);

            // // Proses Update User
            // $table = "user";
            // $data = [
            //     'hp'=>$p['hp'],
            //     'mana'=>$p['mp'],
            //     'def'=>$p['def'],
            //     'str'=>$p['str']
            // ];
            // $where = ['id'=>$p['id_user']];
            // $update_user = $this->Main_model->update($table,$data,$where);
            // return [$insert_item,$update_user];
        }elseif ($p == "skill") {
            // Proses Insert Skill
            $table = "skill_user";
            $data = [
                'id_user'=>$p['id_user'],
                'id_skill'=>$p['id_skill']
            ];
            return $this->Main_model->insert($table,$data);
        }
    }
}
