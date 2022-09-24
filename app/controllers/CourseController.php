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
            'batches'=>$this->courseModel->getAllBatches(),
            'courses'=>$this->courseModel->getCurrentUserCourses()
        ];

        $this->view('/courses/index',$data);
    }

    public function add(){

        if(!isLoggedIn()){
            redirect('users/login');
        }

        $_POST['code']=strtoupper($_POST['code']);

        $data=$this->courseModel->add($_POST);



        if($data){
            echo json_encode($data);
        }
    }

    public function delete($id){

        if(!isLoggedIn()){
            redirect('users/login');
        }

        if($this->courseModel->delete($id)){
            flash('courses_index','Course deleted');
            redirect('courses');
        }



    }




}