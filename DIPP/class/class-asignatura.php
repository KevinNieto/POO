<?php
class asignatura{
	public $docente;
	public $seccion;
	public $aula;
	public $edificio;
	public $carrera;
	public $centro;
	public $facultad;
	public $unidades;
	public $programa;

	public function __construct(
		$docente = null,
		$seccion = null,
		$aula = null,
		$edificio = null,
		$carrera = null,
		$centro = null,
		$facultad = null,
		$unidades = null,
		$programa = null
	){
		$this->docente = $docente;
		$this->seccion = $seccion;
		$this->aula = $aula;
		$this->edificio = $edificio;
		$this->carrera = $carrera;
		$this->centro = $centro;
		$this->facultad = $facultad;
		$this->unidades = $unidades;
		$this->programa = $programa;
	}

	public function __toString(){
		$var = "asignatura{"
		."docente: ".$this->docente." , "
		."seccion: ".$this->seccion." , "
		."aula: ".$this->aula." , "
		."edificio: ".$this->edificio." , "
		."carrera: ".$this->carrera." , "
		."centro: ".$this->centro." , "
		."facultad: ".$this->facultad." , "
		."unidades: ".$this->unidades." , "
		."programa: ".$this->programa;
		return $var."}";
	}

}
?>