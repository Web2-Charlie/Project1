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

    function admin() {
        $this->load_page('admin');
    }

    function login() {
        $uname = $_POST['username'];
        $pass = $_POST['password'];
        $param['select'] = 'firstname, lastname, username, password, user_type';
        //$param['where'] = "username = '$uname' AND password = '$pass'";
        $param['where'] = array(
            'username' => $uname,
            'password' => md5($pass)
        );
        $res = getrow('user',$param,'row');
        // $res[0]['user_type']

        $data['users'] = getrow('user','','array');

        
        try{
            $res->user_type == 'user' ? $this->load_page('employee',$data) :  $this->load_page('admin',$data); 
        }catch(Exception $e){

        }
        
        // if(count($res) > 0) {
        //     $_SESSION['username'] = $uname;
        //     foreach($res as $user) {
        //         foreach($user as $key => $value) {
        //             if($key == 'user_type') {
        //                 if(strtolower($value) == strtolower("admin")) {
        //                     $data['users'] = getrow('user','','array');
        //                     $this->load_page('admin',$data);
        //                 }
        //                 else {$this->load_page('employee'); echo $_SESSION['username'];}
        //             }
        //             else {
        //                 continue;
        //                 //do nothing
        //             }
        //         }
        //     }
        // }
        // else echo '<script> alert("Username or Password is Incorect"); window.location.replace("index")</script>';
    }

    function add_Employee() {
        $data = array(
            /*'lastname' => '$_POST['lname']',
            'firtname' => '$_POST['firtname']',
            'email' => '$_POST['email']',
            'username' => '$_POST['username']',
            'password' => 'md5($_POST['password'])',
            'user_type' => '"user"',*/
            'lastname' => 'Alpha',
            'firstname' => 'Bravo',
            'email' => 'alpha@gmail.com',
            'username' => 'alphab',
            'password' => md5("alpha1"),
            'user_type' => 'user'
        );

       $res = insert('user',$data);
       if($res) echo '<script> alert("Added 1 Employee"); window.location.replace("employee")</script>';
       else echo '<script> alert("There was an error"); window.location.replace("add_employee")</script>';
    }
    function update_details() {
        $set = array(
            'lastname' => '',
            'firtname' => 'new value',
            'email' => 'new value',
            'username' => 'new value',
            'password' => 'new value'
        );
       $where = array(
            ';id' => 'value'
       );

        update('user',$set,$where);
    }
}