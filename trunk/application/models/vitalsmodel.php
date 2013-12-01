<?php
Class vitalsmodel extends CI_Model{

	public function putVitals($hr,$rr,$st,$po,$pa,$ts){
		$data['heartRate'] = $hr;
		$data['respRate'] = $rr;
		$data['temp'] = $st;
		$data['posture'] = $po;
		$data['acceleration'] = $pa;
		$data['stampTime'] = $ts;
		return $this->db->insert("vitals",$data);
	}
	
}