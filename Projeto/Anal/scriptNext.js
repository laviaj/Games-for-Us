function validaVazio() {
	var nomeJogo = form1.nomeJogo.value;
    var descricao = form1.descricao.value;
    var console = form1.console.value;
    var categoria = form1.categoria.value;
    var preco = form1.preco.value;
    
    if (nomeJogo == "" ) {
        alert("O campo Nome do Jogo é 'Obrigatório'!");
        form1.nomeJogo.focus();
        return false;
    }
    
    function validaNomeJogo(campo) {
    var regex = /^[a-zA-ZéúíóáÉÚÍÓÁèùìòàçÇÈÙÌÒÀõãñÕÃÑêûîôâÊÛÎÔÂëÿüïöäËYÜÏÖÄ\-\ \s]+$/;
    if(campo.match(regex)) {
        return false;
    }
    
    else if (descricao == "" ){
        alert("O campo Descrição é 'Obrigatório'!")
        form1.descricao.focus();
        return false;
    }
    
    else if (preco == "" ){
        alert("O campo Nome deve possuir mais do que 3 caracteres!")
        form1.descricao.focus();
        return false;
    }
        
    function validaPreco(campo) {
    var regex = /^[a-zA-ZéúíóáÉÚÍÓÁèùìòàçÇÈÙÌÒÀõãñÕÃÑêûîôâÊÛÎÔÂëÿüïöäËYÜÏÖÄ\-\ \s]+$/;
    if(campo.match(regex)) {
        return false;
    }
}