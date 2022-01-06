@extends('layout', ['page' => 'View Collection'])
@section('content')
    <h2 class="title has-text-weight-bold">View Collection</h2>
    <h4 class="subtitle"><strong>Collection:</strong> {{ $collection->name }} <a href="{{ route('collections.edit', $collection) }}">(Edit)</a></h4>
    <p><strong>Product Count:</strong> {{ $collection->product_count() }}</p>

    @if($collection->product_count() > 0)
        <p><strong>Products</strong></p>
        <ul>
            @foreach($collection->products() as $product)
                <li><strong>-</strong> <a href="{{ route('products.show', $product) }}">{{ $product->name }}</a></li>
            @endforeach
        </ul>
    @endif

@endsection
