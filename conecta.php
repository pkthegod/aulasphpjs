<?php
$servidor = "localhost";
    $user = "root";
    $senha = "";
    $database = "cadastro0104";
    
    $conecta = new mysqli($servidor,$user,$senha,$database);
    if($conecta->connect_error){
        die("Conexao falhou: ".$conecta->connect_error."<br>");
    }
    echo "Conexao bem sucedida<br>";
?>

