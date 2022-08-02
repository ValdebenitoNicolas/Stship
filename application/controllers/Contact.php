<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		$this->load->view('contact/index');
	}

	public function sendMail(){
		$data = array(
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'subject' => $this->input->post('subject') ? : 'Sin asunto',
				'message' => $this->input->post('message') ? : 'Sin mensaje'
		);

		$to = 'hugomancillatellez@gmail.com';
		$subject = 'Contacto - ' . $data['subject'];
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "From: no-reply@stship.net" . "\r\n" . "Content-type:text/html;charset=UTF-8" . "\r\n";

		$message = '
		<!DOCTYPE html>
		<html lang="es">
		<head>
		<meta charset="utf-8">
		<title>Redactamostucontrato.cl</title>
	
		</head>
		<body>
		<h2>South Trade Shipmanagement</h2>
		<p>Formulario de contacto web</p>
		<p>Ha recibido un nuevo mensaje desde el formulario web. Puede responder directamente este correo.</p>
		Nombre: '. $data['name'] .'<br>
		Correo: '. $data['email'] .'<br>
		Asunto: '. $data['subject'] .'<br>
		Mensaje: '. $data['message'] .'<br>
		<p>
		Derechos reservados &copy; stship.net<br>
		<small>Errázuriz 755 oficina 505, +56 32 2609600</small>
		</p>
		</body>
		</html>
		';
		
		if(mail($to, $subject, $message, $headers)){
			echo json_encode(true);
		}else{
			echo json_encode(false);
		}
}


}
