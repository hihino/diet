<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class member extends CI_Controller {

/* 	public function index()
	{
		$this->load->view('home_message');
	} */
	public function register()
	{
		$this->load->view('member/register_message');
	}
	public function login()
	{
		$this->load->view('member/login_message');
	}	
	
}
