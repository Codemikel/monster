@extends('template')
<?php $pageName = "Pedido"; ?>
@section('content')
    <header class="h-24 w-full shadow-md bg-white">
        <section class="w-5/6 mx-auto flex items-center justify-between h-24">
            <div>
                <a href="/" class="font-serif text-4xl">Drink it Colombia</a>
            </div>
            <nav class=" w-1/2">
                <ul class="flex items-center  justify-around">
                    <li><a class="hover:underline hover:font-bold hover:text-monster-green" href="/productos">Productos</a></li>
                    <li><a class="hover:underline hover:font-bold hover:text-monster-green" href="/usuarios">Usuarios</a></li>
                    <li><a class="hover:underline hover:font-bold hover:text-monster-green" href="/pedidos">Pedidos</a></li>
                </ul>
            </nav>
            <div>
                <a href="/"><i class="fas fa-sign-out-alt mr-2"></i>Salir</a>
            </div>
        </section>
        <section class="mt-8">
            <div class="w-5/6 mx-auto">
                <h2 class="text-3xl mb-8 font-bold font-serif">Pedidos</h2>

            </div>
            <section class="w-full">
                <table class="w-5/6 mx-auto">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Marca</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="my-4 text-center">Monster</td>
                        <td class="my-4 text-center">Monster</td>
                        <td class="my-4 text-center">Monster</td>
                        <td class="my-4 text-center">Monster</td>
                        <td class="my-4 text-center">Monster</td>
                        <td class="my-4 text-center">
                            <a href=""><i class="fas fa-edit"></i></a>
                            <a href=""><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </section>
        </section>
    </header>
@endsection