<?php

class Course{

    private $db;

    public function __construct() {
        $this->db=Database::getInstance();
    }

    public function getCurrentUserCourses(){
        $user_id=$_SESSION['user_id'];

        $this->db->query('select * from courses where user_id=:user_id');
        $this->db->bind(':user_id',$user_id);

        return $this->db->resultSet();
    }

    public function add($data) {
        $this->db->query("insert into courses (user_id,title,code,credit,session) values (:user_id,:title,:code,:credit,:session)");

        $this->db->bind(':user_id',$_SESSION['user_id']);
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':code', $data['code']);
        $this->db->bind(':credit', $data['credit']);
        $this->db->bind(':session', $data['session']);

        if ($this->db->execute()) {
            $data['course_id'] = $this->db->lastInsertId();
            return $data;
        } else {
            return false;
        }
    }

    public function delete($id) {
        $this->db->query("delete from courses where course_id=:course_id");

        $this->db->bind(':course_id',$id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getAllBatches(){
        $this->db->query('select * from batches');
        return $this->db->resultSet();
    }

    public function getCourseById($id){
        $this->db->query('select * from courses where course_id=:course_id');
        $this->db->bind(':course_id',$id);

        return $this->db->single();
    }

    public function newClass($course_id){
        $this->db->query("insert into classes (course_id) values (:course_id)");

        $this->db->bind(':course_id', $course_id);

        if ($this->db->execute()) {
            return $this->db->lastInsertId();
        } else {
            return false;
        }
    }

    public function addAttendance($course_id,$class_id,$attendance){
        $this->db->query("insert into attendances (course_id,class_id,ID) values (:course_id,:class_id,:ID)");

        $this->db->bind(':course_id', $course_id);
        $this->db->bind(':class_id', $class_id);
        $this->db->bind(':ID', $attendance);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function totalClass($course_id){
        $this->db->query('select * from classes where course_id=:course_id');
        $this->db->bind(':course_id', $course_id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getAttendance($course_id){
        $this->db->query('WITH ca as (
                                    SELECT *
                                    FROM attendances
                                    WHERE course_id=:course_id
                                )
                                
                                SELECT students.ID,COUNT(ca.ID) as count
                                FROM students left join ca on students.ID=ca.ID
                                GROUP BY ID');

        $this->db->bind(':course_id', $course_id);
        return $this->db->resultSet();

    }


}
