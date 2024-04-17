<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HYoje tem aula?</title>
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
        $dia = $_GET["dias"];
        switch ($dia) {
                case 1:
                    $r = "Hoje não tem aula \u{1f917}";
                    break;
                case 2:
                    $r = "Hoje tem aula &#x1F4DA \u{1f60f}";
                    break;
                case 3:
                    $r = "Hoje tem aula \u{1f60f}";
                    break;
                case 4:
                    $r = "Hoje tem aula \u{1f60f}";
                    break;
                case 5:
                    $r = "Hoje tem aula \u{1f60f}";
                    break;
                case 6:
                    $r = "Hoje tem aula \u{1f60f}";
                    break;  
                case 7:
                    $r = "Hoje não tem aula \u{1f917}";
                    break;
        }
        echo("<h2>$r</h2>")
        
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
        <br/>
        <br/>
        <a href="Switch2.html"><button type="button">&#x2B05Voltar</button></a>
    </div>
</body>
</html>

