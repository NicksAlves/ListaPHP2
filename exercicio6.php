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
            height: 300px;
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
<p>Digite a idade do nadador: </p><input type="number" size="20" name="idade"required>
<br><br>
<input type="submit" value="Calcular" class="btn btn-primary">
<br><br>
<?php

if (isset ($_POST['idade']))
{
$idade = $_POST['idade'];

if ($idade >= 5 && $idade <=7 ){
    echo "<p>Infantil A </p>";
}

elseif ($idade >= 8 && $idade <=12 ){
    echo "<p>Infantil B </p>";
}
else if ($idade >= 13 && $idade <=13 ){
    echo "<p>Juvenil A</p>";
}
else if ($idade >= 14 && $idade <=17 ){
    echo "<p> Juvenil B </p>";
}
else if ($idade >= 18 ){
    echo "<p>Adulto </p>";
}
else 
    echo "<p>Invalido!</p>";
}
?>
</form>
</div>

</body>
</html>
