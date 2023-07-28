<x-app-layout>
    <div class="flex flex-col py-12 mx-8 items-between">
        <x-heading 
            title="Vendas"
            description="Listagem de vendas"
        />
        <div class="w-full overflow-hidden md:rounded-lg">
            <livewire:table
                resource="Sale"
                :columns="[
                    ['label' => 'Vendedor', 'column' => 'seller.user.name'],
                    ['label' => 'Cliente', 'column' => 'client.user.email'],
                    ['label' => 'Dia da venda', 'column' => 'sold_at'],
                    ['label' => 'Status', 'column' => 'status'],
                    ['label' => 'Total', 'column' => 'total_amount'],
                ]"
            />
        </div>
    </div>
</x-app-layout>