@extends('layout', ['page' => 'View Product'])
@section('content')
    {{ $product->name }}
    {{ $product->collection->name }}
@endsection
