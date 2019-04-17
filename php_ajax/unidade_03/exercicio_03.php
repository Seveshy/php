<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>
    </head>

    <body>
        <div id="nome"></div>


        <script src="jquery.js"></script>
        <script>
            $.ajax({
               url:'nome.php';
            }).done(function(valor)  {
                $('div#nome').html(valor);
            });

          
        </script>
    </body>
</html>