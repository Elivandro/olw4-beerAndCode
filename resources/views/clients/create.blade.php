<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            Listagem de vendas
        </h2>
    </x-slot>
    <div class="flex justify-center py-12">
        <form action="{{ route('clients.store') }}" method="post">
            @csrf
            @method('POST')
            <div class="flex flex-col w-full max-w-xl p-12 border-2 border-gray-600 rounded-lg">
                <div class="flex flex-col flex-1 mb-4">
                    <x-input-label for="name">Nome</x-input-label>
                    <x-text-input name="name" type="text" id="name" placeholder="nome do cliente" />
                </div>
                <div class="flex flex-col flex-1 mb-4">
                    <x-input-label for="email">Email</x-input-label>
                    <x-text-input name="email" type="email" id="email" placeholder="email do cliente" />
                </div>
                <div class="flex flex-col flex-1 mb-4">
                    <x-input-label for="address">Endereço</x-input-label>
                    <x-select />
                </div>
                <x-secondary-button type="submit" class="ml-auto max-w-20">
                    Salvar
                </x-secondary-button>
            </div>
        </form>
    </div>
</x-app-layout>
