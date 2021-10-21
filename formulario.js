function enviarDados(){
    let nome = document.getElementById("nome")
    let email = document.getElementById("email")
    let turma = document.getElementById("turma")
    let nomeresp = document.getElementById("nomeresp")
    let cpfresp = document.getElementById("cpfresp")
    let telefone = document.getElementById("telefone")
    let pagamento = document.getElementById("pagamento")

    let msgError = ''
    if(nome.value.trim() == ""){
        msgError += "Preencha o campo nome<br>"
        nome.style.border = '1px solid #f00'
    }else{
        nome.style.border = '1px solid #000'
    }

    if(email.value.trim() == ""){
        msgError += "Preencha o campo email<br>"
        email.style.border = '1px solid #f00'
    }else{
        email.style.border = '1px solid #000'
    }

    if(turma.value.trim() == ""){
        msgError += "Preencha o campo turma<br>"
        turma.style.border = '1px solid #f00'
    }else{
        turma.style.border = '1px solid #000'
    }

    if(nomeresp.value.trim() == ""){
        msgError += "Preencha o campo nome do responsável<br>"
        nomeresp.style.border = '1px solid #f00'
    }else{
        nomeresp.style.border = '1px solid #000'
    }

    if(cpfresp.value.trim() == ""){
        msgError += "Preencha o campo cpf<br>"
        cpfresp.style.border = '1px solid #f00'
    }else{
        cpfresp.style.border = '1px solid #000'
    }

    if(telefone.value.trim() == ""){
        msgError += "Preencha o campo telefone<br>"
        telefone.style.border = '1px solid #f00'
    }else{
        telefone.style.border = '1px solid #000'
    }

    if(pagamento.value.trim() == ""){
        msgError += "Preencha o campo pagamento<br>"
        pagamento.style.border = '1px solid #f00'
    }else{
        pagamento.style.border = '1px solid #000'
    }

    if(msgError != ''){
        document.getElementById("resposta").innerHTML = msgError
    }else{
        document.getElementById("resposta").innerHTML = ''
        alert("Dados enviados com sucesso")
    }
}

document.getElementById("btn").addEventListener("click", enviarDados)
