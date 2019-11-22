<?php

if(isset($_POST["acao"])){  
    if($_POST["acao"] == "inserir"){
        inserirPessoa();
    
    }
    
    if($_POST[acao] == "alterar"){
        alterarPessoa();
    }
    
    if($_POST[acao] == "excluir"){
        excluirPessoa();
    }
}

function abrirBanco(){
    $conexao = new mysqli("localhost", "root","", "cadastro");
    return $conexao;
}

function inserirPessoa(){
    $banco = abrirBanco();
    $sql = "INSERT INTO cadastro(nome, sobrenome, email, cpf, telefone, senha)" 
."VALUES ('{$_POST["nome"]}','{$_POST["sobrenome"]}','{$_POST["email"]}','{$_POST["cpf"]}','{$_POST["telefone"]}','{$_POST["senha"]}')";
    $banco -> query($sql);
    $banco -> close();
    voltarIndex();
    
}

function alterarPessoa(){
    $banco = abrirBanco();
    $sql = 
    "UPDATE cadastro SET
    nome='{$_POST["nome"]}',
    "."sobrenome='{$_POST["sobrenome"]}',
    "."email='{$_POST["email"]}',
    "."cpf='{$_POST["cpf"]}',
    "."telefone='{$_POST["telefone"]}',
    "."senha='{$_POST[senha]}' WHERE id='{$_POST["id"]}'";
    
    $banco -> query($sql);
    $banco -> close();
    voltarIndex2();
    
}

function excluirPessoa(){
    $banco = abrirBanco();
    $sql = "DELETE FROM cadastro WHERE id='{$_POST["id"]}'";
    $banco -> query($sql);
    $banco -> close();
    voltarIndex2();
    
    
}

function selectAllPessoa(){
    $banco = abrirBanco();
    $sql = "SELECT * FROM cadastro ORDER BY nome";
    $resultado = $banco ->query($sql);
    $banco -> close();
    while ($row = mysqli_fetch_array($resultado)) {
        $grupo[] = $row;
    }
    return $grupo;
}

function selectIdPessoa($id){
    $banco = abrirBanco();
    $sql = "SELECT * FROM cadastro WHERE id = ".$id;
    $resultado = $banco ->query($sql);
    $banco -> close();
    $pessoa = mysqli_fetch_assoc($resultado);
    return $pessoa;
}

function voltarIndex(){
header("Location:home.html");
}


function voltarIndex2(){
header("Location:login.php");
}