<?php
class estudiante{
	public $promedio;
	public $clases;

	public function __construct(
		$promedio = null,
		$clases = null
	){
		$this->promedio = $promedio;
		$this->clases = $clases;
	}

	public function __toString(){
		$var = "estudiante{"
		."promedio: ".$this->promedio." , "
		."clases: ".$this->clases;
		return $var."}";
	}


}
?>