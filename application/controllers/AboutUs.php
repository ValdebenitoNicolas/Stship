<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AboutUs extends CI_Controller {

	public function index()
	{
		$this->load->view('aboutus/index');
	}

    public function certificadoAprobacionIso()
	{
		$this->load->view('aboutus/certificadoAprobacionIso');
	}

    public function politica()
	{
		$this->load->view('aboutus/politica');
	}

    public function medioambientePrestadores()
	{
		$this->load->view('aboutus/medioambientePrestadores');
	}

    public function aspectosMedioambientales()
	{
		$this->load->view('aboutus/aspectosMedioambientales');
	}

    public function metasMedioambiente()
	{
		$this->load->view('aboutus/metasMedioambiente');
	}

}

