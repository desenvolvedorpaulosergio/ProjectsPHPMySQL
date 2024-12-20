function tamanhoBody(){
    if(window.innerWidth <= 1000){
        document.getElementById('display-container-mensagem').style.display = 'block'
        document.getElementById('config-display-form').style.display = 'none'
    }else{
        document.getElementById('display-container-mensagem').style.display = 'none'
        document.getElementById('config-display-form').style.display = 'block'
    }

    if(window.innerHeight <= 618){
        document.getElementById('display-container-mensagem').style.display = 'block'
        document.getElementById('config-display-form').style.display = 'none'
    }else{
        document.getElementById('display-container-mensagem').style.display = 'none'
        document.getElementById('config-display-form').style.display = 'block'
    }

}