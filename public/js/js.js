console.log ("hola");

const boton = document.getElementById("boton1");
var th = document.getElementById("escribir");

function confirmacion (){
    th.innerHTML="Busqueda exitosa";
}

boton.addEventListener('click', confirmacion);
