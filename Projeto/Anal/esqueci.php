<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css"/>
        <title>Ver Cadastro</title>
         <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    </head>
    <body id="bodyEntrar">

        <section>
    <fieldset id="campoEntrar">
     <a href="home.php"><img id="logoEntrar" src="Imagens/logo2.png" alt="logo"></a>
        <p id="tituloEntrar"> Ver Cadastro </p>
            <form action="index2.php" method="post">
                <p >Clique para receber seus dados:</p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="index2.php">Procurar cadastro</a>
            </form>
                
    <br><br>
            
        
            <br>
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