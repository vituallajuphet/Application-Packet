<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends MY_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		redirect(base_url("api/get_data"));
    }

    public function get_data(){
		if(is_authorize(2)){
			
		}
	}
	
	public function post_data(){
		if(is_authorize(1)){
			echo "2";
		}
    }
}
?>
