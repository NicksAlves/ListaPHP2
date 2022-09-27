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
            height: 1000px;
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
<form method="post">

<p> Crie um vetor: </p><input type="number" id="n" name="n" placeholder="Digite um número" required>
<br> <br> 
<input type="submit" value="Criar vetor" class="btn btn-primary">
<br> <br>

<?php

if (isset ($_POST['n'])) {
$vetor = [];
$n = $_POST['n'];
for ($i = 1; $i <= $n; $i++) {
    array_push($vetor, rand(0, 500));
}

$soma = 0;
foreach($vetor as $n) {
    $soma+=$n;
}
$media = $soma / count($vetor);

for ($i = 0; $i <  count($vetor); $i++) {
    echo " <br>  -  ";
    var_dump($vetor[$i]);
}

echo "<br> <br> <p>A soma do vetor é: $soma e a média é: ". round($media,2). "</p>";



}
?>

</form>
</div>

</body>
</html>