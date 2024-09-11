<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>peso ideal</title>
</head>

<body>
    <form method="post">
        <label for="">selcione seu sexo</label>
        <select name="selecionar" id="">
            <option value="m">Masculino</option>
            <option value="f">Feminino</option>
        </select>
        <br><br>
        <label for="">Informe seu altura</label>
        <input type="number" name="altura" min="0" step="0.01"><br><br>
        <button>confirmar</button><br><br>
        <label for="">Resultado</label>
        <input type="text" readonly id="resultado">
    </form>
    <?php
    $genero = $_POST["selecionar"] ?? null;
    $altura = $_POST["altura"] ?? 1;
    $resultado= null ;
   

        
    function peso($teste,$alt){
        if($teste == "m"){
            $resultado = (72.2 * $alt)-58;
            return $resultado;
        }
        if($teste == "f"){
            $resultado = (62.1 * $alt)-44.7;
            return $resultado;
        }
    }
    $resultado = peso($genero,$altura);
  echo "<script>document.getElementById('resultado').value = '$resultado'</script>";
   
   ?>
    

</body>

</html>