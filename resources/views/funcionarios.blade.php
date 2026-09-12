<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Funcionários') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900">

                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-lg font-semibold text-gray-800">
                            Lista de Funcionários
                        </h3>
                    </div>

                    @if($funcionarios->isEmpty())

                        <p class="text-gray-600">
                            Nenhum funcionário cadastrado.
                        </p>

                    @else

                        <div class="overflow-x-auto">

                            <table class="min-w-full divide-y divide-gray-200">

                                <thead class="bg-gray-50">
                                    <tr>

                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Nome
                                        </th>

                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            CPF
                                        </th>

                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Cargo
                                        </th>

                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Setor
                                        </th>

                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Data de admissão
                                        </th>

                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Status
                                        </th>

                                    </tr>
                                </thead>

                                <tbody class="bg-white divide-y divide-gray-200">

                                    @foreach($funcionarios as $funcionario)

                                        <tr class="hover:bg-gray-50">

                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                {{ $funcionario->nome }}
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                                {{ $funcionario->cpf }}
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                                {{ $funcionario->cargo }}
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                                {{ $funcionario->setor }}
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                                {{ $funcionario->data_admissao }}
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap">

                                                <span class="px-2 py-1 rounded text-xs font-semibold
                                                    {{ $funcionario->status === 'Ativo'
                                                        ? 'bg-green-100 text-green-800'
                                                        : 'bg-red-100 text-red-800' }}">
                                                    {{ $funcionario->status }}
                                                </span>

                                            </td>

                                        </tr>

                                    @endforeach

                                </tbody>

                            </table>

                        </div>

                    @endif

                </div>

            </div>

        </div>
    </div>

</x-app-layout>