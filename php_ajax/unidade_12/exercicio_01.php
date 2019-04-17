<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>
    </head>

    <body>

        
        <script src="_js/jquery.js"></script>
        <script>
<<<<<<< HEAD
=======
            var cep = "01310-940";
                $.ajax({
                    type: "GET",
                    url: "http://viacep.com.br/ws/" + cep + "/json",
                    assync: false
                }).done(function(data){
                    console.log(data);
                }).fail(function(){
                    console.log("erro");
                });
>>>>>>> 1bcaac77a5b9f6e15d93ecd95d52246cfdb3e4fe
        </script>
    </body>
</html>