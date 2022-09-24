<?php

class PagesController extends Controller {

    private $adminModel;
    private $courseModel;

    public function __construct() {
        $this->adminModel = $this->model('Admin');
        $this->courseModel=$this->model("Course");
    }

    public function attendance($id){

        $course=$this->courseModel->getCourseById($id);

        if(!isLoggedIn()){
            redirect('users/login');
        }

        $data=[
            'course'=>$course,
            'students'=>$this->adminModel->getStudents($course->session)
        ];

        $this->view('/pages/attendance',$data);
    }

    public function student(){

        if(!isLoggedIn()){
            redirect('users/login');
        }

        $data=[

        ];

        $this->view('/pages/student',$data);
    }

    public function statistics(){

        if(!isLoggedIn()){
            redirect('users/login');
        }

        $data=[
            'courses'=>$this->courseModel->getCurrentUserCourses()
        ];

        $this->view('/pages/statistics',$data);
    }

    public function submitAttendance($course_id){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $classId=$this->courseModel->newClass($course_id);

            if($classId){
                if(isset($_POST['attendances'])){

                    foreach ($_POST['attendances'] as $attendance){
                        $this->courseModel->addAttendance($course_id,$classId,$attendance);
                    }
                }
            }
        }

        flash("courses_index","Attendance Submitted");
        redirect('courses');

    }

    public function statisticsDetails($course_id){

        $course=$this->courseModel->getCourseById($course_id);

        $total_class=$this->courseModel->totalClass($course_id);

        $attendances=$this->courseModel->getAttendance($course_id);

        $count=[];

        foreach ($attendances as $attendance){
            $count[$attendance->ID]=$attendance->count/$total_class;
        }

        $data=[
            'course'=>$course,
            'total_class'=>$total_class,
            'students'=>$this->adminModel->getStudents($course->session),
            'attendances'=>$count
        ];

        $this->view('/pages/statisticsDetails',$data);
    }
}