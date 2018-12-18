<?php
class docente{
	public $sueldo;
	public $grado;

	public function __construct(
		$sueldo = null,
		$grado = null
	){
		$this->sueldo = $sueldo;
		$this->grado = $grado;
	}

	public function __toString(){
		$var = "docente{"
		."sueldo: ".$this->sueldo." , "
		."grado: ".$this->grado;
		return $var."}";
	}


}
?>