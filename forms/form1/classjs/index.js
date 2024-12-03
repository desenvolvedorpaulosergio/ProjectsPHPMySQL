function eventoComecar(){
    window.document.getElementById('config-display-modal').style.display = 'block'
    window.document.getElementById('estilo-apresentacao').style.display = 'none'
    setInterval(function(){
        window.document.getElementById('config-display-form2').style.display = 'block'
        window.document.getElementById('config-display-modal').style.display = 'none'
    }, 1500)
}