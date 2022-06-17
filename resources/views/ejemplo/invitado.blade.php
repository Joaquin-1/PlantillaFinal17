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



                        --Diseño de una tabla

                        <table class="table text-neutral-900 border-separate space-y-6 text-sm text-center">
                            <thead class="bg-green-500 text-white">
                                <tr>
                                    <th class="p-3 text-align">Denominacion</th>
                                    <th class="p-3 text-align">Precio</th>
                                    <th class="p-3 text-align">Cantidad</th>
                                    <th class="p-3 text-align">Precio Total</th>
                                    <th class="p-3 text-align">Operaciones</th>
                    

                                </tr>

                            </thead>
                            <tbody>
                        </table>
                        </tbody>

                        --Diseño Boton

                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                            Boton
                        </button>



                        <br>
                        <a href="{{ route('ejemplo.index') }}">index</a>





                    </x-plantilla>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
