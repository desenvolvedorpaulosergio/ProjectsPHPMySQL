function tamanhoBody(){
    if(window.innerHeight <= 618){
        document.getElementById('display-container-mensagem').style.display = 'block'
        document.getElementById('config-display-form').style.display = 'none'
    }else{
        document.getElementById('display-container-mensagem').style.display = 'none'
        document.getElementById('config-display-form').style.display = 'block'
    }
}

function tamanhoBody(){
    if(window.innerWidth <= 1000){
        document.getElementById('config-display-form').style.display = 'none'
        document.getElementById('display-container-mensagem').style.display = 'block'
    }else{
        document.getElementById('config-display-form').style.display = 'block'
        document.getElementById('display-container-mensagem').style.display = 'none'
    }
}

function eventoVerificar(){
    let produto = document.getElementById('nome-produto').value
    let quantidade = document.getElementById('quantidade').value
    let categoria = document.getElementById('categoria').value
    let precoCusto = document.getElementById('preco-custo').value
    let precoVenda = document.getElementById('preco-venda').value
    let validade = document.getElementById('validade').value
    let icon = document.getElementById('input-file').value
    const data_RegEx = /^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/
    if(produto != "" && produto.length >= 3 && quantidade != "" && categoria != "" && precoCusto != "" && precoVenda != "" && data_RegEx.test(validade) == true && icon != "" && precoVenda > precoCusto){
        document.getElementById('config-comprimento3').style.display = 'none'

        document.querySelectorAll('.elemento-botau').forEach(function(elementos){
            elementos.style.display = 'none'
        })

        document.querySelectorAll('display-block-none').forEach(function(elementos){
            elementos.style.display = 'block'
        })
        
        document.querySelectorAll('.evento-input').forEach(function(elementos){
            elementos.readOnly = true
        })

    }else{
        window.document.querySelectorAll('.config-display-modal-erro').forEach(function(elementos){
            elementos.style.display = 'block'
            window.document.getElementsByTagName('body')[0].style.overflowY = 'hidden'
        })
        document.getElementById('config-display').style.display = 'none'
    }
}

function eventoCancelar(){
    document.querySelectorAll('.evento-input').forEach(function(elementos){
        elementos.readOnly = false
    })

    window.document.getElementById('config-comprimento3').style.display = 'block'

    document.querySelectorAll('display-block-none').forEach(function(elementos){
        elementos.style.display = 'none'
    })

    document.querySelectorAll('.elemento-botau').forEach(function(elementos){
        elementos.style.display = 'block'
    })

}

function eventoClose(){
    window.document.querySelectorAll('.config-display-modal-erro').forEach(function(elementos){
        elementos.style.display = 'none'
        window.document.getElementsByTagName('body')[0].style.overflowY = 'auto'
    })
    document.getElementById('config-display').style.display = 'block'
}

function eventoFechar(){
    window.document.querySelectorAll('.display-container-tabela').forEach(function(elementos){
        elementos.style.display = 'none'
    })
}

function visualizarTabela(){
    window.document.querySelectorAll('.display-container-tabela').forEach(function(elementos){
        elementos.style.display = 'block'
    })
}

window.document.addEventListener('DOMContentLoaded', function(){
})

function eventoCadastrar(){
    window.document.getElementById('botao-cadastrar').style.textDecoration = 'underline'
    window.location = '../classphp/produtos.php'
}

function eventoExcluir(){
    window.document.getElementById('formulario-insert').style.display = 'none'
    window.document.getElementById('formulario-excluir').style.display = 'block'
    window.document.getElementById('config-display-formulario-atualizar').style.display = 'none'

    window.document.getElementById('botao-cadastrar').style.textDecoration = 'none'
    window.document.getElementById('botao-excluir').style.textDecoration = 'underline'
    window.document.getElementById('botao-alterar').style.textDecoration = 'none'
}

function eventoAlterar(){
    window.document.getElementById('formulario-insert').style.display = 'none'
    window.document.getElementById('formulario-excluir').style.display = 'none'
    window.document.getElementById('config-display-formulario-atualizar').style.display = 'block'

    window.document.getElementById('botao-cadastrar').style.textDecoration = 'none'
    window.document.getElementById('botao-excluir').style.textDecoration = 'none'
    window.document.getElementById('botao-alterar').style.textDecoration = 'underline'

}