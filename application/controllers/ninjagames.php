<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//change class name to reflect the controller page name
class Ninjagames extends CI_Controller {

	public function index()
	{
		$this->load->view('main');
	}

	public function process()
	{
		$gold = $this->currentgold();
		$building = $this->input->post('building');
		if ($building == "farm") {
			$roll = rand(10,20);
			$amount = $roll + $gold;
		}
		elseif ($building == "cave") {
			$roll = rand(5,10);
			$amount = $roll + $gold;
		}
		elseif ($building == "house") {
			$roll = rand(2,5);
			$amount = $roll + $gold;
		}
		elseif ($building == "casino") { 
			$roll = rand(-50,50);
			$amount = $gold+$roll;
		}
		$this->session->set_userdata('roll',$roll);
		$this->session->set_userdata('gold',$amount);
		$this->session->set_userdata('building',$building);
		redirect("/");
	}

	private function currentgold()
	{
		if ($this->session->userdata('gold')) 
		{
			$gold = $this->session->userdata('gold');
			return $gold;
		}
		else
		{
			$this->session->set_userdata('gold',0);
			$gold = $this->session->userdata('gold');
			return $gold;
		}
	}

	public function reset() {
		$this->session->sess_destroy();
		redirect("/");
	}

	private function activities() {
		$this->session->sess_destroy();
		redirect("/");
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */