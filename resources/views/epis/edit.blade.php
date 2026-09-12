<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar EPI') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900">

                    <h3 class="text-lg font-semibold text-gray-800 mb-6">
                        Editar equipamento
                    </h3>

                    <form action="{{ route('epis.update', $epi->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        {{-- Nome --}}
                        <div class="mb-5">
                            <x-input-label for="nome" :value="__('Nome')" />

                            <x-text-input
                                id="nome"
                                name="nome"
                                type="text"
                                class="mt-1 block w-full"
                                :value="old('nome', $epi->nome)"
                                required
                                autofocus
                            />

                            <x-input-error
                                :messages="$errors->get('nome')"
                                class="mt-2"
                            />
                        </div>

                        {{-- Tipo --}}
                        <div class="mb-5">
                            <x-input-label for="tipo" :value="__('Tipo')" />

                            <x-text-input
                                id="tipo"
                                name="tipo"
                                type="text"
                                class="mt-1 block w-full"
                                :value="old('tipo', $epi->tipo)"
                                required
                            />

                            <x-input-error
                                :messages="$errors->get('tipo')"
                                class="mt-2"
                            />
                        </div>

                        {{-- CA --}}
                        <div class="mb-5">
                            <x-input-label
                                for="ca"
                                :value="__('Certificado de Aprovação (CA)')"
                            />

                            <x-text-input
                                id="ca"
                                name="ca"
                                type="text"
                                class="mt-1 block w-full"
                                :value="old('ca', $epi->ca)"
                                required
                            />

                            <x-input-error
                                :messages="$errors->get('ca')"
                                class="mt-2"
                            />
                        </div>

                        {{-- Fabricante --}}
                        <div class="mb-5">
                            <x-input-label
                                for="fabricante"
                                :value="__('Fabricante')"
                            />

                            <x-text-input
                                id="fabricante"
                                name="fabricante"
                                type="text"
                                class="mt-1 block w-full"
                                :value="old('fabricante', $epi->fabricante)"
                                required
                            />

                            <x-input-error
                                :messages="$errors->get('fabricante')"
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
                                min="0"
                                class="mt-1 block w-full"
                                :value="old('quantidade', $epi->quantidade)"
                                required
                            />

                            <x-input-error
                                :messages="$errors->get('quantidade')"
                                class="mt-2"
                            />
                        </div>

                        {{-- Validade --}}
                        <div class="mb-5">
                            <x-input-label
                                for="validade"
                                :value="__('Validade')"
                            />

                            <x-text-input
                                id="validade"
                                name="validade"
                                type="date"
                                class="mt-1 block w-full"
                                :value="old('validade', $epi->validade)"
                                required
                            />

                            <x-input-error
                                :messages="$errors->get('validade')"
                                class="mt-2"
                            />
                        </div>

                        {{-- Status --}}
                        <div class="mb-6">
                            <x-input-label
                                for="status"
                                :value="__('Status')"
                            />

                            <select
                                id="status"
                                name="status"
                                class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                required
                            >
                                <option
                                    value="Ativo"
                                    {{ old('status', $epi->status) === 'Ativo' ? 'selected' : '' }}
                                >
                                    Ativo
                                </option>

                                <option
                                    value="Inativo"
                                    {{ old('status', $epi->status) === 'Inativo' ? 'selected' : '' }}
                                >
                                    Inativo
                                </option>
                            </select>

                            <x-input-error
                                :messages="$errors->get('status')"
                                class="mt-2"
                            />
                        </div>

                        {{-- Botões --}}
                        <div class="flex items-center gap-3">

                            <x-primary-button>
                                Salvar alterações
                            </x-primary-button>

                            <a
                                href="{{ route('epis.index') }}"
                                class="inline-flex items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest text-gray-700 hover:bg-gray-300 focus:bg-gray-300 active:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
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