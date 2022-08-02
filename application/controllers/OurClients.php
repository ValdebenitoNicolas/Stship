<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OurClients extends CI_Controller {

	public function index()
	{
		$this->load->view('ourclients/index');
	}
}
