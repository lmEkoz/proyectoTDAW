// Inicializacion de variables
let tarjetasDestapadas = 0;
let tarjeta1 = null;
let tarjeta2 = null;
let primerResultado = null;
let segundoResultado = null;
let aciertos = 0;

let mostrar_movimientos = document.getElementById("movimientos");
let mostrar_aciertos = document.getElementById("aciertos");

// Geracion de imagenes aleatorias
let imageList = ["img1.jpg", "img1.jpg", "img2.jpg", "img2.jpg", "img3.jpg", "img3.jpg", "img4.jpg", "img4.jpg", 
                "img5.jpg", "img5.jpg", "img6.jpg", "img6.jpg", "img7.jpg", "img7.jpg", "img8.jpg", "img8.jpg"];
imageList = imageList.sort(() => {return Math.random() - 0.5});
console.log(imageList);

// Funciones
function destapar(id){
    tarjetasDestapadas++;    
    console.log(tarjetasDestapadas);
    if(tarjetasDestapadas == 1){
        // mostrar imagen
        tarjeta1 = document.getElementById(id);
        //tarjeta1.src = "img/" + imageList[id];
        primerResultado = imageList[id];
        tarjeta1.innerHTML = primerResultado;

        tarjeta1.disabled = true;
    }else if(tarjetasDestapadas == 2){
        // mostrar imagen
        tarjeta2 = document.getElementById(id);
        //tarjeta2.src = "img/" + imageList[id];
        segundoResultado = imageList[id];
        tarjeta2.innerHTML = segundoResultado;

        tarjeta2.disabled = true;

        movimientos++;
        mostrar_movimientos.innerHTML = `Movimientos: ${movimientos}`;

        if(primerResultado == segundoResultado){
            tarjetasDestapadas = 0;

            aciertos++;
            mostrar_aciertos.innerHTML = `Aciertos: ${aciertos}`;
        }
    }
}