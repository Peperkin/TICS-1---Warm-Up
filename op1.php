<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=number] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
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
		<form action="ans1.php" method="post">
			<input type="radio" name="sexo" value="Masculino" checked>Hombre
			<input type="radio" name="sexo" value="Femenino">Mujer<br><br>
			AFP:
			<select name="AFP">
				<option value="Capital">Capital</option>
				<option value="Cuprum">Cuprum</option>
				<option value="Habitat">Habitat</option>
				<option value="Modelo">Modelo</option>
				<option value="Planvital">Planvital</option>
				<option value="Provida">Provida</option>
			</select><br>
			Tipo fondo:
			<select name="tipo">
				<option value="A">A</option>
				<option value="B">B</option>
				<option value="C">C</option>
				<option value="D">D</option>
				<option value="E">E</option>
			</select><br>
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
	</body>
</html>
