<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class member extends CI_Controller {

/* 	public function index()
	{
		$this->load->view('home_message');
	} */
	
	public function memberdata()
	{
		/*
		//裝載數據庫操作類
		$this->load->database();
		//裝在成功後會放入超級對象的屬性中 默認屬性名是db
		//var_dump($this->db);
		$sql ='select * from diet_account';
		$res=$this->db->query($sql);
		//var_dump($res); //返回值是一個對象
		$users=$res->result();
		
		$data['account_list']=$users;
		$this->load->view('member/register_message',$data);
		
		//mysqli_fetch_assoc    $res->result_array() //返回二維數組, 裡面是關聯數組
		//mysqli_fetch_object   $res->result()       //返回對象
		//                      $res->row()          //返回第一條數據, 直接是一個對象 	
		*/
		//加載模型
		$this->load->model('Member_model');
		//調用模型取得數據
		$data['account_list']=$this->Member_model->get_memberdata();
		$this->load->view('member/memberdata_message',$data);
		
		
		
		//$this->load->view('member/register_message');
	}
	
	public function register()
	{
		$this->load->view('member/register_message');
	}
	
	public function login()
	{
		$this->load->view('member/login_message');
	}	
	
}
