function validaVazio() {
	var nome = form1.nome.value;
    var email= form1.email.value;
    var cpf = form1.cpf.value;
    var telefone = form1.telefone.value;
    var senha = form1.senha.value;
    var rep_senha = form1.rep_senha.value;
    
    
    if (nome == "" ) {
        alert("O campo Nome é 'Obrigatório'!");
        form1.nome.focus();
        return false;
    }
    
    else if (nome.length<=2){
        alert("O campo Nome deve possuir mais do que 2 caracteres!")
        form1.nome.focus();
        return false;
    }
    
    else if(email == ""){
        alert("O campo E-mail é 'Obrigatório'!")
        form1.email.focus();
        return false;
    }
    
    else if(cpf == ""){
        alert("O campo cpf é 'Obrigatório'!")
        form1.cpf.focus();
        return false;
    }
    
    else if(telefone == ""){
        alert("O campo telefone é 'Obrigatório'!")
        form1.telefone.focus();
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
    
    else if (senha != rep_senha || rep_senha != senha){
        alert("Senhas diferentes!")
        form1.senha.focus();
        return false;
    }
    
    else if(rep_senha == ""){
        alert("O campo Confirmar Senha é 'Obrigatório'!")
        form1.rep_senha.focus();
        return false;
    }
  
}