<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura repetição</title>
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
            $cont = 0;
            do {
                echo"<h2>$cont </h2><br/>";
                $cont +=100;
            } while ($cont <= 1000);
            $espaço = 0;
        while ($espaço <= 10) {
           echo"<br/>";
           $espaço ++;}
           
        ?>


            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <button type="submit"><Em>Enviar</Em></button>
    
    </div>
</body>
</html>

