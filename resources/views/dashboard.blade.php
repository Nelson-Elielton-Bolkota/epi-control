<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- Boas-vindas --}}
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900">

                    <h3 class="text-xl font-semibold mb-2">
                        Bem-vindo ao EPI Control!
                    </h3>

                    <p class="text-gray-600">
                        Olá, {{ Auth::user()->name }}.
                        Utilize o menu acima para acessar as funcionalidades do sistema.
                    </p>

                </div>
            </div>


            {{-- Acesso rápido --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                {{-- EPIs --}}
                <a
                    href="{{ route('epis.index') }}"
                    class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 hover:bg-gray-50 transition"
                >
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">
                        EPIs
                    </h3>

                    <p class="text-gray-600 text-sm">
                        Consulte e gerencie os equipamentos de proteção individual.
                    </p>
                </a>


                {{-- Funcionários --}}
                <a
                    href="{{ route('funcionarios.index') }}"
                    class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 hover:bg-gray-50 transition"
                >
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">
                        Funcionários
                    </h3>

                    <p class="text-gray-600 text-sm">
                        Consulte os funcionários cadastrados no sistema.
                    </p>
                </a>


                {{-- Entregas --}}
                <a
                    href="{{ route('entregas.index') }}"
                    class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 hover:bg-gray-50 transition"
                >
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">
                        Entregas
                    </h3>

                    <p class="text-gray-600 text-sm">
                        Consulte e registre as entregas de EPIs.
                    </p>
                </a>

            </div>

        </div>
    </div>

</x-app-layout>