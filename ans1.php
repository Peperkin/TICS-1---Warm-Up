<!-- Falta CSS -->
<!-- Cambiar valores rentabilidad -->
<!DOCTYPE html>
<html>
<head>
	<title>Resultados 1</title>
</head>
<body>
<?php
	$sexo = $_POST['sexo'];
/*	$afp = $_POST['AFP'];
	$tipo = $_POST['tipo']; */
	$pActual = $_POST['pActual'];
	$sActual = $_POST['sActual'];
	$edad = $_POST['edad'];
	$APV = $_POST['apv']/100;
	$Re = $_POST['rentabilidad']/100;
	$mEmpl = 0;

/*	switch($afp) {
		case "Capital":
			switch($tipo) {
				case 'A':
					$Re = 0.01;
					break;
				case 'B':
					$Re = 0.02;
					break;
				case 'C':
					$Re = 0.03;
					break;
				case 'D':
					$Re = 0.04;
					break;
				case 'E':
					$Re = 0.05;
					break;
			}
			break;
		case "Cuprum":
			switch($tipo) {
				case 'A':
					$Re = 0.06;
					break;
				case 'B':
					$Re = 0.07;
					break;
				case 'C':
					$Re = 0.08;
					break;
				case 'D':
					$Re = 0.09;
					break;
				case 'E':
					$Re = 0.10;
					break;
			}
			break;
		case "Habitat":
			switch($tipo) {
				case 'A':
					$Re = 0.11;
					break;
				case 'B':
					$Re = 0.12;
					break;
				case 'C':
					$Re = 0.13;
					break;
				case 'D':
					$Re = 0.14;
					break;
				case 'E':
					$Re = 0.15;
					break;
			}
			break;
		case "Modelo":
			switch($tipo) {
				case 'A':
					$Re = 0.16;
					break;
				case 'B':
					$Re = 0.17;
					break;
				case 'C':
					$Re = 0.18;
					break;
				case 'D':
					$Re = 0.19;
					break;
				case 'E':
					$Re = 0.20;
					break;
			}
			break;
		case "Planvital":
			switch($tipo) {
				case 'A':
					$Re = 0.21;
					break;
				case 'B':
					$Re = 0.22;
					break;
				case 'C':
					$Re = 0.23;
					break;
				case 'D':
					$Re = 0.24;
					break;
				case 'E':
					$Re = 0.25;
					break;
			}
			break;
		case "Provida":
			switch($tipo) {
				case 'A':
					$Re = 0.26;
					break;
				case 'B':
					$Re = 0.27;
					break;
				case 'C':
					$Re = 0.28;
					break;
				case 'D':
					$Re = 0.29;
					break;
				case 'E':
					$Re = 0.30;
					break;
			}
			break;
	}
*/
	echo "Sexo: ", $sexo, "<br>Pensión Actual: ", $pActual, "<br>Salario Actual: ", $sActual, "<br>Edad Actual: ", $edad, "<br>Rentabilidad: ", $Re, "<br>";
	if($sexo == 'Masculino') {
		$mEmpl = (65 - $edad) * 12;
	} elseif ($sexo == "Femenino") {
		$mEmpl = (60 - $edad) * 12;
	}
	echo "Meses de empleabilidad restantes: ", $mEmpl, "<br><br>";
	for($i = 0; $i < $mEmpl; $i++) {
		$pActual = (1.0018*(1+ $Re)*$pActual) + ($sActual*(0.1 + $APV));
	}
	echo "Monto final: ", $pActual;

?>
</body>
</html>
