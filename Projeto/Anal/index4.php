<?php include("conexao3.php");
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
                    <th>Nome Do Jogo</th>
                    <th>Descrição</th>
                    <th>Console</th>
                    <th>Categoria</th>
                    <th>Preço</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($grupo as $pessoa) { ?>
                
                    <tr>
                    <td><?=$pessoa["nomeJogo"]?></td>
                    <td><?=$pessoa["descricao"]?></td>
                    <td><?=$pessoa["console"]?></td>
                    <td><?=$pessoa["categoria"]?></td>
                    <td><?=$pessoa["preco"]?></td>
                    
                    
                    <td>
                        <form name="alterar" action="alterar1.php" method="POST">
                            <input type="hidden" name="id" value=<?=$pessoa["id"]?> />
                            <input type="submit" value="Editar" name="editar"/>
                        </form> 
                    </td>
                    <td>
                        <form name="excluir" action="conexao3.php" method="POST" >
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