<?php
	abstract class figura{
		private $tipo;
		private $a; //area
		private $p; //perimetro
		
		public static function get_form(){
			$html = '
			<head> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> </head>
			<center><div><img src="./img/espe.png" class="w-50"></img></div>
			<div>
				<h2>Grupo 06</h2>
				<h3> Cabezas Jhoel - Chanchay Randy </h3>
			</div>
			<div class="card text-center mt-5 col-sm-6">
			<div class="card-header ">
				<h4>Ingreso de los datos de la Figura</h4>
			</div>
			<div class="card-body">
			<form name="figuras" id="formulario" method="POST" action="" >
			<table border=0 align="center">
				<tr>
					<th colspan="2"></th>
				</tr>
				<tr>
					<td class="form-label h5">Tipo: </td>
					<td>
						<select class="form-select" id="select" name="tipo" OnChange="activarLado()">
							<option value="sel">Seleccione...</option>
							<option value="cuadrado">Cuadrado</option>
							<option value="rectangulo">Rectángulo</option>
							<option value="triangulo">Triángulo</option>
						</select>
					</td>
				</tr>
				<tr>
					<td class="form-label p-3 h5">Lado 1:</td>
					<td><input type="text" class="form-control" id="lado1" name="lado_1" size="4" disabled></td>
				</tr>
				<tr>
					<td class="form-label p-3 h5">Lado 2:</td>
					<td><input type="text" class="form-control" id="lado2" name="lado_2" size="4" disabled></td>
				</tr>
				<tr>
					<td class="form-label p-3 h5">Lado 3:</td>
					<td><input type="text" class="form-control" id="lado3" name="lado_3" size="4" disabled></td>
				</tr>							
				<tr>
					<th colspan="2"><input type="submit" name="calcular" class="btn btn-primary btn-lg btn-block mt-3" value="Calcular"></th>
				</tr>
			</table>
			</form>
			</div>
			</div></center>
			<script src="./script/script.js"> </script>';
			
			return $html;
		}
		
		// METODOS ABSTRACTOS	
		public abstract function GetArea();
	    
	    
	    public abstract function GetPerimetro();
	    
	    
	    public abstract function GetTipo();
	}
?>
