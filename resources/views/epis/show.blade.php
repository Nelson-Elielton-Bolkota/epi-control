<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalhes do EPI') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900">

                    <h3 class="text-2xl font-bold text-gray-800 mb-6">
                        {{ $epi->nome }}
                    </h3>

                    <div class="space-y-4">

                        <div>
                            <span class="font-semibold text-gray-700">
                                Tipo:
                            </span>
                            {{ $epi->tipo }}
                        </div>

                        <div>
                            <span class="font-semibold text-gray-700">
                                Certificado de Aprovação (CA):
                            </span>
                            {{ $epi->ca }}
                        </div>

                        <div>
                            <span class="font-semibold text-gray-700">
                                Fabricante:
                            </span>
                            {{ $epi->fabricante }}
                        </div>

                        <div>
                            <span class="font-semibold text-gray-700">
                                Quantidade:
                            </span>
                            {{ $epi->quantidade }}
                        </div>

                        <div>
                            <span class="font-semibold text-gray-700">
                                Validade:
                            </span>
                            {{ $epi->validade }}
                        </div>

                        <div>
                            <span class="font-semibold text-gray-700">
                                Status:
                            </span>

                            <span class="ml-2 px-2 py-1 rounded text-sm
                                {{ $epi->status === 'Ativo'
                                    ? 'bg-green-100 text-green-800'
                                    : 'bg-red-100 text-red-800' }}">
                                {{ $epi->status }}
                            </span>
                        </div>

                    </div>

                    <div class="flex items-center gap-3 mt-8">

                        <a
                            href="{{ route('epis.index') }}"
                            class="inline-flex items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
                        >
                            Voltar
                        </a>

                        @can('delete', $epi)
                            <a
                                href="{{ route('epis.edit', $epi->id) }}"
                                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
                            >
                                Editar
                            </a>
                        @endcan

                    </div>

                </div>

            </div>

        </div>
    </div>

</x-app-layout>