
        <?php
        $servidor = "localhost";
        $user = "root";
        $passwd = "";
        $database = "cadastro0104";
        
        $conecta = new mysqli($servidor,$user,$passwd,$database);
        
        if (!$conecta){
            die("Conexão falhou: " .$conecta->connect_error."<br>");
        }
        echo "Conexão realizada com sucesso";
        
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        
        $sql = "INSERT INTO clientes(nome, email, senha)
        VALUES ('$nome', '$email', '$senha')";
        if ($conecta->query($sql) === TRUE) {
            echo "Novo registro criado com sucesso";
        } else {
            echo "Erro: " .$sql."<br>".$conecta->error."<br>";
        }
        $conecta->close();
        ?>
