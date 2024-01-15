<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rompecabezas</title>
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
    <canvas id="canvas"></canvas>
    <br />
    <label for="difficulty">Difficulty</label>
    <input type="range" min="2" max="16" value="4" id="difficulty" />

    <script>
        const PUZZLE_HOVER_TINT = "#009900";
        const img = new Image();
        const canvas = document.querySelector("#canvas");
        const stage = canvas.getContext("2d");
        let difficulty = 4;
        let pieces;
        let puzzleWidth;
        let puzzleHeight;
        let pieceWidth;
        let pieceHeight;
        let currentPiece;
        let currentDropPiece;
        let mouse;
        img.addEventListener("load", onImage, false);
        img.src = "img/img1.jpg";

        function initPuzzle() {
        pieces = [];
        mouse = {
            x: 0,
            y: 0
        };
        currentPiece = null;
        currentDropPiece = null;
        stage.drawImage(
            img,
            0,
            0,
            puzzleWidth,
            puzzleHeight,
            0,
            0,
            puzzleWidth,
            puzzleHeight
        );
        createTitle("Click to Start Puzzle");
        buildPieces();
        }

        function setCanvas() {
        canvas.width = puzzleWidth;
        canvas.height = puzzleHeight;
        canvas.style.border = "1px solid black";
        }

        function onImage() {
        pieceWidth = Math.floor(img.width / difficulty);
        pieceHeight = Math.floor(img.height / difficulty);
        puzzleWidth = pieceWidth * difficulty;
        puzzleHeight = pieceHeight * difficulty;
        setCanvas();
        initPuzzle();
        }

        function createTitle(msg) {
        stage.fillStyle = "#000000";
        stage.globalAlpha = 0.4;
        stage.fillRect(100, puzzleHeight - 40, puzzleWidth - 200, 40);
        stage.fillStyle = "#FFFFFF";
        stage.globalAlpha = 1;
        stage.textAlign = "center";
        stage.textBaseline = "middle";
        stage.font = "20px Arial";
        stage.fillText(msg, puzzleWidth / 2, puzzleHeight - 20);
        }

        function buildPieces() {
        let i;
        let piece;
        let xPos = 0;
        let yPos = 0;
        for (i = 0; i < difficulty * difficulty; i++) {
            piece = {};
            piece.sx = xPos;
            piece.sy = yPos;
            pieces.push(piece);
            xPos += pieceWidth;
            if (xPos >= puzzleWidth) {
            xPos = 0;
            yPos += pieceHeight;
            }
        }
        document.onpointerdown = shufflePuzzle;
        }

        function shufflePuzzle() {
        pieces = shuffleArray(pieces);
        stage.clearRect(0, 0, puzzleWidth, puzzleHeight);
        let xPos = 0;
        let yPos = 0;
        for (const piece of pieces) {
            piece.xPos = xPos;
            piece.yPos = yPos;
            stage.drawImage(
            img,
            piece.sx,
            piece.sy,
            pieceWidth,
            pieceHeight,
            xPos,
            yPos,
            pieceWidth,
            pieceHeight
            );
            stage.strokeRect(xPos, yPos, pieceWidth, pieceHeight);
            xPos += pieceWidth;
            if (xPos >= puzzleWidth) {
            xPos = 0;
            yPos += pieceHeight;
            }
        }
        document.onpointerdown = onPuzzleClick;
        }

        function checkPieceClicked() {
        for (const piece of pieces) {
            if (
            mouse.x < piece.xPos ||
            mouse.x > piece.xPos + pieceWidth ||
            mouse.y < piece.yPos ||
            mouse.y > piece.yPos + pieceHeight
            ) {
            //PIECE NOT HIT
            } else {
            return piece;
            }
        }
        return null;
        }

        function updatePuzzle(e) {
        currentDropPiece = null;
        if (e.layerX || e.layerX == 0) {
            mouse.x = e.layerX - canvas.offsetLeft;
            mouse.y = e.layerY - canvas.offsetTop;
        } else if (e.offsetX || e.offsetX == 0) {
            mouse.x = e.offsetX - canvas.offsetLeft;
            mouse.y = e.offsetY - canvas.offsetTop;
        }
        stage.clearRect(0, 0, puzzleWidth, puzzleHeight);
        for (const piece of pieces) {
            if (piece == currentPiece) {
            continue;
            }
            stage.drawImage(
            img,
            piece.sx,
            piece.sy,
            pieceWidth,
            pieceHeight,
            piece.xPos,
            piece.yPos,
            pieceWidth,
            pieceHeight
            );
            stage.strokeRect(piece.xPos, piece.yPos, pieceWidth, pieceHeight);
            if (currentDropPiece == null) {
            if (
                mouse.x < piece.xPos ||
                mouse.x > piece.xPos + pieceWidth ||
                mouse.y < piece.yPos ||
                mouse.y > piece.yPos + pieceHeight
            ) {
                //NOT OVER
            } else {
                currentDropPiece = piece;
                stage.save();
                stage.globalAlpha = 0.4;
                stage.fillStyle = PUZZLE_HOVER_TINT;
                stage.fillRect(
                currentDropPiece.xPos,
                currentDropPiece.yPos,
                pieceWidth,
                pieceHeight
                );
                stage.restore();
            }
            }
        }
        stage.save();
        stage.globalAlpha = 0.6;
        stage.drawImage(
            img,
            currentPiece.sx,
            currentPiece.sy,
            pieceWidth,
            pieceHeight,
            mouse.x - pieceWidth / 2,
            mouse.y - pieceHeight / 2,
            pieceWidth,
            pieceHeight
        );
        stage.restore();
        stage.strokeRect(
            mouse.x - pieceWidth / 2,
            mouse.y - pieceHeight / 2,
            pieceWidth,
            pieceHeight
        );
        }

        function onPuzzleClick(e) {
        if (e.layerX || e.layerX === 0) {
            mouse.x = e.layerX - canvas.offsetLeft;
            mouse.y = e.layerY - canvas.offsetTop;
        } else if (e.offsetX || e.offsetX === 0) {
            mouse.x = e.offsetX - canvas.offsetLeft;
            mouse.y = e.offsetY - canvas.offsetTop;
        }
        currentPiece = checkPieceClicked();
        if (currentPiece !== null) {
            stage.clearRect(
            currentPiece.xPos,
            currentPiece.yPos,
            pieceWidth,
            pieceHeight
            );
            stage.save();
            stage.globalAlpha = 0.9;
            stage.drawImage(
            img,
            currentPiece.sx,
            currentPiece.sy,
            pieceWidth,
            pieceHeight,
            mouse.x - pieceWidth / 2,
            mouse.y - pieceHeight / 2,
            pieceWidth,
            pieceHeight
            );
            stage.restore();
            document.onpointermove = updatePuzzle;
            document.onpointerup = pieceDropped;
        }
        }

        function gameOver() {
        document.onpointerdown = null;
        document.onpointermove = null;
        document.onpointerup = null;
        initPuzzle();
        }

        function pieceDropped(e) {
        document.onpointermove = null;
        document.onpointerup = null;
        if (currentDropPiece !== null) {
            let tmp = {
            xPos: currentPiece.xPos,
            yPos: currentPiece.yPos
            };
            currentPiece.xPos = currentDropPiece.xPos;
            currentPiece.yPos = currentDropPiece.yPos;
            currentDropPiece.xPos = tmp.xPos;
            currentDropPiece.yPos = tmp.yPos;
        }
        resetPuzzleAndCheckWin();
        }

        function resetPuzzleAndCheckWin() {
        stage.clearRect(0, 0, puzzleWidth, puzzleHeight);
        let gameWin = true;
        for (piece of pieces) {
            stage.drawImage(
            img,
            piece.sx,
            piece.sy,
            pieceWidth,
            pieceHeight,
            piece.xPos,
            piece.yPos,
            pieceWidth,
            pieceHeight
            );
            stage.strokeRect(piece.xPos, piece.yPos, pieceWidth, pieceHeight);
            if (piece.xPos != piece.sx || piece.yPos != piece.sy) {
            gameWin = false;
            }
        }
        if (gameWin) {
            setTimeout(gameOver, 500);
        }
        }

        function shuffleArray(o) {
        for (
            var j, x, i = o.length;
            i;
            j = parseInt(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x
        );
        return o;
        }

        function updateDifficulty(e) {
        difficulty = e.target.value;
        pieceWidth = Math.floor(img.width / difficulty);
        pieceHeight = Math.floor(img.height / difficulty);
        puzzleWidth = pieceWidth * difficulty;
        puzzleHeight = pieceHeight * difficulty;
        gameOver();
        }
        document.querySelector("#difficulty").oninput = updateDifficulty;
    </script>
	
</body>
</html>