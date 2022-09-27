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
<p>Digite um valor: </p><input type="number" size="20" name="valor"required>
<br><br>
<input type="submit" value="Calcular" class="btn btn-primary">
<?php

if (isset ($_POST['valor']))
{
$v = $_POST['valor'];

if ($v % 2 ==0){
    echo "<p>$v é um numero par</p>";
}
else
echo "<p>$v é um numero impar</p>";

if ($v >=0)
    echo "<p>$v é um numero positivo </p>";
else
    echo "<p>$v é um numero negativo </p>";

}
?>
</form>
</div>

</body>
</html>
