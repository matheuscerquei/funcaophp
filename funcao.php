<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>função</title>
</head>

<body>
    <form method="post">

        <label for="fahrenheit" name="num1">fahrenheit</label>
        <input type="number" name="num1"> <br><br>
        <button>converção</button>

    </form>

    <?php
    $num1 = $_POST["num1"] ?? null;
    function convercao($valor)
    {
        $num2 = ($valor - 32) * 5 / 9;
        return $num2;
    }


    if($num1 != null){

    echo "O resultado eh: " . round(convercao($num1));
}
  


    ?>
</body>

</html>