<?php

class Dashboard extends MY_Controller{

    public function index(){
        $data = array();
        $data['title'] = 'Administrator';

        $this->load_page('index',$data);

    }



}