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
            input[type=text] {
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
<?php

       $vetororRandom = [];
       for ($i = 1; $i <= 50; $i++) {
           array_push($vetororRandom, rand(0, 500));
       }
       sort($vetororRandom); 

       $par = 0;
       $primo = 0;

       foreach ($vetororRandom as $n) {

           if ($n % 2 == 0) {
               $par++;
           }

           $divisores = 0;
           for ($i = $n; $i >= 1; $i--) {
               if ($n % $i == 0) {
                   $divisores++;
               }
           }
           if ($divisores == 2) {
               $primo++;
           }
       }

       for ($i = 0; $i <= 49; $i++) {
          var_dump($vetororRandom[$i]);
          echo "  ---  ";

    }
       echo " <br> Há $par números pares e $primo números primos no vetoror";




 ?>


</form>
</div>

</body>
</html>