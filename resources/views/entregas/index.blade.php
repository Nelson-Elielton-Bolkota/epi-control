<x-app-layout>

    <x-slot name="header">
        <div class="flex items-center justify-between">

            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Entregas') }}
            </h2>

            <a href="{{ route('entregas.create') }}">
                <x-primary-button>
                    + Cadastrar entrega
                </x-primary-button>
            </a>

        </div>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


            {{-- Mensagem de sucesso --}}
            @if (session('success'))

                <div class="mb-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg">
                    {{ session('success') }}
                </div>

            @endif


            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900">


                    <div class="flex items-center justify-between mb-6">

                        <div>

                            <h3 class="text-lg font-semibold text-gray-800">
                                Lista de Entregas
                            </h3>

                            <p class="text-sm text-gray-500 mt-1">
                                Entregas de EPIs realizadas aos funcionários.
                            </p>

                        </div>

                    </div>


                    @if ($entregas->count() > 0)


                        <div class="overflow-x-auto">

                            <table class="min-w-full divide-y divide-gray-200">

                                <thead class="bg-gray-50">

                                    <tr>

                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Funcionário
                                        </th>

                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            EPI
                                        </th>

                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Quantidade
                                        </th>

                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Data da entrega
                                        </th>

                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Devolução
                                        </th>

                                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Ações
                                        </th>

                                    </tr>

                                </thead>


                                <tbody class="bg-white divide-y divide-gray-200">


                                    @foreach ($entregas as $entrega)

                                        <tr class="hover:bg-gray-50">


                                            {{-- Funcionário --}}
                                            <td class="px-6 py-4 whitespace-nowrap">

                                                <div class="text-sm font-medium text-gray-900">
                                                    {{ $entrega->funcionario->nome }}
                                                </div>

                                            </td>


                                            {{-- EPI --}}
                                            <td class="px-6 py-4 whitespace-nowrap">

                                                <div class="text-sm text-gray-700">
                                                    {{ $entrega->epi->nome }}
                                                </div>

                                            </td>


                                            {{-- Quantidade --}}
                                            <td class="px-6 py-4 whitespace-nowrap">

                                                <div class="text-sm text-gray-700">
                                                    {{ $entrega->quantidade }}
                                                </div>

                                            </td>


                                            {{-- Data --}}
                                            <td class="px-6 py-4 whitespace-nowrap">

                                                <div class="text-sm text-gray-700">
                                                    {{ $entrega->data_entrega }}
                                                </div>

                                            </td>


                                            {{-- Devolução --}}
                                            <td class="px-6 py-4 whitespace-nowrap">

                                                @if ($entrega->data_devolucao)

                                                    <div class="text-sm text-gray-700">
                                                        {{ $entrega->data_devolucao }}
                                                    </div>

                                                @else

                                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                                        Não devolvido
                                                    </span>

                                                @endif

                                            </td>


                                            {{-- Ações --}}
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm">

                                                <div class="flex justify-end items-center gap-2">


                                                    {{-- Ver --}}
                                                    <a
                                                        href="{{ route('entregas.show', $entrega->id) }}"
                                                        class="text-blue-600 hover:text-blue-900 font-medium"
                                                    >
                                                        Ver
                                                    </a>


                                                    {{-- Editar --}}
                                                    <a
                                                        href="{{ route('entregas.edit', $entrega->id) }}"
                                                        class="text-yellow-600 hover:text-yellow-900 font-medium"
                                                    >
                                                        Editar
                                                    </a>


                                                    {{-- Excluir --}}
                                                    <form
                                                        action="{{ route('entregas.destroy', $entrega->id) }}"
                                                        method="POST"
                                                        class="inline"
                                                    >

                                                        @csrf
                                                        @method('DELETE')

                                                        <button
                                                            type="submit"
                                                            class="text-red-600 hover:text-red-900 font-medium"
                                                            onclick="return confirm('Tem certeza que deseja excluir esta entrega?')"
                                                        >
                                                            Excluir
                                                        </button>

                                                    </form>


                                                </div>

                                            </td>


                                        </tr>

                                    @endforeach


                                </tbody>

                            </table>

                        </div>


                    @else


                        <div class="text-center py-10">

                            <p class="text-gray-500 mb-4">
                                Nenhuma entrega registrada.
                            </p>

                            <a href="{{ route('entregas.create') }}">

                                <x-primary-button>
                                    Cadastrar primeira entrega
                                </x-primary-button>

                            </a>

                        </div>


                    @endif


                </div>

            </div>

        </div>
    </div>

</x-app-layout>