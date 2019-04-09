<?php
    $pesquisa = $_POST["pesquisa"];
    
    include_once './conecta.php';
    //pesquisando dados 
    $sql = "SELECT id, nome, email FROM clientes WHERE nome like '%$pesquisa%'";
    $resultado = $conecta->query($sql); 
    if ($resultado-> num_rows > 0) { 
        while($linha = $resultado->fetch_assoc()) { 
            echo "id " . $linha["id"].": ". $linha["nome"]. " (" . $linha["email"]. ")<br>"; 
        }    
    } 
    else { 
        echo "<script>
                alert('Usuário não encontrado');
                window.location.href = 'pesquisar.html';
            </script>";
    }
    $conecta->close();

?>