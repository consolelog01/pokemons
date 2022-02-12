<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemons (Acuaticos)</title>
    <link href="{{asset(mix('css/app.css'))}}" rel="stylesheet">
    <link href="{{asset('css/estilosappsitioweb.css')}}" rel="stylesheet">
    <link href="{{asset('css/estilosPersonalizados.css')}}" rel="stylesheet">
    <link href="{{asset('css/estilosCards.css')}}" rel="stylesheet">
</head>
<body>
    <main>
        @php
            $existeVista = ( View::exists('pokemons.especiesdAcuaticas') ) ? true : false;
        @endphp   
        <section class="d-flex justify-content-center align-items-center p-a top-0-p-a bottom-0-p-a rigth-0-p-a left-0-p-a">
            @if ( $existeVista )
                <article></article>
            @else
                <article id="card-informacion-pokemon">
                    <card-informacion-pokemon></card-informacion-pokemon>
                </article>
            @endif
        </section>
    </main>
    <script src="{{ asset(mix('js/app.js')) }}"></script>
</body> 
</html>