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

function eventoErro2(){
    let cod = document.getElementById('cod-produto').value
    if(cod <= 0){
        window.document.getElementById('cod-produto').style.borderColor = 'red'
        window.document.getElementById('cod-produto').style.color = 'red'
    }else{
        window.document.getElementById('cod-produto').style.borderColor = 'black'
        window.document.getElementById('cod-produto').style.color = 'black'
    }
}

function eventoPreco(){
    let precoCusto = document.getElementById('preco-custo').value
    let pecoVenda = document.getElementById('preco-venda').value
    
    if(precoCusto >= pecoVenda || precoCusto <= 0 || pecoVenda <= 0){
        window.document.getElementById('preco-custo').style.borderColor = 'red'
        window.document.getElementById('preco-custo').style.color = 'red'

        window.document.getElementById('preco-venda').style.borderColor = 'red'
        window.document.getElementById('preco-venda').style.color = 'red'
    }else{
        window.document.getElementById('preco-custo').style.borderColor = 'black'
        window.document.getElementById('preco-custo').style.color = 'black'

        window.document.getElementById('preco-venda').style.borderColor = 'black'
        window.document.getElementById('preco-venda').style.color = 'black'
    }
}

function eventoPreco3(){
    let precoCusto3 = document.getElementById('preco-custo3').value
    let pecoVenda3 = document.getElementById('preco-venda3').value

    if(precoCusto3 >= pecoVenda3 || precoCusto3 <= 0 || pecoVenda3 <= 0){
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

function eventoQuantidade(){
    let quantidade = window.document.getElementById('quantidade-produto').value
    if(quantidade <= 0){
        window.document.getElementById('quantidade-produto').style.color = 'red'
        window.document.getElementById('quantidade-produto').style.borderColor = 'red'
    }else{
        window.document.getElementById('quantidade-produto').style.color = 'black'
        window.document.getElementById('quantidade-produto').style.borderColor = 'black'
    }
}

function eventoQuantidade2(){
    let quantidade3 = window.document.getElementById('quantidade-produto3').value
    if(quantidade3 <= 0){
        window.document.getElementById('quantidade-produto3').style.color = 'red'
        window.document.getElementById('quantidade-produto3').style.borderColor = 'red'
    }else{
        window.document.getElementById('quantidade-produto3').style.color = 'black'
        window.document.getElementById('quantidade-produto3').style.borderColor = 'black'
    }
}

function eventoCaractere(){
    let nomeProduto = window.document.getElementById('nome-produto').value
    if(nomeProduto.length < 4){
        window.document.getElementById('nome-produto').style.color = 'red'
        window.document.getElementById('nome-produto').style.borderColor = 'red'
    }else{
        window.document.getElementById('nome-produto').style.color = 'black'
        window.document.getElementById('nome-produto').style.borderColor = 'black'
    }
}

function eventoCaractere2(){
    let categoria = window.document.getElementById('categoria-produto').value
    if(categoria.length < 4){
        window.document.getElementById('categoria-produto').style.color = 'red'
        window.document.getElementById('categoria-produto').style.borderColor = 'red'
    }else{
        window.document.getElementById('categoria-produto').style.color = 'black'
        window.document.getElementById('categoria-produto').style.borderColor = 'black'
    }
}

function eventoRegEx(){
    let categoria = window.document.getElementById('validade-produto').value
    if(/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/.test(categoria)){
        window.document.getElementById('validade-produto').style.color = 'black'
        window.document.getElementById('validade-produto').style.borderColor = 'black'
    }else{
        window.document.getElementById('validade-produto').style.color = 'red'
        window.document.getElementById('validade-produto').style.borderColor = 'red'
    }
}

function eventoRegEx2(){
    let categoria = window.document.getElementById('validade-produto3').value
    if(/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/.test(categoria)){
        window.document.getElementById('validade-produto3').style.color = 'black'
        window.document.getElementById('validade-produto3').style.borderColor = 'black'
    }else{
        window.document.getElementById('validade-produto3').style.color = 'red'
        window.document.getElementById('validade-produto3').style.borderColor = 'red'
    }
}

window.document.addEventListener('DOMContentLoaded', function(){
    document.querySelectorAll('.config-display-elementos2').forEach(function(elementos){
        elementos.style.display = 'none'
    })
})

function eventoVerificar(){
    let nomeProduto = document.getElementById('nome-produto').value
    let quantidade = document.getElementById('quantidade-produto').value
    let categoria = document.getElementById('categoria-produto').value
    let precoCusto = document.getElementById('preco-custo').value
    let precoVenda = document.getElementById('preco-venda').value
    let validade = document.getElementById('validade-produto').value
    let iconProduto = document.getElementById('img-produto').value
    let observacao = document.getElementById('obs-produto').value

    if(!(nomeProduto.length > 3 && quantidade > 0 && categoria.length > 3 && precoCusto > 0 && precoVenda > 0 
    && precoVenda > precoCusto && /^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/.test(validade) && iconProduto != "" && observacao != "")){
        document.querySelectorAll('.config-display-elementos1').forEach(function(elementos){
            elementos.style.display = 'none'
        })

        document.querySelectorAll('.config-display-elementos2').forEach(function(elementos){
            elementos.style.display = 'block'
        })

        document.querySelectorAll('.config-readonly-padrao').forEach(function(elementos){
            elementos.readOnly = true
        })
    }else{
        window.document.getElementById('config-display-mensagem-erro').style.display = 'block'
    }
}

function eventoCancelar(){
    document.querySelectorAll('.config-display-elementos1').forEach(function(elementos){
        elementos.style.display = 'block'
    })

    document.querySelectorAll('.config-display-elementos2').forEach(function(elementos){
        elementos.style.display = 'none'
    })

    document.querySelectorAll('.config-readonly-padrao').forEach(function(elementos){
        elementos.readOnly = false
    })
}