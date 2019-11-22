function validaVazio() {
    var email= form1.email.value;
    var senha = form1.senha.value;


    if(email == ""){
        alert("O campo E-mail é 'Obrigatório'!")
        form1.email.focus();
        return false;
    }
    
    
    else if(senha == ""){
        alert("O campo Senha é 'Obrigatório'!")
        form1.senha.focus();
        return false;
    }
    
    else if (senha.length<=5){
        alert("O campo Senha deve possuir mais do que 5 caracteres!")
        form1.senha.focus();
        return false;
    }
    
}