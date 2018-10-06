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
    }

    public function index(){
        $this->load->view('home_view');
    }
}