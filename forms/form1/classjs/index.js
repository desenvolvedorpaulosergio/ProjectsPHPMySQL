window.document.addEventListener('DOMContentLoaded', function(){
    setInterval(function(){
        window.document.getElementById('config-display-container').style.display = 'none'
    }, 1500)
})

function eventoVerificar(){

    let nome = window.document.getElementById('nome').value
    let senha = window.document.getElementById('senha').value
    let endereco = window.document.getElementById('endereco').value
    let observacao = window.document.getElementById('observacao').value

    let gmail = window.document.getElementById('gmail').value
    let cpf = window.document.getElementById('cpf').value
    let telefone = window.document.getElementById('telefone').value
    

    // Configurações das Expressões Regulares
    const RegEx_Gmail = /^[a-z0-9]{3,}@gmail\.com$/
    const RegEx_Telefone = /^\([0-9]{2}\) \+[0-9]{2} [0-9]{5}\-[0-9]{4}$/
    const RegEx_CPF = /^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/

    if(!(RegEx_Gmail.test(gmail) == true && RegEx_CPF.test(cpf) == true && RegEx_Telefone.test(telefone) == true && 
    nome !== "" && senha !== "" && endereco !== "" && observacao !== "")){
        setInterval(function(){
            window.document.getElementById('estilo-mini-carregamento').style.display = "none"
            window.document.getElementById('config-display-botao1').style.display = "block"
        }, 2000)
        window.document.getElementById('estilo-mini-carregamento').style.display = "block"
        window.document.getElementById('config-display-botao1').style.display = "none"
        window.document.getElementById('config-display-botao2').style.display = "none"
    }else{
        alert('erro')
    }
}