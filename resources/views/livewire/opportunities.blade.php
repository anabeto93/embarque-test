<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">Opportunities</h1>

    <div class="mb-4 flex items-center">
        <label for="perPage" class="mr-2">Items per page:</label>
        <select wire:model="perPage" id="perPage" class="border rounded px-2 py-1">
            @foreach($options as $option)
                <option value="{{ $option }}">{{ $option }}</option>
            @endforeach
        </select>
    </div>

    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <table class="w-full">
            <thead>
                <tr class="bg-gray-100">
                    <th class="px-4 py-2 text-left">ID</th>
                    <th class="px-4 py-2 text-left">Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                    <tr class="border-t">
                        <td class="px-4 py-2">{{ $item->id }}</td>
                        <td class="px-4 py-2">{{ $item->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $items->links() }}
    </div>
</div>