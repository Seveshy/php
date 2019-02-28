<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>
       
        <?php 
            $dia = "segunda";
            switch($dia) {
                case "segunda":
                    echo "Hoje ainda é segunda :( <br>";
                break;

                case "quarta":
                    echo "Ainda é quarta feira, mas a sexta já está chegando <br>";
                break;

                case "sexta":
                    echo "Oba hoje é sexta feira !!!";
                break;
            
            }
        ?>
    <body>
    </body>
</html>