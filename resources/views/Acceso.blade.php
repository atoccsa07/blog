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
    <h1>Esta es la Vista Acceso</h1>
    <h1>{{$acceso_mensaje}}</h1>

    <table class="table table-dark table-striped">

<thead>

    <tr>

      <th scope="col">ID_ACCESO</th>

      <th scope="col">DESCRIP_ACCESO</th>

      <th scope="col">ESTADO</th>


    </tr>

  </thead>

  <tbody>

    @foreach($acceso as $value)    

    

    <tr>

        <th scope="col">{{$value->idacceso}}</th>

        <th scope="col">{{$value->descrip_accseso}}</th>

        <th scope="col">{{$value->estado}}</th>


      </tr>

    @endforeach 

  <tbody>  

</table>
</body>
</html>