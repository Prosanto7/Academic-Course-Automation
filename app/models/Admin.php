<?php

class Admin{

    private $db;

    public function __construct() {
        $this->db=Database::getInstance();
    }

    public function getAllBatches(){
        $this->db->query('select * from batches');
        return $this->db->resultSet();
    }

    public function addBatch($session) {
        $this->db->query("insert into batches (session) values (:session)");

        $this->db->bind(':session', $session);

        if ($this->db->execute()) {
            $data=[];
            $data['session']=$session;
            return $data;
        } else {
            return false;
        }
    }

    public function deleteBatch($id) {
        $this->db->query("delete from batches where session=:batch_id");

        $this->db->bind(':batch_id',$id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function addStudent($data){

        try{
            $this->db->query("insert into students (name,ID,session) values (:name,:ID,:session)");
            $this->db->bind(':name',$data['name']);
            $this->db->bind(':ID',$data['ID']);
            $this->db->bind(':session',$data['session']);
            $this->db->execute();

            return true;
        }catch (PDOException $e){
            return false;
        }

    }

    public function deleteStudent($id){
        $this->db->query("delete from students where ID=:ID");
        $this->db->bind(':ID',$id);
        return $this->db->execute();
    }

    public function getStudents($session){
        $this->db->query('select * from students where session=:id');
        $this->db->bind(':id',$session);
        return $this->db->resultSet();
    }


}
