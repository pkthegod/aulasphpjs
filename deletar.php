<?php
    $id = $_POST['id'];
    //conectando ao Banco de Dados
    include_once './conecta.php';
    
    //enviando dados 
    $sql = "DELETE FROM usuarios WHERE id='$id'";
    if ($conecta->query($sql) === TRUE) {
        echo  "<script>
                  alert('Registro apagado com sucesso');
                  window.location.href = 'apagar.html';
               </script>";
    } else {
        echo "Erro ao apagar o registro: " . $conecta->error."<br>";
    }
    $conecta->close();
?>


