<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>
    </head>

    <body>
<<<<<<< HEAD

        <script src="jquery.js"></script>
        <script>

=======
        <div id="nome"></div>


        <script src="jquery.js"></script>
        <script>
            $.ajax({
                url:'nomes.php'
            }).then(sucesso,falha);

            function sucesso(valor){
                $('div#nome').html(valor);
            }

            function falha(){
                $('div#nome').html('Falha no carregamento');
            }
>>>>>>> 1bcaac77a5b9f6e15d93ecd95d52246cfdb3e4fe
        </script>
    </body>
</html>