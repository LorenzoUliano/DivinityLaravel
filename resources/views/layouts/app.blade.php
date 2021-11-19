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
        .header{
            font-family: montserrat;
            background-color: #15171A; 
        }
        
        .nav-links li{
            transition: all 0.3s ease 0s;
            
        }
        .nav-links li:hover{
            font-weight: bold;
        }

    </style>
</head>
<body>
    <header>
        <div class="flex items-center justify-between w-full h-20 px-5 text-white header">
            <div>
                <img src="{{ url("images/divinity_logo.png") }}" alt="" class="w-44">
            </div>
            <div>
                <ul class="nav-links">
                    <li><a href="#">Início</a></li>
                    <li><a href="#">Loja</a></li>
                    <li><a href="#">Explorar</a></li>
                    <li><a href="#">Ajuda</a></li>
                </ul>
            </div>
            <div class="text-2xl">
                <i class="inline-block fa fa-user" aria-hidden="true"></i>
                <p class="inline-block">Login</p>
            </div>
        </div>
        @yield('header')
    </header>
        @yield('content')
</body>
</html>