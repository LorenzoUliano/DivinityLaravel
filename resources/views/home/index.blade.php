@extends('layouts.app')


@section('title', 'Home')
@section('header')
    
@section('content')
    <style>
        @import url('http://fonts.cdnfonts.com/css/made-florence-sans');
        .welcome{
            z-index: 1;
            position: relative;
            height: 541px;
            width: 100vw;
        }
        .welcome::before{
            content: "";
            position: absolute;
            top: 0; 
            left: 0;
            width: 100%; 
            height: 100%;  
            opacity: .4; 
            z-index: -1;
            background-image: url({{ asset('images/skywars.png') }});
        }
        .welcome h1{
           font-family: 'MADE Florence Sans';
           font-size: 72px;
           font-weight: normal;
           line-height: 87px;
        }
        .welcome p{
            font-family: montserrat;
        }
    </style>
    <section>
        <div class="flex flex-col items-center justify-center text-center text-white welcome">
            <h1 class="my-2 text-7xl">SEJA BEM VINDO AO NOSSO WEBSITE OFICIAL!</h1>
            <hr class="w-1/3 my-2 border-1">
            <p class="mx-96">Aqui, você poderá encontrar diversas novidades e informações sobre o servidor. Você pode apoiar o servidor adquirindo um de nossos produtos na loja, como recompensa você receberá benefícios exclusivos.</p>
        </div>
    </section>
@endsection