<!-- Cadastro de venda de produto
-->
<?php
	function lista_console($nome_campo="console"){
		$console=array("" => "Selecione seu console",
						"PS1" => "Playstation 1",
						"PS2" => "Playstation 2",
						"PS3" => "Playstation 3",
						"PS4" => "Playstation 4",
						"XBOX" => "XBOX",
						"XBOX360" => "XBOX 360",
						"XBOXONE" => "XBOX ONE",
						"XBOXONEX" => "XBOX ONEX",
						"WII" => "Nintendo Wii",
						"WII U" => "Nintendo Wii U ",
						"SWITCH" => "Nintendo Switch",
						"DS" => "Nintendo DS",
						"3DS" => "Nintendo 3DS",
						"PSP" => "PSP",
						"PSP VITA" => "PSP Vita",
						"GAMEBOY" => "Nintendo Gameboy",
						"NINTENDO 64" => "Nintendo 64",	
						"GAMECUBE" => "Nintendo Gamecube");
		$ret="<select name='$nome_campo' id='$nome_campo'";
		$ret.=">\n";
		foreach($console as $chv => $vlr) {
			$ret.="<option value='$chv'>$vlr</option>\n";
		}
		$ret.="</select>";
		return $ret;
	}

    	function lista_categoria($nome_categoria="categoria"){
		$console=array("" => "Selecione sua categoria",
						"Ação" => "Ação",
						"Aventura" => "Aventura",
						"Estrategia" => "Estratégia",
						"RPG" => "Role-Playing Game",
						"Esporte" => "Esporte",
						"Corrida" => "Corrida",
						"Jogo online" => "Jogo Online",
						"Simulação" => "Simulação",
						"Plataforma" => "Plataforma",
						"Luta" => "Luta",
						"Simulador" => "Simulador",
						"Tiro" => "Tiro",
						"Musica" => "Musica");
		$ret="<select name='$nome_categoria' id='$nome_categoria'";
		$ret.=">\n";
		foreach($console as $chv => $vlr) {
			$ret.="<option value='$chv'>$vlr</option>\n";
		}
		$ret.="</select>";
		return $ret;
	}
?>

<!DOCTYPE html>
<html>
    
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="estilo.css"/>
        <title> Games for Us </title>
         <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
        <script type="text/javascript" src="scriptNext.js"></script>
        
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
        
        /* Mudar a letra para preto CSS */
        <form name="form2" action="conexao3.php" method = "POST">
        <fieldset id="campoEntrar"> 
        
        <legend id= "legend"> Cadastrar novo jogo </legend>
        <p><label for="nomeJogo">Nome do jogo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input name="nomeJogo" type="text" value=""><br/></p>
        <p><label for="descricaoProduto">Descrição do produto:&nbsp;&nbsp;</label><input name="descricao" type="text" value=""><br/></p>
        <p><label for="<?php echo $nome_campo ?>">Console:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <?php echo lista_console(); ?> </p>
        <p><label for="<?php echo $nome_categoria ?>">Categoria:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <?php echo lista_categoria(); ?></p>
            <p><label for="preco">Preço:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input name="preco" type="text" value=""><br/></p>
            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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