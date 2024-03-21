<x-app-layout>
    <div class="flex flex-col py-12 mx-8 items-between">
        <x-heading title="Clientes" description="Listagem de clientes" btn-label="Cadastrar cliente" :route="route('clients.create')" />
        <div class="w-full overflow-hidden md:rounded-lg">
            <livewire:table resource="Client" :columns="[
                ['label' => 'Nome', 'column' => 'user.name'],
                ['label' => 'Email', 'column' => 'user.email'],
                ['label' => 'Cidade', 'column' => 'address.city'],
                ['label' => 'Estado', 'column' => 'address.state'],
            ]" :eager-loading="['user', 'address']" edit="clients.edit"
                delete="clients.destroy" />
        </div>
    </div>
</x-app-layout>
