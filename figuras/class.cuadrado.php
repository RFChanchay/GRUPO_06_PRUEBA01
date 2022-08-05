<?php
class cuadrado extends figura implements formulas {
    private $lado1;
    function __construct($lado1){
		
		$this->lado1 = $lado1;
		$this->tipo = 'Cuadrilatero';
		$this->a = $this->area();
		$this->p = $this->perimetro();
	}
	public function area(){
        return $this->lado1*$this->lado1;
    }
	public function perimetro(){
        return $this->lado1*4;
    }
    public function GetArea(){
        return $this->a;
    }
	public function GetPerimetro(){
        return $this->p;
    }
    public function GetTipo(){
        return $this->tipo;
    }

    

}
?>
