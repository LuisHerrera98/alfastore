<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Crear Producto</title>


    <!-- Iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">



    <!--Materialize-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">


    <!-- CSS Estilos -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!--CSS DEL REGISTRO PERRIS-->
    <link rel="stylesheet" href="{{ asset('css/styleRegistro.css') }}">

    <!--CSS DE LOS INPUT PARA CARGAR IMAGENES-->
    <link rel="stylesheet" href="{{ asset('css/inputFile.css') }}">

    <link rel="stylesheet" href="{{ asset('css/styleTalles.css') }}">


</head>

<body>
    <main>
        <div class="logoSuperior" style="padding-top:12px;">
            <a href="/" class="logo-centro">
                <img src="../../images/corona-recorte.png" alt="">
                <h1 class="nombrePrincipal">Nacho Store</h1>
            </a>
        </div>
    </main>

    <h1 style="margin-top: 12px;margin-bottom:5px;text-align: center;">AGREGAR {{ $category->category }}</h1>
    <form action="/product/store" method="POST" enctype="multipart/form-data" class="formularioPerris">
        @csrf
        <label for="nombre">Ingrese el nombre</label>
        <input type="text" name="name" id="nombre" class="input-crear">

        <br id="br-nombre">
        <label for="nombre">Ingrese el costo</label>
        <input type="text" name="cost" id="cost" class="input-crear">

        <br id="br-nombre">
        <label for="nombre">Ingrese el precio</label>
        <input type="text" name="price" id="price" class="input-crear">

        <input type="hidden" name="category_id" value="{{ $category->id }}">

        <label for="nombre" style="font-weight:bold;">Ingrese cantidades por talle</label>
        <br>

        @foreach ($sizes as $size)
            <div class="inputTalles">
                <label for="">Talle {{$size->size}}</label>
                <input type="number" name="{{$size->id}}">
                <input type="hidden" name="size_id" value="{{ $size->id }}">
            </div>
        @endforeach

        <!--
        <br id="br-descuento">
        <label for="imagen">Carga la imagen "Principal"</label>
            <div class="botones-input-file" id="primer-button">Subir imagen <i class="fas fa-file-upload"></i>
            <input class="subir-imagen-principal" type="file" name="foto" id="img-principal">
            </div> 
        <hr>    
        -->
        <button type="submit" style="margin-top:5px;" name="guardar">Crear Producto</button>
    </form>

</body>

</html>
