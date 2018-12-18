<?php
class Estudiante{
	private $nombre;
	private $apellido;
	private $cuenta;
	private $clave;
	private $carrera;
	private $indice;
	private $urlImagen;

	public function __construct(
		$nombre = null,
		$apellido = null,
		$cuenta = null,
		$clave = null,
		$carrera = null,
		$indice = null,
		$urlImagen = null
	){
		$this->nombre = $nombre;
		$this->apellido = $apellido;
		$this->cuenta = $cuenta;
		$this->clave = $clave;
		$this->carrera = $carrera;
		$this->indice = $indice;
		$this->urlImagen = $urlImagen;
	}

	public function __toString(){
		$var = "Estudiante{"
		."nombre: ".$this->nombre." , "
		."apellido: ".$this->apellido." , "
		."cuenta: ".$this->cuenta." , "
		."clave: ".$this->clave." , "
		."carrera: ".$this->carrera." , "
		."indice: ".$this->indice." , "
		."urlImagen: ".$this->urlImagen;
		return $var."}";
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}
	public function getApellido(){
		return $this->apellido;
	}

	public function setApellido($apellido){
		$this->apellido = $apellido;
	}
	public function getCuenta(){
		return $this->cuenta;
	}

	public function setCuenta($cuenta){
		$this->cuenta = $cuenta;
	}
	public function getClave(){
		return $this->clave;
	}

	public function setClave($clave){
		$this->clave = $clave;
	}
	public function getCarrera(){
		return $this->carrera;
	}

	public function setCarrera($carrera){
		$this->carrera = $carrera;
	}
	public function getIndice(){
		return $this->indice;
	}

	public function setIndice($indice){
		$this->indice = $indice;
	}
	public function getUrlImagen(){
		return $this->urlImagen;
	}

	public function setUrlImagen($urlImagen){
		$this->urlImagen = $urlImagen;
    }
    
    public static function obtenerEstudiantes(){
        $archivo = fopen("../data/estudiantes.json", "r");
        $registros = array();
        while(($linea=fgets($archivo))){
            $registros[] = json_decode($linea, true);
        }
        return json_encode($registros);
    }

}
?>