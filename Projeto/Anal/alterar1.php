<?php

include("conexao1.php");
$pessoa = selectIdPessoa($_POST["id"]);
//var_dump($pessoa);
?>
<meta charset="utf-8">
<form name="dadosPessoa" action="conexao1.php" method="POST">
    <table border="1">
        <thead>
        <tr>
            <td>Nome:</td>
            <td> <input type= "text" name = "nome" value ="<?=$pessoa["nome"]?>" size="20" > </td>
        </tr>
        <tr>
            <td>Sobrenome:</td>
            <td> <input type= "text" name = "sobrenome" value ="<?=$pessoa["sobrenome"]?>" size="20" > </td>
        </tr>
        <tr>
            <td>email:</td>
            <td> <input type= "text" name = "email" value ="<?=$pessoa["email"]?>" > </td>
        </tr>
        <tr>
            <td>Cpf:</td>
            <td> <input type= "text" name = "cpf" value ="<?=$pessoa["cpf"]?>" > </td>
        </tr>

        <tr>
            <td>Telefone:</td>
            <td> <input type= "text" name = "telefone" value = "<?=$pessoa["telefone"]?>" size="20" > </td>
        </tr>
        <tr>
            <td>senha:</td>
            <td> <input type= "password" name = "senha" value = "<?=$pessoa["senha"]?>" size="20" > </td>
        </tr>
        <tr>
            <td><input type="hidden" name="acao" value="alterar"/>
            <input type="hidden" name="id" value="<?=$pessoa["id"]?>" />
            </td>
            <td><input type="submit" value="Enviar" name="Enviar" /> </td>
        </tr>    
        </tbody>
    </table>
    
</form>