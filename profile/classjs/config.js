window.document.addEventListener('DOMContentLoaded', function(){
    setInterval(function(){
        window.document.getElementById('condig-display-perfil').style.display = "block"
        window.document.getElementById('config-display').style.display = "none"
    },2500)
})

function eventoVerificar(){
    let nome = window.document.getElementById('nome').value
    let telefone = window.document.getElementById('telefone').value
    let sobre = window.document.getElementById('sobre').value
    let file = window.document.getElementById('arquivo').value

    const regEx_Telefone = /^\([0-9]{2}\) \+[0-9]{2} [0-9]{5}\-[0-9]{4}$/

    if(!(regEx_Telefone.test(telefone) == true && nome.length >= 3 && sobre != "" && file != "")){
        window.document.getElementById('config-carregamento').style.display = "block"
        window.document.getElementById('config-botao-div').style.display = "none"
        window.document.getElementById('estilo-especifico').style.display = "none"
        window.document.getElementById('config-botao-div2').style.display = "none"
        setInterval(function(){
            window.document.getElementById('config-carregamento').style.display = "none"
            window.document.getElementById('display-block-botao').style.display = "block"
        }, 2000)
        
        window.document.getElementById('evento-enviar').style.display = "block"
        window.document.getElementById('evento-cancelar').style.display = "block"

        document.querySelectorAll('.config-input').forEach(function(elementos){
            elementos.readOnly = true
        })

        window.document.getElementById('estilo-mensagem-erro').style.display = "none"

    }else{
        window.document.getElementById('estilo-mensagem-erro').style.display = "block"
    }
}

function mudarPerfil(){
    window.document.getElementById('botao-mudar-perfil').style.display = "none"
    window.document.getElementById('config-carregamento1').style.display = "block"
    setInterval(function(){
        window.document.getElementById('estilo-perfil').style.display = "none"
        window.document.getElementById('config-display-form').style.display = "block"
    },2000)
}

function eventoVoltar(){
    window.location = "../classphp/index.html";
}

function eventoCancelar(){
    window.document.getElementById('config-botao-div').style.display = "block"
    window.document.getElementById('config-botao-div2').style.display = "block"
    window.document.getElementById('estilo-especifico').style.display = "block"

    window.document.getElementById('evento-enviar').style.display = "none"
    window.document.getElementById('evento-cancelar').style.display = "none"

    document.querySelectorAll('.config-input').forEach(function(elementos){
        elementos.readOnly = false
    })

}