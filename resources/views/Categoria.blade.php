<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> esta es la vista categoria</h1>
    <h1>{{$envio_mensaje}}</h1>
    <?php
    foreach($categoria as $values){
        echo $values->descripcion.'<br>';
    }
    ?>
</body>
</html>