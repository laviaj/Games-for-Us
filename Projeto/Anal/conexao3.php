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
    $sql = "INSERT INTO cadastrojogo(nomeJogo, descricao, console, categoria, preco)" 
."VALUES ('{$_POST["nomeJogo"]}','{$_POST["descricao"]}','{$_POST["console"]}','{$_POST["categorias"]}','{$_POST["preco"]}')";
    $banco -> query($sql);
    $banco -> close();
    voltarIndex();
    
}

function alterarPessoa(){
    $banco = abrirBanco();
    $sql = 
    "UPDATE cadastrojogo SET
    nomejogo='{$_POST["nomeJogo"]}',
    "."descricao='{$_POST["descricao"]}',
    "."console='{$_POST["console"]}',
    "."categorias='{$_POST["categorias"]}',
    "."preco='{$_POST["preco"]}'";
    
    $banco -> query($sql);
    $banco -> close();
    voltarIndex2();
    
}

function excluirPessoa(){
    $banco = abrirBanco();
    $sql = "DELETE FROM cadastrojogo WHERE id='{$_POST["id"]}'";
    $banco -> query($sql);
    $banco -> close();
    voltarIndex2();
    
    
}

function selectAllPessoa(){
    $banco = abrirBanco();
    $sql = "SELECT * FROM cadastrojogo ORDER BY nomeJogo";
    $resultado = $banco ->query($sql);
    $banco -> close();
    while ($row = mysqli_fetch_array($resultado)) {
        $grupo[] = $row;
    }
    return $grupo;
}

function selectIdPessoa($id){
    $banco = abrirBanco();
    $sql = "SELECT * FROM cadastrojogo WHERE id = ".$id;
    $resultado = $banco ->query($sql);
    $banco -> close();
    $pessoa = mysqli_fetch_assoc($resultado);
    return $pessoa;
}

function voltarIndex(){
header("Location:vendaNext.php");
}


function voltarIndex2(){
header("Location:vendaNext.php");
}