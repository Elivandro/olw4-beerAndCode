<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            Listagem de Clientes
        </h2>
    </x-slot>
    <div class="py-12">
        <table class="mx-auto text-sm text-left text-gray-500 max-w-7xl sm:px-6 lg:px-8 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-4">Name</th>
                    <th scope="col" class="px-6 py-4">Email</th>
                    <th scope="col" class="px-6 py-4">City</th>
                    <th scope="col" class="px-6 py-4">State</th>
                    <th scope="col" class="px-6 py-4"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $client)
                    <tr class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white dark:hover:text-gray-400">
                            {{ $client->user->name }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $client->user->email }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $client->address->city }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $client->address->state }}
                        </td>
                        <td class="px-6 py-4">
                            <form method="post" action="{{ route('clients.destroy', $client->id) }}">
                                @method('DELETE')
                                @csrf
                                <a href="{{ route('clients.edit', $client->id) }}">Editar</a>
                                <button onclick="return confirm('não será possivel recuperar o registro caso seja deletado, tem certeza deletar?')">
                                    Deletar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td>{{ $clients->links() }}</td>
                </tr>
            </tfoot>
        </table>
    </div>
</x-app-layout>