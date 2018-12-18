<?php
class persona{
	public $nombre;
	public $cuenta;
	public $correo;
	public $contraseña;
	public $carrera;

	public function __construct(
		$nombre = null,
		$cuenta = null,
		$correo = null,
		$contraseña = null,
		$carrera = null
	){
		$this->nombre = $nombre;
		$this->cuenta = $cuenta;
		$this->correo = $correo;
		$this->contraseña = $contraseña;
		$this->carrera = $carrera;
	}

	public function __toString(){
		$var = "persona{"
		."nombre: ".$this->nombre." , "
		."cuenta: ".$this->cuenta." , "
		."correo: ".$this->correo." , "
		."contraseña: ".$this->contraseña." , "
		."carrera: ".$this->carrera;
		return $var."}";
	}


	public function agregar(/*Parametros*/){
	}
	public function matricular(/*Parametros*/){
	}

}
?>