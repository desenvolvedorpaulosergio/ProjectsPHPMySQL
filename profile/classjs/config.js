setInterval(function(){
    window.document.getElementById('condig-display-perfil').style.display = "block"
    window.document.getElementById('config-display').style.display = "none"
},2500)

function eventoVerificar(){
    let nome = window.document.getElementById('nome').value
    let telefone = window.document.getElementById('telefone').value
    let sobre = window.document.getElementById('sobre').value
    let file = window.document.getElementById('arquivo').value

    const regEx_Telefone = /^\([0-9]{2}\) \+[0-9]{2} [0-9]{5}\-[0-9]{4}$/

    if(regEx_Telefone.test(telefone) == true && nome.length >= 3 && sobre != ""){
        alert('ok')
    }else{
        alert('erro')
    }
}