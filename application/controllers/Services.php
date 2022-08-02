<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

	public function index()
	{
		$this->load->view('services/index');
	}

    public function administracionNaves()
	{
		$this->load->view('services/administracionNaves.php');
	}
    
    public function servicioLogistica()
	{
		$this->load->view('services/servicioLogistica.php');
	}

    public function auditoriasSeguridad()
	{
		$this->load->view('services/auditoriasSeguridad.php');
	}

    public function arriendoGeneradores()
	{
		$this->load->view('services/arriendoGeneradores.php');
	}

    public function instruccionCapacitacion()
	{
		$this->load->view('services/instruccionCapacitacion.php');
	}

    public function sistemaGestion()
	{
		$this->load->view('services/sistemaGestion.php');
	}

    public function todoServiciosIngenieria()
	{
		$this->load->view('services/todoServiciosIngenieria.php');
	}

    public function asistenciaMuelles()
	{
		$this->load->view('services/asistenciaMuelles.php');
	}

    public function serviciosIngenieria()
	{
		$this->load->view('services/serviciosIngenieria.php');
	}

    public function nuevasNaves()
	{
		$this->load->view('services/nuevasNaves.php');
	}

    public function accidentes()
	{
		$this->load->view('services/accidentes.php');
	}

    public function sgs()
	{
		$this->load->view('services/sgs.php');
	}

    public function otros()
	{
		$this->load->view('services/otros.php');
	}


}
