<?php

class PagesController extends Controller {

    public function __construct() {
    }

    public function attendance(){

        if(!isLoggedIn()){
            redirect('users/login');
        }

        $data=[

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

        ];

        $this->view('/pages/statistics',$data);
    }
}