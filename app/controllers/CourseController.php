<?php

class CourseController extends Controller {

    private $courseModel;

    public function __construct() {
        $this->courseModel=$this->model("Course");
    }

    public function index(){

        if(!isLoggedIn()){
            redirect('users/login');
        }

        $data=[

        ];

        $this->view('/courses/index',$data);
    }

    public function add(){

        if(!isLoggedIn()){
            redirect('users/login');
        }

        /*header('Content-type: application/json');
        $json = file_get_contents('php://input');
        $json_decode = json_decode($json, true);*/

        $data=$this->courseModel->add($_POST);

        if($data){
            echo json_encode($data);
        }
    }




}