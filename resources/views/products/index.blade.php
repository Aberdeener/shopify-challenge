@extends('layout', ['page' => 'View all Products'])
@section('content')
<div class="box">
    <table class="table is-fullwidth is-striped is-hoverable">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Collection</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <th>{{ $product->id }}</th>
                <td>{{ $product->name }}</td>
                <td>{{ $product->collection->name }}</td>
                <td class="has-text-right">
                    <a class="button is-secondary" href="{{ route('products.edit', $product) }}" title="Edit">
                    <span class="icon is-small">
                      <i class="fas fa-pencil"></i>
                    </span>
                    </a>

                    <button class="button is-danger" title="Delete">
                    <span class="icon is-small">
                      <i class="fas fa-trash"></i>
                    </span>
                    </button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
