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

    // tabela de transportadoras
    $tr = "SELECT * FROM transportadoras ";
    $consulta_tr = mysqli_query($conecta, $tr);
    if(!$consulta_tr) {
        die("erro no banco");
    }
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP INTEGRACAO</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
    </head>

    <body>        
        <main>  
            <div id="janela_transportadoras">
                <?php
                    while($linha = mysqli_fetch_assoc($consulta_tr)) {
                ?>
                <ul>
                    <li><?php echo utf8_encode($linha["nometransportadora"]) ?></li>
                    <li><?php echo utf8_encode($linha["cidade"]) ?></li>
<<<<<<< HEAD
                    <li><a href="" class="excluir">Excluir</a></li>
=======
                    <li><a href="" class="excluir" title="<?php echo $linha["transportadoraID"] ?> ">Excluir</a></li>
>>>>>>> 1bcaac77a5b9f6e15d93ecd95d52246cfdb3e4fe
                </ul>
                <?php
                    }
                ?>
            </div>
        </main>

        
        <script src="jquery.js"></script>
        <script>
<<<<<<< HEAD
=======
            $('#janela_transportadoras ul li a.excluir').click(function(e) {
                e.preventDefault();
                var elemento = $(this).parent().parent().fadeOut();
                var id = $(this).attr("title");

                $.ajax({
                    type:"POST",
                    data:"transportadoraID=" + id,
                    url:"exclusao.php",
                    async:false
                }).done(function(data) {
                    $sucesso = $.parseJSON(data)["sucesso"];

                    if($sucesso) {
                        $(elemento).fadeOut();
                    } else {
                        console.log("erro na exclusao");
                    }
                }).fail(function() {
                    console.log("Erro no sistema");
                });
            });
>>>>>>> 1bcaac77a5b9f6e15d93ecd95d52246cfdb3e4fe
        </script>
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>