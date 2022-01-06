@foreach($products as $product)
    {{ $product->name }}
    {{ $product->collection->name }}
@endforeach
