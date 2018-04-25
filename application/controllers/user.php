<?php

class user extends CI_Controller {
	function add(){
		echo $this->input->post("username");
	}
	function form(){
		$this->load->view("form_user_v");
	}
	function index(){
		echo "english pro";
	}
}