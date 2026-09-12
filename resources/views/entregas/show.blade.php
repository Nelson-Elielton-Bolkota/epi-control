<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalhes da Entrega') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900">

                    <h3 class="text-2xl font-bold text-gray-800 mb-6">
                        Entrega #{{ $entrega->id }}
                    </h3>

                    <div class="space-y-4">

                        <div>
                            <span class="font-semibold text-gray-700">
                                Funcionário:
                            </span>

                            {{ $entrega->funcionario->nome }}
                        </div>

                        <div>
                            <span class="font-semibold text-gray-700">
                                EPI:
                            </span>

                            {{ $entrega->epi->nome }}
                        </div>

                        <div>
                            <span class="font-semibold text-gray-700">
                                Tipo:
                            </span>

                            {{ $entrega->epi->tipo }}
                        </div>

                        <div>
                            <span class="font-semibold text-gray-700">
                                Quantidade:
                            </span>

                            {{ $entrega->quantidade }}
                        </div>

                        <div>
                            <span class="font-semibold text-gray-700">
                                Data da entrega:
                            </span>

                            {{ $entrega->data_entrega }}
                        </div>

                        <div>
                            <span class="font-semibold text-gray-700">
                                Data da devolução:
                            </span>

                            @if ($entrega->data_devolucao)
                                {{ $entrega->data_devolucao }}
                            @else
                                <span class="text-gray-400">
                                    Não devolvido
                                </span>
                            @endif

                        </div>

                        <div>
                            <span class="font-semibold text-gray-700">
                                Observação:
                            </span>

                            {{ $entrega->observacao ?? 'Nenhuma' }}
                        </div>

                    </div>

                    <div class="flex items-center gap-3 mt-8">

                        <a
                            href="{{ route('entregas.index') }}"
                            class="inline-flex items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest hover:bg-gray-300 focus:bg-gray-300 active:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
                        >
                            Voltar
                        </a>

                        <a
                            href="{{ route('entregas.edit', $entrega->id) }}"
                            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
                        >
                            Editar
                        </a>

                    </div>

                </div>

            </div>

        </div>
    </div>

</x-app-layout>