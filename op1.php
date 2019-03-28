<!DOCTYPE html>
<html>
<style>
body {
  background: #332f35;
  margin: 0 0;
  padding:10px;
  text-align:center;
}
.center-on-page {
	position: relative;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
}

input[type="radio"] {
	position: absolute;
	opacity: 0;
	z-index: -1;
	visibility: hidden;
}

label {
	position: relative;
	display: inline-block;
	margin-right: 10px;
	margin-bottom: 10px;
	padding-left: 30px;
	padding-right: 10px;
	line-height: 36px;
	cursor: pointer;
}

label::before {
	content: " ";
	position: absolute;
	top: 6px;
	left: 0;
	display: block;
	width: 24px;
	height: 24px
	border: 2px solid #63ad44;
	border-radius: 4px;
	z-index: -1;
}

input[type="radio"] + label::before {
  border-radius: 18px;
}

input[type="checkbox"]:checked + label,
input[type="radio"]:checked + label {
  padding-left: 10px;
  color: #fff;
}

input[type="radio"]:checked + label::before {
  top: 0;
  width: 100%;
  height: 100%;
  background: #63ad44;
}

label,
label::before {
  -webkit-transition: .25s all ease;
  -o-transition: .25s all ease;
  transition: .25s all ease;
}

#bg {
  position:fixed; 
  top:-50%; 
  left:-50%; 
  width:200%; 
  height:200%;
}

#bg img {
  position:absolute; 
  top:0; 
  left:0; 
  right:0; 
  bottom:0; 
	margin:auto; 
	min-width:50%;
	min-height:50%;
}

.title {
  position:relative;
	font-family: 'Myriad Pro','Helvetica Neue', Helvetica;
  font-weight:bold;
  font-size: 25px;
  text-shadow: 0px 1px 2px rgba(255,255,255,.5);
  color: #444;
  text-align:center;
}

form {
  background: none;
  margin: 20px auto 0;
  padding: 10px;
  width: 280px;
}

input {
  display: block;
  font-size: 14px;
  width:240px;
  margin: 10px auto;
  padding: 10px 8px 10px 8px;
  border-radius: 5px;
  box-shadow: inset 0 1px 2px rgba(0,0,0, .55), 0px 1px 1px rgba(255,255,255,.5);
  border: 1px solid #666;
}

input {
  opacity: 0.5;
}

input:hover,
input:focus {
  opacity: .7;
  color:#08c;
  border: 1px solid #08c;
   box-shadow: 0px 1px 0px rgba(255,255,255,.25),inset 0px 3px 6px rgba(0,0,0,.25);
}

input[type="text"]:focus {
  box-shadow: inset 0 1px 2px rgba(255,255,255, .35), 0px 1px 15px rgba(0,246,255,.5);
  border: 1px solid #08c;
  outline: none;
}

input[type="submit"] {
  appearance: none;
  opacity: .99;
  width:120px;
  background: #08c;
  box-shadow: inset 0 1px 2px rgba(255,255,255, .35), 0px 1px 6px rgba(0,246,255,.5);
  border: 1px solid #0a5378;
  border-radius: 4px;
  color: #eee;
  cursor: pointer;
  text-shadow:0px -1px 0px rgba(0,0,0,.5);
}

input[type="submit"]:hover {
  background: #08c;
  width:120px;
  border: 1px solid #0a5378;
  border-radius: 3px;
  box-shadow: inset 0px 3px 16px rgba(0,0,0,.25),0px 1px 10px rgba(255,255,255,.5),inset 0px -1px 2px rgba(255,255,255,.35);
  text-shadow:0px 1px 1px rgba(0,0,0,.65);
  -webkit-transition: all 0.40s ease-out;
  transition: all 0.40s ease-out;
}

select:required:invalid {
  color: gray;
}
option[value=""][disabled] {
  display: none;
}
option {
  color: black;
}
</style>
	<head>
		<title>Opción 1</title>
	<!--<style>
			head {background-color: black;}
			body {background-color: powder#63ad44;}
			h1 {color: red;}
		</style> -->
		<h1><center>Retirement Simulator</center></h1>
	</head>
	<body>
		<form action="ans1.php" method="post">
			<div class="center-on-page">
			<input type="radio" name="sexo" id='H' value="Masculino" checked>
			<label for='H'>Hombre</label>
			<input type="radio" name="sexo" id='M' value="Femenino">
			<label for='M'>Mujer</label>
			</div>
		<!--	<select name="AFP" required>
				<option value="" disabled selected hidden>AFP</option>
				<option value="Capital">Capital</option>
				<option value="Cuprum">Cuprum</option>
				<option value="Habitat">Habitat</option>
				<option value="Modelo">Modelo</option>
				<option value="Planvital">Planvital</option>
				<option value="Provida">Provida</option>
			</select><br>
			<select name="tipo" required>
				<option value="" disabled selected hidden>Tipo Fondo</option>
				<option value="A">A</option>
				<option value="B">B</option>
				<option value="C">C</option>
				<option value="D">D</option>
				<option value="E">E</option>
			</select> -->
			<br> 
			<input type="number" placeholder="Rentabilidad (%)" name="rentabilidad"><br>
			<input type="number" min="0" placeholder="Pensión Actual" name="pActual"><br>
			<input type="number" min="0" placeholder="Salario Actual" name="sActual"><br>
			<input type="number" placeholder="Edad" min="18" max="65" name="edad"><br>
			<input type="number" placeholder="Ahorro Previsional Voluntario (APV)"min="0" max="90" step="0.01" name="apv"><br>
			<input type="submit" value="Enviar">
		</form>
	</body>
</html>
