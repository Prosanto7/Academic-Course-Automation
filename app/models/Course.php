<?php

class Course{

    private $db;

    public function __construct() {
        $this->db=Database::getInstance();
    }

    public function add($data) {
        $this->db->query("insert into courses (title,code,credit,session,semester) values (:title,:code,:credit,:session,:semester)");

        $this->db->bind(':title', $data['title']);
        $this->db->bind(':code', $data['code']);
        $this->db->bind(':credit', $data['credit']);
        $this->db->bind(':session', $data['session']);
        $this->db->bind(':semester', $data['semester']);

        if ($this->db->execute()) {
            $data['course_id'] = $this->db->lastInsertId();
            return $data;
        } else {
            return false;
        }
    }


}
