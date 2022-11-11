let lista = document.querySelectorAll('.lista');
            for (let i = 0; i<lista.length; i++){
            lista[i].onclick = function(){
            let j = 0;
            while(j < lista.length){
                lista[j++].className = 'lista';
            }
            lista[i].className = 'lista ativa';
        }
    }

let menuAlternar = document.querySelector('.alternar');
let menu = document.querySelector('.menu');
menuAlternar.onclick = function(){
    menuAlternar.classList.toggle('ativa');
    menu.classList.toggle('ativa');
}