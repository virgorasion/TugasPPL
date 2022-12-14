<?php
defined("BASEPATH")or exit("ERROR");

class Turnamen extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Main_model");
        $this->load->model("Game_model");
    }

    public function index()
    {
        $this->load->view("Turnamen_view");
    }

    public function dataUserTurnamen($kodeRoom)
    {
        $data = array();
        $users = $this->Game_model->getDataUserTurnamen($kodeRoom);
        $i = 0;
        foreach ($users as $user) {
            $data[$i] = $user;
            $items = $this->Game_model->getDataItemUser($user->id);
            foreach ($items as $item) {
                $data[$i]->item[] = $item;
            }
            $skills = $this->Game_model->getDataSkillUser($user->id);
            foreach ($skills as $skill) {   
                $data[$i]->skill[] = $skill;
            }
            $i++;
        }
        echo json_encode($data);
    }

    public function gameplay($duel = [16,17]){
        $data = array();
        $user1 = $this->Game_model->getUser($duel[0]);
        $user2 = $this->Game_model->getUser($duel[1]);
        $i = 0;
        $equip1 = $this->Game_model->getUser($duel[0]);
        foreach ($equip1 as $user) {
            $data[$i] = $user;
            $items = $this->Game_model->getDataItemUser($user->id);
            foreach ($items as $item) {
                $data[$i]->item[] = $item;
            }
            $skills = $this->Game_model->getDataSkillUser($user->id);
            foreach ($skills as $skill) {   
                $data[$i]->skill[] = $skill;
            }
            $i++;
        }
        $equip2 = $this->Game_model->getUser($duel[1]);
        foreach ($equip2 as $user) {
            $data[$i] = $user;
            $items = $this->Game_model->getDataItemUser($user->id);
            foreach ($items as $item) {
                $data[$i]->item[] = $item;
            }
            $skills = $this->Game_model->getDataSkillUser($user->id);
            foreach ($skills as $skill) {   
                $data[$i]->skill[] = $skill;
            }
            $i++;
        }
        echo json_encode($data);
    }
    
    public function getVsUser($kodeRoom)
    {
        $user_duel = array();
        $data = array();
        $check = $this->Game_model->getDataUserTurnamen($kodeRoom);
        $i = 0;
        foreach ($check as $user) {
            if ($user->id == $_SESSION['id_user']){
                if ($i % 2 == 0) {
                    $user_duel = [$check[$i+1]->id,$_SESSION['id_user']]; 
                }else{
                    $user_duel = [$check[$i-1]->id,$_SESSION['id_user']]; 
                }
            }
            $i++;
        }
        // $this->gameplay($user_duel);
        $i = 0;
        $user1 = $this->Game_model->getUser($user_duel[0]);
        foreach ($user1 as $user) {
            $data[$i] = $user;
            $items = $this->Game_model->getDataItemUser($user->id);
            foreach ($items as $item) {
                $data[$i]->item[] = $item;
            }
            $skills = $this->Game_model->getDataSkillUser($user->id);
            foreach ($skills as $skill) {   
                $data[$i]->skill[] = $skill;
            }
            $i++;
        }
        $user2 = $this->Game_model->getUser($user_duel[1]);
        foreach ($user2 as $user) {
            $data[$i] = $user;
            $items = $this->Game_model->getDataItemUser($user->id);
            foreach ($items as $item) {
                $data[$i]->item[] = $item;
            }
            $skills = $this->Game_model->getDataSkillUser($user->id);
            foreach ($skills as $skill) {   
                $data[$i]->skill[] = $skill;
            }
            $i++;
        }
        // var_dump($data);
        echo json_encode($data);
        return $user_duel;
    }

    public function Duel($kodeRoom)
    {
        $this->load->view("Duel_view.php");
    }


}