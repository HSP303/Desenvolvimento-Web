function escrevendoLetra(){
    function ativaletra(elemento){
        const arrTexto = elemento.innerHTML.split('');
        elemento.innerHTML = '';
        arrTexto.forEach((letra, i)=>{
            setTimeout(()=>{
                elemento.innerHTML += letra;
            }, 95 * i)
        });
    }
    
    const titulo = document.querySelector('.digitando');
    ativaletra(titulo);

    const ativaMenu = document.querySelector('.fa-bars');

console.log(ativaMenu)

ativaMenu.addEventListener('click', ()=>{
    ativaMenu.classList.toggle('fa-x')
});
}


escrevendoLetra();



