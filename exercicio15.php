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
            margin-left:400px;
            width: 700px;
            height: 1200px;
            border: 2px solid black;}
            p{
                text-align:center;
                font-size:24px;
            }
            input[type=text]  {
                width: 500px;
                height:50px;
                margin-left:100px;
            }
            input[type=submit]
            {
                margin-left:300px;
            }
            .teste, h1{
          margin:40px;
        }
        textarea{
            resize: none;
            width: 500px;
            height:200px;
            margin-left:100px;
        }
    </style>
</head>
<body>

<div class="teste">
<div class="shadow p-3 mb-5 bg-white rounded">
<?php
        $vetorJogo = [];
        $vetorPremio = [];
        for ($j = 0; $j < 10; $j++) {
            $numeros = [];
            for ($i = 0; $i < 6; $i++) {
                array_push($numeros, rand(1, 60));
            }
            array_push($vetorJogo, $numeros);
        }

        for ($i = 0; $i < 6; $i++) {
            array_push($vetorPremio, rand(1, 60));
        }
        $qtd = 1;
        foreach($vetorJogo as $jogo) {
            $acertos = 0;
            for($i = 0; $i < 6; $i++) {
                for($j = 0; $j < 6; $j++) {
                    if($jogo[$j] == $vetorPremio[$i]) {
                    $acertos++;
                    }
                }
            }
            echo "<p>$qtd ° jogo teve $acertos acertos</p>";
            $qtd++;

        }

       
        ?>
</div>

</body>
</html>