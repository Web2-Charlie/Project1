<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	public function index(){
		$parameters['select'] = 'fullname,username';
		$parameters['search_like'] = 'da';
		$parameters['column_order'] = array('fullname','username');
		$data = getrow('tbl_users',$parameters,'array',true);
		json($data,false);
	}
}
?>
