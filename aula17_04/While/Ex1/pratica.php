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
        $c =1;
        while ($c <= 5) {
            $v = "num".$c;/*criadora das variáveis que irão receber os valores */
            $user = "v".$c;/*variável que vai receber os valores digitados do usuário */
            $$v = $_GET["$user"];/*variavel das variaveis sendo gerada para receber os valores*/
            $c ++;

        }
        echo"<h2>$num1 $num2 $num3 $num4 $num5</h2>";
        $espaço = 0;
        while ($espaço <= 10) {
           echo"<br/>";
           $espaço ++;
        }
        ?>
        
        <a href="Ex1.php"><button>Voltar</button></a>
    </div>
</body>
</html>

