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
            $c = 1;
            while ($c <= 5) {
                echo "<form action='pratica.php' method='get'>
                valor $c : <input type='number' name='v$c' id='v1' min='0' max = '100' value='0'><br/>";
                $c++;
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

