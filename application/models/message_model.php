<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Message_model extends CI_Model{
	public function save($username, $password){
		$data = array(
			'username' => $username,
			
			'password' => $password
		);
		$this -> db -> insert('t_user',$data);
	}
}