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
            for ($cont=0; $cont <= 10; $cont++) { 
                echo"<h2>$cont </h2><br/>";
                $cont +=1;
            }
           
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

