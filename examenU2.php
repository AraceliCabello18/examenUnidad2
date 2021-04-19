<?php 
class miClase{
	//public $mensaje= 'hola';
	public $mensaje= 1;
	public function hola(){
		return "hola";
	}
    public static function metodo(){
	 // return 1;
	  //return $this->$mensaje;
    return self::hola();	
}
}
 echo miClase:: metodo();
 ?>
