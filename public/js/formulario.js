let caja = document.querySelector('.cajafalsa');
let formulario = document.querySelector('.formulario');
let cruz = document.querySelector('.cruz');
let boton = document.querySelector('.boton1');
let xD = document.querySelector('.xD');
let xD2 = document.querySelector('.xD2');

caja.addEventListener('click',function(){

    formulario.classList.remove("desaparecer");
    formulario.classList.add("aparecer");
    boton.style.backgroundColor="gray";

})
cruz.addEventListener('click',function(){
    formulario.classList.remove("aparecer");
    formulario.classList.add("desaparecer");
    boton.style.backgroundColor="black";
})



