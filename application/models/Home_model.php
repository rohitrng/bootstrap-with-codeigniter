<?php
/**
 * Created by PhpStorm.
 * User: rohitjadhav
 * Date: 06/10/18
 * Time: 3:30 PM
 */

class Home_model extends CI_Model
{
    public function __construct(){
        parent::__construct();
    }

    protected $users = 'users';

    public function create($data){
        $query = $this->db->insert($this->users,$data);
        if($query){
            return true;
        } else {
            return false;
        }
    }
}