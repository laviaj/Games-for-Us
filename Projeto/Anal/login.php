<!DOCTYPE html>
<html>
    
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="estilo.css"/>
        <title> Games for Us </title>
        <script type="text/javascript" src="scriptLogin.js"></script>
        
    </head>
    
    <body>
         <script type="text/javascript" src="scriptLogin.js"></script>
        <header>
        <a href="home.html"><img id="logo" src="Imagens/logo2.png" alt="GamesForUs"></a>
        
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
                <li><a href="categorias.html"> Categorias </a></li>
                <li><a href="ajuda.html"> Ajuda </a></li>
                <li><a href="venda.html"> Venda </a></li>
                <li><a href="cadastro2.php"> Cadastro </a></li>
                <li><a href="login.html"> Login </a></li>
                <img id = "carrinho" src="Imagens/cart.png" alt="Carrinho">
            </ul>
        </nav>
        
        
        <form action="process.php" id="campoEntrar" name="form1" method="POST">
        <fieldset id = "campoEntrar">
    
        <legend id = "legend"> Entre com seu Cadastro </legend>
        E-mail:
        <input name="email" type="text" id="email" ><br />
        Senha:
        <input name="senha" type="password" id="senha"><br />
            <td colspan="2">
                <input id="botao" type="submit" value="Entrar" onclick="return validaVazio()" /> </td>
            <td colspan="2"> <input id="botao" type="reset" value="Cancelar"/> </td>
            <td><a href="cadastro2.php" id="botao">Criar uma conta</a> </td>
            <td><a href="esqueci.php" id="botao">Alterar cadastro</a> </td>
            
        </fieldset>
        </form>
        <br>
            
            
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