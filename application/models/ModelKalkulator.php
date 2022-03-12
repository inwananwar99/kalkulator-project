<?php
class ModelKalkulator extends CI_Model{
    public function getData($table){
        return $this->db->get($table)->result();
    }
    public function add($table,$data){
        return $this->db->insert($table,$data);
    }

    public function update($id,$data,$table){
        $this->db->where('id', $id);
        return $this->db->update($table, $data);
    }

    public function delete($id,$table){
        $this->db->where('id', $id);
        return $this->db->delete($table);
    }

}

?>