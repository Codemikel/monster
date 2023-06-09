@extends('template')
<?php $pageName = "Inicio"; ?>
@section('content')

    <section class="w-full min-h-screen">
        <header class="h-24 w-full shadow-md bg-white">
            <section class="w-5/6 mx-auto flex items-center justify-between h-24">
                <div>
                    <a href="/" class="font-serif text-4xl">Drink it Colombia</a>
                </div>
                <nav class=" w-1/2">
                    <ul class="flex items-center  justify-around">
                        <li><a class="hover:underline hover:font-bold hover:text-monster-green" href="#monster">Monster</a></li>
                        <li><a class="hover:underline hover:font-bold hover:text-monster-green" href="#redbull">RedBull</a></li>
                        <li><a class="hover:underline hover:font-bold hover:text-monster-green" href="#doritos">Doritos</a></li>
                    </ul>
                </nav>
                <div>
                    <a href="{{ route('login') }}"><i class="fas fa-user mr-3 text-monster-green"></i>Ingresar</a>
                </div>
            </section>
        </header>
        <main  class="min-h-screen-90 bg-monster-hero bg-no-repeat bg-cover bg-center w-full">
            <section class="w-full min-h-screen-90 bg-opacity-50  bg-black flex items-center justify-center flex-col">
                <h1 class="text-monster-green text-5xl mb-8 font-bold">
                    Recarga tu energía al máximo
                </h1>
                <p class="text-white text-2xl w-3/4 text-center mb-8">
                    Diseñadas para brindarte un impulso incomparable, nuestras bebidas seleccionadas y sabrosas te mantendrán enérgico y alerta durante todo el día. Descubre el poder que hay dentro de ti.
                </p>
                <button class="h-16 bg-monster-green px-4 rounded shadow-md">
                    <a href="#" class="text-white text-xl">¡Compra ahora y vive al máximo!</a>
                </button>
            </section>
        </main>
        <section id="monster"  class="my-16 w-full">
            <div class="w-5/6 mx-auto">
                <h2 class="text-3xl mb-8 font-bold font-serif">Últimos lanzamientos</h2>
            </div>
            <section class="w-5/6 mx-auto flex flex-wrap items-center justify-between gap-8">
                @forelse ($products as $product)
                    <article class="w-2/12 bg-white shadow-md rounded-xl flex flex-col p-4 gap-4">
                        <img src="{{ $product->image_path }}" alt="Monster">
                        <h3 class="font-bold">Monster Ultra Paradise</h3>
                        <p>Monster Ultra Paradise es una bebida energética con un sabor tropical y cítrico.</p>
                        <button class="h-12 px-8 bg-monster-green rounded text-white">Comprar</button>
                    </article>
                @empty

                @endforelse
            </section>
        </section>
        <section id="redbull"  class="my-16 w-full">
            <div class="w-5/6 mx-auto">
                <h2 class="text-3xl mb-8 font-bold font-serif">RedBull</h2>
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
        <section id="doritos" class="my-16 w-full">
            <div class="w-5/6 mx-auto">
                <h2 class="text-3xl mb-8 font-bold font-serif">Doritos</h2>
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
    </section>

@endsection