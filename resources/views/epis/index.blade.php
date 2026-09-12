<x-app-layout>

    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('EPIs') }}
            </h2>

            <a href="{{ route('epis.create') }}">
                <x-primary-button>
                    + Adicionar EPI
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
                                Lista de EPIs
                            </h3>

                            <p class="text-sm text-gray-500 mt-1">
                                Equipamentos de Proteção Individual cadastrados.
                            </p>
                        </div>
                    </div>

                    @if ($epis->count() > 0)

                        <div class="overflow-x-auto">

                            <table class="min-w-full divide-y divide-gray-200">

                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Nome
                                        </th>

                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Tipo
                                        </th>

                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            CA
                                        </th>

                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Fabricante
                                        </th>

                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Quantidade
                                        </th>

                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Validade
                                        </th>

                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Status
                                        </th>

                                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Ações
                                        </th>
                                    </tr>
                                </thead>

                                <tbody class="bg-white divide-y divide-gray-200">

                                    @foreach ($epis as $epi)

                                        <tr class="hover:bg-gray-50">

                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm font-medium text-gray-900">
                                                    {{ $epi->nome }}
                                                </div>
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-700">
                                                    {{ $epi->tipo }}
                                                </div>
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-700">
                                                    {{ $epi->ca }}
                                                </div>
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-700">
                                                    {{ $epi->fabricante }}
                                                </div>
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-700">
                                                    {{ $epi->quantidade }}
                                                </div>
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-700">
                                                    {{ $epi->validade }}
                                                </div>
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap">

                                                @if ($epi->status === 'Ativo')

                                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                        Ativo
                                                    </span>

                                                @else

                                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                                        Inativo
                                                    </span>

                                                @endif

                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm">

                                                <div class="flex justify-end items-center gap-2">

                                                    {{-- Ver --}}
                                                    <a
                                                        href="{{ route('epis.show', $epi->id) }}"
                                                        class="text-blue-600 hover:text-blue-900 font-medium"
                                                    >
                                                        Ver
                                                    </a>

                                                    {{-- Editar --}}
                                                    <a
                                                        href="{{ route('epis.edit', $epi->id) }}"
                                                        class="text-yellow-600 hover:text-yellow-900 font-medium"
                                                    >
                                                        Editar
                                                    </a>

                                                    {{-- Excluir --}}
                                                    @can('delete', $epi)

                                                        <form
                                                            action="{{ route('epis.destroy', $epi->id) }}"
                                                            method="POST"
                                                            class="inline"
                                                        >
                                                            @csrf
                                                            @method('DELETE')

                                                            <button
                                                                type="submit"
                                                                class="text-red-600 hover:text-red-900 font-medium"
                                                                onclick="return confirm('Tem certeza que deseja excluir este EPI?')"
                                                            >
                                                                Excluir
                                                            </button>
                                                        </form>

                                                    @endcan

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
                                Nenhum EPI cadastrado.
                            </p>

                            <a href="{{ route('epis.create') }}">
                                <x-primary-button>
                                    Cadastrar primeiro EPI
                                </x-primary-button>
                            </a>

                        </div>

                    @endif

                </div>

            </div>

        </div>
    </div>

</x-app-layout>