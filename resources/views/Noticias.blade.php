<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

</head>
<body>
    <h1>Esta es la vista Noticias</h1>
    <h1>{{$mensaje_enviado}}</h1>

    <table class="table table-dark table-striped">

<thead>

    <tr>

      <th scope="col">ID_NOTICIAS</th>

      <th scope="col">TITULO</th>

      <th scope="col">CATEGORIAS</th>

      <th scope="col">DESCRIPCION</th>

    </tr>

  </thead>

  <tbody>

    @foreach($noticias as $value)    

    

    <tr>

        <th scope="col">{{$value->idnoticias}}</th>

        <th scope="col">{{$value->titulo}}</th>

        <th scope="col">{{$value->categoria}}</th>

        <th scope="col">{{$value->descripcion}}</th>

      </tr>

    @endforeach 

  <tbody>  

</table>
</body>
</html>