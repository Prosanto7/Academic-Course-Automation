<?php

class User {

    private $db;

    public function __construct() {
        $this->db=Database::getInstance();
    }

    public function findUserByEmail($email){
        $this->db->query("select * from users where email = :email");
        $this->db->bind(":email",$email);

        $res=$this->db->single();

        if($this->db->rowCount() > 0){
            return true;
        }else{
            return false;
        }

    }

    public function getUserById($id){
        $this->db->query("Select * from users where user_id = :id");
        $this->db->bind(":id",$id);

        return $this->db->single();
    }

    public function register($data){
        $this->db->query("insert into users (name,phone,email,pass_hash)
                                values (:name,:phone,:email,:password)");

        $this->db->bind(':name',$data['name']);
        $this->db->bind(':phone', $data['phone']);
        $this->db->bind(':email',$data['email']);
        $this->db->bind(':password',$data['password']);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function login($email,$password){
        $this->db->query('select * from users where email = :email');
        $this->db->bind(':email',$email);

        $row=$this->db->single();

        $hashed_password=$row->pass_hash;

        if(password_verify($password,$hashed_password)){
            //die('varified '.print_r($row));
            return $row;
        }else{
            //die('invalid '.$password);
            return false;
        }
    }

    public function updateInfo($data){
        $this->db->query('update users set name=:name, phone=:phone, email=:email where user_id=:user_id');

        $this->db->bind(':name',$data['name']);
        $this->db->bind(':phone', $data['phone']);
        $this->db->bind(':email',$data['email']);
        $this->db->bind(':user_id',$_SESSION['user_id']);

        if($this->db->execute()){
            $_SESSION['user_name']=$data['name'];
            $_SESSION['user_phone']=$data['phone'];
            $_SESSION['user_email']=$data['email'];
        }



    }


}