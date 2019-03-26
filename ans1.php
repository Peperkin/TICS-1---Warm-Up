<!-- Falta CSS -->
<!DOCTYPE html>
<html>
<head>
	<title>Resultados 1</title>
</head>
<body>
<?php
	$sexo = $_POST['sexo'];
	$pActual = $_POST['pActual'];
	$sActual = $_POST['sActual'];
	$edad = $_POST['edad'];
	$APV = $_POST['apv']/100;
	$mEmpl = 0;

	echo "Sexo: ", $sexo, "<br>Pensión Actual: ", $pActual, "<br>Salario Actual: ", $sActual, "<br>Edad Actual: ", $edad, "<br>";
	if($sexo == 'Masculino') {
		$mEmpl = (65 - $edad) * 12;
	} elseif ($sexo == "Femenino") {
		$mEmpl = (60 - $edad) * 12;
	}
	echo "Meses de empleabilidad restantes: ", $mEmpl, "<br><br>";
	for($i = 0; $i < $mEmpl; $i++) {
		$pActual = (1.00694*$pActual) + ($sActual*(0.1 + $APV));
	}
	echo "Monto final: ", $pActual;

?>
</body>
</html>