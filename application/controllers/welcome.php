<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//change class name to reflect the controller page name
class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('view_ninjagold');
	}

	public function gold()
	{

		$gold = 0;
			
		foreach ($this->input->post() as $name => $value) 
		{
			switch ($name) 
			{
				case 'farm':
					$value = rand(10,20);
					break;
				case 'cave':
					$value = rand(5,10);
					break;
				case 'house':
					$value = rand(2,5);
					break;
				case 'casino':
					$value = rand(-50,50);
					break;
				
				default:
					# code...
					break;
			}
		}
		$gold +=$value;

		if ($value>=0) 
		{
			$activity = '<p>You entered a '.$name.' and earned '.$value.'</p><br>';
		}
		else
		{
			$activity = '<p style="color:red";>You entered a '.$name.' and lost '.$value.'</p><br>';
		}
		//$this->session->set_userdata('amount',$gold);
		$amount = $this->session->userdata('amount');
		$activities = $this->session->userdata('activities');
		$activities[] = $activity;

		$amount +=$gold;
		$this->session->set_userdata('amount',$amount);


		$this->session->set_userdata('activities',$activities);
		// var_dump($activities);
		// die();

		redirect($this->load->view('view_ninjagold'));
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */