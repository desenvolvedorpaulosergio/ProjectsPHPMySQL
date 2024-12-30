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
    window.document.getElementById('config-display-excluir').style.display = "none"
    window.document.getElementById('config-display-alterar').style.display = "none"


    window.document.getElementById('estilo-underline-cadastrar').style.textDecoration = 'underline'
    window.document.getElementById('estilo-underline-excluir').style.textDecoration = 'none'
    window.document.getElementById('estilo-underline-alterar').style.textDecoration = 'none'
}

function eventoJanelaExcluir(){
    window.document.getElementById('config-display-cadastro').style.display = "none"
    window.document.getElementById('config-display-excluir').style.display = "block"
    window.document.getElementById('config-display-alterar').style.display = "none"

    window.document.getElementById('estilo-underline-cadastrar').style.textDecoration = 'none'
    window.document.getElementById('estilo-underline-excluir').style.textDecoration = 'underline'
    window.document.getElementById('estilo-underline-alterar').style.textDecoration = 'none'
}

function eventoJanelaAlterar(){
    window.document.getElementById('config-display-cadastro').style.display = "none"
    window.document.getElementById('config-display-excluir').style.display = "none"
    window.document.getElementById('config-display-alterar').style.display = "block"

    window.document.getElementById('estilo-underline-cadastrar').style.textDecoration = 'none'
    window.document.getElementById('estilo-underline-excluir').style.textDecoration = 'none'
    window.document.getElementById('estilo-underline-alterar').style.textDecoration = 'underline'
}

function eventoErro(){
    let cod = document.getElementById('cod-produto3').value
    if(cod <= 0){
        window.document.getElementById('cod-produto3').style.borderColor = 'red'
        window.document.getElementById('cod-produto3').style.color = 'red'
    }else{
        window.document.getElementById('cod-produto3').style.borderColor = 'black'
        window.document.getElementById('cod-produto3').style.color = 'black'
    }
}

function eventoPreco(){
    let precoCusto = document.getElementById('preco-custo3').value
    let pecoVenda = document.getElementById('preco-venda3').value
    if(precoCusto >= pecoVenda || precoCusto <= 0 || pecoVenda <= 0){
        window.document.getElementById('preco-custo3').style.borderColor = 'red'
        window.document.getElementById('preco-custo3').style.color = 'red'

        window.document.getElementById('preco-venda3').style.borderColor = 'red'
        window.document.getElementById('preco-venda3').style.color = 'red'
    }else{
        window.document.getElementById('preco-custo3').style.borderColor = 'black'
        window.document.getElementById('preco-custo3').style.color = 'black'

        window.document.getElementById('preco-venda3').style.borderColor = 'black'
        window.document.getElementById('preco-venda3').style.color = 'black'
    }
}