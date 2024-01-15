<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=divice-width, initial-scale=1.0"/>
			<title>Pagina Principal</title>
	</head>
	<style>
	*{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
}
body{
	width: 100%;
	height: 100vh;
	background: #2f0202;
	background: radial-gradient(ellipse at center, #5b720e 0%, #000000);
	background-size: 100%;
}
p{
	margin: 0;
	padding: 0;
}
.reloj{
	font-family: 'share tech mono', monospace;
	color: #ffffff;
	text-align: center;
	position: absolute;
	left: 50%;
	top: 50%;
	transform: translate(-50%,-50%);
	text-shadow: 0 0 20px rgb(230, 171, 10),0 0 20px rgb(255,255,22);
}
.fecha{
	letter-spacing: 0.1em;
	font-size: 24px;
	text-align: right;
	
}
.tiempo{
	letter-spacing: 0.1em;
	font-size: 24px;
	
	text-align: right;
}

.bienvenida{
	letter-spacing: 0.1em;
	font-size: 70px;
}
.vinculos{
	letter-spacing: 0.1em;
	font-size: 30px;
	text-align: left;
}
	</style>
	<body>
	<div class="reloj">
	    <p class="bienvenida"> Bienvenidos al Curso de Circuitos Electricos</p>
		<br><br><br><br>
		<p class="vinculos"><a href="agregar_alumno.php">Agregar Alumno</a></p>
		<p class="vinculos"><a href="login.php">Iniciar Sesion</a></p>
		<br><br><br><br>
		<p class="fecha"></p>
		<p class="tiempo"></p>
		
	</div>
	</body>
	<script>
const $tiempo=document.querySelector('.tiempo'),
$fecha= document.querySelector('.fecha');

function Relojdigital(){
    let f=new Date(),
    dia= f.getDate(),
    mes= f.getMonth()+1,
    anio= f.getFullYear(),
    diaSemana=f.getDay();

    dia= ('0'+dia).slice(-2);
    mes=('0'+mes).slice(-2)

    let timeString= f.toLocaleTimeString();
    $tiempo.innerHTML=timeString;

    let semana=['DOMINGO','LUNES','MARTES','MIERCOLES','JUEVES','VIERNES','SABADO'];
    let showSemana= (semana[diaSemana])
    $fecha.innerHTML = `${showSemana} ${dia}-${mes}-${anio}`
}
setInterval(() =>{
    Relojdigital()
},1000);
	
	
	</script>
</html>