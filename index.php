<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Figuras</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	
	


</head>
<body>
	<?php
		include("include/class.figura.php");
		include("include/Interface.formulas.php");
		include("figuras/class.cuadrado.php");
		include("figuras/class.rectangulo.php");
		include("figuras/class.triangulo.php");
		$objCuadrado = new cuadrado(3);
		$objRectangulo = new rectangulo(3,4);
		$objTriangulo = new triangulo(5,7,4);
		
		echo figura::get_form();
		//************ */
		//	PRUEBAS CON DATOS QUEMADOS
		//	DESCOMENTE PA PROBAR
		//*********** */
		/*	
		
		echo $objCuadrado->GetArea()."<br>";
		echo $objCuadrado->GetPerimetro()."<br>";
		echo $objRectangulo->GetArea()."<br>";
		echo $objRectangulo->GetPerimetro()."<br>";
		echo $objTriangulo->GetArea()."<br>";
		echo $objTriangulo->GetPerimetro()."<br>";*/

		
		
	?>
	
</body>

</html>
