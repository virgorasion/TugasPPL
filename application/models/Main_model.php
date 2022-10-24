<?php

class Main_model extends CI_Model 
{
    public function insert($table,$data){
        $insert = $this->db->insert($table,$data);
        $insert_id = $this->db->insert_id();
        if ($insert) {
            return $insert_id;
        }else{
            return log_message("error",$this->db->_error_message());
        }
    }

    public function get($select,$from,$where)
    {
        $get = $this->db->select($select)->from($from)->where($where)->get();
        if ($get) {
            return $get;
        }else {
            return $this->db->_error_message();
        }
    }

    public function update($table,$data,$where){
        $update = $this->db->update($table,$data,$where);
        if($update){
            return $update;
        }else {
            return $this->db->_error_message();
        }
    }

    public function get_user_dalam_room($kode){
        $get_user = $this->db->select("*")
                                ->from("user_in_room")
                                ->join("room","room.id_room = user_in_room.id_room")
                                ->join("user","user.id = user_in_room.id_user")
                                ->where("room.kode = ".$kode)
                                ->get()->result();
        return $get_user;
    }
}
