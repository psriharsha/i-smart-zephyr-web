<?php 
Class usermodel extends CI_Model{

	public function getAll(){
		return $this->db->get('user')->result();
	}
	
	public function authenticate($data){
		$result = -1;
		$exist = $this->db->get_where('user',$data);
		if($exist->num_rows() == 1){
			$rowVal = $exist->row_array();
			$result = $rowVal['uId'];
		}
		return $result;
	}
	
	public function getMyDetails($data){
		$result = null;
		$exist = $this->db->get_where('user',$data);
		if($exist->num_rows() == 1)
			$result = $exist->row();
		return $result;
	}
	
}