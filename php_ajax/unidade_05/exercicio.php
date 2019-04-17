<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>
    </head>

    <body>
        <div id="listagem"></div>
        <script src="jquery.js"></script>
        <script>
<<<<<<< HEAD
            $.getJSON('_json/produtos.json', function(data){
                var elemento;
                elemento = "<ul>";   
                $.each(data, function(i, valor) {
                        elemento += "<li>" + valor.nomeproduto + "</li>";
                        elemento += "<li>" + valor.precounitario + "</li>";

                    });
                elemento += "</ul>";
                    
                    $('div#listagem').html(elemento);
                        });
=======

>>>>>>> 1bcaac77a5b9f6e15d93ecd95d52246cfdb3e4fe
        </script>
    </body>
</html>