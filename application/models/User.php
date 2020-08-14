<?php


class User extends CI_Model{

	function register($data){
		$this->db->select('*');
		$this->db->from('costomers');
		$this->db->where("email = '".$data['email']."'");
		$this->db->limit(1);
		$query = $this->db->get();
		if($query->num_rows() == 0){
			$this->db-insert('constomers', $data);
			if ($this->db->affected_rows() > 0){
				return true;
			}
		}else{
			return false;
		}
	}

	function login($data){
		$this->db->select('*');
		$this->db->from('customers');
		$this->db->where("email = '".$data['username']."' AND password = '".$data['password']."'");
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return true;
		} else {
			return false;
		}
	}

	function read_user_information($user){
		$this->db->select('*');
		$this->db->from('customers');
		$this->db->where("email = '".$user."'");
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return $query->result();
		} else {
			return false;
		}
	}

}
