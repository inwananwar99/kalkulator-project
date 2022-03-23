<?php
class ModelPenawaran extends CI_Model{

    public function get($table){
        return $this->db->get($table)->result_array();
    }

    public function add($table,$data){
        return $this->db->insert($table, $data);
    }

    public function add_batch($table,$data){
        return $this->db->insert_batch($table, $data);
    }

    public function update($id,$table,$data){
        $this->db->where('id',$id);
        return $this->db->update($table,$data);
    }

    public function delete($id,$table){
        $this->db->where('id',$id);
        return $this->db->delete($table);
    }

    public function print($id){
        return $this->db->get_where('penawaran',['id' => $id])->row_array();
    }
}
?>