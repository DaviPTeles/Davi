<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While sucessivo</title>
    <style>
        button{
        margin-left: 500px;
        padding: 5px;
        font-size: 10px;

        }
    </style>

    
</head>
<body>
    <div>   
        <?php 
        $c=1;
        while ($c <= 10) {
            echo "$c <br/>";
            $c ++; /*$c = $c + 1*/
        }
        ?>
    </div>
</body>
</html>

