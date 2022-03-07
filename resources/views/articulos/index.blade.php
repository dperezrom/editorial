<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-monografias>
                        <h1 class="font-bold">ARTICULOS</h1>
                        <table class="table-auto">
                            <thead>
                                <th class="px-6 py-2 text-gray-500">
                                    Titulo
                                </th>
                                <th class="px-6 py-2 text-gray-500">
                                    Año
                                </th>
                                <th class="px-6 py-2 text-gray-500">
                                    Numero de paginas
                                </th>
                                <th class="px-6 py-2 text-gray-500">
                                    Numero de autores
                                </th>
                                <th class="px-6 py-2 text-gray-500">
                                    Numero de monografias
                                </th>
                            </thead>
                            <tbody>
                                @foreach ($articulos as $articulo)
                                    <tr>
                                        <td class="px-6 py-2">{{ $articulo->titulo }}</td>
                                        <td class="px-6 py-2">{{ $articulo->anyo }}</td>
                                        <td class="px-6 py-2">{{ $articulo->num_paginas }}</td>
                                        <td class="px-6 py-2">{{ $articulo->autores_count }}</td>
                                        <td class="px-6 py-2">{{ $articulo->monografias_count }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </x-monografias>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
