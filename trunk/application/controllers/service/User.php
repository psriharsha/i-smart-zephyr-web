<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function authenticate()
	{
		$data['userName'] = $this->input->post('user');
		$data['passWord'] = md5($this->input->post('pass'));
		$result = $this->usermodel->authenticate($data);
		echo $result;
	}

	public function test()
	{
		$data = array(
				'text' => $this->input->post('text') ,
		);
		$this->db->insert('test',$data);
		echo "OK";
	}

	public function insertVitals()
	{
		$data['uId'] = $this->input->post('uId');
		$data['heartRate'] = $this->input->post('hr');
		$data['respRate'] = $this->input->post('rr');
		$data['temp'] = $this->input->post('st');
		$data['posture'] = $this->input->post('po');
		$data['acceleration'] = $this->input->post('pa');
		$data['stampTime'] = $this->input->post('ts');
		$result = $this->vitalsmodel->putVitals($data);
		if($result == 1)
		echo "Success";
		else
		echo "Failure";
	}
	
	public function getDetails(){
		$data['uId'] = $this->input->post('uId');
		$result = $this->usermodel->getMyDetails($data);
		echo json_encode($result);
	}
}

/* End of file User.php */
/* Location: ./application/controllers/service/User.php */