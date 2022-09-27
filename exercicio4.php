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
            height: 550px;
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
<br>
<p>Lado A </p><input type="number" size="20" name="la"required>
<br><br>
<p>Lado B </p> <input type="number" size="20" name="lb"required>
<br><br>
<p>Lado C:</p> <input type="number" size="20" name="lc"required>
<br><br>
<input type="submit" value="Calcular" class="btn btn-primary">
<br>
<?php

if (isset ($_POST['la']) && isset ($_POST['lb']) && isset ($_POST['lc']))
{
$la = $_POST['la'];
$lb = $_POST['lb'];
$lc = $_POST['lc'];
 
if (($la == $lc && $lc != $b) || ($la == $lb && $lb != $c) || ($lb == $lc && $lc != $a)) {
    echo " <br> <p>O triangulo é isósceles </p>";
} elseif ($la == $lb && $la == $lc) {
    echo "<br> <p>O triangulo é equilátero</p>";
} elseif ($la != $lb && $la != $lc && $lb != $lc) {
    echo " <br> <p> O triangulo é escaleno </p>";
}


}
?>
</form>
</div>

</body>
</html>