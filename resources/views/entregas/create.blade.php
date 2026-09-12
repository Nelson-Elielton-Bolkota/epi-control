<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Registrar Entrega') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900">

                    <h3 class="text-lg font-semibold text-gray-800 mb-6">
                        Registrar nova entrega
                    </h3>

                    <form action="{{ route('entregas.store') }}" method="POST">

                        @csrf

                        {{-- Funcionário --}}
                        <div class="mb-5">

                            <x-input-label
                                for="funcionario_id"
                                :value="__('Funcionário')"
                            />

                            <select
                                name="funcionario_id"
                                id="funcionario_id"
                                class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                required
                            >

                                <option value="">
                                    Selecione um funcionário
                                </option>

                                @foreach ($funcionarios as $funcionario)

                                    <option
                                        value="{{ $funcionario->id }}"
                                        {{ old('funcionario_id') == $funcionario->id ? 'selected' : '' }}
                                    >
                                        {{ $funcionario->nome }}
                                    </option>

                                @endforeach

                            </select>

                            <x-input-error
                                :messages="$errors->get('funcionario_id')"
                                class="mt-2"
                            />

                        </div>


                        {{-- EPI --}}
                        <div class="mb-5">

                            <x-input-label
                                for="epi_id"
                                :value="__('EPI')"
                            />

                            <select
                                name="epi_id"
                                id="epi_id"
                                class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                required
                            >

                                <option value="">
                                    Selecione um EPI
                                </option>

                                @foreach ($epis as $epi)

                                    <option
                                        value="{{ $epi->id }}"
                                        {{ old('epi_id') == $epi->id ? 'selected' : '' }}
                                    >
                                        {{ $epi->nome }} - Estoque: {{ $epi->quantidade }}
                                    </option>

                                @endforeach

                            </select>

                            <x-input-error
                                :messages="$errors->get('epi_id')"
                                class="mt-2"
                            />

                        </div>


                        {{-- Quantidade --}}
                        <div class="mb-5">

                            <x-input-label
                                for="quantidade"
                                :value="__('Quantidade')"
                            />

                            <x-text-input
                                id="quantidade"
                                name="quantidade"
                                type="number"
                                min="1"
                                class="mt-1 block w-full"
                                :value="old('quantidade')"
                                required
                            />

                            <x-input-error
                                :messages="$errors->get('quantidade')"
                                class="mt-2"
                            />

                        </div>


                        {{-- Data da entrega --}}
                        <div class="mb-5">

                            <x-input-label
                                for="data_entrega"
                                :value="__('Data da entrega')"
                            />

                            <x-text-input
                                id="data_entrega"
                                name="data_entrega"
                                type="date"
                                class="mt-1 block w-full"
                                :value="old('data_entrega', date('Y-m-d'))"
                                required
                            />

                            <x-input-error
                                :messages="$errors->get('data_entrega')"
                                class="mt-2"
                            />

                        </div>


                        {{-- Data da devolução --}}
                        <div class="mb-5">

                            <x-input-label
                                for="data_devolucao"
                                :value="__('Data da devolução')"
                            />

                            <x-text-input
                                id="data_devolucao"
                                name="data_devolucao"
                                type="date"
                                class="mt-1 block w-full"
                                :value="old('data_devolucao')"
                            />

                            <x-input-error
                                :messages="$errors->get('data_devolucao')"
                                class="mt-2"
                            />

                        </div>


                        {{-- Observação --}}
                        <div class="mb-6">

                            <x-input-label
                                for="observacao"
                                :value="__('Observação')"
                            />

                            <textarea
                                name="observacao"
                                id="observacao"
                                rows="3"
                                class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                            >{{ old('observacao') }}</textarea>

                            <x-input-error
                                :messages="$errors->get('observacao')"
                                class="mt-2"
                            />

                        </div>


                        {{-- Botões --}}
                        <div class="flex items-center gap-3">

                            <x-primary-button>
                                Registrar entrega
                            </x-primary-button>

                            <a
                                href="{{ route('entregas.index') }}"
                                class="inline-flex items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest hover:bg-gray-300 focus:bg-gray-300 active:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
                            >
                                Voltar
                            </a>

                        </div>

                    </form>

                </div>

            </div>

        </div>
    </div>

</x-app-layout>