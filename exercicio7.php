<!DOCTYPE html>
<html lang="en">
<head>
<?php

$nome= "";
$n1= "";
$n2= "";
$n3= "";
$n4 = "";

if($_POST) {
    $nome = $_POST["nome"];
    $n1 = isset($_POST['n1']) ? $_POST['n1'] : "";
    $n2 = isset($_POST['n2']) ? $_POST['n2'] : "";
    $n3 = isset($_POST['n3']) ? $_POST['n3'] : "";
    $n4 = isset($_POST['n4']) ? $_POST['n4'] : "";

}

?>
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
            input[type=text] {
                width: 300px;
                height:50px;
                margin-left:100px;
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
<p>Nome do aluno: </p><input value = "<?=$nome?>" type="text" size="20" name="nome"required>
<br>
<p>Nota 1: </p> <input value = "<?=$n1?>" type="number" size="20" name="n1"required>
<br>
<p>Nota 2:</p> <input value = "<?=$n2?>" type="number" size="20" name="n2"required>
<br>
<p>Nota 3: </p> <input value = "<?=$n3?>" type="number" size="20" name="n3"required>
<br>
<p>Nota 4: </p> <input value = "<?=$n4?>" type="number" size="20" name="n4"required>
<br><br>

<?php

if (isset ($_POST['nome']) && isset ($_POST['n1']) && isset ($_POST['n2']) && isset ($_POST['n3']) && isset ($_POST['n4']))
{
$nome = $_POST['nome'];
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];
$n4 = $_POST['n4'];


if (!isset($_POST["exame"])) {

    $media = ($n1 + $n2 + $n3 + $n4) / 4;

    if ($media >= 7) 
    {
        echo "<p> O Aluno $nome foi aprovado com média $media </p>";
    } 
    else 
    {
        echo '<input type="text" step="any" placeholder="Digite a nota de exame" id="exame" name="exame" required> <br>';
    }
} 
else 
{
    $exame = $_POST["exame"];
    $media = $exame;
    if ($media >= 5) 
    {
        echo "<p> O Aluno $nome foi aprovado com média $media </p>";
    } 
    else 
    {
        echo "<p>O Aluno $nome foi reprovado com média $media </p>";
    }
}
}



?>
<br>
<input type="submit" value="Calcular" class="btn btn-primary">
</form>
</div>

</body>
</html>
