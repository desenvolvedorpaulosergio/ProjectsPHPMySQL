window.document.addEventListener('DOMContentLoaded', function(){
    setInterval(function(){
        window.document.getElementById('config-display-container').style.display = 'none'
    }, 1500)
})

function eventoVerificar(){

    let gmail = window.document.getElementById('gmail').value
    let cpf = window.document.getElementById('cpf').value
    let telefone = window.document.getElementById('telefone').value

    const RegEx_Gmail = /^$/
    const RegEx_Telefone = /^$/
    const RegEx_CPF = /^$/
    if(RegEx_Gmail.test(gmail) == true){
        alert('ok')
    }else{
        alert('erro')
    }
}