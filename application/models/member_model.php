<?php
	Class Member_model extends CI_Model
	{
		public function get_memberdata()
		{
			$this->load->database();
			$res=$this->db->get('account');
			return $res->result();
		}
	}




?>