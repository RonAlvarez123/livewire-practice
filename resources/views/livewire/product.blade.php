<div class="container mx-auto py-16 px-8">
    <form class="mb-4" wire:submit="getSearch">
        <input type="text" wire:model.lazy="search" name="search" placeholder="Search for Products">
    </form>
    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="py-2 px-3 bg-gray-100 border-b-2 text-left">ID</th>
                <th class="py-2 px-3 bg-gray-100 border-b-2 text-left">Image</th>
                <th class="py-2 px-3 bg-gray-100 border-b-2 text-left">Description</th>
                <th class="py-2 px-3 bg-gray-100 border-b-2 text-left">Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td class="py-2 px-3 border-b">{{ $product->id }}</td>
                    <td class="py-2 px-3 border-b"><img class="w-16" src="{{ $product->image }}"></td>
                    <td class="py-2 px-3 border-b">{{ $product->description }}</td>
                    <td class="py-2 px-3 border-b">{{ $product->price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $products->links() }}
</div>
