<?php
class ModelUser extends CI_Model{
    public function getData($table){
        return $this->db->get($table)->result_array();
    }

    public function add($table,$data){
        return $this->db->insert($table, $data);
    }

    public function update($id,$table,$data){
        $this->db->where('id',$id);
        return $this->db->update($table,$data);
    }

    public function delete($id,$table){
        $this->db->where('id',$id);
        return $this->db->delete($table);
    }
}
?>