<?php
class rectangulo extends figura implements formulas{
    private $lado1;
    private $lado2;
	
    function __construct($lado1,$lado2){
		
		$this->lado1 = $lado1;
        $this->lado2 = $lado2;
		$this->tipo = 'Cuadrilatero';
		$this->a = $this->area();
		$this->p = $this->perimetro();
	}
	public function area(){
        return $this->lado1*$this->lado2;
    }
	public function perimetro(){
        return $this->lado1*2+$this->lado2*2;
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
