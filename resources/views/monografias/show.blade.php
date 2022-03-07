<x-monografias>
    <h1>Monografía: {{ $monografia->titulo }}</h1>
    <table class="table-auto">
        <thead>
            <th class="px-6 py-2 text-gray-500">
                Titulo
            </th>
            <th class="px-6 py-2 text-gray-500">
                Año
            </th>
            <th class="px-6 py-2 text-gray-500">
                Num Páginas
            </th>
        </thead>
        <tbody>

            @foreach ($monografia->articulos as $articulo)

                <tr>
                    <td class="px-6 py-2">{{ $articulo->titulo }}</td>
                    <td class="px-6 py-2">{{ $articulo->anyo }}</td>
                    <td class="px-6 py-2">{{ $articulo->num_paginas }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        <h1>Total Número de páginas</h1>
        <td class="px-6 py-2">{{ $monografia->articulos_sum_num_paginas }}</td>
    </div>
    <div>
        <a href="/monografias" class="px-4 py-1 text-sm text-white bg-blue-500 rounded">Volver</a>
    </div>
</x-monografias>
