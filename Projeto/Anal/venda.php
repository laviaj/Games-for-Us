<!-- upload de imagens do produto a venda
-->

<?php
    
    include("conexao2.php");

    $msg = false;
    
    if(isset($_FILES['arquivo'])){
    
        $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
        $novo_nome = md5(time()) . $extensao;
        $diretorio = "upload/";
        
        move_uploaded_file($_FILES['arquivo']['tmp_name'],$diretorio.$novo_nome);
        
        $sql_code = "INSERT INTO imagem (id, arquivo, data) VALUES(null, '$novo_nome', NOW())";
        if($mysqli->query($sql_code)){
            $msg = "Arquivo enviado com sucesso!.";
        
        } else {
            $msg = "Falha ao enviar o arquivo.";
    
    }
    }

?>

<!DOCTYPE html>
<html>
    
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="estilo.css"/>
        <title> Game for Us </title>
        <script src=script.js> </script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
        <style>
            body {
                font-family: "Lato", sans-serif;
                }

            .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            right: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
            }

            .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
            }

            .sidenav a:hover {
            color: #f1f1f1;
            }

            .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
            }

            @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
            }
        </style>
    </head>
    
    <body>
        <!--Logo Games for Us-->
        <header>
        <a href="home.html"><img id="logo" src="Imagens/logo2.png" alt="GameofUs"></a>
        <!-- Menu superior com BUSCA E LUPA-->
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
        <!--IMAGENS DO MEIO DO MENU-->
        <section>
            <img id="img" src="Imagens/baner.jpg" alt="Jogos">
        </section>
        
        <br>
        <!--MENU PRINCIPAL COM TOPICOS E O CARRINHO-->
        <nav id="menuPrincipal">
            <ul>
                <li><a href = "Categorias"> Categorias </a></li>
                <li><a href="ajuda.html"> Ajuda </a></li>
                <li><a href="venda.html"> Venda </a></li>
                <li><a href="cadastro2.php"> Cadastro </a></li>
                <li><a href="login.php"> Login </a></li>
                <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    </div>
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; <img id = "carrinho"src="Imagens/cart.png" > </span>
                
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>    
            </ul>
        </nav>
            
        <img id="" src="Imagens/adicionar.png" alt="Topo">
        
    
        <fieldset id="campoEntrar">
        <legend id= "legend">Fotos </legend>
                
        <!--          
        <p><label for="arquivos" id="foto"></label><input type="hidden" name="image" value="1000000"></p>
            <input type="file" name="ARQUIVO" id="arquivo"> <br />
        
        <p><label for="arquivos" id="foto"></label><input type="hidden" name="image" value="1000000"></p>
            <input type="file" name="ARQUIVO" id="arquivo1"> <br />
        -->
        
        <?php if($msg != false) echo "<p> $msg </p>" ?>
        <form action="venda.php" method="POST" enctype="multipart/form-data">
        Arquivo: <input type="file" required name="arquivo" id="arquivo2">
        <p><input type="submit" value="Salvar" id="botao"></p>
        </form>
        </fieldset>
        <!--
        <p><label for="arquivos" id="foto"></label><input type="hidden" name="image" value="1000000"></p>-->
            
    <!--
    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="vendanext.php"><input type="submit" name="continuar" value="Próximo" id = "botao10"></a>
    -->    
        <!--SETA PARA CIMA-->   
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
    <!--RODAPÉ--> 
    <hr id="linhaFoot">
    
        <p id="pFoot"> Todos os direitos reservados © </p>
        
    </body>
</html>