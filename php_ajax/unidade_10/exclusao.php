<?php
    // Criar objeto de conexao
<<<<<<< HEAD
    $conecta = mysqli_connect("localhost","root","","andes");
=======
    $conecta = mysqli_connect("localhost","root","123456","andes");
>>>>>>> 1bcaac77a5b9f6e15d93ecd95d52246cfdb3e4fe
    if ( mysqli_connect_errno()  ) {
        die("Conexao falhou: " . mysqli_connect_errno());
    }

    if( isset($_POST["transportadoraID"]) ) {
        $tID = $_POST["transportadoraID"];
        
        $exclusao = "DELETE FROM transportadoras ";
        $exclusao .= "WHERE transportadoraID = {$tID}";
        $con_exclusao = mysqli_query($conecta,$exclusao);
        if($con_exclusao) {
            $retorno["sucesso"] = true;
            $retorno["mensagem"] = "Transportadora excluida com sucesso.";
        } else {
            $retorno["sucesso"] = false;
            $retorno["mensagem"] = "Falha no sistema, tente mais tarde.";
        }
    }

    // converter retorno em json
    echo json_encode($retorno);

    // Fechar conexao
    mysqli_close($conecta);
?>