<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Eta es la vista Cliente</h1>
    <h1>{{$cliente_mensaje}}</h1>
    <?php
    foreach($cliente as $values){
        echo $values->ape_nom.'<br>';
    }
    ?>
</body>
</html>