<?php

class Login extends MY_Controller{

    public function index(){

        $this->load_page('login', array());

    }

    public function loginUser(){
        print_r($_POST);
    }

}