<?php
/**
 * Created by PhpStorm.
 * User: rohitjadhav
 * Date: 06/10/18
 * Time: 12:24 PM
 */

class Home extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('Home_model');
    }

    public function index(){
        $this->load->view('home_view');
    }

    public function insert(){
        $data = [
            'username'  =>$this->input->post('username'),
            'email'     =>$this->input->post('email'),
            'password'  =>password_hash($this->input->post('password'),PASSWORD_BCRYPT)
        ];

        if($this->Home_model->create($data)){
            $this->session->set_flashdata('success','Sing Up success fully');
            return redirect('Home');
        } else {
//            return redirect('Home');
            return redirect('Home');
        }


    }
}