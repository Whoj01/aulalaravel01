<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="{{asset('css/principal.css')}}"> {{--ele vai procurar o endereco diretamente na pasta public--}}
</head>
<body>
    
    <div class="row">
        <div class="col1">
            <ul class="menu">
                <li><a class='{{request()->routeIs('clientes.*') ? 'active' : ''}}' href="{{route('clientes.index')}}">Clientes</a></li>
                <li><a class='{{request()->routeIs('produtos') ? 'active' : ''}}' href="{{route('produtos')}}">Produtos</a></li>
                <li><a  class='{{request()->routeIs('departamentos') ? 'active' : ''}}' href="{{route('departamentos')}}">Departamentos</a></li>
            </ul>
        </div>
        <div class="col2">
            @yield('content') {{--o conteudo de yield vai ser oq declaramos como section em outro blade--}}

        </div>
    </div> 
</body>
</html>