
<?php

$arts =  array ();
array_push ($arts, array (1, 'Titulo artículo 1', 'Este sería el contenido de artículo 1 que no es muy largo'));
array_push ($arts, array (2, 'Titulo artículo 2', 'Este sería el contenido de artículo 2 que es el siguiente'));
array_push ($arts, array (3, 'Titulo artículo 3', 'Este sería el contenido de artículo 3 que es la suma de los dos anteriores'));
array_push ($arts, array (5, 'Titulo artículo 5', 'Este sería el contenido de artículo 5 que sigue la numeración de Fibonacci'));
array_push ($arts, array (8, 'Titulo artículo 8', 'Este sería el contenido de artículo 8 que ya es el último'));

?>
<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Articulos</title>
</head>
<body class="m-4 row justify-content-center">

<ul class="nav">
  <li class="nav-item">
    <a class="nav-link" href="/index">Artículos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/contact">Contacto</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/about">Sobre nosotros</a>
  </li>

</ul>

<h1 class="text-center">Contacta con nosotros</h1>
<div class=" col-auto">
<form method="post">
<?= csrf_field() ?>
  <div class="form-group">
    <label for="exampleInputEmail1">Email </label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">Nunca compartiremos tu email con nadie.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>

  <div class="text-center">
  <button type="submit" class="btn btn-primary">Enviar</button>
</div>
</form>
</div>
</body>
</html>