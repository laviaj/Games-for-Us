<!DOCTYPE html>
<html>
    
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="estilo.css"/>
        <title> Games for Us </title>
        <script type="text/javascript" src="script.js"></script>
        
    </head>
    
    <body>
        
        <header>
        <a href="home.html"><img id="logo" src="Imagens/logo2.png" alt="GameofUs"></a>
        
        <nav id="menuSuperior">
            <ul>
                <li><form class="pesquisa">
                    <input type = "search" id = "barra">
                    <img id="lupa" src="Imagens/lupa.png" class="btn">
                    </form> </li>
            </ul>
        </nav>
        </header>
        
        <br>
        
        <section>
            <img id="img" src="Imagens/jogos.jpg" alt="Jogos">
        </section>
        
        <br>
        
        <nav id="menuPrincipal">
            <ul>
                <li><a href="categorias.html"> Categarias </a></li>
                <li><a href="ajuda.html"> Ajuda </a></li>
                <li><a href="venda.html"> Venda </a></li>
                <li><a href="cadastro2.php"> Cadastro </a></li>
                <li><a href="login.php"> Login </a></li>
                <img id = "carrinho" src="Imagens/cart.png" alt="Carrinho">
            </ul>
        </nav>
        
        
        <form name="form1" action="conexao1.php" method = "POST">
        <fieldset id = "campo2">
    
        <legend id = "legend"> Novo Usuário </legend>
        <td>Nome:</td>
        <td><input name="nome" type="text" value=""><br/></td>
        Sobrenome:
        <input name="sobrenome" type="text"><br />
        <td>E-mail:</td>
        <td><input name="email" type="text" value=""><br/></td>
        <td>CPF:</td>
        <td><input name="cpf" type="text" value=""><br/></td>
        <td>Telefone:</td>
        <td><input name="telefone" type="text" value=""><br/></td>
        <td>Senha:</td>
        <td><input name="senha" type="password" value=""><br/></td>
        <td>Confirmar Senha:</td>
        <td><input name="rep_senha" type="password" value=""><br /></td>
        <td><input type="hidden" name="acao" value="inserir"</td>
        <td><input id="botao" type="submit" value="cadastro" onclick="validaVazio()"/></td>
        <input id="botao" type="reset" value="Cancelar"/>
        </fieldset>
        </form>
        <br>
            
        <footer><a href="#" id="subir"><img id="topo" src="Imagens/arrowTop.png" alt="Topo"></a></footer>
            
        <script type="text/javascript">
            $(document).ready(function() {
            $('#subir').click(function(){ 
            $('html, body').animate({scrollTop:0}, 'slow');
                return false;
            });
            });
        </script>
        
    <br>
        
    <hr id="linhaFoot">
    
        <p id="pFoot"> Todos os direitos reservados © </p>
        
    </body>
    
</html>