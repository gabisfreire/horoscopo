<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Reconhecedor de Signo</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <h1>HORÓSCOPO</h1>
    <form action="pagina2.php" method="get">
        <br><label for="lblData">Escolha uma data: </label>
        <input type="date" name="data">
        <input type="submit">
    </form>

    <?php
        function getSigno($mes, $dia){
            switch($mes){
                case 1:
                    if($dia >= 20){
                        echo "<p>Seu signo é: Aquario </p>";
                        echo "<img src='img/aquario.png'>";
                    } else{
                        echo "<p>Seu signo é: Capricornio </p>";
                        echo "<img src='img/capricornio.png'>";
                    }
                    break;
                case 2:
                    if($dia >= 19){
                        echo "<p>Seu signo é: Peixes </p>";
                        echo "<img src='img/peixes.png'>";
                    } else{
                        echo "<p>Seu signo é: Aquario </p>";
                        echo "<img src='img/aquario.png'>";
                    }
                    break;
                case 3:
                    if($dia >= 21){
                        echo "<p>Seu signo é: Áries </p>";
                        echo "<img src='img/aries.png'>";
                    } else{
                        echo "<p>Seu signo é: Peixes </p>";
                        echo "<img src='img/peixes.png'>";
                    }
                    break;
                case 4:
                    if($dia >= 20){
                        echo "<p>Seu signo é: Touro </p>";
                        echo "<img src='img/touro.png'>";
                    } else{
                        echo "<p>Seu signo é: Áries </p>";
                        echo "<img src='img/aries.png'>";
                    }
                    break;
                case 5:
                    if($dia >= 21){
                        echo "<p>Seu signo é: Gêmeos </p>";
                        echo "<img src='img/gemeos.png'>";
                    } else{
                        echo "<p>Seu signo é: Touro </p>";
                        echo "<img src='img/touro.png'>";
                    }
                    break;
                case 6:
                    if($dia >= 21){
                        echo "<p>Seu signo é: Câncer </p>";
                        echo "<img src='img/cancer.png'>";
                    } else{
                        echo "<p>Seu signo é: Gêmeos </p>";
                        echo "<img src='img/gemeos.png'>";
                    }
                    break;
                case 7:
                    if($dia >= 23){
                        echo "<p>Seu signo é: Leão </p>";
                        echo "<img src='img/leao.png'>";
                    } else{
                        echo "<p>Seu signo é: Câncer </p>";
                        echo "<img src='img/cancer.png'>";
                    }
                    break;
                case 8:
                    if($dia >= 23){
                        echo "<p>Seu signo é: Virgem </p>";
                        echo "<img src='img/virgem.png'>";
                    } else{
                        echo "<p>Seu signo é: Leão </p>";
                        echo "<img src='img/leao.png'>";
                    }
                    break;
                case 9:
                    if($dia >= 23){
                        echo "<p>Seu signo é: Libra </p>";
                        echo "<img src='img/libra.png'>";
                    } else{
                        echo "<p>Seu signo é: Virgem </p>";
                        echo "<img src='img/virgem.png'>";
                    }
                    break;
                case 10:
                    if($dia >= 23){
                        echo "<p>Seu signo é: Escorpião </p>";
                        echo "<img src='img/escorpiao.png'>";
                    } else{
                        echo "<p>Seu signo é: Libra </p>";
                        echo "<img src='img/libra.png'>";
                    }
                    break;
                case 11:
                    if($dia >= 22){
                        echo "<p>Seu signo é: Sagitário </p>";
                        echo "<img src='img/sagitario.png'>";
                    } else{
                        echo "<p>Seu signo é: Escorpião </p>";
                        echo "<img src='img/escorpiao.png'>";
                    }
                    break;
                case 12:
                    if($dia >= 22){
                        echo "<p>Seu signo é: Capricornio </p>";
                        echo "<img src='img/capricornio.png'>";
                    } else{
                        echo "<p>Seu signo é: Sagitário </p>";
                       echo "<img src='img/sagitario.png'>";
                    }
                    break;
                default:
                    return "Data incorreta!";
            }
        }

        if(isset($_GET["data"])){
            $data = date_parse($_GET["data"]);
            $signo = getSigno($data["month"], $data["day"]);
        }
    ?>
</body>
</html>
