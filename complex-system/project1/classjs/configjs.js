function eventoClose(){
    window.document.getElementById('config-display-mensagem-erro').style.display = "none"
    window.document.getElementById('config-container-display').style.display = "block"
}

function eventoCamera(){
    window.document.getElementById('img-produto').click()
}

function eventoFechamento(){
    window.document.querySelectorAll('.config-display-block-tabela').forEach(function(elementos){
        elementos.style.display = 'none'
    })
}

function eventoVisualizar(){
    window.document.querySelectorAll('.config-display-block-tabela').forEach(function(elementos){
        elementos.style.display = 'block'
    })
}

window.document.addEventListener('DOMContentLoaded', function(){
    document.getElementById('estilo-underline-cadastrar').style.textDecoration = 'underline'
})

function eventoJanelaCadastro(){
    window.document.getElementById('config-display-cadastro').style.display = "block"
    // window.document.getElementById('config-display-mensagem-erro').style.display = "none"
    // window.document.getElementById('config-display-mensagem-erro').style.display = "none"
}