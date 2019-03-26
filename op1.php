<!DOCTYPE html>
<html>
	<head>
		<title>Opción 1</title>
		<style>
			head {background-color: black;}
			body {background-color: powderblue;}
			h1 {color: red;}
		</style>
		<h1><center>Retirement Simulator</center></h1>
	</head>
	<body>
	<center>
		<form action="ans1.php" method="post">
			<input type="radio" name="sexo" value="Masculino" checked>Hombre
			<input type="radio" name="sexo" value="Femenino">Mujer<br>
			Pensión actual:	
			<input type="number" min="0" name="pActual"><br>
			Salario actual:	
			<input type="number" min="0" name="sActual"><br>
			Edad:	
			<input type="number" min="18" max="65" name="edad" value="18"><br>
			APV:
			<input type="number" min="0" max="90" name="apv" value="0"><br>
			<input type="submit" value="Enviar">
		</form>
	</center>
	</body>
</html>
