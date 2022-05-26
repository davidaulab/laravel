@extends ('layouts.app')

@php

$arts =  array ();
array_push ($arts, array (1, 'Titulo artículo 1', 'Este sería el contenido de artículo 1 que no es muy largo'));
array_push ($arts, array (2, 'Titulo artículo 2', 'Este sería el contenido de artículo 2 que es el siguiente'));
array_push ($arts, array (3, 'Titulo artículo 3', 'Este sería el contenido de artículo 3 que es la suma de los dos anteriores'));
array_push ($arts, array (5, 'Titulo artículo 5', 'Este sería el contenido de artículo 5 que sigue la numeración de Fibonacci'));
array_push ($arts, array (8, 'Titulo artículo 8', 'Este sería el contenido de artículo 8 que ya es el último'));

@endphp

@section ('titulo', 'Listado de articulos')

@section ('contenido')
<ul>
@foreach ($arts as $art) 
    <li><a href="/article/{{ $art[0] }}"> {{ $art[1] }}</li>
@endforeach
</ul>
@endsection