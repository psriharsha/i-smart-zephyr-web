<?php 
Class usermodel extends CI_Model{

	public function getAll(){
		return $this->db->get('user')->result();
	}
	
	public function authenticate($data){
		$result = true;
		$exist = $this->db->get_where('user',$data);
		if($exist->num_rows() != 1)
			$result = false;
		return $result;
	}
	
}