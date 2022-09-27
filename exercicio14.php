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

<form method="post">
        <br><br>
        <textarea id="conteudo" name="conteudo"  placeholder="insira seu texto" rows="5"></textarea><br> <br>
        <input type="text" id="busca" name="busca" placeholder="Digite a palavra">
<br> <br>
        <input type="submit" class="btn btn-primary btn-lg" value="Buscar">


        <?php
  if (isset ($_POST['conteudo']) && isset ($_POST['busca'])){ 
            $conteudo = $_POST["conteudo"];
            $busca = $_POST["busca"];

            $anterior = strpos($conteudo, $busca);

            if($anterior) {
                $anterior = $anterior+1;
                $fim = $anterior + strlen($busca);
                echo "<br> <br>A Palavra $busca foi encontrada no texto  e está na posição inicial de $anterior com final em $fim";
            }else {
                echo "<br><br>Não foi encontrada a palavra $busca no texto.";
            }

            echo "<br><br> O texto tem ". strlen($conteudo). " letras";
            echo "<br> O texto tem ". str_word_count($conteudo). " palavras<br><br>";

            $l = [];

            foreach(range('a', 'z') as $letra) {
                $aparece = substr_count($conteudo, $letra);
                if($aparece > 0) {
                    array_push($l, array("letra" => $letra, "quantidade" => $aparece));
                }
            }

            foreach($l as $letra) {

                echo "Letra: ". $letra['letra'].", aparece ".$letra["quantidade"]. " vezes<br>";
            }



            echo "<br><br>Palavra: $busca<br> Conteudo:$conteudo";

        }
        
        ?>
</form>
</div>

</body>
</html>