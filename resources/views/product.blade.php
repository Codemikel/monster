@extends('template')
<?php $pageName = "Productos"; ?>
@section('content')
    <header class="h-24 w-full shadow-md bg-white">
        <section class="w-5/6 mx-auto flex items-center justify-between h-24">
            <div>
                <a href="" class="font-serif text-4xl">Drink it Colombia</a>
            </div>
            <nav class=" w-1/2">
                <ul class="flex items-center  justify-around">
                    <li><a class="hover:underline hover:font-bold hover:text-monster-green" href="#monster">Productos</a></li>
                    <li><a class="hover:underline hover:font-bold hover:text-monster-green" href="#redbull">Usuarios</a></li>
                    <li><a class="hover:underline hover:font-bold hover:text-monster-green" href="#doritos">Pedidos</a></li>
                </ul>
            </nav>
            <div>
                <a href="/"><i class="fas fa-sign-out-alt mr-2"></i>Salir</a>
            </div>
        </section>
        <section>
            <div class="w-5/6 mx-auto">
                <h2 class="text-3xl mb-8 font-bold font-serif">Productos</h2>

            </div>
            <section class="w-5/6 mx-auto flex flex-wrap items-center justify-between gap-8">
                @for ($i = 0; $i < 10; $i++)
                    <article class="w-2/12 bg-white shadow-md rounded-xl flex flex-col p-4 gap-4">
                        <img src="{{ Vite::asset('resources/assets/monster.png') }}" alt="Monster">
                        <h3 class="font-bold">Monster Ultra Paradise</h3>
                        <p>Monster Ultra Paradise es una bebida energética con un sabor tropical y cítrico.</p>
                        <button class="h-12 px-8 bg-monster-green rounded text-white">Comprar</button>
                    </article>
                @endfor
            </section>
        </section>
    </header>
@endsection