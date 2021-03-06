<?php

class Planificador extends CI_Controller{

	public function index(){
		$this->load->model('Usuarios_Model','UM',true);
		$datos['Usuarios']=$this->UM->getAll();
		$content_data = array(
			'usuarios' => $datos['Usuarios']
		);
		$this->load->view('planificador_inicio.php');
	}

	public function plan_minero(){
		$this->load->model('Usuarios_model','UM',true);
		$datos['Usuarios']=$this->UM->getAll();
		$content_data = array(
			'usuarios' => $datos['Usuarios']
		);
		$this->load->view('planificador_plan_minero.php');
	}

	public function cronograma(){
		$this->load->model('Usuarios_model','UM',true);
		$datos['Usuarios']=$this->UM->getAll();
		$content_data = array(
			'usuarios' => $datos['Usuarios']
		);
		$this->load->view('planificador_plan_cronograma.php');
	}

	public function carguio(){
		$this->load->model('Usuarios_model','UM',true);
		$datos['Usuarios']=$this->UM->getAll();
		$content_data = array(
			'usuarios' => $datos['Usuarios']
		);
		$this->load->view('planificador_plan_carguio.php');
	}

	public function perforacion(){
		$this->load->model('Usuarios_model','UM',true);
		$datos['Usuarios']=$this->UM->getAll();
		$content_data = array(
			'usuarios' => $datos['Usuarios']
		);
		$this->load->view('planificador_plan_perforacion.php');
	}

	public function transporte(){
		$this->load->model('Usuarios_model','UM',true);
		$datos['Usuarios']=$this->UM->getAll();
		$content_data = array(
			'usuarios' => $datos['Usuarios']
		);
		$this->load->view('planificador_plan_transporte.php');
	}

	public function tronadura(){
		$this->load->model('Usuarios_model','UM',true);
		$datos['Usuarios']=$this->UM->getAll();
		$content_data = array(
			'usuarios' => $datos['Usuarios']
		);
		$this->load->view('planificador_plan_tronadura.php');
	}

	public function alertas(){
		$this->load->model('Usuarios_model','UM',true);
		$datos['Usuarios']=$this->UM->getAll();
		$content_data = array(
			'usuarios' => $datos['Usuarios']
		);
		$this->load->view('planificador_alerta.php');
	}

	public function editar(){
		//cambiar modelo por modelo del plan minero
		$this->load->model('Usuarios_model', 'UM', true);
		$datos['Usuarios']=$this->UM->getAll();
		$content_data = array(

		);
		$this->load->view('planificador_editar_plan.php');
	}
}
