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
            height: 600px;
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
<p>Votos brancos </p><input type="number" size="20" name="vb"required>
<br>
<p>Votos nulos: </p> <input type="number" size="20" name="vn"required>
<br>
<p>Votos validos:</p> <input type="number" size="20" name="vv"required>
<br><br>
<input type="submit" value="Calcular" class="btn btn-primary">
<br>
<?php

if (isset ($_POST['vb']) && isset ($_POST['vn']) && isset ($_POST['vv']) && isset ($_POST['tv']))
{
$vb = $_POST['vb'];
$vn = $_POST['vn'];
$vv = $_POST['vv'];

$tv = $vb + $vn + $vv;
$porcentagemB = ($vb/$tv)*100;
$porcentagemN = ($vn/$tv)*100;
$porcentagemt = ($vv/$tv)*100;

echo "<br><p> Porcentagem dos votos em branco é de: ". round ($porcentagemB, 2) ."%</p>";
echo "<p> Porcentagem dos votos nulos é de: ". round ($porcentagemN, 2) ."%</p>";
echo "<p> Porcentagem dos votos validos é de: ". round ($porcentagemt, 2) ."%</p>";

}
?>
</form>
</div>

</body>
</html>