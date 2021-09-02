<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENU</title>
    
   <style>
        body{
   font-family: Arial, Helvetica, sans-serif;
 background: rgb(58, 56, 56);
}
.menu{
    list-style: none;
    padding: 0px;
    padding-right: 0px;
    background: gray;
    width: 45%;
    max-width: 1000px;
    margin: auto;
    font-size: 20px;
    margin-right: 1px;
    margin-top: 25px;
    /*margin-left: 1px;*/
}

.menu li a{
    text-decoration: none;
    color: white;
    padding: 29px;
    display:block;

}
.menu li{
 display: inline-block;
 text-align: center;

}

.menu li a:hover{
    background: cyan;
}
.leer{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 99px;
    text-align: center;
    color: white;
}
.leer01{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 50px;
    text-align: center;
    color: white;
}
     </style>
</head>
<body>
    <ul class="menu">
       <li><a href="#">Inicio </a></li>
       <li><a href="#"> Producto</a></li>
       <li><a href="#">Ventana</a></li>
       <li><a href="#">Blog</a></li>
       <li><a href="#">Nuve</a></li>
    </ul>

    <div class="leer">
    <p>
    Laravel es mi primer proyecto
    </p>
    </div>
    <div class="leer01">
    <p>
    Este es un ejemplo pequeño
    </p>
    </div>
</body>
</html>
