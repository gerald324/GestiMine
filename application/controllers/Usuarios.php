<?php

class Usuarios extends CI_Controller{
	public function saludar(){
		$this->load->model('Usuarios_Model','UM',true);
		$datos['Usuarios']=$this->UM->getAll();
		$this->load->view('usuarioSaludo.php',$datos);
	}
}
?>
