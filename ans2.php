<!-- Falta fórmula y CSS -->
<!DOCTYPE html>
<html>
<head>
	<title>Resultados 2</title>
</head>
<body>
<?php
	$sexo = $_POST['sexo'];
	$pDeseada = $_POST['pDeseada'];
	$pActual = $_POST['pActual'];
	$edad = $_POST['edad'];
	$mEmpl = 0;

	echo "Sexo: ", $sexo, "<br>Pensión deseada: ", $pDeseada, "<br>Pensión actual: ", $pActual, "<br>Edad: ", $edad, "<br>";
	if($sexo == 'Masculino') {
		$mEmpl = (65 - $edad) * 12;
	} elseif ($sexo == 'Femenino') {
		$mEmpl = (60 - $edad) * 12;
	}
	echo "Meses de empleabilidad restantes: ", $mEmpl, "<br><br>";
	$sNecesario = 0;
?>
</body>
</html>
