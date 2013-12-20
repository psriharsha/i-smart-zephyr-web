<?php
Class vitalsmodel extends CI_Model{

	public function putVitals($data){		
		return $this->db->insert("vitals",$data);
	}
	
}