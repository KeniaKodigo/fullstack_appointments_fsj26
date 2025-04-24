<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('/')}}/css/style.css">
    <title>Gestion de Paciente y Citas</title>
</head>
<body>
    <!-- incluyendo la vista del nav -->
    @include('layout.nav')
    <!-- blade es un motor de plantillas, directivas(@) -->
    @if (Request::is('/'))
        <h1 class="title">Bienvenido a la plataforma!</h1>
        <section class="container">
            <section class="text-center">
                <img src="https://res.cloudinary.com/dmddi5ncx/image/upload/v1744738230/practicas/informe-medico_bvl00n.png" alt="logo de la plataforma">
            </section>
        </section>
    @endif
    <!-- creando un contenedor dinamico(div) -->
    <section class="container my-4">
        @yield('content-dinamico')
    </section>
    {{-- @php
        $count = 0;
    @endphp

    <p>Total de registros: {{$count}}</p> --}}
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</html>