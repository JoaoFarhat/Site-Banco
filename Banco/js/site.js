//seleciona todos '.lista' dos documentos
let lista = document.querySelectorAll('.lista');
            //faz um laço de repetição pegando a quantidade de itens na lista
            for (let i = 0; i<lista.length; i++){
            //cria uma função de clicado
            lista[i].onclick = function(){
            //cria uma nova variavel
            let j = 0;
            /*cria um novo laço de repetição que só rodara enquanto a variavel acima for menor que o tamanho
            da variavel lista */
            while(j < lista.length){
                //deixara desativo todos os restantes que forem da classe lista
                lista[j++].className = 'lista';
            }
            //deixará ativo apenas a classe lista ativa
            lista[i].className = 'lista ativa';
        }
    }

//seleciona todas as classes alternar do documento
let menuAlternar = document.querySelector('.alternar');
//seleciona todas as classes menu do documento
let menu = document.querySelector('.menu');
//cria a função de clique no menu
menuAlternar.onclick = function(){
    //muda os menus um para o outro toda a vez que for clicado
    menuAlternar.classList.toggle('ativa');
    menu.classList.toggle('ativa');
}