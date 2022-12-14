<?php 
class Game_model extends CI_Model 
{
    public function getUser($id)
    {
        return $this->db->select("*")->from("user")->where("id = $id")->get()->result();
    }
    public function getChat($idRoom)
    {
        return $this->db->select("*,proses.id as id_proses, date_format(proses.timestamp, '%h:%i %p') as timestamp")
                            ->from("proses")
                            ->join("user", "user.id = proses.id_user")
                            ->join("room", "room.id_room = proses.id_room")
                            ->where("room.id_room = $idRoom")
                            ->order_by("proses.id","ASC")
                            ->limit(100)
                            ->get()->result();
    }

    public function sendChat($table,$data)
    {
        return $this->db->insert($table,$data);
    }

    public function getFood()
    {
        return $this->db->get("food")->result();
    }

    public function getItem($id_user)
    {
        return $this->db->select("item.*,(select level from item_user where id_user = $id_user and item.id = item_user.id_item) as level")
                        ->from("item")
                        ->get()
                        ->result();
    }

    public function getSkill($id_user)
    {
        return $this->db->select("skill.*,(select level from skill_user where id_user = $id_user and skill.id = skill_user.id_skill) as level")
                        ->from("skill")
                        ->get()
                        ->result();
    }

    public function setData($table,$data,$where){
        $this->db->delete($table,$where);
        return $this->db->insert($table,$data);
    }

    public function getDataUserTurnamen($kodeRoom)
    {
        return $this->db->select("user.*")
                ->from("user")
                ->join("user_in_room","user_in_room.id_user = user.id")
                ->join("room","room.id_room = user_in_room.id_room")
                ->where("room.kode",$kodeRoom)
                ->get()
                ->result();
    }

    public function getDataItemUser($idUser)
    {
        return $this->db->select("item.*,item_user.level")
                        ->from("item")
                        ->join("item_user","item_user.id_item = item.id")
                        ->where("item_user.id_user",$idUser)
                        ->get()
                        ->result();
    }

    public function getDataSkillUser($idUser)
    {
        return $this->db->select("skill.*,skill_user.level")
                        ->from("skill")
                        ->join("skill_user","skill_user.id_skill = skill.id")
                        ->where("skill_user.id_user",$idUser)
                        ->get()
                        ->result();
    }

    public function checkUserWin($kodeRoom)
    {
        return $this->db->select("*")->from("tournamen")->where("room",$kodeRoom)->get()->result();
    }

}
