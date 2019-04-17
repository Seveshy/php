  <?php
<<<<<<< HEAD
    $conecta = mysqli_connect("localhost","root","123","andes");
=======
    $conecta = mysqli_connect("localhost","root","","andes");
>>>>>>> 1bcaac77a5b9f6e15d93ecd95d52246cfdb3e4fe
    if ( mysqli_connect_errno()  ) {
        die("Conexao falhou: " . mysqli_connect_errno());
    }

    if(isset($_POST["nometransportadora"])) {
        $nome       = utf8_decode($_POST["nometransportadora"]);
        $endereco   = utf8_decode($_POST["endereco"]);
        $cidade     = utf8_decode($_POST["cidade"]);
        $estado     = $_POST["estados"];
        
        $inserir    = "INSERT INTO transportadoras ";
        $inserir    .= "(nometransportadora,endereco,cidade,estadoID) ";
        $inserir    .= "VALUES ";
<<<<<<< HEAD
        $inserir    .= "('$nome','$endereco','$cidade', $estado)";    
        
        $operacao_insercao = mysqli_query($conecta, $inserir);
        if($operacao_insercao) {
            $retorno ["sucesso"] = true;
            $retorno ["mensagem"] = "Transportadora inserida com sucesso. ";
        } else {
            $retorno ["sucesso"] = false;
            $retorno ["mensagem"] = "Falha no sistema, tente mais tarde. ";
        }

        echo json_encode($retorno);
=======
        $inserir    .= "('$nome','$endereco','$cidade', $estado)";        
>>>>>>> 1bcaac77a5b9f6e15d93ecd95d52246cfdb3e4fe
    }
?>