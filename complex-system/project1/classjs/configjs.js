function eventoClose(){
    window.document.getElementById('config-display-mensagem-erro').style.display = "none"
    window.document.getElementById('config-container-display').style.display = "block"
}

function eventoTransação(){
    window.document.getElementById('config-display-mensagem-ok').style.display = "none"
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
    if(cod <= 0 || cod > 255){
        window.document.getElementById('cod-produto3').style.borderColor = 'red'
        window.document.getElementById('cod-produto3').style.color = 'red'
    }else{
        window.document.getElementById('cod-produto3').style.borderColor = 'black'
        window.document.getElementById('cod-produto3').style.color = 'black'
    }
}

function eventoErro2(){
    let cod = document.getElementById('cod-produto').value
    if(cod <= 0 || cod > 255){
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
    
    if(precoCusto < pecoVenda && precoCusto > 0 && pecoVenda > 0){
        window.document.getElementById('preco-custo').style.borderColor = 'black'
        window.document.getElementById('preco-custo').style.color = 'black'
        
        window.document.getElementById('preco-venda').style.borderColor = 'black'
        window.document.getElementById('preco-venda').style.color = 'black'
    }else{
        window.document.getElementById('preco-custo').style.borderColor = 'red'
        window.document.getElementById('preco-custo').style.color = 'red'

        window.document.getElementById('preco-venda').style.borderColor = 'red'
        window.document.getElementById('preco-venda').style.color = 'red'
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
    if(quantidade < 0 || quantidade > 255){
        window.document.getElementById('quantidade-produto').style.color = 'red'
        window.document.getElementById('quantidade-produto').style.borderColor = 'red'
    }else{
        window.document.getElementById('quantidade-produto').style.color = 'black'
        window.document.getElementById('quantidade-produto').style.borderColor = 'black'
    }

    if(quantidade >= 180 && quantidade <= 255){
        document.getElementById('obs-produto').value = "estoque cheio."
        document.getElementById('obs-produto').style.borderColor = "black"
        document.getElementById('obs-produto').style.color = "black"
    }else if(quantidade >= 100 && quantidade < 180){
        document.getElementById('obs-produto').value = "estoque médio."
        document.getElementById('obs-produto').style.borderColor = "black"
        document.getElementById('obs-produto').style.color = "black"
    }else if(quantidade >= 1 && quantidade < 100){
        document.getElementById('obs-produto').value = "estoque baixo."
        document.getElementById('obs-produto').style.borderColor = "black"
        document.getElementById('obs-produto').style.color = "black"
    }else if(quantidade == 0){
        document.getElementById('obs-produto').value = "estoque vazio."
            document.getElementById('obs-produto').style.borderColor = "black"
        document.getElementById('obs-produto').style.color = "black"
    }else if(quantidade > 255){
        document.getElementById('obs-produto').value = "estoque lotado!!!"
        document.getElementById('obs-produto').style.borderColor = "red"
        document.getElementById('obs-produto').style.color = "red"
    }else{
        document.getElementById('obs-produto').value = "estoque inválido."
        document.getElementById('obs-produto').style.borderColor = "red"
        document.getElementById('obs-produto').style.color = "red"
    }
}

function eventoQuantidade2(){
    let quantidade3 = window.document.getElementById('quantidade-produto3').value
    if(quantidade3 < 0 || quantidade3 > 255){
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
    let taxa = document.getElementById('taxa').value
    let observacao = document.getElementById('obs-produto').value

    if(nomeProduto.length > 3 && quantidade > 0 && categoria.length > 3 && precoCusto > 0 && precoVenda > 0 
    && precoVenda > precoCusto && /^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/.test(validade) && iconProduto != "" && observacao != "" && taxa > 0 <= 65){
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

function eventoClick(){
    window.document.getElementById('config-display-perfil').style.animationName = 'animacao'
    window.document.getElementById('config-display-perfil').style.display = 'block'
}

function eventoAtualizarPerfil(){
    window.document.getElementById('config-display-perfil').style.animationName = 'animacao2'
    setTimeout(function(){
        window.document.getElementById('config-display-perfil').style.display = 'none'
    },500)
}

function eventoNome(){
    let nomeUsuario = window.document.getElementById('nome-usuario').value
    if(nomeUsuario.length < 4){
        window.document.getElementById('nome-usuario').style.color = 'red'
        window.document.getElementById('nome-usuario').style.borderColor = 'red'
    }else{
        window.document.getElementById('nome-usuario').style.color = 'black'
        window.document.getElementById('nome-usuario').style.borderColor = 'black'
    }
}

function eventoSenha(){
    let senhaUsuario = window.document.getElementById('senha-usuario').value
    if(senhaUsuario.length < 4){
        window.document.getElementById('senha-usuario').style.color = 'red'
        window.document.getElementById('senha-usuario').style.borderColor = 'red'
    }else{
        window.document.getElementById('senha-usuario').style.color = 'black'
        window.document.getElementById('senha-usuario').style.borderColor = 'black'
    }
}

function eventoTaxa(){
    let taxa = window.document.getElementById('taxa').value
    if(taxa <= 0 || taxa > 65){
        window.document.getElementById('taxa').style.color = 'red'
        window.document.getElementById('taxa').style.borderColor = 'red'
    }else{
        window.document.getElementById('taxa').style.color = 'black'
        window.document.getElementById('taxa').style.borderColor = 'black'
    }
}

function eventoImposto(){
    let taxa3 = window.document.getElementById('imposto3').value
    if(taxa3 <= 0 || taxa3 > 65){
        window.document.getElementById('imposto3').style.color = 'red'
        window.document.getElementById('imposto3').style.borderColor = 'red'
    }else{
        window.document.getElementById('imposto3').style.color = 'black'
        window.document.getElementById('imposto3').style.borderColor = 'black'
    }
}

function eventoRelatorioPodutos(){
    document.getElementById('config-display-relatorio').style.display = 'block'
    document.getElementById('config-display-relatorio').style.textDecoration = 'block'
}

function eventoRelatorioPrevisoes(){
    document.getElementById('config-display-relatorio').style.display = 'none'
    document.getElementById('config-display-relatorio').style.textDecoration = 'none'
}
