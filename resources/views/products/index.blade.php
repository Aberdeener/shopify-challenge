@extends('layout', ['page' => 'View all Products'])
@section('content')
    <h2 class="title has-text-weight-bold">Products</h2>
    <div class="box">
        <table class="table is-fullwidth is-striped is-hoverable">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Stock</th>
                <th>Collection</th>
                <th>Updated At</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @forelse($products as $product)
                <tr>
                    <th>{{ $product->id }}</th>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>{{ $product->collection->name }}</td>
                    <td>{{ $product->updated_at->format('M jS Y h:ia') }}</td>
                    <td class="has-text-right">
                        <a class="button is-secondary" href="{{ route('products.edit', $product) }}" title="Edit">
                            <span class="icon is-small">
                              <i class="fas fa-pencil"></i>
                            </span>
                        </a>

                        <button class="button is-danger" onclick="deleteProduct({{ $product->id }})" title="Delete">
                            <span class="icon is-small">
                              <i class="fas fa-trash"></i>
                            </span>
                        </button>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="has-text-centered">No products found.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>

    <script>
        const deleteProduct = (id) => {
            if (confirm('Are you sure you want to delete this product?')) {
                fetch('/products/' + id, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                }).then(_ => {
                    window.location.reload();
                });
            }
        }
    </script>
@endsection
