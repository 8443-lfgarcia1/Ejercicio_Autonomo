<?php
abstract class figura
{
	private $tipo;
	private $a; //area
	private $p; //perimetro

	public static function get_form()
	{
		$html = '
			
		<form  method="POST" id="figuras" action="">

		<div class="wrapper bg-white">
		<div class="h2 text-center">UNIVERSIDAD DE LAS FUERZAS ARMADAS - ESPE</div>
		<div class="h4 text-muted text-center pt-2">Nombre: Luis Garcia</div>
		<div class="h4 text-muted text-center pt-2">NRC: 8443</div>
		<div class="h4 text-muted text-center pt-2">INGRESO DATOS DE LA FIGURA</div>
		<form class="pt-3">

		<div class="form-group py-2">
			<select  id="sleccionar"name="tipo" onchange="habilitarCampos()">
				<option value="sel" >Seleccione...</option>
				<option value="cuadrado" id="cuadrado">Cuadrado</option>
				<option value="rectangulo" id="rectangulo">Rectángulo</option>
				<option value="triangulo" id="triangulo">Triángulo</option>
			</select>
		</div>
			<div class="form-group py-2">
				Lado 1:<div class="input-field"> <span class="far fa-user p-2"></span> <input type="text" name="lado_1" id="l1" size="4" 
							placeholder="Ingrese Lado 1"> </div>
			</div>
			<div class="form-group py-1 pb-2">
				Lado 2:<div class="input-field"> <span class="fas fa-lock p-2"></span> <input type="text" name="lado_2" size="4" id="l2"  
							placeholder="Ingrese Lado 2"> <button class="btn bg-white text-muted">
							<span class="far fa-eye-slash"></span> </button> </div>
			</div>
			<div class="form-group py-1 pb-2">
				Lado 3:<div class="input-field"> <span class="fas fa-lock p-2"></span> <input type="text" name="lado_3" id="l3" size="4" 
							placeholder="Ingrese Lado 3"> <button class="btn bg-white text-muted">
							<span class="far fa-eye-slash"></span> </button> </div>
			</div>
		
		</form>
		
<script type="text/javascript" src="js/scrip.js"></script>
			';

		return $html;
	}

	// METODOS ABSTRACTOS	
	public abstract function GetArea();


	public abstract function GetPerimetro();


	public abstract function GetTipo();
}
?>