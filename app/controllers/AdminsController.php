<?php

class AdminsController extends Controller {

    private $adminModel;
    private $userModel;


    public function __construct() {
        security();
        if (!$_SESSION['isadmin']) {
            redirect('courses');
        }

        $this->adminModel = $this->model('Admin');
        $this->userModel = $this->model('User');
    }

    public function index() {

        $data = [
            'batches' => $this->adminModel->getAllBatches()
        ];

        $this->view('/admins/index', $data);
    }


    public function manageBatch($session) {

        $data = [
            'session'=>$session,
            'batches'=>$this->adminModel->getAllBatches(),
            'students'=>$this->adminModel->getStudents($session)
        ];

        $this->view('/admins/manageBatch', $data);
    }


    public function addBatch() {
        $session = $_POST['session'];


        $data = $this->adminModel->addBatch($session);

        if ($data) {
            echo json_encode($data);
        }
    }

    public function deleteBatch($session) {

        if($this->adminModel->deleteBatch($session)){
            flash('admins_index','Batch deleted');
            redirect('admins');
        }
    }

    public function addStudents($session){

        $_POST['ID']=strtoupper($_POST['ID']);
        $_POST['session']=$session;

        if($this->adminModel->addStudent($_POST)){
            flash('admins','Student Added');
        }else{
            flash('admins','Student with same id already exist','alert alert-danger');
        }
        redirect('admins/manageBatch/'.$session);

    }


    public function deleteStudents($session,$id){


        $this->adminModel->deleteStudent($id);
        flash('admins','Student deleted');


        redirect('admins/manageBatch/'.$session);

    }
}
