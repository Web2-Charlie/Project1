<?php

class Administrator extends MY_Controller{

    public function index(){
        $data = array();
        $data['title'] = 'Administrator';
        $this->load_page('index',$data);
    }
    function get_users(){
        $data['users'] = getrow('user', '', 'array');
        $this->load_page('users',$data);
    }

    function login() {
        $uname = $_POST['username'];
        $pass = $_POST['password'];
        $param['select'] = 'username, password';
        $param['where'] = "username = '$uname' AND password = '$pass'";
        $res = getrow('user',$param,'array');
        $_SESSION['username'] = $uname;
        $data['users'] = getrow('user', '', 'array');
        $this->load_page('admin',$data);
    }
}