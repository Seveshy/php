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
                console.log(data);
            });
=======
            $.ajax({
                url:'_xml/produtos.xml'
            }).then(sucesso,falha);

            function sucesso(arquivo){
                var elemento;
                elemento = '<ul>';
                    $(arquivo).find('produto').each(function(){
                        var nome = $(this).find('nomeproduto').text();
                        elemento += "<li>" + nomw + "</li>";
                    });

                elemento += '</ul>';
                $('div#listagem').html(elemento);
            }

            function falha(){

            }
>>>>>>> 1bcaac77a5b9f6e15d93ecd95d52246cfdb3e4fe
        </script>
    </body>
</html>