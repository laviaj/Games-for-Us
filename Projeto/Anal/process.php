<?php
    $email = $_POST['email'];
    $senha= $_POST['senha'];

    $email = stripcslashes($email);
    $senha = stripcslashes($senha);
    $email = mysql_real_escape_string($email);
    $senha = mysql_real_escape_string($senha);

    mysql_connect("localhost", "root", "");
    mysql_select_db("cadastro");

    $result = mysql_query("SELECT * FROM cadastro where email = '$email' and senha = '$senha'") 
        or die("Failed to query database ".mysql_error());
    $row = mysql_fetch_array($result);
    if ($row['email'] == $email && $row['senha'] == $senha){
        echo "Login success!! Welcome ".$row['email'];
    } else {
        echo "Failed to login";
    }
?>
