<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memorama</title>

    <link rel="stylesheet" href="css/style.css">

    <style>
		body{
			background-color: white;
		}
		.navegacion{
			width: 1000px;
			margin: 30px auto;
			background-color: honeydew;	
		}
		.navegacion ul {
			list-style: none;
			text-align: center;
		}
		.menu>li {
			display: inline-block;
		}
		.menu>li>a{
			display: block;
			padding: 15px 20px;
			color: red;
			font-family: 'Georgia';
			text-decoration: none;
		}
		.menu li a:hover{
			color: #bdb76b;
			transition: all .3s;
		}
		.submenu{
			position: absolute;
			background: green;
			width: auto;
			display: none;
		}
		.submenu li a{
			display: block;
			padding: 15px;
			color: purple;
			font-family: 'Georgia';
			text-decoration: none;
		}
		.menu li:hover .submenu{
			display: block; 	
		}
		.submenu li a:hover{
			font-size: large;
		}
		.encabezado{
			background-color: red;
			height: 100px;
			width: 100%;
			text-align: center;
			color: white;
		}
		* {
		margin: 0;
		padding: 0%;
		-webkit-animation-sizing: border-box;	
		-moz-box-sizing: border-box;
		box-sizing: border-box;
		}
		.inicio{
			background-color: blue;
			float: right;
			height:800px;
			width: 45%;
			text-align: center;
			color: white;
			border-radius: 2em;
			size: 20px;
		}
	</style>
</head>
<body>
    <div class="encabezado">
        <h2>Cursos de Circuitos Electricos</h2>
    </div>
    <div class="Lista">
            <ul class="menu">
                <li>
                    <a href="">Primer Parcial</a>
                    <ul class="submenu">
                        <li><a href=""> 1.1 Unidades eléctricas</a></li>
                        <li><a href=""> 1.1.1 Voltaje</a></li>
                        <li><a href=""> 1.1.2 Corriente</a></li>
                        <li><a href=""> 1.1.3 Potencia eléctrica</a></li>
                        <li><a href=""> 1.2 Ley de Ohm</a></li>
                        <li><a href=""> 1.2.1 Resistencia</a></li>
                        <li><a href=""> 1.2.2 Tipo de resistencia</a></li>
                        <li><a href=""> 1.2.3 Codigo de colores</a></li>
                        <li><a href=""> 1.3 Elementos activos de circuitos eléctricos</a></li>
                        <li><a href=""> 1.3.1 Fuentes de voltaje independientes</a></li>
                        <li><a href=""> 1.4 Medición de variables eléctricas en DC</a></li>
                        <li><a href=""> 1.4.1 Multímetro</a></li>
                        <li><a href=""> 1.4.2 Medición de voltaje</a></li>
                        <li><a href=""> 1.4.3 Medición de corriente</a></li>
                        <li><a href=""> 1.4.4 Medición de resistencia</a></li>
                        <li><a href=""> 1.5 Análisis de circuitos den CD mediante software de simulación de circuitos eléctricos</a></li>
                        <li><a href=""> 1.6 Ley de Kirchhoff</a></li>
                        <li><a href=""> 1.6.1 Nodo</a></li>
                        <li><a href=""> 1.6.2 Malla</a></li>
                        <li><a href=""> 1.6.3 Elementos en serie</a></li>
                        <li><a href=""> 1.6.4 Elementos en paralelo</a></li>
                        <li><a href=""> 1.6.5 Ley de Kirchhoff de corriente</a></li>
                        <li><a href=""> 1.6.6 Ley de Kirchhoff de voltaje</a></li>
                    </ul>
                </li>
                <li>
                    <a href="">Segundo Parcial</a>
                    <ul class="submenu">
                        <li><a href=""> 2.2 Divisor de corriente</a></li>
                        <li><a href=""> 2.3 Análisis de mallas</a></li>
                        <li><a href=""> 2.3.1 Análisis de mallas con fuentes de voltaje independientes</a></li>
                        <li><a href=""> 2.3.2 Análisis de mallas con fuentes de voltaje y de corriente independientes</a></li>
                        <li><a href=""> 2.4 Análisis de nodos</a></li>
                        <li><a href=""> 2.4.1 Análisis de nodos con fuentes de voltaje independientes</a></li>
                        <li><a href=""> 2.4.2 Análisis de nodos con fuentes de voltaje y de corriente independientes</a></li>
                        <li><a href=""> 2.5 Teoremas de circuitos</a></li>
                        <li><a href=""> 2.5.1 Teorema de superposición</a></li>
                        <li><a href=""> 2.5.2 Teorema del intercambio de Fuentes</a></li>
                        <li><a href=""> 2.5.3 Teorema de Thevenin</a></li>
                        <li><a href=""> 2.5.4 Teorema de Norton</a></li>
                        <li><a href=""> 2.5.5 Teorema de máxima transferencia de potencia</a></li>
                    </ul>
                <li>	
                    <a href="">Tercer Parcial</a>
                    <ul class="submenu">
                        <li><a href=""> 3.1 Funciones eléctricas</a></li>
                        <li><a href=""> 3.1.2 Cuadrada</a></li>
                        <li><a href=""> 3.1.3 Triangular</a></li>
                        <li><a href=""> 3.1.4 Senoidal(amplitud, freciencia, periodo, ángulo, valor medio y valor eficaz)</a></li>
                        <li><a href=""> 3.2 Equipo electrónico para señales alternas</a></li>
                        <li><a href=""> 3.2.1 Osciloscopio</a></li>
                        <li><a href=""> 3.2.2 Generador de funciones</a></li>
                        <li><a href=""> 3.3 Elementos pasivos de circuitos eléctricos variantes en el tiempo</a></li>
                        <li><a href=""> 3.3.1 Capacitor</a></li>
                        <li><a href=""> 3.3.2 Tipos de capacitores</a></li>
                        <li><a href=""> 3.3.3 Relaciones integro-diferenciales de voltaje y corriente del capacitor</a></li>
                        <li><a href=""> 3.3.4 Inductor</a></li>
                        <li><a href=""> 3.3.5 Relaciones integro-diferenciales de voltaje y corriente del inductor</a></li>
                        <li><a href=""> 3.4 Dominio de la frecuencia(s)</a></li>
                        <li><a href=""> 3.4.1 Transformada de Laplace</a></li>
                        <li><a href=""> 3.4.2 Transformada de Laplace y funciones simple en el tiempo</a></li>
                        <li><a href=""> 3.4.3 Impedancia y admitancia Z(s) y Y(s)</a></li>
                        <li><a href=""> 3.4.4 Reactancia y susceptancia capacitiva</a></li>
                        <li><a href=""> 3.4.5 Reactancia y susceptancia inductiva</a></li>
                        <li><a href=""> 3.4.6 Impedancia y admitancia en serie</a></li>
                        <li><a href=""> 3.4.7 Impedancia y admitancia en paralelo</a></li>
                        <li><a href=""> 3.5 Análisis de circuitos en el dominio de s</a></li>
                        <li><a href=""> 3.5.1 Leyes de Kirchhoff</a></li>
                        <li><a href=""> 3.5.2 Mallas</a></li>
                        <li><a href=""> 3.5.3 Nodos</a></li>
                        <li><a href=""> 3.5.4 Polos, ceros y funciones de transferencia</a></li>
                    </ul>
                </li>
            <li>
                <a href="rompecabezas.php">Rompecabezas</a>
            </li>
            <li>
                <a href="memorama.php">Memorama</a>
        </ul>
    </div>

    <main>
        <section class="section1">
            <table>
                <tr>
                    <td><button id="0" onclick="destapar(0)"></button></td>
                    <td><button id="1" onclick="destapar(1)"></button></td>
                    <td><button id="2" onclick="destapar(2)"></button></td>
                    <td><button id="3" onclick="destapar(3)"></button></td>
                </tr>
                <tr>
                    <td><button id="4" onclick="destapar(4)"></button></td>
                    <td><button id="5" onclick="destapar(5)"></button></td>
                    <td><button id="6" onclick="destapar(6)"></button></td>
                    <td><button id="7" onclick="destapar(7)"></button></td>
                </tr>
                <tr>
                    <td><button id="8" onclick="destapar(8)"></button></td>
                    <td><button id="9" onclick="destapar(9)"></button></td>
                    <td><button id="10" onclick="destapar(10)"></button></td>
                    <td><button id="11" onclick="destapar(11)"></button></td>
                </tr>
                <tr>
                    <td><button id="12" onclick="destapar(12)"></button></td>
                    <td><button id="13" onclick="destapar(13)"></button></td>
                    <td><button id="14" onclick="destapar(14)"></button></td>
                    <td><button id="15" onclick="destapar(15)"></button></td>
                </tr>
            </table>
        </section>
        <section class="section2">
            <h2 id="acirtos" class="statistics">Aciertos: 0</h2>
            <h2 id="restante" class="statistics">Tiempo: 30 segundos</h2>
            <h2 id="movimientos" class="statistics">Movimientos: 0</h2>
        </section>
    </main>
    <script src="js/script.js"></script>
</body>
</html>