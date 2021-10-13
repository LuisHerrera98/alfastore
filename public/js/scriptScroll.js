let menu = document.querySelector('.menu');
let mostrar = document.querySelector('.botonMostrar');
let desaparecer = document.querySelector('.botonDesaparecer');
let desaparecer1 = document.querySelector('.botonDesaparecer1');
let option1 = document.querySelector('.option1');
let desaparecer2 = document.querySelector('.botonDesaparecer2');
let option2 = document.querySelector('.option2');
let desaparecer3 = document.querySelector('.botonDesaparecer3');
let option3 = document.querySelector('.option3');
//let desaparecer3 = document.querySelector('.botonDesaparecer3');
let desaparecer4 = document.querySelector('.botonDesaparecer4');
let option4 = document.querySelector('.option4');

let desaparecer5 = document.querySelector('.botonDesaparecer5');
let option5 = document.querySelector('.option5');

let desaparecer6 = document.querySelector('.botonDesaparecer6');
let option6 = document.querySelector('.option6');

mostrar.addEventListener('click',function(){
        
    menu.classList.remove("desaparecer")
    menu.classList.add("aparecer")
    
})
desaparecer.addEventListener('click',function(){
    option1.style.color="#f5f5f5";
    option2.style.color="#f5f5f5";
    option3.style.color="#f5f5f5";
    option4.style.color="#f5f5f5";
    option5.style.color="#f5f5f5";
    option6.style.color="#f5f5f5";

    menu.classList.remove("aparecer")
    menu.classList.add("desaparecer")
   
    
})
desaparecer1.addEventListener('click',function(){
    
    option1.style.color="#cefe1a";
    option2.style.color="#f5f5f5";
    option3.style.color="#f5f5f5";
    option4.style.color="#f5f5f5";
    option5.style.color="#f5f5f5";
    option6.style.color="#f5f5f5";

    menu.classList.remove("aparecer")
    menu.classList.add("desaparecer")
   
    
})

desaparecer2.addEventListener('click',function(){

    option1.style.color="#f5f5f5";
    option2.style.color="#cefe1a";
    option3.style.color="#f5f5f5";
    option4.style.color="#f5f5f5";
    option5.style.color="#f5f5f5";
    option6.style.color="#f5f5f5";
    menu.classList.remove("aparecer")
    menu.classList.add("desaparecer")
   
    
})

desaparecer3.addEventListener('click',function(){

    option1.style.color="#f5f5f5";
    option2.style.color="#f5f5f5";
    option3.style.color="#cefe1a";
    option4.style.color="#f5f5f5";
    option5.style.color="#f5f5f5";
    option6.style.color="#f5f5f5";
    menu.classList.remove("aparecer")
    menu.classList.add("desaparecer")
   
    
})

desaparecer4.addEventListener('click',function(){
    option1.style.color="#f5f5f5";
    option2.style.color="#f5f5f5";
    option3.style.color="#f5f5f5";
    option4.style.color="#cefe1a";
    option5.style.color="#f5f5f5";
    option6.style.color="#f5f5f5";

    menu.classList.remove("aparecer")
    menu.classList.add("desaparecer")
   
    
})

desaparecer5.addEventListener('click',function(){
    option1.style.color="#f5f5f5";
    option2.style.color="#f5f5f5";
    option3.style.color="#f5f5f5";
    option4.style.color="#f5f5f5";
    option5.style.color="#cefe1a";
    option6.style.color="#f5f5f5";

    menu.classList.remove("aparecer")
    menu.classList.add("desaparecer")
   
    
})

desaparecer6.addEventListener('click',function(){
    option1.style.color="#f5f5f5";
    option2.style.color="#f5f5f5";
    option3.style.color="#f5f5f5";
    option4.style.color="#f5f5f5";
    option5.style.color="#f5f5f5";
    option6.style.color="#cefe1a";

    menu.classList.remove("aparecer")
    menu.classList.add("desaparecer")
   
    
})
/*
desaparecer3.addEventListener('click',function(){
   

    menu.classList.remove("aparecer")
    menu.classList.add("desaparecer")
   
    
})
desaparecer4.addEventListener('click',function(){
   

    menu.classList.remove("aparecer")
    menu.classList.add("desaparecer")
   
    
})
desaparecer5.addEventListener('click',function(){
   

    menu.classList.remove("aparecer")
    menu.classList.add("desaparecer")
   
    
let animado = document.querySelectorAll(".caja");

function mostrarScroll(){
    let scrollTop = document.documentElement.scrollTop;
    for(var i=0; i<animado.length; i++ ){
        let alturaAnimado = animado[i].offsetTop;
        if(alturaAnimado - 650 < scrollTop){
            animado[i].style.opacity = 1;
            animado[i].classList.add("mostrar")
        }
    }
}

window.addEventListener('scroll',mostrarScroll);
})
*/



