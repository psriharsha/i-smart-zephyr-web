<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function authenticate()
	{
		$data['userName'] = $this->input->post('user');
		$data['passWord'] = md5($this->input->post('pass'));
		$result = $this->usermodel->authenticate($data);
		if($result)
			echo "Success";
		else echo "Failure";
	}
	
	public function test()
	{
		$data = array(
				'text' => 'My title' ,
		);
		$this->db->insert('test',$data);
		echo "OK";
	}
}

/* End of file User.php */
/* Location: ./application/controllers/service/User.php */