<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Document</title>
    <style>
        body{
         
        }
        form {
            margin-top:10px;
            margin-left:500px;
            width: 500px;
            height: 700px;
            border: 2px solid black;}
            p{
                text-align:center;
                font-size:24px;
            }
            input[type=number] {
                width: 300px;
                height:50px;
                margin-left:100px;
            }
            input[type=submit]
            {
                margin-left:200px;
            }
            .teste, h1{
          margin:40px;
        }
    </style>
</head>
<body>


<div class="teste">
<div class="shadow p-3 mb-5 bg-white rounded">

<form method="POST" action="#">
<p>Quilometragem inicial </p><input type="number" size="20" name="qi"required>
<br>
<p>Quilometragem final: </p> <input type="number" size="20" name="qf"required>
<br>
<p>Litros consumidos:</p> <input type="number" size="20" name="lc"required>
<br>
<p>Preço do litro: </p> <input type="number" size="20" name="pl"required>
<br><br>
<input type="submit" value="Calcular" class="btn btn-primary">
<?php

if (isset ($_POST['qi']) && isset ($_POST['qf']) && isset ($_POST['lc']) && isset ($_POST['pl']))
{
$qi = $_POST['qi'];
$qf = $_POST['qf'];
$lc = $_POST['lc'];
$pl = $_POST['pl'];

$distancia  = $qf - $qi;
$gasto = $lc * $pl;
$consumo = $distancia/$lc;

echo "<br><br><p> A distancia percorrida foi: ". $distancia. "km</p>";
echo "<p> O gasto de combustivel foi: ". $gasto. " reais </p>";
echo "<p> O consumo do carro foi: ". $consumo. "km por litro </p>";


}
?>
</form>
</div>

</body>
</html>
