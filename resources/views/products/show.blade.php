@extends('layout', ['page' => 'View Product'])
@section('content')
    <h2 class="title has-text-weight-bold">View Product</h2>
    <h4 class="subtitle"><strong>Product:</strong> {{ $product->name }} <a href="{{ route('products.edit', $product) }}">(Edit)</a></h4>
    <p><strong>Collection:</strong> <a href="{{ route('collections.show', $product->collection) }}">{{ $product->collection->name }}</a></p>
@endsection
