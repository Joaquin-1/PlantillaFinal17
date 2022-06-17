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
                    <x-plantilla>


                        <table class="table-auto">
                            <thead>
                                <th class="px-6 py-2 text-gray-500">
                                    Código
                                </th>
                                <th class="px-6 py-2 text-gray-500">
                                    Zapato
                                </th>
                                <th class="px-6 py-2 text-gray-500">
                                    Precio
                                </th>
                                <th class="px-6 py-2 text-gray-500">
                                    Añadir al carrito
                                </th>

                            </thead>
                            <tbody>
                                @foreach ($zapatos as $zapato)
                                    <tr>
                                        <td class="px-6 py-2">{{ $zapato->codigo}}</td>
                                        <td class="px-6 py-2">{{ $zapato->denominacion}}</td>
                                        <td class="px-6 py-2">{{ $zapato->precio }}</td>
                                        <td class="px-6 py-2">
                                            <form action="{{ route('carrito.meter', $zapato) }}" method="POST">
                                                @csrf
                                                @method('POST')
                                                <button type="submit" class="px-5 py-2 text-white bg-purple-200">Añadir al carrito</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>


                    </x-plantilla>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
