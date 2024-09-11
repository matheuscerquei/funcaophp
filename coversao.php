<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conversão de moedas</title>
</head>
<body>
    <form method="post">

    <label for="">conversão de moedas</label>
    <input type="number"name="num"><br><br>
    <button>conversão</button>
    </form>

    <?php 
    $num = $_POST["num"] ?? null;
    function conversao($valor){
        $num = ($valor * 5.66);
        return $num;
    }
    echo "valor é: ". conversao($num);
    ?>
</body>
</html>