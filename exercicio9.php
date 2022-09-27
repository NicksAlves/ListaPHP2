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
$i = 1;
$acumulo = 0;
do{
    $acumulo = $acumulo + $i;
    $i++;
}
while ($i <= 100);

echo "Total dos 100 primeiros números inteiros é: ". $acumulo;

?>
</form>
</div>

</body>
</html>
