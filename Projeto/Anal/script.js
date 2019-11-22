var menu, nav, aberto = false; //começa com false pq o menu vai estar fechado

window.onload = function(){
    menu = document.getElementById("menu");
    nav = document.getElementById("navigation");
    
    menu.onclick = abrefechanav;
}

function abrefechanav(){
    if(aberto == true){
        nav.style.left = "-100px";
    } else{
        nav.style.left = "0px";
    }
    aberto = !aberto //fala 
}

function validaVazio() {
	var nome = form1.nome.value;
    var email= form1.email.value;
    var telefone= form1.telefone.value;
    var senha = form1.senha.value;
    var rep_senha = form1.rep_senha.value;
    
    
    if (nome == "" ) {
        alert("O campo Nome é 'Obrigatório'!");
        form1.nome.focus();
        return false;
    }
    
    else if (nome.length<=3){
        alert("O campo Nome deve possuir mais do que 3 caracteres!")
        form1.nome.focus();
        return false;
    }
    
    else if(email == ""){
        alert("O campo E-mail é 'Obrigatório'!")
        form1.email.focus();
        return false;
    }
    
    else if(telefone == ""){
        alert("O campo Telefone é 'Obrigatório'!")
        form1.telefone.focus();
        return false;
    }
    
    else if(isNaN(telefone)){
            alert("O campo Telefone deve conter apenas números!");
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