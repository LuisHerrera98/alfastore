<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Inicio</title>
    <link rel="icon" href="images/logoIcono.jpeg">

    <!-- Iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Raleway:500,600&display=swap" rel="stylesheet">

    <!--Materialize-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- CSS Estilos -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!--TIPOGRAFIA GOOGLE FONTS-->

    <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Syne+Mono&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('css/estilosHeader.css')}}">

    <link rel="stylesheet" href="{{asset('css/styleTalles.css')}}">
</head>

<body>
    <header class="header" id="header">
        <div class="container2 logo-nav-container">
            <div class="icon-busq" style="width:250px; position:relative;">
                <a href="index.php" class="logo"><img src="images/corona.jpg" alt=""></a>
                <div style="position:absolute; left:60px;">
                    <h1 style="margin:0;">Nacho Store ADMIN</h1>
                </div>
            </div>
            <div id="" class="navegacion">
                <span class="menu-icon"><a href="#">
                        <p class="palabraMenu"><i class="fas fa-home"></i>Productos</p><i class=" fas fa-bars"></i>
                    </a></span>

                <ul class="menuNavegacion" style="margin-top:5px;">
                    <li><a href="ventas.php" style="font-size:16px; padding:1px;">VENTAS</a></li>
                    @foreach($categories as $category)
                    <li><a href="/category/{{$category->id}}/{{$category->category}}" style="font-size:16px; padding:1px;">{{$category->category}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

    </header>
    <header class="header-compu" id="heade">
        <div class="menuSuperior">
            <div class="logo-nombre">
                <img src="images/corona.jpg" alt="">
                <h6>NachoStore</h6>
            </div>
            <div class="caja-input">
                <input type="text" placeholder="Buscar">
            </div>
            <div class="menuSuperiorDerecho">
                <a href="registro.html">Crear Cuenta</a>
                <a href="login.html">Iniciar Sesion</a>

            </div>
        </div class="navegacionMenuInferior">
        <ul class="listaNavegacion">
            <a href="index.html">
                <li>Inicio</li>
            </a>
            <a href="productos.html">
                <li>Productos</li>
            </a>
            <a href="contacto.html">
                <li>Contacto</li>
            </a>
            <a href="comoComprar.html">
                <li>Como Comprar</li>
            </a>
            <div class="cajitaDelCarrito">
                <a href="carrito.html"><i class="fas fa-shopping-cart"></i></a>
            </div>
        </ul>
        <div>

        </div>

    </header>
    <main style="padding-top:100px">

    </main>
    <section>
        <h2 class="productosDestacados"
            style="margin:0; text-align:center;margin-top:12px; margin-bottom:12px ;font-size:18px;">CATEGORIAS</h2>
        <h2 class="productosDestacados"
            style="margin:0; text-align:center;margin-top:12px; margin-bottom:12px;font-size:20px;">Selecciona una
            carpeta</h2>
        <div class="cajafalsa" style="display:flex; justify-content:center; align-items:center; margin-bottom:15px;">
            <button class="boton-falso boton1"
                style="width: 220px; height:30px;color:white;background-color:black;border:none;border-radius:5px;font-family:monospace;">Agregar
                Categoria</button>
        </div>
        <form class="formulario form desaparecer" action="category/store" method="POST">
            @csrf
            <i class="fas fa-times cruz"></i>
            <div
                style="display: flex; justify-content:center;align-items:center; margin-bottom:10px; flex-direction:column;">
                <label for="" style="color: black; font-size:16px">CREAR UNA CATEGORIA</label> <br>
                <p>Ingrese el nombre de la categoria</p>
                <input type="text" placeholder="Escribir" name="category"
                    style="width:100px; background-color:white; border-radius:3px; margin-left:20px;padding-left:20px">
                <div class="pasos">
                    <p>Instrucciones</p>
                    <p>Debe ser sin espacios.</p>
                    <p>Ejemplos: Jeans</p>
                </div>
            </div>

            <div style="width: 100%; display:flex; justify-content:center; align-items:center;margin-bottom:25px; ">
                <button type="submit"
                    style="width: 200px; height:30px;color:white;background-color:black;border:none;border-radius:5px;font-family:monospace;">Agregar
                    Categoria</button>
            </div>

        </form>

        <div class="caja-talles">
        @foreach($categories as $category)
            <div class="caja-talle">
                <a href="category/{{$category->id}}/{{$category->category}}" style="color:#333;" type="submit"><i
                        class="fas fa-folder icono-carpeta">
                        <p class="texto-talle">{{$category->category}}</p>
                    </i></a>
            </div>
        @endforeach
        </div>
    </section>

    <a href="https://wa.link/5jzkyo" class="whatsapp" target="_blank"><i class="fa fa-whatsapp whatsapp-icon"></i></a>

    <script src="js/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script src="js/scripts.js"></script>
    <script src="js/formulario.js"></script>

</body>

</html>