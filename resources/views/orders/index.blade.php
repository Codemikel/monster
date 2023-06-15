<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ordenes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Listado de ordenes") }}

                    <table class="mb-4">
                        @forelse ($orders as $order)
                            <tr class="border-b border-gray-200 text-sm">
                                <td class="px-6 py-4">{{ $order->created_at }}</td>
                                <td class="px-6 py-4"id="">
                                    <form action="{{ route('orders.destroy', $order) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input 
                                            type="submit" 
                                            value="Eliminar" 
                                            class="bg-gray-800 text-white rounded px-4 py-2" onclick="return confirm('¿Seguro?')"
                                        >
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr class="border-b border-gray-200 text-sm">
                                Upps! no hay ninguna publicacion disponible
                            </tr>
                        @endforelse
                    </table>
                    {{ $orders->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
