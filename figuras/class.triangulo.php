<?php
class triangulo extends figura implements formulas{
    private $lado1;
    private $lado2;
    private $lado3;
    function __construct($lado1,$lado2,$lado3){
		
		$this->lado1 = $lado1;
        $this->lado2 = $lado2;
        $this->lado3 = $lado3;
		$this->tipo = 'Poligono de 3 lados';
		$this->a = $this->area();
		$this->p = $this->perimetro();
	}
	public function area(){
        $s=$this->perimetro()/2;
        return sqrt($s*($s-$this->lado1)*($s-$this->lado2)*($s-$this->lado3));
    }
	public function perimetro(){
        return $this->lado1+$this->lado2+$this->lado3;
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

