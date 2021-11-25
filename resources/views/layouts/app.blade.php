<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/8e8cb36d53.js"></script>
    <title>@yield("title") | {{ config('app.name') }}</title>
    <style>
        body{
            background-color: #212529; 
        }
        ::selection{
            background-color: #8A3B7E;
        }
        .header{
            font-family: montserrat;
            background-color: #15171A; 
        }
        .nav-links li{
            list-style: none;
        }
    </style>
</head>
<body>
    <header>
        <div class="flex items-center justify-between w-full h-20 px-10 text-white header">
            <div>
                <a href="{{ asset("home") }}"><img src="{{ url("images/divinity_logo.png") }}" alt="" class="w-44"></a>
                
            </div>
            <div>
                <ul class="nav-links">
                    <li><a class="transition-all p-7 hover:bg-gray-800" href="">Início</a></li>
                    <li><a class="transition-all p-7 hover:bg-gray-800" href="">Loja</a></li>
                    <li><a class="transition-all p-7 hover:bg-gray-800" href="">Explorar</a></li>
                    <li><a class="transition-all p-7 hover:bg-gray-800" href="">Ajuda</a></li>
                </ul>
            </div>
            <div class="text-2xl">
                <a href="#" class="inline-block "><i class="px-1 fa fa-user" aria-hidden="true"></i>Login</a>
            </div>
        </div>
        @yield('header')
    </header>
    
        @yield('content')
</body>
</html>