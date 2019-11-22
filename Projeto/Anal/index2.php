<?php include("conexao1.php");
    $grupo = selectAllPessoa();
?>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        
    
    </head>
    <body>
        <table border="1">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Email</th>
                    <th>Cpf</th>
                    <th>Telefone</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($grupo as $pessoa) { ?>
                
                    <tr>
                    <td><?=$pessoa["nome"]?></td>
                    <td><?=$pessoa["sobrenome"]?></td>
                    <td><?=$pessoa["email"]?></td>
                    <td><?=$pessoa["cpf"]?></td>
                    <td><?=$pessoa["telefone"]?></td>
                    
                    
                    <td>
                        <form name="alterar" action="alterar1.php" method="POST">
                            <input type="hidden" name="id" value=<?=$pessoa["id"]?> />
                            <input type="submit" value="Editar" name="editar"/>
                        </form> 
                    </td>
                    <td>
                        <form name="excluir" action="conexao1.php" method="POST" >
                            <input type="hidden" name="id" value="<?=$pessoa["id"]?>"/>
                            <input type="hidden" name="acao" value="excluir" />
                            <input type="submit" value="excluir" name="excluir" />
                        </form>
                    </td>
                    </tr>
                
                <?php }
                
                ?>
                
            </tbody>
        </table>
        
       
    </body>
</html>