<?php

class Controlador_inicio extends CI_Controller {

	public function index()
	{
		$this->load->view('paginas/header');
		$this->load->view('paginas/inicio');
		$this->load->view('paginas/footer');
	}
}
