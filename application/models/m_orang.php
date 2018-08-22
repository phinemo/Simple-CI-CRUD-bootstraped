<?php 
class m_orang extends CI_Model{
    public function __construct()
    {   
    }
    public function retrivetables(){
        $table = $this->db->list_tables();
        return $table;
    }
    public function read(){
        return $this->db->get('orang');
    }
    public function insert($table,$data){
        $this->db->insert($table,$data);
    }
    public function getdatawhere($table,$where){
        return $this->db->get_where($table,$where);
    }
    public function update($table,$data,$where){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    public function delete($table,$where){
        $this->db->where($where);
        $this->db->delete($table);
    }

}