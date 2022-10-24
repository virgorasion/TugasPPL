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

}
