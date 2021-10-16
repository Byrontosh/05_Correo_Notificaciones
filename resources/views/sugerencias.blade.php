<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Carousel Template · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">

    <!-- Bootstrap core CSS -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-md navbar-dark  bg-dark ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">ByronTosh</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('sugerencias')}}">Sugerencias</a>
                        </li>

                    </ul>
                    <p><a class="btn btn-sm btn-primary" href="/login">Iniciar Sesión</a></p>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container mt-5 col-12 col-sm-6">
            <p class="text text-center h2">Formulario de quejas, novedades o sugerencias</p>


            <form method="POST" action="{{route('sugerencias.form')}}">
                @csrf
                <div class="mb-3">
                    <label for="data1" class="form-label">Nombre</label>
                    <input type="text" class="form-control @error('nombre')is-invalid @enderror" id="data1" name="nombre"  value="{{ old('nombre')}}">
                    <div class="form-text">Ingrese un nombre válido.</div>
                    @error('nombre')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="data2" class="form-label">Apellido</label>
                    <input type="text" class="form-control @error('apellido')is-invalid @enderror" id="data2" name="apellido"  value="{{ old('apellido')}}">
                    <div class="form-text">Ingrese un nombre válido.</div>
                    @error('apellido')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="data3" class="form-label">Correo electrónico</label>
                    <input type="email" class="form-control @error('correo')is-invalid @enderror" id="data3" name="correo"  value="{{ old('correo')}}">
                    <div class="form-text">Ingrese un correo válido.</div>
                    @error('correo')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="data4" class="form-label">Asunto</label>
                    <input type="asunto" class="form-control @error('asunto')is-invalid @enderror" id="data4" name="asunto"  value="{{ old('asunto')}}">
                    <div class="form-text">Ingrese un asunto para procesar</div>
                    @error('asunto')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-floating">
                    <textarea class="form-control @error('mensaje')is-invalid @enderror" name="mensaje" placeholder="Leave a comment here" value="{{ old('mensaje')}}"></textarea>
                    <label for="floatingTextarea" >Ingrese detalladamente su queja, novedad o sugerencia </label>
                    <div id="emailHelp" class="form-text">Ingrese la información</div>
                    @error('mensaje')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>
                <br>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
            </form>
        </div>
    </main>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>