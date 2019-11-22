<?php
?>
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
                <li><a href="cadastro.html"> Cadastro </a></li>
                <li><a href="login.html"> Login </a></li>
                <img id = "carrinho" src="Imagens/cart.png" alt="Carrinho">
            </ul>
        </nav>
        
        
        <form name="form1" method="post">
        <fieldset id = "campo2">
    
        <legend id = "legend"> Novo Usuário </legend>
        Nome:
        <input name="nome" type="text"><br />
        E-mail:
        <input name="email" type="text"><br />
        Cargo:
        <select>
        <option> Front End </option>
        </select><br />
        
        Usuário:
        <input name="usuario" type="text"><br />
        Senha:
        <input name="senha" type="password"><br />
        Confirmar Senha:
        <input name="rep_senha" type="password"><br /><br />
            <input type="submit" value="Cadastrar" onclick="return validaVazio()" />
        <input type="reset" value="Cancelar"/>
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
